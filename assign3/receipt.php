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
  <meta name="description" content="Assignment Part 3 Receipt page" />
  <meta name="keywords" content="HTML5, CSS, JavaScript, PHP, SQL" />
  <meta name="author" content="Nick Kim"  />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title> La Cucina della Nonna - Receipt </title>
  
  <!-- References to external fonts -->
  <link href='styles/fonts' rel='stylesheet'/>
  <!-- References to external CSS files --> 
  <link href= "styles/style.css" rel="stylesheet"/>
  <link href= "styles/style_responsive.css" rel="stylesheet" media="screen and (max-width: 1024px)" />
  <link href= "styles/style_responsive.css" rel="stylesheet" media="screen and (max-width: 568px)" />
</head>

<body id="bodyb">
	<article>
		<div id="heading">
			<?php include "header.inc"; ?>	
			<?php include "menu.inc"; ?>
		</div>	
		<div id="enquiry">
			<h2 id="h2b">Booking Receipt</h2>
			<p id="semp">Thanks For Booking! <br/>Your Order Is Successfully Placed. Check Your Receipt!</p> 		
		
			<fieldset id="receipttop">
				<legend>Receipt</legend>
				
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
					$cost = $_SESSION["cost"];			
				
				?>
				<p id="receiptsemp">First Name : <?php echo "$firstname"; ?></p>
				<p id="receiptsemp">Last Name : <?php echo "$lastname"; ?></p>
				<p id="receiptsemp">Date : <?php echo "$date"; ?></p>
				<p id="receiptsemp">Time : <?php echo "$time"; ?></p>
				<p id="receiptsemp">Email Address : <?php echo "$emailadd"; ?></p>
				<p id="receiptsemp">Phone Number : <?php echo "$pnum"; ?></p>
				<p id="receiptsemp">Street Address : <?php echo "$sa"; ?></p>
				<p id="receiptsemp">Suburb/Town : <?php echo "$sut"; ?></p>
				<p id="receiptsemp">Postcode : <?php echo "$ptcd"; ?></p>
				<p id="receiptsemp">State : <?php echo "$st"; ?></p>
				<p id="receiptsemp">Type of Request : <?php echo "$request"; ?></p>
				<p id="receiptsemp">Number of Orders : <?php echo "$quantity"; ?></p>
				<p id="receiptsemp">Contact Preference : <?php echo "$prefer"; ?></p>
				<p id="receiptsemp">Further Request : <?php echo "$doi"; ?></p>
				<p id="receiptsemp">Credit Card Type : <?php echo "$credit"; ?></p>
				<p id="receiptsemp">Card Name : <?php $result = substr($cardname,0,3); echo "$result"; ?>*** ******</p>
				<p id="receiptsemp">Card Number : <?php $result = substr($cardnum,0,4); echo "$result"; ?> **** **** ****</p>
				<p id="receiptsemp">Expiry Date : <?php $result = substr($expiry,0,2);  echo "$result";?>-**</p>
				<p id="receiptsemp">CVV : <?php $result = substr($cvv,0,0);  echo "$result"; ?>***</p>
				<?php
					function calcCost ($request, $quantity)	{
						$cost = 0;
						if ($request == "only_table")	{	$cost = 0;	}
						if ($request == "happybirthday_package")	{	$cost = 49;	}
						if ($request == "anniversary_package")	{	$cost = 39;	}
						if ($request == "special_package")	{	$cost = 59;	}
						if ($request == "wouldyoumarryme_package")	{	$cost = 99;	}
						
						return $cost * $quantity + 5;
					}
					$cost = calcCost($request, $quantity);
				?>
				<p id="receiptsemp">Total Cost : <?php echo "$cost"; ?></p>

				
			</fieldset>	
		
			<p id="semp"><a href="receipt.php?restart">Finish Order</a></p>	
		</div>
		<?php include "footer.inc"; ?>
	</article>
</body>
</html>