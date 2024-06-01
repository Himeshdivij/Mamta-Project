<?php
require('db.php');

if (isset($_POST['firstname'])) {
    $firstname = stripslashes($_POST['firstname']);
    $firstname = mysqli_real_escape_string($con, $firstname);
    
    $middlename = stripslashes($_POST['middlename']);
    $middlename = mysqli_real_escape_string($con, $middlename);

    $lastname = stripslashes($_POST['lastname']);
    $lastname = mysqli_real_escape_string($con, $lastname);

    $dob = stripslashes($_POST['dob']);
    $dob = mysqli_real_escape_string($con, $dob);

    $aadhar = stripslashes($_POST['Aadhar']);
    $aadhar = mysqli_real_escape_string($con, $aadhar);

    $phone = stripslashes($_POST['phone']);
    $phone = mysqli_real_escape_string($con, $phone);

    $bank = stripslashes($_POST['bank']);
    $bank = mysqli_real_escape_string($con, $bank);

    $ifsc = stripslashes($_POST['ifsc']);
    $ifsc = mysqli_real_escape_string($con, $ifsc);

    $category = stripslashes($_POST['Category']);
    $category = mysqli_real_escape_string($con, $category);

    $address = stripslashes($_POST['address']);
    $address = mysqli_real_escape_string($con, $address);

    $have_child = stripslashes($_POST['have_child']);
    $have_child = mysqli_real_escape_string($con, $have_child);

    $query = "INSERT INTO `mothers_iformation` (firstname, middlename, lastname, dob, Aadhar, phone, bank, ifsc, category, address, have_child) 
              VALUES ('$firstname', '$middlename', '$lastname', '$dob', '$aadhar', '$phone', '$bank', '$ifsc', '$category', '$address', '$have_child')";
    
    $result = mysqli_query($con, $query);
    if ($result) {
        if($result){
            if($have_child == 'Yes'){
                header("Location: child_Info.html");
            }
            else{
                header("Location: Login.html");
            }
        }
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($con);
    }
}
?>
