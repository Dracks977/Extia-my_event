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
	<br><hr><h4>Libell&eacute; :</h4><p id='fuck'>" . $donnees["Libelle"] . "</p><hr>
	<h4>Description : </h4><p id='fuck'>" . $donnees["Description"] . "</p><hr>
	<h4>Professionel ou Festif : </h4><p id='fuck'>" . $donnees["PoF"] . "</p><hr>
	<h4>Ville : </h4><p id='fuck'>" . $donnees["Region"] . "</p><hr>
	<h4>Visio : </h4><p id='fuck'>" . $donnees["Visio"] . "</p><hr>
	<h4>E-mail Contact : </h4><p id='fuck'>" . $donnees["Mail"] . "</p><hr>
	<h4>URL : </h4><p id='fuck'>" . $donnees["Url"] . "</p><hr>
	<h4>Prix : </h4><p id='fuck'>" . $donnees["Prix"] . "</p><hr>
	<h4>Nombre de places : </h4><p id='fuck'>" . $donnees["Place"] . "</p><hr>
	<h4>Date et heure : </h4><p id='fuck'>" . $donnees["Darte"] . "</p><hr>
	";
	$result->closeCursor();


?>