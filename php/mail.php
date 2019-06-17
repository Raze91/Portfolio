<?php
$prenom = strip_tags(htmlspecialchars($_POST['prenom'])) ;
$nom = strip_tags(htmlspecialchars($_POST['nom'])) ;
$mail = strip_tags(htmlspecialchars($_POST['mail'])) ;
$phone = strip_tags(htmlspecialchars($_POST['phone'])) ;
$sujet = strip_tags(htmlspecialchars($_POST['sujet'])) ;
$message = strip_tags(htmlspecialchars($_POST['message'])) ;

$message_final = "De la part de : " .$prenom . $nom." < " .$mail. " > \n\n";
$message_final .= "Numéro de téléphone : " .$phone." \n\n\n";
$message_final .= "Message : ".$message."\"";

// $message_final = "De la part de :" .$prenom. " " .$nom. "\n Message :" .$message;
 
mail('hattab_sami@yahoo.fr',$sujet,strip_tags(htmlspecialchars($message_final)));
 

echo( "Votre nom: <b>".$nom."</b> <br>" ) ;
echo( "Votre prénom: <b>".$prenom."</b> <br>" ) ;
echo( "Votre mail: <b>".$mail."</b> <br>" ) ;
echo( "Votre numéro de télephone: <b>".$phone."</b> <br>" ) ;
echo( "Sujet de votre message: <b>".$sujet."</b> <br>" ) ;
echo( "Votre message: <b>".$message."</b> <br>" );
echo( "Message final: <b>".$message_final."</b> <br>" );
?>