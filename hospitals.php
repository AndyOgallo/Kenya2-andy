<?php

session_start();
include("connection.php");
include("functions1.php");
$user_data = check_login($con);

$_SESSION;

?>

<html><title>Hospitals</title>

<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
    <link rel="stylesheet"href="style7.css">
    <link rel="stylesheet" href="style4.css">
    <link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="menu-bar">
    Welcome, <?php echo $user_data['hospital_name'];?>
    
    </div>
    <div class="menu-bar">
    
    
        <ul>
            
        <li><a href="Home.php"><i class="fa fa-home"></i>Home</a></li>
        
        <li><a href=""><i class="fa fa-user"></i>About Us</a>

         <div class="sub-menu-1">
            <ul>
                <li><a href="">Mission</a></li>
                <li><a href="">Vision</a></li>
                <li><a href="">Core Values</a></li>
                <li><a href=""></a></li>
            </ul>
         </div>
         </li>
         <li><a href=""><i class="fa fa-phone"></i>  Contact</li>
        <li><a href=""><i class="fa fa-envelope"></i>Services</a>

        <div class="sub-menu-1">
            <ul>
                <li><a href="">In-Patient</a></li>
                <li><a href="">Out-Patient</a></li>
            
            </ul>
         </div>
         
    </li>
    
        <li><a href=""><i class="fa fa-users"></i>Partners</a>
        
        <div class="sub-menu-1">
            <ul>
                <li><a href="https://www.nhif.or.ke/">NHIF</a></li>
                <li><a href="https://www.kemri.go.ke/">KEMRI</a></li>
                <li><a href="https://www.cdc.gov/index.htm">CDC-KENYA</a></li>
                <li><a href="https://www.usaid.gov/">USAID-KENYA</a></li>
                <li><a href="">Others</a></li>
            
            </ul>
         </div>
    
    <li> <li><a href="vaccinces.php">Vaccines</a></li></li>
    
    </li>
        <li><a href="logout1.php"><i class="fa fa-lock"></i>Log Out</a></li>
    </ul>
</div>
<h style="color:white">How are you doing today</h1>

<!-----services------>
<section class="services">
    <h1> Services we offer</h1>
    <p>We are are entitled to offering high quality and best services to all</p>

<div class="row">
    <div class="services-col">
        <h3>General consultation</h3>
        <p>all services</p>
</div>
<div class="services-col">
        <h3>In patient/out patient</h3>
        <p>all services</p>
</div>
<div class="services-col">
        <h3>surgeries</h3>
        <p>all services</p>
</div>
<div class="services-col">
        <h3>Maternity</h3>
        <p>all services</p>
</div>

<div class="services-col">
        <h3>Laboratory services</h3>
        <p>all services</p>
</div>
<div class="services-col">
        <h3>Public Awareness</h3>
        <p>all services</p>
</div>

</section>

<!-----services------>

<section class="countries">
    <h1> Our Offices</h1>
    <p>Quality healthcare to all</p>

    <div class="row">
        <div class="countries-col">
            <img src="images/image3.jpg">
            <div class="layer">
                <h3>KISUMU</h3>
       </div>
           </div>

           <div class="countries-col">
            <img src="images/kicc.jpg">
            <div class="layer">
                <h3>NAIROBI</h3>
       </div>
           </div>

           <div class="countries-col">
            <img src="images/nakuru.jpg">
            <div class="layer">
                <h3>NAKURU</h3>
       </div>
           </div>
           <div class="countries-col">
            <img src="images/eldoret.jpg">
            <div class="layer">
                <h3>ELDORET</h3>
       </div>
           </div>
    </div>
</section>

<!----------facilities------------>
<section class="facilities">
    <h1>Our facilities</h1>

    <div class="row">
        <div class="facilities-col">
            <img src="images/lab.jpg"alt="laboratory">
            <h3>Modern laboratory</h3>
        </div>

        <div class="facilities-col">
            <img src="images/consultatio.jpg"alt="consultation room">
            <h3>Consultation room</h3>
        </div>

        <div class="facilities-col">
            <img src="images/maternity1.jpg"alt="labor room">
            <h3>Modern Labor room</h3>
        </div>
        <div class="facilities-col">
            <img src="images/research.jpg"alt="research center">
            <h3>Modern research center</h3>
        </div>
    </div>

</section>

<!---------------------Testimonials----------------------------------->

<section class="testimonials">
    <h1>What our patients say</h1>
    <div class="row">
        <div class="testimonials-col">
            <img src="images/person2.jpg"alt="discharged patient">
            <div>
                <p>I managed to get an appointment with a nurse practitioner without any problems. She was very helpful and kind and listened to my concerns and ailments. Excellent nurse to patient rapport showed skill and understa</p>
                <h3>Charles Walker</h3>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
        </div>

        <div class="testimonials-col">
            <img src="images/person1.jpg"alt="discharged patient">
            <div>
                <p>I want to express my extreme gratitude for the care I received at your hospital. From the moment I went in to have an echocardiogram to the time of discharge, every experience with every department was great. I have been a nurse for 35 years and I have never seen hospital staff like yours. From housekeeping to dietary, nursing, valet and all the other departments, I was impressed. I will recommend Griffin hospital to everyone going forward. Thank you for a wonderful experience despite the fact that I was hospitalized</p>
                <h3>Hellen Morgan</h3>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
            </div>
        </div>

        <div class="testimonials-col">
            <img src="images/person3.jpg"alt="discharged patient">
            <div>
                <p>Your facilities, and especially your amazing staff, gave me excellent care and made me about as comfortable as I could be! Literally everyone was friendly, kind and caring from the moment I entered. I just would like to thank and commend them all for making my experience as nice as it could possibly be! They are absolutely top notch caring professionals, and made me glad I chose My E Hospital</p>
                <h3>Winnie Stevens</h3>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
        </div>
    </div>
</section>

</body></html>

<?php
