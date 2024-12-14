<?php
// Connect to your database
$host = "localhost";
$username = "root";
$password = "";
$dbname = "voterid";

$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    
}


// Get form data
$name = $_POST['name'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$aadhar = $_POST['aadhar'];
$address = $_POST['address'];



// Insert data into database
$sql = "INSERT INTO voterid (name, dob, gender, email, phone, aadhar,address)
VALUES ('$name', '$dob', '$gender', '$email' , '$phone', '$aadhar', '$address')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful ........!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voter  Id Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <h1>Voter Id  Details</Details></h1>
        <p><strong>Name:</strong> <?= ($name) ?></p>
        <p><strong>Date Of Birth:</strong> <?= ($dob) ?></p>
        <p><strong>Gender:</strong> <?= ($gender) ?></p>
        <p><strong>Email:</strong> <?= ($email) ?></p>
        <p><strong>Phone Number:</strong> <?= ($phone) ?></p>
        <p><strong>Aadhar Number:</strong> <?= ($aadhar) ?></p>
        <p><strong>Address:</strong> <?= ($address) ?></p>
    </div>
</body>
</html>
