<?php
$home_url = '';

// if ($_SERVER['HTTP_HOST'] == '127.0.0.1:8000') {
//     $home_url = 'http://127.0.0.1:8001/upload/';
// } else {
$home_url = 'https://nsuniv.ac.in/nsuadmin/public/upload/';
// }

function url_check($url)
{
    stream_context_set_default([
        'ssl' => [
            'verify_peer' => false,
            'verify_peer_name' => false,
        ],
    ]);

    $array = get_headers($url);
    $string = $array[0];
    if (strpos($string, '200')) {
        return true;
    } else {
        return false;
    }
} ?>

<style>
    .border-bottom1 {
        border-bottom: solid 1px #e3b121;
    }

     a.red:hover {
    color: #d30000!important;
}
a.red {
    color: #e3b121!important;
}
</style>
<!-- Top Level Navigation -->
@include('include.getstart')
<div class="top_menubar">
    <ul class="container">
        
        <li class="career_btn"><a href="{{asset('upload/nsu new brouchure.pdf')}}">NSU Brochure</a></li>
        <li class="admission_links "><a class="font-weight-bold " href="javascript:void(0);">Admissions <span
                    class="lnr lnr-chevron-down"></span></a>
            <div class="top_megamenu admission_box bg-warning1">
                <div class="container admission_menu">

                    <a class="close_btn2" href="javascript:void(0);"></a>
                    <div class="row">
                        <div class="mega_menu_left col-lg-3">
                            <span class="mega_menu_brand">

                                <a href="index-2.html" class="site-logo "><img
                                        src="{{ asset('images/logo-Netaji.png') }}" alt="Netaji University" /></a>
                            </span>
                            <ul class="mega_menu_nav_admission">
                                <li><a href="{{ route('course_list') }}">How To
                                        Apply</a></li>
                                <li><a data-toggle="modal" data-target=".bs-example-modal-lg" href="javascript:void(0);"
                                        target="_blank" href="">Admission Enquiry
                                    </a></li>
                                <li><a href="{{ route('career') }}">Career Test</a></li>

                                <li><a target="_blank" href="https://neevfinance.hagnosoft.com/webform">Education
                                        Loan</a></li>


                            </ul>
                            <a target="_blank" class="apply_btn border text-university text-white"
                                href="https://nsucms.in/prospectus/public" target="_blank">Admission
                                {{ date('Y') }}</a>
                        </div>
                        <div class="mega_menu col-lg-9">
                            <div class="last_date">
                                <div class="row">
                                    <div class="col-lg-6 side_border">
                                        <h5>Campus Helpline Numbers</h5>
                                        <div class="last_date2">
                                            <ul>career
                                                <li>
                                                    <h6>Address</h6>
                                                    <span>Pokhari,Near Bhilai Pahadi, Jamshedpur,Jharkhand</span>
                                                </li>
                                                <li>
                                                    <h6>Jamshedpur City Office</h6>
                                                    <span>Shatabdi Tower, 4th Floor, Sakchi, Jamshedpur,
                                                        Jharkhand</span>
                                                </li>
                                                <li>
                                                    <h6>Email</h6>
                                                    <span>info@nsuniv.ac.in</span>
                                                </li>
                                                <li>
                                                    <h6>Phone</h6>
                                                    <span>0657-223-3022, 9386-817-857</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 apply_at">
                                        <h4>Route Map For NSU </h4>
                                        <div class="last_date2 last_date22">
                                            <div class=" colfull">
                                                <a
                                                    href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3677.793679678996!2d86.2612313498239!3d22.810107684987724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f6096e56867d5b%3A0x1edd658ec7b7a21d!2sNetaji%20Subhas%20University!5e0!3m2!1sen!2sin!4v1646827163795!5m2!1sen!2sin">
                                                    <iframe
                                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3677.793679678996!2d86.2612313498239!3d22.810107684987724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f6096e56867d5b%3A0x1edd658ec7b7a21d!2sNetaji%20Subhas%20University!5e0!3m2!1sen!2sin!4v1646827163795!5m2!1sen!2sin"
                                                        width="100%" height="350" style="border:0;"
                                                        allowfullscreen="" loading="lazy"></iframe>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li class="career_btn"><a href="{{ route('club') }}">CLUBs</a></li>
        <li class="career_btn"><a href="{{ route('iqac') }}">IQAC</a></li>
        <li class="career_btn"><a href="{{ route('rti') }}">RTI</a></li>
        <li class="career_btn"><a href="{{ route('career') }}">Careers</a></li>
        <li class="career_btn"><a href="{{ route('upgrade') }}">Upgrad Campus</a></li>
        <?php $lastnotice = DB::table('noticeboard')
            ->where('is_deleted', '1')
            ->orderBy('id', 'desc')
            ->first(); ?>
        <li><a href="{{ route('news1') }}">News</a></li>

        <li><a class="glow text-warning "
                href="{{ route('noticeboard', $lastnotice->id) }}">{{ $lastnotice->title }} Important Notice</a>
        </li>
        {{-- <li><a class="glow text-warning red" href="{{ route('xplore') }}">Xplore 9.0 2k22</a> </li> --}}
        <li><a title="Student Login" class="apply_btn3" href="https://nsucms.in/nsucms/student/student_login"
                target="_blank"><i class="fas fa-users"></i></a></li>
        <li></li>
        <!-- <li><a class="right_bar_search" href="javascript:void(0);"><i class="fa fa-search"></i></a> -->
        </li>
    </ul>
