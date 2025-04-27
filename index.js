function getAreas(area) {
    const data = {
        userAction:"areas",areaAction:area
    };
    const controller = "catchmentsController.php";
    $.ajax({
        type: "POST",
        url: controller,
        data: data,
        dataType: "json",
        async: true,
        success: function(response) {
            console.log("SUCCESS");
            list = printNestedArray(response, "");
            console.log(list);
            return response;
        },
        error: function (response) {
            console.log("ERROR");
        }
    });
}

function printNestedArray(array, list) {
    var list = '<ul>';
    console.log(typeof(array));
    for (let i = 0; i < Object.keys(array).length; i++) {
        console.log(array[i].val());
        console.log(typeof(array[i].val()));
        if(typeof((array[i].val()))=="object") {
            console.log("i'm in");
            list += '<li>' + array[i].key() + '</li>';
            list += printNestedArray(array[i].val(), list);
            continue;
            }
            $list += '<li>' + array[i].val() + '</li>';
        }

    list += '</ul>';
    return list;        
}