<?php 
$nom=$_POST['name']; 
$mail=$_POST['email']; 
$message=$_POST['message']; 

/////voici la version Mine 
$headers = "MIME-Version: 1.0\r\n"; 

//////ici on détermine le mail en format text 
$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n"; 

////ici on détermine l'expediteur et l'adresse de réponse 
$headers .= "From: ".$nom." <".$mail.">\r\nReply-to : ".$nom." <".$mail.">\nX-Mailer:PHP"; 

$destinataire="pequignotcharlotte@gmail.com"; 
$body="$message"; 
if (mail($destinataire,$body,$headers)) { 
echo "Votre mail a été envoyé<br>"; 
} else { 
echo "Une erreur s'est produite"; 
} 

 