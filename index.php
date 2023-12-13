<?php
	if (!isset($_GET['alias']))
	{
		http_response_code(400);
		die();
	}

	$alias = htmlspecialchars($_GET['alias']);

	if (!file_exists("urls/$alias.txt"))
	{
		http_response_code(404);
		die();
	}

	header("Location: " . file_get_contents("urls/$alias.txt"));
?>
