<?php
session_start();
    $alert = 'success';
if(empty($_POST['prenom']) || 
    empty($_POST['nom']) || 
    empty($_POST['mail']) || 
    empty($_POST['phone']) || 
    empty($_POST['sujet']) || 
    empty($_POST['message'])) {
    // echo('Veuillez remplir le formulaire avant d\'envoyer');
    $alert = 'error';
    
} else {

    $prenom = strip_tags(utf8_decode($_POST['prenom'])) ;
    $nom = strip_tags(utf8_decode($_POST['nom'])) ;
    $mail = strip_tags(utf8_decode($_POST['mail'])) ;
    $phone = strip_tags(utf8_decode($_POST['phone'])) ;
    $sujet = strip_tags(utf8_decode($_POST['sujet'])) ;
    $message = strip_tags(utf8_decode($_POST['message'])) ;
    
    // $message_final = $prenom." ".$nom." < " .$mail. " > \n\n";
    // $message_final .= $phone."\n\n\n";
    // $message_final .= $message."\"";
    
     
    $to = 'hattab_sami@yahoo.fr'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
    $subject = "Website Contact Form: $sujet";
    $body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $prenom"." "." $nom\n\nEmail: $mail\n\nPhone: $phone\n\nMessage:\n\n$message";
    $headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
    $headers .= "Reply-To: $mail";

    mail($to,$subject,$body,$headers);

    // mail('hattab_sami@yahoo.fr',$sujet,$message_final);

    
}
$_SESSION['alert'] = $alert;

header('Location: ../contact.php'); 
?>