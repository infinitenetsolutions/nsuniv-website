<?php
    if(isset($_REQUEST['submit'])){
    if ($_REQUEST['name'] != '' && $_REQUEST['name'] != NULL 
           && $_REQUEST['school_college'] != '' && $_REQUEST['school_college'] != NULL
           && $_REQUEST['phone_no'] != '' && $_REQUEST['phone_no'] != NULL


            && $_REQUEST['email'] != '' && $_REQUEST['email'] != NULL
            && $_REQUEST['class_semester'] != '' && $_REQUEST['class_semester'] != NULL
            && $_REQUEST['event'] != '' && $_REQUEST['event'] != NULL
//            && $_REQUEST['program'] != '' && $_REQUEST['program'] != NULL && isset($_REQUEST['send'])
    ) {
        //send email
        $email = $_REQUEST['email'];
        $subject = 'Registration from ' . $_REQUEST['name']
//                . '| Regarding ' . $_REQUEST['subject']
        ;
        $message = "Name : " . $_REQUEST['name']
                  . "\r\n school_college : " . $_REQUEST['school_college']
              
                . "\r\n phone_no : " . $_REQUEST['phone_no']
                 . "\r\n Email : " . $_REQUEST['email']
                . "\r\n class_semester : " . $_REQUEST['class_semester']

                . ",\r\n event : " . $_REQUEST['event'];
        $message = wordwrap($message, 70, "\r\n");

        // mail("nsibmxplore@gmail.com",  $subject, $message) && mail("tanveer@nsuniv.ac.in", $subject, $message);
        ?>
<script>
    alert('Mail Sent. Thank you for contacting us!');
    document.getElementById("contact").reset();
    document.getElementById('name') = "";
</script>
<?php
    }}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>NSU | Xplore 7.0 Registration Links </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Russo One' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Rubik' rel='stylesheet'>
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

        <h1 class="header-text scale-up-center text-center">Xplore 9.0 2K22 Registration Links </h1>
        <h3 style="font-size: 12px;margin-top: -7px;color: #c70013;" class="scale-up-center text-center">(Eligibility - For 10th, +1, +2
            and undergraduate students)</h3>

        <br />
      <div>
        <img src="{{asset ('images/xplore new.jpg')}}" alt="Xplore 9.0" style="width:100% ; height:auto;"
            class="scale-up-center">
      </div><br><br><br>
        <div style="margin: 0% 5%" class="scale-up-center">
            <div class="row">
              <div class="col-md-4">
                <ul class="list-group">
                <a href="https://forms.gle/9fAXbM7PrEQMAzyU6" target="_blank">
                    <li class="list-group-item link-bold">SUPER SINGING (SOLO SINGING)</li>
                </a><br>
                <a href="https://forms.gle/odd8pdSzm1RhxoUy7" target="_blank">
                    <li class="list-group-item link-bold">SUPER SINGER (GROUP)</li>
                </a><br>
                <a href="https://forms.gle/KWhCvUgSe3zchhyf6" target="_blank">
                    <li class="list-group-item link-bold">ROLLING THUNDER (RAPPING)</li>
                </a><br>
                <a href="https://forms.gle/zUQL11m3W2kben786" target="_blank">
                    <li class="list-group-item link-bold">BLIND DATE (EXTEMPORE)</li>
                </a><br>
                <a href="https://forms.gle/vEcXunouhzTu78Ao9" target="_blank">
                    <li class="list-group-item link-bold">IMITATION GAME (MIMICRY)</li>
                </a><br>
                <a href="https://forms.gle/VQJofLKd7DSMZ7sS6" target="_blank">
                    <li class="list-group-item link-bold">LET'S ACT (THEATRE)</li>
                </a><br>                
                </ul>
              </div>
              <div class="col-md-4">
                <ul class="list-group">
                <a href="https://forms.gle/1EekXzWv5P1YJZ5r8" target="_blank">
                    <li class="list-group-item link-bold">Q FIESTA </li>
                </a><br>
                <a href="https://forms.gle/wP6rWjFZuwdPguBh8" target="_blank">
                    <li class="list-group-item link-bold">SONS OF PITCHES - CRICKET</li>
                </a><br>
                <a href="https://forms.gle/7qm6nyf9bTjs32L87" target="_blank">
                    <li class="list-group-item link-bold">B-FIESTA (BUSINESS IDEA PRESENTATION)</li>
                </a><br>
                <a href="https://forms.gle/72JZpEHWAnNTVHLv6" target="_blank">
                    <li class="list-group-item link-bold">OPEN MIC</li>
                </a><br>
                <a href="https://forms.gle/3f7iQU2knF4poyzh7" target="_blank">
                    <li class="list-group-item link-bold">MAKE YOUR MOVE (SOLO DANCE)</li>
                </a><br>
               
                <a href="https://forms.gle/u3UWQ3tBrf6tuvE39" target="_blank">
                    <li class="list-group-item link-bold">SKYWALK - (RAMP WALK)</li>
                </a><br>
                </ul>
              </div>
              <div class="col-md-4">
                <ul class="list-group">
                <a href="https://forms.gle/CEDdWhekq2ct8hur8" target="_blank">
                    <li class="bor list-group-item link-bold">WAH RE WAH (FIRELESS COOKING)</li>
                </a><br>
                <a href="https://forms.gle/KAGWPdTj4qQYdgZi9" target="_blank">
                    <li class="list-group-item link-bold">#CODE</li>
                </a><br>
                <a href="https://forms.gle/QPyGPq482vRAb2kP6" target="_blank">
                    <li class="list-group-item link-bold">MOUNANTAR - MIME ACT (GROUP)</li>
                </a><br>
                <a href="https://forms.gle/3n8UB2zht9NcbbBx9" target="_blank">
                    <li class="list-group-item link-bold">SPELLING COMBAT (SPELLING BEE)</li>
                </a><br>
                <a href="https://forms.gle/BX8qeViXt1L2eaGy8" target="_blank">
                    <li class="list-group-item link-bold">CROSSFADE (DEBATE)</li>
                </a><br>
                </ul>
              </div>
            </div>

            <p style="color:black"> Powered by <a target="_blank" style="color:green;"
                    href="http://infinitenetsolutions.com/"><b>Infinite Net Solutions</b></a></p>
        </div>
</body>

</html>
