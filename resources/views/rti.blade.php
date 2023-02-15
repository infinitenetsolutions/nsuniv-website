<x-layout1>
    @slot('body')
        <section class="inner-page">
            <div class="inner-hadding">
                <div class="container">
                    <div class="breadcrumb">
                        <a href="{{ route('index') }}">Home</a>
                        <a href="#">Right to Information Act</a>
                        {{-- <a href="#">{{ $data->sub_title }}</a> --}}
                    </div>
                </div>
                <div class="container">
                    <div class="top-menu-sec">
                        <ul><h4>Right to Information Act</h4></ul>
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
                    <div class=" mb-5 ">
                        <h2>Right to Information Act</h2>
                        <p class="text-justify">The Government of India has enacted the Right to Information Act, 2005
                            replacing the Freedom of Information Act, 2002.</p>
                        <p>This Act provides to promote transparency and accountability in the working of any public
                            authority. It also provides the right to citizens to secure access to importance of public
                            nature which is extended interpretation of Article 19 (a) (I) of Indian Constitution.</p>

                        <table align="left" border="1" cellpadding="1" cellspacing="1"
                            class="table table-bordered table-hover table-transport rti-tabs">
                            <tbody>
                                <tr>
                                    <th>1. Name of Public Information Officer:</th>
                                    <td>Md. Mojib Ashraf<br> Assistant Registrar</td>
                                </tr>
                                <tr>
                                    <th>2. Whom it is to be addressed: </th>
                                    <td>NETAJI SUBHAS UNIVERSITY<br>
                                        Pokhari, PO - Bhilai Pahari, PS-MGM, Dist-East Singhbhum, Jamshedpur,<br> 
                                        Pin - 831012, Jharkhand. </td>
                                </tr>
                                <tr>
                                    <th>3. How to Apply </th>
                                    <td>Seeking any information must be accompanied by prescribed application fee as per section 6(I) of RTI ACT, 2005.</td>
                                </tr>
                                <tr>
                                    <th>4. Application Fee</th>
                                    <td>Rs 10 (Rupees Ten Only)</td>
                                </tr>
                                <tr>
                                    <th>5. Mode of Payment</th>
                                    <td>By DD/Online/Indian Postal in order in favour of NSU, Jamshedpur.</td>
                                </tr>
                                <tr>
                                    <th>6. First Appellate Officer</th>
                                    <td>Mr. Nagendra Kumar <br>
                                        The Registrar, NSU <br>
                                        Email Id – registrar@nsuniv.ac.in</td>
                                </tr>                                
                            </tbody>
                        </table>

                        <h2><strong><span style="font-size:16px"><span style="color:#cc0000">For the collection of
                            information from the sections, the following officers are appointed as noted against
                            each.</span></span></strong></h2>
                            
                        <table align="left" border="1" cellpadding="1" cellspacing="1"
                            class="table table-bordered table-hover table-transport rti-tabs">
                            <tbody>
                                <tr>
                                    <th>Section</th>
                                    <td>Name of Public Information Officer</td>
                                </tr>
                                <tr>
                                    <th>Examination Affairs</th>
                                    <td>Mr. Om Prakash Sharma (I/C)</td>
                                </tr>
                                <tr>
                                    <th>Fee Affairs</th>
                                    <td>Ms. Y. Jyoti Laxmi</td>
                                 </tr>
                            </tbody>
                        </table>

                        <h2 class="text-center"><strong><span style="font-size:16px">
                            <span style="color:#cc0000"><u>Schedule</u></span>
                        </span></strong></h2>
                            
                        <table border="2" cellpadding="1" cellspacing="1"
                            class="table table-bordered table-hover table-transport rti-tabs">
                            <tbody>
                                <tr>
                                    <th>RTI ACT, 2005</th>
                                    <td>Annexure 1</td>
                                </tr>
                                <tr>
                                    <th>RTI Format</th>
                                    <td><a href="{{asset('upload/RTI-MANUAL.pdf')}}" download class="text-primary"><u>Click here to download RTI Act. 2005.</u></a></td>
                                </tr>
                                <tr>
                                    <th>Application form</th>
                                    <td><a href="{{asset('upload/RTI_form.pdf')}}" download class="text-primary"><u>Click here to download RTI Application Form</u></a></td>
                                </tr>
                            </tbody>
                        </table>

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
