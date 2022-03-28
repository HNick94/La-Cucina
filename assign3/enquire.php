<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="description" content="Assignment Part 3 Book page" />
  <meta name="keywords" content="HTML5, CSS, JavaScript, PHP" />
  <meta name="author" content="Nick Kim"  />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title> La Cucina della Nonna - Booking </title>
  
  <!-- References to external fonts -->
  <link href="styles/fonts" rel="stylesheet"/>
  <!-- References to external CSS files --> 
  <link href="styles/style.css" rel="stylesheet"/>
  <link href="styles/style_responsive.css" rel="stylesheet" media="screen and (max-width: 1024px)" />
  <link href="styles/style_responsive.css" rel="stylesheet" media="screen and (max-width: 568px)" />
  <!-- References to external js files -->
  <script src="scripts/enhancements.js"></script>
  <script src="scripts/part2.js"></script>
</head>

<body id="bodyb">
	<article>
		<div id="heading">
			<?php include "header.inc"; ?>
			<?php include "menu.inc"; ?>		
		</div>	
		<div id="enquiry">
			<h2 id="h2b">Book your table</h2>
			
			<form method="post" action="payment.php" id="regform" novalidate="novalidate" >
			<p id="semp">Wanna book your table? <br/>Fill out the form below and we will confirm your booking as soon as possible.  (Booking fee is $5)</p>

			<fieldset class="left">
				<legend>Personal Details</legend>			
					<p><label for="first_name">First Name:  </label>
						<input type="text" name= "first_name" id="first_name" maxlength="25" pattern="[A-Za-z]{1,25}" size="10" required="required"/>
					</p>
					<p><label for="last_name">Last Name:  </label>
						<input type="text" name= "last_name" id="last_name" maxlength="25" pattern="[A-Za-z]{1,25}" size="10" required="required"/>
					</p>					
			</fieldset>	
			<fieldset class="right">
			<legend>Preferred Date/Time</legend>
			<p><label for="date">Date</label>
				<input type="date" name= "date" id="date" size="10" required="required"/>
			</p>
			<p><label for="time">Time</label>
				<input type="text" name= "time" id="time" placeholder="00:00" pattern="(?:[01]|2(?![4-9])){1}\d{1}:[0-5]{1}\d{1}" maxlength="10" size="10" required="required"/>
			</p>
			</fieldset>
			<fieldset id="bottomtop">
				<legend>Contact information</legend>	
					<p><label for="emailadd">Email Address:  </label>
						<input type="email" name= "emailadd" id="emailadd" required="required"/>
					</p>
					<p><label for="pnum">Phone Number:  </label>
						<input type="text" name= "pnum" id="pnum" placeholder="No spaces" maxlength="10" size="20" pattern="^\({0,1}((0|\+61)(2|4|3|7|8)){0,1}\){0,1}( |-){0,1}[0-9]{2}( |-){0,1}[0-9]{2}( |-){0,1}[0-9]{1}( |-){0,1}[0-9]{3}$" required="required"/>
					</p>
					<p><label for="sa">Street Address:  </label>
						<input type="text" name="sa" id="sa" maxlength="40" pattern="[a-zA-Z0-9 ]{1,40}" size="20" required="required"/>
					</p>
					<p><label for="sut">Suburb / Town:  </label>
						<input type="text" name="sut" id="sut" maxlength="20" pattern="[A-Za-z ]{1,20}" size="20" required="required"/>
					</p>
					<p><label for="ptcd">Post Code:  </label>
					<input type="text" name="ptcd" id="ptcd" maxlength="4" pattern="\d{4}" size="5" required="required"/>
					</p>
					<p><label for="st">State:  </label>	
						<select name="st" id="st">
							<option value="none">Please Select</option>
							<option value="vic">VIC</option>
							<option value="nsw">NSW</option>			
							<option value="qld">QLD</option>
							<option value="nt">NT</option>
							<option value="wa">WA</option>
							<option value="sa">SA</option>
							<option value="tas">TAS</option>
							<option value="act">ACT</option>
						</select>
					</p>
					<p>Preferred contact: 
						<label for="pc1">Email</label>
						<input type="radio" name= "pc" id="pc1" value="Email" required="required"/>
						<label for="pc2">Mail</label>
						<input type="radio" name= "pc" id="pc2" value="Mail" required="required"/>	
						<label for="pc3">Phone</label>
						<input type="radio" name= "pc" id="pc3" value="Phone" checked="checked" required="required"/>
					</p>					
			</fieldset>	
			<fieldset id="bottom">
			<legend>Special Requests</legend>
				<p>
				<label for="request">Request Options: </label>
					<select id="request" name="request">
						<option value="none">Please Select</option>
						<option value="only_table">None</option>
						<option value="happybirthday_package">$49 HappyBirthday Package (One HappyBirthday Cake, One House Wine with Music)</option>
						<option value="anniversary_package">$39 Anniversary Package  (One Heart Cake, One Champagne)</option>
						<option value="special_package">$59 Speical Package  (One Cake with Requested Words and Decorating on top)</option>
						<option value="wouldyoumarryme_package">$99 WouldYouMarryMe Package (One Special Cake, Two Special Drinks)</option>
					</select>
				</p>
				<p><label for="quantity">Number of Orders(Tables):  </label>
					<input type="text" id="quantity" name="quantity" maxlength="3" required="required" pattern="[0-9]+">
				</p><label for="doi">Further Requests:  </label>
				<p><textarea id="doi" name="doi" rows="4" cols="40" placeholder="Leave your further requests here..."></textarea>
				</p>
			</fieldset>
			
			<input type= "submit" value="Pay Now" class="buttons"/>
			<input type= "reset" value="Reset Form"/>
			</form>		
					
		</div>			
		<?php include "footer.inc"; ?>
	</article>
</body>
</html>