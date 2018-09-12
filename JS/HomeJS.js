function getDownloadObjectHome(baseAddress) {
    $("#parentCard").html(getProgress());
    $.ajax({
        type: 'GET',
        url: baseAddress + "getDownloadObjectByPageId/home",
        data: '',
        success: function (data) {
            getAllGrouping(baseAddress, data);
        },
        error: function (xhr, status, err) {
            $("#parentCard").html(getPageNF());
        }

    });
}

function getAllGrouping(baseAddress, downloadData) {

    $.ajax({
        type: 'GET',
        url: baseAddress + "getAllGrouping",
        data: '',
        success: function (data) {
            getVisitObjectHome(downloadData, baseAddress, data);
        },
        error: function (xhr, status, err) {
            $("#parentCard").html('<h1 style="color: tomato">😁😁😁😁😁 متعصفانه سرورمان در حال گوزیدن است لطفا بینی خودرا گرفنه و فرار کنید</h1>');
        }

    });
}

function getVisitObjectHome(downloadObjectArr, baseAddress, groupingData) {

    $.ajax({
        type: 'GET',
        url: baseAddress + 'getVisitObjectByPageId/home',
        data: '',
        success: function (data) {
            includePages("Home.php", "visit=" + data + "&download=" + downloadObjectArr+"&grouping="+groupingData)
        },
        error: function (xhr, status, err) {
            $("#parentCard").html(getPageNF());
        }
    });
}