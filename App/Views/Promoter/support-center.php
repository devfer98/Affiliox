<!DOCTYPE html>
<html>
<title>Support Service</title>
  	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="shortcut icon" href="/images/promoter/logoOnly.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="/css/promoter/support-center-css.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous"/>
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans&display=swap" rel="stylesheet">
	<script src="/js/promoter/support-center-js.js"></script>
</head>
<body>
	<!-------------- Top-Navigation-Bar ---------------------->
		<header>
			<div class="open-btn" onclick="openNav()">&#9776;</div>
			<nav class="top-nav">
			<ul class="main-nav">
				<li class="logo"><a href="index.php" style="border: none;"><img src="/images/promoter/SideLogo.png"></a></li>
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
		<h2><i class="fas fa-ticket-alt"></i>&nbsp; &nbsp;Support Center - Submit Your Requset</h2>
		<div class="inner-part">
			<h3>Important</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. <br> <br>Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<form action="" method="post">
				<select name="problem" id="problem" required="">
					<option value="">Pleace Select Your Request</option>
					<option value="AP">Account Problem</option>
					<option value="VP">Verification Problem</option>
					<option value="PP">Payout Problem</option>
					<option value="SU">Suggestion</option>
					<option value="AC">Account Cancellation</option>
					<option value="O">Other</option>
				</select> <br>
				<div class="text-area">
					<textarea name="textdata" placeholder="Explain your problem" required=""></textarea>
				</div> <br>
				<div class="button">
					<button type="submit" onclick="return confirm('We received your Request. We will let you know more by email.');"><i class="fas fa-share"></i>  Send Request</button>
				</div>
			</form>
		</div> <!-- inner-part -->
		<hr style="height:2px;border:none;color:#333;background-color:#333;">
	</div> <!-- container -->

		<!-- bottom-part-------------------------------------------->
		<div class="bottom-part">
			<table>
				<tr class="thead">
					<td rowspan="4"><img src="/images/promoter/affiliox.png" height='150' width='150'></td>
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
		</div> <!-- bottom-part -->
		
		<div class="footer">
  			<ul>
  				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  				tempor incididunt ut labore et dolore magna aliqua.</li>
  				<li> Affiliox &trade;</li>
  			</ul>
		</div>	 <!-- footer -->	
	</div> <!-- navigation -->

	<div id="mySidenav" class="sidenav">
  		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  		<a href="../Promoter/promoterProfile">User profile<i class="far fa-user"></i></a>
  		<a href="../Promoter/Market">Marker Place<i class="fab fa-shopify"></i></a>
  		<a href="../Promoter/staticPromoter">Statstics<i class="fas fa-chart-line"></i></i></a>
  		<a href="../Promoter/promoterTrans">Transactions<i class="fas fa-money-check-alt"></i></a>
  		<a href="../Promoter/promoterFeedback">Feedback<i class="fas fa-phone-square"></i></i></a>
  		<a href="../Promoter/promoterSupport">Support<i class="fas fa-envelope-open-text"></i></a>
	</div>
	<span onclick="openNav()"></span>

</body>
</html>

