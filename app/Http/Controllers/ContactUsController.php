<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactUsController extends Controller
{
    function index()
    {
        return view('contact-us');
    }
    function  contact(Request $request)
    {
        DB::table('contactus_tbl')->insert($request->except('_token'));
        return view('thankyou');
    }
}
