<?php 
require_once "../cfg/config.php"; 
if (empty($_POST['name'])){
    $_SESSION['error'] = "Nom non rempli";
    header('Location: ../index.php');
    exit();
}else if(empty($_POST['email'])){
    $_SESSION['error'] = "Email non rempli";
    header('Location: ../index.php');
    exit();
}else if(empty($_POST['birth'])){
    $_SESSION['error'] = "Date de naissance non rempli";
    header('Location: ../index.php');
    exit();
}else if(empty($_POST['password'])){
    $_SESSION['error'] = "Mot de passe non rempli";
    header('Location: ../index.php');
    exit();
}else if(empty($_POST['confirm_password'])){
    $_SESSION['error'] = "Confirmation de mot de passe non rempli";
    header('Location: ../index.php');
    exit();
}else if($_POST['confirm_password']!= $_POST['password']){
    $_SESSION['error'] = "Confirmation de mot de passe différente du mot de passe";
    header('Location: ../index.php');
    exit();
};
$sql = "INSERT INTO account(name,mail,password,date_of_birth) VALUES(:name,:mail,:password,:birth)";
$dataBinded=array(
    ':name'=> $_POST['name'],
    ':mail'   => $_POST['email'],
    ':password'=> sha1("VTYTVUXGUUICOUCNIUJO87TR56E43Z4µ%£%£".$_POST['password']),
    ':birth' => date("Y-m-d", strtotime($_POST['birth']))
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);
header('Location: ../index.php');
exit();
?>