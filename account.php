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
        <h1 class="uppercase center white-text bold marginAccount sizeAccount hide-on-small-only">Mon compte</h1>
    </div>
    <div class="background2">
        <div class="container">
            <?php require "queries/user.php";
            if (isset($_SESSION['user'])) { ?>
                <form action="action/updateMail.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col l5 offset-l4">
                            <span>Mon adresse mail</span>
                            <div class="input-field inline widthLine">
                                <input type="email" name="mail" value="<?php echo $modif['mail'] ?>" />
                            </div>
                        </div>
                        <div class="col l2 s8 offset-s2 left-align">
                            <div class="input-field inline widthLine">
                                <button class="btn center border black" type="submit">Modifier</button>
                            </div>
                        </div>
                    </div>
                </form>
                <form action="action/updatePassword.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col l5 offset-l4">
                            <span>Mot de passe</span>
                            <div class="input-field inline widthLine">
                                <input type='password' id="password3" name='password' 
                                <?php echo empty($_SESSION['verif']) || !$_SESSION['verif']?"disabled" : ""?> 
                                value="<?php echo empty($_SESSION['verif']) || !$_SESSION['verif']?"Lilian" : ""?>" 
                                placeholder="<?php echo isset($_SESSION['verif']) && $_SESSION['verif']?"Entrer votre nouveau mot de passe" : ""?>" />
                                <?php if (isset($_SESSION['verif']) && $_SESSION['verif']){?>
                                        <span toggle3="#password3" class="field-icon right toggle-password3"><span
                                        class="material-icons">visibility</span></span>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="col l2 s8 offset-s2">
                            <div class="input-field inline widthLine">
                                <button <?php echo empty($_SESSION['verif']) || !$_SESSION['verif'] ? "data-target='modal3'" : "" ?>
                                    class="btn center border black modal-trigger" type="submit">Modifier</button>
                                <?php unset($_SESSION['verif']) ?>
                            </div>
                        </div>
                    </div>
                </form>
                <div id="modal3" class="modal">
                    <form action="action/verifPassword.php" method="post" enctype="multipart/form-data">
                        <span>Veuillez entrer votre ancien mot de passe</span>
                        <div class="input-field inline widthLine">
                            <input type='password' name='password' id='password1' />
                            <span toggle1="#password1" class="field-icon right toggle-password1"><span
                                    class="material-icons">visibility</span></span>
                        </div>
                        <button class="btn center border black modal-trigger" type="submit">Valider</button>
                    </form>
                </div>
                <div id="modal4" class="modal">
                    <form action="">
                        <span>Nouveau mot de passe</span>
                        <div class="input-field inline widthLine">
                            <input type='password' name='password' id='password1' />
                            <span toggle1="#password1" class="field-icon right toggle-password1"><span
                                    class="material-icons">visibility</span></span>
                        </div>
                        <button <?php echo $_SESSION['verif'] == true ? 'data-target="modal4"' : "" ?>
                            class="btn center border black modal-trigger" type="submit">Modifier</button>
                    </form>
                </div>

                <div class="row">
                    <div class="col l5 offset-l4 s12">
                        <span>Réservation</span>
                        <div class="input-field inline widthLine">
                            <input type="email" name="email" class="validate">
                        </div>
                    </div>
                </div>
                <div class="row center">
                    <div class="col l4 offset-l4">
                        <label>
                            <input type="checkbox" />
                            <span>Se désabonner de la newsletter</span>
                        </label>
                    </div>
                </div>
                <div class="row center">
                    <div class="col l4 offset-l4">
                        <label>
                            <input type="checkbox" class="red-text" />
                            <a href="#modal" class="modal-trigger" class="red-text">Supprimer le
                                compte</a>
                        </label>
                    </div>
                </div>
                <div id="modal" class="modal">
                    <div class="modal-content border">
                        <h4 class="right-align amikoBold">Voulez-vous vraiment supprimer ce compte ?</h4>
                        <div class="row">
                            <div class="col l2 offset-l5">
                                <a href="account.php">NON</a>
                            </div>
                            <div class="col l2">
                                <a href="action/deleteAccount.php"> OUI</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } else { ?>
                <h2 class="center amikoBold">Créer un compte</h2>
                <form method="post" action="action/signup.php" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col l6 offset-l4">
                            <span>Nom prénom</span>
                            <div class="input-field inline widthLine">
                                <input type="text" name="name" class="validate">
                            </div>
                        </div>
                        <div class="col l5 offset-l4">
                            <span>Mon adresse mail</span>
                            <div class="input-field inline widthLine">
                                <input type="email" name="email" class="validate">
                            </div>
                        </div>
                        <div class="col l5 offset-l4">
                            <span>Date d'anniversaire</span>
                            <div class="input-field inline widthLine">
                                <input name="birth" type="text" class="datepicker">
                            </div>
                        </div>
                        <div class="col l5 offset-l4">
                            <span>Mot de passe</span>
                            <div class="input-field inline widthLine">
                                <input type='password' name='password' id='password1' />
                                <span toggle1="#password1" class="field-icon right toggle-password1"><span
                                        class="material-icons">visibility</span></span>
                            </div>
                        </div>
                        <div class="col l5 offset-l4 s12">
                            <span>Confirmer le mot de passe</span>
                            <div class="input-field inline widthLine">
                                <input type='password' name='confirm_password' id='password2' />
                                <span toggle2="#password2" class="field-icon right toggle-password2"><span
                                        class="material-icons">visibility</span></span>
                            </div>
                        </div>
                    </div>
                    <div class="row center">
                        <div class="col l2 s8 offset-s2 offset-l5">
                            <button class="btn center border black">Valider</button>
                        </div>
                    </div>
                    <div class="row center">
                        <div class="col l4 offset-l4">
                            <label>
                                <input type="checkbox" />
                                <span>Se désabonner de la newsletter</span>
                            </label>
                        </div>
                    </div>
                </form>
            <?php } ?>
        </div>
    </div>
    <?php require "component/footer.php" ?>
    <script src="js/jquery.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/script.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>

</html>