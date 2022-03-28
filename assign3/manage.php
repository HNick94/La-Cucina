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
			<h2 id="h2b">Management</h2>
			<p id="semp">Manage your Data</p>
			<form action="manage.php" method="POST">
			<fieldset id="enhance" class='receipttop'>
				<legend>Display All Orders</legend>
					<p>	<input type='submit' name='submit1' value='Show Orders(All)' />
						<input type='submit' name='submit2' value='Show Orders(Pending)' />
						<input type='submit' name='submit3' value='Show Orders(Total Costs)' /></p>
						<input type='submit' name='enh_submit1' value='Show AVG Number of Orders per Day' />
						<input type='submit' name='enh_submit2' value='Show The Most Popular Product' />
			</fieldset>
			<fieldset class='receipttop'>
				<legend>Display Orders by Customer Name</legend>
					<p>	<label for="first_name">First Name: </label>
						<input type="text" name="first_name" id="first_name" /></p>
					<p>	<label for="last_name">Last Name: </label>
						<input type="text" name="last_name" id="last_name" /></p>
					<p>	<input type='submit' name='submit4' value='Show Orders' /></p>
			</fieldset>
			<fieldset class='receipttop'>
				<legend>Display Orders by Product</legend>
					<p>	<label for="request">Product: </label>						
						<input type="text" name="request" id="request" /></p>
					<p>	<input type='submit' name='submit5' value='Show Orders' /></p>
			</fieldset>
			<fieldset class='receipttop'>
				<legend>Update Orders Status</legend>
					<p>	<label for="id">Customer ID: </label>
						<input type="text" name="id" id="id" /></p>
					<p>	<label for="status">Status: (type number 1 to 4)</label>
						<input type="text" name="status" id="status" placeholder="1=PENDING, 2=FULFILLED, 3=PAID, 4=ARCHIVED"/></p>
					<p>	<input type='submit' name='submit6' value='Update Status'/></p>
			</fieldset>
			<fieldset class='receipttop'>
				<legend>Cancel Orders</legend>
					<p>	<label for="cid">Customer ID: </label>
						<input type="text" name="cid" id="cid" placeholder="You can only cancel pending orders"/></p>
					<p>	<input type='submit' name='submit7' value='Cancel Order'/></p>
			</fieldset>
			<fieldset class='receipttop'>
			</form>
				<legend>Result</legend>
			<?php
			
				//Show Orders(All)
				if(isset($_POST['submit1']))	{
					require_once('settings.php');
					$conn = @mysqli_connect($host,
						$user,
						$pwd,
						$sql_db
					);
					if (!$conn) {
						echo "<p>Database connection failure</p>";
					} else {
						$sql_table="orders";	
						
						$query = "select order_id, fname, lname, requesttype, order_cost, date, time, order_status  
									from $sql_table order by order_id ASC";
						$result = mysqli_query($conn, $query);
						if(!$result) {
							echo "<p>Something is wrong with ",	$query, "</p>";
						} else {
							echo "<table border=\"1\">";
							echo "<tr>\n"
								 ."<th scope=\"col\">ORDER ID</th>\n"
								 ."<th scope=\"col\">First Name</th>\n"
								 ."<th scope=\"col\">Last Name</th>\n"
								 ."<th scope=\"col\">Request Type</th>\n"
								 ."<th scope=\"col\">Total Cost</th>\n"
								 ."<th scope=\"col\">Order Date</th>\n"
								 ."<th scope=\"col\">Order Time</th>\n"
								 ."<th scope=\"col\">Order Status</th>\n"
								 ."</tr>\n";
							while ($row = mysqli_fetch_assoc($result)){
								echo "<tr>";
								echo "<td>",$row["order_id"],"</td>";
								echo "<td>",$row["fname"],"</td>";  
								echo "<td>",$row["lname"],"</td>";
								echo "<td>",$row["requesttype"],"</td>";
								echo "<td>",$row["order_cost"],"</td>";
								echo "<td>",$row["date"],"</td>";
								echo "<td>",$row["time"],"</td>";
								echo "<td>",$row["order_status"],"</td>";
								echo "</tr>";
							}
							echo "</table>";
							mysqli_free_result($result);
						}
						mysqli_close($conn);
					}
				}
				
				
				//Show Orders(Pending)
				if(isset($_POST['submit2']))	{
					require_once('settings.php');
					$conn = @mysqli_connect($host,
						$user,
						$pwd,
						$sql_db
					);
					if (!$conn) {
						echo "<p>Database connection failure</p>";
					} else {
						$sql_table="orders";	
						
						$query = "select order_id, fname, lname, requesttype, order_cost, date, time, order_status  
									from $sql_table WHERE order_status = 'PENDING' order by order_id ASC";
						$result = mysqli_query($conn, $query);
						if(!$result) {
							echo "<p>Something is wrong with ",	$query, "</p>";
						} else {
							echo "<table border=\"1\">";
							echo "<tr>\n"
								 ."<th scope=\"col\">ORDER ID</th>\n"
								 ."<th scope=\"col\">First Name</th>\n"
								 ."<th scope=\"col\">Last Name</th>\n"
								 ."<th scope=\"col\">Request Type</th>\n"
								 ."<th scope=\"col\">Total Cost</th>\n"
								 ."<th scope=\"col\">Order Date</th>\n"
								 ."<th scope=\"col\">Order Time</th>\n"
								 ."<th scope=\"col\">Order Status</th>\n"
								 ."</tr>\n";
							while ($row = mysqli_fetch_assoc($result)){
								echo "<tr>";
								echo "<td>",$row["order_id"],"</td>";
								echo "<td>",$row["fname"],"</td>";  
								echo "<td>",$row["lname"],"</td>";
								echo "<td>",$row["requesttype"],"</td>";
								echo "<td>",$row["order_cost"],"</td>";
								echo "<td>",$row["date"],"</td>";
								echo "<td>",$row["time"],"</td>";
								echo "<td>",$row["order_status"],"</td>";
								echo "</tr>";
							}
							echo "</table>";
							mysqli_free_result($result);
						}
						mysqli_close($conn);
					}
				}
				
				//Show Orders(Sorted By Total Costs)
				if(isset($_POST['submit3']))	{
					require_once('settings.php');
					$conn = @mysqli_connect($host,
						$user,
						$pwd,
						$sql_db
					);
					if (!$conn) {
						echo "<p>Database connection failure</p>";
					} else {
						$sql_table="orders";	
						
						$query = "select order_cost, order_id, fname, lname, requesttype, date, time, order_status  
									from $sql_table order by order_cost DESC";
						$result = mysqli_query($conn, $query);
						if(!$result) {
							echo "<p>Something is wrong with ",	$query, "</p>";
						} else {
							echo "<table border=\"1\">";
							echo "<tr>\n"
								 ."<th scope=\"col\">Total Cost</th>\n"
								 ."<th scope=\"col\">ORDER ID</th>\n"
								 ."<th scope=\"col\">First Name</th>\n"
								 ."<th scope=\"col\">Last Name</th>\n"
								 ."<th scope=\"col\">Request Type</th>\n"
								 
								 ."<th scope=\"col\">Order Date</th>\n"
								 ."<th scope=\"col\">Order Time</th>\n"
								 ."<th scope=\"col\">Order Status</th>\n"
								 ."</tr>\n";
							while ($row = mysqli_fetch_assoc($result)){
								echo "<tr>";
								echo "<td>",$row["order_cost"],"</td>";
								echo "<td>",$row["order_id"],"</td>";
								echo "<td>",$row["fname"],"</td>";  
								echo "<td>",$row["lname"],"</td>";
								echo "<td>",$row["requesttype"],"</td>";
								
								echo "<td>",$row["date"],"</td>";
								echo "<td>",$row["time"],"</td>";
								echo "<td>",$row["order_status"],"</td>";
								echo "</tr>";
							}
							echo "</table>";
							mysqli_free_result($result);
						}
						mysqli_close($conn);
					}
				}
				
				//Show Orders by Customer Name
				if(isset($_POST['submit4']))	{
					$firstname	= trim($_POST["first_name"]);
					$lastname	= trim($_POST["last_name"]);
					require_once('settings.php');
					$conn = @mysqli_connect($host,
						$user,
						$pwd,
						$sql_db
					);
					if (!$conn) {
						echo "<p>Database connection failure</p>";
					} else {
						$sql_table="orders";	
						
						$query = "select order_id, fname, lname, requesttype, order_cost, date, time, order_status  
									from $sql_table where fname like '$firstname%' and lname like '$lastname%' order by order_id ASC";
						$result = mysqli_query($conn, $query);
						if(!$result) {
							echo "<p>Something is wrong with ",	$query, "</p>";
						} else {
							echo "<table border=\"1\">";
							echo "<tr>\n"
								 ."<th scope=\"col\">ORDER ID</th>\n"
								 ."<th scope=\"col\">First Name</th>\n"
								 ."<th scope=\"col\">Last Name</th>\n"
								 ."<th scope=\"col\">Request Type</th>\n"
								 ."<th scope=\"col\">Total Cost</th>\n"
								 ."<th scope=\"col\">Order Date</th>\n"
								 ."<th scope=\"col\">Order Time</th>\n"
								 ."<th scope=\"col\">Order Status</th>\n"
								 ."</tr>\n";
							while ($row = mysqli_fetch_assoc($result)){
								echo "<tr>";
								echo "<td>",$row["order_id"],"</td>";
								echo "<td>",$row["fname"],"</td>";  
								echo "<td>",$row["lname"],"</td>";
								echo "<td>",$row["requesttype"],"</td>";
								echo "<td>",$row["order_cost"],"</td>";
								echo "<td>",$row["date"],"</td>";
								echo "<td>",$row["time"],"</td>";
								echo "<td>",$row["order_status"],"</td>";
								echo "</tr>";
							}
							echo "</table>";
							mysqli_free_result($result);
						}
						mysqli_close($conn);
					}
				}
				
				//Show Orders by Product
				if(isset($_POST['submit5']))	{
					$request = trim($_POST["request"]);
					require_once('settings.php');
					$conn = @mysqli_connect($host,
						$user,
						$pwd,
						$sql_db
					);
					if (!$conn) {
						echo "<p>Database connection failure</p>";
					} else {
						$sql_table="orders";	
						
						$query = "select order_id, fname, lname, requesttype, order_cost, date, time, order_status  
									from $sql_table where requesttype like '$request%' order by order_id ASC";
						$result = mysqli_query($conn, $query);
						if(!$result) {
							echo "<p>Something is wrong with ",	$query, "</p>";
						} else {
							echo "<table border=\"1\">";
							echo "<tr>\n"
								 ."<th scope=\"col\">ORDER ID</th>\n"
								 ."<th scope=\"col\">First Name</th>\n"
								 ."<th scope=\"col\">Last Name</th>\n"
								 ."<th scope=\"col\">Request Type</th>\n"
								 ."<th scope=\"col\">Total Cost</th>\n"
								 ."<th scope=\"col\">Order Date</th>\n"
								 ."<th scope=\"col\">Order Time</th>\n"
								 ."<th scope=\"col\">Order Status</th>\n"
								 ."</tr>\n";
							while ($row = mysqli_fetch_assoc($result)){
								echo "<tr>";
								echo "<td>",$row["order_id"],"</td>";
								echo "<td>",$row["fname"],"</td>";  
								echo "<td>",$row["lname"],"</td>";
								echo "<td>",$row["requesttype"],"</td>";
								echo "<td>",$row["order_cost"],"</td>";
								echo "<td>",$row["date"],"</td>";
								echo "<td>",$row["time"],"</td>";
								echo "<td>",$row["order_status"],"</td>";
								echo "</tr>";
							}
							echo "</table>";
							mysqli_free_result($result);
						}
						mysqli_close($conn);
					}
				}
				
				
				//Update Orders Status
				if(isset($_POST['submit6']))	{
					$id = trim($_POST["id"]);
					$status = trim($_POST["status"]);
					require_once('settings.php');
					$conn = @mysqli_connect($host,
						$user,
						$pwd,
						$sql_db
					);
					if (!$conn) {
						echo "<p>Database connection failure</p>";
					} else {
						$sql_table="orders";	
						
						$query = "UPDATE `orders` SET `order_status` = '$status' WHERE `orders`.`order_id` = '$id'";
			
						$result = mysqli_query($conn, $query);
						if(!$result) {
							echo "<p>Something is wrong with ",	$query, "</p>";
						}
							echo "<p id='semp'>Order Status Updated!</p>";
						mysqli_close($conn);
					}
				}
				
				
				//Cancel Orders
				if(isset($_POST['submit7']))	{
					$cid = trim($_POST["cid"]);
					require_once('settings.php');
					$conn = @mysqli_connect($host,
						$user,
						$pwd,
						$sql_db
					);
					if (!$conn) {
						echo "<p>Database connection failure</p>";
					} else {
						$sql_table="orders";	
						
						$query = "DELETE FROM `orders` WHERE `orders`.`order_id` = '$cid' and order_status = 'PENDING'";
			
						$result = mysqli_query($conn, $query);
						if(!$result) {
							echo "<p>Something is wrong with ",	$query, "</p>";
						}
							echo "<p id='semp'>Order Deleted!</p>";
						mysqli_close($conn);
					}
				}
				
				
				//Show AVG Number of Orders per Day
				if(isset($_POST['enh_submit1']))	{
					require_once('settings.php');
					$conn = @mysqli_connect($host,
						$user,
						$pwd,
						$sql_db
					);
					if (!$conn) {
						echo "<p>Database connection failure</p>";
					} else {
						$sql_table="orders";	
						
						$query = "SELECT AVG(hi)	FROM(
							SELECT CAST(order_time as DATE), COUNT(order_id) hi
							FROM $sql_table
							GROUP BY CAST(order_time as DATE)
								)Order_Count";
						$result = mysqli_query($conn, $query);
						if(!$result) {
							echo "<p>Something is wrong with ",	$query, "</p>";
						} else {
							echo "<table border=\"1\">";
							echo "<tr>\n"
								 ."<th scope=\"col\">AVG Number of Order per Business Day</th>\n"
								 ."</tr>\n";
							while ($row = mysqli_fetch_assoc($result)){
								echo "<tr>";
								echo "<td>",$row["AVG(hi)"],"</td>";
								echo "</tr>";
							}
							echo "</table>";
							mysqli_free_result($result);
						}
						mysqli_close($conn);
					}
				}
				
				
				//Show The Most Popular Product
				if(isset($_POST['enh_submit2']))	{
					require_once('settings.php');
					$conn = @mysqli_connect($host,
						$user,
						$pwd,
						$sql_db
					);
					if (!$conn) {
						echo "<p>Database connection failure</p>";
					} else {
						$sql_table="orders";	
						
						$query = "SELECT requesttype, COUNT(requesttype) AS Count 
							FROM $sql_table
							GROUP BY requesttype
							ORDER BY Count DESC
							LIMIT    1";
						$result = mysqli_query($conn, $query);
						if(!$result) {
							echo "<p>Something is wrong with ",	$query, "</p>";
						} else {
							echo "<table border=\"1\">";
							echo "<tr>\n"
								 ."<th scope=\"col\">Most Popular Product</th>\n"
								 ."<th scope=\"col\">Total Number of Orders</th>\n"
								 ."</tr>\n";
							while ($row = mysqli_fetch_assoc($result)){
								echo "<tr>";
								echo "<td>",$row["requesttype"],"</td>";
								echo "<td>",$row["Count"],"</td>";
								echo "</tr>";
							}
							echo "</table>";
							mysqli_free_result($result);
						}
						mysqli_close($conn);
					}
				}
				
			?>
			</fieldset>
			
		</div>
		<?php include "footer.inc"; ?>
	</article>
</body>
</html>