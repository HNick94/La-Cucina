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
			<h2 id="h2b">Manager Log-in</h2>
			<p id="semp">Sign in!</p> 		
			<form method="post" action="login.php">			
				<fieldset id='receipttop'>
					<legend>Member Log-in</legend>
						<p>	<label for="memId">Member ID: </label>
							<input type="text" name="memId" id="memId" value="1"/></p>
						<p>	<label for="lastname">Password: </label>
							<input type="text" name="lastname" id="lastname" placeholder="Your password is your last name...(password is Kim)"/></p>
						<p>	<input type="submit" value="Log In" /></p>				
				</fieldset>	
			<?php
				
				if (isset($_POST["lastname"]) && isset($_POST["memId"])){
					$lname	= trim($_POST["lastname"]);
					$memId	= trim($_POST["memId"]);
					
					if ((!$lname=="") && (!$memId=="")){
						 require_once('settings.php');
					
					
						$conn = @mysqli_connect($host,
							$user,
							$pwd,
							$sql_db
						);
					  
						if (!$conn) {
							echo "<p class=\"wrong\">Database connection failure</p>"; 
						} else {
							$sql_table="vipmembers";
						
							$query = "select member_id, lname from $sql_table where member_id = $memId and lname= '$lname' order by lname";
								
							$result = mysqli_query($conn, $query);
							if(!$result) {
								echo "<p class=\"wrong\">Something is wrong with ",	$query, "</p>";
							} else {
								while ($row = mysqli_fetch_assoc($result)){
									if (($row["lname"])==$lname)	{	
										header ("location: manage.php");
									}
								}	
							
								
							mysqli_free_result($result);
							
							}
							mysqli_close($conn);
						} 
					}
				}
			?>	
				
				
				
				
				
				
				
				
				
				
		</div>
		<?php include "footer.inc"; ?>
	</article>
</body>
</html>