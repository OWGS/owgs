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
        $result_games_all = $conn->query("SELECT * FROM produkt WHERE fk_game_type LIKE '".$katagorie_id."' AND fk_platform LIKE '".$platform_id."' AND name LIKE '%".$such_text."%'");
		$sql_suche_games = "SELECT * FROM produkt WHERE fk_game_type LIKE '".$katagorie_id."' AND fk_platform LIKE '".$platform_id."' AND name LIKE '%".$such_text."%' LIMIT $startpoint, $limit";
		$result_games = $conn->query($sql_suche_games);
	} else {
        $result_games_all = $conn->query("SELECT * FROM produkt");
		$sql_all_games = "SELECT * FROM produkt LIMIT $startpoint, $limit";
		$result_games = $conn->query($sql_all_games);
	}
	
function GameNameKürzen($GameName)
{
	if(strlen($GameName)<=27) {  
    echo $GameName;
	} else {
    $GameNameKurz=substr($GameName,0,27) . '...';
    echo $GameNameKurz;
	}
}