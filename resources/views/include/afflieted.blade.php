<?php $affiliations1 = DB::table('affiliated_tbl')
    ->take(6)
    ->get();
$affiliations = DB::table('affiliated_tbl')
    ->skip(2)
    ->take(6)
    ->get();

$affiliation_mobile = DB::table('affiliated_tbl')->get();
?>



<div class="p-2 ml-3">
    <h2 class="text-uppercase text-dark carousel-inner title wow fadeInDown ">Our <strong
            class="text-warning line-top font-weight-600"> Affiliation </strong>
    </h2>
</div>



<div id="carouselExampleControls" class="carousel slide desktop-show" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="row">
                @foreach ($affiliations1 as $affiliation2)
                    <div class="col-md-2 col-6 text-center">
                        <img class="img-fluid" src="{{ $url . 'affiliated/' . $affiliation2->image_name }}"
                            style="width:70%!important; height:150px;">
                        <div class="border p-2 mt-2"
                            style="background-color:#e3b121; height: 85px; border-radius: 20px">
                            <a target="_blank" href="{{ $affiliation2->virtual_image_name }}" style="font-size: 14px">
                                {{ $affiliation2->sub_title }}
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="carousel-item ">
            <div class="row">
                @foreach ($affiliations as $aff)
                    <div class="col-md-2 col-6 text-center">
                        <img class="img-fluid" src="{{ $url . 'affiliated/' . $aff->image_name }}"
                            style="width:70%!important; height:150px;">
                        <div class="border p-2 mt-2"
                            style="background-color:#e3b121; height: 85px; border-radius: 20px">
                            <a target="_blank" href="{{ $aff->virtual_image_name }}" style="font-size: 14px">
                                {{ $aff->sub_title }}
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
    <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
        <span class="btn btn-warning carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
        <span class="btn btn-warning carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </button>
</div>
<div id="carouselExampleControls1" class="carousel slide mobile-show " data-ride="carousel">
    <div class="carousel-inner">
        @foreach ($affiliation_mobile as $mobile)
            <div class="carousel-item text-center {{ $loop->index == 1 ? 'active' : '' }}">
                <img class="img-fluid" src="{{ $url . 'affiliated/' . $mobile->image_name }}"
                    style="width:70%!important; height:180px;">
                <div class="border p-2 mt-2" style="background-color:#e3b121; height: 52px; border-radius: 20px">
                    <a target="_blank" href="{{ $mobile->virtual_image_name }}" style="font-size: 14px">
                        {{ $mobile->sub_title }}
                    </a>
                </div>
            </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls1" data-slide="prev">
        <span class="btn btn-warning carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-target="#carouselExampleControls1" data-slide="next">
        <span class="btn btn-warning carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </button>
</div>

<style>
    @media screen and (max-width: 580px) {
        .mobile-show {
            display: block;
        }

        .desktop-show {
            display: none;
        }
    }

    @media screen and (min-width: 580px) {
        .mobile-show {
            display: none;
        }

        .desktop-show {
            display: block;
        }
    }

    .carousel-control-prev {
        height: 20px;
        top: 25% !important;
        opacity: 1;
        width: 5%;
    }

    #carouselExampleControls1 button {
        border: none;
        background-color: transparent !important
    }

    #carouselExampleControls button {
        border: none;
        background-color: transparent !important
    }
</style>
