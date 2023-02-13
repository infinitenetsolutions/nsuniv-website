<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    function image_gallery()
    {
        $images = DB::table('gallery_tbl')->where(DB::raw('LENGTH(link)'),'>','30')->orderBy('id','desc')->paginate(12);

        $gallery_title =  DB::table('gallery_tbl')->select('title')->where('title','!=','Media')->distinct()->get();

        return view('image-gallery', ['url' => $this->url(), 'images1' => $images, 'gallery_title' => $gallery_title]);
    }

    function media_gallery()
    {
        $images = DB::table('gallery_tbl')->where('title','=','media')->orderBy('id','desc')->paginate(9);
        return view('media-gallery', ['url' => $this->url(), 'gallery_title' => $images]);
    }

    function image_gallery_details($title){
        $gallery_title =  DB::table('gallery_tbl')->where('title',$title)->get();  
             return view('image_gallery_details',['gallery_title'=>$gallery_title,'url' => $this->url()]);
    }
}
