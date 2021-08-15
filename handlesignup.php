<?php
$showError = "false";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    include '/xamp/htdocs/fbclone/dbconnect.php';
    $fname = $_POST['name'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $gen = $_POST['gender'];
    $dob = $_POST['dob'];

    $existSql = "select * from `signup` where email = '$email'";
    $result = mysqli_query($conn, $existSql);
    $numRows = mysqli_num_rows($result);
    if ($numRows > 0) {
        echo "email is already in use";
    } else {

        $hash = password_hash($pass, PASSWORD_DEFAULT);
        $sql = "INSERT INTO `signup` (`fname`, `lname`, `email`, `pass`, `dob`, `gender`) VALUES ('$fname', '$lname', '$email', '$hash', '$dob', '$gen') ";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            $showAlert = true;
            // header("Location: /fbclone/hero.php?signupsuccess=true");
            echo 'Signup Successfull';
            // echo "login succesfull";
            exit();
        } else {
            $showError = "Passwords do not match";
        }
    }
}
?>