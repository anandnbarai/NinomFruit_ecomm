<?php
$mainurl = "http://localhost/php-data/my_work/TI/Ninom%20Fruit/admin/";
$baseurl = "http://localhost/php-data/my_work/TI/Ninom%20Fruit/admin/assets/";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Ninom Admin Dashboard</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link rel="icon" href="<?php echo $baseurl; ?>img/shop-img.jpg" type="image/jpg" />

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo $baseurl; ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $baseurl; ?>vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?php echo $baseurl; ?>vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?php echo $baseurl; ?>vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="<?php echo $baseurl; ?>vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="<?php echo $baseurl; ?>vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?php echo $baseurl; ?>vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo $baseurl; ?>css/style.css" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="<?php echo $mainurl; ?>admindashboard" class="logo d-flex align-items-center">
                <span class="d-none d-lg-block" style="color:white">Ninom</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div><!-- End Search Bar -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->


                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="assets/img/1.png" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2" style="color:white">
                            <?php echo rtrim($_SESSION['txt_email'], '@gmail.com') ?>
                        </span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li>
                            <a class="dropdown-item d-flex align-items-center"
                                href="<?php echo $mainurl; ?>adminprofile">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class="bi bi-lock"></i>
                                <span>Change Password</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="<?php echo $mainurl; ?>?logout-admin" onclick="return confirm('Are You Sure?')">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Log Out!</span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?php echo $baseurl; ?>vendor/apexcharts/apexcharts.min.js"></script>
    <script src="<?php echo $baseurl; ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo $baseurl; ?>vendor/chart.js/chart.umd.js"></script>
    <script src="<?php echo $baseurl; ?>vendor/echarts/echarts.min.js"></script>
    <script src="<?php echo $baseurl; ?>vendor/quill/quill.min.js"></script>
    <script src="<?php echo $baseurl; ?>vendor/simple-datatables/simple-datatables.js"></script>
    <script src="<?php echo $baseurl; ?>vendor/tinymce/tinymce.min.js"></script>
    <script src="<?php echo $baseurl; ?>vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?php echo $baseurl; ?>js/main.js"></script>

</body>

</html>