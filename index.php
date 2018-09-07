<?php
require 'helper/Progress.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Title</title>

    <meta charset="utf-8">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link type="text/css" rel="stylesheet" href="css/MainStyle.css?newversion">

    <script src="JS/MainJs.js?newversion" type="text/javascript"></script>

</head>


<body>


<div class="root">
    <img class="img-root" src="helper/img/5.jpg">

    <div class="card nav-parent">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
                        <a class="nav-link " onclick="includePages('Call.html')">ارتباط با من</a>
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
                        <a class="nav-link" onclick="includePages('Abou.html')">درباره من</a>
                    </li>
                    <li class="nav-item active font-weight-bold">
                        <a class="nav-link" onclick="includePages('Home.html')">خانه <span class="sr-only">(current)</span></a>
                    </li>
                </ul>

            </div>
        </nav>
    </div>

    <div class="card parent" id="parentCard">

        <script>includePages('Home.php')</script>

    </div>

</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>


</body>
</html>