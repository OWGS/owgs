<?php
	require_once("sql/db_connection.php");

	$sql = "SELECT * FROM produkt ORDER BY date DESC LIMIT 6";
	$result = $conn->query($sql);