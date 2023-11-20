<?php

/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */

/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/


/* ------------ While Loop ------------ */

$number = 10;

while ($number < 100){
    $number += 10;
    echo "$number <br>";
}

/*
** While Loop Syntax
  while (condition) {
  // code to be executed
  }
*/

$days = ["zondag", "maandag", "dinsdag", "woensdag", "donderdag", "vrijdag", "zaterdag"];

for ($i = 0; $i < count($days); $i++){
    $day = $days[$i];
    echo "$day <br>";
}

foreach ($days as $day){
    echo "$day <br>";
}


/* ---------- Foreach Loop ---------- */

/*
** Foreach Loop Syntax
  foreach ($array as $value) {
  // code to be executed
  }
*/


$numbers = "";
for ($i = 1; $i <=6; $i++){
    $numbers .= $i . " ";
    echo $numbers . "<br>";
}