<?php     $home_url = '';

// if ($_SERVER['HTTP_HOST'] == '127.0.0.1:8000') {
//     $home_url = 'http://127.0.0.1:8001/upload/';
// } else {
    $home_url = 'https://nsuniv.ac.in/nsuadmin/public/upload/';
// }
?>
<div class="mega_menu pt-5 hidden-xs">

<div class="row no-gutters scroll-pan ">
    <div class="col-md-12 pr-2">
        <div class="row no-gutters menu_col4 infr-menu ">




            <div class="col-md-3 section ">
                <div class="border1">
                    <a href="{{ route('image-gallery') }}"> <img  src="{{ asset('images/nsu/icon/university.jpg') }}" class="img-fluid">



                        <div class="menu_boxx1">
                            UNIVERSITY GALLERY
                        </div>
                    </a>
                </div>

            </div>

            <div class="col-md-3 section ">
                <div class="border1">
                    <a href="{{ route('media-gallery') }}"> <img  src="{{ asset('images/nsu/icon/media gallery.jpg') }}" class="img-fluid">
                        <div class="menu_boxx1">
                            Media GALLERY
                        </div>
                    </a>
                </div>

            </div>

        </div>

    </div>



</div>
</div>