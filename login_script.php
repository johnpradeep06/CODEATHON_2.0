<?php
require("includes/common.php");
session_start();

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the email and password from the form
    $email = $_POST['lemail'];
    $password = $_POST['lpassword'];

    // Validate input
    if (empty($email) || empty($password)) {
        $m = "Please fill in both fields.";
        header('location: index.php?errorl=' . urlencode($m));
        exit();
    }

    // Prepare and bind
    $stmt = $con->prepare("SELECT id, email_id, password, role FROM users WHERE email_id = ?");
    
    // Bind parameters
    $stmt->bind_param("s", $email);

    // Execute the statement
    $stmt->execute();
    
    // Store the result
    $stmt->store_result();

    // Check if a user was found
    if ($stmt->num_rows == 0) {
        $m = "Please enter correct E-mail id and Password";
        header('location: index.php?errorl=' . urlencode($m));
    } else {
        // Fetch the user data
        $stmt->bind_result($user_id, $email_id, $hashedPassword, $role);
        $stmt->fetch();

        // Verify the password
        if (password_verify($password, $hashedPassword)) {
            // Set session variables
            $_SESSION['email'] = $email_id;
            $_SESSION['user_id'] = $user_id;
            $_SESSION['role'] = $role; // Store the role in session

            // Redirect based on role
            if ($role == 'customer') {
                header('location: index.php');
            } else if ($role == 'seller') {
                header('location: seller_index.php');
            }
            exit(); // Ensure no further code is executed after redirection
        } else {
            $m = "Please enter correct E-mail id and Password";
            header('location: index.php?errorl=' . urlencode($m));
        }
    }

    // Close the statement
    $stmt->close();
}

// Close the database connection
$con->close();
?>