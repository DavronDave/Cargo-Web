<?php

namespace App\Http\Controllers;

use App\Models\CompanyContract;
use App\Models\Country;
use App\Models\Invoice;
use App\Models\InvoiceProduct;
use App\Models\Project;
use Barryvdh\DomPDF\Facade\Pdf;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class PDFController extends Controller
{
    public function invoice()
    {
//        dd('aaa');
        return view('admin.pdf.invoice');
    }
    public function PDFInvoice(Invoice $invoice)
    {
        $invoice = Invoice::with('invoiceProducts', 'address', 'project')->where('id','=',$invoice->id)->first();
        $invoice_products = InvoiceProduct::with('invoice', 'product')->where('invoice_id' , '=', $invoice->id)->get();

        $loopLimit = 15;
        $totalQuantity = $invoice_products->sum('quantity');
        $totalPrice = $invoice_products->sum('price');
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isPhpEnabled', true);
        $options->set('defaultFont', 'Arial'); // Use a font that supports the characters you need
        PDF::setOptions(['dpi' => 150, 'isHtml5ParserEnabled' => true, 'defaultFont' => 'sans-serif']);
        $pdf = new Dompdf($options);
        $pdf->setOptions($options);
        $pdf->setPaper('A4');
        $pdf->set_option('isPhpEnabled', true);

//        $view = view('admin.pdf.invoice')->with('invoice', $invoice)->with('invoice_products', $invoice_products);
        $view = view('admin.pdf.invoice',
            compact('invoice_products', 'invoice', 'loopLimit','totalQuantity', 'totalPrice'));
        $pdf->loadHtml($view);

        $pdf->render();

        return $pdf->stream('Invoice.pdf');
    }

    public function tnved()
    {
        return view('admin.pdf.proforma');
    }

    public function PDFTnved(Project $project)
    {
//        dd($project->id);
        $project = Project::with([
            'invoices.invoiceProducts.product.category',
        ])->find($project->id);

        // Initialize arrays to store aggregated data
        $categoriesData = [];
        $overallQuantities = 0;
//        $overallWeights = 0;
        $overallPrices = 0;

        $overallWeights = Invoice::where('project_id', $project->id)
            ->sum('weight');

        $overallInvoices = 0;
        // Loop through the project's invoices and their related invoice products
        foreach ($project->invoices as $invoice) {
            foreach ($invoice->invoiceProducts as $invoiceProduct) {
                $product = $invoiceProduct->product;
                $category = $product->category;

                // Check if the category already exists in the data array
                if (array_key_exists($category->id, $categoriesData)) {
                    // Increment quantities, weights, and prices for the existing category
                    $categoriesData[$category->id]['quantity'] += $invoiceProduct->quantity;
//                    $categoriesData[$category->id]['weight'] += $invoice->weight;
                    $categoriesData[$category->id]['price'] += ($invoiceProduct->price);
                } else {
                    // Create a new entry for the category in the data array
                    $categoriesData[$category->id] = [
                        'name' => $category->name,
                        'code' => $category->code,
                        'quantity' => $invoiceProduct->quantity,
                        'weight' => $invoice->weight,
                        'price' => ($invoiceProduct->price),
                    ];
                }

                // Update overall quantities, weights, and prices
                $overallQuantities += $invoiceProduct->quantity;
//                $overallWeights += $invoice->weight;
                $overallPrices += ($invoiceProduct->price);
            }
            $overallInvoices++;
        }

        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isPhpEnabled', true);
        $options->set('defaultFont', 'Arial'); // Use a font that supports the characters you need
        PDF::setOptions(['dpi' => 150, 'isHtml5ParserEnabled' => true, 'defaultFont' => 'sans-serif']);
        $pdf = new Dompdf($options);
        $pdf->setOptions($options);
        $pdf->setPaper('A4');
        $pdf->set_option('isPhpEnabled', true);

//        $view = view('admin.pdf.invoice')->with('invoice', $invoice)->with('invoice_products', $invoice_products);
        $view = view('admin.pdf.tnved',
            compact('project', 'categoriesData',
                'overallQuantities', 'overallWeights',
                'overallPrices', 'overallInvoices'));
        $pdf->loadHtml($view);

        $pdf->render();

        return $pdf->stream('Tnved.pdf');
    }

    public function PDFProforma(Project $project)
    {
//        dd($project);
//        $project = DB::table('projects')
//            ->select('projects.code as project_code', 'projects.ready_date', 'projects.status')
//            ->join('company_contracts', 'projects.company_contract_id', '=', 'company_contracts.id')
//            ->where('projects.id', $project->id)
//            ->first();

        $senderCompany = $project->sender; // Assuming you have relationships set up in your models.
        $receiverCompany = $project->receiver;

        // Fetch the company contract
        $companyContract = CompanyContract::where('sender_id', $project->sender_id)
            ->where('receiver_id', $project->receiver_id)
//            ->where('from_date', '<=', $project->ready_date)
            ->orderBy('from_date', 'desc')
            ->first();



        $invoices = Invoice::where('project_id', $project->id)->get();

        $overallInvoices = count($invoices);

        // Calculate overall prices and weights
        $overallPrices = $invoices->sum(function ($invoice) {
            return $invoice->invoiceProducts->sum('price');
        });

        $overallWeights = Invoice::where('project_id', $project->id)
            ->sum('weight');


        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isPhpEnabled', true);
        $options->set('defaultFont', 'Arial'); // Use a font that supports the characters you need
        PDF::setOptions(['dpi' => 150, 'isHtml5ParserEnabled' => true, 'defaultFont' => 'sans-serif']);
        $pdf = new Dompdf($options);
        $pdf->setOptions($options);
        $pdf->setPaper('A4');
        $pdf->set_option('isPhpEnabled', true);

//        $view = view('admin.pdf.invoice')->with('invoice', $invoice)->with('invoice_products', $invoice_products);
        $view = view('admin.pdf.proforma',
            compact('project', 'companyContract',  'senderCompany',
                'receiverCompany', 'overallPrices', 'overallWeights', 'invoices', 'overallInvoices'));
        $pdf->loadHtml($view);

        $pdf->render();

        return $pdf->stream('Proforma.pdf');
    }

    public function PDFManifest(Project $project)
    {
        $project = Project::with(['sender', 'receiver', 'invoices.invoiceProducts'])->find($project->id);

        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isPhpEnabled', true);
        $options->set('defaultFont', 'Arial'); // Use a font that supports the characters you need
        PDF::setOptions(['dpi' => 150, 'isHtml5ParserEnabled' => true, 'defaultFont' => 'sans-serif']);
        $pdf = new Dompdf($options);
        $pdf->setOptions($options);
        $pdf->setPaper('A4', 'landscape');
        $pdf->set_option('isPhpEnabled', true);

//        $view = view('admin.pdf.invoice')->with('invoice', $invoice)->with('invoice_products', $invoice_products);
        $view = view('admin.pdf.manifest',
                compact('project'));
        $pdf->loadHtml($view);

        $pdf->render();

        return $pdf->stream('Manifest.pdf');
    }

//    public function PDFInvoices(Project $project)
//    {
////        $invoice = Invoice::with('invoiceProducts', 'address', 'project')->where('id','=',$invoice->id)->first();
////        $invoice_products = InvoiceProduct::with('invoice', 'product')->where('invoice_id' , '=', $invoice->id)->get();
//
//        $invoices = Invoice::with('invoiceProducts', 'address', 'project')
//            ->where('project_id', '=', $project->id)
//            ->get();
////        dd($invoices);
//
//        $options = new Options();
//        $options->set('isHtml5ParserEnabled', true);
//        $options->set('isPhpEnabled', true);
//        $options->set('defaultFont', 'Arial'); // Use a font that supports the characters you need
//        PDF::setOptions(['dpi' => 150, 'isHtml5ParserEnabled' => true, 'defaultFont' => 'sans-serif']);
//        $pdf = new Dompdf($options);
//        $pdf->setOptions($options);
//        $pdf->setPaper('A4');
//        $pdf->set_option('isPhpEnabled', true);
//
//
//        foreach ($invoices as $invoice) {
//            $invoice_products = InvoiceProduct::with('invoice', 'product')
//                ->where('invoice_id', '=', $invoice->id)
//                ->get();
//
//            $loopLimit = 15;
//            $totalQuantity = $invoice_products->sum('quantity');
//            $totalPrice = $invoice_products->sum('price');
//
////            $view = view('admin.pdf.invoices',
////                compact('invoice_products', 'invoices', 'invoice', 'loopLimit', 'totalQuantity', 'totalPrice'));
//            $view = View::make('admin.pdf.invoices')
//                ->with(compact('invoice_products', 'invoices', 'invoice', 'loopLimit', 'totalQuantity', 'totalPrice'))
//                ->render();
//            $pdf->loadHtml($view);
////            $pdf->render();
//        }
//        $pdf->render();
//
//
//        return $pdf->stream('Invoices.pdf');
//    }

    public function PDFInvoices(Project $project, Request $request)
    {

        $invoices = Invoice::with('invoiceProducts', 'address', 'project')
            ->where('project_id', '=', $project->id)
            ->where('number', '>=', $request->first)
            ->where('number', '<=', $request->last)
            ->orderBy('number', 'asc')
            ->get();

        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isPhpEnabled', true);
        $options->set('defaultFont', 'Arial'); // Use a font that supports the characters you need
        PDF::setOptions(['dpi' => 150, 'isHtml5ParserEnabled' => true, 'defaultFont' => 'sans-serif']);
        $pdf = new Dompdf($options);
        $pdf->setOptions($options);
        $pdf->setPaper('A4');
        $pdf->set_option('isPhpEnabled', true);

//        foreach ($invoices as $invoice) {
//            $invoice_products = InvoiceProduct::with('invoice', 'product')
//                ->where('invoice_id', '=', $invoice->id)
//                ->get();
//
//            $loopLimit = 15;
//            $totalQuantity = $invoice_products->sum('quantity');
//            $totalPrice = $invoice_products->sum('price');
//
////            $view = view('admin.pdf.invoices',
////                compact('invoice_products', 'invoices', 'invoice', 'loopLimit', 'totalQuantity', 'totalPrice'));
//            $view = View::make('admin.pdf.invoices')
//                ->with(compact('invoice_products', 'invoices', 'invoice', 'loopLimit', 'totalQuantity', 'totalPrice'))
//                ->render();
//            $pdf->loadHtml($view);
////            $pdf->render();
//        }
        $view = View::make('admin.pdf.invoices')
            ->with(compact('invoices'))
            ->render();
        $pdf->loadHtml($view);
        $pdf->render();


        return $pdf->stream('Invoices.pdf');
    }

}
