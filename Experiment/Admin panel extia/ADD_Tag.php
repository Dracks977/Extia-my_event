<?php
include('config.php');

try {
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname;charset=utf8",$dbuser,$dbpass);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
        echo "Connextion a la base de donné imposible, check config.php";
    exit();
    }
	
	$ville = $_POST['ville'];
	
	if ($ville == ""){
	echo "200";
	}
	else{
	$result = $conn->prepare("INSERT INTO Region (Libelle, Date_creation) VALUES (:Libelle, NOW())");
	$result->bindParam(':Libelle', $ville);
	$result->execute();
	//unset($_SESSION['ERRMSG_ARR']);
	header("location: wait.php");	
	}

?>
