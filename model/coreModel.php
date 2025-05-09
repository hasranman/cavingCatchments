<?php

function getNavbar() {

    // $dir = str_replace("\\","/", $_SERVER['DOCUMENT_ROOT']);
    $dir = 'http://localhost:8000';
    $navbar = '
        <div class="toolbar col-md-12 col-sm-12">
        <div class="col-md-3 col-sm-3">
            <a class="btn" href="'.$dir.'/index.php">Home</a>
        </div>
        <div class="col-md-3 col-sm-3">
            <a class="btn" href="'.$dir.'/view/caveLists.php">Caving Areas</a>
        </div>        
        <div class="col-md-3 col-sm-3">
            <a class="btn" href="'.$dir.'/view/login.php">Log In</a>
        </div>              
    </div>
    ';
    return $navbar;
}
?>