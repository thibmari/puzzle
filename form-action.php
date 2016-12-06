<?php

$naam = $_POST["name"];
$email = $_POST["email"];
$bericht = $_POST["message"];

$from = 'thibault@puzzle.gent';
//$from = "formulier@immo-apollo.be";
$headers = "From:" . $from;

//$to = "info@immo-apollo.be";
$to = "escape@puzzle.gent";

$subject = "Formulier Puzzle " .  "- " . $naam ;

$message = "Email automatisch verstuurt na het invullen van het formulier op puzzle.gent \n\n".
		   "Naam" . $naam . "\n" .
		   "Email: " . $email . "\n" .
		   "Bericht: " . $bericht ;


if (!empty($_POST['name']))
{
	mail($to, $subject, $message, $headers);
}
header('location:index.php');


?>

