<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

// another declaration type
// $age = ["Peter"=>"35", "Ben"=>"37", "Joe"=>"43"];

// access associative array
echo "Peter is " . $age['Peter'] . " years old."."<br>";
echo "<br>";

// iterate through associative array
foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>