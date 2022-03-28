<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="description" content="Assignment Part 1 menu page" />
  <meta name="keywords" content="HTML5, CSS, PHP" />
  <meta name="author" content="Nick Kim"  />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title> La Cucina della Nonna - Menu </title>
  
  <!-- References to external fonts -->
  <link href="styles/fonts" rel="stylesheet"/>
  <!-- References to external CSS files --> 
  <link href="styles/style.css" rel="stylesheet"/>
  <link href="styles/style_responsive.css" rel="stylesheet" media="screen and (max-width: 1024px)" />
  <link href="styles/style_responsive.css" rel="stylesheet" media="screen and (max-width: 568px)" />

</head>

<body id="bodypro">
	<article>
		<section id="heading">
			<?php include "header.inc"; ?>
			<?php include "menu.inc"; ?>
		</section>
		<!--I didn't really want to hyperlink background photo but I just followed the rule. please understand even if it doesn't look great.-->
		<div onclick="location.href='https://ko.depositphotos.com/category/fauna-flora.html'" id="eatdrink">
			<section id="eat">
				<h2 class="h1">BRUNCH & LUNCH</h2>
				<p> Take a look at our menu, filled with  <br />
					a vast variety of both classic and modern Italian dishes!</p>
			</section>
			<section id="breakfast" class="brunch">
				<h2 id="soflwk" class="brunchy">Breakfast</h2>
				<ol id="olp" class="lists">
					<li><strong>NONNA'S COTOLETTA*
						<a class="price">27.9</a></strong><br/>
						Our most popular dish. Relax and enjoy<br/>
						Nonna’s world class cotoletta. Made<br/>
						using the finest free range chicken<br/>
						and our signature secret crumb mix,<br/>
						this dish is sure to win over the hearts<br/>
						of all who taste it!
					</li>				
					<li><strong>NONNO'S BENEDICT
						<a class="price">24.9</a></strong><br/>
						poached eggs served on a toasted<br/>
						croissant with pineapple spiced<br/>
						pulled pork
					</li>
					<li><strong>SPAGHETTI PIZZA*
						<a class="price">21.9</a></strong><br/>
						White pizza with olive oil, tomato sauce,<br/>
						fresh mozzarella with creamy Carbonara
					</li>
					<li><strong>AVO BOUQUET*
						<a class="price">22.9</a></strong><br/>
						fresh smashed avocade and coriadner on<br/>
						toasted sourdough with cherry tomatoes
					</li>
					<li><strong>CHILLI SCRAMBLED*
						<a class="price">18.9</a></strong><br/>
						chilli scrambled eggs on toasted<br/>
						sourdough, topped with fried shallots
					</li>
					<li><strong>BAO WITH ME
						<a class="price">22.9</a></strong><br/>
						steamed gua bao w freid egg,<br/>
						maple bacon, cucumber, carrot
					</li>
					<li><strong>LOVE NEST
						<a class="price">24.9</a></strong><br/>
						Our smoothie bowl with<br/>
						mixed fresh fruit and berries,<br/>
						chia seeds and toasted coconut
					</li>	
				</ol>				
			</section>	
			<section id="lunch" class="brunch">
			<aside id="widthnot25" title="aside">
				<h2 class="brunchy"><a id="sofufk">Lunch</a></h2>
				<ul class="lists">
					<li><strong>VEGGIE SLIDERS*
						<a class="price">22.9</a></strong><br/>
						couscous & chickpea falafel patties in small<br/>
						beetroot buns w mint yogurt & picked onions
					</li>
					<li><strong>BEEF SLIDERS*
						<a class="price">24.9</a></strong><br/>
						pulled bbq beef sliders with spicey pink<br/>
						jalapeno sauce on pretty pink brioche
					</li>
					<li><strong>CHICKY TACO
						<a class="price">23.9</a></strong><br/>
						bbq chicken abodo tacos<br/>
						with spicey jalapeno sauce
					</li>
				</ul>
			</aside>
				<ul class="lists">
					<li id="side"><strong>SIDES
						<a class="price">4.0</a></strong><br/>
						bacon<br/>
						eggs your way<br/>
						toast your way<br/>
						avocado<br/>
						cherry tomatoes<br/>
						marinated feta<br/>
						vanilla bean ice cream<br/><br/><br/>
						
					</li>					
				</ul>
			<aside id="width25" title="Aside with 25% width"><a class="price">*VO GFO DFO AVAILABLE</a>
			</aside>
			</section>
		</div>
		<div id="drink">
			<section id="drinks">
				<h2 id="sofu" class="h1">DRINKS</h2>
				<h2 id="dhffu" class="brunchy">Noona's Originals</h2>
				<ul id="newlist1" class="lists">
					<li><strong>NONNA FLAMINGO
						<a class="price">17</a></strong><br/>
						vodka, peach schnapps,<br/>
						cranberry juice, citrus
					</li>
					<li><strong>NONNO MARGARITA
						<a class="price">19</a></strong><br/>
						Tequila, watermelon, dragon fruit,<br/>
						ginger agave, lime juice
					</li>
					<li><strong>WATERMELON MOJITO
						<a class="price">19</a></strong><br/>
						white rum, moscato,<br/>
						fresh watermelon, mint, lime juice
					</li>
					<li><strong>PINE PINA COLADA
						<a class="price">18</a></strong><br/>
						white rum, bubblegum,<br/>
						raspberry, pineapple, citrus
					</li>
					<li><strong>MANGO CHOCOLATE MARTINI
						<a class="price">20</a></strong><br/>
						vanilla vodka, mango,<br/>
						chocolate, grapefruit,<br/>
						aquafaba, white chocholate rim
					</li>
					<li id="side2"><strong>OTHER
						<a class="price">4.0</a></strong><br/>
						coke<br/>
						coke-zero<br/>
						sprite<br/>
						fanta<br/>
						long black<br/>
						green tea<br/>
					</li>	
				</ul>				
			</section>
		</div>
		<div onclick="location.href='https://ko.depositphotos.com/category/fauna-flora.html'" id="lastp">
			<section id="hours">
				<h2 class="brunchy">Opening Hours</h2>
				<table id="tablesp" title="table">
					<thead>
						<tr>
							<th class="teehee" colspan="2" >Benvenuto!</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th>Monday</th>
							<td>9:00am - 3:00pm</td>
						</tr>
						<tr>
							<th>Tuesday</th>
							<td>9:00am - 3:00pm</td>
						</tr>
						<tr>
							<th>Wednesday</th>
							<td>9:00am - 3:00pm</td>
						</tr>
						<tr>
							<th>Thursday</th>
							<td>9:00am - 3:00pm</td>
						</tr>
						<tr>
							<th>Friday</th>
							<td>9:00am - 3:00pm</td>
						</tr>
						<tr>
							<th>Saturday</th>
							<td>10:00am - 2:00pm</td>
						</tr>
					</tbody>
					<tfoot>
						<tr>
							<th class="teetee">Sunday</th>
							<td class="teetee">Closed</td>
						</tr>
					</tfoot>							
				</table>
			</section>
		</div>
		<?php include "footer.inc"; ?>
	</article>
</body>
</html>