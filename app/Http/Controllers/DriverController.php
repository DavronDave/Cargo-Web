<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $drivers = Driver::sortable()->orderBy('id', 'DESC')->paginate(10);
        $companies = Company::all();

        return view('admin.drivers.index', compact('drivers', 'companies'));
    }

    public function invoices(Driver $driver)
    {
        return view();
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
            'name' => 'required',
            'company_id'=> 'required'
        ]);
        $driverInvoice = new Driver();
        $driverInvoice->name = $request->name;
        $driverInvoice->company_id = $request->company_id;
        $driverInvoice->save();

        return response()->json([
            'status' => 200
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Driver $driverInvoice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Driver $driver)
    {
        return response()->json([
            'status' => 200,
            'driver' => $driver,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Driver $driver)
    {
        $driver->name = $request->name;
        $driver->company_id = $request->company_id;

        $driver->update();
        return response()->json([
            'status' => 200
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Driver $driver)
    {
//        dd($driver);
        $driver->delete();
        return redirect()->route('admin.drivers.index');
    }
}
