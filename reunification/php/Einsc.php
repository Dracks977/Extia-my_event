<?php
// Afficher les erreurs à l'écran
ini_set('display_errors', 1);
// Enregistrer les erreurs dans un fichier de log
ini_set('log_errors', 1);
// Nom du fichier qui enregistre les logs (attention aux droits à l'écriture)
ini_set('error_log', dirname(__file__) . '/log_error_php.txt');
?>
<?php
session_start();
$ide = $_GET['id'];
$idu = $_SESSION['User_ID'];

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

    $result3 = $conn->prepare("SELECT * FROM Event_User WHERE ID_event={$ide} AND ID_user={$idu}");
	$result3->execute();
	$rows = $result3->fetch(PDO::FETCH_NUM);
	if($rows > 0) {
		echo "<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />

    <link rel='stylesheet' type='text/css' href='../css/styleevenpro.css'>
    <link rel='stylesheet' type='text/css' href='../css/styleconex.css'>

<meta http-equiv='refresh' content='1;URL=../index.php'>
<body>
<p style = 'color: #F26e27; font-size : 20px; text-align : center; margin-top : 15%;'>Vous êtes déjà inscrit !</p>
</body>";
		exit();
	}


    $result2 = $conn->prepare("INSERT INTO Event_User (ID_event, ID_user) VALUES ({$ide}, {$idu})");
	$result2->execute();

	$result = $conn->prepare("SELECT * FROM Event WHERE ID={$ide}");
	$result->execute();
	$donnees = $result->fetch();

	$place = $donnees['Place'];
	
	if ($place != 9999){
		$place = $place - 1;
		$result9 = $conn->prepare("UPDATE Event SET Place= {$place} WHERE ID= {$ide}");
		$result9->execute();

	}




	header("location: ../page/ok.php");
?>
