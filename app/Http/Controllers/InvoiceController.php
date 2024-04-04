<?php

namespace App\Http\Controllers;

use App\Models\Admin\DataLog;
use App\Models\Driver;
use App\Models\Invoice;
use App\Models\InvoiceProduct;
use App\Models\Product;
use App\Models\ProductList;
use App\Models\Project;
use App\Models\ReceiverPerson;
use App\Models\Region;
use App\Models\SenderPerson;
use Carbon\Carbon;
use Carbon\Traits\Date;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Termwind\Components\Dd;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Project $project)
    {
        $project_id = $project->id;

        $threeMonthsAgo = Carbon::now()->subMonths(3);

        $receiverPeopleWithTotalPrice = ReceiverPerson::with(['invoices' => function ($query) use ($threeMonthsAgo) {
            $query->where('created_at', '>=', $threeMonthsAgo);
        }, 'invoices.invoiceProducts'])
            ->get()
            ->map(function ($receiverPeople) {
                $totalPrice = $receiverPeople->invoices->flatMap(function ($invoice) {
                    return $invoice->invoiceProducts->pluck('price');
                })->sum();

                return [
                    'full_name' => $receiverPeople->full_name,
                    'passport' => $receiverPeople->passport,
                    'total_price' => $totalPrice,
                ];
            });
//        dd($receiverPeopleWithTotalPrice);

        $projects = Project::all();
        $drivers = Driver::all();
        $invoices = Invoice::where('project_id', '=', $project->id)->orderBy('isCompleted')->orderBy('number', 'asc')->paginate(1000);

        return view('admin.invoices.list', compact(
            'project', 'project_id', 'projects',
            'invoices', 'drivers', 'receiverPeopleWithTotalPrice'
        ));
    }


