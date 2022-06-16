<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "E-learning_reg";


$Uname = $_POST["Username"];
$Email = $_POST["Email"];
$pwd = $_POST["pwd"];


$conn = mysqli_connect($server,$username,$password,$dbname);

if(!$conn){
		die('Connection Failed : ' . mysqli_connect_error());

}



 ?>
