<?php
$a=array('r1'=>"Pizza",'r2'=>"Donut",'r3'=>'Taco');
$keys = array_keys($a);
print_r($keys);
echo "<br>";
$b="Hello";
for ($i=0;$i<count($a);$i++){
	echo "index is".$keys[$i]." and value is".$a[$keys[$i]]."<br>";
}

echo "<br>Using foreach<br>";
foreach ( $a as $key=>$value ){
	echo "Value is ".$val." at index ".$value."<br>";
}
?>
