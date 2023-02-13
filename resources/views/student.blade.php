<x-layout1>
    @slot('body')
        <section class="inner-page">
            <div class="inner-hadding">
                <div class="container">
                    <div class="breadcrumb">
                        <a href="{{ route('index') }}">Home</a>
                        <a href="#">Student</a>
                        <a href="#">{{ $data->sub_title }}</a>
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
                            <li class="{{ Request::path() == 'student/alumni/all'  ? 'active' : '' }}"> <a
                                href="{{ route('student.alumni') }}">{{ 'Alumni' }}</a>
                        </li>
                        </ul>
                    </div>
                    <div class="p-2 ">
                        <h2>{{ $data->sub_title }}</h2>
                        <a class="row p-2" href="{{ route('index') }}">
                            <img class="logo-sm" src="{{ asset('/images/logo.png') }}" alt="">
                            <p class="tag_line_bold mt-1 ">Netaji Subhas University</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row ml-3 mr-3 ">
                <div class="col-sm-9 ">
                    <div class="mt-3 mb-3">
                        @if ($data->header_image != '')
                            <img src="{{ $url . 'student/' . $data->header_image }}" class="img-fluid">
                        @endif

                    </div>
                    <div class=" mb-5 ">

                        <p class="text-justify"><?php echo substr($data->description, 0, 1000); ?> </p>
                        <div class="row">
                            <div class="col-sm-6">
                                <img src="{{ $url . 'student/' . $data->image_name }}" class="img-fluid">

                            </div>
                            <div class="col-sm-6">
                                <img src="{{ $url . 'student/' . $data->image_name1 }}" class="img-fluid">

                            </div>
                        </div>
                        <p class="text-justify"><?php echo substr($data->description, 1000); ?> </p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <section class="aside-section">
                        <div class="bg-xs-dark_gray m-3 p-3">
                            <h3 class="text-center text-white">Quick Links</h3>
                            <hr>
                            <!-- <div class="aside-section-headings"></div> -->

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
            {{-- <div class="">
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

                                                        <a target="blank" href="{{ $affiliation->virtual_image_name }}">
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
            </div> --}}
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
