<?php
require_once "../cfg/config.php";
$sql = "UPDATE account SET password=:password WHERE id_user=:id";
$dataBinded = array(
    ':password' => sha1("VTYTVUXGUUICOUCNIUJO87TR56E43Z4µ%£%£".$_POST['password']),
    ':id' => $_SESSION['user']['id_user'],
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);
header('Location:../account.php');
?>