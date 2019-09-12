#!/usr/bin/env php
<?php
	$words = split(" +", $argv[1]);

	for($i = 1; $words[$i]; $i++)
		echo($words[$i] . " ");
	echo($words[0] . "\n");
?>