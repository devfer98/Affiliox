<!DOCTYPE html>
<html>
<head>
	<title>Ministore View</title>
	<link rel="shortcut icon" href="../images/logoOnly.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="/css/Seller/market.css">
	<link rel="stylesheet" type="text/css" href="/css/Seller/main.css">
	<link rel="stylesheet" type="text/css" href="/css/Seller/grid.css">

	<link rel="stylesheet" type="text/css" href="/css/Seller/common.css" />
    <link rel="stylesheet" type="text/css" href="/css/Seller/customer-grid.css" />
    <!-- <script type="text/javascript" src="/js/Seller/sideNav.js"></script> -->
    <!-- <script src="/js/Common/drop.js"></script> -->
    <link rel="stylesheet" type="text/css" href="/css/Seller/drop.css" />

	<link rel="stylesheet" type="text/css" href="/css/promoter/index-css.css">
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous"/>
</head>
<body>

	<!---Navigation bar-------------------------------------------->
	<div class="container commonB">
		<div class="row row-padding dialogBox">
			<button class="center" onclick="location.href='../Ministore/update';">Change</button>
			<button class="center" onclick="location.href='../Ministore/ministore';">Done</button>
		</div>

		<div class="containerN">
			<div class=" ">
				<div class="rowN hidden-xmN marginb100N backcolorN">
					<div class=" nav-barN sm-logo-navN hidden-xmN  sm-headerN backcolorN ">

						<div class="sm-1N open-btnN" onclick="openNav()">&#9776;</div>
						<div class="sm-9N">
							<a href="/index.html"><img src="/images/Logo/Sidelogo.png" alt="Affiliox LOGO" /></a>
						</div>
						<div class="sm-2N">
							<div class="selectorN margint20N">
							<select name="direction" id="select-nav" onchange="location = this.value;">
								<?php if(isset($_SESSION['username']) and !empty($_SESSION['username'])){

								echo '<option value="" selected disabled hidden></option>';
								echo '<option value="../login/logout">Logout</option>';
							}else{
								echo '<option value="" selected disabled hidden></option>';
								echo '<option value="../Signup/create">Signup</option>';
								echo '<option value="../login/index">Login</option>';
					
							}?>
							</select>
							</div>
						</div>
					</div>
				</div>
				<div class=" nav-barN centerN backcolorN">
					<div class="col1N open-btnN hidden-smN" onclick="openNav()"> &#9776;</div>
					<div class="col2N hidden-smN">
						<a href="/index.html"><img src="/images/Logo/Sidelogo.png" alt="Affiliox LOGO" /></a>
					</div>

					<div class="col4N centerN">
						<ul>
							<a href="../Buyer/Index"><i class="fas fa-home"></i>&nbsp;Home</a>
							<a href=""><i class="fas fa-users"></i>&nbsp;About Us</a>
							<a href=""><i class="fas fa-inbox"></i>&nbsp;Help</a>
							<a href=""><i class="fas fa-users"></i>&nbsp;Account</a>
						</ul>
					</div>

					<div class="col4N searchN fullWidthN centerN">
						<ul>
							<input type="text" name="search" placeholder="Headsets" />
							<a href=""><i class="fas fa-search"></i></a>
						</ul>
					</div>
					<div class="col1N hidden-smN">
						<div class="selectorN margint20N">

							<select name="direction" id="select-nav" onchange="location = this.value;">
								<?php if(isset($_SESSION['username']) and !empty($_SESSION['username'])){

								echo '<option value="" selected disabled hidden></option>';
								echo '<option value="../login/logout">Logout</option>';
							}else{
								echo '<option value="" selected disabled hidden></option>';
								echo '<option value="../Signup/create">Signup</option>';
								echo '<option value="../login/index">Login</option>';
					
							}?>
							</select>

						</div>

					</div>
				</div>
			</div>

			<div class="fullwidthN col12N">
				<div class=" fullwidthN">
					<hr>
				</div>
			</div>
		</div>

		<!-- <div class="container"> -->

		<div class="welcome-note">
			<p>Welcome to the Affiliox home page </p>
		</div> <!-- welcome-note -->
		<div class="slideshow-container">

			  <div class="mySlides fade">
			    <div class="numbertext">1 / 3</div>
			    <img src="/images/Promoter/carousel-1.jpg" style="width: 100%">
			    <div class="text">Hello Customer !</div>
			  </div>

			  <div class="mySlides fade">
			    <div class="numbertext">2 / 3</div>
			    <img src="/images/promoter/carousel-2.jpg" style="width: 100%">
			    <div class="text">Hello Seller !</div>
			  </div>

			  <div class="mySlides fade">
			    <div class="numbertext">3 / 3</div>
			    <img src="/images/promoter/carousel-3.jpg" style="width: 100%">
			    <div class="text">Hello Promoter !</div>
			  </div>
		</div>  <!-- slideshow-container -->
			<br>

			<!-- The dots/circles -->
			<div style="text-align:center">
			  <span class="dot" onclick="currentSlide(1)"></span>
			  <span class="dot" onclick="currentSlide(2)"></span>
			  <span class="dot" onclick="currentSlide(3)"></span>
			</div>

		<!--featured -------------------------------------------->
		<div class="featured">
			<h2>Featured Items</h2>
			<hr>
			<div class="card">
  				<img src="/images/promoter/i-phone.png" alt="Denim Jeans" style="width:100%">
  					<h4>Apple iPhone 11 Pro</h4>
  					<p class="price">$1311.02</p>
  					<p>Apple iPhone 11 Pro 64GB ROM - 4GB RAM - Green</p>
  					<p><button>Buy Now &nbsp; <i class="fab fa-cc-visa"></i></button><button>Add to Cart <i class="fas fa-shopping-cart"></i></button></p>
			</div>

			<div class="card">
  				<img src="/images/promoter/i pod.png" alt="Denim Jeans" style="width:100%">
  					<h4>i12 Pods</h4>
  					<p class="price">$7.27</p>
  					<p>i12 Pods TWS Wireless Bluetooth headset</p>
  					<p><button>Buy Now &nbsp; <i class="fab fa-cc-visa"></i></button><button>Add to Cart <i class="fas fa-shopping-cart"></i></button></p>
			</div>

			<div class="card">
  				<img src="/images/promoter/watch.png" alt="Denim Jeans" style="width:100%">
  					<h4>Bostanten Watches</h4>
  					<p class="price">$10.74</p>
  					<p>Bostanten Watches For Men Latest Business Original</p>
  					<p><button>Buy Now &nbsp; <i class="fab fa-cc-visa"></i></button><button>Add to Cart <i class="fas fa-shopping-cart"></i></button></p>
			</div>

			<div class="card">
  				<img src="/images/promoter/nike-shoe.png" alt="Denim Jeans" style="width:100%">
  					<h4>Nike Running Shoe</h4>
  					<p class="price">$42.07</p>
  					<p>Nike Running Shoe_Imported Quality</p>
  					<p><button>Buy Now &nbsp; <i class="fab fa-cc-visa"></i></button><button>Add to Cart <i class="fas fa-shopping-cart"></i></button></p>
			</div>
			<div class="card">
  				<img src="/images/promoter/action-camera.jpg" alt="Denim Jeans" style="width:100%">
  					<h4>Apple iPhone 11 Pro</h4>
  					<p class="price">$1311.02</p>
  					<p>Apple iPhone 11 Pro 64GB ROM - 4GB RAM - Green</p>
  					<p><button>Buy Now <i class="fab fa-cc-visa"></i></button><button>Add to Cart <i class="fas fa-shopping-cart"></i></button></p>
			</div>

			<div class="card">
  				<img src="/images/promoter/drone.jpg" alt="Denim Jeans" style="width:100%">
  					<h4>Apple iPhone 11 Pro</h4>
  					<p class="price">$1311.02</p>
  					<p>Apple iPhone 11 Pro 64GB ROM - 4GB RAM - Green</p>
  					<p><button>Buy Now <i class="fab fa-cc-visa"></i></button><button>Add to Cart <i class="fas fa-shopping-cart"></i></button></p>
			</div>

			<div class="card">
  				<img src="/images/promoter/t-shirt.png" alt="Denim Jeans" style="width:100%">
  					<h4>Apple iPhone 11 Pro</h4>
  					<p class="price">$1311.02</p>
  					<p>Apple iPhone 11 Pro 64GB ROM - 4GB RAM - Green</p>
  					<p><button>Buy Now <i class="fab fa-cc-visa"></i></button><button>Add to Cart <i class="fas fa-shopping-cart"></i></button></p>
			</div>

			<div class="card">
  				<img src="/images/promoter/dslr.jpg" alt="Denim Jeans" style="width:100%">
  					<h4>Apple iPhone 11 Pro</h4>
  					<p class="price">$1311.02</p>
  					<p>Apple iPhone 11 Pro 64GB ROM - 4GB RAM - Green</p>
  					<p><button>Buy Now <i class="fab fa-cc-visa"></i></button><button>Add to Cart <i class="fas fa-shopping-cart"></i></button></p>
			</div>
		</div> <!-- featured -->
			<br>

		<!-- latest item list -------------------------------------------->
		<div class="latest">
			<h2>Latest Items</h2>
			<hr>
			<div class="card">
  				<img src="/images/promoter/action-camera.jpg" alt="Denim Jeans" style="width:100%">
  					<h4>Apple iPhone 11 Pro</h4>
  					<p class="price">$1311.02</p>
  					<p>Apple iPhone 11 Pro 64GB ROM - 4GB RAM - Green</p>
  					<p><button>Buy Now <i class="fab fa-cc-visa"></i></button><button>Add to Cart <i class="fas fa-shopping-cart"></i></button></p>
			</div>

			<div class="card">
  				<img src="/images/promoter/drone.jpg" alt="Denim Jeans" style="width:100%">
  					<h4>Apple iPhone 11 Pro</h4>
  					<p class="price">$1311.02</p>
  					<p>Apple iPhone 11 Pro 64GB ROM - 4GB RAM - Green</p>
  					<p><button>Buy Now <i class="fab fa-cc-visa"></i></button><button>Add to Cart <i class="fas fa-shopping-cart"></i></button></p>
			</div>

			<div class="card">
  				<img src="/images/promoter/t-shirt.png" alt="Denim Jeans" style="width:100%">
  					<h4>Apple iPhone 11 Pro</h4>
  					<p class="price">$1311.02</p>
  					<p>Apple iPhone 11 Pro 64GB ROM - 4GB RAM - Green</p>
  					<p><button>Buy Now <i class="fab fa-cc-visa"></i></button><button>Add to Cart <i class="fas fa-shopping-cart"></i></button></p>
			</div>

			<div class="card">
  				<img src="/images/promoter/dslr.jpg" alt="Denim Jeans" style="width:100%">
  					<h4>Apple iPhone 11 Pro</h4>
  					<p class="price">$1311.02</p>
  					<p>Apple iPhone 11 Pro 64GB ROM - 4GB RAM - Green</p>
  					<p><button>Buy Now <i class="fab fa-cc-visa"></i></button><button>Add to Cart <i class="fas fa-shopping-cart"></i></button></p>
			</div>

			<div class="card">
  				<img src="/images/promoter/i-phone.png" alt="Denim Jeans" style="width:100%">
  					<h4>Apple iPhone 11 Pro</h4>
  					<p class="price">$1311.02</p>
  					<p>Apple iPhone 11 Pro 64GB ROM - 4GB RAM - Green</p>
  					<p><button>Buy Now &nbsp; <i class="fab fa-cc-visa"></i></button><button>Add to Cart <i class="fas fa-shopping-cart"></i></button></p>
			</div>

			<div class="card">
  				<img src="/images/promoter/i pod.png" alt="Denim Jeans" style="width:100%">
  					<h4>i12 Pods</h4>
  					<p class="price">$7.27</p>
  					<p>i12 Pods TWS Wireless Bluetooth headset</p>
  					<p><button>Buy Now &nbsp; <i class="fab fa-cc-visa"></i></button><button>Add to Cart <i class="fas fa-shopping-cart"></i></button></p>
			</div>

			<div class="card">
  				<img src="/images/promoter/watch.png" alt="Denim Jeans" style="width:100%">
  					<h4>Bostanten Watches</h4>
  					<p class="price">$10.74</p>
  					<p>Bostanten Watches For Men Latest Business Original</p>
  					<p><button>Buy Now &nbsp; <i class="fab fa-cc-visa"></i></button><button>Add to Cart <i class="fas fa-shopping-cart"></i></button></p>
			</div>

			<div class="card">
  				<img src="/images/promoter/nike-shoe.png" alt="Denim Jeans" style="width:100%">
  					<h4>Nike Running Shoe</h4>
  					<p class="price">$42.07</p>
  					<p>Nike Running Shoe_Imported Quality</p>
  					<p><button>Buy Now &nbsp; <i class="fab fa-cc-visa"></i></button><button>Add to Cart <i class="fas fa-shopping-cart"></i></button></p>
			</div>
		<br><br>
		</div> <!-- latest -->

		
		<div class="rowN fullwidthN">
			<div class="col12N fullwidthN">
				<hr>
			</div>
		</div>
		<div class="rowN centerN backcolorN">
			<div class=" col3N img-spanN hidden-smN">
				<td><img src="/images/Logo/SideLogo.png" width='200'></td>
			</div>

			<div class="col9N  nav-barN centerN">
				<table class="rowN centerN sm-tableN">
					<tr class="theadN centerN">

						<td>Main Menu</td>
						<td>Find us On</td>
						<td>Contact us</td>
					</tr>

					<tr>
						<!-- <td></td> -->
						<td><a href="">About Affiliox <i class="fas fa-users"></i></a></td>
						<td><a href=""></i>FaceBook <i class="fab fa-facebook-f"></i></a></td>
						<td>Address: Sri Lanka.</td>
					</tr>
					<tr>
						<!-- <td></td> -->
						<td><a href="">Help & Support <i class="fas fa-question-circle"></a></td>
						<td><a href="">Twitter <i class="fab fa-twitter"></i></a></td>
						<td>Phone: 011-1234567</td>
					</tr>
					<tr>
						<!-- <td></td> -->
						<td><a href="">Privacy & Policy <i class="fas fa-shield-alt"></i></a></td>
						<td><a href="">Youtube <i class="fab fa-youtube"></i></a></td>
						<td>Email: affiliox@gmail.com</td>
					</tr>

				</table>
			</div>

		</div>
		<div class="rowN footerN backcolorN paddingt20N">

			<ul>
				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.</li>
				<li> Affiliox &trade;</li>
			</ul>
		</div>
	</div> 
</body>
</html>