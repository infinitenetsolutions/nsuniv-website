<x-layout1>
    @slot('title', 'Events')
    @slot('body')

        <section class="inner-page">
            <div class="inner-hadding ">
                <div class="container">
                    <div class="breadcrumb">
                        <a href="{{route('index')}}">Home</a>
                      <a href="">Events</a>
                      <a href="">{{ $get_event->name }}</a>
                    </div>
                </div>
                <div class="container">

                    <div class="top-menu-sec">
                        <h4>Events</h4>

                        <ul>
                            <li><a href="{{ route('index') }}">Home</a></li>
                            </li>
                            <li><a href="{{ '#' }}">{{ 'Event' }}</a></li>
                            <li class="active"><a href="{{ '#' }}">{{ $get_event->name }}</a></li>

                        </li>
                        </ul>
                    </div>

                    <div class="p-2 ">
                        <h2><i class="fas fa-calendar-alt"></i>
                            Events </h2>
                        <a class="row p-2" href="{{ route('index') }}">

                            <img class="logo-sm" src="{{ asset('/images/logo.png') }}" alt="">
                            <p class="tag_line_bold mt-1 ">Netaji Subhas University</p>
                        </a>
                    </div>
                </div>
            </div>



            <section>
                <div class="container">
                    <div class="row  ">
                        <div class="col-md-3 pt-3 pb-3 bg-white1 mt-5 ">
                            <ul>
                                <li>
                                    <h5>Name of event:</h5>
                                    <p>{{ $get_event->name }}</p>
                                </li>
                                <li>
                                    <h5>Host:</h5>
                                    <p>Netaji Subhas University.</p>
                                </li>
                                <li>
                                    <h5>Location:</h5>
                                    <p>{{ $get_event->title }}</p>
                                </li>
                                <li>
                                    <h5>Date:</h5>
                                    <p>{{ $get_event->timing }}</p>
                                </li>
                                <li>
                                    <h5>Start Time:</h5>
                                    <p>{{ $get_event->start }}</p>
                                </li>
                                <li>
                                    <h5>End Time:</h5>
                                    <p>{{ $get_event->end }}</p>
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
                                        <li><a href="#" style="background-color: #02B0E8"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li><a href="#" style="background-color: #c4944b"><i
                                                    class="fab fa-instagram"></i></a></li>
                                        <li><a href="#" style="background-color: #D71619"><i class="fab fa-youtube"></i></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-5">
                            <div class="owl-carousel-1col mt-5 pt-4" data-nav="true">
                                <div class="item">
                                    <a href="{{ $url . 'event/' . $get_event->images }}" target="_blank">
                                        <img src="{{ $url . 'event/' . $get_event->images }}" width="100%"
                                            height="420px" />

                                    </a>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-4">
                            <h2 class="wow fadeInDown text-uppercase">
                                <span class="border-bottom mb-1 text-dark">Events</span> <span
                                    class="text-warning ">More</span>
                            </h2>
                            <span class="line-bottom "> &nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <div class="double-line-bottom-theme-colored-2"></div>
                            <marquee onMouseOver="this.stop()" onMouseOut="this.start()" class="bg-university"
                                behavior="scroll" direction="up" style="height: 566px; padding: 10px">
                                @foreach ($events as $event)
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
                                            <a href="{{ route('event', $event->id) }}">
                                                <div class="event-content ">
                                                    <h5 class="media-heading font-16 font-weight-600 "><a
                                                            href="{{ route('event', $event->id) }}">
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
                    <div class="row mt-5 ">
                        <div class="col-md-12">
                            <h3 class="mt-0">Event Description</h3>
                            <span class="line-bottom "> &nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <div class="double-line-bottom-theme-colored-2"></div>
                            <p class="text-justify">{{ $get_event->descrption }}</p>
                        </div>

                    </div>
                    <br>
                    <br>

                </div>
            </section>



        @endslot
</x-layout1>
