<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName ="regform";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbName);

if(isset($_POST['Submit'])){
    if(!empty($_POST['fname'])&& !empty($_POST['lname'])&& !empty($_POST['gender'])&& !empty($_POST['ctype'])&& !empty($_POST['address'])&& !empty($_POST['phone'])&& !empty($_POST['email'])&& !empty($_POST['nid'])&& !empty($_POST['com']) ){
        $fname= $_POST['fname'];
        $lname= $_POST['lname'];
        $gender= $_POST['gender'];
        $ctype= $_POST['ctype'];
        $address= $_POST['address'];
        $phone= $_POST['phone'];
        $email= $_POST['email'];
        $nid= $_POST['nid'];
        $com=$_POST['com'];

        $query = "INSERT INTO report (fname,lname,gender,ctype,address,phone,email,nid,com) VALUES ('$fname','$lname','$gender','$ctype','$address','$phone','$email','$nid','$com')";
        $run =mysqli_query($conn,$query) or die(mysqli_error());
        if($run){
            echo "New record created successfully".header("location:thankyou.php");
        }
        else{
            echo "New record not created successfully";

        }

    }
   
}





?>