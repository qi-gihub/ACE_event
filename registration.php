<?php
include 'header.php';
?>
		
	<section>
        <h2>Registration Form</h2>
		<div class="container">
		<form action="https://formspree.io/f/xrgowbar" method="post" id="my-form">
			
			<div class="form-group">
			<label for="fullName">Full Name</label>
			<input type="text" id="fullName" name="FullName" required>
			</div>
			
			<div class="form-group">
			<label for="age">Age</label>
			<input type="text" id="age" name="Age" required>
			</div>
			
			<div class="form-group">
			<label class="heading">Gender</label>
			<select name="Gender">
  			<option value="">Select...</option>
  			<option value="M">Male</option>
  			<option value="F">Female</option>
			<option value="O">Other</option>
            </select>
			</div>
			
			<div class="form-group">
			<label class="heading">Role</label>
			<select name="Role">
  			<option value="">Select...</option>
  			<option value="Athlete">Athlete</option>
  			<option value="Vsolunteer">Volunteer</option>
            </select>
			</div>
			
			<div class="form-group">
			<label class="heading">T-shirt Size</label>
			<select name="TshirtSize">
  			<option value="">Select...</option>
  			<option value="S">S</option>
  			<option value="M">M</option>
			<option value="L">L</option>
  			<option value="X">XL</option>
            </select>
			</div>
			
			<div class="form-group">
			<label class="heading">Choose event</label>
			<select name="Event">
  			<option value="">Select...</option>
			<option value="Saturdayay">Saturday</option>
  			<option value="Sunday">Sunday</option>
  			</select>
			</div>
			
			<div class="form-group">
			<label for="email">Email Address</label>
			<input type="email" id="email" name="Email" required>
			</div>
			
			<div class="form-group">
			<label for="phoneNumber">Phone Number</label>
			<input type="text" id="phonenumber" name="Phonenumber" required>
			</div>
			
			<div class="form-group">
			<label for="emergencyContactName">Emergency Contact's Name</label>
			<input type="text" id="emergencyContactName" name="EmergencyContactName" required>
			</div>
			
			<div class="form-group">
			<label for="emergencyContactNumber">Emergency Contact's Number</label>
			<input type="text" id="emergencyContactNumber" name="EmergencyContactNumber" required>
			</div>
			
			<div class="form-group">
			<label for="specialneed">Special Need</label>
			<textarea name="Massege" id="massege" cols= "30" rows="10">
			</textarea>
			</div>
			<button type="submit">Submit</button>
			</form>
		</div>
		<div id="status"></div>
        <h3>NOTE: Tech shirts guaranteed to pre-registered participants only.</h3>
		</section>
    
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