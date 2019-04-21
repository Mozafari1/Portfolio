<?php session_start();
ob_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Optional theme -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/superslides.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="apple-touch-icon" sizes="57x57" href="icon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="icon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="icon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="icon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="icon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="icon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="icon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="icon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="icon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="icon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="icon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="icon/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-138521276-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-138521276-1');
    </script>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rahmat Mozafari</title>
</head>

<body>
    <div class="loader">
        <div class="inner">

        </div>
    </div>
    <div id="slides">


        <div class="overlay"></div>
        <div class="slides-container">
            <img src="images/slide1.jpg" alt="">
            <img src="images/slide2.jpg" alt="">
            <img src="images/slide3.jpg" alt="">
        </div>
        <div class="title">
            <div class="heading">
                <p class="main">rahmat mozafari</p>
                <p class="sub typed"></p>
            </div>
        </div>
        <nav class="slides-navigation">
            <a href="#" class="forward"><i class="fas fa-chevron-left" style="font-size: 43px; color: white;"></i></a>
            <a href="#" class="back"><i class="fas fa-chevron-right" style="font-size: 43px; color: white;"></i></a>
        </nav>
    </div>

    <nav id="navigation" class="navbar navbar-expand-lg navbar-flat">
        <a class="navbar-brand" href="#">Rahmat Mozafari</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fas fa-ellipsis-v"></i></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav" id="navbarUl">
                <li class="nav-item">
                    <a class="nav-link" href="#about">About <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#skills">Skills</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#stats">Stats</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#experience">Experience</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#portfolio">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
            </ul>
        </div>

    </nav>
    <!-- Start Progess -->

    <!-- End progress -->
    <div id="about" class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <img class="im" src="image/r.jpg" alt="">
                </div>
                <div class="col-md-7">
                    <h3 class="spa">About</h3>
                    <hr>
                    <p class="aboutText">Hi, there! I'm Rahmat Mozafari from Oslo, Norway. I currently studying computer Engineering at University of South-Eastern Norway (USN). I have some experience creating software, mobile apps, and websites for both myself and for clients. I have experience prgramming in many different languages such as C++, C, Java, Kotlin, PHP, Python, SQL and Objective-C, however some of my favourite projects involve working in Swift for iOS.</p>
                    <p class="aboutText">Graduating in 2020 from Uinversity of South-Eastern Norway in Computer Science. </p>
                    <div>
        <?php
           include "include/req.php";
            global $ConnectingDB;
            $sql= "SELECT * FROM posts";
            $stmt = mysqli_query($ConnectingDB,$sql);
            while($DataRows = mysqli_fetch_assoc($stmt)){
              $Id =  mysqli_real_escape_string($ConnectingDB,$DataRows["id"]);
              $name =  mysqli_real_escape_string($ConnectingDB,$DataRows["title"]);

    
        ?>    
       
           
            <a class="btdown" href="download.php?id=<?php echo htmlentities( $Id); ?>"> 
           <i class="fas fa-file-download"></i> DOWNLOAD RESUME
           <br>
           <small class="name"><?php echo htmlentities( $name); ?></small>

        </a>
           
          

            <?php } ?>
                    </div>
                </div>
               
            </div>
        </div>
    </div>

    <div id="skills" class="skillSec section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="spe">TECHNIAL SKILLS</h2>
                    <p class="spee">A representation of my proficiency in each skill</p>
                    <br>
                    <hr>
                </div>

                <div class="owl-carousel owl-theme">
                    <div class="skill">
                        <span class="chart" data-percent="67">
                            <span class="percent">67</span>
                            <canvas height="152" width="152"></canvas>

                        </span>
                        <h4>PHP</h4>
                        <p>Used in most of my web based projects</p>
                    </div>
                    <div class="skill">
                        <span class="chart" data-percent="45">
                            <span class="percent">45</span>
                            <canvas height="152" width="152"></canvas>
                        </span>
                        <h4>Java</h4>
                        <p>I use this sometimes</p>
                    </div>
                    <div class="skill">
                        <span class="chart" data-percent="71">
                            <span class="percent">71</span>
                            <canvas height="152" width="152"></canvas>
                        </span>
                        <h4>C</h4>
                        <p>Used in most of my microcontroller based projects</p>
                    </div>
                    <div class="skill">
                        <span class="chart" data-percent="73">
                            <span class="percent">73</span>
                            <canvas height="152" width="152"></canvas>
                        </span>
                        <h4>C++</h4>
                        <p>Used in most of my application based projects</p>
                    </div>
                    <div class="skill">
                        <span class="chart" data-percent="65">
                            <span class="percent">65</span>
                            <canvas height="152" width="152"></canvas>
                        </span>
                        <h4>Kotlin</h4>
                        <p>Used in all of my Android apps</p>
                    </div>
                    <div class="skill">
                        <span class="chart" data-percent="75">
                            <span class="percent">71</span>
                            <canvas height="152" width="152"></canvas>
                        </span>
                        <h4>MySQLi/PDO</h4>
                        <p>Used with PHP project </p>
                    </div>
                    <div class="skill">
                        <span class="chart" data-percent="78">
                            <span class="percent">71</span>
                            <canvas height="152" width="152"></canvas>
                        </span>
                        <h4>Python</h4>
                        <p>The first programming language I was introduced to</p>
                    </div>
                    <div class="skill">
                        <span class="chart" data-percent="64">
                            <span class="percent">64</span>
                            <canvas height="152" width="152"></canvas>
                        </span>
                        <h4>JS</h4>
                        <p>Took an online course on this</p>
                    </div>
                    <div class="skill">
                        <span class="chart" data-percent="40">
                            <span class="percent">40</span>
                            <canvas height="152" width="152"></canvas>
                        </span>
                        <h4>Swift</h4>
                        <p>Took an online course on this</p>
                    </div>
                    <div class="skill">
                        <span class="chart" data-percent="70">
                            <span class="percent">70</span>
                            <canvas height="152" width="152"></canvas>
                        </span>
                        <h4>HTML5</h4>
                        <p>I started creating websites in University and have been ever since </p>
                    </div>
                    <div class="skill">
                        <span class="chart" data-percent="70">
                            <span class="percent">70</span>
                            <canvas height="152" width="152"></canvas>
                        </span>
                        <h4>CSS</h4>
                        <p>I have been using this since I started making websites</p>
                    </div>
                </div>
        
            </div>
            <hr>
        </div>
    </div>
    <div id="Prog" class="prog section">
        <div class="container">
            <div class="innerprog">
            <h2 class="spe">LANGUAGES</h2>
            <div class="row">

                <div class="">
                  
                    <h3 class="NO">NORWEGIAN</h3><span class="bar"><span class="norsk"></span><p>80%</p></span>
                </div>
            </div>
            <div class="row">

                <div class="">
                    <h3 class="EN">ENGLISH</h3><span class="bar"><span class="english"></span><p>70%</p></span>
                </div>
            </div>

            <div class="row">

                <div class="">
                    <h3 class="FA">PERSIAN</h3><span class="bar"><span class="farsi"></span><p>90%</p></span>
                </div>
                </div>
            </div>
        </div>
    </div>


    <div id="stats" class="statsSec section">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="squareItem">
                        <div class="squareInnerContainer">
                            <div class="squareIcon">
                                <i class="far fa-clock"></i>

                            </div>
                            <div class="squareContent">
                                <h2 class="counter">2</h2>
                                <h3>Years experience</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="squareItem">
                        <div class="squareInnerContainer">
                            <div class="squareIcon">
                                <i class="fas fa-calendar-check"></i>
                            </div>
                            <div class="squareContent">
                                <h2 class="counter">23</h2>
                                <h3>Clients</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="squareItem">
                        <div class="squareInnerContainer">
                            <div class="squareIcon">
                                <i class="fab fa-android"></i>
                            </div>
                            <div class="squareContent">
                                <h2 class="counter">4</h2>
                                <h3>Andriod apps</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="squareItem">
                        <div class="squareInnerContainer">
                            <div class="squareIcon">
                                <i class="fas fa-cloud"></i>
                            </div>
                            <div class="squareContent">
                                <h2 class="counter">5</h2>
                                <h3>Websites Made</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- TimeLine-->
    <section class="experience section" id="experience">
        <div class="container">
            <div class="divider"></div>
            <div class="heading">
                <h2>TIMELINE</h2>
            </div>
            <div class="row">

                <div class="timeline">

                    <div class="left" id="cont">
                        <div class="content">
                            <div class="innercontent">
                                <h2 class="h2ps">August 2013 - June 2016</h2>
                                <h2 class="h2p">Dønski Videregående Skole</h2>
                                <p>High School</p>
                                <h3>Studied pecialization in General Studies</h3>
                            </div>
                        </div>
                    </div>
                    <div class="right" id="cont">
                        <div class="content">
                            <div class="innercontent">
                                <h2 class="h2ps">October 2013 </h2>
                                <h2 class="h2p"> KIWI</h2>
                                <h3>Sales Manager</h3>
                            </div>
                        </div>
                    </div>
                    <div class="left" id="cont">
                        <div class="content">
                            <div class="innercontent">
                                <h2 class="h2ps">August 2017</h2>
                                <h2 class="h2p"> University of South-Eastern Norway (USN)</h2>
                                <h3>Studying Computer Engineering</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="portfolio" class="section">

        <div class="container">

            <div class="row">

                <div class="heading">
                    <h2>PORTFOLIO</h2>
                </div>

                <div class="filter">

                    <ul id="filters">

                        <li><a href="#" data-filter="*" class="current">All</a></li>
                        <li><a href="#" data-filter=".apps">Apps</a></li>
                        <li><a href="#" data-filter=".me">Me</a></li>
                        <li><a href="#" data-filter=".websites">Websites</a></li>

                    </ul>

                </div>


                <div class="itemsContainer">

                    <ul class="items">

                        <li onclick="" class="apps col-xs-6 col-sm-4 col-md-3 col-lg-3">


                            <div class="item">

                                <img src="images/small/a1.jpg">


                                <div class="icons">
                                    <a href="images/a1.jpg" title="View image" class="openButton" data-fancybox data-caption="Add new admin">
                                        <i class="fa fa-search"></i>
                                    </a>

                                    <a href="" target="_blank" class="projectLink">
                                        <i class="fa fa-link"></i>
                                    </a>
                                </div>

                                <div class="imageOverlay"></div>

                            </div>


                        </li>

                        <li onclick="" class="websites col-xs-6 col-sm-4 col-md-3 col-lg-3">


                            <div class="item">

                                <img src="images/small/w1.jpg">


                                <div class="icons">
                                    <a href="images/w1.jpg" title="View image" class="openButton" data-fancybox data-caption="This is CSS file">
                                        <i class="fa fa-search"></i>
                                    </a>

                                    <a href="https://lwr.no/" target="_blank" class="projectLink">
                                        <i class="fa fa-link"></i>
                                    </a>
                                </div>

                                <div class="imageOverlay"></div>

                            </div>


                        </li>

                        <li onclick="" class="me col-xs-6 col-sm-4 col-md-3 col-lg-3">


                            <div class="item">

                                <img src="images/small/r1.jpg">


                                <div class="icons">
                                    <a href="images/r1.jpg" title="View image" class="openButton" data-fancybox data-caption="This is me">
                                        <i class="fa fa-search"></i>
                                    </a>

                                    <a href="https://mozafari.no/" target="_blank" class="projectLink">
                                        <i class="fa fa-link"></i>
                                    </a>
                                </div>

                                <div class="imageOverlay"></div>

                            </div>


                        </li>

                        <li onclick="" class="websites col-xs-6 col-sm-4 col-md-3 col-lg-3">


                            <div class="item">

                                <img src="images/small/w2.jpg">


                                <div class="icons">
                                    <a href="images/w2.jpg" title="View image" class="openButton" data-fancybox data-caption="This is contact file">
                                        <i class="fa fa-search"></i>
                                    </a>

                                    <a href="https://github.com/Mozafari1" target="_blank" class="projectLink">
                                        <i class="fa fa-link"></i>
                                    </a>
                                </div>

                                <div class="imageOverlay"></div>

                            </div>


                        </li>

                        <li onclick="" class="websites col-xs-6 col-sm-4 col-md-3 col-lg-3">


                            <div class="item">

                                <img src="images/small/w3.jpg">


                                <div class="icons">
                                    <a href="images/w3.jpg" title="View image" class="openButton" data-fancybox data-caption="This is sub file">
                                        <i class="fa fa-search"></i>
                                    </a>

                                    <a href="" target="_blank" class="projectLink">
                                        <i class="fa fa-link"></i>
                                    </a>
                                </div>

                                <div class="imageOverlay"></div>

                            </div>


                        </li>


                        <li onclick="" class="apps col-xs-6 col-sm-4 col-md-3 col-lg-3">


                            <div class="item">

                                <img src="images/small/a2.jpg">


                                <div class="icons">
                                    <a href="images/a2.jpg" title="View image" class="openButton" data-fancybox data-caption="This is blog page">
                                        <i class="fa fa-search"></i>
                                    </a>

                                    <a href="" target="_blank" class="projectLink">
                                        <i class="fa fa-link"></i>
                                    </a>
                                </div>

                                <div class="imageOverlay"></div>

                            </div>


                        </li>
                        <li onclick="" class="apps col-xs-6 col-sm-4 col-md-3 col-lg-3">


                            <div class="item">

                                <img src="images/small/a3.jpg">


                                <div class="icons">
                                    <a href="images/a3.jpg" title="View image" class="openButton" data-fancybox data-caption="This is sign in page">
                                        <i class="fa fa-search"></i>
                                    </a>

                                    <a href="" target="_blank" class="projectLink">
                                        <i class="fa fa-link"></i>
                                    </a>
                                </div>

                                <div class="imageOverlay"></div>

                            </div>


                        </li>
                        <li onclick="" class="me col-xs-6 col-sm-4 col-md-3 col-lg-3">


                            <div class="item">

                                <img src="images/small/r2.jpg">


                                <div class="icons">
                                    <a href="images/r2.jpg" title="View image" class="openButton" data-fancybox data-caption="This is me">
                                        <i class="fa fa-search"></i>
                                    </a>

                                    <a href="" target="_blank" class="projectLink">
                                        <i class="fa fa-link"></i>
                                    </a>
                                </div>

                                <div class="imageOverlay"></div>

                            </div>


                        </li>
                        <li onclick="" class="apps col-xs-6 col-sm-4 col-md-3 col-lg-3">


                            <div class="item">

                                <img src="images/small/a4.jpg">


                                <div class="icons">
                                    <a href="images/a4.jpg" title="View image" class="openButton" data-fancybox data-caption="This is window panel">
                                        <i class="fa fa-search"></i>
                                    </a>

                                    <a href="" target="_blank" class="projectLink">
                                        <i class="fa fa-link"></i>
                                    </a>
                                </div>

                                <div class="imageOverlay"></div>

                            </div>


                        </li>
                        <li onclick="" class="websites col-xs-6 col-sm-4 col-md-3 col-lg-3">


                            <div class="item">

                                <img src="images/small/w4.jpg">


                                <div class="icons">
                                    <a href="images/w4.jpg" title="View image" class="openButton" data-fancybox data-caption="This is index page">
                                        <i class="fa fa-search"></i>
                                    </a>

                                    <a href="" target="_blank" class="projectLink">
                                        <i class="fa fa-link"></i>
                                    </a>
                                </div>

                                <div class="imageOverlay"></div>

                            </div>


                        </li>
                        <li onclick="" class="me col-xs-6 col-sm-4 col-md-3 col-lg-3">


                            <div class="item">

                                <img src="images/small/r3.jpg">


                                <div class="icons">
                                    <a href="images/r3.jpg" title="View image" class="openButton" data-fancybox data-caption="This is me">
                                        <i class="fa fa-search"></i>
                                    </a>

                                    <a href="" target="_blank" class="projectLink">
                                        <i class="fa fa-link"></i>
                                    </a>
                                </div>

                                <div class="imageOverlay"></div>

                            </div>


                        </li>
                        <li onclick="" class="me col-xs-6 col-sm-4 col-md-3 col-lg-3">


                            <div class="item">

                                <img src="images/small/r4.jpg">


                                <div class="icons">
                                    <a href="images/r4.jpg" title="View image" class="openButton" data-fancybox data-caption="This is me">
                                        <i class="fa fa-search"></i>
                                    </a>

                                    <a href="" target="_blank" class="projectLink">
                                        <i class="fa fa-link"></i>
                                    </a>
                                </div>

                                <div class="imageOverlay"></div>

                            </div>


                        </li>

                    </ul>

                </div>


            </div>

        </div>


    </div>


    <div id="contact" class="contactSection section">
        <div class="col-md-12 text-center">
            <p class="subhaed">Like what you see?</p>
            <h2>I'd love to hear from you!</h2>
            <a href="mailTo:rahmat@mozafari.no" class="contactB">GET IN TOUCH!</a>

            <?php
            // Initialize variables to null.
            $NameError = "";
            $EmailError = "";

            //On Submitting form, below function will execute
            //Submit Scope starts from here
            if (isset($_POST['Submit'])) {

                if (empty($_POST["Name"])) {
                    $NameError = "*Name is Required";
                } else {
                    $Name = Test_User_Input($_POST["Name"]);
                    // check Name only contains letters and whitespace
                    if (!preg_match("/^[A-Za-z\. ]*$/", $Name)) {
                        $NameError = "Only Letters and white sapace are allowed";
                    }
                }
                if (empty($_POST["Email"])) {
                    $EmailError = "*Email is Required";
                } else {
                    $Email = Test_User_Input($_POST["Email"]);
                    // check if e-mail address syntax is valid or not
                    if (!preg_match("/[a-zA-Z0-9._-]{3,}@[a-zA-Z0-9._-]{3,}[.]{1}[a-zA-Z0-9._-]{2,}/", $Email)) {
                        $EmailError = "Invalid Email Format";
                    }
                }

                if (!empty($_POST["Name"]) && !empty($_POST["Email"])) {
                    if ((preg_match("/^[A-Za-z\. ]*$/", $Name) == true) && (preg_match("/[a-zA-Z0-9._-]{3,}@[a-zA-Z0-9._-]{3,}[.]{1}[a-zA-Z0-9._-]{2,}/", $Email) == true)) {
                        $emailTo = "rahmat@mozafari.no";
                        $subject = "Contact Form";
                        $body = " Name : " . $_POST["Name"] . "
 Email : " . $_POST["Email"] .
                            "
 Message :: " . $_POST["Comment"];
                        $Sender = "From: $Email";
                        if (mail($emailTo, $subject, $body, $Sender));
                    }
                }
            } //Submit Scope  Ends here
            //Function to get and throw data to each of the field final varriable like Name / Gender etc.
            function Test_User_Input($Data)
            {
                return $Data;
            }

            //php code ends here
            ?>

            <div class="container" id="kontakt">

                <div class="card">
                    <div class="card-header">
                        <h3 class="kont">Contact Me</h3>
                        <small class="kont">Got a question? I'd love to hear from you. Send me a message and I'll respond as soon as possible</small>
                    </div>
                    <div class="card-body">

                        <form action="" method="post">


                            <input class="input form-control" type="text" Name="Name" value="" placeholder="Name *">
                            <small style="color:red; float:left"><?php echo $NameError;  ?></small>
                            <input class="input form-control" type="text" Name="Email" value="" placeholder="Email *">
                            <small style="color:red; float:left"><?php echo $EmailError; ?></small>

                            <textarea class="form-control mb-2" Name="Comment" rows="5" cols="25" placeholder="Message"></textarea>

                            <input class="btn btn-success btn-md" type="Submit" Name="Submit" value="Send Message">


                        </form>

                    </div>

                </div>
            </div>
            <!-- end contact -->
        </div>
    </div>
    <!--Contact Section-->
    <div id="map"></div>
    <div class="clear"></div>
    <!--Footer Section-->

    <div class="copyrightSection">
        <div class="col-md-12 text-center">
            <p class="lead text-center"><strong>Oslo, Norway | </strong> Created by | Rahmat Mozafari | &copy;<span id="year"></span> | All right reserved | Follow me on
                <a href="https://www.instagram.com/lp_with_rahmat/"><i class="fab fa-instagram" style="color:#F56040;"></i></a>
                <a href="https://www.youtube.com/channel/UCow-m8KxH7G0MiePPQeREBw"><i class="fab fa-youtube" style="color:red;"></i></a>
                <a href="https://www.facebook.com/R2hm2t.Davidsen"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.linkedin.com/in/rahmat-mozafari-15844017b"><i class="fab fa-linkedin" style="color:cornflowerblue; "></i></a>
                <a href="https://github.com/Mozafari1"><i class="fab fa-github" style="color:grey;"></i></a>

            </p>
        </div>
    </div>

    <script>
        $('#year').text(new Date().getFullYear());
    </script>

    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/jquery.easypiechart.min.js"></script>

    <script src="js/typed.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/countUp.js"></script>
    <script src="js/countUp-jquery.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/isotope-layout@3.0.6/dist/isotope.pkgd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

</body>

</html>