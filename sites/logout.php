<?php
session_start();
$_SESSION["authenticated"] = 0;
$_SESSION["good"] = "Sie haben sich erfolgreich ausgeloggt.";
header('Location: index.php?site=home');