<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\DataLog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $thisMonth = DataLog::join('users', 'data_logs.user_id', '=', 'users.id')
//            ->where('users.id', '=', '3')
            ->whereMonth('data_logs.created_at', '=', now()->month)
            ->select(
                'users.full_name as full_name',
//                DB::raw('TO_CHAR(data_logs.created_at, \'Month\') as month_name'),
                DB::raw('DATE_FORMAT(data_logs.created_at, \'%M\') as month_name'),
                DB::raw('SUM(CASE WHEN data_type = \'invoices\' THEN 1 ELSE 0 END) as total_invoices'),
                DB::raw('SUM(CASE WHEN data_type = \'passport\' THEN 1 ELSE 0 END) as total_passports')
            )
//            ->select(
//                'users.full_name as full_name',
//                DB::raw('TO_CHAR(data_logs.created_at, \'%M\') as month_name'), // Use '%M' to get the full month name
//                DB::raw('EXTRACT(YEAR FROM data_logs.created_at) as year'), // Extract year
//                DB::raw('SUM(CASE WHEN data_type = \'invoices\' THEN 1 ELSE 0 END) as total_invoices'),
//                DB::raw('SUM(CASE WHEN data_type = \'passports\' THEN 1 ELSE 0 END) as total_passports')
//            )

            ->groupBy('users.full_name', 'month_name')
            ->get();


        $exceptMonth = DataLog::join('users', 'data_logs.user_id', '=', 'users.id')
            //->where('users.id', '=', '3')
            ->whereMonth('data_logs.created_at', '!=', now()->month) // Exclude the current month
            ->select(
                'users.full_name as full_name',
                DB::raw('DATE_FORMAT(data_logs.created_at, \'%M\') as month_name'),
                DB::raw('EXTRACT(YEAR FROM data_logs.created_at) as year'), // Extract year
                DB::raw('SUM(CASE WHEN data_type = \'invoices\' THEN 1 ELSE 0 END) as total_invoices'),
                DB::raw('SUM(CASE WHEN data_type = \'passports\' THEN 1 ELSE 0 END) as total_passports')
            )
            ->groupBy('users.full_name', 'month_name', 'year')
            ->orderBy('year', 'desc')
            ->orderBy('month_name')
            ->get();

        $monthIndices = [
            'January' => 0,
            'February' => 1,
            'March' => 2,
            'April' => 3,
            'May' => 4,
            'June' => 5,
            'July' => 6,
            'August' => 7,
            'September' => 8,
            'October' => 9,
            'November' => 10,
            'December' => 11,
        ];


//        dd($monthIndices);
        return view('admin.dashboard.index', compact('thisMonth', 'exceptMonth', 'monthIndices'));
    }
}
