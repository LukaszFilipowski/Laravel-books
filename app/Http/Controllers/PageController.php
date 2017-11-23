<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stats;

class PageController extends Controller
{
    public function index() 
    {
        $stats1 = Stats::show_statistics('ZieLoNa MiLa|age>30');
        $stats2 = Stats::show_statistics('ZiElonA Droga|age<30');
        
        return view('index', compact('stats1', 'stats2'));
    }
}
