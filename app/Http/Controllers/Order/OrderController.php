<?php

namespace App\Http\Controllers\Order;

use App\Exports\InvoiceExport;
use App\Exports\InvoiceProductExport;
use App\Models\Project;
use App\Http\Controllers\Controller;
use App\Imports\OrderImport;
use App\Imports\OrderSheetImport;
use App\Imports\ProductsImport;
use App\Models\Incoterm;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class OrderController extends Controller
{
    public function import(Request $request)
    {
        Excel::import(new OrderImport, $request->file('file'));
        

        return back()->with('success', 'Ma\'lumotlar muvaffaqiyatli import qilindi!');
    }

    public function index()
    {
        $incoterms = Incoterm::sortable()->orderBy('id', 'DESC')->paginate(10);
        return view('admin.incoterms.index', compact('incoterms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:incoterms,name',
        ]);

        $incoterm = new Incoterm();
        $incoterm->name = strtoupper($request->name);

        $incoterm->save();

        return response()->json([
            'status' => 200
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Incoterm $incoterm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Incoterm $incoterm)
    {
        return response()->json([
            'status' => 200,
            'incoterm' => $incoterm,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Incoterm $incoterm)
    {
        $incoterm->name = $request->name;

        $incoterm->update();
        return response()->json([
            'status' => 200
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Incoterm $incoterm)
    {
        $incoterm->delete();

        return redirect()->route('admin.incoterms.index');
    }


    public function importProducts(Request $request)
    {
        // Faylni olish
        $request->validate([
            'file' => 'required|mimes:xlsx,csv',
        ]);

        $file = $request->file('file');

        // Excel faylini import qilish
        Excel::import(new ProductsImport, $file);

        return redirect()->back()->with('success', 'Fayl muvaffaqiyatli import qilindi');
    }
    
}
