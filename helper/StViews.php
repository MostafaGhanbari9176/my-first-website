<?php
/**
 * Created by PhpStorm.
 * User: Mostafa
 * Date: 14/09/2018
 * Time: 12:39 PM
 */

class StViews
{

    public static function getArrowsDown()
    {
        echo "
        
        <style>
    @keyframes pulse {
        0% {
            -webkit-transform: translate(0, 0);
            transform: translate(0, 0);
        }

        50% {
            -webkit-transform: translate(0, 10px);
            transform: translate(0, 10px);
        }
        100% {
            -webkit-transform: translate(0, 0);
            transform: translate(0, 0);
        }
    }

    .chevron {
        width: fit-content;
        margin: auto;
        display: block;
        -webkit-animation: pulse 2s infinite;
        animation: pulse 2s infinite;
        color: var(--primaryColor);
    }

    .chevron.bottom:before {
        top: 0;
        -webkit-transform: rotate(135deg);
        -ms-transform: rotate(135deg);
        transform: rotate(135deg);
    }

    .chevron::before {
        border-style: solid;
        border-width: 0.25em 0.25em 0 0;
        content: '';
        display: inline-block;
        height: 20px;
        position: relative;
        -webkit-transform: rotate(-45deg);
        -ms-transform: rotate(-45deg);
        transform: rotate(-45deg);
        vertical-align: top;
        width: 20px;
    }

    *, *:before, *:after {
        box-sizing: border-box;
    }


</style>
<i class=\"chevron bottom\"></i>

        
        ";
    }

    public static function getArrowsUp()
    {
        echo "
        
        <style>
    @keyframes pulse2 {
        0% {
            -webkit-transform: translate(0, 0);
            transform: translate(0, 0);
        }

        50% {
            -webkit-transform: translate(0, 10px);
            transform: translate(0, 10px);
        }
        100% {
            -webkit-transform: translate(0, 0);
            transform: translate(0, 0);
        }
    }

    .chevron2 {
        width: fit-content;
        margin: auto;
        display: block;
        -webkit-animation: pulse 2s infinite;
        animation: pulse 2s infinite;
        color: white;
    }

    .chevron2.bottom2:before {
        top: 0;
        -webkit-transform: rotate(315deg);
        -ms-transform: rotate(315deg);
        transform: rotate(315deg);
    }

    .chevron2::before {
        border-style: solid;
        border-width: 0.25em 0.25em 0 0;
        content: '';
        display: inline-block;
        height: 20px;
        position: relative;
        -webkit-transform: rotate(90deg);
        -ms-transform: rotate(90deg);
        transform: rotate(90deg);
        vertical-align: top;
        width: 20px;
    }

    *, *:before, *:after {
        box-sizing: border-box;
    }


</style>
<i class=\"chevron2 bottom2\"></i>

        
        ";
    }

    public static function getProgress()
    {
        echo "\n" .
            "<style>\n" .
            "    .animation {\n" .
            "        margin: 128px;\n" .
            "        width: auto;\n" .
            "        height: auto;\n" .
            "        align-self: center;\n" .
            "        justify-content: space-between;\n" .
            "        align-items: stretch;\n" .
            "        flex-wrap: nowrap;\n" .
            "    }\n" .
            "    table {\n" .
            "        margin: auto;\n" .
            "    }\n" .
            "\n" .
            "    .animObject {\n" .
            "        margin: 2px;\n" .
            "        width: 4vw;\n" .
            "        height: 4vw;\n" .
            "        background-color: var(--primaryColor);\n" .
            "        opacity: 0.4;\n" .
            "        animation: opacity 1.6s infinite;\n" .
            "    }\n" .
            "\n" .
            "    .objectOneInProgress {\n" .
            "        animation-delay: -1.6s;\n" .
            "    }\n" .
            "\n" .
            "    .objectTwoInProgress {\n" .
            "        animation-delay: -1.2s;\n" .
            "    }\n" .
            "\n" .
            "    .objectThreeInProgress {\n" .
            "        animation-delay: -0.8s;\n" .
            "    }\n" .
            "\n" .
            "    .objectFourInProgress {\n" .
            "        animation-delay: -0.4s;\n" .
            "    }\n" .
            "\n" .
            "    @keyframes opacity {\n" .
            "        0% {\n" .
            "            opacity: 1;\n" .
            "        }\n" .
            "        100% {\n" .
            "            opacity: 0.4;\n" .
            "        }\n" .
            "    }\n" .
            "\n" .
            "    @-webkit-keyframes opacity {\n" .
            "        0% {\n" .
            "            opacity: 1;\n" .
            "        }\n" .
            "        100% {\n" .
            "            opacity: 0.4;\n" .
            "        }\n" .
            "    }\n" .
            "\n" .
            "</style>\n" .
            "<div class=\"animation\">\n" .
            "    <table>\n" .
            "        <tr>\n" .
            "            <td>\n" .
            "                <div class='objectOneInProgress animObject rounded-circle'></div>\n" .
            "            </td>\n" .
            "            <td>\n" .
            "                <div class='objectFourInProgress animObject rounded-circle'></div>\n" .
            "            </td>\n" .
            "        </tr>\n" .
            "        <tr>\n" .
            "            <td>\n" .
            "                <div class='objectTwoInProgress animObject rounded-circle'></div>\n" .
            "            </td>\n" .
            "            <td>\n" .
            "                <div class='objectThreeInProgress animObject rounded-circle'></div>\n" .
            "            </td>\n" .
            "        </tr>\n" .
            "\n" .
            "    </table>\n" .
            "</div>";
    }

}