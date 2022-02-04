<?php
require('connect.php');
include("config.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
 <!-- Latest compiled and minified CSS -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<script src="https://kit.fontawesome.com/b99e675b6e.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="CSS/styleTwo.css">
<title>Online Crime Reporting</title>

</head>
<body>
<div class="wrapper">
        <div class="sidebar">
            <h2>DeshBoard</h2>
            <ul>
                <li><a href="dashbord.php"><i class="fas fa-home">Home</i></a></li>
                <li><a href="p.php"><i class="fas fa-user">Police </i></a></li>
                <li><a href="gcrime.php">Genarel Crime</i></a></li>
                <li><a href="mp.php">Missing Person</a></li>
                <li><a href="mv.php">Missing Vehicles </a></li>
                <li><a href="lost.php">Lost Items</a></li>
                <li><a href="others.php">Others </a></li>
                <li><a href="logout.php"><i class="fas fa-sign-out-alt">LogOut</i></a></li>
            </ul>

            <div class="social_media">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></i></a>

            </div>
        </div>
        <div class="main_content">
            <div class="header"><b>Genarel Crime</b></div>
            <div class="info">
<div class="form">

<table width="100%" border="3" style="border-collapse:collapse; ">
<thead>
<tr>
<th><strong>S.No</strong></th>
<th><strong>Crime Type</strong></th>
<th><strong>First Name</strong></th>
<th><strong>Last Name</strong></th>
<th><strong>Address</strong></th>
<th><strong>Complain</strong></th>
<th><strong>Phone</strong></th>
</tr>
</thead>
<tbody>








<?php
$count=1;
$sel_query="Select * from gcrime ORDER BY gcid desc;";
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="#"><?php echo $count; ?></td>
<td align="#"><?php echo $row["ctype"]; ?></td>
<td align="#"><?php echo $row["fname"]; ?></td>
<td align="#"><?php echo $row["lname"]; ?></td>
<td align="#"><?php echo $row["address"]; ?></td>
<td align="#"><?php echo $row["com"]; ?></td>
<td align="#"><?php echo $row["phone"]; ?></td>

</tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
</body>
</html>