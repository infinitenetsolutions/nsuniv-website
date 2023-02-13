<x-layout1>
    @slot('body')
        <section class="inner-page">

            <div class="inner-hadding">
                <div class="container">
                    <div class="breadcrumb">
                        <a href="{{ route('index') }}">Home</a>
                        <a href="">Career</a>
                        <a href="">Test Career</a>
                    </div>
                </div>
                <div class="container">

                    <div class="top-menu-sec">
                        <h4>Career</h4>
                        <ul>

                            <ul>
                                <li class=""><a href="{{ route('index') }}">Home</a></li>

                                <li class="active"><a href="{{ route('career') }}">Career</a></li>
                                </li>
                            </ul>


                        </ul>
                    </div>
                    <h2 class="mt-2">Careers</h2>
                    <a class="row p-2" href="{{ route('index') }}">

                        <img class="logo-sm" src="{{ asset('/images/logo.png') }}" alt="">
                        <p class="tag_line_bold mt-1 ">Netaji Subhas University</p>
                    </a>
                </div>
            </div>
            <section class="careers-sec1">
                <div class="container">

                    <div class="row career2 no-gutters">
                        <div class="col-md-12">
                            <div class="ac-sec5-download">
                                <div class="about_sub_heading">Please fill in the below application form to apply for
                                    position at NSU University</div>





                                <div class="col-md-12">
                                    @if (session()->has('massage'))
                                        <div class="alert alert-success">
                                            {{ session()->get('massage') }}
                                        </div>
                                    @endif
                                    @if (session()->has('error'))
                                        <div class="alert alert-warning">
                                            {{ session()->get('error') }}
                                        </div>
                                    @endif
                                    <div class="border-1px p-25">
                                        <h4 class="text-uppercase line-bottom-theme-colored-2 line-height-1 mt-0 mt-sm-30">
                                            <i class=" mr-10"></i>Drop <span class="text-theme-colored2">Massage</span></h4>
                                        <!-- <p>Lorem ipsum dolor sit amet, consectetur elit.</p> -->
                                        <form id="appointment_form" name="appointment_form" class="mt-30" method="post"
                                            action="{{ route('career_applied') }}" enctype="multipart/form-data">
                                            <div class="row">
                                                @csrf

                                                <div class="col-sm-4">
                                                    <div class="form-group mb-10">

                                                        <label for="">Career Name : </label>
                                                        <select name="career_id" class="form-control" type="text"
                                                            required="" placeholder="Enter Name" aria-required="true">
                                                            <option selected disabled>- Select -</option>
                                                            @foreach ($data as $career)
                                                                <option value="{{ $career->id }}">{{ $career->sub_title  }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="form-group mb-10">

                                                        <label for="">Name : </label>
                                                        <input name="name" class="form-control" type="text"
                                                            required="" placeholder="Enter Name" aria-required="true">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group mb-10">
                                                        <label for="">Email Address :</label>
                                                        <input name="email" class="form-control required email"
                                                            type="email" placeholder="Enter Email" aria-required="true">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group mb-10">
                                                        <label for="">Phone Number :</label>
                                                        <input name="phone" class="form-control required" type="text"
                                                            placeholder="Enter Phone" aria-required="true">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group mb-10">
                                                        <label for="">Drop Your Resume : ( <span
                                                                class="text-danger">max size 1 mb </span>) </label>
                                                        <input accept="application/pdf" name="resume"
                                                            class="form-control required " type="file"
                                                            placeholder="Appoinment Time" aria-required="true">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group mb-10">
                                                        <label for="">Message :</label>
                                                        <textarea name="massage" class="form-control required" placeholder=" Why you want to join .." rows="5"
                                                            aria-required="true"></textarea>
                                                        <small class="float-right">maximum 255 character </small>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="form-group mb-10">

                                            </div>
                                            <div class="form-group mb-0 mt-20">
                                                <input type="hidden" name="status" value="pending" id="">
                                                <input name="created_at" value="{{ date(' Y-m-d h:i:s') }}"
                                                    class="form-control" type="hidden" value="">
                                                <button type="submit" class="btn btn-dark btn-theme-colored"
                                                    data-loading-text="Please wait...">Submit</button>
                                            </div>
                                        </form>
                                        <!-- Appointment Form Validation-->

                                    </div>
                                </div>

                                <br clear="all">
                            </div>
                            <br> <br>
                            <p align="center">In case of any technical difficulties in accessing and/or submitting the
                                application please write to us at <a href="mail:info@nsuniv.ac.in">info@nsuniv.ac.in</a>
                            </p>
                        </div>
                    </div>
                </div>




                <div class="container">
                    <div class="row no-gutters">
                        <div class="col-md-12">
                            <p class="career_sub_head" style="text-align: left;"> Specific open vacancies : </p>
                            @foreach ($data as $career)
                                <div class="accordionBlock">
                                    <div class="accordion" id="accordion2">

                                        <div class="accordion-group">
                                            <div class="accordion-heading">
                                                <a class="accordion-toggle collapsed" data-toggle="collapse"
                                                    data-parent="#accordion2" href=".{{ $career->id }}">Applications
                                                    for
                                                    {{ $career->title }} {{ $career->sub_title }}
                                                    at NETAJI SUBHAS UNIVERSITY - {{ $career->end }}</a>
                                            </div>
                                            <div id="collapseFive" class="accordion-body collapse {{ $career->id }}">
                                                <div class="accordion-inner">

                                                    <div class="row">
                                                         <div class=" font-13 ml-4 ">
                                                            Start Date:
                                                            {{ $career->start }}
                                                        </div>
                                                        <div class=" font-13 float-end  ml-5 pl-5">
                                                            Last Date:
                                                            {{ $career->end }}
                                                        </div>
                                                    </div>



                                                    {{-- <h4 class="text-university text-center">{{ $career->sub_title }} </h4> --}}
                                                     {{-- <p class="pt-2 text-center text-dark "> {{ $career->description }}</p> --}}
                                                    <br>
                                                    <div class="text-center">
                                                      @if ($career->image_name != '')
                                                        <img src="{{ $url . 'career/' . $career->image_name }}" alt="vacancy" height="500px" width="500px">
                                                        @endif  
                                                    </div>
                                                    {{-- <div class="text-center">
                                                        <img src="{{ asset('/images/vacancy.jpg') }}" alt="vacancy" height="500px" width="500px">
                                                    </div> --}}
                                                    <p class="pt-2 text-center text-dark "> {{ $career->description }}</p>
                                                    <p><a href="" class="btn btn-default btn-apply btn-sm">Apply Now</a>
                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            </section>
        </section>
    @endslot
</x-layout1>
<script type="text/javascript">
    $("#appointment_form").validate({
        submitHandler: function(form) {
            var form_btn = $(form).find('button[type="submit"]');
            var form_result_div = '#form-result';
            $(form_result_div).remove();
            form_btn.before(
                '<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>'
            );
            var form_btn_old_msg = form_btn.html();
            form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
            $(form).ajaxSubmit({
                dataType: 'json',
                success: function(data) {
                    if (data.status == 'true') {
                        $(form).find('.form-control').val('');
                    }
                    form_btn.prop('disabled', false).html(form_btn_old_msg);
                    $(form_result_div).html(data.message).fadeIn('slow');
                    setTimeout(function() {
                        $(form_result_div).fadeOut('slow')
                    }, 6000);
                }
            });
        }
    });
</script>
