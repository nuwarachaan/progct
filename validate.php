<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

// Placeholder for user validation
if ($username == 'admin' && $password == 'password') {
    $_SESSION['username'] = $username;
    header("Location: dashboard.php");
} else {
    echo "بيانات خاطئة";
}
?>

