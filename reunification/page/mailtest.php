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
Nous avons remarqué avec l'équipe pédagogique et vos temps de logs que vous ne travaillez plus, et passez votre temps chez vous. <br />
Ainsi, nous avons décidé de vous exclure temporairement de l'etablissement pour une durée de 2 semaines après les vacances.<br />
Veuillez passer dans mon bureau à 18h45.<br />
Cordialement,<br />  
<br />
<br />
Force et Honneur. 
";
if (mail($destinataire, $objet, $message, $headers)) // Envoi du message
{
    echo 'Votre message a bien été envoyé ';
}
else // Non envoyé
{
    echo "Votre message n'a pas pu être envoyé";
}
?>