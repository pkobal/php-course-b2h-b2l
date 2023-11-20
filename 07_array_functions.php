<?php
/* --------- Array Functions -------- */

/*
  Functions to work with arrays
  https://www.php.net/manual/en/ref.array.php
*/

$cars = array();

$cars[] = "mustang";
$cars[] = "ferrari";
$cars[] = "mercedes";

echo count($cars);

array_pop($cars);

print_r($cars);

echo count($cars);

$string = "Dit . is . een . tekst";

$stringArray = explode(".", $string);
echo  "<br>";
print_r($stringArray);