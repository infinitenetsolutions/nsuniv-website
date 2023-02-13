<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    function index($id)
    {
        //  latest event 
        $get_event = DB::table('event')->where('id', $id)->get();

        $latest_event = DB::table('event')->orderBy('id', 'desc')->get();

        return view('event-details', [ 'url' => $this->url(), 'events'=>$latest_event, 'get_event'=>$get_event[0] ]);
    }}
