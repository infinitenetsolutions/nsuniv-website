<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Throwable;

class CourseController extends Controller
{

    function index($course, $id)
    {
       try {
            $programs = DB::table('course_tbl')->where('is_deleted', 1)->distinct()->get(['program']);
            $data = DB::table('course_details')->where('course_id', $id)->get();
            $course = DB::table('course_tbl')->where('id', $id)->get();
            $all_courses=DB::table('course_tbl')->where('is_deleted', 1)->get();

            return view('course-details', ['data' => $data[0], 'name' => $course, 'programs' => $programs, 'url' => $this->url(),'all_courses'=>$all_courses]);
        } catch (Throwable $e) {
            return view('errors.404');
        }
    }
    function program($url)
    {
       try {
            $name = str_replace('-', ' ', $url);
            $all_programs = DB::table('categorie')->where('is_deleted', 1)->orderBy('id', 'desc')->get();
            $programs = DB::table('categorie')->where('name', $name)->where('is_deleted', 1)->get();
            $data = DB::table('course_tbl')->where('program', $name)->where('is_deleted', 1)->get();
            return  view('course', ['programs' => $programs, 'courses' => $data, 'all_programs' => $all_programs, 'url' => $this->url()]);
        } catch (Throwable $e) {
            return view('errors.404');
        }
    }

    function course_list()
    {
       try {
            $all_programs = DB::table('course_tbl')->where('is_deleted', 1)->distinct()->get(['program']);
         
            return  view('course-list', [ 'all_programs' => $all_programs, 'url' => $this->url()]);
        } catch (Throwable $e) {
            return view('errors.404');
        }
    }
}
