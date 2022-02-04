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
<link rel="stylesheet" href="CSS/crimerate.css">
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
            <a class="nav-link text-center text-md-left" href="complain.php">Complaint Box</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-center text-md-left" href="register.php">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-center text-md-left" href="login">Login</a>
          </li>
        </ul>
      
    </nav>

  </div>


  
  
       
               
            
        

</header>
<!--header end-->
<!--main-->
 
<main>
 <!-- about-me starts  -->
 <section id="about">
        
        <div class="container fixed-center">
          <div class="container fixed-center">
  
            <div class="row pt-5 mt-3">
              <div class="col-lg-6 ">
        
                <div class="achieve-desc text-center text-lg-center">
        
    <canvas id="myChart" style="width:100%;max-width:600px"></canvas>

    <script>
    var xValues = ["Dhaka", "Chittagong", "Barisal", "Rangpur", "Khulna"];
    var yValues = [55, 49, 44, 23, 24];
    var barColors = ["red", "green","blue","orange","brown"];
    
    new Chart("myChart", {
      type: "bar",
      data: {
        labels: xValues,
        datasets: [{
          backgroundColor: barColors,
          data: yValues
        }]
      },
      options: {
        legend: {display: false},
        title: {
          display: true,
          text: "Crime rate in different district"
        }
      }
    });
    </script>

</div>
</div>

<div class="col-lg-6  mb-5 text-center text-lg-left ">
  <div class="white-text">
    <h3>Intentional homicides are estimates of unlawful homicides purposely inflicted as a result of domestic disputes, interpersonal violence, violent conflicts over land resources, intergang violence over turf or control, and predatory violence and killing by armed groups. Intentional homicide does not include all intentional killing; the difference is usually in the organization of the killing. Individuals or small groups usually commit homicide, whereas killing in armed conflict is usually committed by fairly cohesive groups of up to several hundred members and is thus usually excluded..</h2>


  </div>
</div>

</section>
</main>
<!--main end-->



 
      
   
   







<!--jquery,popper,javascript-->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>