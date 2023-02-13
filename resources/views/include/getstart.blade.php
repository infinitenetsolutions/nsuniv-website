<!-- //popup -->
<!-- <button type="button" class="btn btn-primary text-white" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button> -->
<div class="modal fade bs-example-modal-lg" style="background-color: rgb(0 0 0 / 70%)" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg ">
        <div class="modal-content bg-warning1">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true"
                        style="color:#fff;border:3px solid #fff;padding: 0px 6px;border-radius: 50%;line-height: 25px;">&times;</span></button>
                <h4 class="modal-title text-center text-white" id="myModalLabel2"> Don’t Miss Out Our
                    All Course Brochure! </h4>
            </div>
            <div class="modal-body ">
                <div class="row">
                    <div class="col-md-7 nsu_getstarted">
                        <img src="{{ asset('images/nsu/nsu_getstarted.jpeg') }}" alt="netaji subhas university admission enquiry"
                            class="img-fuild">
                    </div>
                    <div class="col-md-5">
                        <div class="bg-lightest p-25">
                            <img src="{{ asset('images/logo-Netaji.png') }}" alt="">
                            <h4 class="text-white m-0 text-capitalize" id="data"></h4>
                            <div class="line-bottom mb-30"></div>
                            <form name="appointment_form" class="mt-5" method="post"
                                action="{{ route('getstart') }}" novalidate="novalidate">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group mb-4">
                                            <!-- <input name="name" class="form-control" type="text" required="" placeholder="Enter Name" aria-required="true"> -->
                                            <?php $courses1 = DB::table('course_tbl')->where('is_deleted','1')->get(); ?>
                                            <select required name="course" id="course" class="form-control">
                                                <option value="">Select Course</option>
                                                @foreach ($courses1 as $course)
                                                    <option value="{{ $course->course }}">{{ $course->course }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mb-10">
                                            <input required name="name" id="name" class="form-control required email"
                                                type="text" placeholder="Your Name" aria-required="true">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mb-10">
                                            <input required name="phone" id="phone" class="form-control required"
                                                type="text" placeholder="Your Mobile Number" aria-required="true">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mb-10">
                                            <input required name="email" id="email" class="form-control required"
                                                type="text" placeholder="Enter Email Address" aria-required="true">
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group mb-10">
                                            <input required name="referer" id="referer" class="form-control required"
                                                type="text" placeholder="Refered By" aria-required="true">
                                        </div>
                                    </div>

                                    {{-- <div class="col-sm-12">
                                        <div class="form-group mb-10 text-right">
                                            <button id="otpbutton" onclick="sendotp()" type="button"
                                                class="btn btn-border btn-transparent btn-circled btn-lg">Send
                                                OTP</button>
                                        </div>
                                    </div>
                                    <div class="p-2 col-sm-12 mb-2">
                                        <h5 class="text-white m-0 text-bold text-capitalize " id="success"></h5>

                                    </div>

                                    <div id="spinner" class="col-sm-12 " style="display: none">
                                        <div class="form-group mb-10 text-right">
                                            <span type="button" class="btn font-20 btn-transparent btn-circled "> <i
                                                    class="fa fa-spinner fa-spin"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mb-10">
                                            <input onkeyup="otp(this.value)" readonly id="otpbox"
                                                name="appontment_date" class="form-control required" type="text"
                                                placeholder="Enter OTP" aria-required="true">
                                        </div>
                                    </div> --}}
                                </div>
                                <div class="form-group mb-0 mt-20">
                                    <input name="created_at" class="form-control" type="hidden"
                                        value="{{ date('Y-m-d h:m:s') }}">
                                    <button id="submit" type="submit"
                                        class="btn btn-border btn-transparent btn-circled "
                                        href="#">Submit</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    // otp = '';

    //   function sendotp() {
    //       let phone = document.getElementById('phone').value;
    //       let email = document.getElementById('email').value;
    //       let name = document.getElementById('name').value;
    //       let course = document.getElementById('course').value;

    //       if (phone.length == 10) {
    //           document.getElementById('spinner').style.display = 'block';

    //           $.ajax({

    //               url: "{{ route('getstart.getotp') }}",
    //               data: {
    //                   'data': phone
    //               },
    //               type: 'GET',
    //               success: function(result) {
    //                   console.log(result);
    //                   otp = result;
    //                   document.getElementById('phone').readOnly = true;
    //                   document.getElementById('email').readOnly = true;
    //                   document.getElementById('name').readOnly = true;
    //                   document.getElementById('course').readOnly = true;
    //                   document.getElementById('otpbox').readOnly = false;
    //                   document.getElementById('submit').disabled = false;
    //                   document.getElementById('otpbutton').style.display = 'none';
    //                   document.getElementById('spinner').style.display = 'none';

    //                   $('#success').html('Otp Successfully sent to the mobile number');
    //               }
    //           });
    //       } else {
    //           $('#data').html('Please Enter 10 digit Valid Mobile Number');

    //       }

    //   }


    //   function otp(useropt) {
    //       console.log('heeldlkfdkl');
    //       if (useropt.length == 6 && useropt != otp) {
    //           console.log(otp);

    //       }
    //   }
</script>