<?php require_once('../include/connection.php'); ?>

<?php 

	$errors = array();
		$name = '';
		$aLine1 = '';
		$aLine2 = '';
		$city = '';
		$country = '';
		$status = '';
		$dob = '';
		$email = '';
		$phoneNo = '';
		$password = '';


	if (isset($_POST['submit'])) {
		
		$name = $_POST['name'];
		$aLine1 = $_POST['aLine1'];
		$aLine2 = $_POST['aLine2'];
		$city = $_POST['city'];
		$country = $_POST['country'];	
		$status = $_POST['status'];
		$dob = $_POST['dob'];
		$email = $_POST['email'];
		$phoneNo = $_POST['phoneNo'];

		//----check email address alreaduy exists----//
		
		//prevent query injection//
		$email = mysqli_real_escape_string($connection, $_POST['email']);
		$query = "SELECT * FROM promoter WHERE $email = '{$email}' LIMIT 1";
		$result_set = mysqli_query($connection, $query);

		if ($result_set) {
			if (mysqli_fetch_assoc($result_set) == 1) {
				$errors = 'Email address already exists';
			}
		}//----check email address alreaduy exists----//

		//If there are not any errors
		if (empty($errors)) {
			//prevent query injection//
			$name = mysqli_real_escape_string($connection, $_POST['name']);
			$aLine1 = mysqli_real_escape_string($connection, $_POST['aLine1']);
			$aLine2 = mysqli_real_escape_string($connection, $_POST['aLine2']);
			$city = mysqli_real_escape_string($connection, $_POST['city']);
			$country = mysqli_real_escape_string($connection, $_POST['country']);
			$gender = mysqli_real_escape_string($connection, $_POST['gender']);
			$status = mysqli_real_escape_string($connection, $_POST['status']);
			$dob = mysqli_real_escape_string($connection, $_POST['dob']);
			$phoneNo = mysqli_real_escape_string($connection, $_POST['phoneNo']);
			$password = mysqli_real_escape_string($connection, $_POST['password']);
			$hashed_password = sha1($password);

			//create insert query
			$query = "INSERT INTO promoter ( ";
			$query .= "name, aLine1, aLine2, city, country, gender, status, dob, email, phoneNo, password";
			$query .= ") VALUES (";
			$query .= "'{$name}', '{$aLine1}', '{$aLine2}', '{$city}', '{$country}', '{$gender}', '{$status}', '{$dob}', '{$email}', '{$phoneNo}', '{$hashed_password}'";
			$query .= ")";

			$result = mysqli_query($connection, $query);


			if ($result) {
				//if query successfull redirec to the dashboard
				header('Location:promoter-dashboard.php?promoter_added=true?');
			} else {
				$error[] = 'Fail to add the new record'; 
			}
		}
	}

 ?>


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
	<header>
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
			</ul>
		</nav>
	</header>
	<hr>	
	<!-------------- Top-Navigation-Bar ---------------------->

	<div class="container">
		<h2><i class="fas fa-user-plus"></i></i>&nbsp; &nbsp;Create Promoter New Account Here.</h2> 
		
		<div class="form">

		<form action="promoter-reg.php" method="post">
			<table>
				<tr>
					<td>Full Name</td>
				</tr>
				<tr>
					<td colspan="2"><input type="text" name="name" placeholder="Your full name" autofocus="" <?php echo 'value="' . $name . '"'; ?> ></td>
				</tr>
				<tr>
					<td>Email</td>
					<td>Phone Number</td>
				</tr>
				<tr>
					<td><input type="text" name="email" id="email" placeholder="Your Email" <?php echo 'value="' . $email . '"'; ?> ></td>
					<td><input type="telephone" name="phoneNo" placeholder="Phone Number" <?php echo 'value="' . $phoneNo . '"'; ?> ></td>
				</tr>
				<tr>
					<td>Date of Birth</td>
					<td>Material Status</td>
				</tr>
				<tr>
					<td><input type="date" name="dob" <?php echo 'value="' . $dob . '"'; ?> ></td>

					<td><input type="text" name="status" placeholder="Material Status" <?php echo 'value="' . $status . '"'; ?> ></td>
				</tr>
				<tr>
					<td colspan="2">Address Line 1</td>
				</tr>
				<tr>
					<td colspan="2"><input type="text" name="aLine1" placeholder="Address Line 1" <?php echo 'value="' . $aLine1 . '"'; ?> ></td>
				</tr>
				<tr>
					<td colspan="2">Address Line 2</td>
				</tr>
				<tr>
					<td colspan="2"><input type="text" name="aLine2" placeholder="Address Line 2" <?php echo 'value="' . $aLine2 . '"'; ?> ></td>
				</tr>
				<tr>
					<td>City</td>
					<td>Country</td>
				</tr>
				<tr>
					<td><input type="text" name="city" placeholder="Current City" <?php echo 'value="' . $city . '"'; ?> ></td>
					<td><input type="text" name="country" placeholder="Your Country" <?php echo 'value="' . $country . '"'; ?> ></td>
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
					<td colspan="2"><textarea placeholder="Enter your promoting channel links"></textarea></td>
				</tr>
				<tr>
					<td>Promoter Login Credentials</td>
				</tr>
				<tr>
					<td colspan="2">User Name</td>
				</tr>
				<tr>
					<td colspan="2"><input type="text" name="name" placeholder="User Name" <?php echo 'value="' . $name . '"'; ?> ></td>
				</tr>
				<tr>
					<td>Password</td>
					<td>Confirm Password</td>
				</tr>
				<tr>
					<td><input type="password" name="password" placeholder="*****"  id="typePassword" ></td>
					<td><input type="password" name="password" placeholder="*****"  id="conPassword" ></td>
				</tr>
				<tr>
					<td>Note:- Password must be less than 8 characters.</td>
					<td><input type="checkbox" name="" onclick="passVisibility()"> &nbsp; Show password</td>
				</tr>
				<tr id="btn">
					<td><button type="submit" name="submit">Submit</button></td>
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

<?php mysqli_close($connection) ?>