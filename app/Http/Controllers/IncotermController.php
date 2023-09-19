<?php

namespace App\Http\Controllers;

use App\Models\Incoterm;
use Illuminate\Http\Request;

class IncotermController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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
}
