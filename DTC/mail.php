<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$mailheader = "From:".$name."<".$email.">\r\n";

$recipient = "example@gmail.com";

mail($recipient, $message, $mailheader) or die("Error!");

echo'
<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
<link href="https://fonts.googleapis.com/css2?family=Sofia+Sans&amp;display=swap" rel="stylesheet">
    <title>Data Traffic Center - IT-Consulting</title>
  </head>
  <body>
    <section style="height: 100vh;">
      <header>
        <img src="Logo2 no color.png" style="width: 72px;height: 72px;position: absolute;top: 2em;left: 2em; z-index: 1;">
        <div class="container pt-4">
      <div class="menu-open">
        <span class="open" style="position: fixed; color: blue;"></span></div>
      <div class="ozmenu mt-4">
        <div class="menu-close"><span class="close"></span></div>
        <ul class="ozmenu-nav">
          <li class="item dropdownitem">
            <a href="#" class="nav-dropdown parent">Unternehmen</a>
            <div class="dropdown">
              <ul>
                <li class="item"><a href="index.html#firstpointcompany">Unternehmensprofil</a></li>
                <li class="item"><a href="index.html#firstpointphilo">Philosophie</a></li>
                
            </ul></div>
          </li>
          <li class="item dropdownitem">
            <a href="#" class="nav-dropdown parent">Leistungen</a>
            <div class="dropdown">
              <ul id="menu">
                <li class="item"><a href="index.html#firstpointsofti">Softwareentwicklung</a></li>
                <li class="item"><a href="index.html#firstpointengin">DevOps Engineering</a></li>
                <li class="item"><a href="index.html#firstpointstaff">IT-Staffing</a></li>
                <li class="item"><a href="index.html#firstpointsupp">IT-Support</a></li>
              </ul>
            </div>
          </li>
          <li class="item dropdownitem">
            <a href="#" class="nav-dropdown parent">Jobs</a>
            <div class="dropdown">
              <ul>
                <li class="item"><a href="#">Aktuelle Stellenangebote</a></li>
              </ul>
            </div>
          </li>
              <li class="item"><a href="index.html#firstpointconti" style="font-weight: bold;">Kontakt</a></li>
       
            </ul>
      </div>
      <!-- /Ozmenu -->
        </div>

        <div class="video-container">
          <video autoplay="" loop="" muted="" id="video-bg" "="" class="videoembed">
      
            <source src="planet.mp4" type="video/mp4">
            <source src="planet.ogg" type="video/ogg">
            
            Your browser does not support the video tag.
          
            </video>
            </div>
     
        
           
      </header>
     
    
      <div style="position: absolute;top: 50%;left: 50%;transform: translate(-50%,-50%);z-index: 1;">
        <h1 style="text-align: center; color: white;animation: fadeIn 5s;">Data Traffic Center S.R.L.</h1>
      
          <div class="overlay" style="">
            <div class="typing-demo" style="color: white; ">
              Let your data work!
            </div>
          </div>  
  </div></section> 
	

	<div class="container">
        <h1>Thank you for contacting me. I will get back to you as soon as possible!</h1>
        <p class="back">Go back to the <a href="index.html">homepage</a>.</p>
        
    </div>
 

  

  <section>
    
    <footer>

      <div class="footdiv">
        <div class="foot1" style="color: white; font-size:18px; font-weight:bold;">
            <img src="Logo2 no color.png" style="width: 67px;">
              <h4 style="font-size: 24px;">Data Traffic Center S.R.L.</h4>
              <a style="text-decoration: none;" target="_blank" href="https://www.google.com/maps/place/Strada+Coasta+C%C3%A2mpului+283,+%C8%98tef%C4%83ne%C8%99tii+Noi/@44.8647285,24.9240435,17z/data=!3m1!4b1!4m5!3m4!1s0x40b2bc4ba7eb07a7:0x9f0dca7cdb35289e!8m2!3d44.8647247!4d24.9266184?entry=ttu">Coasta Campului 283b, Stefanesti, jud.Arges, Stefanesti, Jud. Arges, Romania</a>
              <a href=""><img src="emailw.png" style=""></a>
              <a style="text-decoration: none;" href="#">+40 770 452 086</a>
              <a href=""><img src="phonew.png" style=""></a>
              <a style="text-decoration: none;" href="#">info@dtc-it.com</a>
            <div style="text-transform: none;">
              <a href="index.html#firstpointconti" class="apple-button">Kontaktieren</a>
            </div>
          </div>  
          <div class="foot2" style="justify-self: center;">
            <h4>Unternehmen</h4>
            <a href="index.html#firstpointcompany">Unternehmensprofil</a>
            <a href="index.html#firstpointphilo">Philosophie</a>
            <a href="index.html#firstpointconti">Kontakt</a>
          </div>
          <div class="foot3">
            

            <h4>Leistungen</h4>
            <a href="index.html#firstpointsofti">Softwareentwicklung</a>
            <a href="index.html#firstpointengin">DevOps-Engineering</a>
            <a href="index.html#firstpointstaff">It-Staffing</a>
            <a href="index.html#firstpointsupp">IT-Support</a>
          </div>
          <div class="foot4" style="">
            
            <h4>Social</h4>
            <a href="#"><img src="xing.png"></a>
            <a href="#"><img src="linkedin.png"></a>
        </div>
        <div class="foot5" style="">
            <h4>Jobs</h4>
            <a href="#">Aktuelle Stellenangebote</a>
            <h4>Legal</h4>
            <a href="#">Impressum</a>
            <a href="#">Datenschutz</a>
        </div>
        

        
     
      </div>
    </footer>
	<div style="text-align: center; font-size:14px;padding: 2em;">
    <span style="font-size: 19px;">© 2023 Data Traffic Center | All Rights Reserved</span>
</div>
    </section>	
    
        <script src="ozmenu.js"></script><div id="menu-overlay"></div>

  

</body>
</html>



';


?>
