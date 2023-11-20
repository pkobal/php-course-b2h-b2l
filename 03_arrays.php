<?php
/* ----------- Arrays ----------- */

/*
  Arrays hold multiple values. Each value in an array is called an "element"
*/

$cars = ["mustang", "ferari", "tesla"];

echo "$cars[0] $cars[1]";

$food = array();

$food[0] = "burger";
$food[1] = "pizza";
$food[2] = "frikandel";

echo "<br>$food[0] $food[1]<br>";

echo "<pre>";
var_dump($cars);
echo "</pre>";