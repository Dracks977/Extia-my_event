<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="initial-scale=1,maximum-scale=1,target-densitydpi=device-dpi"/>
<header>
<title>Se connecter</title>
    <link rel='stylesheet' type='text/css' href='css/styleconex.css'>
        <link rel='stylesheet' type='text/css' href='css/style2.css'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<div id="logo"
<a href="http://www.extia.fr"><img alt="Extia1" src="img/Logo_FINAL3.png" id="hover"></a>
</div>
<div id="co">
<a href="page/connexion.php"><img alt="Connexion" src="img/connexion1.png" id="connexion1"></a>
</div>
<nav id="menu_header">
  <ul id="head">
    <li class="h"><a href="index.php" class="info"><img alt="Extia1" src="img/accueil.png" id="acc" style="width:50px"><span class="lol">Accueil</span></a></li>
    <li class="h"><a href="page/event_pro.php" class="info"><img alt="Extia1" src="img/pro.png" id="pro" style="width:50px"><span class="mdr">Professionnel</span></a></li>
    <li class="h"><a href="page/event_fun.php" class="info"><img alt="Extia1" src="img/fun.png" id="fun" style="width:50px"><span class="je">Festif</span></a></li>
    <li class="h"><a href="page/contact.php" class="info"><img alt="Extia1" src="img/contact.png" id="cont" style="width:50px"><span class="sais">Contact</span></a></li>
  </ul>
</nav>
</header>

<html>
        <body>
        <div class="slideshow">
        <ul>
        <li><img src="img/image1.jpg" alt="" width="1300" height="600" /></li>
        <li><img src="img/image2.jpg" alt="" width="1300" height="600" /></li>
        <li><img src="img/image3.jpg" alt="" width="1300" height="600" /></li>
        <li><img src="img/image4.jpg" alt="" width="1300" height="600" /></li>
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
            <a href="event_pro.php"><img src="1.png" id = "im1"></a>
            <a href="event_fest.php"><img src="2.png" id = "im2"></a>
            <a href="region.php"><img src="3.png" id = "im3"></a>
            <div class="wrapper">
            </div>
            <h1 align="center">Evenements a venir</h1>
                <div id="article1">
                    <div id="article2">
                        <div id="article3">
                            <div id="article4">
                                <div id="article5">
                                <div class="sliderContainer">
                                    <div class="content">
                                        <div class="item"><img src="lettre.png" id = "image1" alt="1"/>
                                        </div>

                                        <div class="item"><img src="lettre.png" id = "image1" alt="2"/>
                                        </div>
                                        <div class="item"><img src="lettre.png" id = "image1" alt="3"/>
                                        </div>
                                        <div class="item"><img src="lettre.png" id = "image1" alt="4"/>
                                        </div>
                                        <div class="item"><img src="lettre.png" id = "image1" alt="5"/>
                                        </div>
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
    </html>
		
		
<script type="text/javascript" src="js/logohover.js"></script>
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