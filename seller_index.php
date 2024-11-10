<?php
session_start();

// Check if the user is logged in and is a seller
if (!isset($_SESSION['email']) || $_SESSION['role'] !== 'seller') {
    header("Location: login.php"); // Redirect to login if not authorized
    exit();
}

// Content for the seller index page
echo "<html><head><title>Seller Dashboard</title></head><body>";
echo "<h1>Welcome to the Seller Dashboard</h1>";
// Add any additional content for sellers here
echo "</body></html>";
?>