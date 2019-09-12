#!/usr/bin/env php
<?php
	$words = array();
	foreach ($argv as $ar)
		$words = array_merge($words, ft_split($ar));
	usort($words, "my_sort");
	groups_print($words);

	function my_sort($a, $b)
	{
		return ($a[0] > $b[0]);
	}

	function groups_print($words)
	{
		foreach ($words as $word)
		{
			if (ctype_alpha($word[0]))
				echo($word . "\n");
		}
		foreach ($words as $word)
		{
			if (ctype_digit($word[0]))
				echo($word . "\n");
		}
		foreach ($words as $word)
		{
			if (!ctype_digit($word[0]) and !ctype_alpha($word[0]))
				echo($word . "\n");
		}
	}

	function ft_split($str)
	{
		$res = array();
		$words = explode(" ", $str);
		foreach($words as $word)
			if ($word != '')
				array_push($res, $word);
		return($res);
	}
?>