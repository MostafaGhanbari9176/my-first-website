<?php
require 'helper/Progress.php';
require 'helper/StData.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>PePoTec</title>
    <link href="helper/img/logo.png" rel="shortcut icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="css/MainStyle.css?newversion">
    <link rel="stylesheet" href="helper/font/fontawesome-free-5.3.1-web/css/all.min.css">
    <link rel="stylesheet" href="helper/font/fontawesome-free-5.3.1-web/css/brands.min.css">
    <link rel="stylesheet" href="helper/font/fontawesome-free-5.3.1-web/css/regular.min.css">
    <link rel="stylesheet" href="helper/font/fontawesome-free-5.3.1-web/css/solid.min.css">
    <link rel="stylesheet" href="helper/font/fontawesome-free-5.3.1-web/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="JS/MainJs.js?newversion" type="text/javascript"></script>
    <script src="JS/HomeJS.js?newversion" type="text/javascript"></script>

    <script src="JS/jquery-3.3.1.slim.min.js"></script>
    <script src="JS/jquery-3.3.1.min.js"></script>
    <script src="JS/popper.min.js"></script>


</head>


<body>

    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light" style="border-bottom: 4px solid #007bff">
        <a class="font-weight-bold btn border-danger rounded ">PePoTec</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <form class="form-inline my-2 my-lg-0">
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" style="margin-right:16px ">
                    جستجو
                </button>
                <input class="form-control mr-sm-2 text-right" type="search" placeholder="جستجو" aria-label="جستجو">
            </form>
            <ul class="navbar-nav ">
                <li class="nav-item font-weight-bold">
                    <a class="nav-link " onclick="includePages('Call.html')" href="#">ارتباط با من</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        وبلاگ
                    </a>
                    <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                        <a class="dropdown-item font-weight-bold" href="#">آموزش اندروید</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item font-weight-bold" href="#">آموزش آردوینو</a>
                    </div>
                </li>
                <li class="nav-item font-weight-bold">
                    <a class="nav-link" onclick="includePages('About.html')" href="#">درباره من</a>
                </li>
                <li class="nav-item active font-weight-bold">
                    <a class="nav-link" onclick="getDownloadObjectHome('<?php echo StData::$baseUrl; ?>')" href="#">خانه
                        <span class="sr-only">(current)</span></a>
                </li>
            </ul>

        </div>
    </nav>

    <div class="parent" id="parentCard">

        <!--<div style="background: rebeccapurple; height: 1000px"></div>-->
        <script>getDownloadObjectHome('<?php echo StData::$baseUrl; ?>')</script>

    </div>

    <!-- Footer -->
    <footer class="page-footer font-small blue-grey lighten-5" style="background: #f8f9fa">

        <div style="background-color: #007bff;">
            <div class="container">

                <!-- Grid row-->
                <div class="row py-4 d-flex align-items-center">

                    <!-- Grid column -->
                    <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                        <h6 class="mb-0">Get connected with us on social networks!</h6>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-6 col-lg-7 text-center text-md-right">

                        <!-- Facebook -->
                        <a class="fb-ic">
                            <i class="fa fa-facebook white-text mr-4"> </i>
                        </a>
                        <!-- Twitter -->
                        <a class="tw-ic">
                            <i class="fa fa-twitter white-text mr-4"> </i>
                        </a>
                        <!-- Google +-->
                        <a class="gplus-ic">
                            <i class="fa fa-google-plus white-text mr-4"> </i>
                        </a>
                        <!--Linkedin -->
                        <a class="li-ic">
                            <i class="fa fa-linkedin white-text mr-4"> </i>
                        </a>
                        <!--Instagram-->
                        <a class="ins-ic">
                            <i class="fa fa-instagram white-text"> </i>
                        </a>

                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row-->

            </div>
        </div>

        <!-- Footer Links -->
        <div class="container text-center text-md-left mt-5">

            <!-- Grid row -->
            <div class="row mt-3 dark-grey-text">

                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mb-4">

                    <!-- Content -->
                    <h6 class="text-uppercase font-weight-bold">Company name</h6>
                    <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>Here you can use rows and columns here to organize your footer content. Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit.</p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold">Products</h6>
                    <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <a class="dark-grey-text" href="#!">MDBootstrap</a>
                    </p>
                    <p>
                        <a class="dark-grey-text" href="#!">MDWordPress</a>
                    </p>
                    <p>
                        <a class="dark-grey-text" href="#!">BrandFlow</a>
                    </p>
                    <p>
                        <a class="dark-grey-text" href="#!">Bootstrap Angular</a>
                    </p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold">Useful links</h6>
                    <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <a class="dark-grey-text" href="#!">Your Account</a>
                    </p>
                    <p>
                        <a class="dark-grey-text" href="#!">Become an Affiliate</a>
                    </p>
                    <p>
                        <a class="dark-grey-text" href="#!">Shipping Rates</a>
                    </p>
                    <p>
                        <a class="dark-grey-text" href="#!">Help</a>
                    </p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold">Contact</h6>
                    <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <i class="fa fa-home mr-3"></i> New York, NY 10012, US</p>
                    <p>
                        <i class="fa fa-envelope mr-3"></i> info@example.com</p>
                    <p>
                        <i class="fa fa-phone mr-3"></i> + 01 234 567 88</p>
                    <p>
                        <i class="fa fa-print mr-3"></i> + 01 234 567 89</p>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center text-black-50 py-3">© 2018 Copyright:
            <a class="dark-grey-text" href="https://mdbootstrap.com/bootstrap-tutorial/"> MDBootstrap.com</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->



<script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>


</body>
</html>