<?php
session_start();
// configuration
include('config.php');
 try {
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname;charset=utf8",$dbuser,$dbpass);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "24";
    exit();
    }
$user = $_POST['mail'];
$password = $_POST['pass'];

$passh = hash_hmac('sha256', $password, '123789');
 
if($user == '') {
	echo "200";
	exit();
}
else if($password == '') {
	echo "201";
	exit();
}
// query
	$result = $conn->prepare("SELECT * FROM User WHERE mail= :hjhjhjh AND pass= :asas");
	$result->bindParam(':hjhjhjh', $user);
	$result->bindParam(':asas', $passh);
	$result->execute();
	$rows = $result->fetch(PDO::FETCH_NUM);
	if($rows > 0) {
	$_SESSION['c'] = true;
	$_SESSION['User_ID'] = $rows[0];
	$_SESSION['User_Nom'] = $rows[1];
	$_SESSION['User_Prenom'] = $rows[2];
	$_SESSION['User_mail'] = $rows[3];
	echo "42";
	}
	else{
		echo "202";
	} 
?>
