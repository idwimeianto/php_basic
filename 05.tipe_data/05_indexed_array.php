<?php
$cars = array("Volvo", "BMW", "Toyota");

// another declaration type
// $cars = ["Volvo", "BMW", "Toyota"];

// access indexed array
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . "."."<br>";
echo "<br>";

// iterate through indexed array
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) {
  echo $cars[$x];
  echo "<br>";
}
?>