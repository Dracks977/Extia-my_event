<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="initial-scale=1,maximum-scale=1,target-densitydpi=device-dpi"/>
<header>
<title>Se connecter</title>
    <link rel='stylesheet' type='text/css' href='css/styleconex.css'>
        <link rel='stylesheet' type='text/css' href='css/style2.css'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<?php include("page/Headerindex.php"); ?>
</header>

<html>
        <body>
        <div class="slideshow">
        <ul>
        <li><img  src="img/extia1.jpeg" alt="" width="1300" height="600" /></li>
        <li><img src="img/extia8.jpeg" alt="" width="1300" height="600" /></li>
        <li><img src="img/extia2.jpeg" alt="" width="1300" height="600" /></li>
        <li><img src="img/extia9.jpeg" alt="" width="1300" height="600" /></li>
        </ul>
            <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>

            <script type="text/javascript">
                     $(function(){
                          setInterval(function(){
                              $(".slideshow ul").animate({marginLeft:-1300},1000,function(){
                                     $(this).css({marginLeft:0}).find("li:last").after($(this).find("li:first"));
                                 })
                             }, 5000);
                        });
              </script>
        </div>
            <div class="description">
            <a href="event_pro.php"><img src="img/e2.png" id="im1"></a>
            <a href="event_fest.php"><img src="img/e2.png" id="im2"></a>
            <a href="region.php"><img src="img/e2.png" id="im3"></a>
            <div class="wrapper">
            </div>
            <h1 align="center">Évènements à venir</h1>
                <div id="article1">
                    <div id="article2">
                        <div id="article3">
                            <div id="article4">
                                <div id="article5">
                                  <div class="sliderContainer">
                                    <div class="content">
                                        <div class="item"><img src="lettre.png" id = "image1" alt="1"/></div>
                                        <div class="item"><img src="lettre.png" id = "image1" alt="2"/></div>
                                        <div class="item"><img src="lettre.png" id = "image1" alt="3"/></div>
                                        <div class="item"><img src="lettre.png" id = "image1" alt="4"/></div>
                                        <div class="item"><img src="lettre.png" id = "image1" alt="5"/></div>
                                    </div>
                                  </div>
                                  <a href="#artcile5" id ="a1">5</a>
                                </div>
                                <a href="#article4" id="a1">4</a>
                            </div>
                            <a href="#article3" id="a1">3</a>
                        </div>
                        <a href="#article2" id="a1">2</a>
                    </div>
                    <a href="#article1" id="a1">1</a>
                </div>
            </div>

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
          <img id="greatplace" class="img" src="img/Gp2.png" alt="logoGreatPlace"/>
        </ul>
      </div>
    </nav>
  </footer>
  <script type="text/javascript" src="js/logohover.js"></script>
  <script type="text/javascript" src="js/ajax.js"></script>
  <script type="text/javascript" src="js/finalfooter.js"></script>
  <script type="text/javascript">
    fleche()
  </script>
</html>