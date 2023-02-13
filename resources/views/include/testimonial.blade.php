<?php $url = '';

// if ($_SERVER['HTTP_HOST'] == '127.0.0.1:8000') {
//     $url = 'http://127.0.0.1:8001/upload/';
// } else {
    $url = 'https://nsuniv.ac.in/nsuadmin/public/upload/';
// }

// testimonial section
$testimonials = DB::table('testimonial_tbl')
    ->where('is_deleted', '1')
    ->get();

?>
<section class="layer-overlay testimonial text-center pt-5">
    <div class="container">

        <h2 class="text-uppercase text-white carousel-inner title wow fadeInUp  ">What <span class="text-warning">People
            </span>Say
        </h2>
        <span class="line-bottom1 carousel-inner "> &nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
        <p class="text-uppercase  wow fadeInDown mb-0 carousel-inner text-warning">Student and Parents Opinion</p>
        <div id="testimonial4"
            class="carousel slide testimonial4_indicators testimonial4_control_button thumb_scroll_x swipe_x"
            data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">

            <div class="carousel-inner mt-0 " role="listbox">
                <div class="carousel-item testimonial-item active">
                    <div class="testimonial4_slide  row">
                        <div class="col-sm-2">
                            <img class="img-thumbnail img-circle" alt=""
                                src="{{ $url . 'testimonial/' . $testimonials[0]->testimonial_image }}"
                                style="width:100px">
                        </div>
                        <div class="col-sm-10">
                            <span class="text-justify"> <?php echo $testimonials[0]->message; ?></span>
                            <h4 class="">
                                {{ $testimonials[0]->testimonial_name }}
                                -
                                {{ $testimonials[0]->testimonial_course }}
                                ({{ $testimonials[0]->testimonial_batch }})</h4>
                            <h6 class="text-gray-darkgray ">
                                {{ $testimonials[0]->testimonial_company }}
                            </h6>
                        </div>


                    </div>
                </div>
                @foreach ($testimonials as $testimonial)
                    <div class="carousel-item testimonial-item ">
                        <div class="testimonial4_slide  row">
                            <div class="col-sm-2">
                                <img class="img-thumbnail img-circle" alt=""
                                    src="{{ $url . 'testimonial/' . $testimonial->testimonial_image }}"
                                    style="width:100px">
                            </div>
                            <div class="col-sm-10">
                                <span class="text-justify"> <?php echo $testimonial->message; ?></span>
                                <h4 class="">
                                    {{ $testimonial->testimonial_name }}
                                    -
                                    {{ $testimonial->testimonial_course }}
                                    ({{ $testimonial->testimonial_batch }})
                                </h4>
                                <h6 class="text-university">
                                    {{ $testimonial->testimonial_company }}
                                </h6>
                            </div>


                        </div>
                    </div>
                @endforeach

            </div>
            <a style="top: 25% !important" class="carousel-control-prev" href="#testimonial4" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#testimonial4" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
