<?php
$i = 0;
include('config.php');
try {
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname;charset=utf8",$dbuser,$dbpass);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "Connection failed (check config.php):   " . $e->getMessage();
    }
    $result = $conn->prepare("SELECT * FROM Region");
	$result->execute();
	while ($donnees = $result->fetch()){
		$i++;
		if ($i % 3 == 0){
	echo "<button id='bouton'>" . $donnees['Libelle'] . "</button><br>";
		}
		else {
	echo "<button id='bouton'>" . $donnees['Libelle'] . "</button>";
		}


	}
$result->closeCursor();
?>