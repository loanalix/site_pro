<?php
$sql = "SELECT * FROM faq";
$pre = $pdo->prepare($sql);
$pre->execute();
$data_faq = $pre->fetchAll(PDO::FETCH_ASSOC);
?>