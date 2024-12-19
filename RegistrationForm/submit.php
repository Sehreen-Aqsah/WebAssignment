<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $fullName = htmlspecialchars($_POST['fullName']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $amount = htmlspecialchars($_POST['amount']);
    $cause = htmlspecialchars($_POST['cause']);
    $message = htmlspecialchars($_POST['message']);

    // Display the submitted data
    echo "<div style='font-family: Arial, sans-serif; max-width: 600px; margin: 20px auto; border: 1px solid #ccc; padding: 20px; border-radius: 8px; background-color: #f9f9f9;'>";
    echo "<h1 style='text-align: center; color: #333;'>Thank You for Your Donation!</h1>";
    echo "<p><strong>Name:</strong> $fullName</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Phone:</strong> $phone</p>";
    echo "<p><strong>Donation Amount:</strong> $$amount</p>";
    echo "<p><strong>Cause:</strong> $cause</p>";
    echo "<p><strong>Message:</strong> " . ($message ?: 'No message provided') . "</p>";
    echo "</div>";
} else {
    echo "<p style='color: red; text-align: center;'>Invalid request method. Please submit the form.</p>";
}
?>
