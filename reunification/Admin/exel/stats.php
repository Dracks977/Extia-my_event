<?php
// Afficher les erreurs à l'écran
ini_set('display_errors', 1);
// Enregistrer les erreurs dans un fichier de log
ini_set('log_errors', 1);
// Nom du fichier qui enregistre les logs (attention aux droits à l'écriture)
ini_set('error_log', dirname(__file__) . '/log_error_php.txt');
?>
<?php

include("../config.php");
 
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

  


    $i=0;

	$result = $conn->prepare("SELECT * FROM Event");
	$result->execute();

	$fichier = new FichierExcel();
	$fichier->Colonne("Event;Nombre d'inscrit");

	$ll = "";
	
	while ($donnees = $result->fetch()){

	$result3 = $conn->prepare("SELECT * FROM Event_User WHERE ID_event={$donnees['ID']}");
	$result3->execute();
	$rows = $result3->rowCount();
 	$fichier->Insertion("{$donnees['Libelle']};{$rows}");
 	$ll = $ll . $donnees['Libelle'] . ";";
}

	$fichier->output('Event-Stats');