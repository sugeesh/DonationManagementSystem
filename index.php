<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Donation System</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,300,200,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
<!-- js -->
<script src="js/jquery.min.js"></script>
<!-- //js -->
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Black and White Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
</head>
<body>
<!-- banner -->
<!-- header -->
	<div class="banner">
		<div class="header">
		<div class="container">
			<div class="banner-nav">
				<span class="menu"><img src="images/menu.png" alt=" "/></span>	
					<ul class="nav1">
								<nav class="cl-effect-3">
									<li><a href="index.php" class="act">Home</a></li>
									<li><a href="./parent_view/login.php">Apply Apllication</a></li>
                                    <li><a href="./donor_view/login.php">Donate Today</a></li>
                                    <li><a href="./school_view/login.php">School LogIn</a></li>
									<li><a class="scroll" href="#contact">Contact Us</a></li>
								</nav>
					</ul>
							

			</div>
				<!-- script for menu -->
						<script> 
							$( "span.menu" ).click(function() {
							$( "ul.nav1" ).slideToggle( 300, function() {
							 // Animation complete.
							});
							});
						</script>
					<!-- //script for menu -->
		</div>
		</div>
<!-- //header-->
<!-- Slider-starts-Here -->		
				<script src="js/responsiveslides.min.js"></script>
				 <script>
				    // You can also use "$(window).load(function() {"
				    $(function () {
				      // Slideshow 4
				      $("#slider3").responsiveSlides({
				        auto: true,
				        pager: true,
				        nav: false,
				        speed: 500,
				        namespace: "callbacks",
				        before: function () {
				          $('.events').append("<li>before event fired.</li>");
				        },
				        after: function () {
				          $('.events').append("<li>after event fired.</li>");
				        }
				      });
				
				    });
				  </script>
			<!--//End-slider-script -->
			<div  id="top" class="callbacks_container">
				<ul class="rslides" id="slider3">
					<li>
							<div class="banner-info">
								<h3>We creates educational opportunity for poor children.</h3>
								<p>We are driven by our global mission to help reach children that do not receive even the most basic education.</p>
								<div class="more">
                                    <a href="./donor_view/login.php">DONATE TODAY</a>
								</div>
							</div>
					</li>
					<li>
							<div class="banner-info">
								<h3>OUR Vision</h3>
								<p>To teach the unreached: where children in remote and post-conflict areas have access to basic education and improved life chances.</p>
								<div class="more">
                                    <a href="./donor_view/login.php">DONATE TODAY</a>
								</div>
							</div>
					</li>
					<li>
							<div class="banner-info">
								<h3>Make a difference today</h3>
								<p>You can register to our site and donate any poor child you like.</p>
								<div class="more">
									<a href="./donor_view/login.php">DONATE TODAY</a>
								</div>
							</div>
					</li>
				</ul>
			</div>
	</div>
<!-- //banner -->
<!-- banner-bottom -->

<!-- //banner-bottom -->
<!-- team -->

<!-- //blog -->
<!-- contact -->
	<div id="contact" class="contact">
	<div class="container">
		<h3>Contact Us</h3>
		<p class="para2">We know what we need to do</p>
		<div class="contact-grids">
			<div class="contact-grid">
				<div class="contact-fig">
					<span> </span>
				</div>
				<p>077-2424255</p>
			</div>
			<div class="contact-grid">
				<div class="contact-fig1">
					<span> </span>
				</div>
				<p>University of Moratuwa</p>
			</div>
			<div class="contact-grid">
				<div class="contact-fig2">
					<span> </span>
				</div>
				<p><a href="mailto:info@example.com">uom@mrt.lk</a></p>
			</div>
			<div class="clearfix"> </div>
		</div>
		<form>
			<input type="text" placeholder="Full Name" required=" ">
			<input type="text" placeholder="Email" required=" ">
			<input type="text" placeholder="Number" required=" ">
			<textarea placeholder="Write your Message here..." required=" "></textarea>
			<input type="submit" value="Submit">
		</form>
	</div>
	</div>
<!-- //contact -->
<!-- footer -->
	<div class="footer">
	<div class="container">
		<p>Copyright &copy; 2016 All Rights  Reserved </a></p>
	</div>
	</div>
<!-- //footer -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>