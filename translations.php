<?php

require_once "spyc.php";

$languageArray = explode('/', getenv('REQUEST_URI'));
$arrayLength   = count($languageArray);
$language      = $languageArray[$arrayLength - 1];

if ($language !== 'nl') {
    $language = 'en';
    $newL = 'nl';
} else {
    $newL = 'en';
}

$newUrl    = 'http://' . $_SERVER['HTTP_HOST'] . '/' . $languageArray[$arrayLength - 2] . '/' . $newL;
$languages = Spyc::YAMLLoad('translations.yaml');