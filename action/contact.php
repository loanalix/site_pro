<?php
require_once "../cfg/config.php"; 
if (empty($_POST['last_name'])){
    $_SESSION['error'] = "Nom de famille non rempli";
    header('Location: ../index.php');
    exit();
}else if(empty($_POST['first_name'])){
    $_SESSION['error'] = "Prénom non rempli";
    header('Location: ../index.php');
    exit();
}else if(empty($_POST['email'])){
    $_SESSION['error'] = "Email non rempli";
    header('Location: ../index.php');
    exit();
}else if(empty($_POST['message'])){
    $_SESSION['error'] = "Message non rempli";
    header('Location: ../index.php');
    exit();
}
$message = $_POST["message"];
$message = wordwrap($message, 70, "\r\n");
$headers = "From:".$_POST["email"]."\r\n Reply-To:".$_POST["email"]."\r\n X-Mailer: PHP/".phpversion();

if (mail("nleguyader@gaming.tech", $message, $headers)){
    header('Location: ../index.php');
    exit;
};
header('Location: ../index.php');
exit;
?>