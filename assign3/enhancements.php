<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="description" content="Assignment Part 1 enhancements page" />
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

<body>
	<article>
		<div id="heading">
			<?php include "header.inc"; ?>	
			<?php include "menu.inc"; ?>	
		</div>	
		<h2 class="h1en">ENHANCEMENTS1</h2>
		<ol id="olen">
			<li><a href="product.php">Background image</a><p>Background image is used on product.html, using 'fixed', and 'onclick' function instead of one simple image.</p></li>
			<li><a href="#">Responsive pages (style_responsive.css)</a><p>I coudn't hyperlink this one since I can't hyperlink developer tool or responsive pages.</p><p>Responsive pages are suitable for Ipad, Iphone5 options but the structure won't be broken on other formats as well.</li>
			<li><a href="enquire.php">Book.html</a><p>Additional html page for booking a table.</p></li>
			<li><a href="about.php">Timetable cell borders</a><p>Made table cells' border line invisible.</p></li>
			<li><a href="about.php">Resume</a><p>Prepared 'about' page like a resume.</p></li>
		</ol>	
					
					
					
					
		<?php include "footer.inc"; ?>	
	</article>
</body>
</html>