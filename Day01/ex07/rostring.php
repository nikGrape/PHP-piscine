#!/usr/bin/env php
<?php
	$words = ft_split($argv[1]);

	for ($i = 1; $words[$i]; $i++)
		echo($words[$i] . " ");
	echo($words[0] . "\n");

	function ft_split($str)
	{
		$words = explode(" ", $str);
		$words = array_diff($words, array(''));
		return($words);
	}
?>