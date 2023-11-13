<!-- register.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process the form data
    $fullName = $_POST["full_name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $phoneNumber = $_POST["phone_number"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirm_password"];
    $agreement = isset($_POST["agreement"]) ? $_POST["agreement"] : "";

    // Perform any necessary validation and registration logic here
    // For simplicity, let's just print the submitted values
    echo "Submitted Full Name: " . $fullName . "<br>";
    echo "Submitted Username: " . $username . "<br>";
    echo "Submitted Email: " . $email . "<br>";
    echo "Submitted Phone Number: " . $phoneNumber . "<br>";
    echo "Submitted Password: " . $password . "<br>";
    echo "Submitted Confirm Password: " . $confirmPassword . "<br>";
    echo "Agreement Checked: " . ($agreement ? "Yes" : "No");
}
?>
