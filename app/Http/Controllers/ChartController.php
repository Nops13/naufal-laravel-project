<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Charts;
use App\Models\TransaksiPenyewaan;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{

    public function index()
    {
     $users = TransaksiPenyewaan::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))->get();
        $chart = Charts::database($users, 'bar', 'highcharts')
         ->title("Monthly new Register Users")
         ->elementLabel("Total Users")
         ->dimensions(1000, 500)
         ->responsive(false)
         ->groupByMonth(date('Y'), true);
        return view('chart',compact('chart'));
    }
}
