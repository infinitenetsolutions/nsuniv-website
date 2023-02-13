<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class XploreController extends Controller
{
    function index()
    {

        return view('xplore.index');
    }

}
