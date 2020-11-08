<!DOCTYPE html>
<html>
<head>
	<title>Update Promoter</title>
  	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="shortcut icon" href="../../../public/images/promoter/logoOnly.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="../../../public/css/promoter/update-promoter-css.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous"/>
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans&display=swap" rel="stylesheet">
	<script src="../../../public/js/promoter/promoter-dashboard-js.js"></script>
</head>
<body>
	<!-------------- Top-Navigation-Bar ---------------------->
		<header>
			<div class="open-btn" onclick="openNav()">&#9776;</div>
			<nav class="top-nav">
			<ul class="main-nav">
				<li class="logo"><a href="index.php" style="border: none;"><img src="../../../public/images/promoter/SideLogo.png"></a></li>
				<li class="item"><a href=""><i class="fas fa-home"></i>&nbsp;Home</a></li>
				<li class="item"><a href=""><i class="fas fa-users"></i>&nbsp;About Us</a></li>
				<li class="item"><a href=""><i class="fas fa-question-circle"></i>&nbsp;Help & Support</a></li>
				<!-- <li class="item"><a href=""><i class="fas fa-user"></i>&nbsp;&nbsp;Account</a></li>
				<li class="item"><a href=""><i class="fas fa-shopping-cart"></i>&nbsp;Add to cart</a></li> -->
				<li class="push"><input type="search" name="" placeholder="search"><button><i class="fas fa-search"></i> &nbsp;Search</button></li>
				<li class="last">
					<select name="direction" onchange="location = this.value;">
						<option value="../index.php">SELECT</option>
						<option value="../index.php">Logout</option>
						<option value="">Login</option>
					</select>
				</li>
			</ul>
		</nav>
		</header>
		<hr>
		<!-- inner part of the evry dashboard -->
	<div class="container">
		<h2><i class="fas fa-user"></i>&nbsp; &nbsp; Edit Profile Details</h2>
		<div class="inner-part">
			<form action="promoter-dashboard.php" method="post">
				<table>
					<tr>
						<td id="td-1">Your ID:</td>
						<td id="td-2"><input type="number" name="userID" readonly></td>
					</tr>
					<tr>
						<td id="td-1">Name:</td>
						<td id="td-2"><input type="text" name="name" min="0" max="50"></td>
					</tr>
					<tr>
						<td id="td-1">Address line - 1:</td>
						<td id="td-2"><input type="text" name="aLine1"></td>
					</tr>
					<tr>
						<td id="td-1">Address line - 2:</td>
						<td id="td-2"><input type="text" name="aLine2"></td>
					</tr>
					<tr>
						<td id="td-1">City:</td>
						<td id="td-2"><input type="text" name="city"></td>
					</tr>
					<tr>
						<td id="td-1">Country:</td>
						<td id="td-2"><input type="text" name="country"></td>
					</tr>
					<tr>
						<td id="td-1">Status:</td>
						<td id="td-2"><input type="text" name="status"></td>
					</tr>
					<tr>
						<td id="td-1">Birthday:</td>
						<td id="td-2"><input type="date" name="dob" placeholder="year-mm-dd" pattern="[1-9]{4}-[1-12]{2}-[1-30]{2}"></td>
					</tr>
					<tr>
						<td id="td-1">Email:</td>
						<td id="td-2"><input type="email" name="email"></td>
					</tr>
					<tr>
						<td id="td-1">Phone Number:</td>
						<td id="td-2"><input type="telephone" name="phoneNo" placeholder="000-0000000"></td>
					</tr>
				</table>
				<input type="submit" name="submit" value="Submit" class="btn">
			</form>						
		</div><!-- inner-part -->

	</div> <!-- container -->

		<div class="footer">
  			<ul>
  				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  				tempor incididunt ut labore et dolore magna aliqua.</li>
  				<li><a href="">Privacy & Policy</a></li>
  				<li>© Affiliox</li>
  			</ul>
		</div>	<!-- footer -->	

	<div id="mySidenav" class="sidenav">
  		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  		<a href="promoter-dashboard.php">User profile<i class="far fa-user"></i></a>  		
  		<a href="market-place.php">Marker Place<i class="fab fa-shopify"></i></a>
  		<a href="promoter-statistics.php">Statstics<i class="fas fa-chart-line"></i></i></a>
  		<a href="withdraw-earnings.php">Transactions<i class="fas fa-money-check-alt"></i></a>
  		<a href="review-feedback.php">Feedback<i class="fas fa-phone-square"></i></i></a>
  		<a href="support-center.php">Support<i class="fas fa-envelope-open-text"></i></a>
	</div>
	<span onclick="openNav()"></span>

</body>
</html>

