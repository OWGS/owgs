<?php
/**
 * Created by PhpStorm.
 * User: eeglit
 * Date: 01.06.2015
 * Time: 08:32
 */

$optionsPlz = array( 'options' => array('min_range' => 1, 'max_range' => 5));
$optionsGuthaben = array( 'options' => array('min_range' => 0, 'max_range' => 99999));
$optionsPassword = array( 'options' => array('min_range' => 8, 'max_range' => 255));
$optionsLengthDefault = array( 'options' => array('min_range' => 1, 'max_range' => 255));
$validate = true;

if ($plz && !filter_var(strlen($plz), FILTER_VALIDATE_INT, $optionsPlz)) {
    $_SESSION["bad"] = $_SESSION["bad"] . " PLZ nicht valid.";
    $validate = false;
}

if ($guthaben && !filter_var(strlen($guthaben) , FILTER_VALIDATE_INT, $optionsGuthaben)) {
    $_SESSION["bad"] = $_SESSION["bad"] . " Guthaben nicht valid.";
    $validate = false;
}

if ($password && !filter_var(strlen($password), FILTER_VALIDATE_INT, $optionsPassword)) {
    $_SESSION["bad"] = $_SESSION["bad"] . " Passwort nicht valid.";
    $validate = false;
}

if ($name && !filter_var(strlen($name), FILTER_VALIDATE_INT, $optionsLengthDefault)) {
    $_SESSION["bad"] = $_SESSION["bad"] . " Name nicht valid.";
    $validate = false;
}

if ($vorname && !filter_var(strlen($vorname), FILTER_VALIDATE_INT, $optionsLengthDefault)) {
    $_SESSION["bad"] = $_SESSION["bad"] . " Vorname nicht valid.";
    $validate = false;
}

if ($username && !filter_var(strlen($username), FILTER_VALIDATE_INT, $optionsLengthDefault)) {
    $_SESSION["bad"] = $_SESSION["bad"] . " Username nicht valid.";
    $validate = false;
}

if ($email && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION["bad"] = $_SESSION["bad"] . " E-Mail nicht valid.";
    $validate = false;
}

if (!preg_match('/^[A-z]{1,60}\.?[A-z]{1,60}?\.?\s[0-9]{1,5}?$/', $adresse)) {
    $_SESSION["bad"] = $_SESSION["bad"] . " Adresse nicht valid.";
    $validate = false;
}
