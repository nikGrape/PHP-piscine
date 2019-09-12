#!/usr/bin/env php
<?php
	function ft_split($str)
	{
		$words = explode(" ", $str);
		$words = array_diff($words, array(''));
		sort($words);
		return($words);
	}
?>