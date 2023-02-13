<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UpgradeCampusController extends Controller
{
    public function index()
    {

      

        return view('upgrade');
    }

    public function CourseCMA()
    {
        $faqs = DB::table('faqs')->where('type', 'cma')->get();
        return view('coursecma', ['faqs' => $faqs]);
    }
}
