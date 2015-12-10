<?php
$libelle = $_POST['l'];

include('config.php');
try {
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname;charset=utf8",$dbuser,$dbpass);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "Oops, une erreur est survenue !";
    exit();
    }
	$result = $conn->prepare("SELECT * FROM Event WHERE Libelle= :user");
	$result->bindParam(':user', $libelle);
	$result->execute();
	$donnees = $result->fetch();
	echo "
	<br><hr><h4>Libelle</h4><p id='w'>" . $donnees["Libelle"] . "</p><hr>
	<h4>Description</h4><p id='w'>" . $donnees["Description"] . "</p><hr>
	<h4>Pro ou Fun ?</h4><p id='w'>" . $donnees["PoF"] . "</p><hr>
	<h4>Region</h4><p id='w'>" . $donnees["Region"] . "</p><hr>
	<h4>Url</h4><p id='w'>" . $donnees["Url"] . "</p><hr>
	<h4>Prix</h4><p id='w'>" . $donnees["Prix"] . "</p><hr>
	<h4>Nombre de place</h4><p id='w'>" . $donnees["Place"] . "</p><hr>
	<h4>Date et heure</h4><p id='w'>" . $donnees["Darte"] . "</p><hr>
	";
	$result->closeCursor();


?>