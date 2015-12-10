<?php
session_start();
$errmsg_arr = array();
$errflag = false;
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
$user = $_POST['user'];
$pass = $_POST['pass'];

$passh = hash_hmac('sha256', $pass, '2324');
 
if($user == '') {
	$errmsg_arr[] = 'Vous avez oublié votre login';
	$errflag = true;
}
else if($pass == '') {
	$errmsg_arr[] = 'Vous avez oublié votre Passworld';
	$errflag = true;
}

if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: index.php");
		exit();
	}

// query
	$result = $conn->prepare("SELECT * FROM Admin WHERE user= :hjhjhjh AND pass= :asas");
	$result->bindParam(':hjhjhjh', $user);
	$result->bindParam(':asas', $passh);
	$result->execute();
	$rows = $result->fetch(PDO::FETCH_NUM);
	if($rows > 0) {
	$_SESSION['Admin'] = true;
	header("location: index.php");
	}
	else{
		$errmsg_arr[] = 'Mauvaise combinaison';
		$errflag = true;
	}

	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: index.php");
		exit();
	} 
?>