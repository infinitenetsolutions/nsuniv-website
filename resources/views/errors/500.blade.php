<x-layout1>
    @slot('body')


        <section class="inner-page bg-warning">
            <div class="inner-hadding">
                <div class="container">
                    <div class="breadcrumb ">
                        <a href="{{ route('index') }}">Home</a>
                        <a href="">errors</a>
                        <a href="">page no found</a>
                    </div>
                </div>
                <div class="container">
                    <div class="top-menu-sec">
                        <ul>
                            <h4 class="text-white" >Errors</h4>
                            <li><a href="{{ route('index') }}">Home</a></li>
                            <li><a href="#">500 Internal  Server  error</a></li>
                       
                        </ul>
                    </div>
                    <div class="p-3 ">
                        <h2>{{ '500 Internal  Server  error' }}</h2>
                        <a class="row p-2" href="{{ route('index') }}">
                            <img class="logo-sm" src="{{ asset('/images/logo.png') }}" alt="">
                            <p class="tag_line_bold mt-1 ">Netaji Subhas University</p>
                        </a>
                    </div>
                </div>
            </div>
            <section id="home" class="fullscreen bg-lightest navbar-dark  mt-5  ">
                <div class="display-table text-center">
                    <div class="display-table-cell">
                        <div class="container pt-0 pb-0">
                            <div class="row">
                                <div class="col-md-7 text-white">
                                    <h1 class="font-200 line-height-1em mt-0 mb-0 text-theme-colored text-white">500!</h1>
                                    <h2 class="mt-0">Oops! Bad Request</h2>
                                    <p>The page you were looking for Internal Server error .</p>
                                    <a class="btn btn-default btn-circled mb-3"
                                        href="{{ route('index') }}">Return Home
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <h3>Some Useful Links</h3>
                                    <div class="widget">
                                        <ul class="list-border text-white">
                                            <li><a href="{{ route('index') }}">Home</a></li>
                                            <li><a href="{{ route('about', 'who-we-are') }}">About us</a></li>
                                            <li><a href="{{ route('career') }}">Career</a></li>
                                            <li><a href="{{ route('contact') }}">Contact</a></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    </section> @endslot
</x-layout1>
