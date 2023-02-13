<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Svg\Tag\Rect;

class RTIController extends Controller
{
    function index()
    {
        // $data = DB::table('pages')->where('page_type', 'student')->where('title', $name)->get();
        $quick_link = DB::table('pages')->where('page_type', 'student')->get();
        $quick_link1 = DB::table('pdf')->where('type', 'studentpdf')->get();

        return view('rti',['quicks' => $quick_link, 'url' => $this->url(), 'quicks1' => $quick_link1]);
    }
}
