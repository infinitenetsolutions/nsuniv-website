<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller
{

    function infrastructure()
    {
        return view('include.infrastructure_menu');
    }
    function placement()
    {
        return view('include.placement_menu');
    }
    function student()
    {
        return view('include.student_menu');
    }
    function gallery()
    {
        return view('include.gallery_menu');
    }
    function slider()
    {
        return view('include.slider');
    }

    public function testimonial()
    {
        return view('include.testimonial');
    }
    public function infrastructure_image(){
        return view('include.infrastructure_image');
    }
    public function student_life(){
        return view('include.student_life');
    }
}
