<?php
session_start();
/* ---------- String Functions -------- */

/*
  Functions to work with strings
  https://www.php.net/manual/en/ref.strings.php
*/

$string = "Dit is een tekst";

echo strlen($string);

$string = str_replace("een", "geen", $string);

echo $string;

