"use strict";

function getAreas(area) {
    const data = {
        userAction: "areas", areaAction: area
    };
    const controller = "../cavingCatchments/controller/catchmentsController.php";
    $.ajax({
        type: "POST",
        url: controller,
        data: data,
        dataType: "json",
        async: true,
        success: function (response) {
            let list = "";
            list = displayAreasList(response, list);
            document.getElementById('areaList').innerHTML = list; // Security risk, address later
            return response;
        },
        error: function (response) {
            console.log("ERROR");
        }
    });
}

function displayAreasList(areas, list) {
    list += '<ul>';
    for (const area of areas) {
        list += '<li>' + area.name;
        list = displayAreasList(area.subAreas, list);
        list += "</li>";

    }

    list += '</ul>';

    return list;

}