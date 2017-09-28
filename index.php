<?php

$obj = new main();

$text = "Strings & Arrays";
$obj->printthis($text);
$obj->array_reverse();        
$obj->array_replace();
$obj->array_unique();
$obj->array_pop();
$obj->array_shift();
$obj->array_intersect();
$obj->array_sum();
$obj->array_diff();
$obj->array_count_values();
$obj->array_change_key_case();
$obj->strlen();
$obj->strrev();
$obj->strpos();
$obj->str_shuffle();
$obj->substr();
$obj->strtolower();

class main 
{
public function __construct() 
{

echo 'hello i\'m an Object </br>';
}

public function printthis($text) 
{
echo '<h1 style="text-align:center;"> Homework 4 </h1>';
print($text);
echo '<hr>';
}

public function array_reverse()
{
echo '<h1> Reversal of array </h1>';
$a1=array("WSD", "UXD", "SAD");
print_r(array_reverse($a1));
echo '<hr>';
}

public function array_replace()
{
echo '<h1> Replacement of array values </h1>';
$a2=array("john", "steve", "george", "emily");
$replace=array(0=>"Harry", 3=>"Jo");
$result1=array_replace($a2, $replace);
print_r($result1);
echo '<hr>';
}

public function array_unique()
{
echo '<h1> Unique Arrays </h1>';
$a3=array("a"=>"john", "Steve", "b"=>"john", "Bob", "Steve");
$result2=array_unique($a3);
print_r($result2);
echo '<hr>';
}

public function array_pop()
{
echo '<h1> Poping the last element of an array </h1>';
$a4=array("John", "Steve", "Bob", "Emily");
array_pop($a4);
print_r($a4);
echo '<hr>';
}

public function array_shift()
{
echo '<h1> Shifting the first value of an array </h1>';
$a5=array("John", "Steve", "Bob", "Emily");
array_shift($a5);
print_r($a5);
echo '<hr>';
}

public function array_intersect()
{
echo '<h1> Intersection of two arrays </h1>';
$a6=array("c"=>"John", "Steve", "Bob");
$a7=array("d"=>"John", "Emily", "Jo", "Bob");
$result3=array_intersect($a6, $a7);
print_r($result3);
echo '<hr>';
}

public function array_sum()
{
echo '<h1> Sum of the array </h1>';
$a8=array(2,4,6);
echo "sum(a8)=" .array_sum($a8). "\n";
echo '<hr>';
}

public function array_diff()
{
echo '<h1> Difference of the two arrays </h1>';
$a9=array("Steve", "George", "Bob", "Jo");
$a10=array("Steve", "Bob", "Emily");
$result4=array_diff($a9, $a10);
print_r($result4);
echo '<hr>';
}

public function array_count_values()
{
echo '<h1> Counting the array values </h1>';
$a11=array(2, "Steve", 2, "Bob", "Steve");
print_r(array_count_values($a11));
echo '<hr>';
}

public function array_change_key_case()
{
echo '<h1> Changing the key case of arrays </h1>';
$a12=array("SteVe"=>1, "bob"=>4);
print_r(array_change_key_case($a12, CASE_UPPER));
echo '<hr>';
}

public function strlen()
{
echo '<h1> String Length </h1>';
$s1='Pradnya';
echo strlen($s1);
echo '<hr>';
}

public function strrev()
{
echo '<h1> Reversal of string </h1>';
echo strrev("Pradnya");
echo '<hr>';
}

public function strpos()
{
echo '<h1> First occurrence in a sub string </h1>';
$s2="William Keith teaches Web system Development";
$stresult=strpos($s2, "Keith");
echo 'Keith is found at element:'.$stresult;
echo '<hr>';
}

public function str_shuffle()
{
echo '<h1> Random shuffling of the string </h1>';
$s3="Pradnya";
$shuffled=str_shuffle($s3);
echo $shuffled;
echo '<hr>';
}

public function substr()
{
echo '<h1> Return a part of the string </h1>';
$stresult1=substr("Pradnya", -3);
echo $stresult1;
echo '<hr>';
}

public function strtolower()
{
echo '<h1> Lower case of the string </h1>';
$s4="WEB SYSTEM DEVELOPMENT";
echo strtolower($s4);
echo '<hr>';
}
public function __destruct()
{
echo '</br> I\'m Done';
}
}
?>
