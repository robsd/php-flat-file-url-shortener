<?php
	if (!isset($_GET['alias']))
	{
		die("Welcome to the URL shortener!");
	}

	$alias = htmlspecialchars($_GET['alias']);

	if (!file_exists("urls/$alias.txt"))
	{
		die("URL /$alias not found!");
	}

	header("Location: " . file_get_contents("urls/$alias.txt"));
?>