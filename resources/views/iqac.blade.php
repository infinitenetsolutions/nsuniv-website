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
                        <a href="#">IQAC</a>
                        {{-- <a href="#">{{ $data->sub_title }}</a> --}}
                    </div>
                </div>
                <div class="container">
                    <div class="top-menu-sec">
                        <ul>
                            <h4>Internal Quality Assurance Cell (IQAC)</h4>
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
                        <h4>About Internal Quality Assurance Cell (IQAC)</h4>
                        <p class="para-tah text-justify">IQAC is a part of any accredited Higher Educational Institutions
                            (HEI) and works towards the
                            realization of the goals of quality enhancement, bench marking and sustenance measures. The
                            prime aim of the IQAC
                            is to develop a system for conscious, consistent and catalytic actions to improve the academic
                            and administrative
                            performance of the institution and to promote measures for the institutional functioning towards
                            enhancing
                            quality of education on par with global standards. Internal Quality Assurance Cell (IQAC) has
                            been made as
                            an integral and independent part of this University.</p>

                        <h4>Vision</h4>
                        <p class='para-tah'>To ensure quality culture as the prime concern for Netaji Subhash University
                            through institutionlizing and internalizing all the initiaves taken with internal and external
                            support.</p>

                        <h4>Mission</h4>
                        <p class="para-tah">To impower Teachers, students and society through value, skill and technology
                            oriented teaching, learning research and extension activities; enhance their creative,
                            innovative and employable abilities in the context of the evolving knoledge society and economy,
                            influenced by global challenges and changes and promoted holistic and inclusive growth.</p>

                        <h4>Objective</h4>
                        <ul class="point">
                            <li>Documentation of the various activities of the Netaji Subhash University for the quality
                                improvement.</li>
                            <li>Act as a Nodal Agency for the University coordinating the quality related activities,
                                includig adoption and dissemination of good practices.</li>
                            <li>Developing database for the Netaji Subhash University for the purpose of maintaining and
                                enhancing the institutional quality.</li>
                        </ul>

                        <h4>Goals</h4>
                        <ul class="point">
                            <li>To institutionalize quality benchmarking and to inculcate a ‘Quality Culture’ among various
                                constituents of the Netaji Subhash University.</li>
                            <li>To enhance the awareness of Institutional Quality Assurance.</li>
                            <li>To develop system for conscious, consistent and catalytic action to improve the academic and
                                administrative performance of the institution.</li>
                            <li>To keep the institution abreast of quality sustenance.</li>
                            <li>To generate good practices, ideas, planning, implementing and measuring the outcome of
                                academic and administrative performance of the institution.</li>
                        </ul>

                        <h4>Activities</h4>
                        <ul class="point">
                            <li>Meetings were convened at regular intervals to discuss the introduction of new and
                                innovative courses, interaction between the schools, modalities for implementing more
                                co-curricular activities for students and to promote faculty competency and ensure
                                developmental programmes.</li>
                            <li>Development of quality benchmarks /parameters for the various academic and administrative
                                activities of the institution.</li>
                            <li>Dissemination of information on the various quality parameters of higher education,
                                organization of workshops, seminars on quality related themes and promotion of quality
                                circles.</li>
                            <li>Documentation of various events /programmes /activities leading to quality improvement.</li>
                            <li>Preparation of the Annual Quality Assurance Report (AQAR) to be submitted to NAAC.</li>
                            <li>Conducting regular Academic Audit.</li>
                        </ul>

                        <h4>Benefits</h4>
                        Will facilitate / contribute to:
                        <ul class="point">
                            <li>Ensure clarity and focus in institutional functioning towards quality enhancement</li>
                            <li>Ensure internalization of the quality culture</li>
                            <li>Ensure enhancement and coordination among various activities of the institution and
                                institutionalize all good practices</li>
                            <li>Provide a sound basis for decision-making to improve institutional functioning</li>
                            <li>Act as a dynamic system for quality changes in HEIs</li>
                            <li>Build an organised methodology of documentation and internal communication</li>
                        </ul>

                        <p>&nbsp;</p>
                        <p></p>
                    </div>
                    <h4>Documents related to IQAC</h4>
                    <article>
                        <div class="row">
                            <div class="col-4">
                                <div class="event-small media sm-maxwidth400 mt-0 mb-0 pt-0 pb-15">
                                <div class="event-date text-center">
                                    <ul class="text-white">
                                        <li class="font-18 font-weight-700 border-bottom">IQAC 1</li>
                                        <li class="font-14 text-center text-uppercase mt-1">20-08-2019</li>
                                    </ul>
                                </div><br>
                                <a href="{{asset('upload/1 IQAC Committe &Meeting Dated 20-08-2019.PDF')}}" target="_blank">
                                    <div class="event-content ">
                                        <h5 class="media-heading font-16 font-weight-600 ">
                                            <a href="{{asset('upload/1 IQAC Committe &Meeting Dated 20-08-2019.PDF')}}" target="_blank">1st IQAC Committe & Meeting</a>
                                        </h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="event-small media sm-maxwidth400 mt-0 mb-0 pt-0 pb-15">
                                <div class="event-date text-center">
                                    <ul class="text-white">
                                        <li class="font-18 font-weight-700 border-bottom">IQAC2</li>
                                        <li class="font-14 text-center text-uppercase mt-1">22-03-2021</li>
                                    </ul>
                                </div>
                                <a href="{{asset('upload/2 IQAC Committe &Meeting Dated 22-03-2021.PDF')}}" target="_blank">
                                    <div class="event-content ">
                                        <h5 class="media-heading font-16 font-weight-600 ">
                                            <a href="{{asset('upload/2 IQAC Committe &Meeting Dated 22-03-2021.PDF')}}" target="_blank">2nd IQAC Committe &Meeting</a>
                                        </h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="event-small media sm-maxwidth400 mt-0 mb-0 pt-0 pb-15">
                                <div class="event-date text-center">
                                    <ul class="text-white">
                                        <li class="font-18 font-weight-700 border-bottom">IQAC 3</li>
                                        <li class="font-14 text-center text-uppercase mt-1">13-09-2021</li>
                                    </ul>
                                </div>
                                <a href="{{asset('upload/3 IQAC Committe &Meeting Dated 13-09-2021.PDF')}}" target="_blank">
                                    <div class="event-content ">
                                        <h5 class="media-heading font-16 font-weight-600 ">
                                            <a href="{{asset('upload/3 IQAC Committe &Meeting Dated 13-09-2021.PDF')}}" target="_blank">3rd IQAC Committe &Meeting</a>
                                        </h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                            <div class="col-4">
                            <div class="event-small media sm-maxwidth400 mt-0 mb-0 pt-0 pb-15">
                                <div class="event-date text-center">
                                    <ul class="text-white">
                                        <li class="font-18 font-weight-700 border-bottom">IQAC 4</li>
                                        <li class="font-14 text-center text-uppercase mt-1">05-08-2022</li>
                                    </ul>
                                </div>
                                <a href="{{asset('upload/4 IQAC Committe &Meeting Dated 05-08-2022.PDF')}}" target="_blank">
                                    <div class="event-content ">
                                        <h5 class="media-heading font-16 font-weight-600 ">
                                            <a href="{{asset('upload/4 IQAC Committe &Meeting Dated 05-08-2022.PDF')}}" target="_blank">4th IQAC Committe &Meeting</a>
                                        </h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="event-small media sm-maxwidth400 mt-0 mb-0 pt-0 pb-15">
                                <div class="event-date text-center">
                                    <ul class="text-white">
                                        <li class="font-18 font-weight-700 border-bottom">IQAC 5</li>
                                        <li class="font-14 text-center text-uppercase mt-1">29-08-2022</li>
                                    </ul>
                                </div>
                                <a href="{{asset('upload/5 IQAC Committe &Meeting Dated  29-08-2022.PDF')}}" target="_blank">
                                    <div class="event-content ">
                                        <h5 class="media-heading font-16 font-weight-600 ">
                                            <a href="{{asset('upload/5 IQAC Committe &Meeting Dated  29-08-2022.PDF')}}" target="_blank">5th IQAC Committe &Meeting</a>
                                        </h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    </article>

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
