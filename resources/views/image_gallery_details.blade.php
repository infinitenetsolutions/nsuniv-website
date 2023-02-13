<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />


    <title>NETAJI SUBHAS UNIVERSITY - Photo Gallery</title>



    <!-- Bootstrap core CSS -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link
        href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900|Montserrat:200,300,400,500,600,700|Open+Sans:300,400,600,700,800"
        rel="stylesheet">
    <!-- Custom styles for this template -->
    <!-- Custom styling CSS -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/colorbox.css') }}">
    <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-responsive-tabs.css') }}">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/inner.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive2.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dynamic_home.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">

    <!-- Google Tag Manager -->



    <!-- End Google Tag Manager -->
    <style>
        .mega_menu .menu_boxx1 {

            margin-top: 0px;

        }

    </style>

<body id="page-top" cz-shortcut-listen="true">



    @include('include.header1')
    <!-- #EndLibraryItem -->
    <!-- About Section -->


    <section class="inner-page">

        <div class="inner-hadding">
            <div class="container">
                <div class="breadcrumb">
                    <a href="{{ route('index') }}">Home</a>
                    <a href="{{ route('image-gallery') }}">Gallery</a>
                    <a href="{{ route('image-gallery') }}"> University Gallery</a>
                    <a href="#"> {{ $gallery_title[0]->title }}</a>
                </div>
            </div>
            <div class="container">
                <div class="top-menu-sec">
                    <h4>Gallery</h4>
                    <ul>

                        <ul>
                            <li class="{{ Request::path() == 'image-gallery' ? 'active' : '' }}"><a
                                    href="{{ route('image-gallery') }}">University Gallery</a></li>
                            <li class="{{ Request::path() == 'media-gallery' ? 'active' : '' }}"><a
                                    href="{{ route('media-gallery') }}">Media Gallery</a>
                            </li>
                            <li
                                class="{{ Request::path() == 'gallery/image-gallery-details/' . $gallery_title[0]->title ? 'active' : '' }}">
                                <a href="#"> {{ $gallery_title[0]->title }} </a>
                            </li>
                        </ul>


                    </ul>
                </div>

                <div class="p-3 ">
                    <h2 class="text-university"> <i class="fa fa-university" aria-hidden="true"></i>
                        Photo Gallery </h2>
                    <a class="row p-2" href="{{ route('index') }}">

                        <img class="logo-sm" src="{{ asset('/images/logo.png') }}" alt="">
                        <p class="tag_line_bold mt-1 ">Netaji Subhas University</p>
                    </a>
                </div>

            </div>
        </div>
        <section class="inner_section media_coverage">
            <div class="container event_detail">
                <div class="col-12">
                </div>
                <section class="card-columns1 waterfall photo_gallery">
                    <div class="row">

                        @foreach ($gallery_title as $image)
                            <div class=" col-sm-3 border p-3 mt-2 ">
                                <a class="group1 cboxElement" href="{{ $url . 'gallery/' . $image->image_name }}">
                                    <div class="card-head">
                                        <img class="card-img-top img-fluid"
                                            src="{{ $url . 'gallery/' . $image->image_name }}" alt="Cafeteria">
                                    </div>
                                    <div class="card-block">
                                        <h4 class="card-title">{{ $image->title }}</h4>

                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>

                </section>

            </div>
        </section>



    </section>
    <br>


    <!--end About Section -->
    <!-- Footer -->
    <!-- #BeginLibraryItem "/Library/footer.lbi" -->
    @include('include.footer')






    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/popper/popper.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- Plugin JavaScript -->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('js/jquery.bootstrap-responsive-tabs.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <!-- Custom scripts for this template -->
    <script src="{{ asset('js/wow.js') }}"></script>
    <script src="{{ asset('js/jquery.slimscroll.min.js') }}"></script>

    <script src="{{ asset('js/index.js') }}"></script>
    <script src="{{ asset('js/jquery.colorbox-min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $("#colorbox").addClass("test-popup");

        });
    </script>
    <script>
        $(document).ready(function() {
            // getting the slider data

            if (window.screen.width > 1200) {

                // getting the menu for infrastructure menu
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    document.getElementById("infrastructure_menu").innerHTML = this.responseText;
                }
                xmlhttp.open("GET", "{{ route('ajax.infrastructure') }}", true);
                xmlhttp.send();

                // getting the menu for placement menu
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    document.getElementById("placement_menu").innerHTML = this.responseText;
                }
                xmlhttp.open("GET", "{{ route('ajax.placement') }}", true);
                xmlhttp.send();

                // getting the menu for student menu
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    document.getElementById("student_menu").innerHTML = this.responseText;
                }
                xmlhttp.open("GET", "{{ route('ajax.student') }}", true);
                xmlhttp.send();

                // getting the menu for gallery menu
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    document.getElementById("gallery_menu").innerHTML = this.responseText;
                }
                xmlhttp.open("GET", "{{ route('ajax.gallery') }}", true);
                xmlhttp.send();

            }
           

        });
    </script>

    <script src="{{ asset('js/pinterest_grid.js') }}"></script>



    <div id="cboxOverlay" style="opacity: 0; cursor: pointer; visibility: visible; display: none;"></div>
    <div id="colorbox" class="test-popup" role="dialog" tabindex="-1"
        style="display: none; visibility: visible; top: 0px; left: 522px; position: absolute; width: 805px; height: 578px; overflow: hidden; opacity: 0;">
        <div id="cboxWrapper" style="height: 578px; width: 805px;">
            <div>
                <div id="cboxTopLeft" style="float: left;"></div>
                <div id="cboxTopCenter" style="float: left; width: 785px;"></div>
                <div id="cboxTopRight" style="float: left;"></div>
            </div>
            <div style="clear: left;">
                <div id="cboxMiddleLeft" style="float: left; height: 558px;"></div>
                <div id="cboxContent" style="float: left; width: 785px; height: 558px;">
                    <div id="cboxTitle" style="float: left;"></div>
                    <div id="cboxCurrent" style="float: left;">image 1 of 2</div><button type="button" id="cboxPrevious"
                        style="">previous</button><button type="button" id="cboxNext" style="">next</button><button
                        type="button" id="cboxSlideshow" style="display: none;"></button>
                    <div id="cboxLoadingOverlay" style="float: left; display: none;"></div>
                    <div id="cboxLoadingGraphic" style="float: left; display: none;"></div><button type="button"
                        id="cboxClose">close</button>
                </div>
                <div id="cboxMiddleRight" style="float: left; height: 558px;"></div>
            </div>
            <div style="clear: left;">
                <div id="cboxBottomLeft" style="float: left;"></div>
                <div id="cboxBottomCenter" style="float: left; width: 785px;"></div>
                <div id="cboxBottomRight" style="float: left;"></div>
            </div>
        </div>
        <div style="position: absolute; width: 9999px; visibility: hidden; max-width: none; display: none;"></div>
    </div>
</body>

</html>
