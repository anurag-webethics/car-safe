<?php
include('../config/db.php');

$email = $password = '';
$email_err = $password_err = '';

if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $emailCheck =  "SELECT * FROM users WHERE email='$email'";
  $result = mysqli_query($conn, $emailCheck) or die(mysqli_error($conn));
  $isUserExist = mysqli_num_rows($result);

  if ($isUserExist == 1) {
    $userData = mysqli_fetch_assoc($result);
    $hashUserPassword = $userData['password'];

    if (password_verify($password, $hashUserPassword)) {
      $_SESSION['email'] = $userData['email'];
      $_SESSION['name'] = $userData['name'];
      $_SESSION['userId'] = $userData['id'];
      header("Location:../index.php");
    } else {
      $password_err = "Invalid Password.";
    }
  } else {
    $email_err = "Invalid Email.";
    //header("Location:login.php");
  }
}

if (isset($_POST['submit'])) {
  if (empty($_POST['email'])) {
    $email_err = 'Email is required';
  } else {
    $email = test_input($_POST['email']);
  }
  if (empty($_POST['password'])) {
    $password_err = 'Password is required';
  } else {
    $password = test_input($_POST['password']);
  }
}

function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
}

include("../login-view.php");