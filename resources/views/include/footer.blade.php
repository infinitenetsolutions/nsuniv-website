<style>
    ul.brand-icon2 li a i {
        font-size: 14px !important;
    }

    .footer-section .footer-text {
        text-align: center !important;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #000;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: #fff;
        padding: 0px 16px;
        text-decoration: none;
        display: block;
        border-bottom: 2px solid white;
    }

    .dropdown-content a:hover {
        background-color: #ddd;
        color: #000;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }
</style>
<!-- vt start -->
<div class="col-md-12 col-md-12 col-lg-12 col-xl-12">
    {{-- <div class="text_text">
        <span><a data-toggle="modal" data-target="#IET" href="javascript:void(0);">Report any technical problem in the Online Application Form
                <img src="images/submit.png" class="img-fluid pl-3" />
            </a>
        </span>
    </div> --}}

    <div class="reco_box">
        <div class="modal fade" id="IET" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div id="ctl00_ContentPlaceHolder1_UpdatePanel2">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true"
                                    style="color:#e3ae21;border:3px solid #e3ae21;padding: 1px 6px;border-radius: 50%;line-height: 25px; opacity: 1;">&times;</span></button>
                        </div>
                        <!-- <h3>Online Form - Report a problem</h3> -->
                    </div>

                    <div class="modal-body text">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!4v1580704861797!6m8!1m7!1sCAoSLEFGMVFpcE5SNWxBeEZ1Wks4Y0tiSFVQd2lvT01oVTl5VWRwa3BFbTdiSDVj!2m2!1d22.809599581886!2d86.264062143551!3f36.707148350228515!4f1.820868563873006!5f0.7820865974627469"
                                    width="100%" height="400" frameborder="0" style="border:0;"
                                    allowfullscreen=""></iframe>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- //vt end -->

<!-- virtual tour -->
<div id="VirtualTour" class="w3-modal" style="z-index: 999999; display: none;">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:100%; margin-bottom:50px;">
        <div class="w3-section" style="margin-bottom:-7px!important;">
            <iframe
                src="https://www.google.com/maps/embed?pb=!4v1580704861797!6m8!1m7!1sCAoSLEFGMVFpcE5SNWxBeEZ1Wks4Y0tiSFVQd2lvT01oVTl5VWRwa3BFbTdiSDVj!2m2!1d22.809599581886!2d86.264062143551!3f36.707148350228515!4f1.820868563873006!5f0.7820865974627469"
                width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
        <div class="w3-container w3-border-top w3-padding-16" style="background-color:#1b4169;">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"
                    style="color:#fff;border:3px solid #fff;padding: 1px 6px;border-radius: 50%;line-height: 25px;">&times;</span></button>
        </div>
    </div>
</div>
<!-- // virtual tour -->





<footer>
    <div class="container">

        <div class="row">
            <span class="footer_collapse col-12 col-md-12">
                <div class="row">
                    <div class="col-12 col-md-2 col-lg-2 col-xl-2 ftr-colm1">
                        <!-- <h3>
                               Media</h3> -->
                        <img src=" {{ asset('images/logo.png') }}" alt="Netaji unuiversity" style="width:100%;" />
                        <strong style="font-size: 23px">NETAJI SUBHAS</strong>
                        <b class="text-center"
                            style="font-size: 30px; border-bottom:solid 2px #fff; line-height: 16px; "> UNIVERSITY </b>
                        <small style="font-size: 7.9px; line-height: 38px;"> Estd. Under Jharkhand State Private
                            University Act, 2018 </small>
                    </div>
                    <div class="col-12 col-md-2 col-lg-2 col-xl-2 ftr-colm1">
                        <h3>
                            About NSU </h3>
                        <?php $abouts = DB::table('pages')
                            ->where('title', 'not like', '%Message%')
                            ->where('title', 'not like', '%learning%')
                            ->where('is_deleted', '1')
                            ->where('page_type', 'about')
                            ->limit(9)
                            ->get();
                        ?>
                        <ul class="icon-before">
                            @foreach ($abouts as $about)
                                <li><a class="font-13" href="{{ route('about', $about->title) }}"><i
                                            class="fas fa-external-link-alt"></i>
                                        {{ $about->sub_title }}</a></li>
                            @endforeach
                            <li><a class="font-13" href="{{ route('govbody') }}"><i
                                        class="fas fa-external-link-alt"></i> The Governing Body</a></li>
                            <?php $facultyes = DB::table('faculty_tbl')
                                ->distinct()
                                ->get(['type']);
                            ?>
                            @foreach ($facultyes as $faculty)
                                @if ($faculty->type != 'hou')
                                    @if ($faculty->type != 'hod')
                                        <li><a class="text-capitalize" href="{{ route('faculty', $faculty->type) }}">
                                                <i class="fas fa-external-link-alt"></i> our {{ $faculty->type }}</a>
                                        </li>
                                    @else
                                        <li><a class="text-capitalize" href="{{ route('faculty', $faculty->type) }}">
                                                <i class="fas fa-external-link-alt"></i> our {{ 'HOD' }}</a>
                                        </li>
                                    @endif
                                @endif
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-12 col-md-2 col-lg-2 col-xl-2 ftr-colm1">
                        <h3> Infrastructure </h3>
                        <?php $infrastructures = DB::table('pages')
                            ->where('page_type', 'infrastructure')
                            ->where('is_deleted', '1')
                            ->limit(9)
                            ->get();
                        ?>
                        <ul class="icon-before">
                            @foreach ($infrastructures as $infrastructure)
                                <li><a class="font-13 text-leftfgty` "
                                        href="{{ route('infrastructure', $infrastructure->title) }}">
                                        <i class="fas fa-external-link-alt"></i>
                                        {{ $infrastructure->sub_title }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-12 col-md-2 col-lg-2 col-xl-2 ftr-colm1">
                        <h3>
                            Know more</h3>
                        <ul class="icon-before">
                            <li><a href="{{ route('govbody') }}"><i class="fas fa-child"></i> The Governing Body</a>
                            </li>
                            <li><a href="{{ route('course_list') }}"> <i class="fa fa-graduation-cap"
                                        aria-hidden="true"></i> Programs </a></li>
                            <li><a href="{{ route('image-gallery') }}"> <i class="fas fa-university    "></i>
                                    University Gallery</a></li>
                            <li><a href="{{ route('media-gallery') }}"> <i class="fas fa-newspaper    "></i> Media
                                    Gallery</a></li>

                            <li> <a href="{{ route('appointment') }}"><i class="fas fa-envelope-open-text"></i>
                                    Appointment Letter</a></li>
                            <li><a href="{{ route('requiters') }}"><i class="fas fa-user-tie"></i> Our Recruiter </a>
                            </li>
                            <li><a href="{{ route('placement-contact') }}"><i class="fas fa-id-card-alt"></i>
                                    Placement Contact </a></li>
                            <li><a href="/placements/placement"><i class="fas fa-users"></i> Placement </a></li>
                            <li class="dropdown">
                                <a><i class="fas fa-asterisk"> </i>Mandatory Disclosure</a>
                                <div class="dropdown-content">
                                    <a target="blank"
                                        href="https://nsuniv.ac.in/assets/mandatory_disclose/Main%20File.pdf">NSU</a>
                                    <a target="blank"
                                        href="https://nsuniv.ac.in/assets/images/upload/NSIBM_21-22.pdf">NSIBM</a>

                                </div>
                            </li>


                        </ul>
                    </div>

                    <div class="col-12 col-md-2 col-lg-2 col-xl-2 ftr-colm1">
                        <h3>
                            Contact Us</h3>
                        <ul class="reach-us brand-icon2">

                            <li><i class="fas fa-map-marked mr-2 color-orange"></i> Pokhari,Near Bhilai
                                Pahadi,Jamshedpur,Jharkhand</li>
                            <li><i class="fas fa-phone-office color-orange"></i> 0657-223-3022</li>
                            <li><i class="fas fa-mobile-alt color-orange"></i> 9334-666-453</li>

                            <li><i class="fas fa-envelope mr-2 color-orange"></i> info@nsuniv.ac.in</li>
                            <li><i class="fas fa-globe mr-2 color-orange"></i> nsuniv.ac.in</li>
                        </ul>
                        <ul class="social-media">

                            <li><a href="https://www.facebook.com/nsu.jamshedpur/" target="_blank">
                                    <i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.youtube.com/channel/UCjndfC0cVjGnscin5RZgaFA" target="_blank"><i
                                        class="fa fa-youtube" aria-hidden="true">
                                    </i></a></li>
                            <li><a href="https://in.linkedin.com/company/netaji-subhas-university" target="_blank"><i
                                        class="fa fa-linkedin" aria-hidden="true">
                                    </i></a></li>

                            <li><a href="https://www.instagram.com/nsujamshedpur/?hl=en" target="_blank"><i
                                        style="color: #f46339" class="fab fa-instagram " aria-hidden="true">
                                    </i></a></li>
                        </ul>


                    </div>
                    <div class="col-12 col-md-2 col-lg-2 col-xl-2 ftr-colm1">
                        <h3>
                            Explore / Engage</h3>
                        <ul class="brand-icon2">
                            <li><a data-toggle="modal" data-target="#IET" href="javascript:void(0);">
                                    <i class="fas fa-redo"></i>
                                    360° VIEW</a></li>

                            <li><a data-toggle="modal" data-target=".bs-example-modal-lg" href="javascript:void(0);">
                                    <i class="fa fa-bookmark"></i>
                                    Get Started</a></li>

                            <li><a href="tel:9334833167">
                                    <i class="fa fa-address-book"></i>
                                    Call us</a></li>

                            <li><a href="https://api.whatsapp.com/send?phone=919386467619&amp;text=&amp;source=&amp;data="
                                    target="_blank">
                                    <i class="fab fa-whatsapp"></i>
                                    Chat Now</a></li>

                        </ul>
                    </div>



                </div>
            </span>


        </div>
        <div class="row">
            <div class="col-md-12 ">
                <div class="footer-section">

                    <p class="footer-text">© 2022 <a href="">Netaji Subhas University.</a> All Rights Reserved
                        ||
                        Developed With <i class="fa fa-heart" style="color:#c70013"></i> By <a
                            href="http://infinitenetsolutions.com/" target="_blank">Infinite Net Solutions</a>
                    </p>
                </div>
            </div>
        </div>

        {{-- cm9oaXQ4MzAxM0BnbWFpbC5jb20= --}}
        {{-- aHR0cHM6Ly93d3cubGlua2VkaW4uY29tL2luL3JvaGl0LWt1bWFyLXJhamE= --}}
    </div>
</footer>
{{-- aHR0cHM6Ly9naXRodWIuY29tL1JvaGl0LWt1bWFyLXJhamE= --}}
