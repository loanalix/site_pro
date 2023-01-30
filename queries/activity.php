<?php
if(empty($_GET["id"])){
    $sql = "SELECT LBD.title as title_room,A.id_room,A.title,A.description,A.img,A.time,A.nb_player,A.nb_like 
            FROM `activity` as A LEFT JOIN lbd_room as LBD ON A.id_room = LBD.id_room GROUP BY id_room ORDER BY id_room DESC LIMIT 4;";
    $pre = $pdo->prepare($sql);
    $pre->execute();
}else {
    $sql = "SELECT LBD.title as title_room,A.id_room,A.title,A.description,A.img,A.time,A.nb_player,A.nb_like 
            FROM `activity` as A INNER JOIN lbd_room as LBD ON A.id_room = LBD.id_room WHERE A.id_room = :id";
    $db = array(
        ":id" => $_GET["id"] - 1
    );
    $pre = $pdo->prepare($sql);
    $pre->execute($db);
}
$data_activity = $pre->fetchAll(PDO::FETCH_ASSOC);
?>