<x-layout1>
    @slot('title', 'About us')
    @slot('body')
        <!-- Start main-content -->
        <section class="inner-page">

            <div class="inner-hadding">
                <div class="container">
                    <div class="breadcrumb">
                        <a href="{{route('index')}}">Home</a>
                      <a href="#">About </a>
                      <a href="#">Faculty </a>

                      @if ($data->type == 'hou')
                      <a href="{{ route('faculty', $data->type) }}">
                              Head of University</a>
                  @elseif($data->type == 'hod')
                      <a href="{{ route('faculty', $data->type) }}">
                              Head of Department</a>
                  @else
                      <a href="{{ route('faculty', $data->type) }}">Meet
                              our {{ $data->type }}</a>
                  @endif
                    </div>
                </div>
                <div class="container">



                    <div class="top-menu-sec">
                        <h4>Faculty</h4>
                        <ul>

                            <ul>

                                @if ($data->type == 'hou')
                                    <li><a href="{{ route('faculty', $data->type) }}">
                                            Head of University</a></li>
                                @elseif($data->type == 'hod')
                                    <li><a href="{{ route('faculty', $data->type) }}">
                                            Head of Department</a></li>
                                @else
                                    <li><a href="{{ route('faculty', $data->type) }}">Meet
                                            our {{ $data->type }}</a></li>
                                @endif
                            </ul>


                        </ul>
                    </div>

                    <div class="p-2 ">
                        @if ($data->type == 'hou')
                            <h2>Head Of University</h2>
                        @elseif($data->type == 'hod')
                            <h2>Head Of Department</h2>
                        @else
                            <h2> {{ $data->type }}</h2>
                        @endif
                        <a class="row p-2" href="{{ route('index') }}">

                            <img class="logo-sm" src="{{ asset('/images/logo.png') }}" alt="">
                            <p class="tag_line_bold mt-1 ">Netaji Subhas University</p>
                        </a>
                    </div>

                </div>
            </div>
            <!-- Section: Experts Details -->
            <section>
                <div class="container mt-3">
                    <div class="section-content card p-3">
                        <div class="row mb-5">
                            <div class="col-md-4">
                                <div class="thumb">
                                    <img height="450px" class="img-fluid" 
                                        src="{{ $url . 'teacher/' . $data->image_name }}" alt="">
                                </div>
                            </div>
                            <div class="col-md-8 text-justify">
                                <h4 class="name font-24 mt-0 mb-0">{{ $data->name }}</h4>
                                <p class="mt-2 text-dark">{{ $data->designation }}</p>
                                <p class="text-justify" ><?php echo substr($data->description,0,400) ; ?></p>



                            </div>
                            <div class="col-sm-12 text-justify">
                                <p ><?php echo substr($data->description,400,400000) ; ?></p>

                            </div>
                            <div class="col-ms-8">

                                <?php $social_media = DB::table('social')
                                    ->where('teacher_id', $data->id)
                                    ->get(); ?>
                                    <ul class="theme-icon d-flex">
                                    @foreach ($social_media as $social)
                                        <li><a class="ml-4 border-left" target="_blank" href="{{ $social->link }}"><i
                                                    class="fab fa-{{ $social->social }}"></i></a></li>
                                    @endforeach

                                </ul>
                            </div>

                        </div>
                        <div class="row mt-30 mb-3">
                            <div class="col-md-4">
                                <h4 class="line-bottom-theme-colored-2 ">Address:</h4>
                                <div class="volunteer-address">
                                    <ul>
                                        <li>
                                            <div class="bg-light media border-bottom p-15 mb-20">
                                                <div class="media-left">
                                                    <i class="fal fa-map-marker-alt text-theme-colored2 font-24 mt-1 p-2"></i>
                                                </div>
                                                <div class="media-body">
                                                    <p>{{ $data->address }}</p>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <h4 class="line-bottom-theme-colored-2">Contact:</h4>

                                <div class="bg-light media border-bottom p-15 mb-20">
                                    <div class="media-left">
                                        <i class="fal fa-phone text-theme-colored2 font-24 mt-1 p-2"></i>
                                    </div>
                                    <div class="media-body">
                                        <p><span>Phone:</span> {{ $data->phone }}<br><span>Email:</span>
                                            {{ $data->emailid }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="clearfix">
                                    <h4 class="line-bottom-theme-colored-2">Resume Download:</h4>
                                </div>
                                <div class="bg-light media border-bottom p-15">
                                    <div class="media-left">
                                        
                                        <i class="fas fa-file-download text-theme-colored2 font-24 mt-1 p-2 "></i>
                                      
                                    </div>
                                    <div class="media-body">
                                        <a target="_blank"  href="{{ $url . 'teacher/' . $data->resume }}"
                                            class="text-underline"><i class="fa fa-file-pdf-o mr-5 mt-4"></i>Download
                                            PDF</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
        <!-- end main-content -->
    @endslot
</x-layout1>
