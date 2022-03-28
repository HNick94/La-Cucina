<?php
	error_reporting (E_ALL ^ E_NOTICE); 
	session_start ();	
	//$_SESSION["first_name"] = $_POST["first_name"];
	if (isset($_GET['restart'])) {
		session_unset();
		header("location: index.php");
		exit();
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="description" content="Assignment Part 3 Fix Order page" />
  <meta name="keywords" content="HTML5, CSS, JavaScript, PHP" />
  <meta name="author" content="Nick Kim"  />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title> La Cucina della Nonna - Fix your order </title>
  
  <!-- References to external fonts -->
  <link href='styles/fonts' rel='stylesheet'/>
  <!-- References to external CSS files --> 
  <link href= "styles/style.css" rel="stylesheet"/>
  <link href= "styles/style_responsive.css" rel="stylesheet" media="screen and (max-width: 1024px)" />
  <link href= "styles/style_responsive.css" rel="stylesheet" media="screen and (max-width: 568px)" />
  <!-- References to external js files -->

</head>

<body id="bodyb">
	<article>
		<div id="heading">
			<?php include "header.inc"; ?>	
			<?php include "menu.inc"; ?>
		</div>
		<div id="enquiry">
		<!-- Begin processing-->
		<?php
			if (isset	($_SESSION["first_name"]))	{
				$firstname = $_SESSION["first_name"];
			//	echo "<p>This is a if test: fname is $firstname</p>";
			}	else {
			//	echo "<p>This is a else test: fname is $firstname</p>";
				header ("location: index.php");
			}
			
			$lastname = $_SESSION["last_name"];
			$date = $_SESSION["date"];
			$time = $_SESSION["time"];
			$emailadd = $_SESSION["emailadd"];
			$pnum = $_SESSION["pnum"];
			$doi = $_SESSION["doi"];
			$sa = $_SESSION["sa"];
			$sut = $_SESSION["sut"];
			$ptcd = $_SESSION["ptcd"];
			$st = $_SESSION["st"];
			$request = $_SESSION["request"];
			$quantity = $_SESSION["quantity"];
			$prefer = $_SESSION["pc"];
			$credit = $_SESSION["credit"];
			$cardname = $_SESSION["cardname"];
			$cardnum = $_SESSION["cardnum"];
			$expiry = $_SESSION["expiry"];
			$cvv = $_SESSION["cvv"];
			
			//Validation
			if ($firstname=="")	{
				$errMsg .= "<p id='semp'>You must enter your first name.</p>";
			}	else if (!preg_match("/^[A-Za-z]{1,25}$/",$firstname))	{
				$errMsg .= "<p id='semp'>Only alpha letters are allowed in your first name.</p>";
			}
			
			if ($lastname=="")	{
				$errMsg .= "<p id='semp'>You must enter your last name.</p>";
			}	else if (!preg_match("/^[A-Za-z]{1,25}$/",$lastname))	{
				$errMsg .= "<p id='semp'>Only alpha letters are allowed in your last name.</p>";
			}
			
			if ($date=="")	{
				$errMsg .= "<p id='semp'>You must select a date.</p>";
			}	
			
			if ($time=="")	{
				$errMsg .= "<p id='semp'>You must enter a time.</p>";
			}	else if (!preg_match("/^(?:[01]|2(?![4-9])){1}\d{1}:[0-5]{1}\d{1}$/",$time))	{
				$errMsg .= "<p id='semp'>It must be 4 digits including a colon.</p>";
			}
			
			if ($emailadd=="")	{
				$errMsg .= "<p id='semp'>You must enter your email address.</p>";
			}	else if (!preg_match("/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/",$emailadd))	{
				$errMsg .= "<p id='semp'>It must be a valid email address.</p>";
			}
			
			if ($pnum=="")	{
				$errMsg .= "<p id='semp'>You must enter your phone number.</p>";
			}	else if (!preg_match("/^\({0,1}((0|\+61)(2|4|3|7|8)){0,1}\){0,1}( |-){0,1}[0-9]{2}( |-){0,1}[0-9]{2}( |-){0,1}[0-9]{1}( |-){0,1}[0-9]{3}$/",$pnum))	{
				$errMsg .= "<p id='semp'>It must be a valid australian phone number.</p>";
			}
			
			if ($sa=="")	{
				$errMsg .= "<p id='semp'>You must enter your street address.</p>";
			}	else if (!preg_match("/^[a-zA-Z0-9 ]{1,40}$/",$sa))	{
				$errMsg .= "<p id='semp'>It must be a valid street address.</p>";
			}
			
			if ($sut=="")	{
				$errMsg .= "<p id='semp'>You must enter your suburb/town.</p>";
			}	else if (!preg_match("/^[A-Za-z ]{1,20}$/",$sut))	{
				$errMsg .= "<p id='semp'>It must be a valid suburb/town.</p>";
			}
			
			if ($ptcd=="")	{
				$errMsg .= "<p id='semp'>You must enter your postcode.</p>";
			}	else if (!preg_match("/^\d{4}$/",$ptcd))	{
				$errMsg .= "<p id='semp'>It must be a valid postcode.</p>";
			}
			
			if ($st=="none")	{
				$errMsg .= "<p id='semp'>You must select your state.</p>";
			} 
		
			if ($request=="none")	{
				$errMsg .= "<p id='semp'>You must select the request.</p>";
			}
			
			if ($quantity=="")	{
				$errMsg .= "<p id='semp'>You must enter the number of orders.</p>";
			}	else if (!preg_match("/^[0-9]+$/",$quantity))	{
				$errMsg .= "<p id='semp'>It must be an integer.</p>";
			}	
						
			if ($cardname=="")	{
				$errMsg .= "<p id='semp'>You must enter a card name.</p>";
			}	else if (!preg_match("/^[A-Za-z ]{1,40}$/",$cardname))	{
				$errMsg .= "<p id='semp'>It must be a valid card name.</p>";
			}
			
			if ($cardnum=="")	{
				$errMsg .= "<p id='semp'>You must enter the card number.</p>";
			}
			
			if ($expiry=="")	{
				$errMsg .= "<p id='semp'>You must enter a card expiry date.</p>";
			}	else if (!preg_match("/^(0[1-9]|1[0-2])\-{1}([0-9]{2})$/",$expiry))	{
				$errMsg .= "<p id='semp'>your card expiry date must be 4 digits including '-' between MM and YY.</p>";
			}
			
			if ($cvv=="")	{
				$errMsg .= "<p id='semp'>You must enter the cvv.</p>";
			}	else if (!preg_match("/^[0-9]{3}$/",$cvv))	{
				$errMsg .= "<p id='semp'>Your cvv must be 3 digits.</p>";
			}
			
			if ($credit=="none")	{
				$errMsg .= "<p id='semp'>You must select a credit card type.</p>";
			}	
			
			//state & postcode check			
			if ($st=="vic")	{
				if ($ptcd[0]!="3" and ($ptcd[0])!="8")	{
					$errMsg .= "<p id='semp'>Postcode of VIC starts with 3 or 8.</p>";
				}
			}
			if ($st=="nsw")	{
				if ($ptcd[0]!="1" and ($ptcd[0])!="2")	{
					$errMsg .= "<p id='semp'>Postcode of NSW starts with 1 or 2.</p>";
				}
			}
			if ($st=="qld")	{
				if ($ptcd[0]!="4" and ($ptcd[0])!="9")	{
					$errMsg .= "<p id='semp'>Postcode of QLD starts with 4 or 9.</p>";
				}
			}
			if ($st=="nt")	{
				if ($ptcd[0]!="0")	{
					$errMsg .= "<p id='semp'>Postcode of NT starts with 0.</p>";
				}
			}
			if ($st=="wa")	{
				if ($ptcd[0]!="6")	{
					$errMsg .= "<p id='semp'>Postcode of WA starts with 6.</p>";
				}
			}
			if ($st=="sa")	{
				if ($ptcd[0]!="5")	{
					$errMsg .= "<p id='semp'>Postcode of SA starts with 5.</p>";
				}
			}
			if ($st=="tas")	{
				if ($ptcd[0]!="7")	{
					$errMsg .= "<p id='semp'>Postcode of TAS starts with 7.</p>";
				}
			}
			if ($st=="act")	{
				if ($ptcd[0]!="0")	{
					$errMsg .= "<p id='semp'>Postcode of ACT starts with 0.</p>";
				}
			}
			
			//credit & cardnum check
			if ($credit=="visa")	{
				if (!preg_match("/^4[0-9]{12}(?:[0-9]{3})?$/",$cardnum))	{
					$errMsg .= "<p id='semp'>Visa Card number has 16 digits starting with 4</p>";
				}
			}
			if ($credit=="mastercard")	{
				if (!preg_match("/^(?:5[1-5][0-9]{14})$/",$cardnum))	{
					$errMsg .= "<p id='semp'>Mastercard Card number has 16 digits starting with 51 to 55</p>";
				}
			}
			if ($credit=="american_express")	{
				if (!preg_match("/^(?:3[47][0-9]{13})$/",$cardnum))	{
					$errMsg .= "<p id='semp'>American Express Card number has 15 digits starting with 34 or 37</p>";
				}
			}
			
			
		?>
			<h2 id="h2b">Fix Your Order</h2>
			
			<form method="post" action="process_order.php" id="regform" novalidate="novalidate" >
			<?php
				if ($errMsg !="")	{
					echo "<p id='semp'>Fix your Order <br/>Fill out the form below again (Booking fee is $5)</p>
					<fieldset id='toptoptop'><legend>Errors</legend>$errMsg</fieldset>";
				} else {
					echo "<p> errors are $errMsg</p>";
					$_SESSION[$errMsg] = $errMsg;
				}
			?>
			<fieldset class="left">
				<legend>Personal Details</legend>			
					<p><label for="first_name">First Name:  </label>
						<input type="text" name= "first_name" id="first_name" maxlength="25" pattern="[A-Za-z]{1,25}" size="10" required="required"  
						value="<?php echo $firstname ?>" 
						<?php if (!preg_match("/^[A-Za-z]{1,25}$/",$firstname)) { echo "style='background-color: pink;'"; }?>
						/>
					</p>
					<p><label for="last_name">Last Name:  </label>
						<input type="text" name= "last_name" id="last_name" maxlength="25" pattern="[A-Za-z]{1,25}" size="10" required="required" 
						value="<?php echo $lastname ?>" 
						<?php if (!preg_match("/^[A-Za-z]{1,25}$/",$lastname)) { echo "style='background-color: pink;'"; }?>
						/>
					</p>					
			</fieldset>	 
			<fieldset class="right">
			<legend>Preferred Date/Time</legend>
			<p><label for="date">Date</label>
				<input type="date" name= "date" id="date" size="10" required="required" 
				value="<?php echo $date ?>" 
				<?php if ($date=="")	{ echo "style='background-color: pink;'"; }?>/>
			</p>
			<p><label for="time">Time</label>
				<input type="text" name= "time" id="time" placeholder="00:00" pattern="(?:[01]|2(?![4-9])){1}\d{1}:[0-5]{1}\d{1}" maxlength="5" size="10" required="required" 
				value="<?php echo $time ?>" 
				<?php if (!preg_match("/^(?:[01]|2(?![4-9])){1}\d{1}:[0-5]{1}\d{1}$/",$time)) { echo "style='background-color: pink;'"; }?>
				/>
			</p>
			</fieldset>
			<fieldset id="bottomtop">
				<legend>Contact information</legend>	
					<p><label for="emailadd">Email Address:  </label>
						<input type="email" name= "emailadd" id="emailadd" required="required" 
						value="<?php echo $emailadd ?>" 
						<?php if (!preg_match("/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/",$emailadd)) { echo "style='background-color: pink;'"; }?>
						/>
					</p>
					<p><label for="pnum">Phone Number:  </label>
						<input type="text" name= "pnum" id="pnum" placeholder="No spaces" maxlength="10" size="20" pattern="^\({0,1}((0|\+61)(2|4|3|7|8)){0,1}\){0,1}( |-){0,1}[0-9]{2}( |-){0,1}[0-9]{2}( |-){0,1}[0-9]{1}( |-){0,1}[0-9]{3}$" required="required" 
						value="<?php echo $pnum ?>" 
						<?php if (!preg_match("/^\({0,1}((0|\+61)(2|4|3|7|8)){0,1}\){0,1}( |-){0,1}[0-9]{2}( |-){0,1}[0-9]{2}( |-){0,1}[0-9]{1}( |-){0,1}[0-9]{3}$/",$pnum)) { echo "style='background-color: pink;'"; }?>/>
					</p>
					<p><label for="sa">Street Address:  </label>
						<input type="text" name="sa" id="sa" maxlength="40" pattern="[a-zA-Z0-9 ]{1,40}" size="20" required="required" 
						value="<?php echo $sa ?>" 
						<?php if (!preg_match("/^[a-zA-Z0-9 ]{1,40}$/",$sa)) { echo "style='background-color: pink;'"; }?>
						/>
					</p>
					<p><label for="sut">Suburb / Town:  </label>
						<input type="text" name="sut" id="sut" maxlength="20" pattern="[A-Za-z ]{1,20}" size="20" required="required" 
						value="<?php echo $sut ?>" 
						<?php if (!preg_match("/^[A-Za-z ]{1,20}$/",$sut)) { echo "style='background-color: pink;'"; }?>/>
					</p>
					<p><label for="ptcd">Post Code:  </label>
					<input type="text" name="ptcd" id="ptcd" maxlength="4" pattern="\d{4}" size="5" required="required" 
					value="<?php echo $ptcd ?>" 
					<?php if (!preg_match("/^\d{4}$/",$ptcd)) { echo "style='background-color: pink;'"; }?>
					/>
					</p>
					<p><label for="st">State:  </label>	
						<select name="st" id="st" <?php if ($st=="none") { echo "style='background-color: pink;'"; }?>>
							<option value="none" <?php if ($st=="none"){echo "SELECTED";}?> > Please Select</option>
							<option value="vic" <?php if ($st=="vic"){echo "SELECTED";}?> > VIC</option>
							<option value="nsw" <?php if ($st=="nsw"){echo "SELECTED";}?> > NSW</option>			
							<option value="qld" <?php if ($st=="qld"){echo "SELECTED";}?> > QLD</option>
							<option value="nt" <?php if ($st=="nt"){echo "SELECTED";}?> > NT</option>
							<option value="wa" <?php if ($st=="wa"){echo "SELECTED";}?> > WA</option>
							<option value="sa" <?php if ($st=="sa"){echo "SELECTED";}?> > SA</option>
							<option value="tas" <?php if ($st=="tas"){echo "SELECTED";}?> > TAS</option>
							<option value="act" <?php if ($st=="act"){echo "SELECTED";}?> > ACT</option>
						</select>
					</p>
					<p>Preferred contact: 
						<label for="pc1">Email</label>
						<input type="radio" name= "pc" id="pc1" value="Email" required="required" <?php if ($prefer=="Email"){echo "CHECKED";}?>/>
						<label for="pc2">Mail</label>
						<input type="radio" name= "pc" id="pc2" value="Mail" required="required" <?php if ($prefer=="Mail"){echo "CHECKED";}?>/>	
						<label for="pc3">Phone</label>
						<input type="radio" name= "pc" id="pc3" value="Phone" required="required" <?php if ($prefer=="Phone"){echo "CHECKED";}?>/>
					</p>					
			</fieldset>	
			<fieldset id="bottom">
			<legend>Special Requests</legend>
				<p>
				<label for="request">Request Options: </label>
					<select id="request" name="request" <?php if ($request=="none") { echo "style='background-color: pink;'"; }?>>
						<option value="none" <?php if ($request=="none"){echo "SELECTED";}?> > Please Select</option>
						<option value="only_table" <?php if ($request=="only_table"){echo "SELECTED";}?> > None</option>
						<option value="happybirthday_package" <?php if ($request=="happybirthday_package"){echo "SELECTED";}?> > $49 HappyBirthday Package (One HappyBirthday Cake, One House Wine with Music)</option>
						<option value="anniversary_package" <?php if ($request=="anniversary_package"){echo "SELECTED";}?> > $39 Anniversary Package  (One Heart Cake, One Champagne)</option>
						<option value="special_package" <?php if ($request=="special_package"){echo "SELECTED";}?> > $59 Speical Package  (One Cake with Requested Words and Decorating on top)</option>
						<option value="wouldyoumarryme_package" <?php if ($request=="wouldyoumarryme_package"){echo "SELECTED";}?> > $99 WouldYouMarryMe Package (One Special Cake, Two Special Drinks)</option>
					</select>
				</p>
				<p><label for="quantity">Number of Orders(Tables):  </label>
					<input type="text" id="quantity" name="quantity" maxlength="3" required="required" pattern="[0-9]+" 
					value="<?php echo $quantity ?>" 
					<?php if (!preg_match("/^[0-9]+$/",$quantity)) { echo "style='background-color: pink;'"; }?> 
					<?php if ($quantity=="")	{echo "style='background-color: pink;'"; }?>>
				</p><label for="doi">Further Requests:  </label>
				<p><textarea id="doi" name="doi" rows="4" cols="40" placeholder="Leave your further requests here..."><?php echo $doi ?></textarea>
				</p>
			</fieldset>
			<fieldset>
				<legend>Payment</legend>
					<p><label for="credit">Credit Card Type: </label>
						<select id="credit" name="credit" <?php if ($credit=="none") { echo "style='background-color: pink;'"; }?>>
							<option value="none">Please Select</option>
							<option value="visa">Visa</option>
							<option value="mastercard">Mastercard</option>
							<option value="american_express">American Express</option>
						</select>
					</p>
					<p><label for="cardname">Name on Credit Card: </label>
						<input type="text" id="cardname" name="cardname" pattern="[A-Za-z ]{1,40}" maxlength="40" 
						<?php if (!preg_match("/^[A-Za-z ]{1,40}$/",$cardname)) { echo "style='background-color: pink;'"; }?>
						/>
					</p>
					<p><label for="cardnum">Credit Card Number: </label>
						<input type="text" id="cardnum" name="cardnum" pattern="[0-9]{15,16}" maxlength="16"
						<?php if (!preg_match("/^[0-9]{15,16}$/",$cardnum)) { echo "style='background-color: pink;'"; }?>
						/>
					</p>
					<p><label for="expiry">Expiry Date: </label>
						<input type="text" id="expiry" name="expiry" pattern="(0[1-9]|1[0-2])\-{1}([0-9]{2})" maxlength="5" placeholder="MM-YY" 
						<?php if (!preg_match("/^(0[1-9]|1[0-2])\-{1}([0-9]{2})$/",$expiry)) { echo "style='background-color: pink;'"; }?>
						/>
					</p>
					<p><label for="cvv">Card Verification Value(CVV): </label>
						<input type="text" id="cvv" name="cvv" pattern="[0-9]{3}" maxlength="3" 
						<?php if (!preg_match("/^[0-9]{3}$/",$cardname)) { echo "style='background-color: pink;'"; }?>
						/>
					</p>
			</fieldset>	
				
			<input type= "submit" value="Pay Now" class="buttons"/>
			<p id="semp"><a href="fix_order.php?restart">Cancel</a></p>
			<span id="dddd"></span>
			</fieldset>						
			</form>	
		
		
		</div>
		<?php include "footer.inc"; ?>
	</article>
</body>
</html>