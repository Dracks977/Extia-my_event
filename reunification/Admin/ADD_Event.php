<?php

session_start();
$errmsg_arr = array();
$errflag = false;

//IMAGE
$dossier = '../upload/';
$fichier = basename($_FILES['upload']['name']);
$taille_maxi = 1099999;
$taille = filesize($_FILES['upload']['tmp_name']);
$extensions = array('.png', '.gif', '.jpg', '.jpeg');
$extension = strrchr($_FILES['upload']['name'], '.'); 
//Début des vérifications de sécurité...
if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
{
	//Vous devez uploader un fichier de type png, gif, jpg, jpeg...
	echo "100";
	exit();
}
if($taille>$taille_maxi)
{
	//Le fichier est trop gros...
	echo "101";
	exit();
}
if($errflag == false) //S'il n'y a pas d'erreur, on upload
{
     //On formate le nom du fichier ici...
     $fichier = strtr($fichier, 
          'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ', 
          'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
     $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
     if(move_uploaded_file($_FILES['upload']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
     {
     }
     else //Sinon (la fonction renvoie FALSE).
     {
		 //Echec de l\'upload !
		echo "102";
		exit();
     }
}

//FIN IMAGE

//debut form ajout
$FoP = "";
$Region = "";
$Url = "";
$Prix = "";
$Places = "";

$Libelle = $_POST['lib'];
$Descrip = $_POST['comment'];
$FoP = $_POST['FP'];
$Region = $_POST['region'];
$Url = $_POST['url'];
$Prix = $_POST['prix'];
$Places = $_POST['place'];
$Date = $_POST['drate'];
$Visio = $_POST['Visio'];
$mail = $_POST['mail'];
//$fichier

if (!isset($Descrip) OR $Descrip == ""){
	//Il faut une Description...
	echo "200";
	exit();
}

if (!isset($Libelle) OR $Libelle == ""){
//Il faut un Libelle...
	echo "201";
	exit();
}
if (!isset($Date) OR $Date == ""){
//Il faut une date...
	echo "202";
	exit();
}


// configuration
include('config.php');
if ($errflag == false){
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

// $result = $conn->prepare("INSERT INTO Event (Libelle, Description, image, Prix, Place, Region, PoF, Url, Darte, Date_modification,Date_creation) VALUES ('Test', 'test', 'test', '5', '50', 'test', '1', '', '', NOW(), NOW() )");
	$result = $conn->prepare("INSERT INTO Event (Libelle, Description, image, Prix, Place, Region, Visio, Mail, PoF, Url, Darte, Date_modification,Date_creation) VALUES (:Libelle, :Descrip, :Image, :Prix, :Places, :Region, :Visio, :mail, :FoP, :Url, :Darte, NOW(), NOW())");
	$result->bindParam(':Libelle', $Libelle);
	$result->bindParam(':Descrip', $Descrip);
	$result->bindParam(':FoP', $FoP);
	$result->bindParam(':Region', $Region);
	$result->bindParam(':Url', $Url);
	$result->bindParam(':Prix', $Prix);
	$result->bindParam(':Places', $Places);
	$result->bindParam(':Darte', $Date);
	$result->bindParam(':Image', $fichier);
	$result->bindParam(':Visio', $Visio);
	$result->bindParam(':mail', $mail);

	$result->execute();
	echo "42";
	}
	     else
     {
		echo "203";
     }
?>