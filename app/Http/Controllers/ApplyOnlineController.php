<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ApplyOnlineController extends Controller
{
    function index($name)
    {

        $data = DB::table('pages')->where('page_type', 'admission')->where('title', $name)->get();
        $quick_link = DB::table('pages')->where('page_type', 'admission')->get();
        return view('admission', ['data' => $data[0], 'quicks' => $quick_link, 'url' => $this->url()]);
    }
}
