
<x-layout>
    @slot('body')
<!DOCTYPE html>
<html lang="en">

<head>
    <title>NSU |National Conference </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Russo One' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Rubik' rel='stylesheet'> --}}
    <style>
        body {
            background-image: url("bg-registration-form-2");

            background-color: #cccccc;
            /* Used if the image is unavailable */
            height: 500px;
            /* You must set a specified height */
            background-position: center;
            /* Center the image */
            background-repeat: no-repeat;
            /* Do not repeat the image */
            background-size: cover;
            /* Resize the background image to cover the entire container */
        }

        .header-text {
            font-family: 'Russo One';
            font-size: 30px;
            color: #e63c4f;
        }

        body {
            font-family: 'Rubik';
        }

        .link-bold {
            font-weight: 500;
            color: #000;
        }

        .scale-up-center {
            -webkit-animation: scale-up-center 0.4s cubic-bezier(0.390, 0.575, 0.565, 1.000) both;
            animation: scale-up-center 0.4s cubic-bezier(0.390, 0.575, 0.565, 1.000) both;
        }
        .bor
        {border-radius: 20px;!important}
        .white-bor 
        {
          border: white 1px solid;
        }

        @-webkit-keyframes scale-up-center {
            0% {
                -webkit-transform: scale(0.5);
                transform: scale(0.5);
            }

            100% {
                -webkit-transform: scale(1);
                transform: scale(1);
            }
        }

        @keyframes scale-up-center {
            0% {
                -webkit-transform: scale(0.5);
                transform: scale(0.5);
            }

            100% {
                -webkit-transform: scale(1);
                transform: scale(1);
            }
        }

       
        
    </style>

</head>

<body>
    <div id="wrapper" class="container" style="background-color: #ff9900;">

        <figure class="page-head-image">
            <img src="nsu_logo.png" style="height:100px; margin-top:-44px;" />
        </figure>

        <h1 class="header-text scale-up-center text-center" style="margin-top:100px">National Conference</h1>
        <h5 class="header-text scale-up-center text-center" style="margin-top:-12px;font-size:20px;">"Revamping Higher Education with Multi Disciplinary Approach"</h5>
        <h1 class="header-text scale-up-center text-center" style="margin-top:-12px;">INQUEST 2022</h1>
           

        <br />
         <div class="row">
            <div class="col-sm-4">
                <a href="https://nsuniv.ac.in/" class="btn btn-danger white-bor"><b>Back To Home</b></a>
            </div>
            <div class="col-sm-4 text-center">
                <a href="https://forms.gle/nuT8JA973rDPidSZ6" class="btn btn-danger white-bor"><b>Apply for conference</b></a>
            </div>
            <div class="col-sm-4">
                <a href="{{asset('upload/conference.pdf')}}" style="float: right;" download class="btn btn-danger white-bor"><b>Conference Details</b></a><br><br>
            </div>
    </div>
<br>      <div class="text-center">
        <img src="{{asset ('images/nsu conference.jpg')}}" alt="Xplore 9.0" style="width:80% ; height:auto;"
            class="scale-up-center">
      </div><br><br>
       
</body>

</html>
@endslot
</x-layout>