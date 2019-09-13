#!/usr/bin/env php
<?php
    if ($argc >= 2)
    {
        $text = preg_replace("/ +/", " ", $argv[1]);
        $text = trim($text);
        echo($text . "\n");
    }
?>