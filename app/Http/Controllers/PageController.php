<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stats;

class PageController extends Controller
{
    public function index() 
    {
        $result1 = Stats::show_statistics('ZieLoNa MiLa|age>30');
        
        return view('index', compact('result1'));
    }
}
