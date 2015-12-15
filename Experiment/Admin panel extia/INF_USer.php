<?php
$Mail = $_POST['l'];

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
	$result = $conn->prepare("SELECT * FROM User WHERE Mail= :Mail");
	$result->bindParam(':Mail', $Mail);
	$result->execute();
	$donnees = $result->fetch();
	echo "
	<br><br><hr><h4>Nom</h4><p id='fuck'>" . $donnees["Nom"] . "</p><hr>
	<h4>Prenom</h4><p id='fuck'>" . $donnees["Prenom"] . "</p><hr>
	<h4>Mail</h4><p id='fuck'>" . $donnees["Mail"] . "</p><hr>
	<h4>Date_creation</h4><p id='fuck'>" . $donnees["Date_creation"] . "</p><hr>
	";
	$result->closeCursor();


?>