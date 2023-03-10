<style>
    .point li {
        list-style: inside !important;
    }

    .para-tah {
        font-family: tahoma !important;
    }
</style>
<x-layout1>
    @slot('body')
        <section class="inner-page">
            <div class="inner-hadding">
                <div class="container">
                    <div class="breadcrumb">
                        <a href="{{ route('index') }}">Home</a>
                        <a href="#">CLUB</a>
                        {{-- <a href="#">{{ $data->sub_title }}</a> --}}
                    </div>
                </div>
                <div class="container">
                    <div class="top-menu-sec">
                        <ul>
                            <h4>CLUB</h4>
                        </ul>
                    </div>
                    <div class="p-2 ">
                        {{-- <h2>{{ $data->sub_title }}</h2> --}}
                        <a class="row p-2" href="{{ route('index') }}">
                            <img class="logo-sm" src="{{ asset('/images/logo.png') }}" alt="">
                            <p class="tag_line_bold mt-1 ">Netaji Subhas University</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row ml-3 mr-3 ">
                <div class="col-sm-9 ">
                    <div class="">
                        <h4>CLUBs at NSU</h4>
                        <p class="para-tah text-justify">Netaji Subhas University has a strong tradition of student bodies and clubs that attract students from all disciplines. It is one of the features that imbue NSU with a singular charm, a unique advantage over other university campuses. College life is all about exploring your personality and finding your tribe. We think your best bet to do so is to join clubs that match your unique interests. Whether you love to read, rock or play sports, there is certain to be a club out there for you. Netaji Subhas University runs many professional clubs. The clubs give you the chance to apply classroom learning to the outside world. This helps you to gain invaluable leadership as well as life skills. In addition to connecting you with other students who have similar interests, professional clubs are a platform for students to interact with alumni and professionals in their fields of interest. This helps you to build formal and informal networks while exploring career opportunities.</p>

                        <p class='para-tah'>These clubs are managed by the students of NSU with the help of a faculty mentor, so you can be an organiser as well as a participant. The clubs will organise competitions, events, and activities and offer excellent networking opportunities with fellow students. They also channelise diverse interests and talents of students by providing them with an avenue to display their talents. The campus comes alive with events such as debates, drama, music, cricket tournaments, photography competitions and quizzes. There are several clubs that students can be a member of, take membership of in order to be part of the cultural landscape of the University. The club activities are scheduled for 5 days in a week(Monday through Friday).</p>

                        <h4>Clubs</h4>
                        <ul class="point">
                            <li> <b>Invincibles</b> (For Holistic Developments)</li>
                            <li> <b>Broadway Junkies</b> (The Dance & Dramatics Club)</li>
                            <li> <b>Shutterklips</b> (The Photography Club)</li>
                            <li> <b>The Unbeatables</b> (The Sports Club)</li>
                            <li> <b>The Social Crew</b> (Rotaract Club)</li>
                        </ul>

                       

                        <p>&nbsp;</p>
                        <p></p>
                    </div>                               

                </div>


                <div class="col-sm-3">
                    <section class="aside-section">
                        <div class="bg-xs-dark_gray m-3 p-3">
                            <h3 class="text-center text-white">Quick Links</h3>
                            <hr>
                            <!-- <div class="aside-section-headings"></div> -->

                            <ul class="bullet_list">
                                @foreach ($quicks as $quick)
                                    <li> <b class="text-white ">
                                            <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                            <a class="text-capitalize text-dark"
                                                href="{{ route('student', $quick->title) }}">{{ $quick->title }}</a>
                                            <hr>

                                        </b>
                                    </li>
                                @endforeach
                                @foreach ($quicks1 as $quick)
                                    <li> <b class="text-white ">
                                            <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                            <a class="text-capitalize text-dark" target="_blank"
                                                href="{{ $url . 'pdf/' . $quick->images }}">{{ $quick->title }}</a>
                                            <hr>
                                        </b>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </section>
                    @include('include.admission')
                </div>
            </div>

        </section>
    @endslot
</x-layout1>
