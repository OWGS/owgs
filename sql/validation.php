<?php
/**
 * Created by PhpStorm.
 * User: eeglit
 * Date: 01.06.2015
 * Time: 08:32
 */

$optionsGuthaben = array('options' => array('min_range' => 0, 'max_range' => 99999));
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

if (!preg_match($regesOnlyChar, $name)) {
    $_SESSION["bad"] = $_SESSION["bad"] . " Name nicht valid. <br />";
    $validate = false;
}

if (!preg_match($regesOnlyChar, $vorname)) {
    $_SESSION["bad"] = $_SESSION["bad"] . " Vorname nicht valid. <br />";
    $validate = false;
}

if (!preg_match('/^[a-z0-9_\.%*#]{1,255}$/', $username)) {
    $_SESSION["bad"] = $_SESSION["bad"] . " Username nicht valid. Folgende Zeichen sind erlaubt: alle Kleinbuchstaben, Zahlen und  _ . % * # <br />";
    $validate = false;
}

if ($email && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION["bad"] = $_SESSION["bad"] . " E-Mail nicht valid. <br />";
    $validate = false;
}

if (!preg_match('/^[A-zäöüàéè]{1,60}\.?[A-zäöüàéè]{1,60}?\.?\s[0-9]{1,5}?$/', $adresse)) {
    $_SESSION["bad"] = $_SESSION["bad"] . " Adresse nicht valid. <br />";
    $validate = false;
}
