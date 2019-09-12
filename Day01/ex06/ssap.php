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
			$res = array();
			$words = explode(" ", $str);
			foreach($words as $word)
				if ($word != '')
					array_push($res, $word);
			return($res);
		}
?>