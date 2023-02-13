<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Svg\Tag\Rect;

class StudentController extends Controller
{
    function index($name)
    {
        $data = DB::table('pages')->where('page_type', 'student')->where('title', $name)->get();
        $quick_link = DB::table('pages')->where('page_type', 'student')->get();
        $quick_link1 = DB::table('pdf')->where('type', 'studentpdf')->get();

        return view('student', ['data' => $data[0], 'quicks' => $quick_link, 'url' => $this->url(), 'quicks1' => $quick_link1]);
    }

    function alumni()
    {
        $data = DB::table('pages')->where('page_type', 'student')->get();
        $alumni = DB::table('alumni')->where('is_deleted', '1')->paginate(6);
        $quick_link = DB::table('pages')->where('page_type', 'student')->get();
        $quick_link1 = DB::table('pdf')->where('type', 'studentpdf')->get();
        return view('alumni', ['data' => $data[0], 'quicks' => $quick_link, 'url' => $this->url(), 'quicks1' => $quick_link1, 'alumni' => $alumni]);
    }
    function alumni_api($email, $id)
    {

        $data = DB::table('alumni_student')->where('reg_no', $id)->first();
        if ($data != '') {
            return $data;
        } else {
            $data = file_get_contents("https://nsucms.in/nsucms/api.php?id=" . $id);
            $decode_data = json_decode($data);
            if ($decode_data->admission_mobile_student == $email) {
                return $data;
            } else {
                return ['error' => 'Records no found'];
            }
        }
    }

    function store(Request $request)
    {


        $id =  DB::table('alumni')->insertGetId($request->except('_token'));
        if ($request->file('testimonial_image')) {
            $destinationPath = 'upload/alumni/';
            $testimonial_image = $request->file('testimonial_image');
            $testimonial_image1 = date('YmdHis') . '_alumni' . "." . $testimonial_image->getClientOriginalExtension();
            $testimonial_image->move($destinationPath, $testimonial_image1);

            DB::table('alumni')
                ->where('id', $id)
                ->update(['testimonial_image' => $testimonial_image1]);
        }
        return  redirect()->route('getstart.thankyou');
    }
}
