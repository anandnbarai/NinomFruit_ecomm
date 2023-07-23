<?php
$mainurl = "http://localhost/php-data/my_work/TI/Ninom%20Fruit/";
$baseurl = "http://localhost/php-data/my_work/TI/Ninom%20Fruit/assets/";
?>

<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Ninom</title>

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="<?php echo $baseurl; ?>css/bootstrap.css" />
    <!-- fevicon -->
    <link rel="icon" href="<?php echo $baseurl; ?>images/shop-img.jpg" type="image/jpg" />
    <!-- fonts style -->
    <link
        href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Dosis:400,600,700|Poppins:400,600,700&display=swap"
        rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="<?php echo $baseurl; ?>css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="<?php echo $baseurl; ?>css/responsive.css" rel="stylesheet" />
    <!-- BS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        <div class="brand_box">
            <a class="navbar-brand" href="<?php echo $mainurl; ?>">
                <span>
                    Ninom
                </span>
            </a>
        </div>
        <!-- end header section -->
        <!-- slider section -->
        <section class=" slider_section position-relative">
            <div id="carouselExampleControls" class="carousel slide " data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="img-box">
                            <img src="<?php echo $baseurl; ?>images/slider-img.jpg" alt="">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="img-box">
                            <img src="<?php echo $baseurl; ?>images/slider-img.jpg" alt="">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="img-box">
                            <img src="<?php echo $baseurl; ?>images/slider-img.jpg" alt="">
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>
        <!-- end slider section -->
    </div>

    <!-- nav section -->

    <section class="nav_section">
        <div class="container">
            <div class="custom_nav2">
                <nav class="navbar navbar-expand custom_nav-container ">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="d-flex flex-lg-row">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="<?php echo $mainurl; ?>">Home <span
                                            class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo $mainurl; ?>about">About </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo $mainurl; ?>fruit">Our Fruit </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo $mainurl; ?>contact">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="d-flex flex-lg-row">
                            <ul class="navbar-nav me-auto">

                                <?php

                                if (!isset($_SESSION['email'])) {
                                    ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo $mainurl ?>login">Login</a>
                                    </li>
                                    <?php
                                } else {
                                    ?>
                                    <li class="nav-item"><a class="nav-link" href="<?php echo $mainurl; ?>myprofile">
                                            Welcome : <b class="text-white">
                                                <?php echo ucfirst($_SESSION["name"]); ?>
                                            </b></a>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo $mainurl ?>?logout">Log Out</a>
                                    </li>
                                    <?php
                                }
                                ?>
                                <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                                    <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
                                </form>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </section>

    <!-- end nav section -->

    <!-- shop section -->

    <section class="shop_section layout_padding">
        <div class="container">
            <div class="box">
                <div class="detail-box">
                    <h2>
                        Fruit shop
                    </h2>
                    <p>
                        There are many variations of passages of Lorem Ipsum available
                    </p>
                </div>
                <div class="img-box">
                    <img src="<?php echo $baseurl; ?>images/shop-img.jpg" alt="">
                </div>
                <div class="btn-box">
                    <a href="">
                        Buy Now
                    </a>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript" src="<?php echo $baseurl; ?>js/jquery-3.4.1.min.js">
    </script>
    <script type="text/javascript" src="<?php echo $baseurl; ?>js/bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo $baseurl; ?>js/custom.js"></script>
</body>

</html>