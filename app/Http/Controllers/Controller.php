<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{


    function url()
    {
       // if($_SERVER['HTTP_HOST']='127.0.0.1:8000'){
           //return "http://127.0.0.1:8001/upload/";

       // }else{
            return "https://nsuniv.ac.in/nsuadmin/public/upload/";
// adding
      //  }
    }

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
