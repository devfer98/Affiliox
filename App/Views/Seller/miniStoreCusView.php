<!DOCTYPE html>
<html>
<head>
	<title>Affiliox</title>
	<link rel="shortcut icon" href="/images/promoter/logoOnly.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="/css/Seller/store-index.css">
	<script src="/js/Common/cookie.js"></script>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous"/>
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans&display=swap" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="/css/Seller/grid.css">
</head>
<?php
	if(isset($this->store) and !empty($this->store)){
		while($row = $this->store->fetch_assoc()){ 
			$attributes=explode(", ", $row["design"]);

	$navColor=$attributes[1];
	$buttonColor=$attributes[2];
	$font=$attributes[0];
	$header="../App/Views/Templete/User_header.php";
	$footer="../App/Views/Templete/User_footer.php";
	echo "<style>.design {font-family: ".$font.";}";
	echo ".design {color:".$buttonColor.";}</style>";
	// require $header;
	?>
<body>
	<div class="row dialogBox commonB"></div>
	<div  style="position:absolute;background-color:<?php echo $navColor ?>;width:100%;height:50px;">
		</div>
	<!---Navigation bar-------------------------------------------->
	<div class="design"style="background-color:<?php echo $navColor ?>;">
		<div class="welcome-note">
			<p>Welcome to the <?php echo $row["name"]?></p>
		</div> <!-- welcome-note -->

		<div class="slideshow-container">
			  <div class="mySlides fade">
			    <img src="/images/Ministore/<?php echo $row["name"]?>_slider_1.jpg" style="width: 100%; height:498px;">
			    <div class="text"></div>
			  </div>

			  <div class="mySlides fade">
			    <img src="/images/Ministore/<?php echo $row["name"]?>_slider_2.jpg" style="width: 100%; height:498px;">
			    <div class="text"></div>
			  </div>

			  <div class="mySlides fade">
			    <img src="/images/Ministore/<?php echo $row["name"]?>_slider_3.jpg" style="width: 100%; height:498px;">
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

			<div class="product">
			<h2>Products</h2>
			<hr>

			<div class="container">
				<div class="zone">
					<img src="/images/promoter/drone.jpg" alt="">
					<h3>Apple i-phone 11 Pro</h3>
					<h4>125.34 USD</h4>
					<p>Apple i-phone 11 Pro 64GB ROM - 4GB RAM Green</p>
					<a href="">Buy Now <i class="fab fa-cc-visa"></i></a> 
					<a href="">Add to Cart <i class="fas fa-shopping-cart"></i></a>
				</div>
			</div> <!-- container -->	
			<!-- <div class="container">
				<div class="zone">
					<img src="/images/promoter/drone.jpg" alt="">
					<h3>Apple i-phone 11 Pro</h3>
					<h4>125.34 USD</h4>
					<p>Apple i-phone 11 Pro 64GB ROM - 4GB RAM Green</p>
					<a href="">Buy Now <i class="fab fa-cc-visa"></i></a>
					<a href="">Add to Cart <i class="fas fa-shopping-cart"></i></a>
				</div>
				
  			</div> -->
			
			<!-- <h2>Latest Items</h2>
			<hr>

			<div class="container">
				<div class="zone">
					<img src="/images/promoter/drone.jpg" alt="">
					<h3>Apple i-phone 11 Pro</h3>
					<h4>125.34 USD</h4>
					<p>Apple i-phone 11 Pro 64GB ROM - 4GB RAM Green</p>
					<a href="">Buy Now <i class="fab fa-cc-visa"></i></a>
					<a href="">Add to Cart <i class="fas fa-shopping-cart"></i></a>
				</div>
				
  			</div>	 -->
		</div> <!-- product -->
	
		<!-- <hr style="height:2px;border:none;color:#333;background-color:#333;">	 -->
    	<script src="/js/Promoter/index-script.js"></script>

	
		</div>
</body>
</html>
<?php
			}
		}	
	?>
<?php
	// include $footer;
	?>

