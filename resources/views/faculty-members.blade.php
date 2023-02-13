<x-layout1>
    @slot('title', 'About us')
    @slot('body')
        <!-- Start main-content -->
        <section class="inner-page">
            <div class="inner-hadding">
                <div class="container">
                    <div class="breadcrumb">
                        <a href="{{ route('index') }}">Home</a>
                        <a href="#">About </a>
                        <a href="#">Faculty </a>

                        @if ($data[0]->type == 'hou')
                            <a href="{{ route('faculty', $data[0]->type) }}">
                                Heade of University</a>
                        @elseif($data[0]->type == 'hod')
                            <a href="{{ route('faculty', $data[0]->type) }}">
                                Heade of Department</a>
                        @else
                            <a href="{{ route('faculty', $data[0]->type) }}">Meet
                                our {{ $data[0]->type }}</a>
                        @endif
                    </div>
                </div>
                <div class="container">
                    <div class="top-menu-sec">
                        <h4>Faculty</h4>
                        <ul>
                            <ul>
                                <?php $facultyes = DB::table('faculty_tbl')
                                    ->distinct()
                                    ->get(['type']);
                                ?>
                                @foreach ($facultyes as $faculty)
                                    {{-- @if ($faculty->type == 'hou')
                                        <li
                                            class="{{ Request::path() == 'about/faculty/' . $faculty->type ? 'active' : '' }}">
                                            <a href="{{ route('faculty', $faculty->type) }}">Meet
                                                our Head of University</a>
                                        </li>
                                    @else --}}
                                    @if ($faculty->type != 'hou')
                                        <li
                                            class="{{ Request::path() == 'about/faculty/' . $faculty->type ? 'active' : '' }}">
                                            <a href="{{ route('faculty', $faculty->type) }}">Meet
                                                our {{ $faculty->type }}</a>
                                        </li>
                                    @endif

                                    {{-- @endif --}}
                                @endforeach
                            </ul>
                        </ul>
                    </div>
                    <div class="p-2 ">
                        @if ($data[0]->type == 'hou')
                            <h2>Head Of University</h2>
                        @elseif($data[0]->type == 'hod')
                            <h2>Head Of Department</h2>
                        @else
                            <h2> {{ $data[0]->type }}</h2>
                        @endif
                        <a class="row p-2" href="{{ route('index') }}">
                            <img class="logo-sm" src="{{ asset('/images/logo.png') }}" alt="">
                            <p class="tag_line_bold mt-1 ">Netaji Subhas University</p>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Section: Team -->
            <section id="team" class="bg-silver-deep mt-5">
                <div class="container">
                    <div class="row mb-2">
                        <div class="col-4">
                            {{-- Depatment filter start --}}
                            @if ($data[0]->type != 'hou')
                                <select onchange="department(this.value, '{{ $data[0]->type }}')"
                                    class="form-control form-control-sm">
                                    @if (isset($dept))
                                        <option selected value="{{ $dept }}">{{ $dept }}</option>
                                    @else
                                        <option selected disabled>- Department -</option>
                                    @endif
                                    @foreach ($department as $item)
                                        <option value="{{ $item->department }}">{{ $item->department }}</option>
                                    @endforeach
                                </select>
                            @endif
                            {{-- department filter end --}}
                        </div>
                    </div>

                    <div class="row mtli-row-clearfix">
                        @foreach ($data as $faculty)
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="team-members border-bottom-theme-colored2px text-center maxwidth400 mb-2">
                                    <div class="team-thumb">
                                        <a href="{{ route('faculty-details', $faculty->id) }}">
                                            <img height="300px" class="img-fullwidth" alt="" style="border-radius:50%!important"
                                                src="{{ $url . 'teacher/' . $faculty->image_name }}">
                                        </a>
                                        <div class="team-overlay"></div>
                                        <?php $social_media = DB::table('social')
                                            ->where('teacher_id', $faculty->id)
                                            ->get(); ?>
                                        <ul class="styled-icons theme-icon team-social icon-sm ml-5">
                                            @foreach ($social_media as $social)
                                                <li class="pt-4"><a target="_blank" href="{{ $social->link }}"><i
                                                            class="fab fa-{{ $social->social }}"></i></a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="team-details">
                                        <h5 class="text-uppercase text-theme-colored font-weight-600 m-2">
                                            {{ $faculty->name }}
                                        </h5>
                                        <h6 class="text-gray font-13 font-weight-400 line-bottom-centered mt-0">
                                            {{ $faculty->designation }}
                                            <p class="hidden-md"></p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="p-4 "> {{ $data->onEachSide(0)->links() }} </div>
                </div>
            </section>
        </section>
        <!-- end main-content -->
    @endslot
</x-layout1>
<script>
    function department(department, type) {
        window.location.replace('/about/faculty/department/' + type + '/' + department)
        console.log(department);
    }
</script>
