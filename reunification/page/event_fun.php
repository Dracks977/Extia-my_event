<!DOCTYPE html>
<html>
<header>
  <title>Extia Events</title>
  <link rel="stylesheet" type="text/css" href="../css/styleev.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<?php include("headerconnect.php"); ?>
</header>
<body>
  <div class="menu_gauche">
    <div class="image1">
      <img class="i6" src="../img/06.jpg">
    </div>
    <div class="txt1">
      <p id="cat1">Cat&eacutegorie</p>
        <button id="Gbouton">Festif</button><button id="Gbouton">Professionnel</button>
      <p id="ville1">Ville</p>
      <?php include("../php/Tag_Listener.php"); ?>
    </div>
  </div>
  <script type="text/javascript">

$(document).ready( function () {
 $couile = document.querySelectorAll('#bouton')
    $($couile).click( function() {  
    var i = $(this).text();                      
        $.ajax({ 
           type: "POST", 
           url: "../php/Tagevent.php", 
           data: "tag="+i, 
           success: function(msg){
          var y = document.querySelectorAll('.case_one');
          $(y).remove();
          $('body').append(msg);
           }
        });
        return false; 
});
})
  </script>

<?php include("../php/event.php"); ?>

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