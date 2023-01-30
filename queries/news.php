<?php
if(empty($_GET["id"])){
    $sql = "SELECT * FROM `news` WHERE big = 0 LIMIT 2";
}else{
    $sql = "SELECT * FROM `news`";
}
$pre = $pdo->prepare($sql);
$pre->execute();
$data_news = $pre->fetchAll(PDO::FETCH_ASSOC);
?>