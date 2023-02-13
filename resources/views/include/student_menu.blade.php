<?php
$home_url = '';

// if ($_SERVER['HTTP_HOST'] == '127.0.0.1:8000') {
//     $home_url = 'http://127.0.0.1:8001/upload/';
// } else {
$home_url = 'https://nsuniv.ac.in/nsuadmin/public/upload/';
// }
function url_check($url)
{
    stream_context_set_default([
        'ssl' => [
            'verify_peer' => false,
            'verify_peer_name' => false,
        ],
    ]);

    $array = get_headers($url);
    $string = $array[0];
    if (strpos($string, '200')) {
        return true;
    } else {
        return false;
    }
}
?>
<div class="mega_menu pt-5 hidden-xs">

    <div class="row no-gutters scroll-pan ">
        <div class="col-md-12 pr-2">
            <div class="row no-gutters menu_col4 infr-menu ">

                <?php $infrastructures = DB::table('pages')
                    ->where('page_type', 'student')
                    ->get();
                ?>
                @foreach ($infrastructures as $infrastructure)
                    <div class="col-md-3 section ">
                        <div class="border1">
                            <a href="{{ route('student', $infrastructure->title) }}"> <img
                                    src="{{ $home_url . 'student/' . $infrastructure->image_name }}"
                                    class="img-fluid">
                                <div class="menu_boxx1">
                                    {{ $infrastructure->sub_title }}
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
                <?php $studentpdfs = DB::table('pdf')
                    ->where('type', 'studentpdf')
                    ->get();
                ?>
                @foreach ($studentpdfs as $studentpdf)
                    @if (url_check($home_url . 'pdf/' . $studentpdf->images))
                        <div class="col-md-3 section ">
                            <div class="border1">
                                <a target="_blank" href="{{ $home_url . 'pdf/' . $studentpdf->images }}">

                                    @if (strripos($studentpdf->title, 'result') > 0)
                                        <img src="{{ asset('images/nsu/icon/download.jpg') }}" class="img-fluid"
                                            alt="{{ $studentpdf->title }}">
                                    @elseif (strripos($studentpdf->title, 'Calendar') > 0)
                                        <img src="{{ asset('images/nsu/icon/academic_calendar.jpg') }}"
                                            class="img-fluid" alt="{{ $studentpdf->title }}">
                                    @elseif (strripos($studentpdf->title, 'Discriminatory Cell') > 0)
                                        <img src="{{ asset('images/nsu/icon/anti discrimination.jpg') }}"
                                            class="img-fluid" alt="{{ $studentpdf->title }}">
                                    @else
                                        <img src="{{ asset('images/nsu/icon/download.jpg') }}" class="img-fluid"
                                            alt="{{ $studentpdf->title }}">
                                    @endif
                                    <div class="menu_boxx1 text-capitalize ">
                                        {{ $studentpdf->title }}
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endif
                @endforeach
                <div class="col-md-3 section ">
                    <div class="border1">
                        <a  href="{{ route('student.alumni') }}">
                            <img src="{{ asset('images/nsu/icon/alumni.jpg') }}" class="img-fluid"
                                alt="{{ $studentpdf->title }}">
                            <div class="menu_boxx1 text-capitalize ">
                                {{ 'ALUMNI' }}
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
