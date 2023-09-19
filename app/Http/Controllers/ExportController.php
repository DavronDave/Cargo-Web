<?php

namespace App\Http\Controllers;

use App\Exports\InvoiceExport;
use App\Exports\InvoiceProductExport;
use App\Models\Project;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
    public function InvoiceProductExport(Project $project)
    {
        return Excel::download(new InvoiceProductExport($project->id), 'invoices_with_products.xlsx');
    }
}
