#!/usr/bin/env php
<?php
	$words = array();
	for($i = 1; $argv[$i]; $i++)
		$words = array_merge($words, split(" +", $argv[$i]));
	sort($words);
	for ($i = 0; $words[$i]; $i++)
		echo($words[$i] . "\n");
?>