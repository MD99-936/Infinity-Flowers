<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Home page</title>

		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
		<script src="js/shop.js" type="text/javascript"></script>
		<link rel="stylesheet" href="css/Progress.css" type="text/css" />
		<link rel="stylesheet" href="css/styles.css" type="text/css" />
		<link rel="stylesheet" href="css/Footer.css" type="text/css" />
		<link rel="stylesheet" href="css/nav-bar.css" type="text/css" />
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	</head>
	<body>
		<header class="top-header">
			<div class="message">
				<span>Welcome to Infinity <label>flo</label>wer</span>
			</div>
			<div class="top-header-setting">
				<ul>
					<li class="dropdown">Language<i class="fa fa-angle-down"></i>
						<div class="dropdown-content">
							 <ul>
								<li><a href="#"><img src="images/flag/en.png" alt="flag">English</a></li>
								<li><a href="#"><img src="images/flag/fr.png" alt="flag">French</a></li>
								<li><a href="#"><img src="images/flag/sa.png" alt="flag">Arabic</a></li>
								<li><a href="#"><img src="images/flag/hi.png" alt="flag">Hindi</a></li>
							 </ul>
						 </div></li>
					<li class="dropdown">Currency<i class="fa fa-angle-down"></i>
						<div class="dropdown-content">
							<ul>
									<li><a href="#">$ USD</a></li>
									<li><a href="#">€ EURO</a></li>
									<li><a href="#">LL LBP</a></li>
									<li><a href="#">₹ INR</a></li>
							</ul>
					</div>
				</li>
			</ul>
		</div>
	</header>
		<!-- nav bar header-->
