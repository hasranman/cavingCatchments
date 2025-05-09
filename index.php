<!DOCTYPE html>

<?php
    require_once("model/coreModel.php");
?>

<html>
    <head>
        <script src="view/scripts/jquery-3.7.1.min.js"></script>
        <script src="view/scripts/index.js"></script>
        <link rel="stylesheet" type="text/css" href="view/style/nav.css">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    </head>
    <body>
        <header>
            <?= getNavbar(); ?>
        </header>
        <div>
        Welcome to the Explorer Logs
        </div>

    </body>
</html>