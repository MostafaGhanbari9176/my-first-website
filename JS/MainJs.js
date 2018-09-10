function setErrorImage() {

/*   let imgElements = document.getElementsByTagName('img');
    for(let i=0;i<imgElements.length ;i++){
        imgElements[i].;
    }*/

}

function includePages(pageAddress, data) {
    const includeDestination = document.getElementById('parentCard');
    includeDestination.innerHTML = getProgress();
    $.ajax({
        type: 'POST',
        url: pageAddress,

        data: (data),
        success: function (data) {
            $("#parentCard").html(data);
            setErrorImage();
        },
        error: function (xhr, status, err) {
            $("#parentCard").html(getPageNF());

        }
    });

}


function getProgress() {
    return "\n" +
        "<style>\n" +
        "    .animation {\n" +
        "        margin: 128px;\n" +
        "        width: auto;\n" +
        "        height: auto;\n" +
        "        align-self: center;\n" +
        "        justify-content: space-between;\n" +
        "        align-items: stretch;\n" +
        "        flex-wrap: nowrap;\n" +
        "    }\n" +
        "    table {\n" +
        "        margin: auto;\n" +
        "    }\n" +
        "\n" +
        "    .animObject {\n" +
        "        margin: 2px;\n" +
        "        width: 4vw;\n" +
        "        height: 4vw;\n" +
        "        background-color: currentColor;\n" +
        "        opacity: 0.4;\n" +
        "        animation: opacity 1.6s infinite;\n" +
        "    }\n" +
        "\n" +
        "    .objectOneInProgress {\n" +
        "        animation-delay: -1.6s;\n" +
        "    }\n" +
        "\n" +
        "    .objectTwoInProgress {\n" +
        "        animation-delay: -1.2s;\n" +
        "    }\n" +
        "\n" +
        "    .objectThreeInProgress {\n" +
        "        animation-delay: -0.8s;\n" +
        "    }\n" +
        "\n" +
        "    .objectFourInProgress {\n" +
        "        animation-delay: -0.4s;\n" +
        "    }\n" +
        "\n" +
        "    @keyframes opacity {\n" +
        "        0% {\n" +
        "            opacity: 1;\n" +
        "        }\n" +
        "        100% {\n" +
        "            opacity: 0.4;\n" +
        "        }\n" +
        "    }\n" +
        "\n" +
        "    @-webkit-keyframes opacity {\n" +
        "        0% {\n" +
        "            opacity: 1;\n" +
        "        }\n" +
        "        100% {\n" +
        "            opacity: 0.4;\n" +
        "        }\n" +
        "    }\n" +
        "\n" +
        "</style>\n" +
        "<div class=\"animation\">\n" +
        "    <table>\n" +
        "        <tr>\n" +
        "            <td>\n" +
        "                <div class='objectOneInProgress animObject rounded-circle'></div>\n" +
        "            </td>\n" +
        "            <td>\n" +
        "                <div class='objectFourInProgress animObject rounded-circle'></div>\n" +
        "            </td>\n" +
        "        </tr>\n" +
        "        <tr>\n" +
        "            <td>\n" +
        "                <div class='objectTwoInProgress animObject rounded-circle'></div>\n" +
        "            </td>\n" +
        "            <td>\n" +
        "                <div class='objectThreeInProgress animObject rounded-circle'></div>\n" +
        "            </td>\n" +
        "        </tr>\n" +
        "\n" +
        "    </table>\n" +
        "</div>";
}

function getPageNF() {
    return "\n" +
        "        <style>\n" +
        "            .pageNotFound{\n" +
        "                margin:64px;\n" +

        "            }\n" +
        "            h1{\n" +
        "                margin:0;\n" +
        "                font-size:48px;\n" +
        "                font-weight:normal;\n" +
        "                line-height:48px;\n" +
        "            }\n" +
        "            strong{\n" +
        "                display:inline-block;\n" +
        "                width:65px;\n" +
        "            }\n" +
        "        </style>\n" +
        "    \n" +
        "    <div class='pageNotFound'>\n" +
        "        <h1>Page Not Found</h1>\n" +
        "        <p>\n" +
        "            The page you are looking for could not be found. Check the address bar\n" +
        "            to ensure your URL is spelled correctly. If all else fails, you can\n" +
        "            visit our home page at the link below.\n" +
        "        </p>\n" +
        "        <a href='http://localhost:8080/ohoh/ahah/ohoh/ahah/ohoh/ahah/ohoh/ahah/ohoh/ahah/ohoh/ahah/ohoh/ahah/'>Visit the Home Page</a>\n" +
        "    </div>";
}