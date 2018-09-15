<?php
/**
 * Created by PhpStorm.
 * User: Mostafa
 * Date: 15/09/2018
 * Time: 12:49 PM
 */
require '../helper/StData.php';
$object = json_decode($_POST['objects'], true);


function getComments($data)
{
    $returnData = "";

    if ($data[0]['empty'] == 1)
        return "<h1 class='EmptyMessage'>هیچ دیدگاهی موجود نیست</h1>";

    for ($i = 0; $i < sizeof($data); $i++) {
        $returnData .= "<div class=\"commentParent\" style='direction: rtl'>
    <img class=\"commentImage rounded-circle\" src=\"helper/img/logo.png\">
    <div class=\"commentSubject\">" . $data[$i]['user_name'] . "</div>
    <div class=\"commentSubject\">" . $data[$i]['com_date'] . "</div>
    <p class=\"commentText\">" . $data[$i]['que_text'] . "</p>
</div>";
    }

    return $returnData;
}

echo "

<form action='" . StData::$baseUrl . "saveComment' method=\"post\" enctype=\"application/x-www-form-urlencoded\">
                    <input name='o_id' type='hidden' id='O_ID' >
                    <script> document.getElementById('O_ID').value = ObjectId; </script>
                    <div class=\"card bg-primary text-light font-weight-bold border-primary\" style='margin-bottom: 32px'>
                        <div class=\"card-header text-right\">
                            ثبت نظر
                        </div>
                        <div class=\"card-body bg-light\">
                            <div class=\"getCommentData\">

                                <div class=\"input-group mb-3\">
                                    <input type=\"text\" class=\"form-control text-right\" name=\"user_name\">
                                    <div class=\"input-group-append\">
                                        <span class=\"input-group-text\" id=\"basic-addon1\">نام</span>
                                    </div>
                                </div>

                                <div class=\"input-group mb-3\">
                                    <input type=\"email\" class=\"form-control text-right\" name=\"user_mail\">
                                    <div class=\"input-group-append\">
                                        <span class=\"input-group-text\" id=\"basic-addon1\">آدرس ایمیل</span>
                                    </div>
                                </div>

                                <div class=\"input-group mb-3\">
                                    <textarea class=\"form-control text-right\" aria-label=\"With textarea\" name=\"que_text\"></textarea>
                                    <div class=\"input-group-append\">
                                        <span class=\"input-group-text\" id=\"basic-addon1\">متن دیدگاه</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class=\"card-footer text-right bg-light\">
                            <button class=\"btn btn-outline-success\" type=\"submit\">ارسال</button>
                        </div>
                    </div>
                </form>" . getComments($object);
