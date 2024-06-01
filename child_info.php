<?php
// Include the database connection file
require('db.php');

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Retrieve form data and sanitize inputs
    $firstname = mysqli_real_escape_string($con, $_POST['firstname']);
    $middlename = mysqli_real_escape_string($con, $_POST['middlename']);
    $lastname = mysqli_real_escape_string($con, $_POST['lastname']);
    $dob = mysqli_real_escape_string($con, $_POST['dob']);
    $aadhar = mysqli_real_escape_string($con, $_POST['Aadhar']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);

    $query = "INSERT INTO `child_information` (firstname, middlename, lastname, dob, aadhar, gender) 
              VALUES ('$firstname', '$middlename', '$lastname', '$dob', '$aadhar', '$gender')";

    // Execute query
    $result = mysqli_query($con, $query);

    // Check if query executed successfully
    if ($result) {
        header("Location: login.html");
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($con);
    }
}
?>
