<DOCYPE html>
<html lang="en">
<html>
    <body>
         
<head>
    <title>Fun for Everyone</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=1.0">
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous"> 
    <link rel="stylesheet/less" type="text/css" href="ace.less" />
 </head> 
     

<header>
           <img src="images/logo4.png" alt="logo">
           <h1>Fun for Everyone</h1>
		   <p>Ace in the Hole Multisport Events is proud to offer running and triathlon events to athletes of all shapes and sizes, national origins, gender identifications and cultural backgrounds. We offer Events for Every Body - <a href="contact.php">questions</a>?</p>
       </header>
       
    <nav>
        <div class="toggle">
          <i class="fas fa-bars menu"></i>
        </div>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="event.php">Events</a></li>
             <li><a href="faq.php">FAQs</a></li>
            <li><a href="registration.php">Register</a></li>
            <li><a href="contact.php">Contact Us</a></li>
        </ul>
       </nav>   
       <div class="imge">
           <a><img src="images/aceS6.jpg" alt="running-man"></a>
           <a><img src="images/ace9.jpg" alt="thletes-with-disabilities"></a>
           <a><img src="images/ace10.jpg" alt="man-runs-to-end"></a>
           <a><img src="images/ace14.jpg" alt="girls-running"></a>
           <a><img src="images/ace19.jpg" alt="men-biking"></a>
           <a><img src="images/ace_h2.jpg" alt="men-swimming"></a>
       </div>
       
       <div class="whatWEDo">
           <ul>
               <li><a href="registration.php">Registration</a></li>
            <li>Long Course&nbsp;$240</li>
               <li>Olympic&nbsp;$110</li>
                <li>10K&nbsp;$50</li>
               <li>Sprint&nbsp;$90</li>
               <li>Try-a-Tri&nbsp;$65</li>
           </ul>
           <h1>Cost Includes</h1>
           <h2 class="weAre">ACE</h2>
           <ul>	   
			   <li>Food + Beer</li>
               <li>Commemorative Finisher medal</li>
               <li>Accurate Chip Timing for competitive races</li>
			   <li>Access to the weekend's live entertainment + Fitness Expo</li>
               <li>Ace in the Hole Multisport Weekend Tech Shirt</li>
			   <li>Post-event party + entertainment</li>
               <li>NOTE: Tech shirts guaranteed to pre-registered participants only</li>
           </ul>
        </div>
       
       <div class="imge2">
           <a><img src="images/ace_L.jpg" alt="biking&running"></a>
           <a><img src="images/ace_L2.png" alt="running-foot"></a>
       </div>
	   
	    <div class="weather">
           <a class="weatherwidget-io" href="https://forecast7.com/en/45d52n122d68/portland/?unit=us" data-label_1="PORTLAND" data-label_2="WEATHER" data-theme="dark" >PORTLAND WEATHER</a>
   <script>
   !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>
        </div>   

    <script src="https://code.jquery.com/jquery-3.6.0.js" ></script>
    <script type="text/javascript">
     $(document).ready(function(){
         $('.menu').click(function(){
             $('ul').toggleClass('active');
         })    
     })
    </script>

<?php
include 'footer.php';
?> 
        
    </body>
    </html>