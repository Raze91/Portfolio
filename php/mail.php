<?php
session_start();
    $alert = '0';
if(empty($_POST['prenom']) || empty($_POST['nom']) || empty($_POST['mail']) || empty($_POST['phone']) || empty($_POST['sujet']) || empty($_POST['message'])) {
    // echo('Veuillez remplir le formulaire avant d\'envoyer');
    $alert = '1';
    
} else {

    $prenom = strip_tags(htmlspecialchars($_POST['prenom'])) ;
    $nom = strip_tags(htmlspecialchars($_POST['nom'])) ;
    $mail = strip_tags(htmlspecialchars($_POST['mail'])) ;
    $phone = strip_tags(htmlspecialchars($_POST['phone'])) ;
    $sujet = strip_tags(htmlspecialchars($_POST['sujet'])) ;
    $message = strip_tags(htmlspecialchars($_POST['message'])) ;
    
    $message_final = $prenom." ".$nom." < " .$mail. " > \n\n";
    $message_final .= $phone."\n\n\n";
    $message_final .= $message."\"";
    
    // $message_final = "De la part de :" .$prenom. " " .$nom. "\n Message :" .$message;
     
    mail('hattab_sami@yahoo.fr',$sujet,$message_final);

    
}
$_SESSION['alert'] = $alert;

header('Location: ../contact.php'); 
?>