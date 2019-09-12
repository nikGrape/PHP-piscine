#!/usr/bin/env php
<?php
	$words = array();
	for($i = 1; $argv[$i]; $i++)
		$words = array_merge($words, ft_split($argv[$i]));
	sort($words);
	foreach ($words as $word)
		echo($word . "\n");


	function ft_split($str)
	{
		$words = explode(" ", $str);
		$words = array_diff($words, array(''));
		return($words);
	}
?>