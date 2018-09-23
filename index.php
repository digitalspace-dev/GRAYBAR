<?php 
if(isset($_POST['submit'])){
    $to = "omsingh141089@gmail.com"; // this is your Email address
    $from = $_POST['form-email']; // this is the sender's Email address
    $first_name = $_POST['form-name'];
    $subject = $_POST['form-subject'];
    $subject2 = $_POST['form-subject'];
	$form_message = $_POST['form-message'];
    $message = $first_name . " wrote the following:" . "\n\n" . $_POST['form-message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['form-message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>

<!DOCTYPE html>
<html class="no-js" lang="en">


<!-- Mirrored from quomodosoft.com/html/perfect-gym/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 May 2018 12:33:50 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="author" content="John Doe">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>GrayBar</title>
    <!-- Place favicon.ico in the root directory -->
    <!--
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="shortcut icon" type="image/ico" href="images/favicon.ico" />
    -->
    <!-- Plugin-CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/icofont.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/animate.css">
    <!-- Main-Stylesheets -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body data-spy="scroll" data-target="#primary_menu">
    <!-- Preloader-content -->
    <div class="preloade">
        <span><i class="icofont icofont-hand-thunder"></i></span>
    </div>
    <!-- Top-Bar-->
    <div class="top-bar clearfix hidden-xs" id="home_page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 clearfix">
                    <div class="modal-box">
                        <div class="box-icon pink">
                            <i class="icofont icofont-clock-time"></i>
                        </div>
                        <p>Morning: 06:00 - 11:00am · Evening: 05:00 - 9:00 pm</p>
                    </div>
                    <div class="modal-box">
                        <div class="box-icon pink">
                            <i class="icofont icofont-headphone-alt"></i>
                        </div>
                        <p>+91 7219218704</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="social-menu">
                        <ul class="social-menu">
                            <li>Follow Us</li>
                            <li><a href="https://www.facebook.com/crossfitgraybar/" target="_blank"><i class="icofont icofont-social-facebook"></i></a></li>
                            <li><a href="https://www.instagram.com/graybarfitness/" target="_blank"><i class="icofont icofont-social-instagram"></i></a></li>
                            <!--<li><a href="#"><i class="icofont icofont-social-google-plus"></i></a></li>
                            <li><a href="#"><i class="icofont icofont-social-vimeo"></i></a></li>-->
                            <li><a href="https://www.youtube.com/channel/UCUAY2qzCYF0Q5GXzqOTntsQ?view_as=subscriber"><i class="icofont icofont-social-youtube-play" target="_blank"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top-Bar-End-->
    <!--Home-Area-->
    <div class="home-area">
        <!--Mainmenu-Area-->
        <nav class="navbar navbar-inverse mainmenu-area" data-spy="affix" data-offset-top="200">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary_menu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                    <a class="navbar-brand" href="#home_page"><img src="images/logo.png" alt="Logo"></a>
                </div>
                <div class="collapse navbar-collapse" id="primary_menu">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="#home_page">Home</a></li>
                        <li><a href="#about_page">About</a></li>
                        <li><a href="#schedule_page">Schedule</a></li>
                        <li><a href="#gallery_page">Gallery</a></li>
                        <li><a href="#price_page">Price</a></li>
                        <li><a href="#trainer_page">Trainer</a></li>
                       <!-- <li><a href="#blog_page">Blog</a></li>-->
                        <li><a href="#contact_page">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--Mainmenu-Area-End-->
        <!-- Home-Slider -->
        <div class="bg-slider">
            <div class="item" style="background-image: url('images/bg.jpg')">
                <div class="vcenter">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-8 col-md-6">
                                <h1 class="headline">COMMUNITY <span class="pink">PERSEVERANCE <br /> INTEGRITY</span></h1>
                                <div class="desc">
                                    <p>Take Three Foundation of Graybar Fitness</p>
                                </div>
                                <div class="space-30"></div>
                                <a href="#" class="bttn bttn-lg">Sign Up</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item" style="background-image: url('images/bg1.jpg')">
                <div class="vcenter">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-8 col-md-6">
                                <h1 class="headline">The <span class="pink">Over Your Fitness Goals <br /> The  Sign Up </span> To Start</h1>
                                <div class="desc">
                                    <p></p>
                                </div>
                                <div class="space-30"></div>
                                <a href="#" class="bttn bttn-lg">Sign Up</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--<div class="item" style="background-image: url('images/bg-03.jpg')">
                <div class="vcenter">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-8 col-md-6">
                                <h1 class="headline">The <span class="pink">Best <br /> Crossfit</span> Gym</h1>
                                <div class="desc">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus soluta quaerat, architecto quasi dolorum vitae ad suscipit magnam quas, officiis minus magni aspernatur sunt!</p>
                                </div>
                                <div class="space-30"></div>
                                <a href="#" class="bttn bttn-lg">Revelutionery gym</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
            <!--<div class="item" style="background-image: url('images/bg-04.jpg')">
                <div class="vcenter">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-8 col-md-6">
                                <h1 class="headline">The <span class="pink">Best <br /> Crossfit</span> Gym</h1>
                                <div class="desc">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus soluta quaerat, architecto quasi dolorum vitae ad suscipit magnam quas, officiis minus magni aspernatur sunt!</p>
                                </div>
                                <div class="space-30"></div>
                                <a href="#" class="bttn bttn-lg">Revelutionery gym</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
            <!--<div class="item" style="background-image: url('images/bg-05.jpg')">
                <div class="vcenter">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-8 col-md-6">
                                <h1 class="headline">The <span class="pink">Best <br /> Crossfit</span> Gym</h1>
                                <div class="desc">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus soluta quaerat, architecto quasi dolorum vitae ad suscipit magnam quas, officiis minus magni aspernatur sunt!</p>
                                </div>
                                <div class="space-30"></div>
                                <a href="#" class="bttn bttn-lg">Revelutionery gym</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
            <!--<div class="item" style="background-image: url('images/bg-06.jpg')">
                <div class="vcenter">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-8 col-md-6">
                                <h1 class="headline">The <span class="pink">Best <br /> Crossfit</span> Gym</h1>
                                <div class="desc">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus soluta quaerat, architecto quasi dolorum vitae ad suscipit magnam quas, officiis minus magni aspernatur sunt!</p>
                                </div>
                                <div class="space-30"></div>
                                <a href="#" class="bttn bttn-lg">Revelutionery gym</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
            <!--<div class="item" style="background-image: url('images/bg-07.jpg')">
                <div class="vcenter">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-8 col-md-6">
                                <h1 class="headline">The <span class="pink">Best <br /> Crossfit</span> Gym</h1>
                                <div class="desc">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus soluta quaerat, architecto quasi dolorum vitae ad suscipit magnam quas, officiis minus magni aspernatur sunt!</p>
                                </div>
                                <div class="space-30"></div>
                                <a href="#" class="bttn bttn-lg">Revelutionery gym</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
            <!--<div class="item" style="background-image: url('images/bg-08.jpg')">
                <div class="vcenter">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-8 col-md-6">
                                <h1 class="headline">The <span class="pink">Best <br /> Crossfit</span> Gym</h1>
                                <div class="desc">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus soluta quaerat, architecto quasi dolorum vitae ad suscipit magnam quas, officiis minus magni aspernatur sunt!</p>
                                </div>
                                <div class="space-30"></div>
                                <a href="#" class="bttn bttn-lg">Revelutionery gym</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
            <!--<div class="item" style="background-image: url('images/bg-09.jpg')">
                <div class="vcenter">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-8 col-md-6">
                                <h1 class="headline">The <span class="pink">Best <br /> Crossfit</span> Gym</h1>
                                <div class="desc">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus soluta quaerat, architecto quasi dolorum vitae ad suscipit magnam quas, officiis minus magni aspernatur sunt!</p>
                                </div>
                                <div class="space-30"></div>
                                <a href="#" class="bttn bttn-lg">Revelutionery gym</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
        </div>
        <!-- Home-Slider-End -->
        <!-- Join-Button -->
        <div class="join-button">
            <a href="#">Join us</a>
        </div>
    </div>
    <!--Home-Area-End-->
    <!-- About-Area -->
    <section class="section-padding relative" id="about_page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="page-title">
                        <h2 class="title">GrayBar<span class="pink">Fitness</span></h2>
                        <h3 class="sub-title">We are not your average gym</h3>
                    </div>
                    <h4>This is not your average workout<span class="pink"></span>,This pretty much sums up Graybar fitness.</h4>
                    <div class="space-30"></div>
                    <p>Our goal at graybar fitness is not only to make you fit and fast but also to make this journey fun and enjoyable.
The close community and group workout make sure that you enjoy any activity that you do here. With range of programmes for beginner, intermediate or advanced athlete, no two days will be same again. We serve varied needs.
Our professional coaches and their expertise in their respective area combined with their skills in managing and encouraging people result in a very supportive community which celebrates each other success.
So in case if you are still confused we summarise …why us.<br />
 <h6>Why Graybar Fitness</h6>
 <ul>
	<li>Professional approach to training</li>
	<li>Mix of indoor and outdoor activities</li>
	<li>Different activities and sports to choose from</li>
	<li>Group workout for every skill level</li>
	<li>Community support</li>
</ul>
</p>
                </div>
                <div class="col-xs-12 col-sm-6 text-right">
                    <div class="xs-space-30"></div>
                    <figure>
                        <img src="images/about-image.png" alt="About Photo">
                    </figure>
                </div>
            </div>
        </div>
        <ul class="parallax">
            <li data-parallax='{"x": 400, "y": -400 }'><span></span></li>
            <li data-parallax='{"x": 200, "y": -200 }'><span></span></li>
            <li data-parallax='{"x": 400, "y": -400 }'><span></span></li>
            <li data-parallax='{"x": 400, "y": -400 }'><span></span></li>
            <li data-parallax='{"x": 200, "y": -200 }'><span></span></li>
            <li data-parallax='{"x": 300, "y": -300 }'><span></span></li>
            <li data-parallax='{"x": 200, "y": -200 }'><span></span></li>
        </ul>
    </section>
    <!-- About-Area-End -->
    <!--Service-Area-->
    <section class="section-padding bg-black" id="service_page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="service-box" style="background-image: url('images/sr-1.jpg'); padding: 62px;">
                        <h3>Crossfit</h3>
                        <p>With constantly varied high intensity functional movement, Crossfit  is a training methodology  to train people of different shape and sizes to make them fit and fast in an encouraging environment.</p>
                        <div class="space-30"></div>
                        <a href="#" class="bttn bttn-wh bttn-round">Discover</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="service-box" style="background-image: url('images/sr-2.jpg'); padding: 86px;">
                        <h3>MMA </h3>
                        <p>A full combat sports which uses both striking and grappling from other combat sports and martial arts. </p>
                        <div class="space-30"></div>
                        <a href="#" class="bttn bttn-wh bttn-round">Discover</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="service-box" style="background-image: url('images/sr-3.jpg');">
                        <h3>Olympic weightlifting</h3>
                        <p>A sport which  test athlete capabilities for performing in two movements which is Clean and Jerk and snatch. This sports is more than lifting heavy weights. It test full athletic capabilities of a sportsman …be it speed, strength and execution.</p>
                        <div class="space-30"></div>
                        <a href="#" class="bttn bttn-wh bttn-round">Discover</a>
                    </div>
                    <br/>
                </div>
                <br/>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="service-box" style="background-image: url('images/yoga.jpg');">
                        <h3>Yoga</h3>
                        <p>An ancient practice widely used for health and relaxation and which includes breath control, simple meditation and adoption of specific body posture</p>
                        <div class="space-30"></div>
                        <a href="#" class="bttn bttn-wh bttn-round">Discover</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="service-box" style="background-image: url('images/SM.jpg');">
                        <h3>Strong Man</h3>
                        <p>A sport of pure raw strength and stamina. Athlete usually have to move or pick any uneven shape object. Things can go really heavy in this sports.</p>
                        <div class="space-30"></div>
                        <a href="#" class="bttn bttn-wh bttn-round">Discover</a>
                    </div>
                </div>
			</div>
        </div>
    </section>
    <!--Service-Area-End-->
    <!-- Schedule-Area -->
    <section class="section-padding-top relative" id="schedule_page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title">
                        <h2 class="title">Gym <span class="pink">Schedule</span></h2>
                        <h3 class="sub-title">Time Table</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="shidiul-area">
                        <ul class="filter-menu">
                            <!-- <li class="active filter" onclick="showall()">All</li> -->
                            <li  onclick="showCrossfit()">CrossFit</li>
                            <li  onclick="showMma()">MMA</li>
                            <li  onclick="showStrongman()">Strongman</li>
                            <li  onclick="showOlympicweightlifting()">Olympic Weightlifting</li>
							<li  onclick="showCrossfitforbeginners()">Crossfit For Beginners</li>
							<!--li  onclick="showmma()">CrossFit For Bignners</li> -->
                        </ul>
                        <div class="shidiul-content">
                            <table id='table-crossfit'>
                                <thead>
                                    <tr>
                                        <th>Monday</th>     
                                        <th>Tuesday</th>
                                        <th>Wednesday</th>
                                        <th>Thursday</th>
                                        <th>Friday</th>
                                        <th>Saturday</th>
                                        <th>Sunday</th>
                                    </tr>
                                </thead>
                                <tbody >
                                    <tr>
                                        <td>
                                            <div class="mix yoga" data-bound style="display: inline-block;">
                                                <h3 class="title">Holiday</h3>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">CrossFit</h3>
                                                <span class="time">6:00 - 7:00 AM</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">CrossFit</h3>
                                                <span class="time">6:00 - 7:00 AM</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">CrossFit</h3>
                                                <span class="time">6:00 - 7:00 AM</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">CrossFit</h3>
                                                <span class="time">6:00 - 7:00 AM</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">Box Closed</h3>
                                                <span class="time">6:00 - 7:00 AM</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">Box Closed</h3>
                                                <span class="time">6:00 - 7:00 AM</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="mix yoga" data-bound style="display: inline-block;">
                                                <h3 class="title">Holiday</h3>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">CrossFit</h3>
                                                <span class="time">7:00 - 8:00 AM</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">CrossFit</h3>
                                                <span class="time">7:00 - 8:00 AM</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">CrossFit</h3>
                                                <span class="time">7:00 - 8:00 AM</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">CrossFit</h3>
                                                <span class="time">7:00 - 8:00 AM</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">CrossFit</h3>
                                                <span class="time">7:00 - 8:00 AM</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">CrossFit</h3>
                                                <span class="time">7:00 - 8:00 AM</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="mix yoga" data-bound style="display: inline-block;">
                                                <h3 class="title">Holiday</h3>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">CrossFit</h3>
                                                <span class="time">8:00 - 9:00 AM</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">CrossFit</h3>
                                                <span class="time">8:00 - 9:00 AM</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">CrossFit</h3>
                                                <span class="time">8:00 - 9:00 AM</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">CrossFit</h3>
                                                <span class="time">8:00 - 9:00 AM</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">CrossFit</h3>
                                                <span class="time">8:00 - 9:00 AM</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">CrossFit</h3>
                                                <span class="time">8:00 - 9:00 AM</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="mix yoga" data-bound style="display: inline-block;">
                                                <h3 class="title">Holiday</h3>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">CrossFit</h3>
                                                <span class="time">9:00 - 10:00 AM</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">CrossFit</h3>
                                                <span class="time">9:00 - 10:00 AM</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">CrossFit</h3>
                                                <span class="time">9:00 - 10:00 AM</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">CrossFit</h3>
                                                <span class="time">9:00 - 10:00 AM</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">Open Session</h3>
                                                <span class="time">9:00 - 10:00 AM</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">Open Session</h3>
                                                <span class="time">9:00 - 10:00 AM</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="mix yoga" data-bound style="display: inline-block;">
                                                <h3 class="title">Holiday</h3>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">CrossFit</h3>
                                                <span class="time">10:00 - 11:00 AM</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">CrossFit</h3>
                                                <span class="time">10:00 - 11:00 AM</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">CrossFit</h3>
                                                <span class="time">10:00 - 11:00 AM</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">CrossFit</h3>
                                                <span class="time">10:00 - 11:00 AM</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">Open Session</h3>
                                                <span class="time">10:00 - 11:00 AM</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">Open Session</h3>
                                                <span class="time">10:00 - 11:00 AM</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="mix yoga" data-bound style="display: inline-block;">
                                                <h3 class="title">Holiday</h3>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">Box Closed</h3>
                                                <span class="time">12:00 - 5:00 PM</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">Box Closed</h3>
                                                <span class="time">12:00 - 5:00 PM</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">Box Closed</h3>
                                                <span class="time">12:00 - 5:00 PM</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">Box Closed</h3>
                                                <span class="time">12:00 - 5:00 PM</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">Box Closed</h3>
                                                <span class="time">12:00 - 5:00 PM</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">Box Closed</h3>
                                                <span class="time">12:00 - 5:00 PM</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="mix yoga" data-bound style="display: inline-block;">
                                                <h3 class="title">Holiday</h3>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">CrossFit</h3>
                                                <span class="time">5:00 - 6:00 PM</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">CrossFit</h3>
                                                <span class="time">5:00 - 6:00 PM</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">CrossFit</h3>
                                                <span class="time">5:00 - 6:00 PM</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">CrossFit</h3>
                                                <span class="time">5:00 - 6:00 PM</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">Open Session</h3>
                                                <span class="time">5:00 - 6:00 PM</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">Open Session</h3>
                                                <span class="time">5:00 - 6:00 PM</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="mix yoga" data-bound style="display: inline-block;">
                                                <h3 class="title">Holiday</h3>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">CrossFit</h3>
                                                <span class="time">6:00 - 7:00 PM</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">CrossFit</h3>
                                                <span class="time">6:00 - 7:00 PM</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">CrossFit</h3>
                                                <span class="time">6:00 - 7:00 PM</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">CrossFit</h3>
                                                <span class="time">6:00 - 7:00 PM</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">Open Session</h3>
                                                <span class="time">6:00 - 7:00 PM</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">Open Session</h3>
                                                <span class="time">6:00 - 7:00 PM</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="mix yoga" data-bound style="display: inline-block;">
                                                <h3 class="title">Holiday</h3>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">CrossFit</h3>
                                                <span class="time">7:00 - 8:00 PM</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">CrossFit</h3>
                                                <span class="time">7:00 - 8:00 PM</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">CrossFit</h3>
                                                <span class="time">7:00 - 8:00 PM</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">CrossFit</h3>
                                                <span class="time">7:00 - 8:00 PM</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">CrossFit</h3>
                                                <span class="time">7:00 - 8:00 PM</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">CrossFit</h3>
                                                <span class="time">7:00 - 8:00 PM</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="mix yoga" data-bound style="display: inline-block;">
                                                <h3 class="title">Holiday</h3>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">CrossFit</h3>
                                                <span class="time">8:00 - 9:00 PM</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">CrossFit</h3>
                                                <span class="time">8:00 - 9:00 PM</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">CrossFit</h3>
                                                <span class="time">8:00 - 9:00 PM</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">CrossFit</h3>
                                                <span class="time">8:00 - 9:00 PM</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">CrossFit</h3>
                                                <span class="time">8:00 - 9:00 PM</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">CrossFit</h3>
                                                <span class="time">8:00 - 9:00 PM</span>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table id='table-mma'>
                                <thead>
                                    <tr>
                                    <!--<th>Monday</th>   -->
                                        <th>Tuesday</th>
                                        <th>Wednesday</th>
                                        <th>Thursday</th>
                                        <th>Friday</th>
                                        <th>Saturday</th>
                                    <!--<th>Sunday</th>  --> 
                                    </tr>
                                </thead>
                                <tbody >
                                    <tr>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">MMA</h3>
                                                <span class="time">7:30 - 9:00 AM</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">Kickboxing</h3>
                                                <span class="time">7:30 - 9:00 AM</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">MMA</h3>
                                                <span class="time">7:30 - 9:00 AM</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">Kickboxing</h3>
                                                <span class="time">7:30 - 9:00 AM</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">MMA</h3>
                                                <span class="time">7:30 - 9:00 AM</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">MMA</h3>
                                                <span class="time">7:00 - 8:30 PM</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">Box Closed</h3>
                                                <span class="time">7:00 - 8:30 PM</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">MMA</h3>
                                                <span class="time">7:00 - 8:30 PM</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">Box Closed</h3>
                                                <span class="time">7:00 - 8:30 PM</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">MMA</h3>
                                                <span class="time">7:00 - 8:30 PM</span>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table id='table-strongman'>
                                <thead>
                                    <tr>
                                    <!--<th>Monday</th>   -->
                                        <th>Tuesday</th>
                                    <!--<th>Wednesday</th> -->
                                        <th>Thursday</th>
                                    <!--<th>Friday</th> -->
                                    <!--<th>Saturday</th> -->
                                    <!--<th>Sunday</th>  --> 
                                    </tr>
                                </thead>
                                <tbody >
                                    <tr>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">Strongman</h3>
                                                <span class="time">7:30 - 9:00 AM</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">Strongman</h3>
                                                <span class="time">7:30 - 9:00 AM</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">Strongman</h3>
                                                <span class="time">7:00 - 8:30 PM</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">Strongman</h3>
                                                <span class="time">7:00 - 8:30 PM</span>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table id='table-olympicweightlifting'>
                                <thead>
                                    <tr>
                                    <!--<th>Monday</th>   -->
                                    <!--    <th>Tuesday</th> -->
                                        <th>Wednesday</th>
                                    <!--    <th>Thursday</th> -->
                                        <th>Friday</th>
                                    <!--<th>Saturday</th> -->
                                    <!--<th>Sunday</th>  --> 
                                    </tr>
                                </thead>
                                <tbody >
                                    <tr>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">Weightlifting</h3>
                                                <span class="time">7:30 - 9:00 AM</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">Weightlifting</h3>
                                                <span class="time">7:30 - 9:00 AM</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">Weightlifting</h3>
                                                <span class="time">7:00 - 8:30 PM</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">Weightlifting</h3>
                                                <span class="time">7:00 - 8:30 PM</span>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table id='table-crossfitforbeginners'>
                                <thead>
                                    <tr>
                                    <!--<th>Monday</th>   -->
                                    <!--    <th>Tuesday</th> -->
                                    <!--    <th>Wednesday</th> -->
                                    <!--    <th>Thursday</th> -->
                                    <!--    <th>Friday</th> -->
                                            <th>Saturday</th>
                                            <th>Sunday</th> 
                                    </tr>
                                </thead>
                                <tbody >
                                    <tr>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">Technique</h3>
                                                <span class="time">9:00 - 9:45 AM</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">Technique</h3>
                                                <span class="time">9:00 - 9:45 AM</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">Technique</h3>
                                                <span class="time">6:00 - 6:45 PM</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mix karate" data-bound style="display: inline-block;">
                                                <h3 class="title">Technique</h3>
                                                <span class="time">6:00 - 6:45 PM</span>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <ul class="parallax">
            <li data-parallax='{"x": 400, "y": -400 }'><span></span></li>
            <li data-parallax='{"x": 200, "y": -200 }'><span></span></li>
            <li data-parallax='{"x": 400, "y": -400 }'><span></span></li>
            <li data-parallax='{"x": 400, "y": -400 }'><span></span></li>
            <li data-parallax='{"x": 200, "y": -200 }'><span></span></li>
            <li data-parallax='{"x": 300, "y": -300 }'><span></span></li>
            <li data-parallax='{"x": 200, "y": -200 }'><span></span></li>
        </ul>
    </section>
    <!-- Schedule-Area-End -->
    <!-- Gallery-Area -->
    <section id="gallery_page" class="gallery_page section-padding-top">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title">
                        <h2 class="title">Gym <span class="pink">Gallery</span></h2>
                        <h3 class="sub-title">Photos From Gym</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid gallery-content">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="single-work">
                        <figure class="work-photo">
                            <img src="images/gl-1.jpg" alt="">
                        </figure>
                        <!--<div class="work-details">
                            <div class="table-cell">
                                <h4>Body Shaping</h4>
                                <h5>Photos From Gym</h5>
                                <p>I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus.</p>
                            </div>
                            <a href="#" class="link"><i class="icofont icofont-long-arrow-right"></i></a>
                        </div>-->
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="single-work">
                        <figure class="work-photo">
                            <img src="images/gl-2.jpg" alt="">
                        </figure>
                        <!--<div class="work-details">
                            <div class="table-cell">
                                <h4>Body Shaping</h4>
                                <h5>Photos From Gym</h5>
                                <p>I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus.</p>
                            </div>
                            <a href="#" class="link"><i class="icofont icofont-long-arrow-right"></i></a>
                        </div>-->
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="single-work">
                        <figure class="work-photo">
                            <img src="images/gl-3.jpg" alt="">
                        </figure>
                        <!--<div class="work-details">
                            <div class="table-cell">
                                <h4>Body Shaping</h4>
                                <h5>Photos From Gym</h5>
                                <p>I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus.</p>
                            </div>
                            <a href="#" class="link"><i class="icofont icofont-long-arrow-right"></i></a>
                        </div>-->
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="single-work">
                        <figure class="work-photo">
                            <img src="images/gl-4.jpg" alt="">
                        </figure>
                        <!--<div class="work-details">
                            <div class="table-cell">
                                <h4>Body Shaping</h4>
                                <h5>Photos From Gym</h5>
                                <p>I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus.</p>
                            </div>
                            <a href="#" class="link"><i class="icofont icofont-long-arrow-right"></i></a>
                        </div>-->
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="single-work">
                        <figure class="work-photo">
                            <img src="images/gl-5.jpg" alt="">
                        </figure>
                        <!--<div class="work-details">
                            <div class="table-cell">
                                <h4>Body Shaping</h4>
                                <h5>Photos From Gym</h5>
                                <p>I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus.</p>
                            </div>
                            <a href="#" class="link"><i class="icofont icofont-long-arrow-right"></i></a>
                        </div>-->
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="single-work">
                        <figure class="work-photo">
                            <img src="images/gl-6.jpg" alt="">
                        </figure>
                        <!--<div class="work-details">
                            <div class="table-cell">
                                <h4>Body Shaping</h4>
                                <h5>Photos From Gym</h5>
                                <p>I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus.</p>
                            </div>
                            <a href="#" class="link"><i class="icofont icofont-long-arrow-right"></i></a>
                        </div>-->
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="single-work">
                        <figure class="work-photo">
                            <img src="images/gl-7.jpg" alt="">
                        </figure>
                        <!--<div class="work-details">
                            <div class="table-cell">
                                <h4>Body Shaping</h4>
                                <h5>Photos From Gym</h5>
                                <p>I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus.</p>
                            </div>
                            <a href="#" class="link"><i class="icofont icofont-long-arrow-right"></i></a>
                        </div>-->
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="single-work">
                        <figure class="work-photo">
                            <img src="images/gl-8.jpg" alt="">
                        </figure>
                        <!--<div class="work-details">
                            <div class="table-cell">
                                <h4>Body Shaping</h4>
                                <h5>Photos From Gym</h5>
                                <p>I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus.</p>
                            </div>
                            <a href="#" class="link"><i class="icofont icofont-long-arrow-right"></i></a>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Gallery-Area-End -->
    <!-- Prcie-Area -->
    <section class="section-padding relative" id="price_page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title">
                        <h2 class="title">Regular membership plan <span class="pink">(Crossfit Only)</span></h2>
                        <h3 class="sub-title">Choos Your Plan</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-3">
                    <div class="single-price">
                        <div class="price-icon">
                            <i class="icofont icofont-light-bulb"></i>
                        </div>
                        <h3>Basic</h3>
                        <h4>4500 <small>/ Monthly</small></h4>
                        <!--<ul>
                            <li>Stunning design</li>
                            <li>Drag and drop page builder</li>
                            <li>+10 Unique section elements</li>
                            <li>No code knowledge required</li>
                            <li>Only in 5000</li>
                        </ul>--><br />
                        <a href="#" class="bttn bttn-round">Purchase</a>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3">
                        <div class="single-price">
                            <div class="price-icon">
                                <i class="icofont icofont-light-bulb"></i>
                            </div>
                            <h3>Silver</h3>
                            <h4>9000<small>/ Quaterly</small></h4>
                            <!--<ul>
                                <li>Stunning design</li>
                                <li>Drag and drop page builder</li>
                                <li>+10 Unique section elements</li>
                                <li>No code knowledge required</li>
                                <li>Only in 5000</li>
                            </ul>--><br />
                            <a href="#" class="bttn bttn-round">Purchase</a>
                        </div>
                    </div>
                <div class="col-xs-12 col-md-3">
                    <div class="single-price popular">
                        <div class="price-icon">
                            <i class="icofont icofont-heart-beat-alt"></i>
                        </div>
                        <h3>Gold</h3>
                        <h4>14000 <small>/ Half yearly</small></h4>
                        <!--<ul>
                            <li>Stunning design</li>
                            <li>Drag and drop page builder</li>
                            <li>+30 Unique section elements</li>
                            <li>No code knowledge required</li>
                            <li>Only in 10000</li>
                        </ul>--><br />
                        <a href="#" class="bttn bttn-round">Purchase</a>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3">
                    <div class="single-price">
                        <div class="price-icon">
                            <i class="icofont icofont-hat-alt"></i>
                        </div>
                        <h3>Platinum</h3>
                        <h4>20000 <small>/ Yearly</small></h4>
                       <!-- <ul>
                            <li>Stunning design</li>
                            <li>Drag and drop page builder</li>
                            <li>+80 Unique section elements</li>
                            <li>No code knowledge required</li>
                            <li>Only in 15000</li>
                        </ul>--><br />
                        <a href="#" class="bttn bttn-round">Purchase</a>
                    </div>
                </div>
            </div>
        </div>
        <ul class="parallax">
            <li data-parallax='{"x": 400, "y": -400 }'><span></span></li>
            <li data-parallax='{"x": 200, "y": -200 }'><span></span></li>
            <li data-parallax='{"x": 400, "y": -400 }'><span></span></li>
            <li data-parallax='{"x": 400, "y": -400 }'><span></span></li>
            <li data-parallax='{"x": 200, "y": -200 }'><span></span></li>
            <li data-parallax='{"x": 300, "y": -300 }'><span></span></li>
            <li data-parallax='{"x": 100, "y": -100 }'><span></span></li>
        </ul>
    </section>
    <!-- Prcie-Area-End -->
    <!-- Video-Area -->
    <!--
    <div class="video-section">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <a href="https://www.youtube.com/watch?v=p4yU1LSxPiY" class="v-bttn video-popup"><i class="icofont icofont-ui-play"></i></a>
                    <div class="space-30"></div>
                    <h2>Demo Video</h2>
                </div>
            </div>
        </div>
    </div>
-->
    <!-- Video-Area-End -->
    <!-- Trainer-Area -->
    <section class="section-padding" id="trainer_page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title">
                        <h2 class="title">Our <span class="pink">Trainers</span></h2>
                        <h3 class="sub-title">Master of King</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="single-team">
                        <figure class="team-photo">
                            <img src="images/team-3.jpg" alt="">
                        </figure>
                        <h3 class="name">Preeti</h3>
                        <h5 class="position">Certificate in Yoga</h5>
                        <div class="social-menu">
                            <a href="#"><i class="icofont icofont-social-facebook"></i></a>
                            <a href="#"><i class="icofont icofont-social-twitter"></i></a>
                            <a href="#"><i class="icofont icofont-brand-linkedin"></i></a>
                            <a href="#"><i class="icofont icofont-social-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="single-team">
                        <figure class="team-photo">
                            <img src="images/team-2.jpg" alt="">
                        </figure>
                        <h3 class="name">Ismaiel</h3>
                        <h5 class="position">Coach at GrayBar</h5>
                        <div class="social-menu">
                            <a href="#"><i class="icofont icofont-social-facebook"></i></a>
                            <a href="#"><i class="icofont icofont-social-twitter"></i></a>
                            <a href="#"><i class="icofont icofont-brand-linkedin"></i></a>
                            <a href="#"><i class="icofont icofont-social-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="single-team">
                        <figure class="team-photo">
                            <img src="images/team-1.jpg" alt="">
                        </figure>
                        <h3 class="name">Yogesh</h3>
                        <h5 class="position">A supporting coach</h5>
                        <div class="social-menu">
                            <a href="#"><i class="icofont icofont-social-facebook"></i></a>
                            <a href="#"><i class="icofont icofont-social-twitter"></i></a>
                            <a href="#"><i class="icofont icofont-brand-linkedin"></i></a>
                            <a href="#"><i class="icofont icofont-social-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="single-team">
                        <figure class="team-photo">
                            <img src="images/team-4.jpg" alt="">
                        </figure>
                        <h3 class="name">Sheshkantdwiedi</h3>
                        <h5 class="position">ACrossfit level 1 trainer</h5>
                        <div class="social-menu">
                            <a href="#"><i class="icofont icofont-social-facebook"></i></a>
                            <a href="#"><i class="icofont icofont-social-twitter"></i></a>
                            <a href="#"><i class="icofont icofont-brand-linkedin"></i></a>
                            <a href="#"><i class="icofont icofont-social-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Trainer-Area-Area -->
    <!-- Testimonial-Area -->
    <section class="section-padding bg-black" id="testimonial_page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title">
                        <h2 class="title">Trainers <span class="pink">Profile</span></h2>
                        <h3 class="sub-title">About Trainers </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="testimonials">
                        <div class="signle-testimonial">
                            <div class="testimonial-photo">
                                <img src="images/team-1.jpg" alt="">
                            </div>
                            <div class="contant">
                                <h3>Yogesh</h3>
                                <p>A supporting coach at graybar, MMA fighter by profession and an avidcrossfitter. He is the one to introduce elements of MMA conditioning in Crossfit classes. With good amateur record and constant hunger to learn ….he has surely found his way to win.</p>
                            </div>
                        </div>
                        <div class="signle-testimonial">
                            <div class="testimonial-photo">
                                <img src="images/team-2.jpg" alt="">
                            </div>
                            <div class="content">
                                <h3>Ismaiel</h3>
                                <p>Our MMA trainer and  senior most and experienced coach at GrayBar. He believes fitness is more than only physical changes in your body….it also lead to happiness and success in all aspect of life. The energy with which heconducts the class can actually inspire the laziest person in the world. With over 16 years of experience in MMA, the energy with which he throws his punch and kick…inspires the people around him to work lot more harder.</p>
                            </div>
                        </div>
                        <div class="signle-testimonial">
                            <div class="testimonial-photo">
                                <img src="images/team-3.jpg" alt="">
                            </div>
                            <div class="content">
                                <h3>Preeti</h3>
                                <p>Business in her genes and fitness as a passion, she makes sure GrayBar and team can focus on their job whilst she takes care of all the business needs.An economics graduate with a TTC certificate in Yoga, she takes care of Mental and Spiritual side of HOLISTIC FITNESS of an individual.</p>
                            </div>
                        </div>
                        <div class="signle-testimonial">
                            <div class="testimonial-photo">
                                <img src="images/team-4.jpg" alt="">
                            </div>
                            <div class="content">
                                <h3>Sheshkantdwiedi (SK)</h3>
                                <p>ACrossfit level 1 trainer and a media sales professional. He firmly believes in inclusive and community driven fitness and that’s the reason he is fascinated by Crossfit. He believes crossfit is an open community that encourages each other and picks up each other when they are down. You sweat together, you cry together and you become better …TOGETHER.</p>
                            </div>
                        </div>
						 <div class="signle-testimonial">
                            <div class="testimonial-photo">
                                <img src="images/team-5.jpg" alt="">
                            </div>
                            <div class="content">
                                <h3>Ravikant</h3>
                                <p>CrossFit level 1 Trainer and Head coach of Graybar fitness. His programming technique and attentionto detail is reflected in his coaching style at GrayBar. He just loves coaching.An engineer by education, his only motto at GrayBar is to see members progressing towards their required goal, not only in fitness but life too.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial-Area -->
    <!-- Blog-Area -->
   <!-- <section class="relative section-padding" id="blog_page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title">
                        <h2 class="title">Latest <span class="pink">News</span></h2>
                        <h3 class="sub-title">Recent Blog Post</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-4">
                    <article class="single-blog">
                        <figure class="blog-image">
                            <img src="images/blog-1.jpg" alt="">
                        </figure>
                        <div class="post-tags"><a href="#">health</a> <a href="#">Training</a></div>
                        <div class="content">
                            <h3 class="title"><a href="#">Meet Albert, Our Octbar Gym Hero</a></h3>
                            <ul class="post-meta">
                                <li><i class="icofont icofont-clock-time"></i> <a href="#">10/05/2017</a></li>
                                <li><i class="icofont icofont-user-alt-3"></i> <a href="#">Luci Wang</a></li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem quia, earum quasi tenetur quaerat quod illo doloremque ex provident ullam.</p>
                            <a href="#" class="bttn bttn-xs bttn-round">Read More</a>
                        </div>
                    </article>
                </div>
                <div class="col-xs-12 col-md-4">
                    <article class="single-blog">
                        <figure class="blog-image">
                            <img src="images/blog-2.jpg" alt="">
                        </figure>
                        <div class="post-tags"><a href="#">health</a> <a href="#">Training</a></div>
                        <div class="content">
                            <h3 class="title"><a href="#">The quick brown fox jumps</a></h3>
                            <ul class="post-meta">
                                <li><i class="icofont icofont-clock-time"></i> <a href="#">10/05/2017</a></li>
                                <li><i class="icofont icofont-user-alt-3"></i> <a href="#">Luci Wang</a></li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem quia, earum quasi tenetur quaerat quod illo doloremque ex provident ullam.</p>
                            <a href="#" class="bttn bttn-xs bttn-round">Read More</a>
                        </div>
                    </article>
                </div>
                <div class="col-xs-12 col-md-4">
                    <article class="single-blog">
                        <figure class="blog-image">
                            <img src="images/blog-3.jpg" alt="">
                        </figure>
                        <div class="post-tags"><a href="#">health</a> <a href="#">Training</a></div>
                        <div class="content">
                            <h3 class="title"><a href="#">Extreme Fittness, Gym tools</a></h3>
                            <ul class="post-meta">
                                <li><i class="icofont icofont-clock-time"></i> <a href="#">10/05/2017</a></li>
                                <li><i class="icofont icofont-user-alt-3"></i> <a href="#">Luci Wang</a></li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem quia, earum quasi tenetur quaerat quod illo doloremque ex provident ullam.</p>
                            <a href="#" class="bttn bttn-xs bttn-round">Read More</a>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>-->
    <!-- Testimonial-Area-End -->
    <!-- Maps-ID -->
    <!--<div id="map"></div>-->
    <!-- Footer-Area -->
    <footer class="footer-area" id="contact_page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title">
                        <h2 class="title">Contact <span class="pink">Information</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <h4 class="sub-title">Open Hours</h4>
                    <p>Our support Hotline is available 24 Hours a day:  (+91) 7219218704<br /> Morning: 6am to 11am<br /> Evening: 5pm to 9pm<br /> Monday: <a href="#">Closed</a></p>
                    <div class="space-30"></div>
                    <h4 class="sub-title">Building Address</h4>
                    <p>Graybar Fitness, Survey No. 34/7, Above shree gym, off Pune Nagar Road, Viman Nagar, opp.Phoneix marketcity, Pune, Maharashtra - 411014</p>
                    <div class="space-30"></div>
                    <h4 class="sub-title">Email Address</h4>
                    <p>crossfitgraybar@gmail.com</p>
                    <div class="space-30"></div>
                    <h4 class="sub-title">Phone Number</h4>
                    <p>+91 7219218704</p>
                </div>
                <div class="col-xs-12 col-md-6">
                   <div class="xs-space-30"></div>
                    <form action="" id="contact-form" method="post" class="contact-form">
                        <input type="text" id="form-name" name="form-name" class="form-control" placeholder="Name" required="required">
                        <input type="email" class="form-control" id="form-email" name="form-email" placeholder="Email" required="required">
                        <input type="text" class="form-control" id="form-subject" name="form-subject" placeholder="Subject">
                        <textarea class="form-control" id="form-message" name="form-message" rows="5" placeholder="Messages" required="required"></textarea>
                        <button class="bttn bttn-lg" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <p>© Copyright 2018 <a href="" target="_blank">GrayBar</a> All Rights Reserved. Design by <a href="http://digitalspace.co.in/" target="_blank">DigitalSpace</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="subscrie-form">
        <a href="#" class="subs-close">
           <i class="icofont icofont-close-line"></i>
       </a>
        <form id="mc-form">
           <h3>Subscribe form</h3>
            <label class="mt10" for="mc-email"></label>
            <input type="email" class="form-control" id="mc-email" placeholder="Your email address here...">
            <button type="submit" class="bttn">Subscribe</button>
        </form>
    </div>
    <!-- Footer-Area-End -->
    <!--Vendor-JS-->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <!--Plugin-JS-->
    <script src="js/owl.carousel.min.js"></script>
    <!--<script src="js/contact-form.js"></script>-->
    <script src="js/scrollUp.min.js"></script>
    <script src="js/magnific-popup.min.js"></script>
    <script src="js/jquery.mixitup.min.js"></script>
    <script src="js/ajaxchimp.js"></script>
    <!-- Parallax-scripts -->
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.parallax-scroll.js"></script>
    <!--Main-active-JS-->
    <script src="js/main.js"></script>
    <!-- Map-Scripts -->
    <!--<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDXZ3vJtdK6aKAEWBovZFe4YKj1SGo9V20&amp;callback=initMap"></script>
    <script src="js/maps.js"></script>-->
</body>


<!-- Mirrored from quomodosoft.com/html/perfect-gym/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 May 2018 12:36:18 GMT -->
</html>
