<!DOCTYPE html>
<html>
<head>
	<title>Withdraw Earnings</title>
	<link rel="stylesheet" type="text/css" href="css/withdraw-earnings-css.css">
	<link rel="shortcut icon" href="images/affiliox.png" type="image/x-icon">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous"/>
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans&display=swap" rel="stylesheet">
	<script src="js/withdraw-earnings-js.js"></script>
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
	<div class="container">
		<h2><i class="fas fa-money-check-alt"></i>&nbsp; &nbsp;Balance Withdrawal</h2>

		<p><b>Withdraw Earn:</b> Use this page to transfer your balance to your preferred method of payout. You should have minimum payout amount available in your account. To see the list and status of your payouts. <a id="payout-history" href="payout-history.php">CLICK HERE</a></p>

		<div class="money-withdrawal-form">
			<form>
				<table>
				<tr>
					<td>Tansfer Method :</td>
					<td>
						<select>
							<option value="">Select Payout Method</option>
							<option value="paypal">Paypal</option>
							<option value="BT">Bank Transfer</option>
						</select>
					</td>
				</tr>
					<tr>
						<td>Current Amount :</td>
						<td>26.14 $USD</td>
					</tr>
					<tr>
						<td>Change Amount :</td>
						<td><input type="text" name="amount" required="" placeholder="$ 00.00" pattern="[$]{1}[0-9]{2}.[0-9]{2}" id="c-a"></td>
					</tr>
				<tr>
					<td>
						<input type="submit" name="submit" value="Submit">
					</td>
					<td>
						<input type="reset" name="reset" value="Reset">
					</td>
				</tr>
			</table>
			</form>
		</div> <!-- money-withdrawal-form -->
	</div> <!-- container -->

		<div class="footer">
  			<ul>
  				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  				tempor incididunt ut labore et dolore magna aliqua.</li>
  				<li><a href="">Privacy & Policy</a></li>
  				<li>© Affiliox</li>
  			</ul>
		</div>	<!-- footer -->	
	</div> <!-- navigation -->

	<div id="mySidenav" class="sidenav">
  		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  		<a href="promoter-dashboard.php">User profile<i class="far fa-user"></i></a>
  		<a href="market-place.php">Marker Place<i class="fab fa-shopify"></i></a>
  		<a href="promoter-statistics.php">Statstics<i class="fas fa-chart-line"></i></i></a>
  		<a href="withdraw-earnings.php">Transactions<i class="fas fa-money-check-alt"></i></a>
  		<a href="review-feedback.php">Feedback<i class="fas fa-phone-square"></i></i></a>
  		<a href="support-center.php">Support<i class="fas fa-envelope-open-text"></i></a>
	</div> <!-- sidenav -->
	<span onclick="openNav()"></span>

</body>
</html>
