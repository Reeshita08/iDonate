<!-- login.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process the form data
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Perform any necessary authentication or validation here
    // For simplicity, let's just print the submitted values
    echo "Submitted Username: " . $username . "<br>";
    echo "Submitted Password: " . $password;
}
?>
