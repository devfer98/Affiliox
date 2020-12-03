<!DOCTYPE html>

<html>
<?php $_SESSION['type']='promoter'; ?>

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

	<!-- welcome-note --------------------------------------------->	
	<div class="container">

		<div class="welcome-note">
			<p>Welcome to the Affiliox</p>
		</div> <!-- welcome-note -->
		<div class="slideshow-container">

			  <div class="mySlides fade">
			    <div class="numbertext">1 / 3</div>
			    <img src="/images/Promoter/cr1.jpg" style="width: 100%">
			    <div class="text"></div>
			  </div>

			  <div class="mySlides fade">
			    <div class="numbertext">2 / 3</div>
			    <img src="/images/promoter/cr2.png" style="width: 100%">
			    <div class="text"></div>
			  </div>

			  <div class="mySlides fade">
			    <div class="numbertext">3 / 3</div>
			    <img src="/images/promoter/cr3.png" style="width: 100%">
			    <div class="text"></div>
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
  				<img src="/images/promoter/drone.jpg" alt="Denim Jeans" style="width:100%">
  					<h4>Inspire 1</h4>
  					<p class="price">$10.74</p>
  					<p>Inspire 1 -Rotatable Drone</p>
					  <p><button onclick="location.href='../Promoter/Product'">Buy Now &nbsp; <i class="fab fa-cc-visa"></i></button>
					  <button onclick="location.href='../User/ShoppingCart'">Add to Cart <i class="fas fa-shopping-cart"></i></button></p>
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
		</div> <!-- featured -->
			<br>

		<!-- latest item list -------------------------------------------->
		<div class="latest">
			<h2>Latest Items</h2>
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
  				<img src="/images/promoter/i-phone.png" alt="Denim Jeans" style="width:100%">
  					<h4>Apple iPhone 11 Pro</h4>
  					<p class="price">$1311.02</p>
  					<p>Apple iPhone 11 Pro 64GB ROM - 4GB RAM - Green</p>
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
	
		</div> <!-- container -->
		<hr style="height:2px;border:none;color:#333;background-color:#333;">

		
    <script src="/js/Promoter/index-script.js"></script>
</body>
</html>
