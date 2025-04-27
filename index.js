"use strict";

function getAreas(area) {
    const data = {
        userAction: "areas", areaAction: area
    };
    const controller = "catchmentsController.php";
    $.ajax({
        type: "POST",
        url: controller,
        data: data,
        dataType: "json",
        async: true,
        success: function (response) {
            console.log("SUCCESS");
            let list = "";
            list = displayAreasList(response, list);
            console.log(list);
            console.log("final")
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
    console.log(areas);
    for (const area of areas) {
        console.log(area);
        list += '<li>' + area.name;

        list = displayAreasList(area.subAreas, list);

        list += "</li>";

    }
    // for (let i = 0; i < Object.keys(array).length; i++) {
    //     console.log(array[i].val());
    //     console.log(typeof(array[i].val()));
    //     if(typeof((array[i].val()))=="object") {
    //         console.log("i'm in");
    //         list += '<li>' + array[i].key() + '</li>';
    //         list += printNestedArray(array[i].val(), list);
    //         continue;
    //         }
    //         $list += '<li>' + array[i].val() + '</li>';
    //     }

    list += '</ul>';

    return list;

}