<?php
for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    continue;
  }
  echo "The number is: $x <br>";
}

// OUTPUT
/*
  The number is: 0
  The number is: 1
  The number is: 2
  The number is: 3
  The number is: 5
  The number is: 6
  The number is: 7
  The number is: 8
  The number is: 9
*/
?>