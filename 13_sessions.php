<?php
session_start();



if (isset($_SESSION['visits'])){
    $_SESSION['visits'] ++;
    header('location: 09_superglobals.php');
} else {
    $_SESSION['visits'] = 1;
}



echo $_SESSION['visits'];