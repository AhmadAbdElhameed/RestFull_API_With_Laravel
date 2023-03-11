<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Chart;

class ChartController extends Controller
{
    //
    public function chartView(){
        $result = Chart::all();
        return $result;
    }
}
