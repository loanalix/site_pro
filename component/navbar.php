<nav class="transparent hide-on-small-only">
    <div class="navbar margin amikoRegular uppercase">
        <a href="index.php" class="brand-logo"><img src="img/logo/theSense1.png" alt="the sense VR"
                class="the_sense_logo"></a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons black-text">menu</i></a>
        <ul class="right">
            <div class="hide-on-med-only">
                <li><a href="news.php?id=9" class="black-text">News</a></li>
                <li class="border_li margin">
                    <div class="border_div margin"></div>
                </li>
                <li><a href="lbdRoom.php?id=2" class="black-text">Nos expériences</a></li>
                <li class="border_li margin">
                    <div class="border_div margin"></div>
                </li>
                <li><a href="" class="black-text">À propos de nous</a></li>
                <li class="border_li margin">
                    <div class="border_div margin"></div>
                </li>
                <li><a href="" class="black-text">Nos Équipements</a></li>
                <li class="border_li margin">
                    <div class="border_div margin"></div>
                </li>
                <li>
                    <?php if (isset($_SESSION['user'])) { ?>
                        <a href="#modal1" class="black-text modal-trigger bold">
                            <?php echo $_SESSION['user']["name"] ?>
                        </a>
                    <?php } else { ?>
                        <a href="#modal" class="black-text modal-trigger bold">Connexion</a>
                    <?php } ?>
            </div>
        </ul>
    </div>
</nav>

<nav class="transparent hide-on-med-and-up">
    <div class="navbar amikoRegular margin">
        <a href="#!" class="brand-logo"><img src="img/logo/theSense1.png" alt="the sense"
                class="the_sense_logo left"></a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger right"><i
                class="material-icons black-text">menu</i></a>
    </div>
</nav>

<ul class="sidenav uppercase" id="mobile-demo">
    <li><a href="sass.html">News</a></li>
    <li><a href="creative.php">Nos expériences</a></li>
    <li><a href="collapsible.html">À propos de nous</a></li>
    <li><a href="mobile.html">Nos Équipements</a></li>
    <li><a href="#modal1" class="modal-trigger">Connexion</a></li>
</ul>
<?php if (isset($_SESSION['user'])) { ?>
    <div id="modal1" class="modal">
        <div class="modal-content border">
            <h4 class="right-align amikoBold">Bonjour,
                <?php echo $_SESSION['user']["name"] ?>
            </h4>
            <form method="post" action="action/login.php" enctype="multipart/form-data">
                <div class="input-field">
                    <div class="row valign-wrapper">
                        <div class="col l3 m2 right-align">
                            <p class="tbMargin textForm amikoRegular color_text">Ma réservation</p>
                        </div>
                        <div class="input-field col l9 m10">
                            <p>Aucune réservation en cours </p>
                        </div>
                    </div>
                </div>
                <div class="input-field">
                    <div class="row valign-wrapper">
                        <div class="col l3 m2 center">
                            <p class="tbMargin textForm amikoRegular color_text">Mes points</p>
                        </div>
                        <div class="input-field col l9 m10">
                            <p> A compléter</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col l4">
                        <a href="account.php" class="black-text">Paramètres du compte <i
                                class="material-icons">settings</i></a>
                    </div>
                    <?php if ($_SESSION['user']["admin"] == 1) { ?>
                        <div class="col l4">
                            <a href="admin_panel.php" class="black-text">Panel Admin</a>
                        </div>
                    <?php } ?>
                    <div class="col l2 offset-l6 s1 m1">
                        <a href="action/logout.php" class="black-text">Déconnexion</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php } else { ?>
    <div id="modal" class="modal">
        <div class="modal-content border">
            <h4 class="right-align uppercase amikoBold">Connexion</h4>
            <form method="post" action="action/login.php" enctype="multipart/form-data">
                <div class="input-field">
                    <div class="row valign-wrapper">
                        <div class="col l2 m2 right-align">
                            <p class="tbMargin textForm amikoRegular color_text">Identifiant</p>
                        </div>
                        <div class="input-field col l10 m10">
                            <input type='email' name='email' id='email' />
                            <label for="email">Entrer votre identifiant</label>
                        </div>
                    </div>
                </div>
                <div class="input-field">
                    <div class="row valign-wrapper">
                        <div class="col l2 m2 center">
                            <p class="tbMargin textForm amikoRegular color_text">Mot de passe</p>
                        </div>
                        <div class="input-field col l10 m10">
                            <input type='password' name='password' id='password' />
                            <label for="password">Entrer votre mot de passe</label>
                            <span toggle="#password" class="field-icon right toggle-password"><span
                                    class="material-icons">visibility</span></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col l2 offset-l8 right-align">
                        <a href="account.php" class="tbMargin color_text abel">Crée un compte</a>
                    </div>
                    <div class="col l1 s1 m1">
                        <button class="btn black right-align border" type="submit">Connexion</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php } ?>