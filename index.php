
<?php

echo "Hello</br>";

$str= "This is Shivadhar Pingili";

echo "<h1>This is Shivadhar Pingili</h1></br>";

echo "</br>The string is: This is Shivadhar Pingili";

echo "<hr>";

echo "<h1></br>Length of the string </h1>";

echo strlen($str);

echo "<hr>";

echo"</br><h1>Counts number of words in string </h1>";

echo str_word_count($str);

echo "<hr>";

echo "</br><h1> Reverse of the string </h1>";

echo strrev($str);

echo "<hr>";

echo "</br><h1>This will replace word </h1>";

echo str_replace("php", "world",$str);

echo "<hr>";

echo "</br><h1>first character of each word in a string is in uppercase </h1>";

echo ucwords($str);

echo "<hr>";

echo "</br><h1> This will convert string to uppercase </h1>";

echo strtoupper($str);

echo "<hr>";

echo "</br><h1>This will convert string to lowercase </h1>";

echo strtolower($str);

echo "<hr>";

echo "</br><h1>The string will repeat for 10 times </h1>";

echo str_repeat($str,10);

echo "<hr>";

echo "</br><h1> This will cut the string </h1>";

echo substr($str,0,10);

echo "<hr>";

echo "</br><h1>Some characters are removed from the string </h1>";

echo trim($str,”Wep”);

echo "</br>";

echo "<hr>";

echo "<center><h1>Following are array functions</h1></center>";

$arr = array("Civic", "Maxima", "Accord");

echo "The array is ";

print_r($arr);

echo "</br>";

echo "<h1>Length of an array</h1>";

echo "</br>";

echo count($arr);

echo "<hr>";

echo "</br><h1>Showing key as value and value as a key</h1>";

echo "</br>";

print_r(array_flip($arr));

echo "<hr>";

echo "</br><h1>Shuffling the array </h1>";

echo "</br>";

shuffle($arr);

print_r($arr);

echo "<hr>";

echo "</br><h1>Reverse of an array </h1>";

echo "</br>";

print_r(array_reverse($arr));

echo "<hr>";

echo "</br><h1>Adding new elements in array</h1> ";

echo "</br>";

array_push($arr,"Hello","World");

print_r($arr);

echo "<hr>";

echo "</br><h1>Deleting last element of the array</h1>";

echo "</br>";

array_pop($arr);

print_r($arr);

echo "<hr>";

echo "</br><h1>Combining Arrays</h1>";

$fname=array("Virat","Dhoni","Rohit");

$age=array("26","32","27");

echo "First array is : ";

echo "</br>";

print_r($fname);

echo "</br>";

echo "Second array is : ";

echo "</br>";

print_r($age);

echo "</br>Third array is : ";

echo "</br>";

$c=array_combine($fname,$age);

print_r($c);

echo "<hr>";

echo "</br><h1>Sum of an array </h1>";

$num = array(20, 50, 10);

echo "</br>";

print_r($num);

echo "</br>";

array_sum($num);

echo "</br>The sum is : ";

print_r($num);

echo "<hr>";

echo "</br><h1>Difference between two arrays</h1>";

echo "</br>";

$d=array("red","black","blue","yellow");

$e=array("red","black","blue");

echo "</br>First array is : ";

echo "</br>";

print_r($d);

echo "</br>";

echo "Second array is : ";

echo "</br>";

print_r($e);

echo "</br> The difference : ";

echo "</br>";

$result=array_diff($d,$e);

print_r($result);

echo "<hr>";

echo "</br><h1>Searching from an array</h1>";

echo "</br>";

echo "</br> The array is : ";

echo "</br>";

$k = array(20, 50, 10);

print_r($k);

$l = array_search(50, $k);

Print_r($k);

echo "<br>Key of search no: ".$l;

?>





