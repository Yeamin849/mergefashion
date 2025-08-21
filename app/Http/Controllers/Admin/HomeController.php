<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SellsHistory;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //

    public function index()
    {

        // Get the current month and year
        $currentMonth = Carbon::now()->format('m');
        $currentYear = Carbon::now()->format('Y');


        // Fetch data from the Income model for the current month
        $sells = SellsHistory::whereMonth('created_at', $currentMonth)
            ->whereYear('created_at', $currentYear)
            ->where('delivery_status', 1)
            ->groupBy(DB::raw('DATE(created_at)')) // Group by date portion only
            ->selectRaw('DATE(created_at) as date, SUM(total_price) as total_amount') // Select date portion
            ->orderBy('date')
            ->get();

        // Extract dates and amounts from the fetched and aggregated data
        $dates = $sells->pluck('date')->toArray();
        $amounts = $sells->pluck('total_amount')->toArray();

        $sellsAmount = (new LarapexChart)->setType('area')
            ->setTitle('Daily Sells')
            ->setSubtitle('Current Month')
            ->setXAxis($dates)
            ->setGrid(false, '#3F51B5', 0.5)
            ->setColors(['#ffc63b', '#ff6384'])
            ->setMarkers(['#775dd0', '#80effe'], 7, 10)
            ->setDataset([
                [
                    'name' => 'Amount',
                    'data' => $amounts
                ]
            ]);


        // Fetch yearly sales data grouped by month
        $sellsY = SellsHistory::whereYear('created_at', $currentYear)
            ->groupBy(DB::raw('MONTH(created_at)')) // Group by month
            ->where('delivery_status', 1)
            ->selectRaw('MONTH(created_at) as month, SUM(total_price) as total_amount') // Select month and sum of total_price
            ->orderBy('month')
            ->get();

        // Extract months and total amounts from the fetched and aggregated data
        $months = [];
        $amounts = [];
        foreach ($sellsY as $sell) {
            $monthName = date('F', mktime(0, 0, 0, $sell->month, 1));
            $months[] = $monthName;
            $amounts[] = $sell->total_amount;
        }

        // Generate pie chart
        $yearlySells = (new LarapexChart)->setType('area')
            ->setTitle('Monthly Sells')
            ->setLabels($months)
            ->setDataset([
                [
                    'name' => 'Amount',
                    'data' => $amounts
                ]
            ]);




        return view('admin.index', compact('sellsAmount', 'yearlySells'));



        // echo "<pre>";
        // print_r($userRoles->toArray());

    }
}