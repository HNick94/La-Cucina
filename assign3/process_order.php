		<?php
		session_start ();
			if (isset	($_POST["first_name"]))	{
				$firstname = $_POST["first_name"];
				$_SESSION["first_name"] = $firstname;
			//	echo "<p>This is a if test: fname is $firstname</p>";
			}	else {
				header ("location: index.php");
			}
			
			if (($_POST["last_name"])!= "")		{
				$lastname = $_POST["last_name"];
				$_SESSION["last_name"] = $lastname;
			}
			
			if (($_POST["date"])!= "")		{
				$date = $_POST["date"];
				$_SESSION["date"] = $date;
			}
			
			if (($_POST["time"])!= "")		{
				$time = $_POST["time"];
				$_SESSION["time"] = $time;
			}
			
			if (($_POST["emailadd"])!= "")		{
				$emailadd = $_POST["emailadd"];
				$_SESSION["emailadd"] = $emailadd;
			}
			
			if (($_POST["pnum"])!= "")		{
				$pnum = $_POST["pnum"];
				$_SESSION["pnum"] = $pnum;
			}
			
			if (($_POST["doi"])!= "")	{
				$doi = $_POST["doi"];
				$_SESSION["doi"] = $doi;
			//	echo "<p>This is a if test: doi is $doi</p>";
			}	else {
				$doi = "None";
				$_SESSION["doi"] = $doi;
			//	echo "<p>This is a else test: doi is $doi</p>";
			}
			
			if (($_POST["sa"])!= "")		{
				$sa = $_POST["sa"];
				$_SESSION["sa"] = $sa;
			}
			
			if (($_POST["sut"])!= "")		{
				$sut = $_POST["sut"];
				$_SESSION["sut"] = $sut;
			}
			
			if (($_POST["ptcd"])!= "")		{
				$ptcd = $_POST["ptcd"];
				$_SESSION["ptcd"] = $ptcd;
			}
			
			if (($_POST["st"])!= "")		{
				$st = $_POST["st"];
				$_SESSION["st"] = $st;
			}
			
			if (isset ($_POST["pc"]))	{
				$prefer = $_POST["pc"];
				$_SESSION["pc"] = $prefer;
			}
			
			if (($_POST["request"])!= "")		{
				$request = $_POST["request"];
				$_SESSION["request"] = $request;
			}
			
			if (($_POST["quantity"])!= "")		{
				$quantity = $_POST["quantity"];
				$_SESSION["quantity"] = $quantity;
			}
			
			if (($_POST["cardname"])!= "")		{
				$cardname = $_POST["cardname"];
				$_SESSION["cardname"] = $cardname;
			}
			
			if (($_POST["cardnum"])!= "")		{
				$cardnum = $_POST["cardnum"];
				$_SESSION["cardnum"] = $cardnum;
			}
			
			if (($_POST["expiry"])!= "")		{
				$expiry = $_POST["expiry"];
				$_SESSION["expiry"] = $expiry;
			}
			
			if (($_POST["cvv"])!= "")		{
				$cvv = $_POST["cvv"];
				$_SESSION["cvv"] = $cvv;
			}
			
			if (($_POST["credit"])!= "")		{
				$credit = $_POST["credit"];
				$_SESSION["credit"] = $credit;
			}
			
			//calcCost
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
			$_SESSION[$cost] = $cost;
			
			//Sanitisation
			function sanitise_input($data)	{
				$data = trim($data);				
				$data = stripslashes($data);	
				$data = htmlspecialchars($data);	
				return $data;
			}

			$firstname = sanitise_input($firstname);
			$lastname = sanitise_input($lastname);
			$date = sanitise_input($date);
			$time = sanitise_input($time);
			$emailadd = sanitise_input($emailadd);
			$pnum = sanitise_input($pnum);
			$doi = sanitise_input($doi);
			$sa = sanitise_input($sa);
			$sut = sanitise_input($sut);
			$ptcd = sanitise_input($ptcd);
			$st = sanitise_input($st);
			$request = sanitise_input($request);
			$quantity = sanitise_input($quantity);
			$cost = sanitise_input($cost);
			$cardname = sanitise_input($cardname);
			$cardnum = sanitise_input($cardnum);
			$expiry = sanitise_input($expiry);
			$cvv = sanitise_input($cvv);
			$prefer = sanitise_input($prefer);
			$credit = sanitise_input($credit);
			
		
			//Validation
			$errMsg = "";
			if ($firstname=="")	{
				$errMsg .= "<p>You must enter your first name.</p>";
			}	else if (!preg_match("/^[A-Za-z]{1,25}$/",$firstname))	{
				$errMsg .= "<p>Only alpha letters are allowed in your first name.</p>";
			}
			
			if ($lastname=="")	{
				$errMsg .= "<p>You must enter your last name.</p>";
			}	else if (!preg_match("/^[A-Za-z]{1,25}$/",$lastname))	{
				$errMsg .= "<p>Only alpha letters are allowed in your last name.</p>";
			}
			
			if ($date=="")	{
				$errMsg .= "<p>You must select a date.</p>";
			}	
			
			if ($time=="")	{
				$errMsg .= "<p>You must enter a time.</p>";
			}	else if (!preg_match("/^(?:[01]|2(?![4-9])){1}\d{1}:[0-5]{1}\d{1}$/",$time))	{
				$errMsg .= "<p>It must be 4 digits including a colon.</p>";
			}
			
			if ($emailadd=="")	{
				$errMsg .= "<p>You must enter your email address.</p>";
			}	else if (!preg_match("/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/",$emailadd))	{
				$errMsg .= "<p>It must be a valid email address.</p>";
			}
			
			if ($pnum=="")	{
				$errMsg .= "<p>You must enter your phone number.</p>";
			}	else if (!preg_match("/^\({0,1}((0|\+61)(2|4|3|7|8)){0,1}\){0,1}( |-){0,1}[0-9]{2}( |-){0,1}[0-9]{2}( |-){0,1}[0-9]{1}( |-){0,1}[0-9]{3}$/",$pnum))	{
				$errMsg .= "<p>It must be a valid australian phone number.</p>";
			}
			
			if ($sa=="")	{
				$errMsg .= "<p>You must enter your street address.</p>";
			}	else if (!preg_match("/^[a-zA-Z0-9 ]{1,40}$/",$sa))	{
				$errMsg .= "<p>It must be a valid street address.</p>";
			}
			
			if ($sut=="")	{
				$errMsg .= "<p>You must enter your suburb/town.</p>";
			}	else if (!preg_match("/^[A-Za-z ]{1,20}$/",$sut))	{
				$errMsg .= "<p>It must be a valid suburb/town.</p>";
			}
			
			if ($ptcd=="")	{
				$errMsg .= "<p>You must enter your postcode.</p>";
			}	else if (!preg_match("/^\d{4}$/",$ptcd))	{
				$errMsg .= "<p>It must be a valid postcode.</p>";
			}
			
			if ($st=="none")	{
				$errMsg .= "<p>You must select your state.</p>";
			} 
		
			if ($request=="none")	{
				$errMsg .= "<p>You must select the request.</p>";
			}
			
			if ($quantity=="")	{
				$errMsg .= "<p>You must enter the number of orders.</p>";
			}	else if (!preg_match("/^[0-9]+$/",$quantity))	{
				$errMsg .= "<p>It must be an integer.</p>";
			}	
			
			if ($cardname=="")	{
				$errMsg .= "<p>You must enter a card name.</p>";
			}	else if (!preg_match("/^[A-Za-z ]{1,40}$/",$cardname))	{
				$errMsg .= "<p>It must be a valid card name.</p>";
			}
			
			if ($cardnum=="")	{
				$errMsg .= "<p>You must enter the card number.</p>";
			}
			
			if ($expiry=="")	{
				$errMsg .= "<p>You must enter a card expiry date.</p>";
			}	else if (!preg_match("/^(0[1-9]|1[0-2])\-{1}([0-9]{2})$/",$expiry))	{
				$errMsg .= "<p>your card expiry date must be 4 digits including '-' between MM and YY.</p>";
			}
			
			if ($cvv=="")	{
				$errMsg .= "<p>You must enter the cvv.</p>";
			}	else if (!preg_match("/^[0-9]{3}$/",$cvv))	{
				$errMsg .= "<p>Your cvv must be 3 digits.</p>";
			}
			
			if ($credit=="none")	{
				$errMsg .= "<p>You must select a credit card type.</p>";
			}	
			
			//state & postcode check			
			if ($st=="vic")	{
				if ($ptcd[0]!="3" and ($ptcd[0])!="8")	{
					$errMsg .= "<p>Postcode of VIC starts with 3 or 8.</p>";
				}
			}
			if ($st=="nsw")	{
				if ($ptcd[0]!="1" and ($ptcd[0])!="2")	{
					$errMsg .= "<p>Postcode of NSW starts with 1 or 2.</p>";
				}
			}
			if ($st=="qld")	{
				if ($ptcd[0]!="4" and ($ptcd[0])!="9")	{
					$errMsg .= "<p>Postcode of QLD starts with 4 or 9.</p>";
				}
			}
			if ($st=="nt")	{
				if ($ptcd[0]!="0")	{
					$errMsg .= "<p>Postcode of NT starts with 0.</p>";
				}
			}
			if ($st=="wa")	{
				if ($ptcd[0]!="6")	{
					$errMsg .= "<p>Postcode of WA starts with 6.</p>";
				}
			}
			if ($st=="sa")	{
				if ($ptcd[0]!="5")	{
					$errMsg .= "<p>Postcode of SA starts with 5.</p>";
				}
			}
			if ($st=="tas")	{
				if ($ptcd[0]!="7")	{
					$errMsg .= "<p>Postcode of TAS starts with 7.</p>";
				}
			}
			if ($st=="act")	{
				if ($ptcd[0]!="0")	{
					$errMsg .= "<p>Postcode of ACT starts with 0.</p>";
				}
			}
			
			//credit & cardnum check
			if ($credit=="visa")	{
				if (!preg_match("/^4[0-9]{12}(?:[0-9]{3})?$/",$cardnum))	{
					$errMsg .= "<p>Visa Card number has 16 digits starting with 4</p>";
				}
			}
			if ($credit=="mastercard")	{
				if (!preg_match("/^(?:5[1-5][0-9]{14})$/",$cardnum))	{
					$errMsg .= "<p>Mastercard Card number has 16 digits starting with 51 to 55</p>";
				}
			}
			if ($credit=="american_express")	{
				if (!preg_match("/^(?:3[47][0-9]{13})$/",$cardnum))	{
					$errMsg .= "<p>American Express Card number has 15 digits starting with 34 or 37</p>";
				}
			}
						
			if ($errMsg !="")	{
				header ("location: fix_order.php");
			} else {
				require_once('settings.php');
				$conn = @mysqli_connect($host,
					$user,
					$pwd,
					$sql_db
				);
				if (!$conn) {
					echo "<p>Database connection failure</p>";
				} else {
					//MYSQL
					$sql_table="orders";	
					$fieldDefinition="order_id INT AUTO_INCREMENT PRIMARY KEY, order_cost INT, order_time timestamp default current_timestamp, order_status enum('PENDING', 'FULFILLED', 'PAID', 'ARCHIVED') default 'PENDING', fname varchar(40), lname varchar(40), date varchar(40), time varchar(20), emailadd varchar(50), pnum varchar(20), staddr varchar(50), suburb varchar(40), postcode int(4), state varchar(10), requesttype varchar(40), quantity int(11), furreq varchar(60), preference varchar(10), credittype varchar(20), cardname varchar(60), cardnum varchar(20), expirydate varchar(10), cvv int(3)";	
					
					$sqlString = "show tables like '$sql_table'";	
					$result = @mysqli_query($conn, $sqlString);	
					if(mysqli_num_rows($result)==0) {	
						echo "<p>Table does not exist - create table $sql_table</p>";
						$sqlString = "create table " . $sql_table . "(" . $fieldDefinition . ")";; 
						$result2 = @mysqli_query($conn, $sqlString);
						if($result2===false) {
							echo "<p class=\"wrong\">Unable to create Table $sql_table.". mysqli_errno($conn) . ":". mysqli_error($conn) ." </p>"; 
						} else {
							echo "<p class=\"ok\">Table $sql_table created OK</p>";
						}
					} else {	
						echo "<p>Table  $sql_table already exists</p>";
					}
					
					$query = "insert into $sql_table"
								."(fname, lname, date, time, emailadd, pnum, staddr, suburb, postcode, state, requesttype, quantity, furreq, preference, credittype, cardname, cardnum, expirydate, cvv, order_cost)"
							. " values "
								."('$firstname', '$lastname', '$date', '$time', '$emailadd', '$pnum', '$sa', '$sut', '$ptcd', '$st', '$request', '$quantity', '$doi', '$prefer', '$credit', '$cardname', '$cardnum', '$expiry', '$cvv', '$cost')";
					
					$result = mysqli_query($conn, $query);
					if(!$result) {
						echo "<p class=\"wrong\">Something is wrong with ",	$query, "</p>";
					} else {
						echo "<p class=\"ok\">Successfully added Data</p>";
						header ("location: receipt.php");
					}
					
					mysqli_close($conn);
					
				}
				
			}
			
			
				
				
				
				
		?>