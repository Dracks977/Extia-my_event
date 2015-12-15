<!DOCTYPE html>

<html lang='fr'>

<link rel="stylesheet" href="style.css">

<head>
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Cache-Control" content="no-cache, must-revalidate" />

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Extia-Admin</title>
</head>

<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<?php 

session_start(); if(isset($_SESSION['Admin']) AND $_SESSION['Admin'] == true):  ?>

<div id='header'>

<a href="index.php?id=1" class="info"><image class="l" id="logo" src="User.png"></image><span class="lol">Utilisateurs</span></a>
<a href="index.php?id=2" class="info"><image class="l" id="logos" src="Event.png"></image><span class="sais">Evenements</span></a>
<a href="index.php?id=3" class="info"><image class="l" id="logot" src="Categ.png"></image><span class="je">Categorie</span></a>
<a href="index.php?id=4" class="info"><image class="l" id="logo2" src="Stats.png" style="margin-right: 0%;"></image><span class="drole">Statistique</span></a>
<a href="other" class="info"><image class="l" id="logo1" src="Site.png" style="margin-right: 0;"></image><span class="les">je sais pas</span></a>
<a href="dest.php" class="info"><image class="l" id="logo3" src="deco.png" style="margin-right: 0;"></image><span class="mdr">Deconnexion</span></a>
</div>

<div id='wrap'>
<?php if (isset($_GET['id']) AND  $_GET['id'] == 66): ?>
<center><br><br><h2>Modification enregistré</h2></center>
<?php endif; ?>

<?php if(!isset($_GET['id']) OR $_GET['id'] == 1): ?>

<section id='moite' > 
 <center><h1>Info Utilisateur</h1>
 <select id="N_User" name="N_User">
  <?php include("User_Lister.php"); ?>
 </select><br><br>
 <input id="Ibouton" type="submit" value="Informations" style="color:white"></center>
 <br><center><div id="info"></div></center>
 <script type="text/javascript">
  function pastordu(){
  $("#Ibouton").click( function () {
    $("#info").css({display : 'inline'})
    var liste, texte;
    liste = document.getElementById("N_User");
    texte = liste.options[liste.selectedIndex].text;                      
      $.ajax({ 
         type: "POST", 
         url: "INF_USer.php", 
         data: "l=" + texte, 
         success: function(msg){
              $('#info').html(msg);

                          
         }
      })
     return false; 

});
}
pastordu();
 </script>
</section>

<?php endif; ?>

 <?php if(isset($_GET['id']) AND $_GET['id'] == 3): ?>
   <section id='moite' > 
 <center><h1>Ajout Villes</h1></center>
 <center><form action="ADD_Tag.php" method="POST">
<p id="fuck">Libell&eacute; :</p>
 <input id="eventbox" name="ville" type="text" require><br>
<br><input id="Sbouton" type="submit" value="Ajouter" style="color:white">
 </form>
 </center>

 </section>
 <?php endif; ?>

<?php if(isset($_GET['id']) AND $_GET['id'] == 2): ?>
 <section id='moite' > 
 <center><h1>Ajout Evenement</h1>
<?php
if(isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
  echo '<ul style="padding:0; color:red;">';
  foreach($_SESSION['ERRMSG_ARR'] as $msg) {
    echo '',$msg,'<br>'; 
  }
  echo '</ul>';
  unset($_SESSION['ERRMSG_ARR']);
}
?> 
 <form id="add" method="POST" action="ADD_Event.php" enctype="multipart/form-data">
 <p id="fuck">Libell&eacute; :</p>
 <input id="eventbox" name="lib" type="text" require><br>
 <p id="fuck">Description :</p>
 <textarea name="comment" form="add">Entrez un descriptif ici...</textarea><br>
 <p id="fuck">Cat&eacute;gorie professionnel ou festif : </p>
 <select name="FP">
 	<option>Festif</option>
 	<option>Professionnel</option>
 </select><br>
 <p id="fuck">Visio ? </p>
  <select name="Visio">
  <option>Non</option>
  <option>Oui</option>
 </select><br>
  <p id="fuck">Ville : </p>
 <select name="region">
  <?php include("Tag_Lister.php"); ?>
 </select><br>
 <p id="fuck">URL :</p>
 <input id="eventbox" type="url" name="url"><br>
 <p id="fuck">Email Contact :</p>
 <input id="eventbox" type="mail" name="mail" require><br>
 <p id="fuck">Image :</p>
   <div class="upload">
        <input type="hidden" name="MAX_FILE_SIZE" value="1099999">
        <input type="file" name="upload"/>
   </div>
 <p id="fuck">Prix : </p>
 <input id="eventbox" type="number" name="prix"><br>
 <p id="fuck">Place : </p>
 <input id="eventbox" type="number" name="place"><br>
 <p id="fuck">Date et heure (year-month-days H:M:S): </p>
 <input id="eventbox" type="datetime-local" name="drate"><br><br>
 <input id="Sbouton" type="submit" value="Ajouter" style="color:white"><br><br></center>
 
 
 </form>
