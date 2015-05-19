<?php
	require_once(__DIR__."/db_connection.php");
    require_once(__DIR__."/../functions/gameNameKuerzen.php");

	$sqlAllPlatforms = "SELECT * FROM platform";
	$resultAllPlatforms = $conn->query($sqlAllPlatforms);
	$sqlAllKategories = "SELECT * FROM game_type";
	$resultAllKategories = $conn->query($sqlAllKategories);
	if (isset($_GET['platform']) || isset($_GET['kategorie']) || isset($_GET['suche'])) {
		$suchText = (isset($_GET['suche']) ? $_GET['suche'] : "%%");
		$platformId = (isset($_GET['platform']) ? $_GET['platform'] : "%%");
		$katagorieId = (isset($_GET['kategorie']) ? $_GET['kategorie'] : "%%");
        $resultGamesAll = $conn->query("SELECT * FROM produkt WHERE fk_game_type LIKE '".$katagorieId."' AND fk_platform LIKE '".$platformId."' AND name LIKE '%".$suchText."%'");
		$sqlSucheGames = "SELECT * FROM produkt WHERE fk_game_type LIKE '".$katagorieId."' AND fk_platform LIKE '".$platformId."' AND name LIKE '%".$suchText."%' LIMIT $startpoint, $limit";
		$resultGames = $conn->query($sqlSucheGames);
	} else {
        $resultGamesAll = $conn->query("SELECT * FROM produkt");
		$sqlAllGames = "SELECT * FROM produkt LIMIT $startpoint, $limit";
		$resultGames = $conn->query($sqlAllGames);
	}

