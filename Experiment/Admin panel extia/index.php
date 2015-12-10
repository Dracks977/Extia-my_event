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
<?php 

session_start(); if(isset($_SESSION['Admin']) AND $_SESSION['Admin'] == true):  ?>

<div id='header'>

<a href="index.php?id=1"><image class="l" id="logo" src="User.png"></image></a>
<a href="index.php?id=2"><image class="l" id="logo" src="Event.png"></image></a>
<a href="index.php?id=3"><image class="l" id="logo" src="Categ.png"></image></a>
<a href="index.php?id=4"><image class="l" id="logo2" src="Stats.png" style="margin-right: 0%;"></image></a>
<a href="other"><image class="l" id="logo1" src="Site.png" style="margin-right: 0;"></image></a>
<a href="other"><image class="l" id="logo3" src="deco.png" style="margin-right: 0;"></image></a>
</div>

<div id='wrap'>
<?php if (isset($_GET['id']) AND  $_GET['id'] == 66): ?>
<center><br><br><h2>Modification enregistré</h2></center>
<?php endif; ?>
<?php if(isset($_GET['id']) AND $_GET['id'] == 2): ?>
 <section id='moite' > 
 <center><h1>Ajout Event</h1>
 <?php
if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
  echo '<ul style="padding:0; color:#ffff;">';
  foreach($_SESSION['ERRMSG_ARR'] as $msg) {
    echo '',$msg,'<br>'; 
  }
  echo '</ul>';
  unset($_SESSION['ERRMSG_ARR']);
}
?>
 <form id="add" method="POST" action="ADD_Event.php" enctype="multipart/form-data">
 <p>Libelle</p>
 <input id="eventbox" name="lib" type="text"><br>
 <p>Description</p>
 <textarea name="comment" form="add">Enter text here...</textarea><br>
 <p>Fun ou Pro</p>
 <select name="FP">
 	<option>Fun</option>
 	<option>Pro</option>
 	<option>Pro_Visio</option>
 </select><br>
  <p>Region</p>
 <select name="region">
 	<option>Liste de touts les region a venir</option>
 	<option>apres ajout de region onglet #</option>
 </select><br>
 <p>url</p>
 <input id="eventbox" type="url" name="url"><br>
 <p>image</p>
   <div class="upload">
        <input type="hidden" name="MAX_FILE_SIZE" value="1099999">
        <input type="file" name="upload"/>
   </div>
 <p>Prix</p>
 <input id="eventbox" type="number" name="prix"><br>
 <p>Place</p>
 <input id="eventbox" type="number" name="place"><br>
 <p>Date et heure</p>
 <input id="eventbox" type="datetime-local" name="drate"><br><br>
 <input id="Sbouton" type="submit" value="Ajouter" style="color:white"><br><br></center>
 
 
 </form>
<?php endif; ?>


</section>


<?php if(isset($_GET['id']) AND $_GET['id'] == 2): ?>

 <section id='moite' > 
 <center><h1>Supression Event</h1></center><br>
 <center><form action="SUPP_Event.php" method="POST">
 <select id="N_event" name="N_event">
  <?php include("Event_Lister.php"); ?>
 </select>
 <input id="Ebouton" type="submit" value="Supprimer" style="color:white">
 <bouton id="Ibouton" type="submit" style="color:white">Information</bouton>
 </form> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

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
      // return false; 
   $("#Ibouton").click(function (){
    console.log("ca marche")
   $("#info").css({display : 'none'})
    pastord();
   });
});
}
pastord();
 </script>
 
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