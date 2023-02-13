<x-layout1>
    @slot('body')
        <section class="inner-page">

            <div class="inner-hadding">
                <div class="container">
                    <div class="breadcrumb">
                        <a href="{{ route('index') }}">Home</a>
                        <a href="#">Student</a>
                        <a href="#">{{ 'Alumni' }}</a>
                    </div>
                </div>
                <div class="container">
                    <div class="top-menu-sec">
                        <ul>
                            <h4>student</h4>
                            @foreach ($quicks as $quick)
                                <li><a href="{{ route('index') }}">{{ 'Home' }}</a>
                                </li>
                                <li class="{{ Request::path() == 'student/' . $quick->title ? 'active' : '' }}"> <a
                                        href="{{ route('student', $quick->title) }}">{{ $quick->sub_title }}</a>
                                </li>
                            @endforeach
                            <li class="{{ Request::path() == 'student/alumni/all' ? 'active' : '' }}"> <a
                                    href="{{ route('student.alumni') }}">{{ 'Alumni' }}</a>
                            </li>
                        </ul>
                    </div>
                    <div class="p-2 ">
                        <h2>{{ 'Alumni' }}</h2>
                        <a class="row p-2" href="{{ route('index') }}">
                            <img class="logo-sm" src="{{ asset('/images/logo.png') }}" alt="">
                            <p class="tag_line_bold mt-1 ">Netaji Subhas University</p>
                        </a>
                    </div>
                </div>

            </div>
            @include('include.alumni_form')
            <div class="row ml-3 mr-3 ">
                <div class="col-sm-9 ">
                    <div class="row ">
                        @foreach ($alumni as $alu)
                            <div class="col-sm-4 mt-2 alumni">
                                <section class="section about-section gray-bg" id="about">
                                    <div class="row align-items-center flex-row-reverse">
                                        <div class="about-text go-to">
                                            <div class="about-avatar">
                                                @if (str_contains($alu->testimonial_image, 'admin'))
                                                    <img src="{{ $url . 'alumni/' . $alu->testimonial_image }}"
                                                        title="{{ $alu->testimonial_name }}" alt="">
                                                @else
                                                    <img src="{{ asset('upload/alumni/' . $alu->testimonial_image) }}"
                                                        title="{{ $alu->testimonial_name }}" alt="">
                                                @endif

                                            </div>
                                            <h6 class="theme-color lead">{{ $alu->testimonial_name }} - <span
                                                    class="text-secondary font-16">{{ $alu->testimonial_company }}</span>
                                            </h6>
                                            <p>Position : <mark>{{ $alu->testimonial_desig }}</mark></p>
                                            <p class="text-justify "> {!! Str::substr($alu->message, 0, 190) !!} <span class="name3"
                                                    id="show{{ $alu->id }}">{!! Str::substr($alu->message, 190) !!}</span> <span
                                                    class="text-danger" onclick="show({{ $alu->id }})">more</span>
                                            </p>
                                            <p class="text-secondary"> <strong
                                                    class="text-dark">{{ $alu->testimonial_course . ' - ' }}
                                                </strong>{{ $alu->testimonial_batch }}</p>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        @endforeach
                    </div>
                    <div class="p-4">
                        {{ $alumni->links() }}
                    </div>
                </div>
                <div class="col-sm-3">
                    <section class="aside-section">
                        <div class="bg-xs-dark_gray m-3 p-3">
                            <h3 class="text-center text-white">Quick Links</h3>
                            <hr>
                            <ul class="bullet_list">
                                @foreach ($quicks as $quick)
                                    <li> <b class="text-white ">
                                            <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                            <a class="text-capitalize text-dark"
                                                href="{{ route('student', $quick->title) }}">{{ $quick->title }}</a>
                                            <hr>
                                        </b>
                                    </li>
                                @endforeach
                                @foreach ($quicks1 as $quick)
                                    <li> <b class="text-white ">
                                            <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                            <a class="text-capitalize text-dark" target="_blank"
                                                href="{{ $url . 'pdf/' . $quick->images }}">{{ $quick->title }}</a>
                                            <hr>

                                        </b>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </section>
                    @include('include.admission')
                </div>
            </div>
            </div>
            </div>




            <div class="">
                <section class="academia-sec4"
                    style="background-image: url('{{ $url . 'student/' . $data->header_image }}')">
                    <div class="container">
                        <?php $affiliations = DB::table('affiliated_tbl')->get(); ?>
                        <div class="academia-sec4">
                            <h2 class=" p-2 carousel-inner mt-5 text-white ">Our Affiliation<h2>
                                    <ul class="row">
                                        @foreach ($affiliations as $affiliation)
                                            <li class="col-12 col-md-4 col-lg-4 col-xl-4">
                                                <div class="colm-ac-sec4 p-3 text-center ">
                                                    <img class="h-150px"
                                                        src="{{ $url . 'affiliated/' . $affiliation->image_name }}"
                                                        alt="">
                                                    <div class="border p-2">
                                                        <!-- <h4>{{ $affiliation->title }}</h4> -->

                                                        <a target="_blank" href="{{ $affiliation->virtual_image_name }}">
                                                            <p class="text-white">{{ $affiliation->sub_title }}</p>
                                                        </a>
                                                    </div>


                                                </div>
                                            </li>
                                        @endforeach

                                    </ul>
                        </div>
                    </div>
                </section>
            </div>


            <section class="academia-sec6">
                <div class="container">
                    <div class="row">
                        <div class="col-12 padAdjust">

                            <div class="row career no-gutters">
                                <div class="col-md-12">
                                    <div class="ac-sec5-download">
                                        <h3 style="margin-top:26px;">For more details please visit UGC Website</h3>
                                        <br /><br />
                                        <a href="pdf/Noida_Anti_Ragging_2021-22.pdf" target="_blank"><span>UGC</span></a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </section>
    @endslot
</x-layout1>

<style>
    .section .about-avatar {
        text-align: center;

    }

    .gray-bg {
        background-color: #f5f5f5;
        padding: 25px;

    }

    .about-text h6 {
        font-weight: 600;
        margin-bottom: 15px;
    }

    .theme-color {
        color: #edba16;
    }

    .dark-color {
        color: #20247b;
    }

    .font-15 {
        font-size: 15px;
    }

    p {
        padding: 1px !important;
    }

    .about-avatar img {
        height: 200px !important;
    }
</style>

<script>
    $(".name3").hide();

    function show(id) {
        $("#show" + id).toggle();
    }
    document.getElementById('page-top').setAttribute("class", "landing_page modal-open");
    document.getElementById('subscribe').setAttribute("class", "show modal fade");
    document.getElementById('subscribe').style.display = "block";


    function hide_modal() {
        document.getElementById('subscribe').setAttribute("class", "modal fade");
        document.getElementById('subscribe').style.display = "none";
    }
</script>
