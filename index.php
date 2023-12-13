<?php
	if (!isset($_GET['alias']) || !file_exists("urls/$alias.txt"))
	{
		http_response_code(404);
		die();
	}

	$alias = htmlspecialchars($_GET['alias']);

	header("Location: " . file_get_contents("urls/$alias.txt"));
?>
