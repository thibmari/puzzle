<?php

$naam    = $_POST["name"];
$email   = $_POST["email"];
$coupons = $_POST["coupons"];


$from    = 'thibault@puzzle.gent';

$headers = "From:" . $from;

$to = "escape@puzzle.gent";

$subject = "Teambuilding aanvraag: " .  "- " . $naam ;

$message = "Email automatisch verstuurt na het invullen van het cadeaubon formulier op puzzle.gent \n\n".
    "Naam" . $naam . "\n" .
    "Email: " . $email . "\n" .

    "Aantal bonnen: " . $coupons . "\n";


if (!empty($_POST['name']))
{
    mail($to, $subject, $message, $headers);
}

header('location:teambuilding.php');




