function includePages(pageAddress) {
    const includeDestination = document.getElementById('parentCard');
    includeDestination.innerHTML = getProgress();
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4) {
            if (this.status == 200) {

                includeDestination.innerHTML = this.responseText;
            }
            if (this.status == 404) {
                includeDestination.innerHTML = "Page not found.";
            }

        }
    }
    xhttp.open("GET", pageAddress, true);
    xhttp.send();
}


function getProgress() {
    return "<style>\n    .animation{\n    margin: 128px;\n        width: auto;\n        height: auto;\n        align-self: center;\n        justify-content: space-between ;\n        align-items: stretch;\n        flex-wrap: nowrap;\n    }\n    .animObject{\n    margin: 4px;\n        width: 50px;\n        height: 50px;\n        background-color: tomato;\n        opacity: 0.4;\n        animation: opacity 1.6s infinite;\n    }\n\n   .objectOneInProgress{\n        animation-delay: -1.6s;\n    }\n    .objectTwoInProgress{\n        animation-delay: -1.2s;\n    }\n    .objectThreeInProgress{\n        animation-delay: -0.8s;\n    }\n    .objectFourInProgress{\n        animation-delay: -0.4s;\n    }\n    \n    @keyframes opacity {\n        0%{opacity: 1;}\n        100%{opacity: 0.4;}\n    }\n\n    @-webkit-keyframes opacity {\n        0%{opacity: 1;}\n        100%{opacity: 0.4;}\n    }\n\n</style>\n<div class=\"animation\">\n    <div class='row'>\n    <div class='objectOneInProgress animObject' ></div>\n    <div class='objectFourInProgress animObject' ></div>\n</div>\n  <div class='row'>\n    <div class='objectTwoInProgress animObject' ></div>\n    <div class='objectThreeInProgress animObject' ></div>\n</div>\n</div>";
}