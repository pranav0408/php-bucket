<?php

$arr = [78,60,62,6,73,72,65,74,62,66,65,64,68,72,75,79,73];
sort($arr);
echo "<h3>List of five lowest temperatures</h3>";
echo $arr[0]." ".$arr[1]." ".$arr[2]." ".$arr[3]." ".$arr[4]."<br>";
rsort($arr);
echo "<h3>List of five highest temperatures</h3>";
echo $arr[0]." ".$arr[1]." ".$arr[2]." ".$arr[3]." ".$arr[4]."<br>";

?>