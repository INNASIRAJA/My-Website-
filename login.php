<?php
// Dummy credentials
$correct_username = "admin";
$correct_password = "password";

// Get user input
$username = $_POST['username'];
$password = $_POST['password'];

if ($username === $correct_username && $password === $correct_password) {
    echo "<h2>Login Successful!</h2>";
    echo "<p>Welcome, " . htmlspecialchars($username) . "!</p>";
} else {
    echo "<h2>Login Failed!</h2>";
    echo "<p>Invalid username or password. Please <a href='login.html'>try again</a>.</p>";
}
?>