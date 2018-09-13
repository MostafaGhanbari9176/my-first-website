<?php
/**
 * Created by PhpStorm.
 * User: Mostafa
 * Date: 13/09/2018
 * Time: 01:28 PM
 */
require '../helper/StData.php';
$visitObjects = json_decode($_POST['objects'], true);
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
            <h2 class=\"featurette-heading visitItemSubject\">" . $visitObjects[$j]['subject'] . "</h2>
            <p class=\"lead visitItemDescription\" >" . $visitObjects[$j]['small_description'] . "</p>
        </div>
        
    </div>

    <hr class=\"featurette-divider\">";
            }

        }