</div>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">

        <div class="logo">
            <a href="{{ route('index') }}"><img src="{{ asset('images/logo.png') }}"
                    alt="Netaji unuiversity" /></a>
            <span class="netaji"
                style="
    position: absolute;
    font-size: 20px;
    top: 20px;
    line-height: 3px;
    font-weight: 800;
    color: #e3b121;
    ">Netaji
                Subhas <br><span class="border-bottom1 " style="
    font-size: 26px;
 
    ">University</span>
                <br>
                <small style="font-size: 10px" class="ml-3">Jamshedpur, Jharkhand</small>
            </span>
        </div>

        <button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse"
            data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse main-menu" id="navbarResponsive">


            <ul class="navbar-nav ml-auto">

                <li class="nav-item"><a class="nav-link" href="#">About NSU <span class="span_icon"></span></a>
                    <div class="mega_menu pt-5 hidden-xs">

                        <div class="row pl-3 no-gutters scroll-pan ">
                            <div class="col-md-12">

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class=" no-gutters menu_col4 ">
                                            <div class="right_mega_menu">
                                                <?php $abouts = DB::table('pages')
                                                    ->where('page_type', 'about')
                                                    ->where('is_deleted', '1')
                                                    ->limit(9)
                                                    ->get();
                                                ?>
                                                <ul>
                                                    @foreach ($abouts as $about)
                                                        <li><a class="text-uppercase"
                                                                href="{{ route('about', $about->title) }}">
                                                                {{ $about->sub_title }}</a></li>
                                                    @endforeach

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class=" no-gutters menu_col4 ">
                                            <div class="right_mega_menu">
                                                <ul>

                                                    <?php $abouts = DB::table('pages')
                                                        ->where('page_type', 'about')
                                                        ->where('is_deleted', '1')
                                                        ->skip(9)
                                                        ->take(100)
                                                        ->get();
                                                    ?>
                                                    @foreach ($abouts as $about)
                                                        <li><a class="text-uppercase"
                                                                href="{{ route('about', $about->title) }}">
                                                                {{ $about->sub_title }}</a></li>
                                                    @endforeach

                                                    <?php $facultyes = DB::table('faculty_tbl')
                                                        ->distinct()
                                                        ->where('is_deleted', '1')
                                                        ->get(['type']);
                                                    ?>
                                                    @foreach ($facultyes as $faculty)
                                                        @if ($faculty->type != 'hou')
                                                            <li><a class="text-uppercase"
                                                                    href="{{ route('faculty', $faculty->type) }}">Meet
                                                                    our {{ $faculty->type }}</a></li>
                                                        @endif
                                                    @endforeach

                                                    <?php $studentpdfs = DB::table('pdf')
                                                        ->where('type', 'aboutpdf')
                                                        ->where('is_deleted', '1')
                                                        ->limit(4)
                                                        ->get();
                                                    ?>



                                                    <li><a class="text-uppercase" href="{{ route('govbody') }}">
                                                            The
                                                            Governing Body</a></li>

                                                    <li class="dropdown"> <a href="#"><b
                                                                class="color-orange text-uppercase">
                                                                <?php echo 'NIRF'; ?>
                                                            </b>
                                                            <div class="dropdown-content">

                                                                @foreach ($studentpdfs as $studentpdf)
                                                                    <a class="text-uppercase" target="_blank"
                                                                        href="{{ $home_url . 'pdf/' . $studentpdf->images }}">
                                                                        {{ $studentpdf->title }}</a>
                                                                @endforeach

                                                            </div>
                                                        </a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="no-gutters menu_col4 ">
                                            <div class="right_mega_menu">
                                                {{-- <p>Recognition</p> --}}
                                                <ul>
                                                    <?php $affiliations = DB::table('affiliated_tbl')->get(); ?>
                                                    @foreach ($affiliations as $affiliation)
                                                        <li> <a class="text-uppercase" target="_blank"
                                                            href="{{ $affiliation->virtual_image_name }}">
                                                            {{ $affiliation->sub_title }}
                                                        </a></li>
                                                    @endforeach

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            {{-- <div class="col-md-6">
                                <img src="{{ asset('images/nsu/about.jpeg') }}" alt="">
                            </div> --}}
                        </div>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{ route('course_list') }}">Courses
                        <span class="span_icon"></span></a>
                    <div class="mega_menu programsList pt-3 hidden-xs">
                        <div class="row no-gutters pl-5 paddAdjust">
                            <div class="col-md-12 pr-2">
                                <div class="row no-gutters menu_col4 pl-5 ml-3">
                                    <div class="col-md-9">
                                        <div class="tab-content">
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li class="nav-item pr-3"><a class="nav-link font-18 active"
                                                        href="#Graduate" role="tab" data-toggle="tab">Graduate
                                                        Programs</a>
                                                </li>
                                                <li class="nav-item pr-3"><a class="nav-link font-18"
                                                        href="#Post_Graduate" role="tab" data-toggle="tab">
                                                        Post Graduate Programs</a> </li>
                                                <li class="nav-item pr-3"><a class="nav-link font-18"
                                                        href="#Doctrate" role="tab" data-toggle="tab">
                                                        Doctrate Programs</a> </li>

                                                <li class="nav-item pr-3"><a class="nav-link font-18"
                                                        href="#certificate" role="tab" data-toggle="tab">
                                                        Diploma Programs</a> </li>
                                            </ul>
                                            <div role="tabpanel" class="tab-pane active selected" id="Graduate">
                                                <p class="pt-4">
                                                    <strong> <i class="fas fa-graduation-cap" aria-hidden="true"></i>
                                                        Under graduate Courses</strong>
                                                </p>
                                                <div class="menu_nav nsu-courses p-2">
                                                    <ul>
                                                        <?php $courses = DB::table('course_tbl')
                                                            ->where('is_deleted', '1')
                                                            ->where('type', 'ug')
                                                            ->orderBy('course', 'ASC')
                                                            ->get(); ?>

                                                        @foreach ($courses as $course)
                                                            <li><i class="fas fa-graduation-cap"></i> <a
                                                                    href="{{ route('course', ['course' => strtolower(str_replace(' ', '-', $course->course)), 'id' => $course->id]) }}">{{ $course->course }}</a>
                                                            </li>
                                                        @endforeach


                                                    </ul>
                                                </div>
                                            </div>

                                            <div role="tabpanel" class="tab-pane fade" id="Post_Graduate">
                                                <p class="pt-4">
                                                    <strong> <i class="fas fa-user-graduate"></i> Post graduate
                                                        Courses</strong>
                                                </p>
                                                <div class="menu_nav nsu-courses p-2">
                                                    <ul>
                                                        <?php $courses = DB::table('course_tbl')
                                                            ->where('is_deleted', '1')
                                                            ->where('type', 'pg')
                                                            ->orderBy('course', 'ASC')
                                                            ->get(); ?>

                                                        @foreach ($courses as $course)
                                                            <li><i class="fas fa-user-graduate"></i> <a
                                                                    href="{{ route('course', ['course' => strtolower(str_replace(' ', '-', $course->course)), 'id' => $course->id]) }}">{{ $course->course }}</a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>

                                            <div role="tabpanel" class="tab-pane fade" id="Doctrate">
                                                <p class="pt-4">
                                                    <strong> <i class="fa fa-user-md" aria-hidden="true"></i>
                                                        Doctrate Courses</strong>
                                                </p>
                                                <div class="menu_nav nsu-courses p-2">
                                                    <ul>
                                                        <?php $courses = DB::table('course_tbl')
                                                            ->where('is_deleted', '1')
                                                            ->where('type', '!=', 'pg')
                                                            ->where('type', '!=', 'ug')
                                                            ->where('type', '!=', 'certificate')
                                                            ->where('type', '!=', 'diploma')
                                                            ->orderBy('course', 'ASC')
                                                            ->get(); ?>

                                                        @foreach ($courses as $course)
                                                            <li><i class="fas fa-user-md"></i> <a
                                                                    href="{{ route('course', ['course' => strtolower(str_replace(' ', '-', $course->course)), 'id' => $course->id]) }}">{{ $course->course }}</a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="certificate">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <p class="pt-4">
                                                            <strong> <i class="fas fa-diploma"></i>
                                                                Diploma Courses</strong>
                                                        </p>

                                                    </div>
                                                    <div class="col-6">
                                                        <p class="pt-4">
                                                            {{-- <strong> <i class="fa fa-certificate"
                                                                    aria-hidden="true"></i>
                                                                Certificate Courses</strong> --}}
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="menu_nav nsu-courses p-2 row">
                                                    <ul class="col-6" style="columns: 1 !important ;">
                                                        <?php $courses = DB::table('course_tbl')
                                                            ->where('is_deleted', '1')
                                                            ->where('type', 'diploma')
                                                            ->orderBy('course', 'ASC')
                                                            ->get(); ?>

                                                        @foreach ($courses as $course)
                                                            <li><i class="fas fa-diploma"></i> <a
                                                                    href="{{ route('course', ['course' => strtolower(str_replace(' ', '-', $course->course)), 'id' => $course->id]) }}">{{ $course->course }}</a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                    <ul class="col-6" style="columns: 1 !important ;">
                                                        <?php $courses = DB::table('course_tbl')
                                                            ->where('is_deleted', '1')
                                                            ->where('type', 'certificate')
                                                            ->orderBy('course', 'ASC')
                                                            ->get(); ?>

                                                        @foreach ($courses as $course)
                                                            <li><i class="fas fa-certificate"></i> <a
                                                                    href="{{ route('course', ['course' => strtolower(str_replace(' ', '-', $course->course)), 'id' => $course->id]) }}">{{ $course->course }}</a>
                                                            </li>
                                                        @endforeach
                                                        {{-- <li><i class="fas fa-certificate"></i> <a
                                                                href="{{ route('course.certificate.cma') }}">{{ 'BBA & B.Com with US CMA ' }}</a>
                                                        </li>
                                                        <li><i class="fas fa-certificate"></i> <a
                                                                href="{{ route('upgrade') }}">{{ 'Upgrad Campus' }}</a>
                                                        </li> --}}
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 pr-3">
                                        <div class="right_mega_menu scroll-pan">
                                            <ul class="menu_top">
                                                <?php $programs = DB::table('course_tbl')
                                                    ->select('program')
                                                    ->where('is_deleted', '1')
                                                    ->groupBy('program')
                                                    ->orderBy(DB::raw('count(id) '), 'DESC')
                                                    ->get(); ?>
                                                @foreach ($programs as $program)
                                                    <?php
                                                    $courses = DB::table('course_tbl')
                                                        ->where('program', $program->program)
                                                        ->where('is_deleted', '1')
                                                        ->orderBy('id', 'ASC')
                                                        ->get();
                                                    ?>

                                                    <li class="dropdown"> <a
                                                            href="{{ route('program', strtolower(str_replace(' ', '-', $program->program))) }}"><b
                                                                class="color-orange text-uppercase">
                                                                <?php echo $program->program; ?>
                                                            </b>
                                                            <div class="dropdown-content">

                                                                @foreach ($courses as $course)
                                                                    <a
                                                                        href="{{ route('course', ['course' => strtolower(str_replace(' ', '-', $course->course)), 'id' => $course->id]) }}">{{ $course->course }}</a>
                                                                @endforeach

                                                            </div>
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>



                                </div>
                            </div>
                        </div>


                    </div>

                </li>

                <li class="nav-item"><a class="nav-link" href="javascript:void(0);">Infrastructure <span
                            class="span_icon"></span></a>
                    <span id="infrastructure_menu"></span>

                </li>



                <li class="nav-item"><a class="nav-link" href="#">Placement <span
                            class="span_icon"></span></a>
                    <span id="placement_menu"></span>
                </li>


                <li class="nav-item"><a class="nav-link" href="javascript:void(0);">Student <span
                            class="span_icon"></span></a>
                    <span id="student_menu"></span>

                </li>
                <li class="nav-item"><a class="nav-link" href="javascript:void(0);">Gallery <span
                            class="span_icon"></span></a>
                    <span id="gallery_menu"></span>

                </li>
                <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact Us </a>
                    <div class="mega_menu ">
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link apply_btn" href="https://nsucms.in/prospectus/public/">Apply
                        Now
                        {{ date('Y') }}</a>
                </li>
            </ul>
        </div>
        <!-- mobile menu -->
        <div class="mobile_nav">
            <a href="javascript:void(0);" class="mobile_nav_icon"></a>
            <div class="collapse navbar-collapse main-menu" id="navbarResponsive2">
                @include('include.mobile_menu')
            </div>

        </div>



    </div>
</nav>
{{-- aHR0cHM6Ly9naXRodWIuY29tL1JvaGl0LWt1bWFyLXJhamE= --}}
