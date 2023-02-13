<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;

class GetStartController extends Controller
{

    function index()
    {
        return view('upgrade');
    }
    function store(Request $request)
    {
        try {
            $reference = DB::table('get_start')->insertGetId($request->except('_token'));
            return redirect()->route('getstart.thankyou')->with('massage', 'NSU_' . $reference);
        } catch (Throwable $e) {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }
    function getOtp()
    {
        $opt = rand(100000, 999999);
        session()->put('otp', $opt);
        return $opt;
    }
    function thankyou()
    {
        return view('thankyou');
    }
}
