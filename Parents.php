<?php

session_start();
include("connection.php");
include("functions.php");
$user_data = check_login($con);

$_SESSION;

?>

<html><title>Parents Portal</title>

<head>
<link rel="stylesheet"href="styl.css">
<link rel="stylesheet"href="style42.css">
<link rel="stylesheet"a href="style4.css">
<link rel="stylesheet"href="styl.css">
    <link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <div class="menu-bar">
    Welcome back, <?php echo $user_data['user_name'];?>
    
    </div>
    <div class="menu-bar">
      <h1 class="logo">Parents<span> Portal.</span></h1>
      <ul>
        <li><a href="Home.php">Home</a></li>
        
        <li><a href="#">Profile</a>

            <div class="dropdown-menu">
                <ul>
                  <li>
                   <li><a href="myDetails.php">Details</a></li>
                  <li><a href="#">Status</a></li>
                  <li><a href="#">Reminder</a></li>
</li>
                </ul>
              </div>
        </li>
        <li><a href="#">Child Data</a>

<div class="dropdown-menu">
    <ul>
        <li>
          <li><a href="addchild1.php">Add Child</a></li>
                        <li><a href="view.php">View Child</a></li>
                        <li><a href="deletechild.php">Remove Child</a></li>
                        <li><a href="#"></a></li>
                  
                  </li>
                </ul>
              </div>
              

        </li>
        <li><a href="#">Appointments</a>
        <div class="dropdown-menu">
    <ul>
                  <li><a href="">Book Appointment</a></li>
                  <li><a href="">View Appointments</a></li>
                 
                </ul>
              </div>
              

        </li>
        <li><a href="search_hospital.php">Hospitals</a></li>
        <li><a href="view_vaccine.php">View Vaccines</a></li>
        <li><a href="logout.php">Logout</a></li>
        <li><a href="test/download.php"><i class="fa fa-download"></i></a></li>
      </ul>
    </div>
    
   
    

    <div class="hero">
      &nbsp;
    </div>
    <div class="text-box">
    <h1>World's Best Online Medical Center For Your Child</h1>
    <p>This is where all your child's vaccination needs are met</p>
    <a href=""class="hero-btn"> Visit us for more  <i class="fa fa-long-arrow-right"> </i></a>
<br><br>

   
</div>
</div>

  </body>
</html>
