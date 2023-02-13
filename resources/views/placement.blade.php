<x-layout1>
<style>
    .fal, .far {
    color: #e3af21 !important;
    font-family: "Font Awesome 5 Pro";

}
p{
    text-align: justify !important;

}
</style>
    @slot('body')

        <section class="inner-page">
            <div class="inner-hadding">
                <div class="container">
                    <div class="breadcrumb">
                        <a href="{{ route('index') }}">Home</a>
                        <a href="">Placement</a>
                        <a href="">{{ $data->sub_title }}</a>
                    </div>
                </div>
                <div class="container">
                    <div class="top-menu-sec">
                        <ul>
                            <h4>Placement</h4>
                            <li><a href="{{ route('index') }}">Home</a>
                            </li>
                           
                            @foreach ($quicks as $quick)
                                <li class="{{ Request::path() == 'placements/'.$quick->title ? 'active' : '' }}"><a href="{{ route('about', $quick->title) }}">{{ $quick->title }}</a>
                                </li>
                            @endforeach
                       
                            <li class="{{ Request::path() == 'placement/appointment' ? 'active' : '' }}"><a
                                    href="{{ route('appointment') }}"> Appointment Letter</a>
                            </li>
                            <li class="{{ Request::path() == 'placement/requiters' ? 'active' : '' }}"><a
                                    href="{{ route('requiters') }}"> Recruiters</a>
                            </li>
                            <li class="{{ Request::path() == 'placement/contact' ? 'active' : '' }}"><a
                                    href="{{ route('placement-contact') }}">Placement Contact</a></li>

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
                            <img src="{{ $url . 'placement/' . $data->header_image }}" class="img-fluid">
                        @endif

                    </div>
                    {{-- modal start --}}

                    <div class="modal fade " id="exampleModalCenter" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered  mt-5 pt-3 " role="document">
                            <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <div class="modal-content">

                                <div class="modal-body">

                                    @if (strlen($data->permalink) > 30)
                                            <iframe src="{{ str_replace('watch?v=', 'embed/', $data->permalink) }}"
                                                width="100%" height="400px" frameborder="0"></iframe>
                                        @else
                                            <iframe src="https://www.youtube.com/embed/AMFNBg6GGqk" width="100%"
                                                height="400px" frameborder="0"></iframe>
                                        @endif
                                </div>

                            </div>
                        </div>
                    </div>
                    {{-- modal end --}}

                    <div class=" mb-5 ">
                        <p class="text-justify"><?php echo substr($data->description, 0, 1114); ?> </p>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="effect-wrapper">

                                    <div class="video-button"></div>
                                    <a class="hover-link" data-toggle="modal" data-target="#exampleModalCenter"
                                        title="Youtube Video"></a>
                                </div>
                                <img src="{{ $url . 'placement/' . $data->image_name }}" class="img-fluid">

                            </div>
                            <div class="col-sm-6">
                                <img src="{{ $url . 'placement/' . $data->image_name1 }}" class="img-fluid">

                            </div>
                        </div>
                        <p class="text-justify"><?php echo substr($data->description, 1115); ?> </p>
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
                                                href="{{ route('placement', $quick->title) }}">{{ $quick->title }}</a>
                                            <hr>

                                        </b>
                                    </li>
                                @endforeach
                                <li> <b class="text-white"> <i class="fa fa-angle-double-right"
                                            aria-hidden="true"></i><a class="text-capitalize text-dark" href="{{ route('appointment') }}"> Appointment
                                            Letter</a></b> </li>
                                <hr>
                                <li> <b class="text-white"> <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                        <a class="text-capitalize text-dark" href="{{ route('requiters') }}"> Our Recruiters </a> </b> </li>
                                <hr>
                                <li> <b class="text-white"> <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                        <a class="text-capitalize text-dark" href="{{ route('placement-contact') }}"> Placement Contact </a> </b> </li>
                                <hr>

                            </ul>


                        </div>
                        <div class="bg-xs-dark_gray m-3 p-3">
                            <h3 class="text-center text-white"> Our Programs </h3>
                            <hr>
                            <!-- <div class="aside-section-headings"></div> -->

                            <ul class="bullet_list">
                                <?php $programs = DB::table('course_tbl')
                                ->select('program')
                                ->where('is_deleted', '1')
                                ->groupBy('program')
                                ->orderBy(DB::raw('count(id) '), 'DESC')
                                ->get(); ?>
                            @foreach ($programs as $program)
                            <li> <b class="text-white"> <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                <a class="text-capitalize text-dark font-11" href="{{ route('program', strtolower(str_replace(' ', '-', $program->program))) }}"><b class="color-orange ">
                                        <?php echo $program->program; ?>
                                    </b></a> </li>
                            @endforeach
                           

                            </ul>


                        </div>


                    </section>
                    @include('include.admission')
                </div>
            </div>
            <div class="">
                <section class="academia-sec4"
                    style="background-image: url('{{ $url . 'placement/' . $data->header_image }}')">
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
                                        <a href="https://www.ugc.ac.in/Error.aspx?code=500"
                                            target="_blank"><span>UGC</span></a>
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
