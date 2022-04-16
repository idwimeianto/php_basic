<?php
  // Ternari Operator
  // if empty($user) = TRUE, set $status = "anonymous"
  echo $status = (empty($user)) ? "anonymous" : "logged in";
  echo("<br>");

  $user = "John Doe";
  // if empty($user) = FALSE, set $status = "logged in"
  echo $status = (empty($user)) ? "anonymous" : "logged in";
  echo("<br>");


  // Null coalescing
  // variable $user is the value of $_GET['user']
  // and 'anonymous' if it does not exist
  echo $user = $_GET["user"] ?? "anonymous";
  echo("<br>");

  // variable $color is "red" if $color does not exist or is null
  echo $color = $color ?? "red";
?>