#!/usr/bin/env php
<?php
    if ($argc != 2)
        return(1);
    if (input_validate($argv[1]) == 0)
    {
        echo("Wrong Format\n");
        return (1);
    }
    $time = preg_split("/ +|:/", $argv[1]);
    date_default_timezone_set("Europe/Paris");
    echo(mktime($time[4], $time[5], $time[6], get_mounth($time[2]), $time[1], $time[3]) . "\n");

    function get_mounth($mounth)
    {
        $mounth = strtolower($mounth);
        $m_nums = array(
        	"janvier" => 1,
            "fevrier" => 2,
            "mars" => 3,
            "avril" => 4,
            "mai" => 5,
            "juin" => 6,
            "juillet" => 7,
            "aout" => 8,
            "septembre" => 9,
            "octobre" => 10,
            "novembre" => 11,
            "decembre" => 12
        );
        return($m_nums[$mounth]);
    }
    
    function input_validate($time)
    {
        $week = "/([Ll]undi|[Mm]ardi|[Mm]ercredi|[Jj]eudi|[Vv]endredi|[Ss]amedi|[Dd]imanche) ";
        $day = "([0-9]{2}) ";
        $mounth = "([Jj]anvier|[Ff]vrier|[Mm]ars|[Aa]vril|[Mm]ai|[Jj]uin|[Jj]uillet|[Aa]out|[Ss]eptembre|[Oo]ctobre|[Nn]ovembre|[Dd]ecembre) ";
        $year_time = "([0-9]{4}) ([0-9]{2}):([0-9]{2}):([0-9]{2})/";
        $pattern = $week . $day . $mounth . $year_time;
        return preg_match($pattern, $time);
    }
?>