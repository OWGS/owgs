<?php

require_once(__DIR__ . "/db_connection.php");
require_once(__DIR__ . "/../functions/gameNameKuerzen.php");


$sqlNewGames = "SELECT * FROM produkt ORDER BY date DESC LIMIT 6";
$resultNewGames = $conn->query($sqlNewGames);
