<!DOCTYPE html>
<?php require_once "cfg/config.php" ?>
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
    <link type="text/css" rel="stylesheet" href="css/account.css" media="screen,projection" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Compte</title>
</head>

<body>
    <div class="row background">
        <?php require "component/navbar.php" ?>
        <h1 class="uppercase center white-text bold marginAccount sizeAccount hide-on-small-only">Les News</h1>
    </div>

    <div class="container">
        <div class="row">
            <?php require "component/cardNews.php" ?>
        </div>
    </div>
    
    <?php require "component/footer.php" ?>
    <script src="js/jquery.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/script.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>

</html>