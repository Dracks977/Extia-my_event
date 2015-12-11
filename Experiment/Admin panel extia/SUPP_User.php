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
	
	$mail = $_POST['user'];
	
	$result = $conn->prepare("DELETE U.* FROM User U WHERE Mail = :user");
	$result->bindParam(':user', $mail);
	$result->execute();
	header("location: wait.php");
?>