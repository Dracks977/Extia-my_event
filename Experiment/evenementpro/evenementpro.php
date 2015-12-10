<!DOCTYPE html>
<html>

<header>
<title>Extia Events</title>
    <link rel='stylesheet' type='text/css' href='css/style.css'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<div id="logo"
<a href="http://www.extia.fr"><img alt="Extia1" src="img/Logo_FINAL3.png" id="hover"></a>
</div>
<div id="co">
<a href="#"><img alt="Connexion" src="img/connexion1.png" id="connexion1"></a>
</div>
<nav id="menu_header">
  <ul id="head">
    <li class="h"><a href="#"><img alt="Extia1" src="img/accueil.png" id="acc" style="width:50px"></a></li>
    <li class="h"><a href="#"><img alt="Extia1" src="img/pro.png" id="pro" style="width:50px"></a></li>
    <li class="h"><a href="#"><img alt="Extia1" src="img/fun.png" id="fun" style="width:50px"></a></li>
    <li class="h"><a href="#"><img alt="Extia1" src="img/contact.png" id="cont" style="width:50px"></a></li>
  </ul>
</nav>
</header>

<body>
<div id="even">
    <img alt="pro" src="img/logopro.png" id="inscription">
	<!---Ceci est le titre-->
    <h1>Formation en marketing</h1>
    <!--Ceci est la photo-->
    <img id="imgeven" alt="example" src="img/marketing.jpg"><br>

		<input id="visio" type="button" value="Visio-Conference"></input>
		<!--Ceci est la date elle sera suivi d'un 'a' qui indiquera l'heure-->
    <p>Date : 15 janvier 2015 a 15h10</br>
    <!--Ceci est le lieu, il y aura l'adresse suivi d'entre parenthese la région-->
	Lieu : 15 rue de Paris, 75000 Paris (Ile-de-France)</p>
    <!--Ceci est la description de l'evenement-->
    <p>Nous vous proposons une formation en marketing pour enrichir vos connaissances.</p>
    <!--Ceci sera le prix-->
    <p>Prix : </p>
    <!--L'URL se placera a la fin-->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.261636196933!2d2.3420155514734753!3d48.85322107918529!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e671de2e872577%3A0x8948112f68f9ec09!2sSaint-Michel%2C+75005+Paris!5e0!3m2!1sfr!2sfr!4v1449736908328" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
    <!--Ceci est le bouton pour s'inscrire-->
	</br><input type='submit' value="S'inscrire"></br>
		<br><a href="contact.php"><input type='button' value="J'ai une question !"></input></a>
	</div>
</body>
<footer>
    <nav id="menu_footer">
      <div class="bloc_footer">
        <ul>
      <img id="flecheorange" class="img2" src="img/fc.svg" alt="flecheOrange"/>
      <a href="https://fr-fr.facebook.com"><img id="facebook" class="img1" src="img/facebook.png" alt="facebook"/></a>
      <a href="https://twitter.com/?lang=fr"><img id="twitter" class="img1" src="img/twitter.png" alt="twitter"/></a>
      <a href="https://www.youtube.com/?hl=fr&gl=FR"><img id="youtube" class="img1" src="img/youtube.png" alt="youtube"/></a>
          <img id="greatplace" class="img" src="img/Gp.png" alt="logoGreatPlace"/>
        </ul>
      </div>
    </nav>
  </footer>
  <script type="text/javascript" src="js/logohover.js"></script>
  <script type="text/javascript" src="js/ajax.js"></script>
  <script type="text/javascript" src="js/footer_fleche.js"></script>
  <script type="text/javascript">
    fleche()
  </script>
</html>
