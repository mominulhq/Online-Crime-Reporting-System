<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Crime Reporting</title>
    <!-- fontawsome-->
    <link rel="stylesheet" href="css/all.min.css">

<!--animate-->
    <link href="css/animate.css" rel="stylesheet" type="text/css" >
     <!--canvas-->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>



<!--Bootstrap-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!--css-->
<link rel="stylesheet" href="CSS/register.css">
<body>
  <!--header-->
  <header class="header">
  <!-- Navbar-->

  <div class="container-max-fluid">
    <nav class="navbar  navbar-expand-md">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span> <i class="fas fa-bars navbar-icon"></i> </span>
      </button>

      <a href="#" class="navbar-brand text-uppercase font-weight-bold">Online <span>Crime
        </span><span>reporting</span></a>


        <div class="collapse navbar-collapse" >
        <ul class="navbar-nav ml-auto">
          <li class="nav-item ">
          <a class="nav-link text-center text-md-left" href="homepage.php">Home</a>
            
          </li>
          <li class="nav-item">
            <a class="nav-link text-center text-md-left" href="crimerate.php">Crime Rate</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link text-center text-md-left" href="#complain.php">Complaint Box</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-center text-md-left" href="register.php">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-center text-md-left" href="login.php">Login</a>
          </li>
        </ul>
      
      </div>
    </nav>

  </div>


  
  
       
               
            
        

</header>
<!--header end-->
<main>
<div class="wrapper">
    <div class="title" align="center" width="400" border="0">
      Registration Form
    </div>
    <!--form start-->
    <form name="form" method="POST" action="connect.php" OnSubmit="return fncValidate();" autocomplete="off" >
      <table align="center" width="400" border="0">
          <tr>
            <td width="125"> Firstname</td>
            <td width="180"><div class="input-group">
              <input type="text" name="fname" size="20"></div>
            </td>
          </tr> 
        <tr>
            <td width="125"> Lastname</td>
            <td width="180"><div class="input-group">
              <input type="text" name="lname" size="20"></div>
            </td>
          </tr>
        <tr><td>Gender:</td><td><span id="gen"><input type="radio" name="gender" value="male" id="male"> Male
        <input type="radio" name="gender" value="female" id="female"> Female</span></td></tr>
        <tr><td>Address:</td><td><textarea name="address" class="textarea-field"></textarea></td></tr>
        <tr><td>Blood Group: </td><td><div class="input-group">
    <select name="bloodgroup" id="Blood Group">
    <option value="">Choose </option>
    <option value="A+">A+</option>
    <option value="A-">A-</option>
    <option value="B+">B+</option>
    <option value="B-">B-</option>
    <option value="AB+">AB+</option>
    <option value="AB-">AB-</option>
    <option value="O+">O+</option>
    <option value="O-">O-</option>
    </select>
    </div></td></tr>
    <tr>
            <td> Mobile No:</td> 
            <td><div  class="input-group"><input type="text" name="phone"></div>
            </td> 
          </tr>
        <tr>
            <td> Email</td>
            <td><div  class="input-group"><input type="text" name="email"></div>
            </td>
          </tr>
         <tr>
            <td> Password</td>
            <td><div  class="input-group"><input type="password" name="Password"></div>
            </td>
          </tr>
          <tr>
            <td> Confirm Password</td>
            <td><div  class="input-group"><input type="password"  name="ConPassword"></div>
            </td>
          </tr>
          
    <tr><td></td><td><input type="submit" name="Submit" value="Submit" class="btn">
    <input type="reset" name="reset" value="Reset" class="btn"></td></tr>
      </table>
      <br>
      <div class="text-center mb-5 text-dark"> Have an account? 
        <a class="login-link" href="login.php">login</a>
       </div>
      </br>
    </form>
<!--form end-->
</main>
<!--main end-->



 
      
   
   







<!--jquery,popper,javascript-->
<script src="js/reg.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>