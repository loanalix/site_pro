<?php
$sql = "SELECT  h2, dark FROM lbd_room WHERE id_room + 1 = :id";
$db = array(
    ':id' => $_GET["id"]
); 
$pre = $pdo->prepare($sql); 
$pre->execute($db);
$data_lbd = $pre->fetch(PDO::FETCH_ASSOC);
?>