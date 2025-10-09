<!doctype html>
<html mang="fr">
<head>
    <title>lecture</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1> Lecture des données </h1>

<?php
include_once('res/debug.php');

$filename="data.csv";

$fp= fopen($filename, "r");
echo "<table>";
while($resultat=fgetcsv($fp,1024,",")){
    echo"<tr>";
    foreach($resultat as $value){
        echo"<td>".$value."</td>";
    }
    echo"</tr>";
}
echo "</table>";
echo "<form action='' method='post'>
       <label for='firstname'>first name</label>
       <input type='text' name='nom' id='firstname'>
       <label for='lastname'>last name</label>
       <input type='text' name='prenom' id='firstname'>
       <label for='mail'>mail</label>
       <input type='text' name='mail' id='firstname'>
       <input type='submit' name='submit' value='submit'>
        </form>";
if(isset($_GET['nom']) && isset($_GET['prenom']) && isset($_GET['mail'] )) {
    $nom = $_GET['nom'];
    $prenom = $_GET['prenom'];
    $mail = $_GET['mail'];
    $resultat = array($nom, $prenom, $mail);
    fputcsv(fopen($filename, "a"), $resultat);
}
    
fclose($fp);

?>

<?php include("footer.html"); ?>

