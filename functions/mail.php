<?php
//get data from form  
if(isset($_POST['name'])){
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = $_POST['email'];
    $to = "thomas@thomastestaud.fr";
    $subject = $_POST['name'];
    $message = $_POST['message'] . "    -". $_POST['name'];
    $headers = "From:" . $from;
    if(mail($to,$subject,$message, $headers)) {
        echo "<p class='notif'>Votre message à bien été envoyé</p>";
    } else {
        echo "<p class='notif'>Echec de l'envoi</p>";
    }
}

?>