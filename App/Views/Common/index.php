<!DOCTYPE html>
<html>
<head>
	<title>Affiliox</title>
	<link rel="shortcut icon" href="/images/promoter/logoOnly.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="/css/promoter/index-css.css">
	<script src="/js/Common/cookie.js"></script>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous"/>
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body>

	<!---Navigation bar-------------------------------------------->
		
		<div class="welcome-note">
			<p>Welcome to the Affiliox</p>
		</div> <!-- welcome-note -->

		<div class="slideshow-container">
			  <div class="mySlides fade">
			    <img src="/images/Promoter/carousel1.jpg" style="width: 100%">
			    <div class="text"></div>
			  </div>

			  <div class="mySlides fade">
			    <img src="/images/promoter/carousel2.jpg" style="width: 100%">
			    <div class="text"></div>
			  </div>

			  <div class="mySlides fade">
			    <img src="/images/promoter/carousel3.jpg" style="width: 100%">
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
			<h2>Latest Items</h2>
			<hr>

			<div class="container">

			<?php  
                if(isset($this->UImsg1) and !empty($this->UImsg1)){
					
					while($row1 = $this->UImsg1->fetch_assoc()){           
        	?>	
				<div class="zone">
					<img src="/images/upload/<?php echo $row1['imageCode'] ?>" >
					<h3><?php echo $row1['prodName'] ?></h3>
					<h4><?php echo number_format($row1['price'],2) ?> Rs</h4>
					<!-- <p>Apple i-phone 11 Pro 64GB ROM - 4GB RAM Green</p> -->
					<a href="../Product/View?id=<?php echo $row1['productID'] ?>">Buy Now <i class="fab fa-cc-visa"></i></a> 
					
				</div>
				<?php
						}
					}
				?>
			</div> <!-- container -->	
			
			<h2>Featured Items</h2>
			<hr>

			<div class="container">
			<?php  
                if(isset($this->UImsg2) and !empty($this->UImsg2)){
					
					while($row2 = $this->UImsg2->fetch_assoc()){           
        	?>	
				<div class="zone">
					<img src="/images/upload/<?php echo $row2['imageCode'] ?>" >
					<h3><?php echo $row2['prodName'] ?></h3>
					<h4><?php echo number_format($row2['price'],2) ?> Rs</h4>
					<!-- <p>Apple i-phone 11 Pro 64GB ROM - 4GB RAM Green</p> -->
					<a href="../user/market">Buy Now <i class="fab fa-cc-visa"></i></a> 
					
				</div>
				<?php
						}
					}
				?>
				
  			</div> <!-- container -->		
		</div> <!-- product -->
	
		<!-- <hr style="height:2px;border:none;color:#333;background-color:#333;">	 -->
    	<script src="/js/Promoter/index-script.js"></script>
</body>
</html>
