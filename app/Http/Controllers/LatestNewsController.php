<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LatestNewsController extends Controller
{
    function index($id)
    {
        //  latest news 
        $get_news = DB::table('latestnews_tbls')->where('id', $id)->get();

        $latest_news = DB::table('latestnews_tbls')->orderBy('id', 'desc')->limit(20)->get();

        return view('news-details', [ 'url' => $this->url(), 'events'=>$latest_news, 'get_news'=>$get_news[0] ]);
    }
    function index1()
    {
        //  latest news 
        $get_news = DB::table('latestnews_tbls')->get();

        $latest_news = DB::table('latestnews_tbls')->orderBy('id', 'desc')->limit(20)->get();

        return view('news', [ 'url' => $this->url(), 'news'=>$latest_news, 'get_news'=>$get_news[0] ]);
    }
}
