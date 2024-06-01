<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username); 
        $firstname = stripslashes($_REQUEST['firstname']);
	$firstname = mysqli_real_escape_string($con,$firstname);
        $lastname = stripslashes($_REQUEST['lastname']);
	$lastname = mysqli_real_escape_string($con,$lastname);
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);
        $phone = stripslashes($_REQUEST['phone']);
	$phone = mysqli_real_escape_string($con,$phone);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, firstname, lastname, email, phone, password, trn_date)
VALUES ('$username', '$firstname', '$lastname', '$email', '$phone', '".md5($password)."', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            header("Location: Mother_Info.html");
        }
    }else{
        echo "Error: " . $query . "<br>" . mysqli_error($con);
    }
?>