<?php
require "includes/common.php";
session_start();

$email = $_POST['eMail'];
$email = mysqli_real_escape_string($con, $email);

$pass = $_POST['password'];
$pass = mysqli_real_escape_string($con, $pass);
$pass = md5($pass);

$first = $_POST['firstName'];
$first = mysqli_real_escape_string($con, $first);

$last = $_POST['lastName'];
$last = mysqli_real_escape_string($con, $last);

// Get phone number from POST request
$phone = $_POST['phone'];
$phone = mysqli_real_escape_string($con, $phone);

$query = "SELECT * from users where email_id='$email'";
$result = mysqli_query($con, $query);
$num = mysqli_num_rows($result);
if ($num != 0) {
    $m = "Email Already Exists";
    header('location: index.php?error=' . $m);
} else {
    // Include phone in the insert query
    $quer = "INSERT INTO users(email_id, first_name, last_name, password, phone) VALUES('$email', '$first', '$last', '$pass', '$phone')";
    mysqli_query($con, $quer);

    echo "New record has id: " . mysqli_insert_id($con);
    $user_id = mysqli_insert_id($con);
    $_SESSION['email'] = $email;
    $_SESSION ['user_id'] = $user_id;
    header('location:products.php');
}
?>