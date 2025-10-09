<?php
$fp = fopen("data/data.csv", 'a');
if(isset($_GET['nom']) && isset($_GET['prenom']) && isset($_GET['mail'] )) {
    $nom = $_GET['nom'];
    $prenom = $_GET['prenom'];
    $mail = $_GET['mail'];
    $resultat = array($nom, $prenom, $mail);
    fputcsv(fopen($filename, "a"), $resultat);
}
fclose($fp);



}
header("location: lecture.php");