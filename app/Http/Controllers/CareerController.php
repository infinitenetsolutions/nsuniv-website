<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;

class CareerController extends Controller
{
    function index()
    {
        $data = DB::table('career_tbl')->where('is_deleted','1')->get();
        return view('career', ['data' => $data,  'url' => $this->url()]);
    }
    function store(Request $request)
    {
         try {
          $id=  DB::table('career_applied')->insertGetId($request->except('_token'));
            if ($request->file('resume')) {
                $image = $request->file('resume');
                $destinationPath = 'upload/career/';
                $image_name = date('YmdHis') . "_resume." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $image_name);
                DB::table('career_applied')
                ->where('id', $id)
                ->update(['resume' => $image_name]);    
            }
            return  redirect()->route('career')->with(['massage' => 'Thank you for applying']);
        } catch (Throwable $e) {
            return  redirect()->route('career')->with(['error' => 'You have already applied ']);
        }
    }
}
