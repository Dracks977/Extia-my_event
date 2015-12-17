<!DOCTYPE html>
<html>
<header>
  <title>Extia Events</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="../css/styleev.css">
    <link rel="stylesheet" type="text/css" href="../activecalendar/data/css/plain.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<?php include("headerconnect.php"); ?>
</header>
<body>
<?php

include('../php/config.php');



require_once("../activecalendar/source/activecalendar.php");
$cal = new activeCalendar();

try {
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname;charset=utf8",$dbuser,$dbpass);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "Connection failed (check config.php):   " . $e->getMessage();
    }

    $result = $conn->prepare("SELECT * FROM Event");
    $result->execute();
        while ($donnees = $result->fetch()){
      $date = strtotime($donnees['Darte']);
      $y = date('Y', $date);
      $m = date('m', $date);
      $d = date('d', $date);
      $h = date('H', $date);
      $i = date('i', $date);
  $cal->setEvent($y,$m,$d,$donnees['Libelle'],"article.php?id={$donnees['ID']}"); // create a class="event" and an <a href="this_page.php">
}

?> 
  <div class="menu_gauche">
    <div class="image1">
    <p id="cat1">Calendrier</p>
         <center><?php print $cal->showMonth(); ?></center>
    </div>
    <div class="txt1">
      <p id="cat1">Cat&eacutegories</p>
        <a href ="event_fun.php"><button id="Gbouton">Fun</button></a>&nbsp;&nbsp;<a href="event_pro.php"><button id="Gbouton">Pro</button></a>
      <p id="ville1">Villes</p>
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
           url: "../php/TageventF.php", 
           data: "tag="+i, 
           success: function(msg){
          var y = document.querySelectorAll('.case_one');
          var x = document.querySelectorAll('.case_pouet');
          $(y).remove();
          $(x).remove();
          $('body').append(msg);
           }
        });
        return false; 
});
})
  </script>

<?php include("../php/eventF.php"); ?>

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