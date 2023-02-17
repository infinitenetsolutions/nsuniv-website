<?php $affiliations1 = DB::table('affiliated_tbl')
    ->take(6)
    ->get();
$affiliations = DB::table('affiliated_tbl')
    ->skip(0)
    ->take(100)
    ->get()
    ->chunk(6);

?>



<div class="p-2 ml-3">
    <h2 class="text-uppercase text-dark carousel-inner title wow fadeInDown ">Our <strong
            class="text-warning line-top font-weight-600"> Affiliation </strong>
    </h2>
</div>
<div id="testimonial4" class="carousel slide testimonial4_indicators testimonial4_control_button thumb_scroll_x swipe_x"
    data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">
    <div class="carousel-inner  p-4 card">
        <div class="carousel-item active">
            <div class="row">
                @foreach ($affiliations1 as $affiliation2)
                    <div class="col-md-3 text-center">
                        <img class="img-fluid" src="{{ $url . 'affiliated/' . $affiliation2->image_name }}"
                            style="width:70%!important; height:150px;">
                        <div class="border p-2 mt-2"
                            style="background-color:#e3b121; height: 85px; border-radius: 20px">
                            {{-- <h4>{{ $affiliation->title }}</h4> --}}
                            <a target="_blank" href="{{ $affiliation2->virtual_image_name }}" style="font-size: 14px">
                                {{ $affiliation2->sub_title }}
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div id="testimonial4" class="carousel slide testimonial4_indicators testimonial4_control_button thumb_scroll_x swipe_x"
    data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">

    <div class="carousel-inner mt-0 " role="listbox">
        <div class="carousel-item testimonial-item active">
            <div class="testimonial4_slide  row">
                @foreach ($affiliations1 as $affiliation2)
                    <div class="col-md-2 text-center">
                        <img class="img-fluid" src="{{ $url . 'affiliated/' . $affiliation2->image_name }}"
                            style="width:70%!important; height:150px;">
                        <div class="border p-2 mt-2"
                            style="background-color:#e3b121; height: 85px; border-radius: 20px">
                            {{-- <h4>{{ $affiliation->title }}</h4> --}}
                            <a target="_blank" href="{{ $affiliation2->virtual_image_name }}" style="font-size: 14px">
                                {{ $affiliation2->sub_title }}
                            </a>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
        @foreach ($testimonials as $testimonial)
            <div class="carousel-item testimonial-item ">
                <div class="testimonial4_slide  row">
                    @foreach ($affiliations1 as $affiliation2)
                    <div class="col-md-3 text-center">
                        <img class="img-fluid" src="{{ $url . 'affiliated/' . $affiliation2->image_name }}"
                            style="width:70%!important; height:150px;">
                        <div class="border p-2 mt-2"
                            style="background-color:#e3b121; height: 85px; border-radius: 20px">
                            {{-- <h4>{{ $affiliation->title }}</h4> --}}
                            <a target="_blank" href="{{ $affiliation2->virtual_image_name }}" style="font-size: 14px">
                                {{ $affiliation2->sub_title }}
                            </a>
                        </div>
                    </div>
                @endforeach
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
