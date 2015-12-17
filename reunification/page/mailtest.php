<?php
$destinataire = 'vitiel_s@etna-alternance.net';
// Pour les champs $expediteur / $copie / $destinataire, séparer par une virgule s'il y a plusieurs adresses
$expediteur = 'robin.lequerec@etna-learning.fr';
$objet = "Prep'ETNA / Exclusion"; // Objet du message
$headers  = 'MIME-Version: 1.0' . "\n"; // Version MIME
$headers .= 'Content-type: text/html; charset=ISO-8859-1'."\n"; // l'en-tete Content-type pour le format HTML
$headers .= 'Reply-To: '.$expediteur."\n"; // Mail de reponse
$headers .= 'From: "robin.lequerec@etna-learning.fr"<'.$expediteur.'>'."\n"; // Expediteur
$headers .= 'Delivered-to: '.$destinataire."\n"; // Destinataire     
$message = "
Bonjour, <br /><br />

";
if (mail($destinataire, $objet, $message, $headers)) // Envoi du message
{
    echo "<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />

    <link rel='stylesheet' type='text/css' href='../css/styleevenpro.css'>
    <link rel='stylesheet' type='text/css' href='../css/styleconex.css'>

<meta http-equiv='refresh' content='1;URL=../index.php'>
<body>
<p style = 'color: #F26e27; font-size : 20px; text-align : center; margin-top : 15%;'>Le message est envoyé !</p>
</body>";
}
else // Non envoyé
{
 echo "<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />

    <link rel='stylesheet' type='text/css' href='../css/styleevenpro.css'>
    <link rel='stylesheet' type='text/css' href='../css/styleconex.css'>

<meta http-equiv='refresh' content='1;URL=../index.php'>
<body>
<p style = 'color: #F26e27; font-size : 20px; text-align : center; margin-top : 15%;'>Le message n'a pas pu être envoyé.</p>
</body>";
}
}
?>