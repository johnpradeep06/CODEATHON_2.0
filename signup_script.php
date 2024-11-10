<?php
session_start();
include('./includes/common.php'); // Ensure this path is correct

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $email = $_POST['eMail']; // This corresponds to email_id
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $phone = $_POST['phone'];
    $role = $_POST['role']; // Get the selected role

    // Prepare an SQL statement
    if ($con) {
        // Check if email already exists
        $check_email = $con->prepare("SELECT email_id FROM users WHERE email_id = ?");
        $check_email->bind_param("s", $email);
        $check_email->execute();
        $result = $check_email->get_result();
        
        if ($result->num_rows > 0) {
            header("Location: signup.php?error=" . urlencode("Email already exists"));
            exit();
        }
        
        // If email doesn't exist, proceed with insertion
        $stmt = $con->prepare("INSERT INTO users (email_id, password, first_name, last_name, phone, role) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $email, $password, $firstName, $lastName, $phone, $role);

        // Execute the statement
        if ($stmt->execute()) {
            $_SESSION['email'] = $email; // Store the email in session
            header("Location: index.php"); // Redirect to index page
        } else {
            $error = "Error: " . $stmt->error; // Capture any errors
            header("Location: signup.php?error=" . urlencode($error)); // Redirect with error
        }

        // Close the statement
        $stmt->close();
    } else {
        die("Database connection failed.");
    }

    // Close the connection
    $con->close();
}
?>