<?php

$time = time();
$actual_time1 = date("H:i:s",$time);//can use 'h' also
$actual_time2 = date("D M Y",$time);
$actual_time3 = date("d m y",$time);
$actual_time4 = date("d/m/Y",$time);
$actual_time5 = date("d/m/y @ H:i:s",$time);

echo "The current time is ".$actual_time1."<br>";
echo "The current date is ".$actual_time2."<br>";
echo "The current date is ".$actual_time3."<br>";
echo "The current date is ".$actual_time4."<br>";
echo "The current date & time is ".$actual_time5."<br>";

?>