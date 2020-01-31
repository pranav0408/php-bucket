<?php
$a=array("Sunday","Monday",1);
echo "Only value <br>";
foreach($a as $value){
	echo $value."<br>";
}
echo "<br>Both key and value<br>";
foreach($a as $key=>$value){
	echo $key." => ".$value."<br>";
}
?>
