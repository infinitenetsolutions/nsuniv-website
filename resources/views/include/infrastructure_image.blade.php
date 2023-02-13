
<section class="home-sec2 mydiv"   >
    <div class="container-fluid">

        <div class="row slider-wrapper">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="50000"
                data-pause="false">
                <div class="carousel-inner" role="listbox" onclick="stopsliding()">

                    <div  class="carousel-item active">
                        <iframe width="100%" height="100%" src="https://youtube.com/embed/AMFNBg6GGqk"
                            ></iframe>
                        
                    </div>
                    <div  class="carousel-item">
                        <iframe width="100%" height="100%" src="https://youtube.com/embed/eLikqvUXDqM"
                        ></iframe>
                       
                    </div>
                    <div class="carousel-item">
                        <iframe width="100%" height="100%" src="https://youtube.com/embed/VuF5ZUywODU"
                        ></iframe>
                    
                    </div>
                    <?php //$sliders = DB::table('slider_tbl')->get(); ?>
                    {{-- @foreach ($sliders as $slider)
                        <div id="figurebanner1_repfigurebanner_ctl01_divfigure" class="carousel-item">
                            <iframe width="100%" height="100%" src="https://youtube.com/embed/szzlzRFnxg8"
                            ></iframe>
                            <div class="banner_text"></div>
                        </div>
                    @endforeach --}}



                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                        data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span> </a><a class="carousel-control-next"
                        href="#carouselExampleIndicators" role="button" data-slide="next"><span style="    margin-right: -419px;"
                            class="carousel-control-next-icon" aria-hidden="true">
                        </span><span class="sr-only">Next</span> </a>
                </div>


            </div>

        </div>
</section>
