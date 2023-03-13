<style>
    .mega_menu .menu_boxx1 {
        margin-top: -4px !important;
    }

    @media (max-width: 576px) {
        .head-of-university {
            margin-top: 1100px !important;
        }

        .owl-carousel .owl-item .item {
            background-size: contain !important;
            background-repeat: no-repeat !important;
        }

        .owl-carousel .owl-item #homebanner1_RepBannerImg_ctl03_anch {
            background-size: contain !important;
            background-repeat: no-repeat !important;
        }

        #carouselBanner .item {
            max-height: 365px !important;
            background-size: contain !important;
            background-repeat: no-repeat !important;
        }

        .owl-carousel .owl-item .item {
            background-size: contain !important;
            background-repeat: no-repeat;
        }

        .owl-carousel .owl-stage-outer {
            height: 220px !important;
        }
    }

    @media (max-width: 639px) and (min-width: 320px) {
        .carousel-content {
            min-height: 230px !important;
            padding: 135px 30px 0 0 !important;
        }
    }

</style>

<x-layout>



    @slot('body')
        @include('include.slider')
        <!-- Study Section -->
        @include('include.studyat')
        <span id="infrastructure_image"></span>
        <!-- Student life Section -->
        <section class="home-sec3 mydiv blues">
            <div class="container mb-5">
                <div class="row    ">
                    <div class="col-12  ">
                        <h2 class="wow fadeInDown ">Student <span>Life</span></h2>
                        <div class="student-home" id="student_life">

                        </div>
                    </div>
                </div>
            </div>


        </section>

        <section class="p-3 mydiv mb-1" style="background: #e3ae21;">
            <div class="container">
                <div class="row ">
                    <div class="col-md-4">
                        <h2 class="wow fadeInDown mb-3 text-uppercase  ">
                            <span class="border-bottom mb-2 text-dark">Notice</span> <span
                                class="text-white ">Board</span>
                        </h2>
                        <div class="double-line-bottom-theme-colored-2"></div>
                        <marquee width="100%" height="300" onmouseover="this.stop()" onmouseout="this.start()" scrollamount="3" scrolldelay="2" direction="up" behavior="alternate">
                            @foreach ($noticeboard as $event)
                                <article>
                                    <div class="event-small media sm-maxwidth400 mt-0 mb-0 pt-0 pb-15">
                                        <div class="event-date text-center">
                                            <ul class="text-white">
                                                <li class="font-18 font-weight-700 border-bottom">
                                                    {{ explode('-', $event->timing)[2] }}
                                                </li>

                                                <li class="font-14 text-center text-uppercase mt-1">
                                                    {{ date_format(date_create($event->timing), 'M') }}
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="{{ route('noticeboard', $event->id) }}">
                                            <div class="event-content ">
                                                <h5 class="media-heading font-16 font-weight-600 "><a
                                                        href="{{ route('noticeboard', $event->id) }}">
                                                        {{ $event->name }}</a></h5>
                                                <span class="mr-10 text-white"><i
                                                        class="far fa-clock text-theme-colored2"></i>
                                                    {{ $event->created_at }}
                                                    &nbsp; &nbsp;

                                                    <span class="text-white"> <i
                                                            class="far fa-map-marker-alt text-theme-colored2"></i>
                                                        {{ $event->title }}</span>
                                            </div>
                                        </a>
                                    </div>
                                </article>
                            @endforeach
                        </marquee>
                    </div>

                    <div class="col-12 col-md-8 col-lg-8 col-xl-8">
                        <h2 class="wow mb-3 fadeInDown text-uppercase">
                            <span class="border-bottom mb-2 font-weight-bold text-dark">University</span> <span
                                class="text-white ">Tour</span>
                        </h2>
                        <div class="double-line-bottom-theme-colored-2"></div>
                        <div class="effect-wrapper" style="height:250px">
                            <div class="thumb" style=" background: black; ">
                                <img class="img-fullwidth"
                                    src="{{asset('images/about/tour.jpeg') }}" alt="project"
                                    style="opacity: 0.6;">
                            </div>
                            <div class="video-button"></div>
                            <a class="hover-link" data-lightbox-gallery="youtube-video"
                                href="https://www.youtube.com/embed/phWNqyfCgzI" title="Youtube Video">Youtube
                                Video</a>
                        </div>



                    </div>
                </div>

            </div>
            </div>
        </section>

        <section class="home-sec5 mydiv mydiv_nsu">
            <div class="container">

                <h2 class="wow fadeInDown  text-uppercase font-weight-600">
                    <strong class=" border-bottom mb-2 text-dark" >Student</strong> <span>Gallery</span></h2>

              

                <abbr class="all-research-btn2 wow fadeInDown float-right">
                    <a href="{{ route('image-gallery') }}">View All
                        <img src="images/arrow-icon.png" class="view_arrow_img"></a></abbr>
                <div class="home-sec5-content">
                    <div class="row">
                        @foreach ($gallery as $title)
                            <?php $image = DB::table('gallery_tbl')
                                ->where('title', $title->title)
                                ->first();
                            
                            ?>
                            <a href="{{ route('image_gallery_details', $title->title) }}"
                                class="col-sm-4 pro3 wow mt-2 fadeInDown">
                                <div id="homestudentwork1_rptrlower_ctl00_divcolumn" class="home-sec5-colm1">
                                    <span>
                                        <img src="{{ $url . 'gallery/' . $image->image_name }}" /></span>
                                    <h4>
                                        {{ $image->title }}
                                    </h4>
                                </div>
                            </a>
                        @endforeach

                    </div>
                </div>


            </div>

        </section>

        <!-- head of department -->
        <section class="scholarship-scheme-sec5 home-sec3 head-of-university">
            <div class="container">
                <h2 class="text-uppercase text-dark carousel-inner title wow fadeInDown ">Our <strong
                        class="text-warning line-top font-weight-600"> Visionaries </strong>
                </h2>
              
                <ul class="row">
                    @foreach ($hou as $university_head)
                        <div class="col-md-3 ">
                            <div class="team-members maxwidth400 mb-30">
                                <div class="team-thumb">
                                    <img style="height:200px!important" src="{{ $url . 'teacher/' . $university_head->image_name }}"
                                        alt="" class="img-fluid teachers">
                                </div>
                                <div class="team-bottom-part bg-silver-deep  p-2 bg-white">
                                    <h4
                                        class="text-uppercase font-raleway text-theme-colored title-border font-weight-600 text-left pl-2 line-bottom-center m-0">
                                        {{ substr($university_head->name, 0, 20) }} <span
                                            class="text-gray font-13 p-2 ">-
                                            <br>
                                            {{ $university_head->designation }}</span>
                                    </h4>
                                    <p class="font-13 text-justify">
                                        <?php echo substr($university_head->description, 0, 120); ?>.. <a
                                            href="{{ route('faculty-details', $university_head->id) }}"
                                            class="text-danger font-13">
                                            View details</a>
                                    </p>
                                    <?php $social_media = DB::table('social')
                                        ->where('teacher_id', $university_head->id)
                                        ->get(); ?>
                                    <div class="text-center">
                                        <ul class="styled-icons1  icon-theme-colored2 d-flex ">
                                            @foreach ($social_media as $social)
                                                <li class="ml-2 mb-2  rounded-circle border "><a
                                                        class="text-white font-13 p-0 text-center rounded-circle"
                                                        target="_blank" class="text-center"
                                                        href="{{ $social->link }}"><i
                                                            class="fab fa-{{ $social->social }}"></i></a></li>
                                            @endforeach

                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </ul>
            </div>
        </section>
        <!-- //head of department -->


        <section class="home-sec6 mydiv">
            <div class="container">

                <ul class="nav nav-tabs responsive-tabs">
                    <!--  <li class="active"><a href="#news"> News</a></li>-->
                    <li class="active"><a href="#events">Events</a></li>
                    <li><a href="#media-coverage">Media Coverage</a></li>
                </ul>

                <div class="tab-content myTabContent">

                    <h4 class="collapsible_heading open">Events <i class=" "></i></h4>
                    <div class="tab-pane active" id="events">

                        <ul class="row">
                            @foreach ($events as $event)
                                <li class="col-12 col-md-4 col-lg-4 col-xl-4">
                                    <a href="{{ route('event', $event->id) }}">
                                        <div class="happening-colm-color layer-overlay testimonial "
                                            style="background-image: url('{{ $url . 'event/' . $event->images }}');     background-attachment: inherit;                                            ">
                                            <div class="happ-content">
                                                <a class="d-flex carousel-inner "
                                                    href="{{ route('event', $event->id) }}">
                                                    <span class="carousel-inner">Events</span>

                                                    <span class="ml-2 font-weight-bold carousel-inner"><i
                                                            class="far fa-calendar-alt"></i>
                                                        {{ explode('-', $event->timing)[2] }}
                                                        {{ date_format(date_create($event->timing), 'M - Y') }} </span>
                                                </a>


                                                <h5 class=" carousel-inner font-16 font-weight-600 mb-5"><a
                                                        class="text-white" href="{{ route('event', $event->id) }}">
                                                        {{ $event->name }}</a></h5>
                                                <a class="d-flex carousel-inner "
                                                    href="{{ route('event', $event->id) }}">
                                                    <div class="event-content d-flex ">

                                                        <span class="mr-2"><i
                                                                class="fa fa-clock-o text-theme-colored2"></i>
                                                            {{ $event->start }}
                                                            am - {{ $event->end }} pm</span>
                                                        <span> <i class="far fa-map-marker-alt"></i>
                                                            {{ $event->title }}</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <h4 class="collapsible_heading">Media Coverage <i class="  "></i>
                    </h4>
                    <div class="tab-pane tab-pane-events " id="media-coverage">
                        <ul class="row">

                            @foreach ($news as $latest)
                                <li class="col-12 col-md-4 col-lg-4 col-xl-4"><a href="media-coverage42b9.html?Media=Media">
                                        <div id="homeevent1_repmedia_ctl00_divtop" class="happening-colm-color"
                                            style="background-color: #ff{{ $latest->id }}d00;">
                                            <div class="happ-content">
                                                <ol>
                                                    <li>
                                                        {{ substr(explode('-', $latest->updated_at)[2], 0, 2) }}
                                                        {{ date_format(date_create($latest->updated_at), 'M - Y') }}
                                                    </li>
                                                    <li>
                                                        {{ $latest->title }}</li>
                                                </ol>
                                                <h3>
                                                    <p class="text-justify hover "><?php echo substr($latest->massage, 0, 160); ?>..<a
                                                            class="btn btn-sm "
                                                            href="{{ route('news', ['id' => $latest->id]) }}"> View
                                                            Details</a></p>
                                                </h3>

                                            </div>
                                        </div>
                                    </a>
                                </li>
                            @endforeach


                        </ul>
                    </div>
                </div>


                &nbsp;



            </div>


        </section>
        <!--end Media Work -->
        <!-- Testimonials Section -->

        <!-- Footer -->
        <span id="testimonial"></span>

  

        <div class="mt-1 mb-1 p-0 m-0  wow fadeInDown">
            <div class="col-md-12"> <iframe width="100%" style="max-height:400px; min-height:400px"
                    src="https://www.youtube.com/embed/phWNqyfCgzI" allowfullscreen=""></iframe></div>
        </div>

        @include('include.search')

        @include('include.subscribe')
        @include('include.open')
    @endslot

</x-layout>
<!-- testimonial css -->