<?php endif; ?>


</section>
<?php if(!isset($_GET['id']) OR $_GET['id'] == 1): ?>
	 <section id='moite' > 
 <center><h1>Supression Utilisateur</h1></center>
 <center><form action="SUPP_User.php" method="POST">
 <select id="userp" name="user">
  <?php include("User_Lister.php"); ?>
 </select><br><br>
 <input id="Eb" type="submit" value="Supprimer" style="color:white">
 </form>
 <p style="padding:0; color:red;">Attention, Toutes suppresion est definitive.</p>
 </center>

 </section>
 <?php endif; ?>





<?php if(isset($_GET['id']) AND $_GET['id'] == 2): ?>

 <section id='moite' > 
 <center><h1>Supression Evenement</h1></center><br><br>
 <center><form action="SUPP_Event.php" method="POST">
 <select id="N_event" name="N_event">
  <?php include("Event_Lister.php"); ?>
 </select><br><br>
 <input id="Eb" type="submit" value="Supprimer" style="color:white"><br><br>
  <input id="Ibouton" type="submit" value="Informations" style="color:white"></center>
 </form> 
  <center><p style="padding:0; color:red;">Attention, Toutes suppresion est definitive.</p></center>


  <br><center><div id="info"></div></center>
 <script type="text/javascript">
  function pastord(){
  $("#Ibouton").click( function () {
    $("#info").css({display : 'inline'})
    var liste, texte;
    liste = document.getElementById("N_event");
    texte = liste.options[liste.selectedIndex].text;                      
      $.ajax({ 
         type: "POST", 
         url: "INF_Event.php", 
         data: "l=" + texte, 
         success: function(msg){
              $('#info').html(msg);

                          
         }
      })
     return false; 

});
}
pastord();
 </script>
 
<?php endif; ?>

 <?php if(isset($_GET['id']) AND $_GET['id'] == 3): ?>
   <section id='moite' > 
 <center><h1>Supression Villes</h1></center><br><br>
 <center><form action="SUPP_Tag.php" method="POST">
 <select id="tagsel" name="Tag">
  <?php include("Tag_Lister.php"); ?>
 </select><br><br>
<input id="Eb" type="submit" value="Supprimer" style="color:white">
 </form>
 <p style="padding:0; color:red;">Attention, Toutes suppresion est definitive.</p>
 </center>

 </section>
 <?php endif; ?>

</section>

</div>

<?php endif; ?>

<?php if(!isset($_SESSION['Admin']) OR $_SESSION['Admin'] != true): ?>

<div id='log'>
<?php
if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
  echo '<ul style="padding:0; color:red; margin:5px;">';
  foreach($_SESSION['ERRMSG_ARR'] as $msg) {
    echo '',$msg,'<br>'; 
  }
  echo '</ul>';
  unset($_SESSION['ERRMSG_ARR']);
}
?>
	<center><br><form action="Plogin.php" method="POST">
		<p><h1 style="color:#fffff0">Panel Admin</h1></p>
		<input id="conbox" name="user" type="text" placeholder="Login"><br><br>
		<input id="conbox" name="pass" type="password" name="" placeholder="passworld"><br><br><br><br>
		<input id="consub" type="submit" value="Submit">
	</form></center>
</div>

<?php endif; ?>

</body>