<?php 

$id = $_GET['id'];


include('config.php');
$conn = new PDO("mysql:host=$dbhost;dbname=$dbname;charset=utf8",$dbuser,$dbpass);
$reponse = $conn->query("SELECT * FROM Event WHERE ID={$id}");
$donnees = $reponse->fetch();
$reponse->closeCursor();
if (isset($_SESSION['c'])){
echo "
<div id='even'>
    <img alt='pro' src='../img/logopro.png' id='inscription'>
	<!---Ceci est le titre-->
    <center><h1>" . $donnees['Libelle'] . "</h1></center>
    <!--Ceci est la photo-->
    <img id='imgeven' alt='example' src='../upload/" . $donnees['image'] . "'><br>

		<input id='visio' type='button' value='Visio-Conference'></input>
		<!--Ceci est la date elle sera suivi d'un 'a' qui indiquera l'heure-->
    <p>Date :" . $donnees['Darte'] . "</br>
    <!--Ceci est le lieu, il y aura l'adresse suivi d'entre parenthese la région-->
	Lieu : 15 rue de Paris, 75000 Paris (Ile-de-France)</p>
    <!--Ceci est la description de l'evenement-->
    <p>Nous vous proposons une formation en marketing pour enrichir vos connaissances.</p>
    <!--Ceci sera le prix-->
    <p>Prix : </p>
    <!--L'URL se placera a la fin-->
    <iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.261636196933!2d2.3420155514734753!3d48.85322107918529!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e671de2e872577%3A0x8948112f68f9ec09!2sSaint-Michel%2C+75005+Paris!5e0!3m2!1sfr!2sfr!4v1449736908328' width='400' height='300' frameborder='0' style='border:0' allowfullscreen></iframe>
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
    <h1>Formation en marketing</h1>
    <!--Ceci est la photo-->
    <img id='imgeven' alt='example' src='../img/marketing.jpg'><br>

		<input id='visio' type='button' value='Visio-Conference'></input>
		<!--Ceci est la date elle sera suivi d'un 'a' qui indiquera l'heure-->
    <p>Date : 15 janvier 2015 a 15h10</br>
    <!--Ceci est le lieu, il y aura l'adresse suivi d'entre parenthese la région-->
	Lieu : 15 rue de Paris, 75000 Paris (Ile-de-France)</p>
    <!--Ceci est la description de l'evenement-->
    <p>Nous vous proposons une formation en marketing pour enrichir vos connaissances.</p>
    <!--Ceci sera le prix-->
    <p>Prix : </p>
    <!--L'URL se placera a la fin-->
    <iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.261636196933!2d2.3420155514734753!3d48.85322107918529!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e671de2e872577%3A0x8948112f68f9ec09!2sSaint-Michel%2C+75005+Paris!5e0!3m2!1sfr!2sfr!4v1449736908328' width='400' height='300' frameborder='0' style='border:0' allowfullscreen></iframe>
    <!--Ceci est le bouton pour s'inscrire-->
	</br><input type='submit' value='S'inscrire'></br>
		<br><a href='contact.php'><input type='button' value='J'ai une question !'></input></a>
	</div>
	";
  }
?>
