<?php
// Afficher les erreurs à l'écran
ini_set('display_errors', 1);
// Enregistrer les erreurs dans un fichier de log
ini_set('log_errors', 1);
// Nom du fichier qui enregistre les logs (attention aux droits à l'écriture)
ini_set('error_log', dirname(__file__) . '/log_error_php.txt');
?>
<?php

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
    $k = 1;
    $result = $conn->prepare("SELECT * FROM Event LIMIT 0,5");
    $result->execute();
        while ($donnees = $result->fetch()){

			echo '
			<a href="../page/article.php?id=' . $donnees["ID"] . '"><div class="item"><img src="../upload/' . $donnees["image"] . '" id = "image1" alt="' . $k . '"/></div></a>
			';
			$k++;
}


?>