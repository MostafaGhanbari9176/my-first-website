<?php
$visitObjects = json_decode($_POST['visit'], true);
$downloadObject = json_decode($_POST['download'], true);
require 'helper/StData.php';
?>


<link rel="stylesheet" href="css/HomeCss.css" type="text/css">

<div id="myCarousel" class="carousel slide homeSlider">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <!--        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                <li data-target="#myCarousel" data-slide-to="2" class=""></li>-->
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active sliderItem">
            <img class="first-slide carousel-img" src="helper/img/22.jpg" alt="First slide">
            <div class="container">
                <div class="carousel-caption text-right">
                    <h1 class="itemSubject">نسخه آزمایشی.</h1>
                    <p class="description-small">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id
                        elit non mi porta gravida
                        at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a class="btn btn-primary btnDownload" href="#" role="button">Sign up today</a></p>
                </div>
            </div>
        </div>
        <!--        <div class="carousel-item">
                    <img class="second-slide carousel-img" src="helper/img/2.jpg" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>نسخه آزمایشی.</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida
                                at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="third-slide carousel-img" src="helper/img/3.jpg" alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption text-right">
                            <h1>نسخه آزمایشی.</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida
                                at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                        </div>
                    </div>
                </div>-->
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class=" marketing homeItems">
    <h1 class="subject"> تاپ دان </h1>
    <div class="downloadObjectMenu">
        <form>
            <table>
                <tr>
                    <td>
                        <div class="btn-group">
                            <button type="button" class="btn btn-danger">اندروید</button>
                            <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="btn-group">
                            <button type="button" style="margin-right: -2px" class="btn btn-info">موسیقی</button>
                            <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="btn-group">
                            <button type="button" style="margin-right: -2px" class="btn btn-warning">بازی</button>
                            <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="btn-group">
                            <button type="button" style="margin-right: -2px" class="btn btn-primary">Action</button>
                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="btn-group">
                            <button type="button" style="margin-right: -2px" class="btn btn-success">Action</button>
                            <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="btn-group">
                            <button type="button" style="margin-right: -2px" class="btn btn-secondary">Action</button>
                            <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                    </td>

            </table>

        </form>
    </div>


    <!-- Three columns of text below the carousel -->
    <div class="row" style="text-align: center" id="downloadObjectRow">
        <?php if ($downloadObject[0]['empty'] == 1)
            echo "<h1 style='color:tomato'>EMPTY</h1>";
        else {
            for ($i = 0; $i < sizeof($downloadObject); $i++) {
                echo "
             
         <div class='col-lg-3 col-md-4 col-sm-6 col-xs-6 ' style='margin-top: 32px'>
            <div class='downloadObjectParent'>
            <img class=\"rounded-circle small-img\" src='" . StData::$img . $downloadObject[$i]['d_o_id'] . ".jpg'  alt=" . $downloadObject[$i]['subject'] . ">
           
            <h2 class='itemSubject'>" . $downloadObject[$i]['subject'] . "</h2>
            <p class='description-small'>" . $downloadObject[$i]['small_description'] . "</p>
            <a class=\"btn btn-primary btnDownload mx-auto\" href=" . $downloadObject[$i]['down_link'] . " role=\"button\">دانلود</a>
        </div>
        </div><!-- /.col-lg-4 -->
             
             ";
            }
        }
        ?>


    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">First featurette heading. <span
                        class="text-muted">It'll blow your mind.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod
                semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus
                commodo.</p>
        </div>
        <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500"
                 style="width: 500px; height: 500px;"
                 src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22500%22%20height%3D%22500%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20500%20500%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_165b16f957e%20text%20%7B%20fill%3A%23AAAAAA%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A25pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_165b16f957e%22%3E%3Crect%20width%3D%22500%22%20height%3D%22500%22%20fill%3D%22%23EEEEEE%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22185.125%22%20y%3D%22261.1%22%3E500x500%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                 data-holder-rendered="true">
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span>
            </h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod
                semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus
                commodo.</p>
        </div>
        <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500"
                 src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22500%22%20height%3D%22500%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20500%20500%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_165b16f9581%20text%20%7B%20fill%3A%23AAAAAA%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A25pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_165b16f9581%22%3E%3Crect%20width%3D%22500%22%20height%3D%22500%22%20fill%3D%22%23EEEEEE%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22185.125%22%20y%3D%22261.1%22%3E500x500%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                 data-holder-rendered="true" style="width: 500px; height: 500px;">
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod
                semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus
                commodo.</p>
        </div>
        <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500"
                 src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22500%22%20height%3D%22500%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20500%20500%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_165b16f9582%20text%20%7B%20fill%3A%23AAAAAA%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A25pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_165b16f9582%22%3E%3Crect%20width%3D%22500%22%20height%3D%22500%22%20fill%3D%22%23EEEEEE%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22185.125%22%20y%3D%22261.1%22%3E500x500%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                 data-holder-rendered="true" style="width: 500px; height: 500px;">
        </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

</div>
