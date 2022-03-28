<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="description" content="Assignment3 enhancements3 page" />
  <meta name="keywords" content="HTML5, CSS, PHP" />
  <meta name="author" content="Nick Kim"  />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title> La Cucina della Nonna - Enhancements </title>
  
  <!-- References to external fonts -->
  <link href="styles/fonts" rel="stylesheet"/>
  <!-- References to external CSS files --> 
  <link href="styles/style.css" rel="stylesheet"/>
  <link href="styles/style_responsive.css" rel="stylesheet" media="screen and (max-width: 1024px)" />
  <link href="styles/style_responsive.css" rel="stylesheet" media="screen and (max-width: 568px)" />

</head>

<body id=bodye>
	<article>
		<div id="heading">
			<?php include "header.inc"; ?>	
			<?php include "menu.inc"; ?>
			<h2 class="h1en">ENHANCEMENTS3</h2>
				<ol id="olen">
					<li><a href="manage.php#enhance">Advanced Manager Reports based on compound queries</a><p>Manage.php provides a number of more advanced manager reports based on compound quieries.<br/>1. The average number of orders per business day<br/>2. The most popular product ordered</p></li>
					<li><a href="login.php">Create a 'Manager Log-in' page</a><p>Created Manager Log in Page to use the stored data from another table<br/> for managers in the same database with orders table.</p></li>
					
					<li><a href="enhancements.php">Link to Enhancements.php</a><p>Link to previous Enhancements for assign1</p></li>
					<li><a href="enhancements2.php">Link to Enhancements2.php</a><p>Link to previous Enhancements for assign2</p></li>
				</ol>	
		</div>
		
		<?php include "footer.inc"; ?>
	</article>
</body>
</html>