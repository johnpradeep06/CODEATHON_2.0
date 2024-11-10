<?php
session_start();
include('./includes/common.php'); // Ensure this path is correct

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $email = $_POST['eMail']; // This corresponds to email_id
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $phone = $_POST['phone'];
    $role = $_POST['role']; // Get the selected role

    // Prepare an SQL statement
    if ($con) {
        // Update the column names to match your table schema
        $stmt = $con->prepare("INSERT INTO users (email_id, password, first_name, last_name, phone, role) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $email, $password, $firstName, $lastName, $phone, $role);

        // Execute the statement
        if ($stmt->execute()) {
            // Store user information in session
            $_SESSION['email'] = $email; // Store the email in session
            $_SESSION['role'] = $role; // Store the role in session

            // Redirect based on role
            if ($role == 'customer') {
                header("Location: index.php"); // Redirect to index page for customers
            } else if ($role == 'seller') {
                header("Location: seller_index.php"); // Redirect to seller index page for sellers
            }
            exit(); // Ensure no further code is executed after redirection
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