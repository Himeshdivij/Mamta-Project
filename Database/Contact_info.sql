CREATE TABLE IF NOT EXISTS `contact_info` (
 `Branch (Name of Taluka)` varchar(50) NOT NULL,
 `Name of Head of Branch` varchar(50) NOT NULL,
 `Contact No. of Head of Branch` varchar(50) NOT NULL
 );
 INSERT INTO `contact_info` (`Branch (Name of Taluka)`, `Name of Head of Branch`, 
 `Contact No. of Head of Branch`) VALUES
('Amreli', 'Mr. Ramesh Patel', '942636xxxx'),
('Ahmedabad', 'Mr. Divij Rana', '942637xxxx'),
('Anand', 'Mr. Rishi Parikh', '942116xxxx'),
('Aravalli', 'Ms.Kalyani Nair', '942624xxxx'),
('Bharuch', 'Mr. Himesh  Rana', '882636xxxx'),
('Bhavnagar', 'Mr. Rudra Rana', '892636xxxx'),
('Botad', 'Ms. Rushita Gheewala', '831636xxxx'),
('Dahod', 'Ms. Nisha Sindha', '912536xxxx'),
('Dang', 'Mr. Nisharg Shah', '999936xxxx'),
('Gir Somnath', 'Ms. Ankita Nair', '942784xxxx'),
('Jamnagar', 'Ms. Yashvee Rana', '890636xxxx'),
('Junaghadh', 'Mr. Aditya Rana', '912236xxxx'),
('Kutch', 'Mr. Ansh Parmar', '909016xxxx'),
('Mahesana', 'Ms. Yashvee Rana', '890636xxxx'),
('Morbi', 'Mr. Mahendra Pavar', '901136xxxx'),
('Navsari', 'Mr. Yash Pavar', '843136xxxx'),
('Patan', 'Mr. Deepak Parmar', '913436xxxx'),
('Rajkot', 'Mr. Hetanshu Sevek', '812345xxxx'),
('Surat', 'Mr. Kirit Sharma', '712336xxxx'),
('Vadodara', 'Mr. Devesh Patel', '912636xxxx'),
('Valsad', 'Ms. Vaishnavi Nair', '992512xxxx');


<?php
require('db.php');
// SQL query
$sql = "SELECT `Branch (Name od Taluka)`,`Name of Hea of Branch`,`Contact No. of Head of Branch`, FROM `contact_info`";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "Branch (Name od Taluka)" . $row["Branch (Name od Taluka)"] . "<br>";
        echo "Name of Hea of Branch: " . $row["Name of Hea of Branch"] . "<br>";
        echo "Contact No. of Head of Branch" . $row["Contact No. of Head of Branch"] . "<br>";
    }
} else {
    echo "0 results";
}
?>