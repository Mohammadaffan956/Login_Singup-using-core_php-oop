<?php
//session_start();
//if (isset($_POST['logout'])) {
//    session_destroy();
//    header('Location: ..\index.php');
//}
//
session_start();
if ($_SESSION["user"]==true){
    echo $_SESSION["user"];
}else{
    header("Location: ../index.php");
}
?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Burhani Developer's</title>
    <link rel="icon" href="assets/favicon-16x16.png" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
          integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#page-top" style="font-family: Raleway; color: black; font-weight: 600"><span><img
                            width="12%" src="assets/img/burhani1.png" alt="logo"></span>urhani Developer's</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li class="page-scroll">
                    <a href="#portfolio">Home</a>
                </li>
                <li class="page-scroll">
                    <a href="#about">About</a>
                </li>
                <li class="page-scroll">
                    <a href="#contact">Portfolio</a>
                </li>
                <li class="page-scroll">
                    <a href="#contact">Feature</a>
                </li>
                <li class="page-scroll">
                    <a href="#contact">Contact</a>
                </li>
                <li class="page-scroll">
                    <a href="#contact"><img width="20px;" src="assets/img/search.png" alt="search-icon"></a>
                </li>
                <!--                  <li class="dropdown">-->
                <!--                      <a href="#"class="dropdown-toggle" data-toggle="dropdown"><img width="25px;" src="assets/img/team.png" alt="User"></a>-->
                <!--                  </li>-->
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img width="25px;"
                                                                                        src="assets/img/team.png"
                                                                                        alt="User"></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Account Settings <span
                                            class="glyphicon glyphicon-cog pull-right"></span></a></li>
                            <li class="divider"></li>
                            <li><a href="#">User stats <span class="glyphicon glyphicon-stats pull-right"></span></a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="#">Messages <span class="badge pull-right"> 42 </span></a></li>
                            <li class="divider"></li>
                            <li><a href="#">Favourites Snippets <span
                                            class="glyphicon glyphicon-heart pull-right"></span></a></li>
                            <li class="divider"></li>
                            <form method="post" action="index.php">
                                                            <li><a href="../logout.php" name="logout" type="submit">Sign Out <span class="glyphicon glyphicon-log-out pull-right"></span></a></li>
<!--                                <button type="submit" name="logout">Logout</button>-->
                            </form>
                        </ul>
                    </li>
                </ul>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
<div class="back-blue">
    <div class="container">
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
                <div class="bu-txt">
                    <h1>Variety of back office services<br>
                        To ease operational pressure from your business</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                        been<br>
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <a href="#" data-toggle="popover" title="Burhani Developer"
                       data-content="Some content inside the Button">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div><!--back-blue-->
<div class="section-1 clearfix">
    <div class="container">
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
                <div class="arrow-center">
                    <img width="18px" src="assets/img/elements_03.png" alt="section_arrow-down">
                </div>
            </div>
        </div>
    </div>
</div><!--section-1-->
<div class="section-2 clearfix">
    <div class="container">
        <div class="row">
            <div class="section2-txt">
                <div class="col-sm-6">
                    <div class="text">
                        <h1>Create anything, for anyone.</h1>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting<br>
                            industry. Lorem Ipsum has been the industry's standard dummy<br>
                            text ever since the 1500s, when an unknown printer took a galley<br>
                            of type and scrambled it to make a type specimen book. It has<br>
                            survived not only five centuries, but also the leap into electronic<br>
                            typesetting, remaining essentially unchanged. It was popularised in<br>
                            the 1960s with the release of Letraset sheets containing Lorem<br>
                            Ipsum passages, and more recently with desktop publishing<br>
                            software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                        <ul>
                            <li class="face"><i class="fa fa-facebook fa-lg"></i></li>
                            <li class="twit"><i class="fa fa-twitter fa-lg"></i></li>
                            <li class="link"><i class="fa fa-linkedin fa-lg"></i></li>
                        </ul>
                        <hr>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="image">
                        <img width="56%" src="assets/img/like.png" alt="section-2 image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--section-2-->
<div class="arrow-section clearfix">
    <div class="container">
        <div class="row">
            <div class="col-sm-6"></div>
            <div class="col-sm-6">
                <div class="arrow-down">
                    <img width="30%;" src="assets/img/elements_10.png" alt="arrow-left-down">
                </div>
            </div>
        </div>
    </div>
