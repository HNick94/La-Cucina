<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="description" content="Assignment Part 3 Payment page" />
  <meta name="keywords" content="HTML5, CSS, JavaScript, PHP" />
  <meta name="author" content="Nick Kim"  />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title> La Cucina della Nonna - Payment </title>
  
  <!-- References to external fonts -->
  <link href='styles/fonts' rel='stylesheet'/>
  <!-- References to external CSS files --> 
  <link href= "styles/style.css" rel="stylesheet"/>
  <link href= "styles/style_responsive.css" rel="stylesheet" media="screen and (max-width: 1024px)" />
  <link href= "styles/style_responsive.css" rel="stylesheet" media="screen and (max-width: 568px)" />
  <!-- References to external js files -->
 
  <script src="scripts/enhancements.js"></script>
  <script src="scripts/part3.js"></script>
</head>

<body id="bodyb">
	<article>
		<div id="heading">
			<?php include "header.inc"; ?>	
			<?php include "menu.inc"; ?>
		</div>	
		<div id="enquiry">
			<h2 id="h2b">Booking Confirmation</h2>
			<p id="semp">Confirm your Booking! <br/>Check your Details. Cancel the Booking if it is incorrect.  (Booking fee is $5)<br/>You only have 3 minutes to submit</p>
			
			<form method="post" id="bookform" action="process_order.php" novalidate="novalidate">
				<fieldset id="bottomtop">
					<legend>Booking Details</legend>
					<p>Your Name: <span id="confirm_name"></span></p>
					<p>Preferred Date/Time: <span id="confirm_datetime"></span></p>
					<p>Email Address: <span id="confirm_email"></span></p>
					<p>Phone Number: <span id="confirm_phone"></span></p>
					<p>Street Address: <span id="confirm_sa"></span></p>
					<p>Suburb/Town: <span id="confirm_sut"></span></p>
					<p>Post Code: <span id="confirm_ptcd"></span></p>
					<p>Request booked: <span id="confirm_request"></span></p>
					<p>Number of Orders(Tables): <span id="confirm_quantity"></span></p>
					<p>Total Cost: $<span id="confirm_cost"></span></p>
					<p>Further Request: <span id="confirm_doi"></span></p>
					<input type="hidden" name="first_name" id="first_name" />
					<input type="hidden" name="last_name" id="last_name" />
					<input type="hidden" name="date" id="date" />
					<input type="hidden" name="time" id="time" />
					<input type="hidden" name="emailadd" id="emailadd" />
					<input type="hidden" name="pnum" id="pnum" />
					<input type="hidden" name="doi" id="doi" />
					<input type="hidden" name="sa" id="sa" />
					<input type="hidden" name="sut" id="sut" />
					<input type="hidden" name="ptcd" id="ptcd" />
					<input type="hidden" name="request" id="request" />					
					<input type="hidden" name="quantity" id="quantity" />
					<input type="hidden" name="cost" id="cost" />
					<input type="hidden" name="st" id="st" />
					<input type="hidden" name="pc" id="pc" />
				
					<fieldset>
						<legend>Payment</legend>
							<p><label for="credit">Credit Card Type: </label>
								<select id="credit" name="credit">
									<option value="none">Please Select</option>
									<option value="visa">Visa</option>
									<option value="mastercard">Mastercard</option>
									<option value="american_express">American Express</option>
								</select>
							</p>
							<p><label for="cardname">Name on Credit Card: </label>
								<input type="text" id="cardname" name="cardname" pattern="[A-Za-z ]{1,40}" maxlength="40" />
							</p>
							<p><label for="cardnum">Credit Card Number: </label>
								<input type="text" id="cardnum" name="cardnum" pattern="[0-9]{15,16}" maxlength="16" />
							</p>
							<p><label for="expiry">Expiry Date: </label>
								<input type="text" id="expiry" name="expiry" pattern="(0[1-9]|1[0-2])\-{1}([0-9]{2})" maxlength="5" placeholder="MM-YY" />
							</p>
							<p><label for="cvv">Card Verification Value(CVV): </label>
								<input type="text" id="cvv" name="cvv" pattern="[0-9]{3}" maxlength="3" />
							</p>
					</fieldset>	
					
						<input type="submit" value="Check Out" />
						<button type="button" id="cancelButton">Cancel</button>
						<span id="dddd"></span>
					</fieldset>				
			</form>
		</div>
		<?php include "footer.inc"; ?>
	</article>
</body>
</html>