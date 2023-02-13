<x-layout1>

    @slot('body')
        <style>
            .close_btn2 {

                display: none !important;

            }
        </style>
        <section class="inner-page">
            <div class="inner-hadding">
                <div class="container">
                    <div class="breadcrumb">
                        <a href="{{ route('index') }}">Home</a>
                        <a href="">Contact</a>
                        <a href="">Contact us</a>
                    </div>
                </div>
                <div class="container">
                    <div class="top-menu-sec">
                        <ul>
                            <h4>Contact</h4>
                            <li><a href="{{ route('index') }}">Home</a>
                            </li>
                            <li class="{{ Request::path() == 'contact/contact-us' ? 'active' : '' }}"><a
                                    href="{{ route('contact') }}">Contact us</a>
                            </li>
                        </ul>
                    </div>
                    <div class="p-2 ">
                        <h2>Contact us</h2>
                        <a class="row p-2" href="{{ route('index') }}">

                            <img class="logo-sm" src="{{ asset('/images/logo.png') }}" alt="">
                            <p class="tag_line_bold mt-1 ">Netaji Subhas University</p>
                        </a>
                    </div>
                </div>
            </div>
            <section class="divider">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6  ">
                            <h3 class="mt-0 mb-2">Interested in discussing?</h3>
                            <span class="line-bottom mt-2 "> &nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <br>
                            <br>
                            <!-- Contact Form -->
                            <form id="contact_form" name="contact_form " class="" action="{{ route('contact-us') }}"
                                method="post">
                                @csrf
                                <input type="hidden" value="{{ date('Y-m-d') }}" name="date" >
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Name <small>*</small></label>
                                            <input name="name" class="form-control" type="text"
                                                placeholder="Enter Name" required="">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Email <small>*</small></label>
                                            <input name="email" class="form-control required email" type="email"
                                                placeholder="Enter Email">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Subject <small>*</small></label>
                                            <input name="subject" class="form-control required" type="text"
                                                placeholder="Enter Subject">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input name="phone" class="form-control" type="text"
                                                placeholder="Enter Phone">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Message</label>
                                    <textarea name="message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-dark btn-theme-colored btn-flat mr-5"
                                        data-loading-text="Please wait...">Send your message</button>
                                    <button type="reset" class="btn btn-default btn-flat btn-theme-colored">Reset</button>
                                </div>
                            </form>

                        </div>
                        <div class="col-md-6 ">
                            <h3 class=" mt-0 mb-2">Get in touch with us</h3>
                            <span class="line-bottom "> &nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>

                            <br>
                            <br>
                            <p>Have any questions or concerns? We are here to help! Your inquiry or comment will be sent to
                                the appropriate recipient based on subject matter

                                .</p>
                            <ul class="styled-icons icon-circled mb-20 d-flex mb-4">
                                <li><a href="#" style=" background-color: #3B5998"><i class="fab fa-facebook"></i></a>
                                </li>
                                <li><a href="#" style="background-color: #02B0E8"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li><a href="#" style="background-color: #c4944b"><i class="fab fa-instagram"></i></a>
                                </li>
                                <li><a href="#" style="background-color: #D71619"><i
                                            class="fab fa-google-plus"></i></a>
                                </li>
                            </ul>

                            <div class="icon-box media mb-1  "> <a class="media-left pull-left flip mr-20" href="#">
                                    <i class="fas fa-map"></i></a>
                                <div class="media-body">
                                    <h5 class="mt-0">Our Office Location</h5>
                                    <p>#1. Pokhari,Near Bhilai Pahadi, Jamshedpur,Jharkhand</p>
                                    <span>#2. Shatabdi Tower, 4th Floor, Sakchi, Jamshedpur, Jharkhand</span>

                                </div>
                            </div>
                            <div class="icon-box media mb-1"> <a class="media-left pull-left flip mr-15" href="#"> <i
                                        class="fa fa-phone"></i></a>
                                <div class="media-body">
                                    <h5 class="mt-0">Contact Number</h5>
                                    <p><a href="tel:9386-817-857">0657-223-3022, 9386-817-857</a></p>
                                </div>
                            </div>
                            <div class="icon-box media mb-1"> <a class="media-left pull-left flip mr-15" href="#">
                                    <i class="fas fa-envelope"></i></a>
                                <div class="media-body">
                                    <h5 class="mt-0">Email Address</h5>
                                    <p><a href="mailto:info@nsuniv.ac.in">info@nsuniv.ac.in</a></p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <br>
            <hr>
            <div class="top_megamenu admission_box bg-warning1">
                <div class="container admission_menu" style="display: block">

                    <a class="close_btn2" href="javascript:void(0);"></a>
                    <div class="row">
                        <div class="mega_menu_left col-lg-3">
                            <span class="mega_menu_brand">

                                <a href="index-2.html" class="site-logo "><img
                                        src="{{ asset('images/logo-Netaji.png') }}" alt="Netaji University" /></a>
                            </span>
                            <ul class="mega_menu_nav_admission">
                                <li><a data-toggle="modal" data-target="#IET11" href="javascript:void(0);">How To
                                        Apply</a></li>

                                <li><a href="{{ route('career') }}">Career Test</a></li>
                                <!-- <li><a href="admissions-scholarship.html">Netaji Scholarship</a></li> -->

                                <li><a target="_blank" href="https://neevfinance.hagnosoft.com/webform">Education
                                        Loan</a></li>

                                {{-- <li><a href="faq">FAQs</a></li> --}}

                            </ul>
                            <a target="_blank" class="apply_btn border text-university text-white"
                                href="https://nsucms.in/prospectus/public" target="_blank">Admission
                                {{ date('Y') }}</a>

                        </div>
                        <div class="mega_menu col-lg-9">
                            <div class="last_date">
                                <div class="row">
                                    <div class="col-lg-6 side_border">
                                        <h5>Campus Helpline Numbers</h5>
                                        <div class="last_date2">
                                            <ul>career
                                                <li>
                                                    <h6>Address</h6>
                                                    <span>Pokhari,Near Bhilai Pahadi, Jamshedpur,Jharkhand</span>
                                                </li>
                                                <li>
                                                    <h6>Jamshedpur City Office</h6>
                                                    <span>Shatabdi Tower, 4th Floor, Sakchi, Jamshedpur,
                                                        Jharkhand</span>
                                                </li>
                                                <li>
                                                    <h6>Email</h6>
                                                    <span>info@nsuniv.ac.in</span>
                                                </li>
                                                <li>
                                                    <h6>Phone</h6>
                                                    <span>0657-223-3022, 9386-817-857</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 apply_at">

                                        <h4>Route Map For NSU </h4>
                                        <div class="last_date2 last_date22">
                                            <div class=" colfull">
                                                <a
                                                    href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3677.793679678996!2d86.2612313498239!3d22.810107684987724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f6096e56867d5b%3A0x1edd658ec7b7a21d!2sNetaji%20Subhas%20University!5e0!3m2!1sen!2sin!4v1646827163795!5m2!1sen!2sin">
                                                    <iframe
                                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3677.793679678996!2d86.2612313498239!3d22.810107684987724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f6096e56867d5b%3A0x1edd658ec7b7a21d!2sNetaji%20Subhas%20University!5e0!3m2!1sen!2sin!4v1646827163795!5m2!1sen!2sin"
                                                        width="100%" height="350" style="border:0;"
                                                        allowfullscreen="" loading="lazy"></iframe>
                                                </a>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <!-- Divider: Google Map -->
            <section>
                <div class="container-fluid pt-0 pb-0">
                    <div class="row">

                        <!-- Google Map HTML Codes -->
                        <div id="map-canvas-multipointer" data-mapstyle="default" data-height="500" data-zoom="12"
                            data-marker="images/map-marker.png">
                        </div>
                        <!-- Google Map Javascript Codes -->
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3677.793546185714!2d86.26123134973862!3d22.810112629887442!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f6096e56867d5b%3A0x1edd658ec7b7a21d!2sNetaji%20Subhas%20University!5e0!3m2!1sen!2sin!4v1647235672718!5m2!1sen!2sin"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </section>

        </section>
    @endslot
</x-layout1>

<!-- Contact Form Validation-->
<script type="text/javascript">
    $("#contact_form").validate({
        submitHandler: function(form) {
            var btn = $(form).find('button[type="submit"]');
            var result_div = '#form-result';
            $(result_div).remove();
            btn.before(
                '<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>'
            );
            var btn_old_msg = btn.html();
            btn.html(btn.prop('disabled', true).data("loading-text"));
            $(form).ajaxSubmit({
                dataType: 'json',
                success: function(data) {
                    if (data.status == 'true') {
                        $(form).find('.form-control').val('');
                    }
                    btn.prop('disabled', false).html(btn_old_msg);
                    $(result_div).html(data.message).fadeIn('slow');
                    setTimeout(function() {
                        $(result_div).fadeOut('slow')
                    }, 6000);
                }
            });
        }
    });
</script>
