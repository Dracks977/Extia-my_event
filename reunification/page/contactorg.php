<!DOCTYPE html>
<html>

<header>
	<title>Extia Events</title>
    <link rel='stylesheet' type='text/css' href='style.css'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<?php include("headerconnect.php"); ?>
</header>

<body>
	<div id="ins">
		<img alt="lettre" src="lettre2.png" id="inscription">
		<h1>Contact</h1>
		<i>Veuillez remplir les champs pour contacter les organisateurs.</i></br></br>
		<label for='nom1'>Nom * : </label><input id='nom2' type='text'></input></br>
		<label for='prenom1'>Pr&eacutenom * : </label><input id='prenom2' type='text'></input></br>
		<label for='adressemail1'>Adresse mail * : </label><input id='adressemail2' type='text'></input></br>
		<label for='message1'>Message : * </label><textarea for="message1"></textarea>
		    </br><input type='submit' value='Envoyer'></br>
    <i>* Champs obligatoires</i>
	</div>
</body>

</html>