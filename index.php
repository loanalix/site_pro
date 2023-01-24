<!DOCTYPE html>
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

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>The Sense</title>
</head>

<body>
  <div class="up">
    <?php require "component/navbar.php" ?>
    <div class="container">
      <div class="hide-on-med-and-up">
        <p class="transform mobile_title blur">Quand le virtuel devient réel</p>
      </div>
      <div class="row place">
        <div class="col l2 offset-l5 s12 center">
          <a class="waves-effect waves-light btn black discover btn-large" href="#WhatTheSense">Découvrir</a>
        </div>
      </div>
    </div>

    <div class="pres">
      <div class="container">
        <div class="row padding" id="WhatTheSense">
          <div class="col l3 offset-l1">
            <img src="img/logovideo.png" alt="The Sense VR" class="responsive-img border materialboxed">
          </div>
          <div class="col l6 offset-l1">
            <div class="title flex">
              <div>
                <h1 class="vertical_align">
                  Qu'est ce que
                </h1>
              </div>
              <div>
                <img class="vertical_align responsive-img" src="img/logoText.png" alt="The Sense VR">
              </div>
            </div>
            <!-- <h1 class="title transform align_items"> Qu'est ce que <img src="img/logoText.png" alt="The Sense VR"> ?</h1> -->
            <p>Préparez-vous pour une expérience unique qui vous emmenera dans un autre univers. Vivez vos émotions
              comme vous ne l'avez jamais fait aupravant. Avec THE SENSE explorez d'autres dimensions et vivez
              l'impossible en interragissant avec un environnement dynamique et virtuel. Ce n'est pas une expérience
              en réalité virtuelle que vous vivez, c'est la réalité.</p>
            <a href="" class="redirect transform">Découvrez THE SENSE<i
                class="vertical_align material-icons">arrow_forward</i></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div>
      <h2>La réalité à portée de main </h2>
      <p> Vous rêvez de voyager</p>
    </div>
    <h2>Nos expériences les plus appréciées</h2>
    <div class="card borderCard cardWidth">
      <div class="card-image ">
        <img src="img/chateau.png" class="borderCard materialboxed">
        <div class="row">
          <div class="col l1">
            <span class="card-title center">60-90 min <i class="material-icons">timer</i></span>
          </div>
          <div class="col l1 offset-l3">
            <span class="card-title ">2 à 4<i class="material-icons">groups</i></span>
          </div>
        </div>
      </div>
    </div>


  </div>
  </div>
  <h2>Les news du mois</h2>
  <div class="row">
    <div class="col s12 m7 l6">
      <div class="card">
        <div class="card-image">
          <img src="images/sample-1.jpg">
          <span class="card-title">60-90 min</span>
        </div>
        <div class="card-content  grey lighten-2">
          <p>La chasse à oeufs</p>
        </div>
        <div class="card-action">
          <a href="#">Réserver</a>
        </div>
      </div>
    </div>
    <div class="col s12 m7 l6">
      <div class="card">
        <div class="card-image">
          <img src="images/sample-1.jpg">
          <span class="card-title">60-90 min</span>
        </div>
        <div class="card-content  grey lighten-2">
          <p>Un nouvel équipement</p>
        </div>
        <div class="card-action">
          <a href="#">Réserver</a>
        </div>
      </div>
    </div>
  </div>
  </div>
  <?php require "component/carousel.php" ?>
  <?php require "component/footer.php" ?>



  <!-- Script -->
  <script src="js/jquery.min.js"></script>
  <script src="js/materialize.min.js"></script>
  <script src="js/script.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>


</body>

</html>