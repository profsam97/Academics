<?php
include "../functions.php";

ob_start(); //Turns on output buffering 
session_start();


$connection = mysqli_connect("localhost", "root", "", "movilla"); //Connection variable

if(mysqli_connect_errno()) 
{
	echo "Failed to connect: " . mysqli_connect_errno();
}

?>