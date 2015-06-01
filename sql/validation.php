<?php
/**
 * Created by PhpStorm.
 * User: eeglit
 * Date: 01.06.2015
 * Time: 08:32
 */

$optionsGuthaben = array( 'options' => array('min_range' => 0, 'max_range' => 99999));
$optionsPassword = array( 'options' => array('min_range' => 8, 'max_range' => 255));
$regexNoSpecial = '/^[a-zA-Z0-9_\.%*#]{1,255}$/';
$regesOnlyChar = '/^[a-zA-Z]{1,255}$/';
$validate = true;

if (!preg_match('/^[0-9]{1,5}$/', $plz)) {
    $_SESSION["bad"] = $_SESSION["bad"] . " PLZ nicht valid.";
    $validate = false;
}

if (!preg_match('/^[0-9]{1,6}$/', $guthaben)) {
    $_SESSION["bad"] = $_SESSION["bad"] . " Guthaben nicht valid.";
    $validate = false;
}

if ($password && (!filter_var(strlen($password), FILTER_VALIDATE_INT, $optionsPassword) || !preg_match($regexNoSpecial, $password))) {
    $_SESSION["bad"] = $_SESSION["bad"] . " Passwort nicht valid. Folgende Zeichen sind erlaubt: a-z A-Z 0-9 _ . % * # <br />";
    $validate = false;
}

if (!preg_match($regesOnlyChar, $name)) {
    $_SESSION["bad"] = $_SESSION["bad"] . " Name nicht valid. <br />";
    $validate = false;
}

if (!preg_match($regesOnlyChar, $vorname)) {
    $_SESSION["bad"] = $_SESSION["bad"] . " Vorname nicht valid. <br />";
    $validate = false;
}

if (!preg_match($regexNoSpecial, $username)) {
    $_SESSION["bad"] = $_SESSION["bad"] . " Username nicht valid. Folgende Zeichen sind erlaubt: a-z A-Z 0-9 _ . % * # <br />";
    $validate = false;
}

if ($email && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION["bad"] = $_SESSION["bad"] . " E-Mail nicht valid. <br />";
    $validate = false;
}

if (!preg_match('/^[A-z]{1,60}\.?[A-z]{1,60}?\.?\s[0-9]{1,5}?$/', $adresse)) {
    $_SESSION["bad"] = $_SESSION["bad"] . " Adresse nicht valid. <br />";
    $validate = false;
}
