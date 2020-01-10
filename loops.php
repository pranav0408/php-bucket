<?php

echo "<h1>Loops</h1>";

// For Loop
echo "<h3>- For Loop</h3>";
echo "Natural numbers from 1 to 10<br>";
for( $a = 1; $a<=10; $a++ ){
    echo "$a";
    if($a<10)
        echo "-";
    else
        echo "<br>";    
}

// While Loop
echo "<h3>- While Loop</h3>";
echo "Natural numbers from 1 to 10<br>";
$a=1;
while($a<=10){
    echo "$a";
    if($a<10)
        echo "-";
    else
        echo "<br>";
    $a++;
}

// Do-While
echo "<h3>- Do-While Loop</h3>";
echo "Natural numbers from 1 to 10<br>";
$a=1;
do{
    echo "$a";
    if($a<10)
        echo "-";
    else
        echo "<br>";
    $a++;
}while($a<=10);

?>