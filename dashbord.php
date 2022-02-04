<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <script src="https://kit.fontawesome.com/b99e675b6e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="CSS/styleTwo.css">

    <title>Online Crime Reporting</title>

</head>
<body>

    <!--======================== Header Section ==================== -->
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
            <div class="header"><b>Welcome to Deshboard! Online Crime Reporting</b></div>
            <div class="info">
            <?php
    include_once("config.php");

    if (isset($_GET['first']))
    {
        $firstname = $_GET['first'];
        $sql = "SELECT * FROM regform WHERE firstname='$firstname'";
        
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            
            if($row = $result->fetch_assoc()) {
                echo '<h1>'.$row["fname"]."'s Profile</h1>";
                echo '<table>';
                echo '<tr><td>NID :</td><td>'.$row["nid"].'</td></tr>';
                echo '<tr><td>Date :</td><td>'.$row["id"].'</td></tr>';
                echo '<tr><td>Firstname :</td><td>'.$row["fname"].'</td></tr>';
                echo '<tr><td>Lastname :</td><td>'.$row["lname"].'</td></tr>';
                echo '<tr><td>Address :</td><td>'.$row["address"].'</td></tr>';
                echo '<tr><td>Crime Type :</td><td>'.$row["ctype"].'</td></tr>';
                echo '<tr><td>Phone :</td><td>'.$row["phone"].'</td></tr>';
                echo '<tr><td>Email :</td><td>'.$row["email"].'</td></tr>';
                echo '<tr><td>Complain :</td><td>'.$row["com"].'</td></tr>';

            }
            echo '</table>';
        }
        else {
           echo "0 results";
        }
    }
    else {

        echo '<h2>All of Reports:</h2>';

        $sql = "SELECT * FROM report";
        
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
   
            while($row = $result->fetch_assoc()) {
                
                echo '<hr />';
                echo '<table>';
                echo '<tr><td>NID :</td><td>'.$row["nid"].'</td></tr>';
                echo '<tr><td>Date :</td><td>'.$row["rid"].'</td></tr>';
                echo '<tr><td>Firstname :</td><td>'.$row["fname"].'</td></tr>';
                echo '<tr><td>Lastname :</td><td>'.$row["lname"].'</td></tr>'; 
                echo '<tr><td>Address :</td><td>'.$row["address"].'</td></tr>';
                echo '<tr><td>Crime Type :</td><td>'.$row["ctype"].'</td></tr>';
                echo '<tr><td>Phone :</td><td>'.$row["phone"].'</td></tr>';
                echo '<tr><td>Email :</td><td>'.$row["email"].'</td></tr>';
                echo '<tr><td>Complain :</td><td>'.$row["com"].'</td></tr>';

                echo '</table>';
                
            }
        }
        else {
           echo "0 results";
        }
    }
    
   
?>
        
        </div>
        
        </div>



    </div>














      <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>