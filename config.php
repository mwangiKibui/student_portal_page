<?php 
//start the session first
session_start();
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "student_portal";
$con = mysqli_connect($hostname,$username,$password,$dbname);
if (!$con) {
	die("Kindly check the connections");
}
   ?>