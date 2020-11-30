<!DOCTYPE html>
<html>
<head>
	<title>Ministore View</title>
	<link rel="shortcut icon" href="../images/logoOnly.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="/css/Seller/market.css">
	<link rel="stylesheet" type="text/css" href="/css/Seller/main.css">
	<link rel="stylesheet" type="text/css" href="/css/Seller/grid.css">

	<link rel="stylesheet" type="text/css" href="/css/Seller/common.css" />
    <link rel="stylesheet" type="text/css" href="/css/Seller/customer-grid.css" />
    <!-- <script type="text/javascript" src="/js/Seller/sideNav.js"></script> -->
    <!-- <script src="/js/Common/drop.js"></script> -->
    <link rel="stylesheet" type="text/css" href="/css/Seller/drop.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous"/>
</head>
<body>

	<!---Navigation bar-------------------------------------------->
	<div class="container commonB">
		<div class="row row-padding dialogBox">
			<button class="center" onclick="location.href='../Ministore/update';">Change</button>
			<button class="center" onclick="location.href='../Ministore/ministore';">Done</button>
		</div>

		<div class="containerN">
			<div class=" ">
				<div class="rowN hidden-xmN marginb100N backcolorN">
					<div class=" nav-barN sm-logo-navN hidden-xmN  sm-headerN backcolorN ">

						<div class="sm-1N open-btnN" onclick="openNav()">&#9776;</div>
						<div class="sm-9N">
							<a href="/index.html"><img src="/images/Logo/Sidelogo.png" alt="Affiliox LOGO" /></a>
						</div>
						<div class="sm-2N">
							<div class="selectorN margint20N">
							<select name="direction" id="select-nav" onchange="location = this.value;">
								<?php if(isset($_SESSION['username']) and !empty($_SESSION['username'])){

								echo '<option value="" selected disabled hidden></option>';
								echo '<option value="../login/logout">Logout</option>';
							}else{
								echo '<option value="" selected disabled hidden></option>';
								echo '<option value="../Signup/create">Signup</option>';
								echo '<option value="../login/index">Login</option>';
					
							}?>
							</select>
							</div>
						</div>
					</div>
				</div>
				<div class=" nav-barN centerN backcolorN">
					<div class="col1N open-btnN hidden-smN" onclick="openNav()"> &#9776;</div>
					<div class="col2N hidden-smN">
						<a href="/index.html"><img src="/images/Logo/Sidelogo.png" alt="Affiliox LOGO" /></a>
					</div>

					<div class="col4N centerN">
						<ul>
							<a href="../Buyer/Index"><i class="fas fa-home"></i>&nbsp;Home</a>
							<a href=""><i class="fas fa-users"></i>&nbsp;About Us</a>
							<a href=""><i class="fas fa-inbox"></i>&nbsp;Help</a>
							<a href=""><i class="fas fa-users"></i>&nbsp;Account</a>
						</ul>
					</div>

					<div class="col4N searchN fullWidthN centerN">
						<ul>
							<input type="text" name="search" placeholder="Headsets" />
							<a href=""><i class="fas fa-search"></i></a>
						</ul>
					</div>
					<div class="col1N hidden-smN">
						<div class="selectorN margint20N">

							<select name="direction" id="select-nav" onchange="location = this.value;">
								<?php if(isset($_SESSION['username']) and !empty($_SESSION['username'])){

								echo '<option value="" selected disabled hidden></option>';
								echo '<option value="../login/logout">Logout</option>';
							}else{
								echo '<option value="" selected disabled hidden></option>';
								echo '<option value="../Signup/create">Signup</option>';
								echo '<option value="../login/index">Login</option>';
					
							}?>
							</select>

						</div>

					</div>
				</div>
			</div>

			<div class="fullwidthN col12N">
				<div class=" fullwidthN">
					<hr>
				</div>
			</div>
		</div>

		<div id="mySidenav" class="sidenavN">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			<a href="/Seller/profile">User profile<i class="far fa-user"></i></a>
			<a href="/MiniStore/ministore">Mini Store<i class="fas fa-store"></i></a>
			<a href="/Seller/market">Marker Place<i class="fab fa-shopify"></i></a>
			<a href="/Seller/statistics">Statstics<i class="fas fa-chart-line"></i></i></a>
			<a href="/Seller/order">View Orders<i class="fas fa-chart-line"></i></i></a>
			<a href="/Seller/transaction">Transactions<i class="fas fa-money-check-alt"></i></a>
			<a href="/Seller/feedback">Feedback<i class="fas fa-phone-square"></i></i></a>
			<a href="/Seller/support">Support<i class="fas fa-envelope-open-text"></i></a>
		</div>
		<span onclick="openNav()"></span>

	<!-- welcome-note --------------------------------------------->	
		<div class="title row">
			<p class="col12 center">Welcome to affiliox home page</p>
		</div> 
		<hr>
		<div class="row">
			<img class="col12" src="images/shopping.jpg" alt="Affiliox-welcome-image">
		</div> <!-- welcome-image -->
		<hr class="row col12">
		<br>

		<!--featured -------------------------------------------->
		<div class="row col10 col-center">
			<h2 class="row col12" style="margin-left: 10px;">Featured Items</h2>
			<div class="row">
			<div class="card">
  				<img src="images/i-phone.png" alt="Denim Jeans" style="width:100%">
  					<h4>Tailored Jeans</h4>
  					<p class="price">$19.99</p>
  					<p>Some text about the jeans..</p>
  					<button>Add to Cart</button>
			</div>

			<div class="card">
  				<img src="images/i-phone-earphone.png" alt="Denim Jeans" style="width:100%">
  					<h4>Tailored Jeans</h4>
  					<p class="price">$19.99</p>
  					<p>Some text about the jeans..</p>
  					<button>Add to Cart</button>
			</div>

			<div class="card">
  				<img src="images/nike-shoe.png" alt="Denim Jeans" style="width:100%">
  					<h4>Tailored Jeans</h4>
  					<p class="price">$19.99</p>
  					<p>Some text about the jeans..</p>
  					<button>Add to Cart</button>
			</div>

			<div class="card">
  				<img src="images/nike-shoe.png" alt="Denim Jeans" style="width:100%">
  					<h4>Tailored Jeans</h4>
  					<p class="price">$19.99</p>
  					<p>Some text about the jeans..</p>
  					<button>Add to Cart</button>
			</div>
			</div>
			<br>

		<!-- latest item list -------------------------------------------->
			<h2 class="row col12" style="margin-left: 10px;">Latest Items</h2>
			<div class="row">
			<div class="card">
  				<img src="images/t-shirt.png" alt="Denim Jeans" style="width:100%">
  					<h4>Tailored Jeans</h4>
  					<p class="price">$19.99</p>
  					<p>Some text about the jeans..</p>
  					<button>Add to Cart</button>
			</div>

			<div class="card">
  				<img src="images/watch.png" alt="Denim Jeans" style="width:100%">
  					<h4>Tailored Jeans</h4>
  					<p class="price">$19.99</p>
  					<p>Some text about the jeans..</p>
  					<button>Add to Cart</button>
			</div>

			<div class="card">
  				<img src="images/toy.png" alt="Denim Jeans" style="width:100%">
  					<h4>Tailored Jeans</h4>
  					<p class="price">$19.99</p>
  					<p>Some text about the jeans..</p>
  					<button>Add to Cart</button>
			</div>

			<div class="card">
  				<img src="images/nike-shoe.png" alt="Denim Jeans" style="width:100%">
  					<h4>Tailored Jeans</h4>
  					<p class="price">$19.99</p>
  					<p>Some text about the jeans..</p>
  					<button>Add to Cart</button>
			</div>
			</div>
		</div>
		<!-- </div> container -->
		<br><br>
		<div class="rowN fullwidthN">
			<div class="col12N fullwidthN">
				<hr>
			</div>
		</div>
		<div class="rowN centerN backcolorN">
			<div class=" col3N img-spanN hidden-smN">
				<td><img src="/images/Logo/SideLogo.png" width='200'></td>
			</div>

			<div class="col9N  nav-barN centerN">
				<table class="rowN centerN sm-tableN">
					<tr class="theadN centerN">

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
			</div>

		</div>
		<div class="rowN footerN backcolorN paddingt20N">

			<ul>
				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.</li>
				<li> Affiliox &trade;</li>
			</ul>
		</div>
	</body>
</html>