<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class StructureController extends Controller
{
    function index($name)
    {
        $transport = '';
        $data = DB::table('pages')->where('page_type', 'infrastructure')->where('title', $name)->get();
        $quick_link = DB::table('pages')->where('page_type', 'infrastructure')->get();
      
        if ($name == "transport" || $name = "transports") {
            $transport = DB::table('routes')->get();
        }

        return view('infrastructure', ['data' => $data[0], 'transports'=>$transport, 'quicks' => $quick_link, 'url' => $this->url()]);
    }
}
