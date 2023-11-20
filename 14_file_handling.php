<?php
session_start();
/* ---------- File Handling --------- */

/* 
  File handling is the ability to read and write files on the server.
  PHP has built in functions for reading and writing files.
*/

echo "naam: " . $_SESSION['name'] . "<br>";
echo "email: " . $_SESSION['email'];