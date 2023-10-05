<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\Invoice;
use App\Models\InvoiceProduct;
use App\Models\Product;
use App\Models\Project;
use App\Models\ReceiverPerson;
use App\Models\Region;
use App\Models\SenderPerson;
use Carbon\Carbon;
use Carbon\Traits\Date;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Project $project)
    {
//        dd($project->id);
        $passport = 'FA1391255';

//        $receiverPeopleWithTotalPrice = ReceiverPerson::with('invoices.invoiceProducts')
//            ->get()
//            ->map(function ($receiverPeople) {
//                $totalPrice = $receiverPeople->invoices->flatMap(function ($invoice) {
//                    return $invoice->invoiceProducts->pluck('price');
//                })->sum();
//
//                return [
//                    'full_name' => $receiverPeople->full_name,
//                    'passport' => $receiverPeople->passport,
//                    'total_price' => $totalPrice,
//                ];
//            });
        $threeMonthsAgo = Carbon::now()->subMonths(3);

//        $receiverPeopleWithTotalPrice = ReceiverPerson::with(['invoices.invoiceProducts' => function ($query) use ($threeMonthsAgo) {
//            $query->where('created_at', '>=', $threeMonthsAgo);
//        }])
//            ->get()
//            ->map(function ($receiverPeople) {
//                $totalPrice = $receiverPeople->invoices->flatMap(function ($invoice) {
//                    return $invoice->invoiceProducts->pluck('price');
//                })->sum();
//
//                return [
//                    'full_name' => $receiverPeople->full_name,
//                    'passport' => $receiverPeople->passport,
//                    'total_price' => $totalPrice,
//                ];
//            });

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


//        dd($totalPrice);
        $projects = Project::all();
        $drivers = Driver::all();
        $invoices = Invoice::where('project_id', '=', $project->id)->orderBy('isCompleted')->orderBy('number', 'asc')->paginate(400);

        return view('admin.invoices.list', compact('project', 'projects', 'invoices', 'drivers', 'receiverPeopleWithTotalPrice'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Project $project)
    {
        $regions = Region::all();
//        dd($regions);
        $products = Product::all();
        return view('admin.invoices.index', compact('regions', 'products', 'project'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Project $project)
    {
//        dd($project->id);
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
//            'quantity' => 'required',
//            'quantity.*' => 'required|array'
        ]);
        $cleanedPhoneNumber = preg_replace('/[^0-9]/', '', $request->receiver_phone);

        // Create a new Invoice instance and fill it with the validated data
        $invoice = new Invoice($validatedData);

        $invoice->project_id = $project->id;
        $invoice->ready_date = Carbon::now();
        $invoice->receiver_phone = $cleanedPhoneNumber;
        $invoice->receiver_passport=strtoupper($request->receiver_passport);
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

         return redirect()->route('admin.invoice.index', ['project' => $project->id]);
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
        // Validate the incoming request data
        $validatedData = $request->validate([
            'number' => 'required',
            'sender_fullname' => 'required|string',
            'receiver_fullname' => 'required|string',
            'receiver_passport' => 'required|string',
            'receiver_date' => 'required|date',
            'receiver_phone' => 'required|string',
            'address_id' => 'required|numeric',
//            'ready_date' => 'required|date',
            'weight' => 'required'
        ]);

        // Update the existing Invoice instance with the validated data
        if ($request->weight!=null)
        {
            $invoice->isCompleted = 1;
        }
        else
        {
            $invoice->isCompleted = 0;
        }
        $invoice->update($validatedData);

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

        return redirect()->route('admin.invoice.index', ['project' => $project]);
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

}
