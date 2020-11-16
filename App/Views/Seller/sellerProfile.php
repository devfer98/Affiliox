<!DOCTYPE html>
<html>
<head>
	<title>Seller Profile</title>
	<!-- <link rel="stylesheet" type="text/css" href="../css/common-dashboard.css"> -->
	<!-- <link rel="shortcut icon" href="../images/logoOnly.png" type="image/x-icon"> -->
	<link rel="stylesheet" type="text/css" href="/css/Seller/main.css">
	<link rel="stylesheet" type="text/css" href="/css/Seller/grid.css">
	<link rel="stylesheet" type="text/css" href="/css/Seller/sellerProfile.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous"/>
	<!-- <link href="https://fonts.googleapis.com/css2?family=Lato&family=Nunito&family=Roboto+Mono&display=swap" rel="stylesheet"> -->
	<script src="/js/Seller/common-dashboard.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
	<!-------------- Top-Navigation-Bar ---------------------->
	<!-- <div id="main" class="container navigation">
		<ul class="">
			<li onclick="openNav()">&#9776;</li>
			<li><a href="">Affiliox</a></li></a>
			<li style="float: right;">user-name</li>
		</ul>
		<div class="row row-padding">
			<hr class="col12"/>
		</div>
	</div>

	<div id="mySidenav" class="sidenav">
  		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  		<a href="/Seller/profile">User profile<i class="far fa-user"></i></a>
  		<a href="/MiniStore/ministore">Mini Store<i class="fas fa-store"></i></a>
  		<a href="#">Marker Place<i class="fab fa-shopify"></i></a>
  		<a href="/Seller/statistics">Statstics<i class="fas fa-chart-line"></i></i></a>
		<a href="/Seller/order">View Orders<i class="fas fa-chart-line"></i></i></a>
  		<a href="/Seller/transaction">Transactions<i class="fas fa-money-check-alt"></i></a>
  		<a href="/Seller/feedback">Feedback<i class="fas fa-phone-square"></i></i></a>
  		<a href="/Seller/support">Support<i class="fas fa-envelope-open-text"></i></a>
	</div>
	<span onclick="openNav()"></span> -->

	<div class="container">
	<?php 
		//if(session_id() == '') {
		//         session_start();
		//     }
		//if(isset($_SESSION['type']) && ($_SESSION['type'] == 'seller') ){
			require "sellerHeader.php";
		//}else{
			// header("Location:../Login/index");	
		//}
	?>
	</div>

		<div class="container1">
			<h2><i class="fas fa-user"></i>&nbsp; &nbsp;Seller Profile Details</h2>
			<!-- <div class="inner-part"> -->
			<div>
				<table>
					<tr>
						<td id="td-1">Your Name:</td>
						<td>Sample name is here</td>
					</tr>
					<tr>
						<td id="td-1">Date of Birth:</td>
						<td>Sample DOB is here</td>
					</tr>
					<tr>
						<td id="td-1">Primary Email:</td>
						<td>sample@gmail.com</td>
					</tr>
					<tr>
						<td id="td-1">Mobile Number:</td>
						<td>Sample number is here</td>
					</tr>
					<tr>
						<td id="td-1">Address:</td>
						<td>Sample address is here</td>
					</tr>
					<tr>
						<td id="td-1">State:</td>
						<td>Sample state is here</td>
					</tr>
				</table>
	
				<form action="update-promoter.php" style="text-align: center;">
					<input type="submit" name="edit-details" value="Edit Details">
				</form>					
			</div><!-- inner-part -->
	
		</div> <!-- container -->

	<div class="container">
	<?php 
		//if(session_id() == '') {
		//         session_start();
		//     }
		//if(isset($_SESSION['type']) && ($_SESSION['type'] == 'seller') ){
			require "sellerFooter.php";
		//}else{
			// header("Location:../Login/index");	
		//}
	?>
		<!-- inner-part -->	
	</div> 

</body>
</html>