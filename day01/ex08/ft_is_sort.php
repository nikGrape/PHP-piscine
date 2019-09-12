#!/usr/bin/env php
<?php
	function ft_is_sort($arr)
	{
		$sort = $arr;
		sort($sort);
		return ($sort === $arr);
	}
?>