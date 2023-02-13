<div class="subscribe"><span><a id="modal-click" data-toggle="modal" data-target="#subscribe" href="javascript:void(0);">
            <img src="{{ asset('images/alumni.png') }}" class="img-fluid"> </a> </span></div>
<div class="subscribe_pop5">
    <div class="modal fade" id="subscribe" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content bg-warning">
                <div class="modal-header">
                    <button type="button" onclick="hide_modal()" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true"
                            style="color:#fff;border:3px solid #fff;padding: 0px 6px;border-radius: 50%;line-height: 25px;">&times;</span></button>
                    <h3 class="text-center"> <strong> STUDENT ALUMNI </strong>
                    </h3>
                </div>
                <div class="modal-body text">
                    <form action="{{ route('student.alumni.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="0" name="is_deleted">
                        <div class="row">
                            <div class="form-group col-sm-4">
                                <span>Registration Number</span>
                                <input required class="form-control" id="reg_no" name="reg_no"
                                    placeholder="Enter Registration Number" type="text">
                            </div>
                            <div class="form-group col-sm-4">
                                <span>Phone Number</span>
                                <input  required class="form-control" onkeyup="check_id(this.value)" id="phone"
                                    name="phone" placeholder="Enter 10 digit valid Mobile" type="text">
                            </div>

                            <div class="form-group col-sm-4">
                                <span>Name</span>
                                <input readonly required class="form-control" id="testimonial_name" name="testimonial_name"
                                    placeholder="Enter Name" type="text">
                            </div>
                            <div class="form-group col-sm-4">
                                <label>Course</label>
                                <input readonly  required class="form-control" id="testimonial_course" name="testimonial_course"
                                    placeholder="Enter Course" type="text">
                            </div>
                            <div class="form-group col-sm-4">
                                <label>Batch Year</label>
                                <input readonly required class="form-control" id="testimonial_batch" name="testimonial_batch"
                                    placeholder="Enter Batch Year" type="text">
                            </div>
                            <div class="form-group col-sm-4">
                                <label>Current Designation</label>
                                <input required class="form-control"
                                    id="testimonial_des
                            
                            ig"
                                    name="testimonial_desig" placeholder="Enter Current Designation" type="text">
                            </div>
                            <div class="form-group col-sm-4">
                                <label>Company Currently Working</label>
                                <input required class="form-control" id="testimonial_company" name="testimonial_company"
                                    placeholder="Enter Current Company" type="text">
                            </div>
                            <div class="form-group col-sm-4">
                                <label>Upload Image</label>
                                <input required class="form-control" id="testimonial_image" name="testimonial_image"
                                    type="file" accept="image/*">
                                <small class="form-text text-muted" id="image_err">Please upload your image. </small>
                            </div>
                            <div class="form-group col-sm-12">
                                <label for="message">Message</label>
                                <textarea class="form-control" rows="5" id="message" name="message" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <br>

                        <div class="form-group text-center">
                            <button id="testimonial_button" class="btn theme-orange border-0 mt-4" type="submit">Submit
                                 </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function check_id(mobile) {
            if (mobile.length >= 10) {
                id = document.getElementById('reg_no').value;
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    data = JSON.parse(this.responseText)
                    document.getElementById('testimonial_name').value = data.admission_first_name + " " + data
                        .admission_middle_name + " " + data.admission_last_name;
                    document.getElementById('testimonial_batch').value = data.academic_session;
                    document.getElementById('testimonial_course').value = data.course_name;
                }
                xmlhttp.open("GET", "/student/alumni/apidata/" + mobile + "/" + id, true);
                xmlhttp.send();
            }
        }
    
    </script>
