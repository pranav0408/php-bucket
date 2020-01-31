<?php

echo "<h1>Loops</h1>";

// *********************************For Loop*********************************
echo "<h3>- For Loop</h3>";

// list natural numbers
echo "Natural numbers from 1 to 10<br>";
for( $a = 1; $a<=10; $a++ ){
    echo "$a";
    if($a<10)
        echo "-";
    else
        echo "<br>";    
}

// sum of natural numbers
echo "<br>Sum of natural numbers from 1 to 10<br>";
$result = 0;
for( $a = 1; $a<=10; $a++ ){
        $result += $a;
}
echo "1+2+3+4+5+6+7+8+9+10 = $result <br>";

// multiplication of natural numbers
echo "<br>Multiplication of natural numbers from 1 to 10<br>";
$result = 1;
for( $a = 1; $a<=10; $a++ ){
        $result *= $a;
}
echo "1x2x3x4x5x6x7x8x9x10 = $result";


// *********************************While Loop*********************************
echo "<h3>- While Loop</h3>";
// print natural numbers
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

// *********************************Do-While*********************************
echo "<h3>- Do-While Loop</h3>";
// print natural numbers
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