<?php 

$id = $_GET['id'];


include('config.php');
$conn = new PDO("mysql:host=$dbhost;dbname=$dbname;charset=utf8",$dbuser,$dbpass);
$reponse = $conn->query("SELECT * FROM Event WHERE ID={$id}");
$donnees = $reponse->fetch();
$reponse->closeCursor();
if (isset($_SESSION['c'])){
	if ($donnees['Prix'] == 0){
		$donnees['Prix'] = "Gratuit";
	}
		if ($donnees['Place'] == 0){
		$donnees['Place'] = "Complet";
	}
			if ($donnees['Place'] == 9999){
		$donnees['Place'] = "Illimiter";
	}
echo "
<div id='even'>
    <img alt='pro' src='../img/logopro.png' id='inscription'>
	<!---Ceci est le titre-->
    <h1>" . $donnees['Libelle'] . "</h1>
    <!--Ceci est la photo-->
    <img id='imgeven' alt='example' src='../upload/" . $donnees['image'] . "'><br>

		<input id='visio' type='button' value='Visio-Conference'></input>
		<!--Ceci est la date elle sera suivi d'un 'a' qui indiquera l'heure-->
    <p>Date : " . $donnees['Darte'] . "</br>
    <!--Ceci est le lieu, il y aura l'adresse suivi d'entre parenthese la région-->
	Lieu : " . $donnees['adr'] . "</p>
    <!--Ceci est la description de l'evenement-->
    <p>" . $donnees['Description'] . "</p>
    <!--Ceci sera le prix-->
    <p>Prix : " . $donnees['Prix'] . "</p>
    <p>Place disponibles :" . $donnees['Place'] . "</p>
    <!--L'URL se placera a la fin-->
    <p>Lien : " . $donnees['Url'] . "<p>
    <!--Ceci est le bouton pour s'inscrire-->
	</br><input type='submit' value='S'inscrire'></br>
		<br><a href='contact.php'><input type='button' value='J'ai une question !'></input></a>
	</div>
	";
  }
  else{
echo "
<div id='even'>
    <img alt='pro' src='../img/logopro.png' id='inscription'>
    <!---Ceci est le titre-->
    <h1>" . $donnees['Libelle'] . "</h1>
    <!--Ceci est la photo-->
    <img id='imgeven' alt='example' src='../upload/" . $donnees['image'] . "'><br>

        <input id='visio' type='button' value='Visio-Conference'></input>
        <!--Ceci est la date elle sera suivi d'un 'a' qui indiquera l'heure-->
    <p>Date : " . $donnees['Darte'] . "</br>
    <!--Ceci est le lieu, il y aura l'adresse suivi d'entre parenthese la région-->
    Lieu : " . $donnees['adr'] . "</p>
    <!--Ceci est la description de l'evenement-->
    <p>" . $donnees['Description'] . "</p>
    <!--Ceci sera le prix-->
    <p>Prix : " . $donnees['Prix'] . "</p>
    <p>Place disponibles :" . $donnees['Place'] . "</p>
    <!--L'URL se placera a la fin-->
    <p>Lien : " . $donnees['Url'] . "<p><br>
    </div>
	";
  }
?>
