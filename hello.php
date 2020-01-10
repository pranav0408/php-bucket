<?php
echo "<h1>Hello php</h1>";
echo "<br>";

/* TABLE OF CONTENTS
    1) Data Types - line 10
    2) Class - line 21
    3) String Manipulation - line 45
    4) Operators - line 57
*/

// 1) ********************* Data Types *********************
echo "<b>1) Data Types</b><br><br>";
// integer
$a = 1;
echo "<b>Int A</b> = $a <br>";

// boolean
$b = true;
echo "<b>Boolean B</b> = $b <br>";

// array
$arr = array(1,2,3,4,5);
// or $arr = [1,2,3,4,5]
echo "<b>Array Arr</b> value at index 0 = ".$arr[0]."<br>";

// data type
echo "Data type of <b>B</b> = ";
echo var_dump($b)."<br>";

// Constant
define('temp_define','Pranav Singh');
echo "Constant value is ".temp_define."<br>";

// 2) ********************* Class *********************
echo "<br><br> <b>2) CLASS</b><br><br>";
class hello{
    public $str = "Hello";
    function name($x){
        return $x;
    }
}
$ob1 = new hello;
echo $ob1->str." ".$ob1->name('Pranav')."<br>";

// 3) ********************* String Manipulation *********************
echo "<br><br> <b>3) String Manipulation </b><br><br>";

$str_test = "All good people is liked by all good people";
echo "Original string <b>str_test</b> is : ".$str_test."<br><br>";
// length
echo "<b>Length of str_test</b> = ".strlen($str_test)."<br>";
echo "<b>No of words</b> = ".str_word_count($str_test)."<br>";
echo "<b>str_test after replace</b> = ".str_replace("good","bad",$str_test,$count)."<br>";
echo "<b>No of words replaced</b> = ".$count."<br>";
echo "<b>str_test after reverse = </b>".strrev($str_test)."<br>";
// concatinate
echo "<br>Concatination : ";
$a = "Hello";
$b = "Pranav";
$a.=$b;
echo $a."<br>";

// 4) ********************* Operators *********************
echo "<br><br> <b>4) Operators </b><br>";

// ***Arithmetic operators***
echo "<br><b> - Arithmetic</b><br>";
$var1 = 1234;
$var2 = 123;

// addition
echo "Addition";
$var3 = $var1 + $var2;
echo "Type is : ";
echo var_dump($var3)."<br>";
echo "Value is : $var3";

// substraction
echo "<br><br>Substraction<br>";
$var3 = $var1 - $var2;
echo "Type is : ";
echo var_dump($var3)."<br>";
echo "Value is : $var3";

// multiplication
echo "<br><br>Multiplication<br>";
$var3 = $var1 * $var2;
echo "Type is : ";
echo var_dump($var3)."<br>";
echo "Value is : $var3";

// division
echo "<br><br>Division<br>";
$var3 = $var1 / $var2;
echo "Type is : ";
echo var_dump($var3)."<br>";
echo "Value is : $var3";

// ***Comparision***
echo "<br><br><b> - Comparision</b><br>";
$a = 1;
$b = "1";

echo "a = $a <br> b = $b <br>";

echo "a == b : ";
echo var_dump($a==$b);
echo "<br>";
// identity for data type as well
echo "a === b : ";
echo var_dump($a===$b);
echo "<br>";
echo "a != b : ";
echo var_dump($a!=$b);
echo "<br>";
echo "a !== b : ";
echo var_dump($a!==$b);

// ***Assignment***

// ***logical***
echo "<br><br><b> - Logical</b><br>";
$a = 50;
if( $a%5==0 && $a%3==0 ){
    echo "$a is a multiple of 3 and 5 <br>";
}
else{
    echo "$a is not a multiple of 3 and 5 <br>";
}

// Post and Pre
echo "<br><br><b> - Post and Pre</b><br>";
$a = 1;
echo "Original a = $a<br>";
echo "Post increment a++ = ".$a++."<br>";
echo "Now a = $a<br>";
echo "Pre increment ++a = ".++$a."<br>";

// Ternary
echo "<br><br><b> - Ternary</b><br>";
$a = 18;
echo "Age $a is ";
echo ($a < 18) ? "Child" : "Adult" . "<br>";
?>
