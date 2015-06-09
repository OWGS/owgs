<?php
require_once(__DIR__ . "/db_connection.php");

$game_id = mysqli_real_escape_string($conn, $_GET['id']);
$sql_select_game = "SELECT * FROM produkt WHERE id=" . $game_id . " LIMIT 1";
$result_game = $conn->query($sql_select_game);
$game = $result_game->fetch_assoc();

$sql_select_platform = "SELECT * FROM platform WHERE id=" . $game['fk_platform'] . " LIMIT 1";
$result_game_platform = $conn->query($sql_select_platform);
$game_platform = $result_game_platform->fetch_assoc();

$sql_select_kategorie = "SELECT * FROM game_type WHERE id=" . $game['fk_game_type'] . " LIMIT 1";
$result_game_kategorie = $conn->query($sql_select_kategorie);
$game_kategorie = $result_game_kategorie->fetch_assoc();