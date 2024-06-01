<!DOCTYPE html>
<html>
    <style>
        .ti{
            text-align: center;
            display:flex;
            justify-content: center;
            align-content: center;
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
</body>
</html>