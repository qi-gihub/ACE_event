<?php
include 'header.php';
?>
   
	<main>
        <h3>Contact us if you have any question</h3>
		<div class="container">
		<form action="tuch.php" method="post" id="form">
			
			<div class="form-group">
			<label for="fullName">Full Name</label>
			<input type="text" id="fullName" name="FullName" required>
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