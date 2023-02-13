<x-layout1>
    @slot('title', 'Governing Body')
    @slot('body')
    <!-- Start main-content -->
    <!-- Start main-content -->
    <section class="inner-page">
        <div class="inner-hadding">
            <div class="container">
                <div class="breadcrumb">
                    <a href="{{ route('index') }}">Home</a>
                    <a href="">About</a>
                    <a href="">{{ 'Governing Body' }}</a>
                </div>
            </div>
            <div class="container">
                <div class="top-menu-sec">
                    <ul>
                        <h4>About</h4>
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li class="active" ><a href="#">Governing body</a></li>

                        @foreach ($quicks as $quick)
                            <li><a href="{{ route('about', $quick->title) }}">{{ $quick->sub_title }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="p-3 ">
                    <h2>{{ 'Governing Body' }}</h2>
                    <a class="row p-2" href="{{ route('index') }}">

                        <img class="logo-sm" src="{{ asset('/images/logo.png') }}" alt="">
                        <p class="tag_line_bold mt-1 ">Netaji Subhas University</p>
                    </a>
                </div>
            </div>
        </div>
        <section>
            <div class="container pt-4 pb-40">
                <div class="section-title">
                    <div class="row">
                        <h3 class="text-uppercase mt-0">Governing <span class="text-theme-colored2">Body</span></h3>
                        <div class="double-line-bottom-theme-colored-2"></div>

                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-responsive-lg">
                                <thead>
                                    <tr class="bg-warning">
                                        <th>#</th>
                                        <th>NAME</th>
                                        <th>DESIGNATION</th>
                                        <th>ADDRESS
                                        </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $govbody )
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $govbody->name }}</td>
                                        <td>{{ $govbody->designation }}</td>
                                        <td>{{ $govbody->address }}</td>
                                    </tr>
                                    @endforeach



                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>



    </section>

        @endslot
</x-layout1>