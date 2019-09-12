#!/usr/bin/env php
<?php
	$words = split(" +", $argv[1]);
	for ($i = 0; $words[$i + 1]; $i++)
		echo($words[$i] . " ");
	echo($words[$i] . "\n");	
?>