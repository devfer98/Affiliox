<!DOCTYPE html>
<html>
<head>
	<title>Promoter-sign up</title>
	<link rel="shortcut icon" href="images/affiliox.png" type="image/x-icon">
  	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/promoter-reg-css.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous"/>
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans&display=swap" rel="stylesheet">

</head>
<body>
	<!-------------- Top-Navigation-Bar ---------------------->
	<nav class="top-nav">
			<ul class="main-nav">
				<li class="logo"><a href="index.html" style="border: none;"><img src="images/affiliox.png"></a></li>
				<li class="logo-name"><a href="">Affiliox</a></li>
				<li class="item"><a href=""><i class="fas fa-home"></i>&nbsp;Home</a></li>
				<li class="item"><a href=""><i class="fas fa-users"></i>&nbsp;About Us</a></li>
				<li class="item"><a href=""><i class="fas fa-question-circle"></i>&nbsp;Help & Support</a></li>
				<li class="item"><a href=""><i class="fas fa-user"></i>&nbsp;&nbsp;Account</a></li>
				<li class="item"><a href=""><i class="fas fa-shopping-cart"></i>&nbsp;Add to cart</a></li>
				<li class="push"><input type="search" name="" placeholder="search"><button><i class="fas fa-search"></i> &nbsp;Search</button></li>
				<li class="last">
					<select>
						<option value="sign in">Sign In</option>
						<option value="login">Login</option>
						<option value="logout">Logout</option>
					</select>
				</li>
			</ul>
		</nav>
	<!-------------- Top-Navigation-Bar ---------------------->

	<div class="container">
		<h2><i class="fas fa-user-plus"></i></i>&nbsp; &nbsp;Create Promoter New Account Here.</h2> 

		<div class="form">

		<form action="validate-promoter.php" method="post">
			<table>
				<tr>
					<td colspan="2">Full Name</td>
				</tr>
				<tr>
					<td colspan="2"><input type="text" name="name" placeholder="Your full name" autofocus="" required="" minlength="5" max="100"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td>Phone Number</td>
				</tr>
				<tr>
					<td><input type="text" name="email" id="email" placeholder="Your Email" ></td>
					<td><input type="telephone" name="phoneNo" placeholder="Phone Number" placeholder="" minlength="0" maxlength="10"></td>
				</tr>
				<tr>
					<td>Date of Birth</td>
					<td>Material Status</td>
				</tr>
				<tr>
					<td><input type="date" name="dob"></td>
					<td><input type="text" name="status" placeholder="Material Status"></td>
				</tr>
				<tr>
					<td colspan="2">Address Line 1</td>
				</tr>
				<tr>
					<td colspan="2"><input type="text" name="aLine1" placeholder="Address Line 1"></td>
				</tr>
				<tr>
					<td colspan="2">Address Line 2</td>
				</tr>
				<tr>
					<td colspan="2"><input type="text" name="aLine2" placeholder="Address Line 2"></td>
				</tr>
				<tr>
					<td>City</td>
					<td>Country</td>
				</tr>
				<tr>
					<td><input type="text" name="city" placeholder="Current City"></td>
					<td><input type="text" name="country" placeholder="Your Country"></td>
				</tr>
				<tr>
					<td colspan="2">Select Your Gender</td>
				</tr>
				<tr>
					<td>Male &nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="gender" value="male"></td>
				</tr>
				<tr>
					<td>Female &nbsp;<input type="radio" name="gender" value="female"></td>
				</tr>
				<tr>
					<td colspan="2">Channel Reference Link</td>
				</tr>
				<tr>
					<td colspan="2"><textarea placeholder="Enter tout promoting channel links"></textarea></td>
				</tr>
				<tr>
					<td>Promoter Login Credentials</td>
				</tr>
				<tr>
					<td colspan="2">User Name</td>
				</tr>
				<tr>
					<td colspan="2"><input type="text" name="name" placeholder="User Name"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td>Confirm Password</td>
				</tr>
				<tr>
					<td><input type="password" name="" placeholder="*****" minlength="5" maxlength="8"  id="typePassword" ></td>
					<td><input type="password" name="" placeholder="*****" minlength="5" maxlength="8"  id="conPassword" ></td>
				</tr>
				<tr>
					<td>Note:- Password must be less than 8 characters.</td>
					<td><input type="checkbox" name="" onclick="passVisibility()"> &nbsp; Show password</td>
				</tr>
				<tr id="btn">
					<td><input type="submit" name="submit" value="submit" class="btn"></td>
					<td><button type="reset">Reset</button></td>
				</tr>
			</table>
		</form>
		</div> <!-- form -->
		
	</div> <!-- container -->
	
  		<!-- bottom-part-------------------------------------------->
		<div class="bottom-part">
			<table>
				<tr class="thead">
					<td rowspan="4"><img src="images/affiliox.png" height='150' width='150'></td>
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
		<script src="js/promoter-reg-js.js"></script>
</body>
</html>