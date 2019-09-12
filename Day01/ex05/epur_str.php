#!/usr/bin/env php
<?php
	$words = ft_split($argv[1]);
	for ($i = 0; $words[$i + 1]; $i++)
		echo($words[$i] . " ");
	echo($words[$i] . "\n");

	function ft_split($str)
	{
		$words = explode(" ", $str);
		$words = array_diff($words, array(''));
		return($words);
	}
?>