<!-- -->

		<header id="navbar" class="header-nav-bar">
			<figure class="nav-figure">
				<img src="images/infinity.jpg" alt="Logo"/>
				<figcaption>
					<span><label class ="title">Flo</label>wer</span>
				</figcaption>
		</figure>
			<div class="menu-bar" style="float:left">
				<ul>
				  <li class="active1"><a href='index.php'>Home</a></li>
				  <li><a href="html/category">Shop</a></li>
				  <li><a href="html/AboutUs.html">About Us</a></li>
				  <li><a href="html/ContactUs.html">Contact</a></li>
				</ul>
			</div>
			<div class="row">
				 <ul>
						<li id="find"><label  class="icon-search" for="search_box"><i class="fa fa-search" aria-hidden="true"></i></label>
							<div class="search">
								 <input class="search_box" type="checkbox" id="search_box">
								 <div class="search_form">
								<form action="#">
									<input type="text" placeholder="search here..." name="search"><input type="submit" value="Go">
								</form>
								</div>
							</div>
						 </li>

						 <li id="user-o">
						   <label class="link"><i class="fa fa-user-o" aria-hidden="true"></i></label>
						     <div class="dropdown-content">
						       <ul>
								   <?php
										if(isset($_SESSION['usersuid'])){
											echo "<li><a href='./html/profile.php'>Profile Page</a></li>";
											echo "<li><a href='./html/logout.php'>Log out</a></li>";
										}
										else{		
											echo "<li><a href='./html/register.php'>Sign up</a></li>";
											echo "<li><a href='./html/login.php'>Log in</a></li>";
										}
								  ?>
						       </ul>
						     </div>
						 </li>
							<li id="heart"><span class="link"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
							<li id="shopping"><label class="link"><i class="fa fa-shopping-cart" aria-hidden="true"></i></label>
							<div class="container content-section">
									<div class="cart-row">
										<span class="cart-item cart-header cart-column">ITEM</span>
										<span class="cart-price cart-header cart-column">PRICE</span>
										<span class="cart-quantity cart-header cart-column">QUANTITY</span>
									</div>
									<div class="cart-items">
									<div class="cart-row">
									  <div class="cart-item cart-column">
									<img class="cart-item-image" src="images/product-2.jpg" width="100" height="100">
									<span class="cart-item-title">Flowers Bouquet Pink</span>
								</div>
								<span class="cart-price cart-column">$40.00</span>
								<div class="cart-quantity cart-column">
									<input type="number" value="1">
									<button class="btn btn-danger" type="button"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
								</div>`
							</div>
									</div>
										<div class="cart-items">
									<div class="cart-row">
									  <div class="cart-item cart-column">
									<img class="cart-item-image" src="images/product-1.jpg" width="100" height="100">
									<span class="cart-item-title">Evergreen Candytuft</span>
								</div>
								<span class="cart-price cart-column">$50.00</span>
								<div class="cart-quantity cart-column">
									<input type="number" value="1">
									<button class="btn btn-danger" type="button"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
								</div>`
							</div>
									</div>
										<div class="cart-items">
									<div class="cart-row">
									  <div class="cart-item cart-column">
									<img class="cart-item-image" src="images/product-3.jpg" width="100" height="100">
									<span class="cart-item-title">Dutchman's Breeches</span>
								</div>
								<span class="cart-price cart-column">$50.00</span>
								<div class="cart-quantity cart-column">
									<input type="number" value="1">
									<button class="btn btn-danger" type="button"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
								</div>`
							</div>
									</div>
									<div class="cart-total">
										<strong class="cart-total-title">Total</strong>
										<span class="cart-total-price">$340</span>
									</div>
									<div class="checkout">
										<a href="viewcart.html">View Cart</a>
										<a href="checkout.html">Checkout</a>
										</div>
								</div></li>
					</ul>
			</div>
		</header>
		
		<!-- slider-images-->
	<header class="slider">
		<div class="slideshow-container">
		<div class="mySlides">
		  <img src="images/wed.jpg">
		  <div class="text ">	
			<h1>Fresh your mind &amp; enjoy it</h1>
			<a href="html/category.html">Shop Now</a>
		  </div>
		</div>
		<div class="mySlides">
		  <img src="images/d.jpeg">
		  <div class="text">
			<h1>Fresh your mind &amp; enjoy it</h1>
			<a href="html/category.html">Shop Now</a>
		  </div>
		</div>
		<div class="mySlides">
		  <img src="images/by.jpg">
		  <div class="text">
			<h1>Fresh your mind &amp; enjoy it</h1>
			<a href="html/category.html">Shop now</a>
		  </div>
		</div>
		</div>
	</header>
	<div id="dot"style="text-align:center">
	  <span class="dot"></span>
	  <span class="dot"></span>
	  <span class="dot"></span>
	</div>

<!--service-policy-area-->
<div class="service-policy-area">
	<div class="container-1">
		<!--Shipping-->
		<div class="service-policy-item">
			<div class="icon">
				<img src="images/free_shipping.png" alt="Free Shipping" title="Free Shipping" />
			</div>
			<div class="policy-terms">
				<h5>free shipping</h5>
				<p>Free shipping all order</p>
			</div>
		</div>
		<!--support 24h-->
		<div class="service-policy-item">
			<div class="icon">
				<img src="images/support247.png" alt="support 27/4" title="support 27/4" />
			</div>
			<div class="policy-terms">
				<h5>Support 24/7</h5>
				<p>Support 24 hours a day</p>
			</div>
		</div>
		<!--money return-->
		<div class="service-policy-item">
			<div class="icon">
				<img src="images/money_back.png" alt="money" title="money" />
			</div>
			<div class="policy-terms">
				<h5>Money return</h5>
				<p>30 days for free return</p>
			</div>
		</div>
		<!--order discount-->
		<div class="service-policy-item">
			<div class="icon">
				<img src="images/promotions.png" alt="Promotion" title="Promotion" />
			</div>
			<div class="policy-terms">
				<h5>order discount</h5>
				<p>On every order over $15</p>
			</div>
	</div>
</div>
</div>
<!-- end of service-area-->
 <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button><i class="fa fa-angle-double-up" aria-hidden="true"></i></button>
 <script src="js/scrollup.js" type="text/javascript"></script>
<!-- Information about us-->
<div class="info">
	<div class="detail">
		<h1>Who we</h1>
		<h2>are</h2>
	</div>
	<div class="detail">
		<p>
			We are pride ourself to delevery many types of fresh flowers on this town. We are one of <br />
			top online flower shop with best service, feel free to contact one of our professional<br />
			 customer service team members with your comments at 07-888-265. Our skilled staff of<br />
				professionals are dedicated to the safety, beauty and timeliness of your order.
		</p>
	</div>
	<div class="detail">
		<img src="images/shop-detail-01.png " alt=" bouquets flower" title="bouquet" />
	</div>
</div>
<!--end of information-->

<!--How it's work-->

	 <section class="how-work">
        <h1>How does it work</h1>
        <img src="images/bouquett.png" alt="bouquett" title="icon flower">
        <p>We have a systemic process to deliver your flowers<br> on time and anywhere in the world. Please keep in<br>
		mind that this is just a sample text</p>
     </section>
     <div class="rounded">
        <div class="delivery">
            <figure>
				 <img src="images/phone.jpg" alt="phone" title="phone"/>
				 <figcaption>Place an order from comfort of your home or office.</figcaption>
            </figure>
        </div>
		 <div class="delivery">
			 <figure>
				<img src="images/t.jpg" alt="t"/>
				<figcaption>We process and deliver your order to your be love done's and also provide your receipt</figcaption>
			 </figure>
		</div>
		 <div class="delivery">
			 <figure id="figure">
			  <img src="images/home2-four-04.jpg">
			 <figcaption>Your beloved receives fresh flowers. Enjoy them and take photos of them.</figcaption>
			 </figure>
			</div>
		</div>
<!--end of how it's work -->

<div class="title-category">
	<h1><label>About </label><span>infi</span>nity <span>flo</span>wer Shop</h1>
</div>

<!-- Category-->

<div id="category" class="category">
	  <div class="row-1">
		<div class="container-2 ">
	      `<img src="images/variety.jpg"/>
	      <div class="content mid-1">
	        <h2> Flowers</h2><br />
	        <a href="html/category.html">shop now</a>
	      </div>
	    </div>
	    <div class="container-2">
	      <img src="images/wedding1.jpg" style="width:360px; height:330px;" />
	      <div class="content mid-2">
	        <h2>Wedding</h2><br />
	        <a href="html/Wedding.html">shop now</a>
	      </div>
	    </div>
	</div>
	<div class="row-1">
		  <div class="container-2">
			<img src="images/birthday.jpg" style="width:670px; height:290px;"/>
			<div class="content mid-3">
			  <h2>Birthday Boutique</h2>
			  <br />
			  <a href="html/Birthday.html">shop now</a>
			</div>
		  </div>
		  <div class="container-2 col-2 ">
			<img src="images/garden-decoration.jpg"/>
			<div class="content mid-4">
			  <h2>Garden Decorations</h2>
			  <br />
			  <a href="html/Garden.html">shop now</a>
			</div>
		  </div>
		  <div class="container-2 col-3">
			<img src="images/valentine.jpg" style="width:230px; height:290px;"/>
			<div class="content mid-5">
			  <h2>Valentine</h2>
			  <br />
			  <a href="html/Valentine.html">shop now</a>
			</div>
		  </div>
	</div>
