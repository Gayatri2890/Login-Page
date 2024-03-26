<?php
session_start();

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username and password from form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Validate username and password (add more validation as needed)
    if (empty($username) || empty($password)) {
        // Redirect back to login page with error message
        header("Location: index.html?error=empty");
        exit();
    } else {
        // Hash the password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Store the hashed password in a secure database
        // Here you would typically compare the hashed password with the one stored in the database
        // For demonstration purposes, we'll just output the hashed password
        echo "Hashed Password: " . $hashedPassword;
    }
}
?>
