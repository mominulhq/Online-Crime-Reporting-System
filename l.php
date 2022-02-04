<?php
require_once('config.php');
session_start();
    if(isset($_POST['Submit']))
    {
       if(empty($_POST['email']) || empty($_POST['Password']))
       {
            header("location:info.php?Empty= Please Fill in the Blanks");

       }
       else
       {
            $query="select * from regform where email='".$_POST['email']."' and Password='".$_POST['Password']."'";
            $result=mysqli_query($conn,$query);

            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['email']=$_POST['email'];
                header("location:welcome.php");
            }
            else
            {
                header("location:info.php?Invalid= Please Enter Correct User Name and Password ");
                
            }
       }
    }
else
{
    echo'Not Working Now';
}
?>
