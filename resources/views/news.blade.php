<x-layout1>

    @slot('body')
        <div id="ctl00_ContentPlaceHolder1_UpdatePanel2">
            <section class="inner-page ">
                <div class="inner-hadding">
                    <div class="container">
                        <div class="breadcrumb">
                            <a href="{{ route('index') }}">Home</a>
                            <a href="#">News</a>
                            <a href="">Latest News</a>
                        </div>
                    </div>
                    <div class="container">

                        <div class="top-menu-sec ">
                            <h4>Home</h4>

                            <ul>
                                <li class="" ><a  href="{{ route('index') }}">Home</a></li>

                                <li class="active" ><a  href="{{ route('news1') }}"> Latest News</a></li>
                            
                                </li>
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
                <section class="inner_section event_list ">
                    <div class="container">
                        <ul class="row">
                            @foreach ($news as $image)
                                <li class="col-12 col-sm-6 col-md-4"><a
                                        href="{{ route('news',$image->id) }}"
                                        title="{{ $image->title }}"><img
                                            src="{{ $url . 'latestnews/' . $image->images }}" alt=""></a>
                                    <h5> {{ $image->title }}</h5>
                                    <a href="{{ route('news',$image->id) }}"  class="mt-0 text-primary"><?php echo substr( $image->massage,0,150) ?></a>

                                </li>
                            @endforeach
                        </ul>
                        <div class="text-center">

                            <nav id="ctl00_ContentPlaceHolder1_divpaging" aria-label="Page navigation example">

                            </nav>
                        </div>
                    </div>
                </section>
            </section>

        </div>
    @endslot
</x-layout1>
