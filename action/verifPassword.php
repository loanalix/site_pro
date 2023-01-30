<?php
require_once "../cfg/config.php";
require "../queries/user.php";
$_SESSION['verif'] = false;
if (sha1("VTYTVUXGUUICOUCNIUJO87TR56E43Z4µ%£%£" . $_POST['password']) == $modif['password'] && isset($_POST['password'])) {
    $_SESSION['verif'] = true;
};
header('Location: ../account.php');
exit();
?>