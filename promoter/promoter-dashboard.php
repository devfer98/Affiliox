<?php require_once('../include/connection.php'); ?>

<?php 
	

	$promoter_details = '';

	//getting the details of the registerd user
	$query = "SELECT * FROM promoter WHERE userID = '{userID}' ";
	$details 	= mysqli_query($connection, $query);

	if ($details) {
		while ($detail = mysqli_fetch_assoc($details)) {

		}
	} else {
		echo "Database query error";
	}

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Promoter Dashboard</title>
	<link rel="shortcut icon" href="images/affiliox.png" type="image/x-icon">
  	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/promoter-dashboard-css.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous"/>
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans&display=swap" rel="stylesheet">
	<script src="js/promoter-dashboard-js.js"></script>
</head>
<body>
	<!-------------- Top-Navigation-Bar ---------------------->
		<header>
			<div class="open-btn" onclick="openNav()">&#9776;</div>
			<nav class="top-nav">
			<ul class="main-nav">
				<li class="logo-name"><a href="">Affiliox</a></li>
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
		<h2><i class="fas fa-user"></i>&nbsp; &nbsp;Profile Details</h2>
		<div class="inner-part">
			<table>
				<tr>
					<td id="td-1">Your Name :</td>
					<td><?php $promoter_details = "{$detail['name']};</td>"?></td>
				</tr>
				<tr>
					<td id="td-1">Date of Birth :</td>
					<td><?php $promoter_details = "{$detail['dob']}"; ?></td>
				</tr>
				<tr>
					<td id="td-1">Account ID :</td>
					<td>2</td>
				</tr>
				<tr>
					<td id="td-1">Primary Email :</td>
					<td>sample@gmail.com</td>
				</tr>
				<tr>
					<td id="td-1">Mobile Number :</td>
					<td>Sample number is here</td>
				</tr>
				<tr>
					<td id="td-1">Address :</td>
					<td>Sample address is here</td>
				</tr>
				<tr>
					<td id="td-1">Country :</td>
					<td>Sample state is here</td>
				</tr>

				<?php echo $promoter_details; ?>

			</table>

			<form action="update-promoter.php">
				<input type="submit" name="edit-details" value="Edit Details">
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

<?php mysqli_close($connection) ?>
