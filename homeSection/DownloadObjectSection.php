<?php
/**
 * Created by PhpStorm.
 * User: Mostafa
 * Date: 13/09/2018
 * Time: 01:27 PM
 */

require '../helper/StData.php';

$downloadObject = json_decode($_POST['objects'], true);
 if ($downloadObject[0]['empty'] == 1)
    echo "<h1 class='EmptyMessage'>" . StData::$emptyMessage . "</h1>";
else {
    for ($i = 0; $i < sizeof($downloadObject); $i++) {
        echo "
             
         <div class='col-lg-3 col-md-4 col-sm-6 col-xs-6 ' style='margin-top: 32px'>
            <div class='downloadObjectParent'>
            <img class=\"rounded-circle small-img\" src='" . StData::$img . $downloadObject[$i]['d_o_id'] . "d_o.jpg'  alt=" . $downloadObject[$i]['subject'] . ">
           
            <h2 class='SUB downloadItemSubject'>" . $downloadObject[$i]['subject'] . "</h2>
            <p class='DES downloadItemDescription'>" . $downloadObject[$i]['small_description'] . "</p>
            <a class=\"DES btn btn-primary btnDownload mx-auto\" href=" . $downloadObject[$i]['down_link'] . " role=\"button\">دانلود</a>
        </div>
        </div><!-- /.col-lg-4 -->
             
             ";
    }
}