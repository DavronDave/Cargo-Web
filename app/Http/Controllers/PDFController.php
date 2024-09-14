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
use Illuminate\Support\Facades\Log;
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
//        dd($invoice->project->isDisplayPhone);
        $invoice_products = InvoiceProduct::with('invoice', 'product')->where('invoice_id' , '=', $invoice->id)->get();

        $RuCountry = Country::where('id',2)->first();
        $UzCountry = Country::where('id',1)->first();

//        dd($RuCountry);
        $loopLimit = 12;
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
        $pdf->set_option('isRemoteEnabled', true);

        $formattedInvoiceNumber = sprintf("Invoice %04d", $invoice->number);
//        $view = view('admin.pdf.invoice')->with('invoice', $invoice)->with('invoice_products', $invoice_products);
        $view = view('admin.pdf.invoice',
            compact('invoice_products', 'invoice', 'loopLimit','totalQuantity', 'totalPrice', 'RuCountry', 'UzCountry'));
        $pdf->loadHtml($view);

        $pdf->render();

//        return $pdf->stream('Invoice.pdf');
        return $pdf->stream($formattedInvoiceNumber . '.pdf');
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

        $categoryRatios = [
            '8418215900' => 5,
            '8205598099' => 4,
            '8421230000' => 3,
            '9503001009' => 2.5,
            '6309000000' => 1,
            '6405909000' => 1.2,
            '3306900000' => 0.4,
            '3924100000' => 3.4,
            '1901100000' => 0.7,
            '4820900000' => 0.5,
            '9503007000' => 0.8,
        ];

        // Iterate through the product categories and set the ratios
        foreach ($categoriesData as $key => $category) {
            $code = $category['code'];
            if (array_key_exists($code, $categoryRatios)) {
                $categoriesData[$key]['ratio'] = $categoryRatios[$code];
            } else {
                // Set a default ratio if the code is not found in the categoryRatios array
                $categoriesData[$key]['ratio'] = 1; // You can adjust the default ratio as needed
            }
        }

        // Calculate the total ratio sum
        $totalRatioSum = array_sum(array_column($categoriesData, 'ratio'));

//        // Normalize the ratios to add up to the overall weight
//        foreach ($categoriesData as $key => $category) {
//            $categoriesData[$key]['normalized_ratio'] = ($category['ratio'] / $totalRatioSum) * $overallWeights;
//        }

        // Normalize the ratios to add up to the overall weight and round to the nearest integer
        foreach ($categoriesData as $key => $category) {
            $normalizedRatio = round(($category['ratio'] / $totalRatioSum) * $overallWeights);
            $categoriesData[$key]['normalized_ratio'] = $normalizedRatio;
        }

        // Calculate the total sum of normalized ratios
        $totalNormalizedSum = array_sum(array_column($categoriesData, 'normalized_ratio'));

        // Adjust if the total sum exceeds the overall weight
        if ($totalNormalizedSum > $overallWeights) {
            $diff = $totalNormalizedSum - $overallWeights;
            // Sort the categories by their ratio in descending order
            usort($categoriesData, function($a, $b) {
                return $b['ratio'] - $a['ratio'];
            });
            // Reduce the normalized ratios for categories starting from the highest ratio
            foreach ($categoriesData as $key => $category) {
                if ($diff <= 0) {
                    break;
                }
                if ($categoriesData[$key]['normalized_ratio'] > 0) {
                    $categoriesData[$key]['normalized_ratio'] -= 1;
                    $diff -= 1;
                }
            }
        }

//        dd($categoriesData);

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

//    public function PDFManifest(Project $project)
//    {
//        $project = Project::with(['sender', 'receiver', 'invoices.invoiceProducts'])->find($project->id);
//
////        dd($project);
//        $options = new Options();
//        $options->set('isHtml5ParserEnabled', true);
//        $options->set('isPhpEnabled', true);
//        $options->set('defaultFont', 'Arial'); // Use a font that supports the characters you need
//        PDF::setOptions(['dpi' => 150, 'isHtml5ParserEnabled' => true, 'defaultFont' => 'sans-serif']);
//        $pdf = new Dompdf($options);
//        $pdf->setOptions($options);
//        $pdf->setPaper('A4', 'landscape');
//        $pdf->set_option('isPhpEnabled', true);
//
////        $view = view('admin.pdf.invoice')->with('invoice', $invoice)->with('invoice_products', $invoice_products);
//        $view = view('admin.pdf.manifest',
//                compact('project'));
//        $pdf->loadHtml($view);
//
//        $pdf->render();
//
//        return $pdf->stream('Manifest.pdf');
//    }

