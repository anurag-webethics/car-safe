<?php

$fnameErr = $lnameErr = $emailErr = $passwordErr = $countryErr = $genderErr = $hobbiesErr = "";
$fname = $lname = $email = $password = $country = $gender = $hobbies = "";

$fname = test_input($_POST['fname']);
$lname = test_input($_POST['lname']);
$email = test_input($_POST['email']);
$password = test_input($_POST['password']);
$country = test_input($_POST['country']);
$gender = test_input($_POST['gender']);
$hobbies = $_POST['hobbies'];

function validate($data, $message)
{
    if (empty($data)) {
        return $message;
    }

    return "";
}

function validateEmail($email)
{
    if (empty($email)) {
        return "Email is required";
    } else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return "Invalid email format";
        }
    }
    return "";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fnameErr = validate($fname, 'First name is required');

    if (empty($fnameErr)) {
        $lnameErr = validate($lname, 'Last name is required');
    }

    if (empty($fnameErr) && empty($lnameErr)) {
        $emailErr =  validateEmail($email);
    }

    if (empty($fnameErr) && empty($lnameErr) && empty($emailErr)) {
        $passwordErr = validate($password, 'Password is required');
    }

    if (empty($fnameErr) && empty($lnameErr) && empty($emailErr) && empty($passwordErr)) {
        $countryErr = validate($country, 'Country is required');
    }

    if (empty($fnameErr) && empty($lnameErr) && empty($emailErr) && empty($passwordErr) && empty($countryErr)) {
        $genderErr = validate($gender, 'Gender is required');
    }

    if (empty($fnameErr) && empty($lnameErr) && empty($emailErr) && empty($passwordErr) && empty($countryErr) && empty($genderErr)) {
        $hobbiesErr = validate($hobbies, 'At least one hobby is required');
    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}