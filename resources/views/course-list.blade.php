<x-layout1>
    @slot('body')
        <section class="inner-page">
            <div class="inner-hadding  float-right">
                <div class="container">
                    <div class="breadcrumb">
                        <a href="{{ route('index') }}">Home</a>
                        <a href="{{ route('course_list') }}"> Programmes </a>
                        <a href="#">All programs</a>
                    </div>
                </div>
                <div class="container">
                    <div class="top-menu-sec">
                        <div class="row">
                            <div class=" ">
                                <h4> <a class="text-warning" href="{{ route('index') }}">Home</a> </h4>
                                <ul>
                                    <li><a href="{{ route('index') }}"> Home </a></li>
                                    <li class="active" ><a href="{{ route('course_list') }}"> Programmes </a></li>
                                  
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
              
                <h1><i class="fal fa-diploma"></i> Programmes</h1>
            </div>
            <section class="inner_section programmes_list new_big_line">
                <div class="container mt-3" style="position: relative;">
                    <div id="Progressbar" class="preloader" style="display:none;">
                        <div class="mkmage-overlay preloader_image">
                        </div>
                    </div>
                    <h3 class="ml-2">Full Time Courses</h3>
                    <div class="program_list">
                        @foreach ($all_programs as $program)
                            <ul class="mt-4 mb-0 course_list" id="myList">
                                <?php $courses = DB::table('course_tbl')
                                ->where('program', $program->program)
                                ->get(); ?>
                                <div class="staff-container">
                                    <li class="item "><em class="text-capitalize">
                                        
                                        @if ($courses[0]->type=="ug")
                                        <i class="fas fa-graduation-cap" aria-hidden="true"></i>
                                        @elseif($courses[0]->type=="pg")
                                          <i class="fas fa-user-graduate    "></i>
                                          @else
                                          <i class="fas fa-certificate    "></i>
                                    @endif
                                        
                                        
                                        {{ $program->program }}
                                        </em>
                                        <br>
                                       
                                        <ul>
                                            <table class="table table-one table-bordered table-responsive-lg">
                                                <thead class="thead-light text-uppercase">
                                                    <tr class="font-18">
                                                        <th>Course name</th>
                                                        <th>Duration</th>
                                                        <th>Semester</th>
                                                        <th>Fees</th>
                                                        <th>Type</th>
                                                        <th>Details</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($courses as $course)
                                                        <tr class="font-18">
                                                            <td><a href="javascript:void(0);" class="link font-18"
                                                                    data-toggle="modal"
                                                                    data-target="#detail{{ $course->id }}">{{ $course->course }}</a>
                                                            </td>
                                                            <td>{{ $course->duration }} years</td>
                                                            <td>{{ ((int) $course->duration) * 2 }} semesters</td>
                                                            <td> <i class="fas fa-rupee-sign    "></i>
                                                                {{ $course->fee }}</td>
                                                            @if ($course->type == 'ug')
                                                                <td>Under Graduate</td>
                                                            @else
                                                                <td>Post Graduate</td>
                                                            @endif
                                                            <td> <a class="font-16 text-primary"
                                                                    href="{{ route('course', ['course' => strtolower(str_replace(' ', '-', $course->course)), 'id' => $course->id]) }}">View
                                                                    more</a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </ul>
                                    </li>
                                </div>
                            </ul>
                        @endforeach
                    </div>
                </div>
            </section>
        </section>
    @endslot
</x-layout1>