</section>
@include('include.afflieted')
<style>
    .carousel-control-next,
    .carousel-control-prev {
        height: 20px;
        top: 25%;
        opacity: 0.5;
        width: 4%;
    }

    .heading {
        text-align: center;
        color: #454343;
        font-size: 30px;
        font-weight: 700;
        position: relative;
        /* margin-bottom: 70px; */
        text-transform: uppercase;
        z-index: 999;
    }

    .white-heading {
        color: #ffffff;
    }

    .heading:after {
        content: ' ';
        position: absolute;
        top: 55%;
        left: 50%;
        height: 40px;
        width: 180px;
        border-radius: 4px;
        transform: translateX(-50%);
        background: url(img/heading-line.png);
        background-repeat: no-repeat;
        background-position: center;
    }

    .white-heading:after {
        background: url(https://i.ibb.co/d7tSD1R/heading-line-white.png);
        background-repeat: no-repeat;
        background-position: center;
    }

    .heading span {
        font-size: 18px;
        display: block;
        font-weight: 500;
    }

    .white-heading span {
        color: #ffffff;
    }

    /*----- start Testimonial-------*/
    .testimonial:after {
        position: absolute;
        top: -0 !important;
        left: 0;
        content: " ";
        background: url(img/testimonial.bg-top.png);
        background-size: 100% 100px;
        width: 100%;
        height: 100px;
        float: left;
        z-index: 99;
    }

    .testimonial {
        min-height: 200px;
        position: relative;
        background: url('{{ asset('images/nsu/testimonial.jpg') }}');

        background-attachment: fixed;

        background-position: center;
        background-size: cover;

    }

    #testimonial4 .carousel-inner:hover {
        cursor: -moz-grab;
        cursor: -webkit-grab;
    }

    #testimonial4 .carousel-inner:active {
        cursor: -moz-grabbing;
        cursor: -webkit-grabbing;
    }

    #testimonial4 .carousel-inner .item {
        overflow: hidden;
    }

    .testimonial4_indicators .carousel-indicators {
        left: 0;
        margin: 0;
        width: 100%;
        font-size: 0;
        height: 20px;
        bottom: 15px;
        padding: 0 5px;
        cursor: e-resize;
        overflow-x: auto;
        overflow-y: hidden;
        position: absolute;
        text-align: center;
        white-space: nowrap;
    }

    .testimonial4_indicators .carousel-indicators li {
        padding: 0;
        width: 14px;
        height: 14px;
        border: none;
        text-indent: 0;
        margin: 2px 3px;
        cursor: pointer;
        display: inline-block;
        background: #ffffff;
        -webkit-border-radius: 100%;
        border-radius: 100%;
    }

    .testimonial4_indicators .carousel-indicators .active {
        padding: 0;
        width: 14px;
        height: 14px;
        border: none;
        margin: 2px 3px;
        background-color: #e3ae216b;
        -webkit-border-radius: 100%;
        border-radius: 100%;
    }

    .testimonial4_indicators .carousel-indicators::-webkit-scrollbar {
        height: 3px;
    }

    .testimonial4_indicators .carousel-indicators::-webkit-scrollbar-thumb {
        background: #eeeeee;
        -webkit-border-radius: 0;
        border-radius: 0;
    }

    .testimonial4_control_button .carousel-control {
        top: 175px;
        opacity: 1;
        width: 40px;
        bottom: auto;
        height: 40px;
        font-size: 10px;
        cursor: pointer;
        font-weight: 700;
        overflow: hidden;
        line-height: 38px;
        text-shadow: none;
        text-align: center;
        position: absolute;
        background: transparent;
        border: 2px solid #ffffff;
        text-transform: uppercase;
        -webkit-border-radius: 100%;
        border-radius: 100%;
        -webkit-box-shadow: none;
        box-shadow: none;
        -webkit-transition: all 0.6s cubic-bezier(0.3, 1, 0, 1);
        transition: all 0.6s cubic-bezier(0.3, 1, 0, 1);
    }

    .testimonial4_control_button .carousel-control.left {
        left: 7%;
        top: 50%;
        right: auto;
    }

    .testimonial4_control_button .carousel-control.right {
        right: 7%;
        top: 50%;
        left: auto;
    }

    .testimonial4_control_button .carousel-control.left:hover,
    .testimonial4_control_button .carousel-control.right:hover {
        color: #000;
        background: #fff;
        border: 2px solid #fff;
    }

    .testimonial4_header {
        top: 0;
        left: 0;
        bottom: 0;
        width: 550px;
        display: block;
        margin: 30px auto;
        text-align: center;
        position: relative;
    }

    .testimonial4_header h4 {
        color: #ffffff;
        font-size: 30px;
        font-weight: 600;
        position: relative;
        letter-spacing: 1px;
        text-transform: uppercase;
    }

    .testimonial4_slide {
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        width: 80%;
        margin: auto;
        padding: 20px;
        position: relative;
        text-align: center;
    }

    .testimonial4_slide img {
        top: 0;
        left: 0;
        right: 0;
        width: 136px;
        height: 136px;
        margin: auto;
        display: block;
        color: #f2f2f2;
        font-size: 18px;
        line-height: 46px;
        text-align: center;
        position: relative;
        border-radius: 50%;
        box-shadow: -6px 6px 6px rgba(0, 0, 0, 0.23);
        -moz-box-shadow: -6px 6px 6px rgba(0, 0, 0, 0.23);
        -o-box-shadow: -6px 6px 6px rgba(0, 0, 0, 0.23);
        -webkit-box-shadow: -6px 6px 6px rgba(0, 0, 0, 0.23);
    }

    .testimonial4_slide p {
        color: #ffffff;
        font-size: 20px;
        line-height: 1.4;
        margin: 40px 0 20px 0;
    }

    .testimonial4_slide h4 {
        color: #ffffff;
        font-size: 22px;
    }


    .testimonial .carousel-control-next-icon,
    .testimonial .carousel-control-prev-icon {
        width: 35px;
        height: 35px;
    }

    .testimonial-item {
        height: 60vh !important;
    }

    @media(max-width:675px) {
        .title {
            padding-top: 50px;
        }

        .testimonial-item {
            height: 100vh !important;
        }

        .testimonial4_slide {
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            width: 100%;
            margin: auto;
            padding: 20px;
            position: relative;
            text-align: center;
        }
    }



    .title::after {
        background-color: #ffffff !important;
    }

    .line-bottom1 {
        color: #fff !important;
        margin-top: -20px;
        border-top: 2px solid #fff;
    }

    /* ------testimonial  close-------*/

</style>
