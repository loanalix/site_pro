<?php
$sql = "SELECT mail,password FROM account WHERE id_user=:id";
$db = array(
    ':id' => $_SESSION['user']['id_user']
); 
$pre = $pdo->prepare($sql); 
$pre->execute($db);
$modif = $pre->fetch(PDO::FETCH_ASSOC);
?>