<?php

session_start();

$host = "localhost";
$username = "root";
$password = "Teamwebethics3!";
$database = "car_project";

$conn = mysqli_connect($host, $username, $password, $database) or  die("connection failed: " . mysqli_connect_errno($conn));

function dd($data){
  echo "<pre>";
  print_r($data);
  die();
}
