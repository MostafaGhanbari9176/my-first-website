<?php
$visitObjects = json_decode($_POST['visit'], true);
$downloadObject = json_decode($_POST['download'], true);
$groupingObject = json_decode($_POST['grouping'], true);
function getGroupColor()
{
    $i = rand(0, 5);
    switch ($i) {
        case 0:
            return "btn-danger";
        case 1:
            return "btn-info";
        case 2:
            return "btn-warning";
        case 3:
            return "btn-primary";
        case 4:
            return "btn-success";
        case 5:
            return "btn-secondary";
    }
}

$saveColor = null;
$saveColor2 = null;

require '../helper/StData.php';
require '../helper/StViews.php';
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
                    <h1 class="SUB visitItemSubject sliderText">نسخه آزمایشی.</h1>
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
    <div id="arrowsDownHome" style="padding: 0 32px 32px;"
         onclick="slideDown()"><?php StViews::getArrowsDown(); ?></div>
    <h1 class="SUB subject"> تاپ دان </h1>


    <div>
        <form>
            <table>
                <tr>
                    <td>
                        <button id="showAllDownloadObjectButton" type="button" class="btn btn-dark menuChild"
                                style=" display: none"
                                onclick="getDownloadObjectHome('<?php echo StData::$baseUrl ?>',false)">نمایش همه
                        </button>
                    </td>
                </tr>
                <tr>
                    <div class="row">
                        <?php
                        if ($groupingObject[0]['empty'] == 1) {
                            echo "<h1 class='EmptyMessage'>EMPTY</h1>";
                        } else {
                            for ($k = 0; $k < sizeof($groupingObject); $k++) {
                                if ($groupingObject[$k]['root_id'] == -1) {
                                    $color = getGroupColor();
                                    if ($saveColor == null)
                                        $saveColor = $color;
                                    else if ($saveColor == $color) {
                                        while ($saveColor == $color) {
                                            $color = getGroupColor();
                                        }
                                        $saveColor = $color;
                                    } else
                                        $saveColor = $color;
                                    echo "                    <div class='col-lg-3 col-md-4 col-sm-6 col-xs-6 menuItem'>
                        <div class=\"btn-group\">
                            <button type=\"button\" onclick=\"getDownloadObjectByRootIdGrouping('" . StData::$baseUrl . "','" . $groupingObject[$k]['g_id'] . "')\" class=\"btn " . $color . "\">" . $groupingObject[$k]['subject'] . "</button>
                            <button type=\"button\"
                                    class=\"btn " . $color . " dropdown-toggle dropdown-toggle-split\"
                                    data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <span class=\"sr-only\">Toggle Dropdown</span>
                            </button>
                            <div class=\"dropdown-menu\">";
                                    ?>
                                    <?php
                                    for ($m = 0; $m < sizeof($groupingObject); $m++) {
                                        if ($groupingObject[$m]['root_id'] == $groupingObject[$k]['g_id'])
                                            echo "

                                <a class=\"dropdown-item\" onclick=\"getDownloadObjectByGroupingId('" . StData::$baseUrl . "','" . $groupingObject[$m]['g_id'] . "')\">" . $groupingObject[$m]['subject'] . "</a>
                                <div class=\"dropdown-divider\"></div>
                               ";
                                    }

                                    echo "                            </div>
                        </div>
                    </div>";

                                }

                            }
                        }
                        ?>
                    </div>
                </tr>
            </table>

        </form>
    </div>


    <!-- Three columns of text below the carousel -->
    <div class="row" style="text-align: center" id="downloadObjectSection">
        <?php if ($downloadObject[0]['empty'] == 1)
            echo "<h1 class='EmptyMessage'>" . StData::$emptyMessage . "</h1>";
        else {
            for ($i = 0; $i < sizeof($downloadObject); $i++) {
                echo "
             
         <div class='col-lg-3 col-md-4 col-sm-6 col-xs-6 ' style='margin-top: 32px'>
            <div class='downloadObjectParent'>
            
                    <div class=\"col-md-6 col-lg-7 text-center text-md-right\">
                       <a class=\"text-danger\">
                            <i> " . $downloadObject[$i]['counter'] . "</i>
                        </a>

                       <a class=\"text-danger\">
                            <i class=\"fas fa-download \"> </i>
                        </a>
                        <!-- Facebook -->
                        <a class=\"text-primary\">
                            <i class=\"fas fa-comments mr-4\"> </i>
                        </a>
                        </div>
            <div style='padding: 8px 16px 64px;'>
            <img class=\"rounded-circle small-img\" src='" . StData::$img . $downloadObject[$i]['d_o_id'] . "d_o.jpg'  alt=" . $downloadObject[$i]['subject'] . ">
           
            <h2 class='SUB downloadItemSubject'>" . $downloadObject[$i]['subject'] . "</h2>
            <p class='DES downloadItemDescription'>" . $downloadObject[$i]['small_description'] . "</p>
            <a class=\"DES btn btn-primary btnDownload mx-auto\" href=" . $downloadObject[$i]['down_link'] . " role=\"button\">دانلود</a>
            </div>
        </div>
        </div><!-- /.col-lg-4 -->
             
             ";
            }
        }
        ?>


    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <div class="visitObjectSection">
        <hr class="featurette-divider" style="margin-bottom: 32px">

        <h1 class="SUB subject"> تاپ لرن </h1>
        <div class="" style="margin-bottom: 64px">
            <form>
                <table>
                    <tr>
                        <td>
                            <button id="showAllVisitObjectButton" type="button" class="btn btn-dark menuChild"
                                    style=" display: none"
                                    onclick="getVisitObjectHome(null,'<?php echo StData::$baseUrl ?>',null,false)">نمایش همه
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <div class="row">
                            <?php
                            if ($groupingObject[0]['empty'] == 1) {
                                echo "<h1 class='EmptyMessage'>EMPTY</h1>";
                            } else {
                                for ($k = 0; $k < sizeof($groupingObject); $k++) {
                                    if ($groupingObject[$k]['root_id'] == -1) {
                                        $color = getGroupColor();
                                        if ($saveColor == null)
                                            $saveColor = $color;
                                        else if ($saveColor == $color) {
                                            while ($saveColor == $color) {
                                                $color = getGroupColor();
                                            }
                                            $saveColor = $color;
                                        } else
                                            $saveColor = $color;
                                        echo "                    <div class='col-lg-3 col-md-4 col-sm-6 col-xs-6 menuItem'>
                        <div class=\"btn-group\">
                            <button type=\"button\" onclick=\"getVisitObjectByRootIdGrouping('" . StData::$baseUrl . "','" . $groupingObject[$k]['g_id'] . "')\" class=\"btn " . $color . "\">" . $groupingObject[$k]['subject'] . "</button>
                            <button type=\"button\"
                                    class=\"btn " . $color . " dropdown-toggle dropdown-toggle-split\"
                                    data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <span class=\"sr-only\">Toggle Dropdown</span>
                            </button>
                            <div class=\"dropdown-menu\">";
                                        ?>
                                        <?php
                                        for ($m = 0; $m < sizeof($groupingObject); $m++) {
                                            if ($groupingObject[$m]['root_id'] == $groupingObject[$k]['g_id'])
                                                echo "

                                <a class=\"dropdown-item\" onclick=\"getVisitObjectByGroupingId('" . StData::$baseUrl . "','" . $groupingObject[$m]['g_id'] . "')\">" . $groupingObject[$m]['subject'] . "</a>
                                <div class=\"dropdown-divider\"></div>
                               ";
                                        }

                                        echo "                            </div>
                        </div>
                    </div>";

                                    }

                                }
                            }
                            ?>
                        </div>
                    </tr>
                </table>

            </form>
        </div>

        <div id="visitObjectSection">
            <?php

            if ($visitObjects[0]['empty'] == 1)
                echo "<h1 class='EmptyMessage'>" . StData::$emptyMessage . "</h1>";
            else {

                for ($j = 0; $j < sizeof($visitObjects); $j++) {
                    echo "    <div class=\"row featurette\">
       <div class=\"col-lg-3 col-md-4 col-sm-6 col-xs-6 \">
            <img class=\"featurette-image img-fluid mx-auto\" 
                 src='" . StData::$img . $visitObjects[$j]['v_o_id'] . "v_o.png'
                 >
        </div>
        <div class=\"col-md-7\">
            <h2 class=\"featurette-heading SUB visitItemSubject alert alert-primary\">" . $visitObjects[$j]['subject'] . "</h2>
            <p class=\"DES lead visitItemDescription alert alert-warning\" >" . $visitObjects[$j]['small_description'] . "</p>
                                    <a class=\"text-primary \" data-toggle=\"modal\" data-target=\"#myModal\" onclick=\"getCommentForVisitObject('" . StData::$baseUrl . "','" . $visitObjects[$j]['v_o_id'] . "')\">
                            <i class=\"fas fa-comments mr-4 fa-2x\"> </i>
                        </a>
        </div>
        
    </div>

    <hr class=\"featurette-divider\">";
                }

            }

            ?>
        </div>
        <!-- /END THE FEATURETTES -->
    </div>
</div>
