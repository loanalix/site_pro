<?php
$sql = "SELECT logo FROM lbd_room";

$pre = $pdo->prepare($sql); 
$pre->execute();
$logo = $pre->fetch(PDO::FETCH_ASSOC);
?>