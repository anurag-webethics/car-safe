<?php
require '../config/db.php';

include("./validation.php");

if (
    empty($fnameErr) && empty($lnameErr) && empty($emailErr) && empty($passwordErr) && empty($countryErr) && empty($genderErr)  && empty($hobbiesErr) && !empty($fname) && !empty($lname) && !empty($email) && !empty($password) && !empty($country) && !empty($gender) && !empty($hobbies)
) {

    if (isset($_POST['submit'])) {

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $userPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $country = $_POST['country'];
        $gender = $_POST['gender'];
        $hobbies = isset($_POST['hobbies']) ? implode(',', $_POST['hobbies']) : '';

        $sql = "INSERT INTO users (fname, lname, email, password, country, gender , hobbies)
                  VALUES('$fname', '$lname', '$email','$userPassword','$country', '$gender','$hobbies')";

        $checkUserQuery =  "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $checkUserQuery);

        if (mysqli_num_rows($result) > 0) {
            $emailErr = "Email already exist";
        } elseif (mysqli_query($conn, $sql) === TRUE) {
            $_SESSION['success_message'] = '1';

            header("Location:login.php");
        }
    }
}

$countryArr = ['India', 'U.S.A', 'China', 'Sri Lanka', 'Pakistan', 'South Korea'];

include("../registration_view.php");
