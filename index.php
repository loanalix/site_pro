<!DOCTYPE html>
<?php require_once "cfg/config.php" ?>
<?php require "queries/faq.php" ?>
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
  <link type="text/css" rel="stylesheet" href="css/home.css" media="screen,projection" />

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>The Sense</title>
</head>

<body>
  <div class="bgsense">
    <!-- On appel le component navbar -->
    <?php require "component/navbar.php" ?>
    <?php echo isset($_SESSION['error']) ? $_SESSION['error'] : "";
    unset($_SESSION['error']); ?>

    <!-- Première partie du site -->
    <div class="container">
      <div class="hide-on-med-and-up">
        <p class="uppercase mobile_title blur">Quand le virtuel devient réel</p>
      </div>
      <div class="row place">
        <div class="col l2 offset-l5 s12 center ">
          <a class="waves-effect waves-light btn black discover btn-large" href="#WhatTheSense">Découvrir</a>
        </div>
      </div>
    </div>

    <!-- Présentation de la première "bannière" Qu'est ce que The sense -->
    <?php require "component/banner.php" ?>
  </div>
  <div class="bgSecond">
    <!-- Paragraphe la réalité à portée de main -->
    <div class="container">
      <div>
        <h2 class="titlecard amikoRegular color_title uppercase tbMargin tPadding">La réalité à portée de main </h2>
        <p> Vous rêvez de voyager</p>
      </div>
      <?php require "component/cardActivity.php" ?>
    </div>
    <!--  Les deux cards pour les news du mois  -->
    <div class="row">
      <div class="col s12 m6 l6 center">
        <h2 class="titlecard color_title amikoRegular hide-on-small-only">LES NEWS DU MOIS</h2>
      </div>
    </div>
    <!-- Les news -->
    <div class="row rowCard hide-on-small-only">
      <div class="container">
        <?php require "component/cardNews.php" ?>
      </div>
    </div>

    <div class="container">
    <?php require "component/paragraphe.php" ?>
    </div>
    <!-- import des component carousel foire au questions et footer -->
    <?php require "component/carousel.php" ?>
    <h3 class="titlecard color_title amikoRegular">FOIRE AUX QUESTIONS</h3>
    <ul class="collapsible">
      <?php foreach ($data_faq as $faq) { ?>
        <li>
          <div class="collapsible-header paragraph able color_text"><i class="material-icons">add_circle</i>
            <?php echo $faq["question"] ?>
          </div>
          <div class="collapsible-body"><span>
              <?php echo $faq["answer"] ?>
            </span></div>
        </li>
      <?php } ?>
    </ul>
    <?php require "component/footer.php" ?>
  </div>

  <!-- Script -->
  <script src="js/jquery.min.js"></script>
  <script src="js/materialize.min.js"></script>
  <script src="js/script.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>


</body>

</html>