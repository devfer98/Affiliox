<!DOCTYPE html>
<html>
<head>
	<title>Seller Profile</title>
	<!-- <link rel="stylesheet" type="text/css" href="../css/common-dashboard.css"> -->
	<link rel="shortcut icon" href="../images/logoOnly.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="/css/Seller/main.css">
	<link rel="stylesheet" type="text/css" href="/css/Seller/grid.css">
	<link rel="stylesheet" type="text/css" href="/css/Seller/sellerProfile.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous"/>
	<!-- <link href="https://fonts.googleapis.com/css2?family=Lato&family=Nunito&family=Roboto+Mono&display=swap" rel="stylesheet"> -->
	<!-- <script src="/js/Seller/common-dashboard.js"></script> -->
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
			<!-- <h2><i class="fas fa-user"></i>&nbsp; &nbsp;Seller Profile Details</h2> -->
			<div>
			<div class="row">
				<div class="col12 center title">
					<p><i class="fas fa-user"></i>&nbsp; &nbsp;Seller Profile Details</p>
					<!-- <hr> -->
				</div> 
			</div>
			<div class="row row-padding">
			<div class="col6 col-center inner-part inp data">
			<div class="row">
                <?php  
                if(isset($this->sellerUser) and !empty($this->sellerUser)){
					while($row = $this->sellerUser->fetch_assoc()){           
            	?>
				<table>
					<tr>
						<td id="td-1">Your Name:</td>
						<td><?php echo $row['name'] ?></td>
					</tr>
					<tr>
						<td id="td-1">Username:</td>
						<td><?php echo $row['userID'] ?></td>
					</tr>
					<tr>
						<td id="td-1">Date of Birth:</td>
						<td><?php echo $row['dob'] ?></td>
					</tr>
					<tr>
						<td id="td-1">Gender:</td>
						<td><?php echo $row['gender'] ?></td>
					</tr>
					<tr>
						<td id="td-1">Primary Email:</td>
						<td><?php echo $row['email'] ?></td>
					</tr>
					<tr>
						<td id="td-1">Mobile Number:</td>
						<td><?php echo $row['phoneNo'] ?>e</td>
					</tr>
					<tr>
						<td id="td-1">Marital Status:</td>
						<td><?php echo $row['status'] ?>e</td>
					</tr>
					<tr>
						<td id="td-1">Address:</td>
						<td><?php echo $row['aLine1'] ;echo $row['aLine2']; echo $row['city'] ?></td>
					</tr>
					<tr>
						<td id="td-1">Country:</td>
						<td><?php echo $row['country'] ?></td>
					</tr>
					<tr>
						<td id="td-1">Store Name:</td>
						<td><?php echo $row['storeName'] ?></td>
					</tr>
					<tr>
						<td id="td-1">Warning Count:</td>
						<td><?php echo $row['warningCount'] ?></td>
					</tr>
				</table>
				<?php
                     }
                }
                ?>
			
				<div class="row col12 commonB padding">
				<!-- <form action="update-promoter.php" style="text-align: center;"> -->
					<button class="center" onclick="location.href='/Seller/passEdit';">Change Password</button>
					<button class="center" onclick="location.href='/Seller/profileEdit';">Edit Details</button>
				<!-- </form>					 -->
				</div>
			
			</div><!-- inner-part -->
			</div>
		</div> <!-- container -->
		<!-- <div class="row row-padding">
			<hr class="col12"/>
	    </div>

		<div class="row bottom-part">
			<div class="col3 hidden-sm center">
			  <a href=""><img src="../images/LOGO.png" alt="Affiliox LOGO" /></a>
			</div>
	
			<div class="col2">
				<p>Main Menu</p>
				<a href="">Affiliox Home</a>
				<a href="">About us</a>
				<a href="">Help</a>
				<a href="">Account</a>
			</div>
			<div class="col2">
				<p>Company</p>
				<a href="">Address</a>
				<a href="">Email</a>
				<a href="">Help</a>
				<a href="">Account</a>
			</div>
			<div class="col2">
				<p>Discover</p>
				<a href="">Home</a>
				<a href="">About us</a>
				<a href="">Help</a>
				<a href="">Account</a>
			</div>
			<div class="col2">
				<p>Find Us on</p>
				<a href="">Facebook</a>
				<a href="">Twitter</a>
				<a href="">Instagram</a>
				<a href="">Youtube</a>
			</div>
		  </div>
	
		  <div class="row">
			<div class="col12 company-address">
			  <ul>
				<li>© All Right reserved</li>
				<li>Affiliox 2020 ™</li>
			  </ul>
			</div>
		  </div>
	</div>  -->
</body>
</html>