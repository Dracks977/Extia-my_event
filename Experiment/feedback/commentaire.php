<!DOCTYPE>
<html>
<head>
  <Link rel='stylesheet' type='text/css' href='style2.css'>
</head>

  <body>
  <?php
  session_start();
  if(isset($_SESSION['c'])):
  ?>
    <h1>Commentaire</h1></br>
    Utilisateur : <input type="text" id="email1"></br>
    Note :</br>
    <div class="rating"><!--
    --><a href="#" title="Donner 5 coeurs">&hearts;</a><!--
    --><a href="#" title="Donner 4 coeurs">&hearts;</a><!--
    --><a href="#" title="Donner 3 coeurs">&hearts;</a><!--
    --><a href="#" title="Donner 2 coeurs">&hearts;</a><!--
    --><a href="#" title="Donner 1 coeur">&hearts;</a>
    </div></br>
    Commentaire :</br>
    <textarea id="commentaire" row="10" cols="60"></textarea></br></br>
    <input type="submit" value="Poster">

    <?php endif; ?>
    <?php 
    if(!isset($_SESSION['c'])):
    ?>
<div id="ins">
        <img alt="connexion" src="img/connexion.png" id="inscription">
        <h1>Connexion</h1>
        <i>Veuillez remplir les champs ci-dessous pour vous connecter.</i></br></br>
<form name="connexionForm" id="connexionForm" action="#">
            <label for='mail'>Adresse mail * : </label><input id='mail' name='mail' type='text'></input></br>
            <label for='pass'>Mot de passe * : </label><input id='pass' name='pass' type='password'></input></br>
            </br><input type="submit" value="Je me connecte" class="bouton" /></br>
</form>
    <h5><i>* Champs obligatoires</i></h5><br><br><br>
    <span id="erreur"></span>
    </div>
 <?php endif; ?>    
  </body>
</html>