</div>

<div class="progress-title">
	<h1>Our Capability</h1>
</div>
<div class="main-progress">
	<div class="container-p">
		<div class="row-p">
			<div class="col-md-3 col-sm-6">
				<div class="progress blue">
					<span class="progress-left">
						<span class="progress-bar"></span>
					</span>
					<span class="progress-right">
						<span class="progress-bar"></span>
					</span>
					<div class="progress-value">95%</div>
				</div>
				<h4>FAST DELIVERY</h4>
			</div>
	 
			<div class="col-md-3 col-sm-6">
				<div class="progress yellow">
					<span class="progress-left">
						<span class="progress-bar"></span>
					</span>
					<span class="progress-right">
						<span class="progress-bar"></span>
					</span>
					<div class="progress-value">90%</div>
				</div>
				<h4>TRUE COLOR</h4>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="progress red">
					<span class="progress-left">
						<span class="progress-bar"></span>
					</span>
					<span class="progress-right">
						<span class="progress-bar"></span>
					</span>
					<div class="progress-value">85%</div>
				</div>
				<h4>HUGE QUANTITY</h4>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="progress purple">
					<span class="progress-left">
						<span class="progress-bar"></span>
					</span>
					<span class="progress-right">
						<span class="progress-bar"></span>
					</span>
					<div class="progress-value">80%</div>
				</div>
				<h4>ON TIME</h4>
			</div>
			
		</div>
