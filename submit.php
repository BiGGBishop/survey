<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "survey";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get the form data
$fullname = $_POST['fullname'];
$preferredname = $_POST['preferredname'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];
$preferredcommmunication = $_POST['preferredcommmunication'];
$onlineclass = $_POST['onlineclass'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$program = $_POST['program'];
$field = $_POST['field'];
$dates = $_POST['dates'];
$attendedbefore = $_POST['attendedbefore'];
$institutionattended = $_POST['institutionattended'];
$aidornot = $_POST['aidornot'];
$how = $_POST['how'];

// Insert the form data into the database
$sql = "INSERT INTO survey (fullname, preferredname, email, phonenumber, preferredcommmunication, onlineclass, age, gender, program, field, dates, attendedbefore, institutionattended, aidornot, how)
VALUES ('$fullname', '$preferredname', '$email', '$phonenumber', '$preferredcommmunication', '$onlineclass', '$age', '$gender', '$program', '$field', '$dates', '$attendedbefore', '$institutionattended', '$aidornot', '$how')";

if ($conn->query($sql) === TRUE) {
  echo "Form submitted successfully!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
