<x-layout1>
    @slot('title', 'Events')
    @slot('body')

        <section class="inner-page">
            <div class="inner-hadding">
                <div class="container">
                    <div class="breadcrumb">
                        <a href="{{ route('index') }}">Home</a>
                        <a href="#">News</a>
                        <a href="">Latest News</a>
                        <a href="">{{$get_news->title}}</a>
                    </div>
                </div>
                <div class="container">

                    <div class="top-menu-sec ">
                        <h4>Home</h4>

                        <ul>
                            <li class="" ><a  href="{{ route('index') }}">Home</a></li>

                            <li class="" ><a  href="{{ route('news1') }}"> Latest News</a></li>
                            <li class="active" ><a  href="{{ route('news',$get_news->title) }}"> {{$get_news->title}}</a></li>
                        </ul>
                    </div>
                    <div class="p-3 ">
                        <h2> <i class="fas fa-newspaper" aria-hidden="true"></i>

                            Latest News </h2>
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
                        <div class="col-md-8">
                            <div class="owl-carousel-1col mt-5 pt-4" data-nav="true">
                                <div class="item">
                                    <a href="{{ $url . 'latestnews/' . $get_news->images }}" target="_blank">
                                        <img src="{{ $url . 'latestnews/' . $get_news->images }}" width="100%"
                                            height="420px" />

                                    </a>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-4">
                            <h2 class="wow fadeInDown text-uppercase">
                                <span class="border-bottom mb-1 text-dark">News</span> <span
                                    class="text-warning ">More</span>
                            </h2>
                            <span class="line-bottom "> &nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <div class="double-line-bottom-theme-colored-2"></div>
                            <marquee onMouseOver="this.stop()" onMouseOut="this.start()" class="bg-university"
                                behavior="scroll" direction="up" style="height: 506px; padding: 10px">
                                @foreach ($events as $event)
                                    <article>
                                        <div class="event-small media sm-maxwidth400 mt-0 mb-0 pt-0 pb-15">
                                            <div class="event-date p-0 text-center">
                                          
                                                       <img width="80px" src="{{ $url . 'latestnews/' . $get_news->images }}" alt="">
                                              
                                            </div>
                                            <a href="{{ route('news', $event->id) }}">
                                                <div class="event-content ">
                                                    <h5 class="media-heading font-16 font-weight-600 "><a
                                                            href="{{ route('news', $event->id) }}">
                                                            {{ $event->title }}</a></h5>
                                                    <span class="mr-10 text-white"><i
                                                            class="fas fa-clock text-theme-colored2"></i>
                                                        {{ $event->created_at }}
                                                        &nbsp; &nbsp;

                                                    
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
                            <p class="text-justify"><?php echo  $get_news->massage ?></p>
                        </div>

                    </div>
                    <br>
                    <br>

                </div>
            </section>



        @endslot
</x-layout1>
