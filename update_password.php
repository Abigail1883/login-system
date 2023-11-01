<?php
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $token = $_POST["token"];
    $new_password = $_POST["new_password"];
    $confirm_password = $_POST["confirm_password"];

    if ($new_password === $confirm_password) {
        // Database connection and check if the token is valid
        // .....

        // Update the user's password
        // ...

        echo "Password updated successfully. You can now <a href='login.php'>login</a> with your new password.";
    } else {
        echo "Passwords do not match.";
    }
}
?>
