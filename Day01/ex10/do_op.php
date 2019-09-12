#!/usr/bin/env php
<?php
	if ($argc == 4)
	{
		$res = 0;
		$i = (int)trim($argv[1]);
		$op = trim($argv[2]);
		$j = (int)trim($argv[3]);
		if ($op == "+")
			$res = $i + $j;
		else if ($op == "-")
			$res = $i - $j;
		else if ($op == "*")
			$res = $i * $j;
		else if ($op == "/")
			$res = $i / $j;
		else if ($op == "%")
			$res = $i % $j;
		echo($res . "\n");
	}
	else
		echo("error\n");
?>