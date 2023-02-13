<x-layout1>
    @slot('title', 'About us')
    @slot('body')

        <div>
            <section class="inner-page">
                <div class="inner-hadding mb-lg-4">
                    <div class="container">
                        <div class="breadcrumb">
                            <a href="{{ route('index') }}">Home</a>
                            <a href="#">Noticeboard</a>
                        </div>
                    </div>
                    <div class="container ">

                        <div class="top-menu-sec">
                            <h4>Noticeboard</h4>

                            <ul>
                                <li><a href="{{ route('index') }}">Home</a></li>
                                </li>
                                <li class="active"><a href="">Noticeboard</a></li>
                                </li>

                            </ul>
                        </div>

                        <div class="p-2 ">
                            <h2><i class="fas fa-chess-board    "></i>
                                Noticeboard </h2>
                            <a class="row p-2" href="{{ route('index') }}">
                                <img class="logo-sm" src="{{ asset('/images/logo.png') }}" alt="">
                                <p class="tag_line_bold mt-1 ">Netaji Subhas University</p>
                            </a>
                        </div>
                    </div>
                </div>

                <section class="bg-theme-colored mt-3">
                    <div class="container pt-40 pb-40">
                        <div class="row text-center">
                            <div class="col-md-12">
                                <h2 id="basic-coupon-clock" class="text-white"></h2>
                                <!-- Final Countdown Timer Script -->

                                <script type="text/javascript">
                                    $(document).ready(function() {
                                        $('#basic-coupon-clock').countdown('{{ $get_event->timing }}', function(event) {
                                            $(this).html(event.strftime('%D days %H:%M:%S'));
                                        });
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="mt-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <ul>
                                    <li>
                                        <h5>Name of Notice:</h5>
                                        <p>{{ $get_event->name }}</p>
                                    </li>
                                    <li>
                                        <h5>Download:</h5>
                                        <p> <a target="_blank"
                                                href="{{ $url . 'noticeboard/' . $get_event->images }}">Download
                                                Notice</a>.
                                        </p>
                                    </li>
                                    <li>
                                        <h5>Department:</h5>
                                        <p>{{ $get_event->title }}</p>
                                    </li>
                                    <li>
                                        <h5>Last Date:</h5>
                                        <p>{{ $get_event->timing }}</p>
                                    </li>
                                    <li>
                                        <h5>Notice Date:</h5>
                                        <p>{{ $get_event->created_at }}</p>
                                    </li>

                                    <li>
                                        <h5>Website:</h5>
                                        <p>https://nsuniv.ac.in/</p>
                                    </li>
                                    <li>
                                        <h5>Share:</h5>
                                        <ul class="styled-icons icon-circled mb-20 d-flex mb-1 mt-4">
                                            <li><a href="#" style=" background-color: #3B5998"><i
                                                        class="fab fa-facebook"></i></a></li>
                                            <li><a href="#" style="background-color: #02B0E8"><i
                                                        class="fab fa-twitter"></i></a></li>
                                            <li><a href="#" style="background-color: #c4944b"><i
                                                        class="fab fa-instagram"></i></a></li>
                                            <li><a href="#" style="background-color: #D71619"><i
                                                        class="fab fa-youtube"></i></a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-5">
                                <div class="owl-carousel-1col mt-5" data-nav="true">
                                    <div class="item">
                                        <a href="{{ $url . 'noticeboard/' . $get_event->images }}" target="_blank">
                                          <?php 
                                            if(pathinfo($get_event->images, PATHINFO_EXTENSION) == 'pdf')
                                            {
                                            ?>
                                            <iframe src="{{ $url . 'noticeboard/' . $get_event->images }}" width="100%"
                                                height="390px">
                                            </iframe>
                                        <?php }
                                        else { ?>
                                            <img src="{{ $url . 'noticeboard/' . $get_event->images }}" width="100%" style="height:390px!important">
                                       <?php }?>
                                        </a>

                                    </div>

                                </div>
                            </div>

                            <div class="col-md-4">
                                <h2 class="wow fadeInDown text-uppercase">
                                    <span class="border-bottom mb-1 text-dark">Notice</span> <span
                                        class="text-warning ">Board</span>
                                </h2>
                                <span class="line-bottom "> &nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                <div class="double-line-bottom-theme-colored-2"></div>
                                <marquee onMouseOver="this.stop()" onMouseOut="this.start()" class="bg-university"
                                    behavior="scroll" direction="up" style="height: 360px; padding: 10px">
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
                                                                class="fa fa-clock-o text-theme-colored2"></i>
                                                            {{ $event->created_at }}
                                                            &nbsp; &nbsp;

                                                            <span class="text-white"> <i
                                                                    class="fa fa-map-marker text-theme-colored2"></i>
                                                                {{ $event->title }}</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </article>
                                    @endforeach
                                </marquee>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-md-12">
                                <h3 class="mt-0">Notice Description</h3>
                                <span class="line-bottom "> &nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                <div class="double-line-bottom-theme-colored-2"></div>
                                <p class="text-justify">{{ $get_event->descrption }}</p>
                            </div>

                        </div>

                    </div>
                </section>
        </div>
        <!-- end main-content -->

    @endslot
</x-layout1>
