<?php    
   $url = '';
    
//     if ($_SERVER['HTTP_HOST'] == '127.0.0.1:8000') {
//         $url = 'http://127.0.0.1:8001/upload/';
//     } else {
        $url = 'https://nsuniv.ac.in/nsuadmin/public/upload/';
//     }
    

$infrastructure = DB::table('pages')->where('page_type', 'infrastructure')->get(); ?>
<div class="row">
    <div class="col-12 col-sm-12 col-md-4 pro">
        <span><img
                src="{{ $url . 'infrastructure/' . $infrastructure[0]->image_name }}"></span>
        <div class="stu-btn"><a
                href="{{ route('infrastructure', $infrastructure[0]->title) }}">{{ $infrastructure[0]->sub_title }}</a>
        </div>
    </div>
    <div class="col-12 col-md-5 pro1">
        <div class="stu-span1 ">
            <span><img
                    src="{{ $url . 'infrastructure/' . $infrastructure[13]->image_name1 }}"></span>
            <div class="stu-btn"><a
                    href="{{ route('infrastructure', $infrastructure[13]->title) }}">{{ $infrastructure[13]->sub_title }}</a>
            </div>
        </div>

        <div class="stu-span">
            <span><img
                    src="{{ $url . 'infrastructure/' . $infrastructure[6]->image_name1 }}"></span>
            <div class="stu-btn"><a
                    href="{{ route('infrastructure', $infrastructure[6]->title) }}">{{ $infrastructure[6]->sub_title }}</a>
            </div>
        </div>

        <div class="stu-span2">
            <span><img
                    src="{{ $url . 'infrastructure/' . $infrastructure[12]->image_name1 }}"></span>
            <div class="stu-btn"><a
                    href="{{ route('infrastructure', $infrastructure[12]->title) }}">{{ $infrastructure[12]->sub_title }}</a>
            </div>
        </div>
    </div>

    <div class="col-12 col-md-3 ">
        <div class="stu-span1 mb-1">
            <span><img
                    src="{{ $url . 'infrastructure/' . $infrastructure[5]->image_name1 }}"></span>
            <div class="stu-btn"><a
                    href="{{ route('infrastructure', $infrastructure[5]->title) }}">{{ $infrastructure[5]->sub_title }}</a>
            </div>
        </div>
        <div class="stu-span1">
            <span><img
                    src="{{ $url . 'infrastructure/' . $infrastructure[10]->image_name }}"></span>
            <div class="stu-btn"><a
                    href="{{ route('infrastructure', $infrastructure[10]->title) }}">{{ $infrastructure[10]->sub_title }}</a>
            </div>
        </div>
    </div>

</div>