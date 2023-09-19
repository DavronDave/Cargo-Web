<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Country;
use App\Models\District;
use App\Models\Region;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies = Company::sortable()->orderBy('id', 'DESC')->paginate(10);
        $countries = Country::all();
        $regions = Region::all();
        $districts = District::all();
        return view('admin.companies.index', compact('countries', 'regions','districts', 'companies'));
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
            'name' => 'required|unique:companies,name',
        ]);
        $company = new Company();
        $company->name=$request->name;
        $company->phone=$request->phone;
        $company->address=$request->address;
        $company->country_id= $request->country_id;
        $company->region_id= $request->region_id;
        $company->district_id= $request->district_id;
        $company->save();

        return response()->json([
            'status' => 200
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        return response()->json([
            'status' => 200,
            'company' => $company,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Company $company)
    {
        $company->name = $request->name;
        $company->address = $request->address;
        $company->phone = $request->phone;
        $company->country_id = $request->country_id;
        $company->region_id = $request->region_id;
        $company->district_id = $request->district_id;

        $company->update();
        return response()->json([
            'status' => 200
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        $company->delete();
        return redirect()->route('admin.companies.index');
    }
}
