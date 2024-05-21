
<?php
include("connection/connect.php");
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
		$email=$_POST['email'];	
		$subject=$_POST['subject'];
			$message=$_POST['message'];
			
			
	$sql = "INSERT INTO contact(name,email,subject,message) VALUES('$name', '$email','$subject','$message')";
	mysqli_query($db, $sql);
	

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
								<li> +91 883261947</li>
							<li>Maonojkr825313@gmail.com</li>
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
									<li class="active menu-item-has-children"><a href="index.php" title="">Home</a>
										
									</li>
									
									<li><a href="about.php" title="">About Us</a></li>
										<li><a href="term.php" title="">term & condition </a></li>
									<li><a href="contact.php" title="">Contact Us</a></li>
								</ul>
		 					</nav><!--nav end-->
							
						</div><!--menu-search end-->
						<div class="menu-icon">
							<span class="first-bar"></span>
							<span class="second-bar"></span>
							<span class="third-bar"></span>
						</div>
					</div>
				</div>
			</div><!--bottom-header end-->
		</header><!--Header end-->
	
	<div class="about-bg">
			<div class="container">
				<div class="rl-banner">
					<h2>Contact Us</h2>
					<ul></br>
						<li><a href="#">Home</a></li>
						<li><span class="active">Contact Us</span></li>
					</ul>
				</div>
			</div>
		</div>



		<section>
			<div class="block">
				<div class="container">
					<div class="title f3 mg-btm-40">
						<h3>Contact Us</h3>
					</div><!--title end-->
					<div class="row">
						<div class="col-md-9">
							<div class="contact-form no-pdd">
								<form  action=''  method='post'> 
									<div class="row">
										<div class="col-md-12">
											<input placeholder="Your Name" type="text"  name='name'>
											<i class="fa fa-male"></i>
										</div>
										<div class="col-md-6">
											<input placeholder="Email" type="text"  name='email'>
											<i class="fa fa-envelope"></i>
										</div>
										<div class="col-md-6">
											<input  placeholder="Subject" type="text"  name='subject'>
											<i class="fa fa-book"></i>
										</div>
										<div class="col-md-12">
											<textarea placeholder="Message"  name='message'></textarea>
										</div>
										
										<div class="col-md-12">
											<input type='submit'   name='submit' class="submit style2"/>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="col-md-3">
							<div class="conp">
								<div class="contact-information style2">
									<div class="cn-info">
										<h4>Address</h4>
										<span>LPU Hostel<br>dist. Jalandhar</span>
									</div>
								</div><!--contact-information end-->
								<div class="contact-information style2">
									<div class="cn-info">
										<h4>Phone</h4>
										<span>(+91) 8873261947</span>
									</div>
								</div><!--contact-information end-->
								<div class="contact-information style2">
									<div class="cn-info">
										<h4>Email</h4>
										<span> Manojkr825313@gmail.com</span>
									</div>
								</div><!--contact-information end-->
								
							</div>
						</div>
					</div>
				</div>
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
													<span>$85 night</span>
												</div>
											</div><!--news end-->
											<div class="news">
												<img src="images/resources/sroom2.png" alt="">
												<div class="news-details">
													<h3><a href="#" title="">Luxury Room</a></h3>
													<span>$129 night</span>
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
										</div><!--quick-links end-->
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
										</div>
									</div>
								</div>
							</div>
						</div><!--top-footer end-->
						<div class="bottom-footer">
							<div class="copyright">
								<p>© 2022, Sep 30<sup>th</sup> . All Rights Reserved. </p>
							</div><!--copyright end-->
							<div class="credit">
								<p>Create design by : <a href="#" title>Manoj</a></p>
							</div><!--credit end-->
						</div><!--bottom-footer end-->
					</div>
				</div>
			</div>
		</footer><!--footer end-->





	</div>


</body>


</html>