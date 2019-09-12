#!/usr/bin/env php
<?php
	function ft_split($str)
	{
		$words = split(" +", $str);
		sort($words);
		return($words);
	}
?>