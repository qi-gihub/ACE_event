<?php
include 'header.php';
?>
   
	<main>
        <h3>FAQs</h3>
        <p><b>What are the Rules?</b> We currently adhere to the USAT Rules for Triathlon & Duathlon. Important rules include no drafting, you must wear a helmet and music is <b>ABSOLUTELY NOT</b> allowed during the bike for obvious safety reasons.</p><br>
        
        <p><b>Can I use a personal music device while cycling?</b> Absolutely no music devices are allowed during the bike segment for obvious safety risks and will result in immediate disqualification.</p><br>
        
        <p><b>Can I use a personal music device while running?</b> During any running segments, we prefer for athletes to NOT use music devices to maximize safety, assure a fair competitive environment and assure athletes can hear all course marshal instructions. With that said, we also understand that many athletes rely on music to help endure the challenge of running. To accommodate the needs of our athletes while still assuring maximum safety and a fair, competitive environment, here is the arrangement that we can accommodate.</p>
        
        <ul>
          <li>If you chose to use a personal music device, you must always keep one ear open for instructions so only one ear-bud can be used at any time. In addition, if you opt to use music, you will not be eligible for awards, points and rankings. So as an athlete, you have to make a choice - music or awards/points/rankings.</li>
            <li>
            If you are using a personal music devise with two earbuds, you will be immediately disqualified. Trust us, we don't want to have to enforce a disqualification but in order to assure the safety of all athletes, this is a very important rule.</li>
            <li>We also request that if you chose to use a personal music device that you keep the volume to a minimum to assure all instructions can be heard.</li>
        </ul>
    
        <h3>Contact us if you have any question</h3>
		<div class="container">
		<form action="https://formspree.io/f/xrgowbar" method="post" id="form">
			
			<div class="form-group">
			<label for="fullName">Full Name</label>
			<input type="text" id="fullName" name="fullName" required>
			</div>
			
			<div class="form-group">
			<label for="email">Email Address</label>
			<input type="email" id="email" name="Email" required>
			</div>
			
			<div class="form-group">
			<label class="heading">Role</label>
			<select name="Role">
  			<option value="">Select...</option>
  			<option value="Athlete">Athlete</option>
  			<option value="Volunteer">Volunteer</option>
            </select>
			</div>
			
			<div class="form-group">
			<label for="questionMassage">Your Question or Massage</label>
			<textarea name="Massege" id="massege" cols= "20" rows="10">
			</textarea>
			</div>
			<button type="submit">Submit</button>
			</form>
		</div>
		<div id="status"></div>
		</main>
       
        <div class="weather">
           <a class="weatherwidget-io" href="https://forecast7.com/en/45d52n122d68/portland/?unit=us" data-label_1="PORTLAND" data-label_2="WEATHER" data-theme="dark" >PORTLAND WEATHER</a>
   <script>
   !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>
        </div>
       
         <?php include 'footer.php'; ?>
    <script src="https://code.jquery.com/jquery-3.6.0.js" ></script>
    <script type="text/javascript">
     $(document).ready(function(){
         $('.menu').click(function(){
             $('ul').toggleClass('active');
         })    
     })
    </script>
    </body>
    
    
    </html>