<?php
// main.php

// Retrieve form data from query parameters
$firstName = $_GET['first-name'] ?? '';
$lastName = $_GET['last-name'] ?? '';
$address = $_GET['address'] ?? '';
$country = $_GET['country'] ?? '';
$gender = $_GET['gender'] ?? '';
$skills = $_GET['skills'] ?? [];
$username = $_GET['username'] ?? '';
$password = $_GET['password'] ?? '';
$department = $_GET['department'] ?? '';
$code = $_GET['code'] ?? '';

// Convert skills array to comma-separated string
$skillsString = implode(", ", $skills);

// Check if the entered code is correct
if ($code === 'Qst235') {
    // Code is correct, display the form data
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Main Page</title>
    </head>
    <body>
        <h1>Form Data</h1>
        <p>First Name: <?php echo $firstName; ?></p>
        <p>Last Name: <?php echo $lastName; ?></p>
        <p>Address: <?php echo $address; ?></p>
        <p>Country: <?php echo $country; ?></p>
        <p>Gender: <?php echo $gender; ?></p>
        <p>Skills: <?php echo $skillsString; ?></p>
        <p>Username: <?php echo $username; ?></p>
        <p>Password: <?php echo $password; ?></p>
        <p>Department: <?php echo $department; ?></p>
    </body>
    </html>
    <?php
} else {
    // Code is incorrect, display error message and redirect to index.html
    echo "Incorrect code entered. Please try again.";
    header("Refresh: 3; URL=index.html");
    exit();
}
?>

