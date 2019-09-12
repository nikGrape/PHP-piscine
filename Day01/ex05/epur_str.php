#!/usr/bin/env php
<?php
	if ($argc == 2)
	{
		$words = preg_replace("/\s+/", " ", $argv[1]);
		$words = trim($words);
		echo($words . "\n");
	}
?>