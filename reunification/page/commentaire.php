<!DOCTYPE>
<html>
  <header>
    <Link rel="stylesheet" type="text/css" href="../css/footer.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <div id="logo">
      <a href="http://www.extia.fr"><img alt="Extia1" src="img/Logo_FINAL3.png" id="hover"></a>
    </div>
    <div id="co">
      <a href="#"><img alt="Connexion" src="img/connexion1.png" id="connexion1"></a>
    </div>
    <nav id="menu_header">
      <ul id="head">
	<li class="h"><a href="#" class="info"><img alt="Extia1" src="img/accueil.png" id="acc" style="width:50px"><span class="lol">Accueil</span></a></li>
	<li class="h"><a href="#" class="info"><img alt="Extia1" src="img/pro.png" id="pro" style="width:50px"><span class="mdr">Professionnel</span></a></li>
	<li class="h"><a href="#" class="info"><img alt="Extia1" src="img/fun.png" id="fun" style="width:50px"><span class="je">Festif</span></a></li>
	<li class="h"><a href="#" class="info"><img alt="Extia1" src="img/contact.png" id="cont" style="width:50px"><span class="sais">Contact</span></a></li>
      </ul>
    </nav>
  </header>
  <body>
  <!--?php
  session_start();
  if(isset($_SESSION['c'])):
  ?-->
  <div id="ins"> 
    <h1>Commentaire</h1></br>
    Utilisateur : <input type="text" id="email1"></br>
    <div class="rating">
      Note :</br>
      <a class="coeur" id="c5" href="#" title="Donner 5 coeurs">&hearts;</a>
      <a class="coeur" id="c4" href="#" title="Donner 4 coeurs">&hearts;</a>
      <a class="coeur" id="c3" href="#" title="Donner 3 coeurs">&hearts;</a>
      <a class="coeur" id="c2" href="#" title="Donner 2 coeurs">&hearts;</a>
      <a class="coeur" id="c1" href="#" title="Donner 1 coeur">&hearts;</a>
    </div></br>
    Commentaire :</br>
    <textarea id="commentaire" row="10" cols="60"></textarea></br></br>
    <input type="submit" id="bouton33" value="Poster">
  </div>
  < ?php endif; ?>
  <?php 
  if(!isset($_SESSION['c'])):
  ?>
  
      <div id="ins">
	<img alt="connexion" src="img/connexion.png" id="inscription">
	<h1>Connexion</h1>
	<i>Veuillez remplir les champs ci-dessous pour vous connecter.</i></br></br>
	<form name="connexionForm" id="connexionForm" action="#">
	  <label for='mail'>Adresse mail * : </label><input id='mail' name='mail' type='text'></input></br>
	  <label for='pass'>Mot de passe * : </label><input id='pass' name='pass' type='password'></input></br></br>
	  <input type="submit" value="Je me connecte" class="bouton" /></br>
	</form>
	<h5><i>* Champs obligatoires</i></h5><br><br><br>
	<span id="erreur"></span>
      </div>
      
  <?php endif; ?>  
  </body>
  <footer>
    <nav id="menu_footer">
      <div class="bloc_footer">
        <ul>
	  <img id="flecheorange" class="img2" src="img/fc.svg" alt="flecheOrange"/>
	  <a href="https://www.facebook.com/talentextia"><img id="facebook" class="img1" src="img/facebook.png" alt="facebook"/></a>
	  <a href="https://twitter.com/Extia_conseil"><img id="twitter" class="img1" src="img/twitter.png" alt="twitter"/></a>
	  <a href="https://www.youtube.com/user/TalentsExtia"><img id="youtube" class="img1" src="img/youtube.png" alt="youtube"/></a>
          <a href="https://www.linkedin.com/company/extia"><img id="in" class="img1" src="img/in.jpg" alt="linkedin"/></a>
          <a href="http://fr.viadeo.com/fr/company/extia"><img id="viadeo" class="img1" src="img/viadeo.png" alt="viadeo"/></a>
          <img id="greatplace" class="img" src="img/Gp.png" alt="logoGreatPlace"/>
        </ul>
      </div>
    </nav>
  </footer>
  <script type="text/javascript" src="../connexion/js/logohover.js"></script>
  <script type="text/javascript" src="../connexion/js/ajax.js"></script>
  <script type="text/javascript" src="../connexion/js/footer_fleche.js"></script>
  <script type="text/javascript">
    fleche()
  </script>
</html>
