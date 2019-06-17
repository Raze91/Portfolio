<?php
$prenom = $_POST['prenom'] ;
$nom = $_POST['nom'] ;
$mail = $_POST['mail'] ;
$phone = $_POST['phone'] ;
$sujet = $_POST['sujet'] ;
$message = $_POST['message'];

$message_final = "De la part de : " .$prenom . $nom." < " .$mail. " > \n";
$message_final .= "Numéro de téléphone : " .$phone." \n";
$message_final .= "Message : ".$message."\"";

// $message_final = "De la part de :" .$prenom. " " .$nom. "\n Message :" .$message;
 
mail('hattab_sami@yahoo.fr',$sujet,$message_final);
 

echo( "Votre nom: <b>".$nom."</b>\r" ) ;
echo( "Votre prénom: <b>".$prenom."</b>\r" ) ;
echo( "Votre mail: <b>".$mail."</b>\r" ) ;
echo( "Votre numéro de télephone: <b>".$phone."</b>\r" ) ;
echo( "Sujet de votre message: <b>".$sujet."</b>\r" ) ;
echo( "Votre message: <b>".$message."</b>\r" );
echo( "Message final: <b>".$message_final."</b>\r" );
?>