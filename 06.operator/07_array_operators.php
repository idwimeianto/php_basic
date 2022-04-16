<?php
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

print_r($x + $y); // union of $x and $y
echo "<br>";
var_dump($x == $y); // false
echo "<br>";
var_dump($x == $y); // false
echo "<br>";
var_dump($x != $y); // true
echo "<br>";
var_dump($x <> $y); // true
echo "<br>";
var_dump($x !== $y);  // true
?>