</div>   
</div>
<div class="container-3">
  <input type="radio" name="nav" id="first" checked/>
  <input type="radio" name="nav" id="second" />
  <input type="radio" name="nav" id="third" />
  
  <label for="first" class="first"></label>
  <label for="second"  class="second"></label>
  <label for="third" class="third"></label>
 
  <div class="one slide">
    <blockquote>
      <span class="leftq quotes">&ldquo;</span>Good florist template!
	  This template is very suitable for florist and everyone with 
	  the function and features.Setup is easy and fast.<span class="rightq quotes">&bdquo; </span>
    </blockquote>
	<img src="images/Andrew.jpg" title="" width="170px" height="130px">
    <h2>Andrew steven</h2>
  </div>
  
  <div class="two slide">
    <blockquote>
      <span class="leftq quotes">&ldquo;</span> The option and layout are extremly user friendly which include<br>
	  some very important custom choices.I'm loving it.<span class="rightq quotes">&bdquo; </span>
    </blockquote>
    <img src="images/Janet.jpg" title="" width="170px" height="150px"/>
    <h2>Sara Williams</h2>
  </div>
  
  <div class="three slide">
    <blockquote>
      <span class="quotes leftq"> &ldquo;</span>When a beatiful design is combined with powerful technology,<br>
	  it truly is an artwork.I love your website and I love the theme.<br>Thank you for the awesome product<span class="rightq quotes">&bdquo; </span>
    </blockquote>
    <img src="images/Ken-Gaebler.jpg" title="" width="170px" height="150px"/>
    <h2>Ken Gaebler</h2>
  </div>
</div>

<footer class="main-footer">
    <div class="footer">
    <h3>More About Company</h3>
        <p>
			FlowerShop Online is a simple website that sells flowers for
            various persons no matter what their age is. It contains a huge
            number of flowers of different colors and types.
        </p>
        </div>
        <div class="footer contact">
            <h3>Contact Information</h3>
            <ul>
                <li><i class="fa fa-map-marker" aria-hidden="true"></i><a href="http://wwww.maps.google.com">Infinity flower<br>Main Rd beirut,Lebanon</a></li>
				<li><i class="fa fa-phone" aria-hidden="true"></i><span>020/823627</span></li>
                <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:contact@example.com">contact@example.com</a></li>
            </ul>
        </div>
		  <div class="footer">
			<h3>News</h3>
			<p>Do you want to receive our marketing<br> campaign to get more value from<br> Flower?</p>
      <div class="flexemail">
    			<div class="flexemail--wrapper">
    				<form class="flexemail--form" action="#" method="post">
    					<div class="flexemail--input-wrapper">
    						<input class="flexemail--input" type="email" placeholder="Enter your email here">
    					</div>
    					<input class="flexemail--submit" type="submit" value="&#10140;"/>
    				</form>
    			</div>
    	</div>
			<div class="sub-footer">
				<ul><label>Follow us</label>
					<li><a href="https://www.facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="https://www.twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="https://www.instagram.com"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					<li><a href="https://www.pinterest.com"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
				</ul>
			</div>
        </div>
		<div  class="footer">
		<img src="images/foot.jpg" alt="bouquets of flowers">
		</div>
</footer>
<footer class="footer-bottom">
	<div class="sub-footer-bottom">
	<p>&copy;2019 Flowers. All rights reserved</p>
	</div>
	<div class="sub-footer-bottom">
	<img src="images/payment-logo.png" >
	</div>
</footer>
<script src="js/java.js" type="text/javascript"></script>
<script src="js/scrollheader.js" type="text/javascript"></script>
</body>
</html>
