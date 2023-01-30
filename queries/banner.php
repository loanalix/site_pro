<?php
$sql = "SELECT LBD.title as title_room, P.title,P.description,P.img 
        FROM presentation as P LEFT JOIN lbd_room as LBD ON LBD.id_room + 1 = P.id_presentation WHERE P.id_presentation = :id";
if (isset($_GET["id"])){
    $db = array(
        ":id" => $_GET["id"]
    );
}else{
    $db = array(
        ":id" => 1
    );
}
$pre = $pdo->prepare($sql);
$pre->execute($db);
$data_banner = $pre->fetchAll(PDO::FETCH_ASSOC);
?>