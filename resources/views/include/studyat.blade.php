<?php // total number of courses
$total_teacher = DB::table('faculty_tbl')->count();
// total number of teachers getting
$total_courses = DB::table('course_tbl')->count();
$about_us=DB::table('pages')->where('title','who-we-are')->get();
?>
<section class=" p-3 bg-black mydiv">
    <div class="container">
        <div class="top-home-sec1 row">
            <div class="col-12 col-md-12">
                <h2>
                    Study at NSU</h2>
            </div>
            <div class="col-12 col-md-5 col-lg-5 col-xl-5">
                <p class="wow fadeInUp text-justify font-16">
                  <?=  substr($about_us[0]->description,30,600)  ?>

                    <a class="text-primary" href="{{ route('about', 'who-we-are') }}">view more</a>
                </p>
            </div>
            <div class="col-12 col-md-7 col-lg-7 col-xl-7">
                <ul>
                    <li>
                        <h3 class="wow fadeInDown">{{ $total_courses }}+</h3>
                        <span class="wow fadeInUp">Courses</span>
                    </li>
                    <li>
                        <h3 class="wow fadeInDown">15000+</h3>
                        <span class="wow fadeInUp"> Students </span>
                    </li>
                    <li>
                        <h3 class="wow fadeInDown">{{ $total_teacher }}+</h3>
                        <span class="wow fadeInUp">Qualified Faculties</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
