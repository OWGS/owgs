<?php
	require_once("sql/db_connection.php");

	$sqlNewGames = "SELECT * FROM produkt ORDER BY date DESC LIMIT 6";
	$resultNewGames = $conn->query($sqlNewGames);