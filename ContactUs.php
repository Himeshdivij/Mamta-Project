<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Phots/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="CSS/ContactUs.css">
    <title>ContactUs</title>
</head>
    <style>
        .ti{
            text-align: center;
            display:flex;
            justify-content: center;
            align-content: center;
            padding: 20px;
        }
        table {
            border-collapse: collapse;
            width: 500px;
        }
        td, th {
            padding: 10px;
        }
        th {
            background-color: #54585d;
            color: #ffffff;
            font-weight: bold;
            font-size: 13px;
            border: 1px solid #54585d;
        }
        td {
            color: #636363;
            border: 1px solid #dddfe1;
        }
        tr {
            background-color: #f9fafb;
        }
        tr:nth-child(odd) {
            background-color: #ffffff;
        }
    </style>
<body>
<div class="headerConatiner">
            <ul id="headList">
                <li>
                    <div class="logo">
                        <img src="Phots/Logo.png" alt="logo">
                    </div>
                </li>
                <li>
                    <div class="heading-text">
                        <h1>National Health Scheme</h1>
                    </div>
                </li>
                <li>
                    <div class="headLinks">
                        <a href="Login.html">Login</a>
                        <a href="SignUp.html">Sign Up</a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="navContainer">
            <nav>
                <ul>
                    <li>
                        <div class="navLinks">
                            <a href="index.html">Home</a>
                            <a href="AboutUs.html">About Us</a>
                            <a href="ContactUs.php">Conatact Us</a>
                            <a href="#">E-Resource</a>
                            <div class="search">
                                <input type="search" placeholder="search">
                                <button type="button">Search</button>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
<?php
require('db.php');
// SQL query
$sql = "SELECT `Branch (Name of Taluka)`,`Name of Head of Branch`,`Contact No. of Head of Branch` FROM `contact_info`";
$result = $con->query($sql); ?>
<div class="ti">
    <table border="1px">
        <tr>
            <th>Branch (Name of Taluka)</th>
            <th>Name of Head of Branch</th>
            <th>Contact No. of Head of Branch'</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) :?>
        <tr>
		<td><?php echo $row['Branch (Name of Taluka)']; ?></td>
		<td><?php echo $row['Name of Head of Branch']; ?></td>
		<td><?php echo $row['Contact No. of Head of Branch']; ?></td>
        <?php endwhile; ?> 
	</tr>
    </table>
    </div>
    <div class="footerContainer">
            <div class="links">
                <ul>
                    <li>
                        <div class="navLinks">
                            <a href="index.html">Home</a>
                            <a href="AboutUs.html">About Us</a>
                            <a href="ContactUs.html">Conatact Us</a>
                            <a href="#">E-Resource</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
</body>
</html>