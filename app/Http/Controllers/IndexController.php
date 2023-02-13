<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    function index()
    {
        // currently not in use because of that time running video 
        $slider = DB::table('slider_tbl')->get();

        // first of the home page after the slider video
        $about = DB::table('pages')->where('page_type', 'about')->get();

        // university head  after video tour and upcoming events 
        $head_of_university = DB::table('faculty_tbl')->where('type', 'hou')->limit(4)->get();

        // gallery 
        $gallery = DB::table('gallery_tbl')->select('title')->where('title', '!=', 'media')->distinct()->limit(6)->get();

        //  latest news 
        $latest_news = DB::table('latestnews_tbls')->orderBy('id', 'desc')->limit(5)->get();

        // getting all events
        $event = DB::table('event')->orderBy('id', 'desc')->limit(4)->get();

        // notice board
        // getting all events
        $noticeboard = DB::table('noticeboard')->orderBy('id', 'desc')->where('is_deleted','1')->limit(4)->get();


        return view('index', ['sliders' => $slider, 'url' => $this->url(), 'about' => $about, 'hou' => $head_of_university,  'gallery' => $gallery, 'news' => $latest_news, 'events' => $event,  'noticeboard' => $noticeboard]);
    }

    function main_index()
    {
        return view("index", ['url' => $this->url()]);
    }
}
