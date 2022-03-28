<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="description" content="Assignment Part 1,2 ContactUs page" />
  <meta name="keywords" content="HTML5, CSS, JavaScript, PHP" />
  <meta name="author" content="Nick Kim"  />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title> La Cucina della Nonna - enquiries </title>
  
  <!-- References to external fonts -->
  <link href='styles/fonts' rel='stylesheet'/>
  <!-- References to external CSS files --> 
  <link href= "styles/style.css" rel="stylesheet"/>
  <link href= "styles/style_responsive.css" rel="stylesheet" media="screen and (max-width: 1024px)" />
  <link href= "styles/style_responsive.css" rel="stylesheet" media="screen and (max-width: 568px)" />
</head>

<body id="bodye">
	<article>
		<div id="heading">
			<?php include "header.inc"; ?>
			<?php include "menu.inc"; ?>	
		</div>	
		<div id="enquiry">
			<h2 id="h2b">Reach out to us</h2>
			<form method="post" action="http://mercury.swin.edu.au/it000000/formtest.php">
			<p id="semp">Got a question for us? <br/>Fill out the form below and we will get back to you as soon as possible.</p>

			<fieldset>
				<legend>Personal Details</legend>			
					<p><label for="first_name">First Name:  </label>
						<input type="text" name= "Name" id="first_name" maxlength="25" pattern="[A-Za-z]{1,25}" size="10" required="required"/>
					</p>
					<p><label for="last_name">Last Name:  </label>
						<input type="text" name= "Name" id="last_name" maxlength="25" pattern="[A-Za-z]{1,25}" size="10" required="required"/>
					</p>					
			</fieldset>			
			<fieldset>
				<legend>Address</legend>
				<p><label for="sa">Street Address:  </label>
					<input type="text" name="address" id="sa" maxlength="40" pattern="[A-Za-z]{1,40}" size="20" required="required"/>
				</p>
				<p><label for="sut">Suburb / Town:  </label>
					<input type="text" name="address" id="sut" maxlength="20" pattern="[A-Za-z]{1,20}" size="20" required="required"/>
				</p>
				<p><label for="ptcd">Post Code:  </label>
					<input type="text" name="postcod" id="ptcd" maxlength="4" pattern="\d{4}" size="5" required="required"/>
				</p>
				<p><label for="st">State:  </label>	
					<select name="st" id="st" required="required">
						<option value="">Please Select</option>
						<option value="vic">VIC</option>
						<option value="nsw">NSW</option>			
						<option value="qlD">QLD</option>
						<option value="nt">NT</option>
						<option value="wa">WA</option>
						<option value="sa">SA</option>
						<option value="tas">TAS</option>
						<option value="act">ACT</option>
					</select>
				</p>				
			</fieldset>
			<fieldset>
				<legend>Contact information</legend>	
					<p><label for="emailadd">Email Address:  </label>
						<input type="email" name= "email" id="emailadd" required="required"/>
					</p>
					<p><label for="pnum">Phone Number:  </label>
						<input type="text" name= "pnumb" id="pnum" placeholder="No spaces" maxlength="10" size="20" pattern="^\({0,1}((0|\+61)(2|4|3|7|8)){0,1}\){0,1}( |-){0,1}[0-9]{2}( |-){0,1}[0-9]{2}( |-){0,1}[0-9]{1}( |-){0,1}[0-9]{3}$" required="required"/>
					</p>
					<p>Preferred contact: 
						<label for="pc1">Email</label>
						<input type="radio" name= "pc" id="pc1" checked="checked" required="required"/>
						<label for="pc2">Post</label>
						<input type="radio" name= "pc" id="pc2" required="required"/>
						<label for="pc3">Phone</label>
						<input type="radio" name= "pc" id="pc3" required="required"/>						
					</p>					
			</fieldset>
			<fieldset>
				<legend>Contact Form</legend>
				<p><label for="select">Enquiry Type:  </label>
					<select name="product" id="select">
						<option value="1" selected="selected">General Enquiry</option>
						<option value="2">Booking</option>
						<option value="3">Complaints</option>
						<option value="4">Feedback</option>
						<option value="5">Other</option>
						<option value="6">Venue Hire</option>
					</select>
				</p>
				<p>How did you hear about us? </p>
				<p><label for="seen">Search Engine</label>
					<input type="checkbox" id="seen" name="category" value="seen" checked="checked">
					<label for="some">Social Media</label>
					<input type="checkbox" id="some" name="category" value="some">					
					<label for="rad">Radio</label>
					<input type="checkbox" id="rad" name="category" value="rad">
					<label for="tv">TV</label>
					<input type="checkbox" id="tv" name="category" value="tv">
					<label for="resi">Review Sites</label>
					<input type="checkbox" id="resi" name="category" value="resi">
					<label for="wom">Word of Mouth</label>
					<input type="checkbox" id="wom" name="category" value="wom">
					<label for="byc">By Chance</label>
					<input type="checkbox" id="byc" name="category" value="byc">
					<br/><label for="oth">Other</label>
					<input type="text" id="oth" name="category" maxlength="25" pattern="[A-Za-z]" size="20">
				</p>
				<p>Message</p>
				<p><textarea id="doi" name="description" rows="4" cols="40" placeholder="Leave your message here..." required="required"></textarea>
				</p>
			</fieldset>		
			<input type= "submit" value="Submit" class="buttonse"/>
			<input type= "reset" value="Reset Form"/>	
			</form>
		</div>
		<?php include "footer.inc"; ?>	
	</article>
</body>
</html>