<?php
require_once "../cfg/config.php";
$sql = "DELETE FROM account Where id_user=:id";
$db = array(
    ":id" => $_SESSION['user']['id_user'],
);
$pre = $pdo->prepare($sql);
$pre->execute($db);
require "logout.php";
header('Location:../index.php');
exit();
?>