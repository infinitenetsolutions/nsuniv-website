<x-layout1>
    @slot('title', 'Appointment Letter')

    @slot('body')
        <style>
            iframe html body img {
                width: 100% !important;
            }

        </style>
        <?php
        function url_check1($url)
        {
            stream_context_set_default([
                'ssl' => [
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                ],
            ]);
        
            $array = get_headers($url);
            $string = $array[0];
            if (strpos($string, '200')) {
                return true;
            } else {
                return false;
            }
        } ?>
        <!-- Start main-content -->
        <section class="inner-page">
            <div class="inner-hadding">
                <div class="container">
                    <div class="breadcrumb">
                        <a href="{{ route('index') }}">Home</a>
                        <a href="">Placement</a>
                        <a href=""> Appointment Letter</a>
                    </div>
                </div>
                <div class="container">
                    <div class="top-menu-sec">
                        <ul>
                            <h4>Placement </h4>
                            <li><a href="{{ route('index') }}">Home</a>
                            </li>
                            <li class="{{ Request::path() == 'placements/placement' ? 'active' : '' }}"><a
                                    href="{{ route('placement','placement') }}"> Placement </a>
                            </li>
                            <li class="{{ Request::path() == 'placement/appointment' ? 'active' : '' }}"><a
                                    href="{{ route('appointment') }}"> Appointment Letter</a>
                            </li>
                            <li class="{{ Request::path() == 'placement/requiters' ? 'active' : '' }}"><a
                                    href="{{ route('requiters') }}"> Recruiters</a>
                            </li>
                            <li class="{{ Request::path() == 'placement/contact' ? 'active' : '' }}"><a
                                    href="{{ route('placement-contact') }}">Placement Contact</a></li>

                        </ul>
                    </div>
                    <div class="p-3 mb-4 ">
                        <h2> Appointment Letter</h2>
                        <a class="row p-2" href="{{ route('index') }}">

                            <img class="logo-sm" src="{{ asset('/images/logo.png') }}" alt="">
                            <p class="tag_line_bold mt-1 ">Netaji Subhas University</p>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Section: Team -->
            <section id="team" class="bg-silver-deep">
                <div class="container">
                    <div class="row mtli-row-clearfix">
                        @foreach ($data as $appointment)
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="team-members border-bottom-theme-colored2px text-center maxwidth400 mb-30">
                                    <div class="team-thumb">
                                        <img height="300px" class="img-fullwidth" alt=""
                                            src="{{ $url . 'appointment/' . $appointment->image_name }} ">
                                        <div class="team-overlay"></div>

                                    </div>
                                    <div class="team-details">
                                        <div class="gallery-item photo">
                                            <div class="thumb">

                                                <div class="overlay-shade"></div>
                                                <div class="icons-holder">
                                                    <div class="icons-holder-inner">
                                                        <div
                                                            class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                            <a class="popup-youtube font-16" target="_blank"
                                                                href="{{ $url . 'appointment/' . $appointment->image_name1 }}"><i
                                                                    class="fas fa-image"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <h4 class="text-uppercase text-theme-colored font-weight-600 m-2">
                                            {{ $appointment->title }}</h4>
                                        <h6 class="text-gray font-13 font-weight-400 line-bottom-centered mt-0">
                                            {{ $appointment->sub_title }}
                                        </h6>
                                        @if (url_check1($url . 'appointment/' . $appointment->image_name2))
                                            <a target="_blank"
                                                href="{{ $url . 'appointment/' . $appointment->image_name2 }}"
                                                class="hidden-md text-danger"><i class="fa fa-download"
                                                    aria-hidden="true"></i>
                                                Appointment-Letter</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <div class=" p-5"> {{ $data->links() }} </div>

                </div>

            </section>



            <!-- Divider: Clients -->
            {{-- @include('include.requiters') --}}
        </section> <!-- end main-content -->

        @include('include.studyat')
        <br>

    @endslot

</x-layout1>
