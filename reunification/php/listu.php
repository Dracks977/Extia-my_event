<?php
// Afficher les erreurs à l'écran
ini_set('display_errors', 1);
// Enregistrer les erreurs dans un fichier de log
ini_set('log_errors', 1);
// Nom du fichier qui enregistre les logs (attention aux droits à l'écriture)
ini_set('error_log', dirname(__file__) . '/log_error_php.txt');
?>
<?php

$id = $_GET['id'];

include('config.php');
$conn = new PDO("mysql:host=$dbhost;dbname=$dbname;charset=utf8",$dbuser,$dbpass);
$reponse = $conn->prepare("SELECT * FROM Event_User WHERE ID_event={$id}");
$reponse->execute();
while($donnees = $reponse->fetch()){
$idu = $donnees['ID_user'];
$reponse2 = $conn->prepare("SELECT * FROM User WHERE ID={$idu}");
$reponse2->execute();
//var_dump($reponse2);
$donnees2 = $reponse2->fetch();
//var_dump($donnees2);
echo "<li>" . $donnees2['Prenom'] . '_' . $donnees2['Nom'][0] . "</li>";
}
?>

