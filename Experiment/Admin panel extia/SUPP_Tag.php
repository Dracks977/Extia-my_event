<?php
include('config.php');
try {
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname;charset=utf8",$dbuser,$dbpass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed (check config.php):    " . $e->getMessage();
    exit();
    }
	
	$Libelle = $_POST['Tag'];
	
	$result = $conn->prepare("DELETE R.* FROM Region R WHERE Libelle = :Libelle");
	$result->bindParam(':Libelle', $Libelle);
	$result->execute();
	header("location: wait.php");
?>