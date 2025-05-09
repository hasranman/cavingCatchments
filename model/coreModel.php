<?php

function getNavbar() {

    // $dir = str_replace("\\","/", $_SERVER['DOCUMENT_ROOT']);
    $navbar = '
        <div class="toolbar col-md-12 col-sm-12">
        <div class="btn col-md-4 col-sm-4">
            <a href="http://localhost:8000/index.php">Home</a>
        </div>
        <div class="btn col-md-4 col-sm-4">
            <a href="http://localhost:8000/view/caveLists.php">Caving Areas</a>
        </div>        
        <div class="btn col-md-4 col-sm-4">
            <a href="http://localhost:8000/view/login.php">Log In</a>
        </div>              
    </div>
    ';
    return $navbar;
}
?>