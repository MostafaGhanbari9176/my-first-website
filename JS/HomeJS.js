function getDownloadObjectHome(baseAddress) {
    $("#parentCard").html(getProgress());
    $.ajax({
        type: 'GET',
        url: baseAddress + "getDownloadObjectByPageId/home",
        data: '',
        success: function (data) {
            getVisitObjectHome(data, baseAddress);
        },
        error: function (xhr, status, err) {
            $("#parentCard").html(getPageNF());
        }

    });
}

function getVisitObjectHome(downloadObjectArr, baseAddress) {

$.ajax({
    type: 'GET',
    url: baseAddress+'getVisitObjectByPageId/home',
    data: '',
    success:function (data) {
        includePages("Home.php", "visit="+data+"&download="+downloadObjectArr)
    },
    error:function (xhr, status, err) {
        $("#parentCard").html(getPageNF());
    }
});
}