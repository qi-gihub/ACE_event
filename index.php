<?php
include 'header.php';
?>
       
       <div class="imge">
           <a><img src="images/aceS6.jpg" alt="ace image"></a>
           <a><img src="images/ace9.jpg" alt="ace image"></a>
           <a><img src="images/ace10.jpg" alt="ace image"></a>
           <a><img src="images/ace14.jpg" alt="ace image"></a>
           <a><img src="images/ace19.jpg" alt="ace image"></a>
           <a><img src="images/ace_h2.jpg" alt="ace image"></a>
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
           </ul>
        </div>
       
       <div class="imge2">
           <a><img src="images/ace_L.jpg" alt=""></a>
           <a><img src="images/ace_L2.png" alt=""></a>
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