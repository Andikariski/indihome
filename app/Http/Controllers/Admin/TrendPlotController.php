<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TrendPlotController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        return view('Admin.trendPlot');
    }

    public function dataSimple()
    {
        $data = [13, 23, 33, 43, 53, 73, 63, 93, 43, 43, 43, 10];
        return json_encode($data);
        // foreach($data as $d){
        //     echo $d;
        // }
    }
}
