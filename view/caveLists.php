<?php
    require_once('../model/catchmentsModel.php');
    require_once('../model/coreModel.php');
require_once('');
?>


<html>
    <head>
        <script src="../scripts/jquery-3.7.1.min.js"></script>
        <script src="../scripts/caveLists.js"></script>
        <link rel="stylesheet" type="text/css" href="..style/nav.css">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    </head>
    <body>
        <header>
            <?php 
                include("nav.php");
            ?>
        </header>
            <form name="cavingAreas" action="" method="post">
                <select id="areaDropdown" name="areaDropdown" onclick="getAreas(this.value)">
                    <option value="ALL">All</option>
                    <option value="YORKSHIREDALES">Yorkshire Dales</option>
                    <option value="PEAKDISTRICT">Peak District</option>
                    <option value="MENDIPS">Mendips</option>
                </select>
            </form>
            
            <?= print_r(dirname($_SERVER['SCRIPT_NAME']),true); ?>

    
        <div class="row">
            <div id="areaList" class="list">
            </div>
        </div>
    </body>
</html>