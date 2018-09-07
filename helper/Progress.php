<?php
/**
 * Created by PhpStorm.
 * User: Mostafa
 * Date: 07/09/2018
 * Time: 04:29 PM
 */

class Progress
{

    public static function getProgressHtml()
    {
        echo "
        
        
<style>
    .animation{
    margin: 128px;
        width: auto;
        height: auto;
        align-self: center;
        justify-content: space-between ;
        align-items: stretch;
        flex-wrap: nowrap;
    }
    .animObject{
    margin: 4px;
        width: 50px;
        height: 50px;
        background-color: tomato;
        opacity: 0.4;
        animation: opacity 1.6s infinite;
    }

   .objectOneInProgress{
        animation-delay: -1.6s;
    }
    .objectTwoInProgress{
        animation-delay: -1.2s;
    }
    .objectThreeInProgress{
        animation-delay: -0.8s;
    }
    .objectFourInProgress{
        animation-delay: -0.4s;
    }
    
    @keyframes opacity {
        0%{opacity: 1;}
        100%{opacity: 0.4;}
    }

    @-webkit-keyframes opacity {
        0%{opacity: 1;}
        100%{opacity: 0.4;}
    }

</style>
<div class=\"animation\">
    <div class='row'>
    <div class='objectOneInProgress animObject' ></div>
    <div class='objectFourInProgress animObject' ></div>
</div>
  <div class='row'>
    <div class='objectTwoInProgress animObject' ></div>
    <div class='objectThreeInProgress animObject' ></div>
</div>
</div>
        
        ";
    }
}