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