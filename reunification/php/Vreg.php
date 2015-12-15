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
$Nom = $_POST['nom'];   
$Prenom = $_POST['prenom']; 
$user = $_POST['mail'];
$password = $_POST['pass'];
$password2 = $_POST['pass2'];
$cle = $_POST['cle'];

$passh2 = hash_hmac('sha256', $password2, '123789');
$passh = hash_hmac('sha256', $password, '123789');
$cleh = hash_hmac('sha256', $cle, '2343');

if($user == '') {
	echo "200";
	exit();
}
if($cle == '') {
	echo "101";
	exit();
}
else if($password == '') {
	echo "201";
	exit();
}
else if($Nom == '') {
	echo "203";
	exit();
}
else if($Prenom == '') {
	echo "204";
	exit();
}
else if($password2 == '') {
	echo "205";
	exit();
}
else if($passh2 != $passh) {
	echo "206";
	exit();
}


// verif double compte

	$result3 = $conn->prepare("SELECT * FROM CLE WHERE Cle= :cle");
	$result3->bindParam(':cle', $cleh);
	$result3->execute();
	$rows = $result3->fetch(PDO::FETCH_NUM);
	if($rows > 0) {
		echo "102";
		echo $cleh;
		exit();
	}

	$result2 = $conn->prepare("SELECT * FROM User WHERE mail= :hjhjhjh");
	$result2->bindParam(':hjhjhjh', $user);
	$result2->execute();
	$rows = $result2->fetch(PDO::FETCH_NUM);
	if($rows > 0) {
		echo "207";
		exit();
	}

	else{
	$result = $conn->prepare("INSERT INTO User (Nom,Prenom,Mail,Pass,Date_creation,Date_modification) VALUES (:Nom, :Prenom, :user, :password,NOW(), NOW())");
	$result->bindParam(':user', $user);
	$result->bindParam(':Nom', $Nom);
	$result->bindParam(':Prenom', $Prenom);
	$result->bindParam(':password', $passh);
	$result->execute();
	echo "42";
	}



	
?>
