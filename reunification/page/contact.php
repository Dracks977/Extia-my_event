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
		<h1>Contact</h1>
		<i>Veuillez remplir les champs pour contacter les admins.</i></br></br>
		<label for='nom1'>Nom * : </label><input id='nom2' type='text'></input></br>
		<label for='prenom1'>Pr&eacutenom * : </label><input id='prenom2' type='text'></input></br>
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
      <a href="https://fr-fr.facebook.com"><img id="facebook" class="img1" src="../img/facebook.png" alt="facebook"/></a>
      <a href="https://twitter.com/?lang=fr"><img id="twitter" class="img1" src="../img/twitter.png" alt="twitter"/></a>
      <a href="https://www.youtube.com/?hl=fr&gl=FR"><img id="youtube" class="img1" src="../img/youtube.png" alt="youtube"/></a>
          <img id="greatplace" class="img" src="../img/Gp.png" alt="logoGreatPlace"/>
        </ul>

      </div>
    </nav>
  </footer>
  <script type="text/javascript" src="../js/logohover2.js"></script>
  <script type="text/javascript" src="../js/ajax.js"></script>
  <script type="text/javascript" src="../js/footer_fleche.js"></script>
  <script type="text/javascript">
    fleche()
  </script>
</html>