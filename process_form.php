<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $lastName = $_POST["lastName"];
    $mobile = $_POST["mobile"]; // Use "mobile" instead of "phone"
    $email = $_POST["email"];

    $to = "nikhil@bhartiyacitynikoohomes4.com";
    $subject = "New Registration";
    $message = "Name: $name\nLast Name: $lastName\nPhone: $mobile\nEmail: $email";

    // Send email
    mail($to, $subject, $message);

    // Redirect to a thank you page
    header("Location: thank_you.html");
    exit();
}
?>
