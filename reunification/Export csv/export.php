<?php

$dbhost = "localhost";
$dbname	= "Extia_Event";
$dbuser	= "root";
$dbpass	= "";
 
include('FichierExcel.php');

try {
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname;charset=utf8",$dbuser,$dbpass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "Oops, une erreur est survenue !";
    exit();
    }
	$reponse = $conn->query("SELECT * FROM Event");
	
$fichier = new FichierExcel();
$fichier->Colonne("Libelle;Description;Region");

while ($donnees = $reponse->fetch()){
 

$fichier->Insertion("{$donnees['Libelle']};{$donnees['Description']};{$donnees['Region']}");
}
$reponse->closeCursor();
$fichier->output('Stats');