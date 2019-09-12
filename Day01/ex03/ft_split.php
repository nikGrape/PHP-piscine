#!/usr/bin/env php
<?php
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