//    public function index(Project $project)
//    {
//        $threeMonthsAgo = Carbon::now()->subMonths(3);
//
//        // Retrieve receiver people with their invoices within the last three months
//        $receiverPeopleWithTotalPrice = ReceiverPerson::with(['invoices' => function ($query) use ($threeMonthsAgo) {
//            $query->where('created_at', '>=', $threeMonthsAgo);
//        }, 'invoices.invoiceProducts'])
//            ->get()
//            ->map(function ($receiverPerson) {
//                $totalPrice = $receiverPerson->invoices->flatMap(function ($invoice) {
//                    return $invoice->invoiceProducts->pluck('price');
//                })->sum();
//
//                return [
//                    'full_name' => $receiverPerson->full_name,
//                    'passport' => $receiverPerson->passport,
//                    'total_price' => $totalPrice,
//                ];
//            });
//
//        // Retrieve all projects and drivers (if needed)
//        $projects = Project::all();
//        $drivers = Driver::all();
//
//        // Retrieve invoices for the given project
//        $invoices = $project->invoices()
//            ->orderBy('isCompleted')
//            ->orderBy('number', 'asc')
//            ->paginate(1000);
//
//        return view('admin.invoices.list', compact(
//            'project', 'projects', 'invoices', 'drivers', 'receiverPeopleWithTotalPrice'
//        ));
//    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Project $project)
    {
        $last_invoice = Invoice::latest()->first();
        $regions = Region::all();
//        dd($regions);
        $products = Product::all();
        return view('admin.invoices.index', compact('regions', 'products', 'project', 'last_invoice'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Project $project)
    {
//        dd($request);
        // Validate the incoming request data
        $validatedData = $request->validate([
            'number' => 'required|numeric',
            'sender_fullname' => 'required|string',
            'receiver_fullname' => 'required|string',
            'receiver_passport' => 'required|string',
            'receiver_date' => 'required',
            'receiver_phone' => 'required|string',
            'address_id' => 'required|numeric',
//            'ready_date' => 'required|date',
            'weight' => 'required',
            'product_id' => 'required|array',
            'product_id.*' => 'required|numeric',
            'quantity' => 'required|array',
            'quantity.*' => 'required|numeric',
            'price' => 'required|array',
            'price.*' => 'required|numeric',
//            'quantity' => 'required',
//            'quantity.*' => 'required|array'
//            'product_id' => 'required',
//            'quantity' => 'required',
//            'price' => 'required',
        ]);
        $cleanedPhoneNumber = preg_replace('/[^0-9]/', '', $request->receiver_phone);

        // Create a new Invoice instance and fill it with the validated data
        $invoice = new Invoice();

        $invoice->number = $validatedData['number'];
        $invoice->sender_fullname = Str::title(Str::words($validatedData['sender_fullname'], 2, ''));
        $invoice->receiver_fullname = Str::title(Str::words($validatedData['receiver_fullname'], 2, ''));
        $invoice->address_id = $validatedData['address_id'];
        $invoice->weight = $validatedData['weight'];
        $invoice->project_id = $project->id;
        $invoice->ready_date = Carbon::now();
        $invoice->receiver_phone = $cleanedPhoneNumber;
        $invoice->receiver_passport=strtoupper($request->receiver_passport);

        if ($invoice->isCompleted==1 and $request->weight!=null)
        {
            DataLog::create([
                'user_id' => Auth::id(),
                'action_type' => 'update', // or 'update'
                'data_type' => 'invoices',
            ]);
        }
        if ($request->weight!=null)
        {
            $invoice->isCompleted = 1;
        }
        else
        {
            $invoice->isCompleted = 0;
        }
//        dd($invoice);
        // Save the Invoice to the database
        $invoice->save();

        // Loop through the product data and associate them with the Invoice
        foreach ($request->input('product_id') as $key => $productId) {
            $invoiceProduct = new InvoiceProduct([
                'product_id' => $productId,
                'quantity' => $request->input('quantity')[$key],
                'price' => $request->input('price')[$key],
            ]);

            // Associate the InvoiceProduct with the Invoice
            $invoice->invoiceProducts()->save($invoiceProduct);
        }

        DataLog::create([
            'user_id' => Auth::id(),
            'action_type' => 'save', // or 'update'
            'data_type' => 'invoices',
        ]);
        return redirect()->route('admin.invoice.index', ['project' => $project->id]);
    }

    public function copyListProductsToInvoice(Request $request)
    {
//        dd($request);
        // Fetch data from list-products table (adjust the model and column names accordingly)
        $listProductsData = ProductList::all();

        // You can process the data as needed before returning it to the frontend
        return response()->json($listProductsData);
    }
    /**
     * Display the specified resource.
     */
    public function show(Invoice $invoice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Invoice $invoice, Project $project)
    {
        $regions = Region::all();
        $products = Product::all();
        $invoice_products = InvoiceProduct::where('invoice_id','=',$invoice->id)->get();

        return view('admin.invoices.edit',
            compact('project','invoice', 'regions', 'products','invoice_products'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Invoice $invoice , Project $project)
    {
//        dd($request);
        $validatedData = $request->validate([
            'number' => 'required',
            'sender_fullname' => 'required|string',
            'receiver_fullname' => 'required|string',
            'receiver_passport' => 'required|string',
            'receiver_date' => 'required|date',
            'receiver_phone' => 'required|string',
            'address_id' => 'required|numeric',
//            'ready_date' => 'required|date',
            'weight' => 'required',
//            'product_id' => 'required|array',
//            'product_id.*' => 'required|numeric',
//            'quantity' => 'required|array',
//            'quantity.*' => 'required|numeric',
//            'price' => 'required|array',
//            'price.*' => 'required|numeric',
        ]);
        if ($invoice->isCompleted==0 and $request->weight!=null)
        {
            DataLog::create([
                'user_id' => Auth::id(),
                'action_type' => 'update', // or 'update'
                'data_type' => 'invoices',
            ]);
        }
        // Update the existing Invoice instance with the validated data
        if ($request->weight!=null)
        {
            $invoice->isCompleted = 1;
        }
        else
        {
            $invoice->isCompleted = 0;
        }
//        dd($invoice);
        $validatedData['sender_fullname'] = Str::title(Str::words($validatedData['sender_fullname'], 2, ''));
        $validatedData['receiver_fullname'] = Str::title(Str::words($validatedData['receiver_fullname'], 2, ''));
        $invoice->update($validatedData);
//        \dd($invoice);
        // Update the associated invoiceProducts
        $invoice->invoiceProducts()->delete(); // Remove existing associated products

        // Loop through the product data and associate them with the Invoice
        foreach ($request->input('product_id') as $key => $productId) {
            $invoiceProduct = new InvoiceProduct([
                'product_id' => $productId,
                'quantity' => $request->input('quantity')[$key],
                'price' => $request->input('price')[$key],
            ]);

            // Associate the InvoiceProduct with the Invoice
            $invoice->invoiceProducts()->save($invoiceProduct);
        }

        return redirect()->route('admin.invoice.index', ['project' => $project->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Invoice $invoice)
    {
        $projectId = $invoice->project_id;
        $invoice->delete();
        return redirect()->route('admin.invoice.index', ['project' => $projectId]);
    }


    public function importPassports(Project $project, Request $request)
    {
//        $receiverPeople = ReceiverPerson::where('driver_id', $request->driver_id)
//            ->take($request->passport_number)->get();
//        $senderPeople = SenderPerson::take($request->passport_number)->get();
        $receiverPeople = ReceiverPerson::where('driver_id', $request->driver_id)
            ->inRandomOrder()
            ->take($request->passport_number)
            ->get();

        $senderPeople = SenderPerson::inRandomOrder()
            ->take($request->passport_number)
            ->get();

        $invoice = Invoice::where('project_id', '=', $project->id)->orderBy('id', 'desc')->first();

        if($invoice && $invoice->number != null){
            // agar invoice bolsa
            $number = $invoice->number;
//        dd($number);
//        $number = 1;
//        dd($number);
            // Create invoices based on the retrieved receiver_people data
            foreach ($receiverPeople as $key => $receiverPerson)
            {
                // agar invoice bolsa
                $number++;
                $formattedNumber = sprintf('%04d', $number);
//            dd($formattedNumber);
                $invoiceData = [
                    'number' => $formattedNumber, // Set the invoice number to the passport
                    'sender_fullname' => $senderPeople[$key]->full_name, // You can set these values as per your requirements
                    'receiver_fullname' => $receiverPerson->full_name,
                    'receiver_passport' => $receiverPerson->passport,
                    'receiver_date' => $receiverPerson->birthdate,
                    'receiver_phone' => $receiverPerson->phone,
                    'address_id' => $receiverPerson->address_id,
                    'project_id' => $project->id,
                    'isCompleted' =>0,
                ];
                // Create a new invoice record
                Invoice::create($invoiceData);
//            $number++;
            }
        }
        else{
            // agar invoice bolsa
//            $number = $invoice->number;
//        dd($number);
            $number = 1;
//        dd($number);
            // Create invoices based on the retrieved receiver_people data
            foreach ($receiverPeople as $key => $receiverPerson)
            {
                // agar invoice bolsa
//                $number++;
                $formattedNumber = sprintf('%04d', $number);
//            dd($formattedNumber);
                $invoiceData = [
                    'number' => $formattedNumber, // Set the invoice number to the passport
                    'sender_fullname' => $senderPeople[$key]->full_name, // You can set these values as per your requirements
                    'receiver_fullname' => $receiverPerson->full_name,
                    'receiver_passport' => $receiverPerson->passport,
                    'receiver_date' => $receiverPerson->birthdate,
                    'receiver_phone' => $receiverPerson->phone,
                    'address_id' => $receiverPerson->address_id,
                    'project_id' => $project->id,
                    'isCompleted' =>0,
                ];
                // Create a new invoice record
                Invoice::create($invoiceData);
                $number++;
            }
        }
        return redirect()->route('admin.invoice.index', ['project' => $project->id]);
    }


    public function moveInvoices(Request $request)
    {
//        dd($request->all());

        // Validate the form data
        $request->validate([
            'project_id' => 'required|exists:projects,id',
            'selected_ids' => 'required|array',
        ]);

//        dd($request->all());
        // Get the selected project ID and invoice IDs from the form
        $projectID = $request->input('project_id');
        $selectedInvoiceIDs = $request->input('selected_ids');

        // Update the invoices with the new project ID
        Invoice::whereIn('id', $selectedInvoiceIDs)->update(['project_id' => $projectID]);

        // Redirect back with a success message or handle the response as needed
        return redirect()->back()->with('success', 'Invoislar utkazildi.');
    }

//    public function copyInvoices(Request $request)
//    {
////        dd($request->all());
//
//        $request->validate([
//            'project_id' => 'required|exists:projects,id',
//            'selected_invoice' => 'required',
//            'editable_invoices' => 'required',
//        ]);
//
//        $projectID = $request->input('project_id');
//        $selectedInvoiceIDs = $request->input('selected_ids');
////        $invoices = explode(',', $request->editable_invoices);
//        $foundInvoice = Invoice::where('project_id', $projectID)->first();
//        $invoices = preg_split('/[\s,]+/', $request->editable_invoices);
//
//        foreach ($invoices as $invoice)
//        {
//            $editableInvoice = Invoice::where('number', $invoice)->first();
//            $editableInvoice->sender_fullname = $foundInvoice->sender_fullname;
//            $editableInvoice->receiver_fullname = $foundInvoice->receiver_fullname;
//            $editableInvoice->receiver_passport = $foundInvoice->receiver_passport;
//            $editableInvoice->receiver_date = $foundInvoice->receiver_date;
//            $editableInvoice->receiver_phone = $foundInvoice->receiver_phone;
//            $editableInvoice->address_id = $foundInvoice->address_id;
//            $editableInvoice->project_id = $foundInvoice->project_id;
//            $editableInvoice->weight = null;
//            $editableInvoice->isCompleted = false;
//
////            \dd($editableInvoice);
//            $editableInvoice->update();
//
//        }
//
//        return redirect()->back()->with('success', 'Invoislar utkazildi.');
//    }

    public function copyInvoices(Request $request)
    {
        $request->validate([
            'project_id' => 'required|exists:projects,id',
            'selected_invoice' => 'required',
            'editable_invoices' => 'required',
        ]);

        $projectID = $request->input('project_id');
        $selectedInvoiceNumber = $request->input('selected_invoice');

        $foundInvoice = Invoice::where('project_id', $projectID)
            ->where('number',$selectedInvoiceNumber )
            ->first();
//        \dd($foundInvoice);
        if (!$foundInvoice) {
            return redirect()->back()->with('error', 'Project not found.');
        }

        $invoices = preg_split('/[\s,]+/', $request->editable_invoices);

//        \dd($invoices);
        foreach ($invoices as $invoice) {
            $editableInvoice = Invoice::where('number', $invoice)
                ->where('project_id', $projectID)
                ->first();
            if ($editableInvoice) {
                $editableInvoice->update([
                    'sender_fullname' => $foundInvoice->sender_fullname,
                    'receiver_fullname' => $foundInvoice->receiver_fullname,
                    'receiver_passport' => $foundInvoice->receiver_passport,
                    'receiver_date' => $foundInvoice->receiver_date,
                    'receiver_phone' => $foundInvoice->receiver_phone,
                    'address_id' => $foundInvoice->address_id,
                    'project_id' => $foundInvoice->project_id,
                    'weight' => null,
                    'isCompleted' => false,
                ]);
            }else {
                Invoice::create([
                    'number' => $invoice,
                    'sender_fullname' => $foundInvoice->sender_fullname,
                    'receiver_fullname' => $foundInvoice->receiver_fullname,
                    'receiver_passport' => $foundInvoice->receiver_passport,
                    'receiver_date' => $foundInvoice->receiver_date,
                    'receiver_phone' => $foundInvoice->receiver_phone,
                    'address_id' => $foundInvoice->address_id,
                    'project_id' => $foundInvoice->project_id,
                    'weight' => null,
                    'isCompleted' => false,
                ]);
            }
        }

        return redirect()->back();
    }


}
