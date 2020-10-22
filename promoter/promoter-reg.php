<!DOCTYPE html>
<html>
<head>
	<title>Promoter-sign up</title>
	<link rel="shortcut icon" href="images/affiliox.png" type="image/x-icon">
  	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/promoter-reg-css.css">
	<script src="js/promoter-reg-js.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous"/>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
	<!-- <script src="https://kit.fontawesome.com/6cdc06033e.js" crossorigin="anonymous"></script> -->
</head>
<body>
	<!-------------- Top-Navigation-Bar ---------------------->
	<header>
		<div class="affiliox"><a href="">Affiliox</a></div>
		<div class="loggedin">Welcome User name</div>
	</header>
	<hr>
	<!-------------- Top-Navigation-Bar ---------------------->

	<div class="container">
		<h2><i class="fas fa-user-plus"></i></i>&nbsp; &nbsp;Create Promoter New Account Here</h2> 

		<div class="inner-part">
			<h2>Enter Your Details</h2>

		<form action="" method="post">
			<label for="fname"><i class="fa fa-user"></i>&nbsp;Full Name</label><br>
			<input type="text" id="fname" name="fullname" placeholder="Your Full Name"> <br>

			<label for="email"><i class="fa fa-mail-bulk"></i>&nbsp;Email</label><br>
			<input type="text" id="email" name="email" placeholder="Your E-mail"><br>
			
			<label for="tel-p"><i class="fa fa-phone"></i>&nbsp;Phone Number</label><br>
			<input type="text" id="tel-p" name="tel-p" placeholder="Phone Number"><br>
			
			<label for="dob"><i class="fa fa-birthday-cake"></i>&nbsp;Date of Birth</label><br>
			<input type="date" id="dob" name="dob"><br><br>
			
			<!------------------Gender Radio ------------------>
			<label>Select your Gender</label><br>
			<label for="male">Male</label>
			<input type="radio" id="male" name="gender" value="male"><br>

			<label for="female">Female</label>
			<input type="radio" id="female" name="gender" value="female"><br><br>

			<!------------------Address section------------------->
			<label for="address"><i class="fa fa-address-card"></i> Address Line 1</label><br>
			<input type="text" id="address" name="aline1" placeholder="Address Line 1">
			<input type="text" id="address" name="aline2" placeholder="Address Line 2"><br><br>

			<label for="city"><i class="fa fa-city"></i>City</label><br>
			<input type="text" id="city" name="city" placeholder="Current City"><br><br>
			<label for="country"><i class="fa fa-city"></i>Country</label><br>
			<input type="text" id="country" name="country" placeholder="Country"><br><br>

			<label for="status">Marital status</label><br>
			<input type="text" id="status" name="status" placeholder="Married"><br>


			<h2>Channel Reference Links</h2><br>
			<textarea name="channel-links" placeholder="Enter your channel links"></textarea><br>
			
			<label for="username-field"><i class="fa fa-user-alt"></i> Username</label><br>
			<input type="text" name="username-field" placeholder="Username" id="username-field"><br>

			<label for="pass-field"><i class="fa fa-key"></i> Password</label><br>			
			<input type="password" name="password-field" id="pass-field" placeholder="********"><br>
			<label for="confirm-pass-field"><i class="fa fa-key"></i> Confirm Password</label><br>			
			<input type="password" name="Confirm-Password-field" id="confirm-pass-field" placeholder="********"><br>
			
			<input type="checkbox" onclick="passVisibility()">Show Password<br>

			<!------------------Buttons------------------->
			<div class="btn">
				<button type="submit" value="submit">Submit</button>	
				<button type="reset" value="reset">Reset</button>	
			</div> <!-- btn -->
			<hr>
			<br><br>
		</form>
	</div> <!-- inner-part -->
	</div> <!-- container -->
	
  		<div class="bottom-part">
			<table>
				<tr class="thead">
					<td>More on Affiliox</td>
					<td>Main Menu</td>
					<td>Legal</td>
					<td>Contact Us</td>
				</tr>
				<tr>
					<td>Lorem ipsum dolor sit amet.</td>
					<td><a href="">Affiliox Home Page</a><i class="fas fa-chevron-right"></i></td>
					<td><a href="">Privacy & Policy</a></td>
					<td>Address:</td>
				</tr>
				<tr>
					<td rowspan="2"><img src="images/affiliox.png" height='100' width='100'></td>
					<td><a href="">About Affiliox</a></td>
					<td></td>
					<td>Phone: 011-1234567</td>
				</tr>
				<tr>
					<!-- <td></td> -->
					<td><a href="">Help & Support</a></td>
					<td></td>
					<td>Email: affiliox@gmail.com</td>
				</tr>
			</table>
		</div> <!-- bottom-part -->
		
		<div class="footer">
  			<ul>
  				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  				tempor incididunt ut labore et dolore magna aliqua.</li>
  				<li><a href="">Privacy & Policy</a></li>
  				<li>© Affiliox</li>
  			</ul>
		</div>	 <!-- footer -->
</body>
</html>