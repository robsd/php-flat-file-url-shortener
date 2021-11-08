<?php
	if (isset($_GET['alias']))
	{
		$alias = $_GET['alias'];
		
		if (file_exists("urls/$alias.txt"))
		{
			header("Location: " . file_get_contents("urls/$alias.txt"));
		}
		else
		{
			echo "URL /$alias not found!";
		}
	}
	else
	{
		echo "Welcome to the URL shortener!";
	}
?>
