<!DOCTYPE html>
<html>
<head>
	<title>Common Dashboard</title>
	<link rel="stylesheet" type="text/css" href="css/common-dashboard.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous"/>
	<link href="https://fonts.googleapis.com/css2?family=Lato&family=Nunito&family=Roboto+Mono&display=swap" rel="stylesheet">
	<script src="js/common-dashboard.js"></script>
</head>
<body>
	<!-------------- Top-Navigation-Bar ---------------------->
	<div id="main" class="navigation">
		<ul>
			<li onclick="openNav()">&#9776;</li>
			<li><a href="">Affiliox</a></li></a>
			<li style="float: right;">user-name</li>
		</ul>
		<hr>	
		<!-- inner part of the evry dashboard -->
		<div class="inner-part">
				<h2 style="font-family: 'Lato', sans-serif;">Profile Details</h2>
			<div class="first-name">
				<h3> First Name</h3>
				<p>Sample Name Is Here</p>
			</div>
			<div class="last-name">
				<h3> Last Name</h3>
				<p>Sample Name Is Here</p>
			</div>
			<div class="email">
				<h3>Email</h3>
				<p>sample@gmail.coms</p>
			</div>
			<!-- <div class="change-details">
				<img src="images/sample-logo.png">
			</div> -->
			<div class="phone-number">
				<h3>Phone Number</h3>
				<p>011-123456</p>
			</div>
			<div class="country">
				<h3>Country</h3>
				<p>Sri Lanka</p>
			</div>
			<div class="address">
				<h3>Address</h3>
				<p>Sample Address</p>
			</div>
		<button>Edit Details</button>						
		</div>
		<div class="footer">
  			<p style="float: left;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  			tempor incididunt ut labore et dolore magna aliqua.</p>
  			<p style="float: right; margin-right: 180px;">© Affiliox</p>
  			<a href="" style="float: right; margin-right: 150px; margin-top: 15px;">Privacy & Policy</a>
		</div>	<!-- inner-part -->	
	</div> 
	<div id="mySidenav" class="sidenav">
  		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  		<a href="#">User profile<i class="far fa-user"></i></a>
  		<a href="#">Mini Store<i class="fas fa-store"></i></a>
  		<a href="#">Marker Place<i class="fab fa-shopify"></i></a>
  		<a href="#">Statstics<i class="fas fa-chart-line"></i></i></a>
  		<a href="#">Transactions<i class="fas fa-money-check-alt"></i></a>
  		<a href="#">Feedback<i class="fas fa-phone-square"></i></i></a>
  		<a href="#">Support<i class="fas fa-envelope-open-text"></i></a>
	</div>
	<span onclick="openNav()"></span>

</body>
</html>

