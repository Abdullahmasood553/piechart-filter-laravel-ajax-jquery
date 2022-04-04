<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\DataAnalytics;

class ChartController extends Controller
{
    public function index() {  
        return view('chart');
    }

    public function fetchData(Request $request) {
        if($request->input('year'))
        {
         $chart_data = $this->fetch_chart_data($request->input('year'));
         foreach($chart_data->toArray() as $row)
         {
         
          $output[] = array(
            'name' => $row['name'],
            'total_sales' => $row['total_sales']
          );
         }
         echo json_encode($output);
        }
    }

    function fetch_chart_data($year)
    {

    $data = DataAnalytics::select(DB::raw('COUNT(*) as total_sales, name'))->where('year', $year)
        ->groupBy('name')
        ->get();
  
     return $data;
    }

}
