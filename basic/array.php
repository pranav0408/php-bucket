<?php

echo "<h1>Array</h1>";

$a = array(1,2);
$b = array('1','2');

echo "array a = ";
echo var_dump($a)."<br>";
echo "array b = ";
echo var_dump($b)."<br>";

echo "<br>array a == array b <br> = ";
echo var_dump($a==$b);

echo "<br><br> array a === array b <br> = ";
echo var_dump($a===$b);

echo "<br><br> array a != array b <br> = ";
echo var_dump($a!=$b);

echo "<br><br> array a <> array b <br> = ";
echo var_dump($a<>$b);

echo "<br><br> array a !== array b <br> = ";
echo var_dump($a!==$b);

?>