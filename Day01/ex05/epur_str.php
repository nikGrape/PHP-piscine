#!/usr/bin/env php
<?php
	$words = ft_split($argv[1]);
	for ($i = 0; $words[$i + 1]; $i++)
		echo($words[$i] . " ");
	echo($words[$i] . "\n");

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