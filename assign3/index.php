<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="description" content="Assignment Part 1 Home page" />
  <meta name="keywords" content="HTML5, CSS, PHP" />
  <meta name="author" content="Nick Kim"  />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title> La Cucina della Nonna </title>
  
  <!-- References to external fonts -->
  <link href="styles/fonts" rel="stylesheet"/>
  <!-- References to external CSS files --> 
  <link href="styles/style.css" rel="stylesheet"/>
  <link href="styles/style_responsive.css" rel="stylesheet" media="screen and (max-width: 1024px)" />
  <link href="styles/style_responsive.css" rel="stylesheet" media="screen and (max-width: 568px)" />
</head>
<body>
<article>
	<section id="heading">
		<?php include "header.inc"; ?>
		<?php include "menu.inc"; ?>
	</section>	
		<section id="banner">
			<a href="https://ko.depositphotos.com/category/travel.html" title="free img from depositphotos.com">
				
				<img src="images/main_kitchen.jpg" alt="Free Kitchen Img" class="mainimg" title="Free img from depositphotos.com" /></a>
				<header id="header2">
					<h2 id="h1">Nonna's Cucina</h2>
					<p id="athc">A True Home-Cooked Experience<br />
					<br />
					Welcome to Nonna’s Cucina, your own cosy Italian getaway!<br class="brbr"/>
					A True Home-Cooked ExperienceA True Home-Cooked Experience<br class="brbr"/>
					We serve you only the most authentic home-style Italian meals, <br class="brbr"/>
					made with all the love and passion of your Nonna’s delicious cooking.<br class="brbr"/>
					We only use the finest locally-sourced ingredients in all of our meals.<br class="brbr"/>
					Come and visit us, you’ll always have a home at Nonna’s Cucina!<br class="brbr"/>
					</p><br /><br /><br />					
				</header>
			
				
		</section>
		<article id="clicks">
			<header class="maj">
				<h2>FIND OUT MORE</h2>
			</header>
			<section id="section1" class="1row">
					<a href="https://ko.depositphotos.com/category/fauna-flora.html">
					<img src="images/img_01.jpg" class="imgs" alt="Free Food Img01" title="Free img from depositphotos.com" /></a>
					<h3>Nonna's Cucina</h3>
					<p>Learn more about our restaurant!</p>
			</section>
			<section id="section2" class="1row" >
					<!--<a href="https://ko.depositphotos.com/category/transport-auto.html">오렌지에 "메뉴" 글자와 카드와 바질과 고추와 신선한 토마토의 상위 뷰 - ko.depositphotos.com</a>-->
					<a href="https://ko.depositphotos.com/category/transport-auto.html"><img src="images/img_02.jpg" class="imgs" alt="Product range page" title="Free img from depositphotos.com" /></a>
					<h3>SEE MENU</h3>
					<p>See the delicious food we have on offer!</p>
					<a href="product.html" class="button">Click Here</a>
			</section>
			<section id="section3" class="2row" >
					<!--<a href="https://ko.depositphotos.com/category/concepts.html">요리사 레스토랑 주방에서 벽돌 오븐에서 피자를 복용의 기회를 자른 - ko.depositphotos.com</a>-->
					<a href="https://ko.depositphotos.com/category/concepts.html"><img src="images/img_03.jpg" class="imgs" alt="A page about you" title="Free img from depositphotos.com" /></a>
					<h3>MEET OUR TEAM</h3>
					<p>Meet our amazing team!</p>
					<a href="about.html" class="button">Click Here</a>
			</section>
			<section id="section4" class="2row" >
					<!--<a href="https://ko.depositphotos.com/category/jewelry-gems.html">디지털 태블릿을 사용 하 여 화면에 사무실에서 커피 컵과 테이블 예약 족 팔으로 남자의 부분 보기 - ko.depositphotos.com</a>-->
					<a href="https://ko.depositphotos.com/category/jewelry-gems.html"><img src="images/img_04.jpg" class="imgs" alt="additional html" title="Free img from depositphotos.com" /></a>
					<h3>BOOK TABLE</h3>
					<p>Book a time to visit our cozy eatery!</p>
					<a href="enquire.html" class="button">Click Here</a>
			</section>
			<section id="section5" class="3row" >
					<!--<a href="https://ko.depositphotos.com/category/illustrations.html">사업가 회의 전화 앞에 나무 테이블에 앉아 흰 셔츠에 자른 - ko.depositphotos.com</a>-->
					<a href="https://ko.depositphotos.com/category/illustrations.html"><img src="images/img_05.jpg" class="imgs" alt="Product enquiry page" title="Free img from depositphotos.com" /></a>
					<h3>CONTACT US</h3>
					<p>Questions? Concerns? Compliments?</p>				
					<a href="book.html" class="button">Click Here</a>					
			</section>
			<section id="section6" class="3row" >
					<!--<a href="https://ko.depositphotos.com/category/animals.html">남자는 머리를 펌프 기술 개념을 개선:. - ko.depositphotos.com</a>-->
					<a href="https://ko.depositphotos.com/category/animals.html"><img src="images/img_06.jpg" class="imgs" alt="A page that lists any enhancements you have made" title="Free img from depositphotos.com" /></a>
					<h3>BOOSTS</h3>
					<p>Enhancements</p>
					<a href="enhancements2.html" class="button">Click Here</a>
			</section>	
		</article>
	<?php include "footer.inc"; ?>
</article>
</body>
</html>