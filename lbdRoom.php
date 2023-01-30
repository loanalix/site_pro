<!DOCTYPE html>
<?php require_once "cfg/config.php" ?>
<?php require "queries/lbdRoom.php" ?>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="css/style.css" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="css/paragraphe.css" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="css/lbdRoom.css" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="css/animation/animation_light_room_init.css" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="css/animation/animationFunctionCSS.css" media="screen,projection" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Sense</title>
</head>

<body>
    <div class="firstBack">
        <?php require "component/navbar.php" ?>

        <div class="container">
            
            <div class="row place">
                <div class="col l2 offset-l5 s12 center">
                    <a class="waves-effect waves-light btn black discover btn-large" href="#WhatTheSense">Découvrir</a>
                </div>
            </div>
        </div>
    <?php require "component/banner.php" ?>
    </div>
    <div class="container">
        <h2 class="uppercase amikoBold TakePart"><?php echo $data_lbd["h2"] ?></h2>
        <?php require "component/cardActivity.php" ?>
    </div>
    <?php require "component/carousel.php";
    require "component/footer.php"?>
    <script src="js/jquery.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/script.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="js/animation/animationFunction.js"></script>
</body>

</html>