//    public function PDFManifest(Project $project)
//    {
//        // Increase memory limit and execution time
//        ini_set('memory_limit', '512M');
//        ini_set('max_execution_time', '1000');
//
//        // Load project with related data
//        $project = Project::with(['sender', 'receiver', 'invoices.invoiceProducts'])->find($project->id);
//
//        // Check if the project is loaded properly
//        if (!$project) {
//            abort(404, 'Project not found');
//        }
//
//        // Set PDF options
//        $options = new Options();
//        $options->set('isHtml5ParserEnabled', true);
//        $options->set('isPhpEnabled', true);
//        $options->set('defaultFont', 'Arial'); // Use a font that supports the characters you need
//
//        $pdf = new Dompdf($options);
//        $pdf->setOptions($options);
//        $pdf->setOptions('isHtml5ParserEnabled', true);
//        $pdf->setPaper('A4', 'landscape');
//
//        // Load view with project data
//        $view = view('admin.pdf.manifest', compact('project'))->render();
//        $pdf->loadHtml($view);
//
//        // Render the PDF
//        $pdf->render();
//
//        // Stream the PDF to the browser
//        return $pdf->stream('Manifest.pdf');
//    }

    public function PDFManifest(Project $project)
    {
        try {
            // Increase memory limit and execution time
            ini_set('memory_limit', '1024M'); // 1GB of memory limit
            ini_set('max_execution_time', 3000); // 50 minutes max execution time

            // Load project with related data
            $project = Project::with(['sender', 'receiver', 'invoices.invoiceProducts'])->find($project->id);

            // Check if the project is loaded properly
            if (!$project) {
                abort(404, 'Project not found');
            }

            // Set PDF options
            $options = new Options();
            $options->set('isHtml5ParserEnabled', true);
            $options->set('isPhpEnabled', true);
            $options->set('defaultFont', 'Arial'); // Set default font for better compatibility

            // Initialize Dompdf with options
            $pdf = new Dompdf($options);
            $pdf->setPaper('A4', 'landscape'); // Set paper size and orientation

            // Optimize: Chunking invoices if there are too many
            $chunkedInvoices = $project->invoices()->with('invoiceProducts')->chunk(50, function($invoices) use (&$project) {
                // Process smaller portions of data here if needed, or render in sections
                // This function will handle chunks of 50 invoices at a time
                // You can pass these chunks to the view
            });

            // Load view with project data (pass the full project data for now)
            $view = view('admin.pdf.manifest', compact('project'))->render();
            $pdf->loadHtml($view);

            // Render the PDF
            $pdf->render();

            // Stream the PDF to the browser
            return $pdf->stream('Manifest.pdf');
        } catch (\Exception $e) {
            // Log the error to Laravel's logs
            Log::error('PDF generation failed: ' . $e->getMessage());

            // Optionally, return a user-friendly error message
            return response()->json([
                'error' => 'An error occurred while generating the PDF. Please try again later.'
            ], 500);
        }
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
        $firstInvoiceNumber = str_pad($request->first, 4, '0', STR_PAD_LEFT); // Ensure 4 digits with leading zeros
        $lastInvoiceNumber = str_pad($request->last, 4, '0', STR_PAD_LEFT); // Ensure 4 digits with leading zeros

        $invoices = Invoice::with('invoiceProducts', 'address', 'project')
            ->where('project_id', '=', $project->id)
            ->where('number', '>=', $request->first)
            ->where('number', '<=', $request->last)
            ->orderBy('number', 'asc')
            ->get();

        $RuCountry = Country::where('id',2)->first();
        $UzCountry = Country::where('id',1)->first();

        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isPhpEnabled', true);
        $options->set('defaultFont', 'Arial'); // Use a font that supports the characters you need
        PDF::setOptions(['dpi' => 150, 'isHtml5ParserEnabled' => true, 'defaultFont' => 'sans-serif']);
        $pdf = new Dompdf($options);
        $pdf->setOptions($options);
        $pdf->setPaper('A4');
        $pdf->set_option('isPhpEnabled', true);

        $pdf->set_option('isRemoteEnabled', true);


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

        $pdfName = "Invoice {$firstInvoiceNumber}-{$lastInvoiceNumber}.pdf";

        $view = View::make('admin.pdf.invoices')
            ->with(compact('invoices', 'RuCountry', 'UzCountry'))
            ->render();
        $pdf->loadHtml($view);
        $pdf->render();


        return $pdf->stream($pdfName);
    }

}
