<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\CompanyContract;
use App\Models\Incoterm;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::sortable()->orderBy('created_at', 'DESC')->paginate(10);
        $companies = Company::all();
        $company_contracts = CompanyContract::all();
        $incoterms = Incoterm::all();
        return view('admin.projects.index', compact('projects', 'companies', 'company_contracts', 'incoterms'));
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
            'code' => 'required|unique:projects,code',
        ]);

        //dd($request);
        $project = new Project();
        $project->code = $request->code;
        $project->ready_date = $request->ready_date;
        $project->sender_id = $request->sender_id;
        $project->receiver_id=$request->receiver_id;
        $project->company_contract_id = $request->company_contract_id;
        $project->incoterm_id = $request->incoterm_id;
        $project->status = $request->status;

        $project->save();
        return response()->json([
            'status' => 200
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return response()->json([
            'status' => 200,
            'project' => $project,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $request->validate([
            'code' => 'required',
        ]);

        $project->code = $request->code;
        $project->ready_date = $request->ready_date;
        $project->sender_id = $request->sender_id;
        $project->receiver_id=$request->receiver_id;
        $project->company_contract_id = $request->company_contract_id;
        $project->incoterm_id = $request->incoterm_id;
        $project->status = $request->status;

        $project->update();

        return response()->json([
            'status' => 200
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('admin.projects.index');
    }
}
