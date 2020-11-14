<!DOCTYPE html>
<html>
<?php echo $_SESSION['type']; ?>
<head>
	<title>Affiliox</title>
	<link rel="shortcut icon" href="/images/promoter/logoOnly.png" type="image/x-icon">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="/css/promoter/index-css.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous"/>
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body>

		<!---Navigation bar-------------------------------------------->
	<header>
		<nav class="top-nav">
			<ul class="main-nav">
				<li class="logo"><a href="index.php" style="border: none;"><img src="/images/Promoter/SideLogo.png"></a></li>
				<!-- <li class="logo-name"><a href="">Affiliox</a></li> -->
				<li class="item"><a href=""><i class="fas fa-home"></i>&nbsp;Home</a></li>
				<li class="item"><a href=""><i class="fas fa-users"></i>&nbsp;About Us</a></li>
				<li class="item"><a href=""><i class="fas fa-question-circle"></i>&nbsp;Help & Support</a></li>
				<li class="item"><a href=""><i class="fas fa-user"></i>&nbsp;&nbsp;Account</a></li>
				<li class="item"><a href=""><i class="fas fa-shopping-cart"></i>&nbsp;Add to cart</a></li>
				<li class="push"><input type="search" name="" placeholder="search"><button><i class="fas fa-search"></i> &nbsp;Search</button></li>
				<li class="last">
				<form>
				<select name="direction" id="select-nav" onchange="location = this.value;">
				<?php if(isset($_SESSION['username']) and !empty($_SESSION['username'])){

						echo '<option value="" selected disabled hidden></option>';
						echo '<option value="../index.php">Logout</option>';
				}else{
						echo '<option value="" selected disabled hidden></option>';
						echo '<option value="../Signup/create">Signup</option>';
						echo '<option value="../login/index">Login</option>';

				
				}?>
                     </select>
				</form>	
				</li>
			</ul>
		</nav>
	</header>
	<hr id="first-hr">

	<!-- welcome-note --------------------------------------------->	
	<div class="container">

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
		</div> <!-- latest -->
			<hr>
		</div> <!-- container -->

		<!-- bottom-part-------------------------------------------->
		<div class="bottom-part">
			<table>
				<tr class="thead">
					<td rowspan="4"><img src="/images/promoter/affiliox.png" height='150' width='150'></td>
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
		</div> <!-- bottom-part -->
		
		<div class="footer">
  			<ul>
  				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  				tempor incididunt ut labore et dolore magna aliqua.</li>
  				<li> Affiliox &trade;</li>
  			</ul>
		</div>	 <!-- footer -->
		<script src="/js/Promoter/index-script.js"></script>
</body>
</html>
