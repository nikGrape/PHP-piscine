#!/usr/bin/env php
<?php
	$words = array();
	for ($i = 1; $argv[$i]; $i++)
		$words = array_merge($words, ft_split($argv[$i]));
	usort($words, "my_sort");
	groups_print($words);

	function my_sort($a, $b)
	{
		return ($a[0] > $b[0]);
	}

	function groups_print($words)
	{
		for ($i = 0; $words[$i]; $i++)
		{
			if (ctype_alpha($words[$i][0]))
				echo($words[$i] . "\n");
		}
		for ($i = 0; $words[$i]; $i++)
		{
			if (ctype_digit($words[$i][0]))
				echo($words[$i] . "\n");
		}
		for ($i = 0; $words[$i]; $i++)
		{
			if (!ctype_digit($words[$i][0]) and !ctype_alpha($words[$i][0]))
				echo($words[$i] . "\n");
		}
	}

	function ft_split($str)
	{
		$res = array();
		$words = explode(" ", $str);
		foreach ($words as $word)
			if ($word != "")
				array_push($res, $word);
		return($res);
	}
?>