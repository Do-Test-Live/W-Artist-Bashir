
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    session_start();
    ?>

    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Vifolio - Creative Minimal Portfolio Template">

    <!-- ========== Page Title ========== -->
    <title>ABDULLAH AL BASHIR</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="assets/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="assets/css/flaticon-set.css" rel="stylesheet"/>
    <link href="assets/css/magnific-popup.css" rel="stylesheet"/>
    <link href="assets/css/owl.carousel.min.css" rel="stylesheet"/>
    <link href="assets/css/owl.theme.default.min.css" rel="stylesheet"/>
    <link href="assets/css/animate.css" rel="stylesheet"/>
    <link href="assets/css/bootsnav.css" rel="stylesheet"/>
    <link href="style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet"/>
    <!-- ========== End Stylesheet ========== -->

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet">

</head>

<body>


<!-- Header
============================================= -->
<header id="home">

    <!-- Start Navigation -->
    <nav class="navbar navbar-default navbar-sticky bootsnav">

        <div class="container-fluid">

            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html">
                    <img src="assets/img/logo-light.png" class="logo logo-display" alt="Logo">
                    <img src="assets/img/logo.png" class="logo logo-scrolled" alt="Logo">
                </a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="about.html">ABOUT THE ARTIST</a>
                    </li>
                    <li>
                        <a href="artwork.html">ARTWORKS FOR SALE</a>
                    </li>
                    <li>
                        <a href="exibition.html">EXHIBITION</a>
                    </li>
                    <!--  <li>
                        <a href="critics.html">CRITICS</a>
                      </li>-->
                    <!--  <li>
                        <a href="photography.html">PHOTOGRAPHY</a>
                      </li>
                      <li>
                        <a href="videography.html">VIDEOGRAPHY</a>
                      </li>-->
                    <li>
                        <a href="news.html">NEWS</a>
                    </li>
                    <!-- <li>
                       <a href="dhaka-watercolor.html">DHAKA WATERCOLOUR ACADEMY</a>
                     </li>-->
                    <li>
                        <a href="contact.html">CONTACT</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>
    <!-- End Navigation -->

</header>
<!-- End Header -->

<!-- Start Page Heading
============================================= -->
<div class="page-heading shadow dark bg-fixed text-light" style="background-image: url(assets/img/banner/4.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Contact</h1>
            </div>
        </div>
    </div>
</div>
<!-- End Page Heading -->

<!-- Start Breadcrumb Banner
============================================= -->
<div class="breadcrumb-items bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb Banner -->

<!-- Start Contact
============================================= -->
<div class="contact-area default-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-5 address-info left-info">
                <h2>Contact Info</h2>
                <ul>
                    <!-- <li>
                       <i class="fas fa-map-marker-alt"></i>
                       <p>
                         Our Location
                         <span>Alexima, NT 456678</span>
                       </p>
                     </li>-->
                    <li>
                        <i class="fas fa-envelope-open"></i>
                        <p>
                            Send Us Mail
                            <span> bashir307@gmail.com</span>
                        </p>
                    </li>
                    <li>
                        <i class="fas fa-mobile-alt"></i>
                        <p>
                            Call Us
                            <span>+(880) 171-725-4538</span>
                        </p>
                    </li>
                </ul>
            </div>
            <!-- Start Contact Form -->
            <div class="col-md-7 right-info">
                <div class="content">
                    <h2>Stay in touch.</h2>
                    <h4>Feel free to contact us for any project, idea, collaboration or simply say hi.</h4>
                    <?php
                    if(isset($_SESSION['status']))
                    {
                        ?>
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <strong>Success!</strong> Data inserted successfully.
                        </div>
                        <?php
                        unset($_SESSION['status']);
                    }
                    ?>
                    <form action="insert_contact_data.php" method="post">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group">
                                    <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group">
                                    <input class="form-control" id="email" name="email" placeholder="Email*"
                                           type="email">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group">
                                    <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group comments">
                                    <textarea class="form-control" id="comments" name="comments"
                                              placeholder="message" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <button type="submit" class="btn btn-success" name="contact" id="submit">
                                    Send Message <i class="fa fa-paper-plane"></i>
                                </button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- End Contact Form -->
        </div>
    </div>
</div>
<!-- End Contact -->


<footer class="text-center bg-dark text-light" style="margin-top: 100px;">
    <div class="container">
        <div class="row">
            <!--<div class="col-md-3 logo text-left">
                <img src="assets/img/logo-light.png" alt="Logo">
            </div>-->

            <div class="col-md-6 menu text-center">
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="about.html">ABOUT THE ARTIST</a>
                    </li>
                    <li>
                        <a href="artwork.html">ARTWORKS FOR SALE</a>
                    </li>
                    <li>
                        <a href="exibition.html">EXHIBITION</a>
                    </li>
                    <li>
                        <a href="news.html">NEWS</a>
                    </li>
                    <li>
                        <a href="contact.php">CONTACT</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 footer-social text-right">
                <ul>
                    <li class="facebook">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li class="twitter">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-12 copyright border">
                <p>&copy; Copyright 2023 Abdullah Al Bashir | Design By <a href="https://www.frogbid.com/">FrogBID</a></p>
            </div>
        </div>
    </div>
</footer>
<!-- jQuery Frameworks
============================================= -->
<script src="assets/js/jquery-1.12.4.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/equal-height.min.js"></script>
<script src="assets/js/jquery.appear.js"></script>
<script src="assets/js/jquery.easing.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/modernizr.custom.13711.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/isotope.pkgd.min.js"></script>
<script src="assets/js/imagesloaded.pkgd.min.js"></script>
<script src="assets/js/count-to.js"></script>
<script src="assets/js/bootsnav.js"></script>
<script src="assets/js/typed.js"></script>
<script src="assets/js/YTPlayer.min.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>