</div><!--arrow-section-->
<div class="section-2 clearfix">
    <div class="container">
        <div class="row">
            <div class="section2-txt">
                <div class="col-sm-6">
                    <div class="image">
                        <img width="56%" style="float: left !important;" src="assets/img/responsive.png"
                             alt="section-2 image">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="text">
                        <h1 style="color: #038cb0">Plane that fit your needs.</h1>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting<br>
                            industry. Lorem Ipsum has been the industry's standard dummy<br>
                            text ever since the 1500s, when an unknown printer took a galley<br>
                            of type and scrambled it to make a type specimen book. It has<br>
                            survived not only five centuries, but also the leap into electronic<br>
                            typesetting, remaining essentially unchanged. It was popularised in<br>
                            the 1960s with the release of Letraset sheets containing Lorem<br>
                            Ipsum passages, and more recently with desktop publishing<br>
                            software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                        <ul>
                            <li class="face"><i class="fa fa-facebook fa-lg"></i></li>
                            <li class="twit"><i class="fa fa-twitter fa-lg"></i></li>
                            <li class="link"><i class="fa fa-linkedin fa-lg"></i></li>
                        </ul>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--section-2-->

<div class="arrow-section clearfix">
    <div class="container">
        <div class="row">
            <div class="col-sm-7">
                <div class="arrow-down" style="float: right !important;">
                    <img width="60%;" src="assets/img/elements_19.png" alt="arrow-right-down">
                </div>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>
</div><!--arrow-section-->

<div class="section-2 clearfix">
    <div class="container">
        <div class="row">
            <div class="section2-txt">
                <div class="col-sm-6">
                    <div class="text">
                        <h1 style="color: #43d23a">Content Manegment & Moderation</h1>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting<br>
                            industry. Lorem Ipsum has been the industry's standard dummy<br>
                            text ever since the 1500s, when an unknown printer took a galley<br>
                            of type and scrambled it to make a type specimen book. It has<br>
                            survived not only five centuries, but also the leap into electronic<br>
                            typesetting, remaining essentially unchanged. It was popularised in<br>
                            the 1960s with the release of Letraset sheets containing Lorem<br>
                            Ipsum passages, and more recently with desktop publishing<br>
                            software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                        <ul>
                            <li class="face"><i class="fa fa-facebook fa-lg"></i></li>
                            <li class="twit"><i class="fa fa-twitter fa-lg"></i></li>
                            <li class="link"><i class="fa fa-linkedin fa-lg"></i></li>
                        </ul>
                        <hr>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="image">
                        <img width="56%" src="assets/img/content-management-300x300.png" alt="section-2 image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--section-2-->

<div class="arrow-section clearfix">
    <div class="container">
        <div class="row">
            <div class="col-sm-6"></div>
            <div class="col-sm-6">
                <div class="arrow-down">
                    <img width="30%;" src="assets/img/elements_10.png" alt="arrow-left-down">
                </div>
            </div>
        </div>
    </div>
</div><!--arrow-section-->

<div class="section-2 clearfix">
    <div class="container">
        <div class="row">
            <div class="section2-txt">
                <div class="col-sm-6">
                    <div class="image">
                        <img width="56%" style="float: left !important;" src="assets/img/gen-back-office-300x300.png"
                             alt="section-2 image">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="text">
                        <h1 style="color: #2c96d2">General Back Office</h1>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting<br>
                            industry. Lorem Ipsum has been the industry's standard dummy<br>
                            text ever since the 1500s, when an unknown printer took a galley<br>
                            of type and scrambled it to make a type specimen book. It has<br>
                            survived not only five centuries, but also the leap into electronic<br>
                            typesetting, remaining essentially unchanged. It was popularised in<br>
                            the 1960s with the release of Letraset sheets containing Lorem<br>
                            Ipsum passages, and more recently with desktop publishing<br>
                            software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                        <ul>
                            <li class="face"><i class="fa fa-facebook fa-lg"></i></li>
                            <li class="twit"><i class="fa fa-twitter fa-lg"></i></li>
                            <li class="link"><i class="fa fa-linkedin fa-lg"></i></li>
                        </ul>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--section-2-->
<footer clearfix>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="one-four">
                    <h1>About Us</h1>
                    <ul>
                        <li>About Us</li>
                        <li>Contact Us</li>
                        <li>Privacy Policy</li>
                        <li>Term & Services</li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="one-four">
                    <h1>Services</h1>
                    <ul>
                        <li>Front-end-Development</li>
                        <li>Back-end-Development</li>
                        <li>Wordpress</li>
                        <li>SEO Service</li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="one-four">
                    <h1>Talk to Us</h1>
                    <ul>
                        <li>Email Enquires:</li>
                        <li style="font-weight: 600">info@burhanidevelopers</li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="one-four">
                    <h1>Subscription</h1>
                    <input class="form-control" id="focusedInput" type="text" placeholder="Email...">
                    <ul class="social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                    <h2>Burhani Developer's</h2>
                    <hr>
                    <p>&copy;Developed by Mohammad Affan<span><i class="fa fa-heart"></i></span></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<script>
    $(document).ready(function () {
        $('[data-toggle="popover"]').popover();
    });
</script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ"
        crossorigin="anonymous"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"
        integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd"
        crossorigin="anonymous"></script>
</body>
</html>