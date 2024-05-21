<?php
include("connection/connect.php");
$type=$_GET['type'];


?>
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
							<li> manojkr825313@gmail.com</li>
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
					<h2>Rooms List View</h2>
					<ul></br>
						<li><a href="#">Home</a></li>
						<li><span class="active">Search Result:</span></li>
					</ul>
				</div>
			</div>
		</div>
	
		<section>
			<div class="block">
				<div class="container">
					<div class="row">
						<div class="room-listing-style3">
						
						
					

<?php  

	
	
	

					$mql = "SELECT * FROM booking1 where rtype='$type'";
					
					$res= mysqli_query($db, $mql);
		while($row = mysqli_fetch_array($res))
				{  
			            $r_id =  $row['r_id'];
						$rimage =  $row['rimage'];
						$rtype =  $row['rtype'];
				        $rprice =  $row['rprice'];
						$rtext =  $row['rtext'];
						$raddress = $row['raddress'];
						
					
					
				echo '<div class="col-md-3">';
							echo 		'<div class="room-list-view">';
							echo 			'<figure>';
							echo 			"	<img src='admin/upload/".$rimage." '>";
							echo 			'</figure>';
								echo 		'<div class="room-info style2 style3">';
								echo 			"<h3>".$rtype."</h3>";
								echo 			"<h3>".$raddress."</h3>";		
								echo 			"<p>".$rtext."</p>";
								echo 			'<ul class="feature-dt">';
								
								echo 			'</ul>';
							echo 				'<div class="room-price">';
								echo 				"Rs.<h5>".$rprice."/-</h5>";
							echo 					'<span>Per Night</span>';
							echo 				'</div>';
							echo 				'<a href=booking.php?book='.$r_id.'  class="booking3">Book Now</a>';
							echo 			'</div>';
							echo 		'</div>';
							echo 	'</div>';
	  
	
	
					
			
	
				}
					  
					 
				
				
				
	
    

?>				













					
							
							
							
							
							
							
						
							
							
							
					
							
							
						
						</div><!--room-listing-style3 end-->
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
										
											
										</div>
									</div>
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
										</div><!--news-widget end-->
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
									</div><!--widget-end-->
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
								<p>© 2022, Sep 30<sup>th</sup>  . All Rights Reserved. </p>
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