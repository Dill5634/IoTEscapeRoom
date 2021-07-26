<?php
$server = 'localhost';
$user = 'root';
$pass = 'root';
$db = 'system';

$conn = mysqli_connect($server,$user,$pass) or die("error");
session_start();

$selectdb = mysqli_select_db($conn,$db) or die("error");

if (isset($_SESSION["login"])) {
  $login = $_SESSION["login"];
}else{
  $login = 0;
}



 ?>
