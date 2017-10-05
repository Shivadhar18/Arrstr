<?php

class Assign
{
 public function str_Len($text)
 {
  echo '<h1>String function to find length of string</h1>';
  echo strlen($text);
  echo "<hr>";
 }
 public function str_Rev($text)
 {
  echo '<h1>String function to find reverse of string</h1>';
  echo strrev($text);
  echo "<hr>";
 }    
 public function str_Ltrim($text)
 {
  echo '<h1>String function to remove characters from the left side of string</h1>';
  echo ltrim($text,"Php");
  echo "<hr>";
 }    
 public function str_Rtrim($text)
 {
  echo '<h1>String function to remove characters from the right side of string</h1>';
  echo rtrim($text,"Functions");
  echo "<hr>";
 }
 public function str_Trim($text)
 {
  echo '<h1>String function to remove characters from both sides of a string</h1>';
  echo trim($text,"Phpions");
  echo "<hr>";
 }
 public	function str_Lower($text)											
 {
  echo '<h1>String Function to convert a given string to lowercase</h1>';
  echo strtolower($text);
  echo "<hr>";
 }
 public	function str_Upper($text)
 {
  echo '<h1>String function to convert a given string to uppercase</h1>';
  echo strtoupper($text);								
  echo "<hr>";
 }
 public function sub_Str($text)
 {
  echo '<h1>String function to return part of a string</h1>';
  echo substr($text,12);
  echo "<hr>";
 }
 public function str_To_Array($text)
 {																
 echo '<h1>String function that splits a string into an array</h1>';
 print_r(str_split($text));
 echo"<hr>";
 }
 public function str_Replace($text)
 {
  echo '<h1>String function to replaces some characters with some other characters in a string</h1>';
  echo str_replace("Php","Iam Done With",$text);
  echo "<hr>";
 }
 public function array_Insert($array)
 {
  echo '<h1>Array function to inserts one or more elements to the end of an array</h1>';
  array_push($array,'H','I');
  print_r($array);
  echo "<hr>";
 }
 public function array_Del($array)
 {
  echo '<h1>Array function deletes the last element of an array</h1>';
  array_pop($array);
  print_r($array);
  echo "<hr>";
 }
 public function array_Rev($array)
 {
  echo '<h1>Array function returns an array in the reverse order</h1>';
  print_r(array_reverse($array));
  echo "<hr>";
 }
 public function array_Slice($array)
 {
  echo '<h1>Array function returns selected parts of an array</h1>';
  print_r(array_slice($array,3));
  echo "<hr>";
 }
 public function array_Splice($array,$array2)
 {
  echo '<h1>Array function removes selected elements from an array and replaces it with new elements</h1>';
  array_splice($array,0,2,$array2);
  print_r($array);
  echo "<hr>";
 }
 public function array_Ascend($array)
 {
  echo '<h1>Array function sorts an indexed array in ascending order</h1>';
  sort($array);
  print_r($array);
  echo "<hr>";
 }
 public function array_Descend($array)
 {
  echo '<h1>Array function sorts an indexed array in descending order</h1>';
  rsort($array);
  print_r($array);
  echo "<hr>";
 }
 public function array_Count($array)
 {
  echo '<h1>Array function returns the number of elements in an array</h1>';
  $res = count($array);
  echo $res;
  echo "<hr>";
 }
 public function array_Merge($array,$array2)
 {
  echo '<h1>Array function merges one or more arrays into one arrray</h1>';
  print_r(array_merge($array,$array2));
  echo "<hr>";
  }
 public function array_Shuffle($array)
 {
  echo '<h1>Array function randomizes the order of the elements in the array</h1>';
  shuffle($array);
  print_r($array);
  echo "<hr>";
 }
 }
 $text = "Php String Functions";
 $array = array('A','B','C','D','E','F','G');
 $array2 = array('X','Y','Z');
 $str_obj = new Assign();
 $Array_obj = new Assign();
 
 echo '<h2><center><u>String Functions.....!!!</u></center></h2>'; 
 
 $str_obj->str_Len($text);
 $str_obj->str_Rev($text);
 $str_obj->str_Ltrim($text);
 $str_obj->str_Rtrim($text);
 $str_obj->str_Trim($text);
 $str_obj->str_Lower($text);
 $str_obj->str_Upper($text);
 $str_obj->sub_Str($text);
 $str_obj->str_To_Array($text);
 $str_obj->str_Replace($text);

echo '<h2><center><u>Array Functions.....!!!</u></center></h2>'; 

 $Array_obj->array_Insert($array);
 $Array_obj->array_Del($array);
 $Array_obj->array_Rev($array);
 $Array_obj->array_Slice($array);
 $Array_obj->array_Splice($array,$array2);
 $Array_obj->array_Ascend($array);
 $Array_obj->array_Descend($array);
 $Array_obj->array_Count($array);
 $Array_obj->array_Merge($array,$array2);
 $Array_obj->array_Shuffle($array);
 
 echo '<br>';
 echo '<h2><center>I\'m Done.....!!!</center></h2>'; 

?>
