<?php
$prenom = $_POST['prenom'] ;
$nom = $_POST['nom'] ;
$mail = $_POST['mail'] ;
$phone = $_POST['phone'] ;
$sujet = $_POST['sujet'] ;
$message = $_POST['message'];
 
mail('hattab_sami@yahoo.fr',$sujet,$message);

 
echo( "Votre nom: <b>".$nom."</b><br>\n" ) ;
echo( "Votre prénom: <b>".$prenom."</b><br>\n" ) ;
echo( "Votre mail: <b>".$mail."</b><br>\n" ) ;
echo( "Votre numéro de télephone: <b>".$phone."</b><br>\n" ) ;
echo( "Sujet de votre message: <b>".$sujet."</b>\n" ) ;
echo( "Votre message: <b>".$message."</b>\n" ) ;

?>