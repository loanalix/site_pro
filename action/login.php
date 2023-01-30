<?php 
require_once "../cfg/config.php";
if (empty($_POST['email'])){
     $_SESSION['error'] = "Email non rempli";
     header('Location: ../index.php?id=0');
     exit();
}else if(empty($_POST['password'])){
     $_SESSION['error'] = "Mot de passe non rempli";
     header('Location: ../index.php?id=0');
     exit();
}
$sql = "SELECT * FROM account WHERE mail=:email AND password=:password";
$dataBinded=array(
     ':email'   => $_POST['email'],
     ':password'=> sha1("VTYTVUXGUUICOUCNIUJO87TR56E43Z4µ%£%£".$_POST['password'])
 );
$pre = $pdo->prepare($sql); 
$pre->execute($dataBinded);
$user = $pre->fetch(PDO::FETCH_ASSOC);
if(empty($user)){
     $_SESSION['error'] = "Utilisateur ou Mot de Passe incorrect";
}else{
     $_SESSION['user'] = $user;
}

header('Location: ../index.php');
exit();
?>