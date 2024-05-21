<?php
if(isset($_GET['search']))
{
	header("location:search.php");
}


?>




<!DOCTYPE html>
<html>


<head>
<meta charset="UTF-8">
<title>Find Hotel and PG </title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Linking Bootstrap css file -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!-- Linking Main Css file -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/color.css">

</head>


<body>

	<div class="wrapper">
		<header class="abs">
			<div class="top-bar">
				<div class="container">
					<div class="con-links">
						<ul>
							<li> (+91)8873261947</li>
							<li> Manojkr805313@gmail.com</li>
							<span class="btn"><a href="admin/index.php" style="color: #fff; border: 1px solid #fff; border-radius: 50px; padding: 5px;">Office login</a></span>

						</ul>
						
					</div><!--con-links end-->
				</div>
			</div><!--top-bar end-->
			<div class="bottom-header">
				<div class="container">
					<div class="hd">
						<div class="logo">
							<a href="#" title="">
								<img src="images/logo.png" alt="" />
							</a>
						</div><!--logo end-->
						<div class="menu-search">
							<nav>
								<ul>
										
									</li>
									
									<li><a href="about.php" title="">About Us</a></li>
										<li><a href="term.php" title="">term & condition </a></li>
									<li><a href="contact.php" title="">Contact Us</a></li>
								</ul>
		 					</nav><!--nav end-->
							
						</div><!--menu-search end-->
					</div>
				</div>
			</div><!--bottom-header end-->
		</header><!--Header end-->

		
		
		<section id="home" class="home-bg">
			<div class="block remove-btm-gap">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="home-detial">
								<div class="home-banner">
									<div class="block">
									
										<div class="greeting"><h3>Special Fares to</h3></div>
										<div class="greeting2"><h2>Relax </h2></div>
										<div class="service-block">
											
											<div>
												<h5>Free WI-FI</h5>
												<span>in Whole hostel</span> 
											</div>
										</div>
										<div class="service-block">
											
											<div>
												<h5>Cable TV</h5>
												<span>Free Cable TV</span> 
											</div>
										</div>
										<div class="service-block">
											
											<div>
												<h5>Resturant</h5>
												<span>Bar & Resturant</span> 
											</div>
										</div>
									</div>
								</div>
								<div class="room-finding">
									<div class="find-room">
										<div class="search-room">
											<h3>Search A Room</h3>
											
											<form    action='search.php' method='get'>

											<div>
													<label>
														<select name='type'>
															<option>Which type of Room</option>
															<option value='Hotel'>Hotel</option>
															<option value='PG'>PG</option>
															<option value='Rental House'>Rental House</option>
														</select>
														
													</label>
											</div>
										
										</div>
										<div class="other-options">
											<input type="submit" name='search' class="searching" value="Search Now" />
											
										</div>
											</form>
									</div><!--find-room end-->
								</div><!--room-finding end-->
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


		<section>
			<div class="block">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<div class="about-us">
								<div class="title">
									<h3>About Relax</h3>
								</div><!--title end-->
								<h5><a href="#" title="">Relax Hotel provide PG and Rental House....</a></h5>
								<p>Relax helps you all to easily find HOTEL , PG and RENTAL HOUSE . And provide a good and safe secure room. Thank You </p>
								<ul class="ab-links">
									<li>Dedicated Team</li>
									<li>Best Advisors</li>
									<li>24/7 Supports</li>
								</ul>
							</div><!--about-us end-->
						</div>
						<div class="col-md-8">
							<div class="fav-areas">
								<div class="title f2">
									<h3>Our Favorite Rooms</h3>
								</div><!--title end-->
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy magna aliquam erat volutpat. Ut wisi enim ad minim</p>
								<div class="row">
									<div class="col-md-4">
										<div class="fav-room">
											<img src="images/resources/fav-room1.jpg" alt="">
											<div class="fav-rm-data">
												<h3><a href="#" title=""> PG</a></h3>
											
											</div>
										</div><!--fav-room end-->
									</div>
									<div class="col-md-4">
										<div class="fav-room">
											<img src="images/resources/fav-room2.jpg" alt="">
											<div class="fav-rm-data">
												<h3><a href="#" title="">Rental House</a></h3>
												
											</div>
										</div><!--fav-room end-->
									</div>
									<div class="col-md-4">
										<div class="fav-room">
											<img src="images/resources/fav-room3.jpg" alt="">
											<div class="fav-rm-data">
												<h3><a href="#" title="">Hotel</a></h3>
											
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>





		<section>
			<div class="block remove-btm-gap">
				<div class="container">
					<div class="row">
						<div class="col-md-2">
							<div class="title f3">
								<h3>Our Gallery</h3>
							</div>
							<div class="options">
								<div class="option-isotop">
									<ul id="filter" class="option-set filters-nav" data-option-key="filter">
										<li><a class="selected" data-option-value="*">Rooms Highligts</a></li>
									
									</ul>
								</div>
							</div><!-- FILTER BUTTONS -->
						</div>
						<div class="col-md-10">
							<div class="row gallery grid">
								<div class="col-md-5 col-sm-5 col-xs-5 rooms swimming">
									<div class="grid-item2 width-auto">
										<figure>
											<img src="images/resources/01.jpg" alt="">
											<figcaption>
												<h5>Bed room</h5>
											</figcaption>
											<div class="popup-icon">
												<a class="html5lightbox" data-thumbnail="images/resources/gallery1.jpg" data-group="set1" href="images/resources/gallery1.jpg" title="home 1"><i class="fa fa-compress"></i></a>
											</div>
										</figure>
									</div>
								</div>


								<div class=" col-md-2 col-sm-2 col-xs-2  kitchen">
									<div class="grid-item2 width-auto">
										<figure>
											<img src="images/resources/02.jpg" alt="">
											<figcaption>
												<h5>Bed room</h5>
											</figcaption>
											<div class="popup-icon">
												<a class="html5lightbox" data-thumbnail="images/resources/gallery2.jpg" data-group="set1" href="images/resources/gallery2.jpg" title="home 2"><i class="fa fa-compress"></i></a>
											</div>
										</figure>
									</div>
								</div>


								<div class="col-md-5 col-sm-5 col-xs-5 dinning bath">
									<div class="grid-item2 width-auto">
										<figure>
											<img src="images/resources/03.jpg" alt="">
											<figcaption>
												<h5>Bed room</h5>
											</figcaption>
											<div class="popup-icon">
												<a class="html5lightbox" data-thumbnail="images/resources/gallery3.jpg" data-group="set1" href="images/resources/gallery3.jpg" title="home 3"><i class="fa fa-compress"></i></a>
											</div>
										</figure>
									</div>
								</div>



								<div class="col-md-5  col-sm-5 col-xs-5  bath rooms">
									<div class="grid-item2 width-auto">
										<figure>
											<img src="images/resources/04.jpg" alt="">
											<figcaption>
												<h5>Bed room</h5>
											</figcaption>
											<div class="popup-icon">
												<a class="html5lightbox" data-thumbnail="images/resources/gallery4.jpg" data-group="set1" href="images/resources/gallery4.jpg" title="home 4"><i class="fa fa-compress"></i></a>
											</div>
										</figure>
									</div>
								</div>



								<div class=" col-md-7 col-sm-7 col-xs-7  swimming kitchen">
									<div class="grid-item2 width-auto">
										<figure>
											<img src="images/resources/05.jpg" alt="">
											<figcaption>
												<h5>Bed room</h5>
											</figcaption>
											<div class="popup-icon">
												<a class="html5lightbox" data-thumbnail="images/resources/gallery5.jpg" data-group="set1" href="images/resources/gallery5.jpg" title="home 5"><i class="fa fa-compress"></i></a>
											</div>
										</figure>
									</div>
								</div>


							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- <section>
			<div class="pd-btm-less">
				<div class="container">
					<div class="partners-logo">
						
					</div>
				</div>
			</div>
		</section> -->

		



		<section>
			<div class="block no-padding">
				<div class="newsletter">
					<div class="bg bg2">
						<div class="container">
							<div class="stay-tuned">
								<h2>Stay tuned with us</h2>
								<h5>Get our updated offers, discounts, events and much more!</h5>
							</div>
							<div class="email-form">
								<form>
									<input name="" placeholder="Enter your email address" type="text">
									<button type="submit">Subscribe</button>
								</form>
							</div><!--email-form end-->
						</div>
					</div>
				</div><!--newsletter end-->
			</div>
		</section>

		<footer>
			<div class="block no-padding">
				<div class="bg bg3">
					<div class="container">
						<div class="top-footer">
							<div class="row">
								<div class="col-md-4">
									<div class="widget">
										<div class="about-widget">
											<a href="#" title=""><img src="images/logo2.png" alt=""></a>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,  sed diam nonummy nibh euismod it tincidunt ut laoreet commodo consequat.  </p>
										</div><!--about-widget end-->
									</div><!--widget end-->
								</div>
								<div class="col-md-3">
									<div class="widget">
										<div class="news-widget">
											<h3 class="widget-title">Latest Rooms</h3>
											<div class="news">
												<img src="images/resources/sroom1.png" alt="">
												<div class="news-details">
													<h3><a href="#" title="">Single Room</a></h3>
													<span>$49 night</span>
												</div>
											</div><!--news end-->
											<div class="news">
												<img src="images/resources/sroom2.png" alt="">
												<div class="news-details">
													<h3><a href="#" title="">Luxury Room</a></h3>
													<span>$129night</span>
												</div>
											</div><!--news end-->
											<div class="news">
												<img src="images/resources/sroom3.png" alt="">
												<div class="news-details">
													<h3><a href="#" title="">Double Room </a></h3>
													<span>$99 night</span>
												</div>
											</div><!--news end-->
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="widget">
										<div class="widget-quick-links">
											<h3 class="widget-title">Quick Links</h3>
											<div class="qk-links">
												<ul>
													<li><a href="#" title="">Home</a></li>
													<li><a href="#" title="">About Us</a></li>
													<li><a href="#" title="">Suits</a></li>
													<li><a href="#" title="">News</a></li>
													<li><a href="#" title="">Contact Us</a></li>
													<li><a href="#" title="">Bookisnt</a></li>
													<li><a href="#" title="">Blogs</a></li>
												</ul>
												<ul>
													<li><a href="#" title="">Activities</a></li>
													<li><a href="#" title="">Gallery</a></li>
													<li><a href="#" title="">Aminities</a></li>
													<li><a href="#" title="">Single Room</a></li>
													<li><a href="#" title="">Testimonials</a></li>
													<li><a href="#" title="">Dinning</a></li>
													<li><a href="#" title="">Offers</a></li>
												</ul>
											</div>
										</div><!--widget-quick-links end-->
									</div>
								</div>
								<div class="col-md-2 lst">
									<div class="widget">
										<div class="widget-tags">
											<h3 class="widget-title">Tags</h3>
											<ul>
												<li><a href="#" title="">Booking</a></li>
												<li><a href="#" title="">TV</a></li>
												<li><a href="#" title="">Services</a></li>
												<li><a href="#" title="">Room</a></li>
												<li><a href="#" title="">Hostel</a></li>
												<li><a href="#" title="">WIFI</a></li>
												<li><a href="#" title="">AC</a></li>
												<li><a href="#" title="">Camera</a></li>
												<li><a href="#" title="">Party</a></li>
												<li><a href="#" title="">Pool</a></li>
												<li><a href="#" title="">PHP</a></li>
												<li><a href="#" title="">Offers</a></li>
												<li><a href="#" title="">Khignt</a></li>
											</ul>
										</div><!--widget-tags end-->
									</div><!--widget end-->
								</div>
							</div>
						</div><!--top-footer end-->
						<div class="bottom-footer">
							<div class="copyright">
								<p>© 2022, Sep 30<sup>th</sup>. All Rights Reserved. </p>
							</div>
							<div class="credit">
								<p>Create design by : <a href="#" title>Manoj</a></p>
							</div>
						</div><!--bottom-footer end-->
					</div>
				</div>
			</div>
		</footer><!--footer end-->
		
	</div>


</body>



</html>