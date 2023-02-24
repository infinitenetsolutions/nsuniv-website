<?php $affiliations1 = DB::table('affiliated_tbl')
    ->take(6)
    ->get();
$affiliations = DB::table('affiliated_tbl')
    ->skip(0)
    ->take(100)
    ->get()
    ->chunk(6);

?>



<div class="p-2 ml-3"><h2 class="text-uppercase text-dark carousel-inner title wow fadeInDown ">Our <strong
    class="text-warning line-top font-weight-600"> Affiliation </strong>
</h2></div>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner  p-4 card">
        <div class="carousel-item active">
            <div class="row">
                @foreach ($affiliations1 as $affiliation2)
                    <div class="col-md-2 text-center">
                        <img class="img-fluid" src="{{ $url . 'affiliated/' . $affiliation2->image_name }}" style="width:70%!important; height:150px;">
                        <div class="border p-2 mt-2" style="background-color:#e3b121; height: 85px; border-radius: 20px">
                            {{-- <h4>{{ $affiliation->title }}</h4> --}}
                            <a target="_blank" href="{{ $affiliation2->virtual_image_name }}" style="font-size: 14px" >
                                {{ $affiliation2->sub_title }}
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        
        {{-- @foreach ($affiliations as $affiliation1)
            <div class="carousel-item">
                <div class="row">
                    @foreach ($affiliation1 as $affiliation)
                        <div class="col-md-2 ">
                            <img class="img-fluid" src="{{ $url . 'affiliated/' . $affiliation->image_name }}">
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach --}}
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
