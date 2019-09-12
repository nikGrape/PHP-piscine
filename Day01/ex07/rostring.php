#!/usr/bin/env php
<?php
	$words = ft_split($argv[1]);

	for ($i = 1; $words[$i]; $i++)
		echo($words[$i] . " ");
	echo($words[0] . "\n");

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