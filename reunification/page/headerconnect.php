<?php
session_start();

if(isset($_SESSION['c']) AND $_SESSION['c'] == true){
echo "
<div id='logo' style='margin-top: -18px;'
<a href='http://www.extia.fr'><img alt='Extia1' src='../img/Logo_FINAL3.png' id='hover'></a>
</div>
<div id='co' style = 'color: #F26e27; padding-top : 40px;'>
<a href='../php/dest.php' style='text-decoration: none; color : #F26e27;'><img id='decolol' style='width : 50px;' src='../img/deconoir.png'></img></a>
</div>
<div id ='colo' style='color : #F26e27; float: right; margin-right: 3%; padding-top: 20px; '
<p>" . $_SESSION['User_Nom'] . "_" . $_SESSION['User_Prenom'] ."</p>
</div>
<nav id='menu_header'>
  <ul id='head'>
    <li class='h'><a href='../index.php' class='info'><img alt='Extia1' src='../img/accueil.png' id='acc' style='width:50px'><span class='lol'>Accueil</span></a></li>
    <li class='h'><a href='event_pro.php' class='info'><img alt='Extia1' src='../img/pro.png' id='pro' style='width:50px'><span class='mdr'>Pro</span></a></li>
    <li class='h'><a href='event_fun.php' class='info'><img alt='Extia1' src='../img/fun.png' id='fun' style='width:50px'><span class='je'>Fun</span></a></li>
    <li class='h'><a href='contact.php' class='info'><img alt='Extia1' src='../img/contact.png' id='cont' style='width:50px'><span class='sais'>Contact</span></a></li>
  </ul>
</nav>
<script>
$( '#co' ).mouseenter(function() {
 $('#decolol').attr('src', '../img/discorange.png')
});
$( '#co' ).mouseleave(function() {
 $('#decolol').attr('src', '../img/deconoir.png')
});
</script>
";

}
else{
  echo "
  <div id='logo'
<a href='http://www.extia.fr'><img alt='Extia1' src='../img/Logo_FINAL3.png' id='hover'></a>
</div>
<div id='co'>
<a href='connexion.php'><img alt='Connexion' src='../img/connexion1.png' id='connexion1'></a>
</div>
<nav id='menu_header'>
  <ul id='head'>
    <li class='h'><a href='../index.php' class='info'><img alt='Extia1' src='../img/accueil.png' id='acc' style='width:50px'><span class='lol'>Accueil</span></a></li>
    <li class='h'><a href='event_pro.php' class='info'><img alt='Extia1' src='../img/pro.png' id='pro' style='width:50px'><span class='mdr'>Pro</span></a></li>
    <li class='h'><a href='event_fun.php' class='info'><img alt='Extia1' src='../img/fun.png' id='fun' style='width:50px'><span class='je'>Fun</span></a></li>
    <li class='h'><a href='contact.php' class='info'><img alt='Extia1' src='../img/contact.png' id='cont' style='width:50px'><span class='sais'>Contact</span></a></li>
  </ul>
</nav>
";
}
?>
