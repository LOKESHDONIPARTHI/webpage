<?php
// admin_login.php

// Predefined username and password (for demonstration purposes)
$
$admin_username = 'admin'; // Replace with your username
$admin_password = 'password123'; // Replace with your password

// Initialize session
session_start();

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate credentials
    if ($username === $admin_username && $password === $admin_password) {
        // Credentials are correct, redirect to admin dashboard
        $_SESSION['admin_logged_in'] = true;
        header("Location: admindashboard.html"); // Redirect to dashboard page
        exit();
    } else {
        // Invalid credentials, show error message
        $error_message = "Invalid username or password!";
    }
}
?>