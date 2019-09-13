#!/usr/bin/env php
<?php
    date_default_timezone_set("America/Los_Angeles");
    $fd = fopen("/var/run/utmpx", 'r');    
    while ($line = fread($fd, 628))
    {
        $line = unpack("a256user/a4id/a32line/ipid/itype/I2time", $line);
        if (strstr($line['user'], "vinograd"))
        {
            echo($line['user'] . " " . $line['line'] . "  ");
            echo(date("M d H:i", $line['time1']) . "\n");
        }
    }
    fclose($fd);
?>