<?php 

require_once("../cavingCatchments/model/catchmentsModel.php");

$action = $_POST['userAction'];
$area = $_POST['areaAction'];

switch ($action){
    case "areas":
        $areas = getAreas($area);
        echo json_encode($areas);
        break;
    default:
        echo json_encode(false);
        break;
}

?>