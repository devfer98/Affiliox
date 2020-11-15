<!DOCTYPE html>
<html>
<head>
	<title>Seller Transactions</title>
	<!-- <link rel="stylesheet" type="text/css" href="../css/common-dashboard.css"> -->
	<link rel="shortcut icon" href="../images/logoOnly.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="/css/Seller/main.css">
	<link rel="stylesheet" type="text/css" href="/css/Seller/grid.css">
	<link rel="stylesheet" type="text/css" href="/css/Seller/market.css">
	<link rel="stylesheet" type="text/css" href="/css/Seller/tabs.css">
	<!-- <link rel="stylesheet" type="text/css" href="css/sellerTransactions.css"> -->
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
		<div class="row row-padding">
			<hr class="col12"/>
		</div>
		<!-- <div class="row row-padding">	 -->
		<div class="row col12 title">
			<p class="center">Withdrawal</p>
		</div> 

		<div class="row col6 col-center inner-part inp">
			<form action="" method="post">
			<div class="row">
				<p><b>Withdraw Earn:</b> Use this page to transfer your balance to your preferred method of payout. 
					You should have minimum payout amount available in your account. To see the list and status of your payouts.
						<a id="payout-history" href="sellerTransHis.html">Click Here</a></p>
			</div>
			<div class="row col8 col-center center padding">
				<label class="col12 center">Current Amount</label>
				<!-- <div class="col12 center" >Rs. 20,000</div> -->
				<input readonly  type="text" id="quantity" name="quantity" class="center" style="width: 250px;" placeholder="Rs. 20,000">
			</div>
			<div class="row col8 col-center padding">
				<label for="fname">&nbsp;Tansfer Method</label><br>
				<select>
					<option value="">Select Payout Method</option>
					<option value="paypal">Paypal</option>
					<option value="BT">Bank Transfer</option>
				</select>
			</div>
			<div class="row col8 col-center padding">
				<label for="dob">&nbsp;Amount</label><br>
				<input type="number" name="amount" required="" placeholder="$ 00.00" pattern="[$]{1}[0-9]{2}.[0-9]{2}" id="c-a">
			</div>
			<div class="row col12 padding">
				<button class="center" type="submit" value="submit">Submit</button>	
				<button class="center" type="reset" value="submit">Reset</button>	
			</div>
			</form>
		</div>

		<div class="row col12 title">
			<p class="center">Successful Orders</p>
		</div> 

		<div class="row col8 col-center" style="margin-bottom: 20px;">
			<div id="tab1" class="tabcontent row" style="display: block;">
				<div class="col-center" style="width: 95%;">
				<div class="row heading">
					<div class="col2">User</div>
					<div class="col5">Address</div>
					<div class="col3">Date</div>
					<div class="col2">Total Amount</div>
				</div>
				<div class="row record">
					<div class="col2">david98</div>
					<div class="col5">No.20, Araliya road, Bangalaatta, Wattala</div>
					<div class="col3">2020 / 12 / 28</div>
					<div class="col2">Rs. 2,000</div>
				</div>
				<div class="row record">
					<div class="col2">david98</div>
					<div class="col5">No.20, Araliya road, Bangalaatta, Wattala</div>
					<div class="col3">2020 / 12 / 28</div>
					<div class="col2">Rs. 2,000</div>
				</div>
				<div class="row record">
					<div class="col2">david98</div>
					<div class="col5">No.20, Araliya road, Bangalaatta, Wattala</div>
					<div class="col3">2020 / 12 / 28</div>
					<div class="col2">Rs. 2,000</div>
				</div>
				<div class="row record">
					<div class="col2">david98</div>
					<div class="col5">No.20, Araliya road, Bangalaatta, Wattala</div>
					<div class="col3">2020 / 12 / 28</div>
					<div class="col2">Rs. 2,000</div>
				</div>
				</div>
			</div>
		</div>
		<!-- </div> -->

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
  		<a href="sellerProfile.html">User profile<i class="far fa-user"></i></a>
  		<a href="ministore.html">Mini Store<i class="fas fa-store"></i></a>
  		<a href="#">Marker Place<i class="fab fa-shopify"></i></a>
  		<a href="sellerStatistics.html">Statstics<i class="fas fa-chart-line"></i></i></a>
		<a href="viewOrders.html">View Orders<i class="fas fa-chart-line"></i></i></a>
  		<a href="sellerTransactions.html">Transactions<i class="fas fa-money-check-alt"></i></a>
  		<a href="sellerFeedback.html">Feedback<i class="fas fa-phone-square"></i></i></a>
  		<a href="#">Support<i class="fas fa-envelope-open-text"></i></a>
	</div>
	<span onclick="openNav()"></span>

</body>
</html>