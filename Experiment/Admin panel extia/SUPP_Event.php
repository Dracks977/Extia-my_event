<?php
include('config.php');
try {
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname;charset=utf8",$dbuser,$dbpass);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed (check config.php):    " . $e->getMessage();
    exit();
    }
	
	$N_event = $_POST['N_event'];
	
	$result = $conn->prepare("DELETE E.* FROM Event E WHERE E.Libelle= :user");
	$result->bindParam(':user', $N_event);
	$result->execute();
	header("location: wait.php");
?>