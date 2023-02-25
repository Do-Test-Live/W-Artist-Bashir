<?php
include ('config/dbconfig.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
                    <li>
                        <a href="news.html">NEWS</a>
                    </li>
                    <li>
                        <a href="contact.php">CONTACT</a>
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
                <h1>Artworks For Sale</h1>
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
                    <li><a href="#">Artworks For Sale</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb Banner -->

<!-- Start Portfolio
============================================= -->
<div id="portfolio" class="portfolio-area text-light default-padding">
    <div class="container">
        <div class="portfolio-items-area">
            <div class="row">
                <div class="col-md-12 portfolio-content">
                    <div class="mix-item-menu text-left">
                        <button class="active" data-filter="*">All</button>
                        <?php
                        $fatch_category=$connection->query("SELECT * FROM `category`");
                        if($fatch_category->num_rows >0){
                            while ($category=mysqli_fetch_assoc($fatch_category)){
                                ?>
                                <button data-filter=".<?php echo $category['id']?>"><?php echo $category['category_name']?></button>

                                <?php
                            }
                        }
                        ?>




                    </div>
                    <!-- End Mixitup Nav-->

                    <div class="row magnific-mix-gallery masonary">
                        <div id="portfolio-grid" class="portfolio-items col-3">

                            <?php
                            $fatch_image= $connection->query("SELECT * FROM `port_image`");
                            if($fatch_image->num_rows > 0){
                                while ($data=mysqli_fetch_assoc( $fatch_image)){
                                    ?>
                                    <div class="pf-item <?php echo $data['category_id'];?>">
                                        <div class="effect-left-swipe">
                                            <img src="<?php echo $data['image'];?>" alt="thumb">
                                            <a href="<?php echo $data['image'];?>" class="item popup-link"><i
                                                        class="fa fa-expand"></i></a>
                                            <div class="icons">
                                                <h4><a href="#"><?php echo $data['image_name'];?></a></h4>
                                                <div class="cat">
                                                    <span><?php echo $data['price'];?> USD</span>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                            }


?>








                        </div>
                    </div>
                </div>
            </div>
            <div class="load-button text-center">
                <div class="col-md-12">
                    <a href="#" class="btn btn-dark border btn-md">Load More <i class="fas fa-spinner"></i></a>
                </div>
            </div>
        </div>
        <!-- End Portfoio Row -->
    </div>
</div>

<!-- End Portfolio -->

<!-- Start Footer
============================================= -->
<footer class="text-center bg-dark text-light">
    <div class="container">
        <div class="row">
            <div class="col-md-3 logo text-left">
                <img src="assets/img/logo-light.png" alt="Logo">
            </div>

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
                <p>&copy; Copyright 2023 Abdullah Al Bashir | Design By <a href="https://www.frogbid.com/">FrogBID</a>
                </p>
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
