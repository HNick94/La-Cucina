<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="description" content="Assignment2 enhancements2 page" />
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
			<h2 class="h1en">ENHANCEMENTS2</h2>
				<ol id="olen">
					<li><a href="payment.php#dddd">Payment Timer</a><p>Payment.html has a 3 minutes timer using setInterval.<br/> the timer is on the next to cancel button and the browser alerts warning message when 1 minute left.<br/>If time runs out, the browser redirects back to index.html</p></li>
					<li><a href="enquire.php#first_name">Prefilling data</a><p>Prefill data of personal details that already has been subbmitted before without errors</p></li>
					<li><a href="payment.php#cardname">Pre-load data in input field</a><p>Pre-load both first name and last name subbmitted from previous page in the input field of Card Name.</p></li>		
				</ol>	
		</div>
		<?php include "footer.inc"; ?>
	</article>
</body>
</html>