<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\CompanyContract;
use Illuminate\Http\Request;

class CompanyContractController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contracts = CompanyContract::sortable()->orderBy('id', 'DESC')->paginate(10);
        $sender_companies = Company::all();
        $receiver_companies = Company::all();
        return view('admin.company-contracts.index', compact('sender_companies', 'receiver_companies', 'contracts'));
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
//        $request->validate([
//            'name' => 'required|unique:companies,name',
//        ]);
        $companyContract = new CompanyContract();
        $companyContract->sender_id=$request->sender_id;
        $companyContract->receiver_id=$request->receiver_id;
        $companyContract->from_date=$request->from_date;
        $companyContract->code= $request->code;
        $companyContract->status= $request->status;
        $companyContract->save();

        return response()->json([
            'status' => 200
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(CompanyContract $companyContract)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CompanyContract $companyContract)
    {
        return response()->json([
            'status' => 200,
            'company' => $companyContract,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CompanyContract $companyContract)
    {
        $companyContract->sender_id=$request->sender_id;
        $companyContract->receiver_id=$request->receiver_id;
        $companyContract->from_date=$request->from_date;
        $companyContract->code= $request->code;
        $companyContract->status= $request->status;
        $companyContract->update();

        return response()->json([
            'status' => 200
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CompanyContract $company_contract)
    {
        $company_contract->delete();

        return redirect()->route('admin.company-contracts.index');
    }
}
