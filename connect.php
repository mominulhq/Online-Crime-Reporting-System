<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName ="regform";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbName);

if(isset($_POST['Submit'])){
    if(!empty($_POST['fname'])&& !empty($_POST['lname'])&& !empty($_POST['gender'])&& !empty($_POST['address'])&& !empty($_POST['bloodgroup'])&& !empty($_POST['phone'])&& !empty($_POST['email'])&& !empty($_POST['Password'])&& !empty($_POST['ConPassword']) ){
        $fname= $_POST['fname'];
        $lname= $_POST['lname'];
        $gender= $_POST['gender'];
        $address= $_POST['address'];
        $bloodgroup= $_POST['bloodgroup'];
        $phone= $_POST['phone'];
        $email= $_POST['email'];
        $Password= $_POST['Password'];
        $ConPassword= $_POST['ConPassword'];

        $query = "INSERT INTO regform (fname,lname,gender,address,bloodgroup, phone,email,Password,ConPassword) VALUES ('$fname', '$lname', '$gender','$address','$bloodgroup','$phone','$email','$Password','$ConPassword')";
        $run =mysqli_query($conn,$query) or die(mysqli_error());
        if($run){
            echo "New record created successfully";
        }
        else{
            echo "New record not created successfully";

        }

    }
   
}





?>