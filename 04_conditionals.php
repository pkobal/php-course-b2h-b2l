<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

/* ---------- If & If-Else Statements --------- */


$number1 = 4;
$number2 = 51;

if ($number1 > $number2){
    echo "$number1 is groter dan $number2";
} else {
    echo "$number2 is groter dan $number1";
}

echo "<br>";

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/

/* -------- Ternary Operator -------- */
/*
  The ternary operator is a shorthand if statement.
  Ternary Syntax:
    condition ? true : false;
*/


/* -------- Switch Statements ------- */
$error = 404;

if ($error === 200) {
    echo "success";
} elseif ($error === 400){
    echo "bad request";
} elseif ($error === 404){
    echo "page not found";
}

echo "<br>";

switch ($error){
    case 200:
        echo "success";
        break;
    case 400:
        echo "bad request";
        break;
    case 404:
        echo "page not found";
        break;
    default:
        echo "error not found";
}

echo "<br>";

$result = match ($error){
    200, 201, 202 =>  "success",
    400, 401, 404 => "failed"
};

echo $result;








