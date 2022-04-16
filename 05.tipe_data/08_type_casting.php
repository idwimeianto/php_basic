<?php
  // cast to integer
  echo (int)12.5 . '<br>'; // 12
  echo (int)12.1 . '<br>'; // 12
  echo (int)12.9 . '<br>'; // 12
  echo (int)-12.9 . '<br>'; // -12

  $message = 'Hi';
  $num = (int) $message;
  echo $num; // 0
  echo "<br>";

  $amount =  (int)'100 USD';
  echo $amount; // 100
  echo "<br>";

  $qty = null;
  echo (int)$qty; // 0
  echo "<br>";

  // Cast to float
  $amount = (float)100;
  echo $amount; // 100
  echo "<br>";
?>