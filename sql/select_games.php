<?php
	require_once("sql/db_connection.php");  

	$sql_all_platforms = "SELECT * FROM platform";
	$result_all_platforms = $conn->query($sql_all_platforms);
	$sql_all_kategories = "SELECT * FROM game_type";
	$result_all_kategories = $conn->query($sql_all_kategories);
	if (isset($_GET['platform']) || isset($_GET['kategorie']) || isset($_GET['suche'])) {
		$such_text = (isset($_GET['suche']) ? $_GET['suche'] : "%%");
		$platform_id = (isset($_GET['platform']) ? $_GET['platform'] : "%%");
		$katagorie_id = (isset($_GET['kategorie']) ? $_GET['kategorie'] : "%%");
		$sql_suche_games = "SELECT * FROM produkt WHERE fk_game_type LIKE '".$katagorie_id."' AND fk_platform LIKE '".$platform_id."' AND name LIKE '%".$such_text."%'";
		$result_games = $conn->query($sql_suche_games);
	} else {
		$sql_all_games = "SELECT * FROM produkt";
		$result_games = $conn->query($sql_all_games);
	}