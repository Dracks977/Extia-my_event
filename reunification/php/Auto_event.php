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
		$donnees['Place'] = "Illimité";
	}
echo "
<div id='even'>
	<!---Ceci est le titre-->
    <h1>" . $donnees['Libelle'] . "</h1>
    <!--Ceci est la photo-->
    <img id='imgeven' alt='example' src='../upload/" . $donnees['image'] . "'><br>
    <p>Visio : " . $donnees['Visio'] . "</br>
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
    <form action='../php/Einsc.php?id=" . $id . "' method='POST'>
	</br><input id='PopoPoue' type='submit' value=S'inscrire></br>
    </form>
		<br><a href='contact.php'><input id='Poueloupoueloup' type='button' value=J'ai&nbsp;une&nbsp;question&nbsp;!></input></a>
	</div>
	";
  }
  else{
        if ($donnees['Prix'] == 0){
        $donnees['Prix'] = "Gratuit";
    }
        if ($donnees['Place'] == 0){
        $donnees['Place'] = "Complet";
    }
            if ($donnees['Place'] == 9999){
        $donnees['Place'] = "Illimité";
    }
echo "
<div id='even'>
    <!---Ceci est le titre-->
    <h1>" . $donnees['Libelle'] . "</h1>
    <!--Ceci est la photo-->
    <img id='imgeven' alt='example' src='../upload/" . $donnees['image'] . "'><br>
    <p>Visio : " . $donnees['Visio'] . "</br>
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
