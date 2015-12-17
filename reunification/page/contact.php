<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="initial-scale=1,maximum-scale=1,target-densitydpi=device-dpi"/>
<header>
<title>Se connecter</title>
    <link rel='stylesheet' type='text/css' href='../css/styleconex.css'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<?php include("headerconnect.php"); ?>
</header>

<body>
	<div id="ins">
		<img alt="lettre" src="../img/lettre.png" id="inscription">
		<h1>Contact Administrateur</h1>
		<i>Veuillez remplir les champs pour contacter les admins.</i></br></br>
		<form id="opgg" method="POST" action="../php/Gmail.php">
		<label for='nom1'>Nom * : </label><input name="nom" id='nom2' type='text'></input></br>
		<label for='prenom1'>Pr&eacutenom * : </label><input name="prenom" id='prenom2' type='text'></input></br>
		<label for='nom1'>Adresse Email : </label><input name="mail" id='nom2' type='mail'></input></br>
		<label for='message1'>Message : * </label><textarea name="msg" id="txtarea1" form="opgg" style="max-width: 130px; max-height : 150px;"></textarea>
		    </br><input id="mega" type='submit' value='Envoyer'></br>
		</form>
    <i>* Champs obligatoires</i>
	</div>
</body>
  <footer>
    <nav id="menu_footer">
      <div class="bloc_footer">
        <ul>
    <img id="flecheorange" class="img2" src="../img/fc.svg" alt="flecheOrange"/>
    <a href="https://www.facebook.com/talentextia"><img id="facebook" class="img1" src="../img/facebook.png" alt="facebook"/></a>
    <a href="https://twitter.com/Extia_conseil"><img id="twitter" class="img1" src="../img/twitter.png" alt="twitter"/></a>
    <a href="https://www.youtube.com/user/TalentsExtia"><img id="youtube" class="img1" src="../img/youtube.png" alt="youtube"/></a>
          <a href="https://www.linkedin.com/company/extia"><img id="in" class="img1" src="../img/in.jpg" alt="linkedin"/></a>
          <a href="http://fr.viadeo.com/fr/company/extia"><img id="viadeo" class="img1" src="../img/viadeo.png" alt="viadeo"/></a>
          <img id="greatplace" class="img" src="../img/Gp2.png" alt="logoGreatPlace"/>
        </ul>
      </div>
    </nav>
  </footer>
  <script type="text/javascript" src="../js/logohover2.js"></script>
  <script type="text/javascript" src="../js/ajax.js"></script>
  <script type="text/javascript" src="../js/finalfooter.js"></script>
  <script type="text/javascript">
    fleche()
  </script>
</html>