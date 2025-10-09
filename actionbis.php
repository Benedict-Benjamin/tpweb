<?php
$Login=$_POST["Login"];
$mdp=$_POST["mdp"];
$filename = "data/connexions.csv";
$fp=fopen($filename, "r");
while(!feof($fp)){
    $ligne=fgets($fp);
    $ligne=explode("\t",$ligne);

}
if($Login=="admin" && $mdp=="admin"){
    session_start();
    $_SESSION["login"]=$Login;
    header("location: admin.php");
}
else{
    header("location: login.php?error");
}