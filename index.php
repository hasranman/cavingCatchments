<?php
    require_once('catchmentsModel.php');
    require_once('coreModel.php');
?>


<html>
    <head>
        <script src="jquery-3.7.1.min.js"></script>
        <script src="index.js"></script>
    </head>
    <body>
        <header>List of caving regions</header>
        <form name="cavingAreas" action="" method="post">
            <select id="areaDropdown" name="areaDropdown" onclick="getAreas(this.value)">
                <option value="ALL">All</option>
                <option value="YORKSHIREDALES">Yorkshire Dales</option>
                <option value="PEAKDISTRICT">Peak District</option>
                <option value="MENDIPS">Mendips</option>
            </select>
        </form>
        <?php


        // $list = printNestedArray($regions, '');
        
        ?>
        <div class="row">
            <div class="list">
                <!-- <?= $list ?> -->
            </div>
        </div>
    </body>
</html>