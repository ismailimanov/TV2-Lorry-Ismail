<?php
session_start();
if(!isset($_SESSION["first_time"])){
    $_SESSION["first_time"] = 0;
}



/* FADBAMSEVALG17 Config Fil */

    $link = mysqli_connect("localhost", "root", "", "fadbamsevalg");

    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();

    }

    $link->set_charset('utf8');

    include("funktioner.php");
?>