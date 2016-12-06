<?php

$naam    = $_POST["name"];
$email   = $_POST["email"];
$company = $_POST["company"];
$date    = $_POST["date"];
$persons = $_POST["persons"];
$remarks = $_POST["remarks"];

$from    = 'thibault@puzzle.gent';

$headers = "From:" . $from;

$to = "escape@puzzle.gent";

$subject = "Teambuilding aanvraag: " .  "- " . $company ;

$message = "Email automatisch verstuurt na het invullen van het teambuilding formulier op puzzle.gent \n\n".
    "Naam" . $naam . "\n" .
    "Email: " . $email . "\n" .
    "Bedrijf: " . $company . "\n" .
    "Gewenste datum: " . $date . "\n" .
    "Aantal personen: " . $persons . "\n" .
    "Opmerkingen: " . $remarks . "\n" ;


if (!empty($_POST['name']))
{
    mail($to, $subject, $message, $headers);
}

header('location:teambuilding.php');




