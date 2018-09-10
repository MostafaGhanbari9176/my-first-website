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

    <script src="JS/MainJs.js?newversion" type="text/javascript"></script>
    <script src="JS/HomeJS.js?newversion" type="text/javascript"></script>
    <script src="JS/jquery-3.3.1.slim.min.js" ></script>
    <script src="JS/jquery-3.3.1.min.js" ></script>
    <script src="JS/popper.min.js" ></script>


</head>


<body>


<div class="root">
   <!-- <img class="img-root" src="helper/img/5.jpg">-->

    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
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
                        <a class="nav-link" onclick="getDownloadObjectHome('<?php echo StData::$baseUrl; ?>')" href="#">خانه <span class="sr-only">(current)</span></a>
                    </li>
                </ul>

            </div>
        </nav>


    <div class="parent" id="parentCard">

        <script>getDownloadObjectHome('<?php echo StData::$baseUrl; ?>')</script>

    </div>

</div>



<script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>


</body>
</html>