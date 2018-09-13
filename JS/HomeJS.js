function getAllGrouping(baseAddress, downloadData) {

    $.ajax({
        type: 'GET',
        url: baseAddress + "getAllGrouping",
        data: '',
        success: function (data) {
            getVisitObjectHome(downloadData, baseAddress, data,true);
        },
        error: function (xhr, status, err) {
            $("#parentCard").html(getPageNF());
        }

    });
}
/*//////////////////////////////////////////////////////////  DOWNLOAD SECTION  //////////////////////////////////////////////////////////////////////////*/
function getDownloadObjectHome(baseAddress,firstShow) {

    if(firstShow) {

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
    else{
        $("#showAllDownloadObjectButton").hide(1000);
        $.ajax({
            type: 'GET',
            url: baseAddress + 'getDownloadObjectByPageId/home',
            data: '',
            success: function (data) {
                includeDownloadObjects("homeSection/DownloadObjectSection.php", "objects=" + data)
            },
            error: function (xhr, status, err) {
                $("#downloadObjectSection").html(getPageNF());
            }
        });
    }
}


function getDownloadObjectByGroupingId(baseAddress ,gId) {
    $("#showAllDownloadObjectButton").show(1000);
    $.ajax({
        type: 'GET',
        url: baseAddress + 'getDownloadObjectByGroupingId/'+gId,
        data: '',
        success: function (data) {
            includeDownloadObjects("homeSection/DownloadObjectSection.php", "objects=" + data)
        },
        error: function (xhr, status, err) {
            $("#downloadObjectSection").html(getPageNF());
        }
    });
}

function getDownloadObjectByRootIdGrouping(baseAddress ,gId) {
    $("#showAllDownloadObjectButton").show(1000);
    $.ajax({
        type: 'GET',
        url: baseAddress + 'getDownloadObjectByRootIdGrouping/'+gId,
        data: '',
        success: function (data) {
            includeDownloadObjects("homeSection/DownloadObjectSection.php", "objects=" + data)
        },
        error: function (xhr, status, err) {
            $("#downloadObjectSection").html(getPageNF());
        }
    });
}

function includeDownloadObjects(pageAddress, data) {

    const includeDestination = document.getElementById('downloadObjectSection');
    includeDestination.innerHTML = getProgress();
    $.ajax({
        type: 'POST',
        url: pageAddress,

        data: (data),
        success: function (data) {
            $("#downloadObjectSection").html(data);
            setErrorImage();
        },
        error: function (xhr, status, err) {
            $("#downloadObjectSection").html(getPageNF());

        }
    });

}

/*///////////////////////////////////////////////////  VISIT SECTION  /////////////////////////////////////////////////////////////*/

function getVisitObjectByGroupingId(baseAddress ,gId) {
    $("#showAllVisitObjectButton").show(1000);
    $.ajax({
        type: 'GET',
        url: baseAddress + 'getVisitObjectByGroupingId/'+gId,
        data: '',
        success: function (data) {
            includeVisitObjects("homeSection/VisitObjectSection.php", "objects=" + data)
        },
        error: function (xhr, status, err) {
            $("#visitObjectSection").html(getPageNF());
        }
    });
}

function getVisitObjectByRootIdGrouping(baseAddress ,gId) {
    $("#showAllVisitObjectButton").show(1000);
    $.ajax({
        type: 'GET',
        url: baseAddress + 'getVisitObjectByRootIdGrouping/'+gId,
        data: '',
        success: function (data) {
            includeVisitObjects("homeSection/VisitObjectSection.php", "objects=" + data)
        },
        error: function (xhr, status, err) {
            $("#visitObjectSection").html(getPageNF());
        }
    });
}

function includeVisitObjects(pageAddress, data) {

    const includeDestination = document.getElementById('visitObjectSection');
    includeDestination.innerHTML = getProgress();
    $.ajax({
        type: 'POST',
        url: pageAddress,

        data: (data),
        success: function (data) {
            $("#visitObjectSection").html(data);
            setErrorImage();
        },
        error: function (xhr, status, err) {
            $("#visitObjectSection").html(getPageNF());

        }
    });

}

function getVisitObjectHome(downloadObjectArr, baseAddress, groupingData,firstVisit) {
    if(firstVisit) {

        $.ajax({
            type: 'GET',
            url: baseAddress + 'getVisitObjectByPageId/home',
            data: '',
            success: function (data) {
                includePages("homeSection/Home.php", "visit=" + data + "&download=" + downloadObjectArr + "&grouping=" + groupingData)
            },
            error: function (xhr, status, err) {
                $("#parentCard").html(getPageNF());
            }
        });
    }
    else{
        $("#showAllVisitObjectButton").hide(1000);
        $.ajax({
            type: 'GET',
            url: baseAddress + 'getVisitObjectByPageId/home',
            data: '',
            success: function (data) {
                includeVisitObjects("homeSection/VisitObjectSection.php", "objects=" + data)
            },
            error: function (xhr, status, err) {
                $("#visitObjectSection").html(getPageNF());
            }
        });
    }
}


/*'<h1 style="color: tomato">😁😁😁😁😁 متعصفانه سرورمان در حال گوزیدن است لطفا بینی خودرا گرفنه و فرار کنید</h1>'*/