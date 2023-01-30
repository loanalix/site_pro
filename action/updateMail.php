<?php
require_once "../cfg/config.php";
$sql = "UPDATE account SET mail=:mail WHERE id_user=:id";
$dataBinded = array(
    ':mail' => $_POST['mail'],
    ':id' => $_SESSION['user']['id_user'],
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);
header('Location:../account.php');
?>