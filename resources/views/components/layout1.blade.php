<!DOCTYPE html>
<html>


<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-YC87S690TJ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-YC87S690TJ');
    </script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    @php
        $page_url = explode('/', str_replace('index.php', '', $_SERVER['PHP_SELF']));
        
        for ($i = 2; $i < count($page_url); $i++) {
            $seo_data = DB::table('tbl_seo')
                ->where('page_id', 'LIKE', '%' . $page_url[$i] . '%')
                ->where('is_deleted', '1')
                ->first();
            if ($seo_data != '') {
                break;
            }
        }
        
    @endphp


    <!-- ========== Page Title ========== -->
    <title> {{ $seo_data->title ?? 'Best University In Jharkhand With All Courses And Placements' }} </title>
    <meta name="description" content="{{ $seo_data->description ?? 'Netaji Subhas University is the best University In jharkhand offerIng all courses with placement to shape your future and Inspire you to achieve great success In your dream career.' }}">
    <meta name="keywords" content="{{ $seo_data->keywords ?? 'Best University In Jamshedpur' }} ">
    <meta name="Robots" content="{{ $seo_data->Robots ?? 'index, follow' }}" />
    <meta name="Robots" content="{{ $seo_data->Robots1 ?? 'All' }}" />
    <meta name="googlebot" content="{{ $seo_data->googlebot ?? 'noodp' }}" />
    <meta name="Robots" content="{{ $seo_data->Robots3 ?? 'noydir,noodp' }}" />
    <meta name="revisit-after" content="{{ $seo_data->revisit ?? '7 days' }}" />
    <meta name="author" content="{{ $seo_data->author ?? 'Netaji Subhas University' }}" />
    <meta name="subject" content="{{ $seo_data->subject ?? 'Netaji Subhas University the best University in Jamshedpur, Jharkhan' }}d" />
    <meta name="url" content="{{ $seo_data->url ?? 'https://nsuniv.ac.in/' }}" />
    <meta name="identifier-URL" content="{{ $seo_data->identifier_URL ?? 'https://nsuniv.ac.in/' }}" />
    <meta name="msnbot" content="{{ $seo_data->msnbot ?? 'index,follow,archive,noydir,noodp' }}" />
    <meta name="Slurp" content="{{ $seo_data->Slurp ?? 'index,follow,archive,noydir,noodp' }}" />
    <meta name="directory" content="{{ $seo_data->directory ?? 'submission' }}" />
    <meta name="language" content="{{ $seo_data->language ?? 'EN' }}" />
    <meta name="distribution" content="{{ $seo_data->distribution ?? 'global' }}" />
    <meta name="coverage" content="{{ $seo_data->coverage ?? 'global' }}" />
    <meta name="copyright" content="{{ $seo_data->copyright ?? 'Netaji Subhas University' }}" />
    <meta name="rating" content="{{ $seo_data->rating ?? 'general' }}" />
    <meta name="classification"
        content=" {{ $seo_data->classification ?? 'best university in jamshedpur, best university in jharkhand' }}" />
    <link rel="canonical" href="{{ $seo_data->canonical ?? 'https://nsuniv.ac.in/' }}">

    <!-- Bootstrap core CSS -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <!-- Custom fonts for this template -->
    <link
        href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900|Montserrat:200,300,400,500,600,700|Open+Sans:300,400,600,700,800"
        rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/full-slider.css') }}" rel="stylesheet" />
    <!-- Custom styling CSS -->
    <link href="{{ asset('css/default.css') }}" type="text/css" rel="stylesheet" media="screen" />
    <link href="{{ asset('css/nivo-slider.css') }}" type="text/css" rel="stylesheet" media="screen" />
    <link href="{{ asset('css/animate.css') }}" type="text/css" rel="stylesheet" />
    <link href="{{ asset('css/colorbox.css') }}" type="text/css" rel="stylesheet" />
    <link href="{{ asset('css/owl.theme.default.min.css') }}" type="text/css" rel="stylesheet" />
    <link href="{{ asset('css/bootstrap-responsive-tabs.css') }}" type="text/css" rel="stylesheet" />
    <link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet" />
    <link href="{{ asset('css/inner.css') }}" type="text/css" rel="stylesheet" />
    <link href="{{ asset('css/responsive.css') }}" type="text/css" rel="stylesheet" />
    <link href="{{ asset('css/responsive2.css') }}" type="text/css" rel="stylesheet" />
    <link href="{{ asset('css/Print.css') }}" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">

</head>

<body class="landing_page" id="page-top">

    @include('include.header1')
    {{ $body ?? '' }}

    @include('include.footer')

    <!-- Bootstrap core JavaScript -->

    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/popper/popper.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- Plugin JavaScript -->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('js/jquery.bootstrap-responsive-tabs.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <!-- Custom scripts for this template -->
    <script src="{{ asset('js/wow.js') }}"></script>
    <script src="{{ asset('js/jquery.colorbox-min.js') }}"></script>
    <script src="{{ asset('js/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('js/home-index.js') }}"></script>


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

    <!--LeadSquared Tracking Code End-->
</body>


</html>
