<?php
/* ------------ Functions ----------- */

/*
  Functions are reusable blocks of code that we can call to perform a specific task.
  We can pass values into functions to change their behavior. Functions have their own local scope as opposed to global scope


/*
** Function Syntax
  function functionName($arg1, $arg2, ...) {
    // code to be executed
  }
*/

function addStrings(string $string1, string $string2 = " world"): void
{
    $result = $string1 . $string2;
    echo $result;
}

addStrings("hello", " frisbee");

$date = date("H:i");
$date = strtotime('+1 hour', strtotime($date));
echo date('H:i', $date);
