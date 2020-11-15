<!DOCTYPE html>
<html>
<head>
	<title>Add Product</title>
	<!-- <link rel="stylesheet" type="text/css" href="../css/common-dashboard.css"> -->
	<link rel="shortcut icon" href="../images/logoOnly.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="/css/Seller/main.css">
	<link rel="stylesheet" type="text/css" href="/css/Seller/grid.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous"/>
	<link href="https://fonts.googleapis.com/css2?family=Lato&family=Nunito&family=Roboto+Mono&display=swap" rel="stylesheet">
	<script src="/js/Seller/common-dashboard.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
	<!-------------- Top-Navigation-Bar ---------------------->
	<div id="main" class="container navigation">
		<ul class="">
			<li onclick="openNav()">&#9776;</li>
			<li><a href="">Affiliox</a></li></a>
			<li style="float: right;">user-name</li>
		</ul>
		<div class="row">
            <hr class="col12"/>
        </div>
		
		<!-- <div class="Reg-container"> -->
		<div class="row">
			<div class="col12 center title">
				<p>Add Product</p>
				<!-- <hr> -->
			</div> 
				<!------------------Seller Registration Form------------------->
		</div>
		<div class="row row-padding">	
			<div class="col8 col-center inner-part inp">
			<form>
				<!-- <div class= "inp"> -->
				<!-- <h2 style="font-family: 'Lato', sans-serif;">Seller Details</h2> -->
				<div class="row col6 padding">
				<label for="fname"> &nbsp;Name</label><br>
				<input type="text" id="fname" name="fullname" placeholder="">
				</div>
				<div class="row col8 padding">
				<label for="lname">&nbsp; Description</label><br>
				<textarea id="email" name="email" placeholder=""></textarea>
                </div>
                <div class="row">
				<div class="col6 fitcontent padding">
				<label for="phn-no">&nbsp; Quantity</label><br>
				<input type="text" id="phn-no" name="phn-no" placeholder="">
				</div>
				<div class="col6 padding">
				<label for="dob">&nbsp; Price</label><br>
				<input type="text" id="Birth" name="dob" placeholder="">
                </div>
                </div>
				<!------------------Address section------------------->
				<div class="row col6 padding">
				<label for="Address">Commission Rate</label><br>
				<input type="text" id="line1" name="aline1" placeholder="">
				</div>
				<div class="row col6 padding">
				<label for="Address">Images</label><br>
				<input type="file" id="line2" name="aline2" placeholder=""><br>
				</div>

				<!-- </div> -->
			<!------------------Buttons------------------->
				<div class="row col12 padding">
					<button class="center" type="submit" value="submit">Save</button>	
				</div>
			<!-- </div> -->
			</form>
			</div>
		</div>

		<div class="row row-padding">
			<hr class="col12"/>
	    </div>

		<!-- bottom-part-------------------------------------------->
		<div class="row bottom-part">
			<div class="col3 hidden-sm center">
			  <a href=""><img src="../images/LOGO.png" alt="Affiliox LOGO" /></a>
			</div>
	
			<div class="col2">
			  <!-- <ul> -->
				<p>Main Menu</p>
				<a href="">Affiliox Home</a>
				<a href="">About us</a>
				<a href="">Help</a>
				<a href="">Account</a>
			  <!-- </ul> -->
			</div>
			<div class="col2">
			  <!-- <ul> -->
				<p>Company</p>
				<a href="">Address</a>
				<a href="">Email</a>
				<a href="">Help</a>
				<a href="">Account</a>
			  <!-- </ul> -->
			</div>
			<div class="col2">
			  <!-- <ul> -->
				<p>Discover</p>
				<a href="">Home</a>
				<a href="">About us</a>
				<a href="">Help</a>
				<a href="">Account</a>
			  <!-- </ul> -->
			</div>
			<div class="col2">
			  <!-- <ul> -->
				<p>Find Us on</p>
				<a href="">Facebook</a>
				<a href="">Twitter</a>
				<a href="">Instagram</a>
				<a href="">Youtube</a>
			  <!-- </ul> -->
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
		<!-- inner-part -->	
	</div> 
	<div id="mySidenav" class="sidenav">
  		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  		<a href="#">User profile<i class="far fa-user"></i></a>
  		<a href="#">Mini Store<i class="fas fa-store"></i></a>
  		<a href="#">Marker Place<i class="fab fa-shopify"></i></a>
  		<a href="#">Statstics<i class="fas fa-chart-line"></i></i></a>
		<a href="#">View Orders<i class="fas fa-chart-line"></i></i></a>
  		<a href="#">Transactions<i class="fas fa-money-check-alt"></i></a>
  		<a href="#">Feedback<i class="fas fa-phone-square"></i></i></a>
  		<a href="#">Support<i class="fas fa-envelope-open-text"></i></a>
	</div>
	<span onclick="openNav()"></span>

</body>
</html>