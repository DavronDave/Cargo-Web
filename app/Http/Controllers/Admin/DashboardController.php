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
//        $admin = DataLog::join('users', 'data_logs.user_id', '=', 'users.id')
//            ->where('users.id', '=', '1')
//            ->where('data_type','invoices')
//            ->select('users.full_name as full_name',
//                DB::raw('TO_CHAR(data_logs.created_at, \'Month\') as month_name'),
//                DB::raw('count(*) as total'))
//            ->groupBy('users.full_name', 'month_name')
//            ->get();

//        $moderator = DataLog::join('users', 'data_logs.user_id', '=', 'users.id')
//            ->where('users.id', '=', '3')
//            ->where('data_type','invoices')
//            ->select('users.full_name as full_name',
//                DB::raw('TO_CHAR(data_logs.created_at, \'Month\') as month_name'),
//                DB::raw('count(*) as total'))
//            ->groupBy('users.full_name', 'month_name')
//            ->get();
        $admin = DataLog::join('users', 'data_logs.user_id', '=', 'users.id')
            ->where('users.id', '=', '1')
            ->where('data_logs.created_at', '>=', now()->startOfMonth()) // Filter for the current month
            ->select(
                'users.full_name as full_name',
                DB::raw('TO_CHAR(data_logs.created_at, \'Month\') as month_name'),
                DB::raw('SUM(CASE WHEN data_type = \'invoices\' THEN 1 ELSE 0 END) as total_invoices'),
                DB::raw('SUM(CASE WHEN data_type = \'passport\' THEN 1 ELSE 0 END) as total_passports')
            )
            ->groupBy('users.full_name', 'month_name')
            ->get();
//        dd($admin);

        $moderator = DataLog::join('users', 'data_logs.user_id', '=', 'users.id')
            ->where('users.id', '=', '3')
            ->where('data_logs.created_at', '>=', now()->startOfMonth()) // Filter for the current month
            ->select(
                'users.full_name as full_name',
                DB::raw('TO_CHAR(data_logs.created_at, \'Month\') as month_name'),
                DB::raw('SUM(CASE WHEN data_type = \'invoices\' THEN 1 ELSE 0 END) as total_invoices'),
                DB::raw('SUM(CASE WHEN data_type = \'passport\' THEN 1 ELSE 0 END) as total_passports')
            )
            ->groupBy('users.full_name', 'month_name')
            ->get();

        return view('admin.dashboard.index', compact(
            'moderator', 'admin', 'moderator'));
    }
}
