<!DOCTYPE html>
<html>
<head>
	<title>Seller Edit Profile</title>
	<!-- <link rel="stylesheet" type="text/css" href="../css/common-dashboard.css"> -->
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
		
		<!-- <div class="Reg-container"> -->
		<div class="row">
			<div class="col6 col-center title">
				<p>Edit Seller Details</p>
				<!-- <hr> -->
			</div> 
				<!------------------Seller Registration Form------------------->
		</div>
		<div class="row row-padding">	
			<div class="col6 col-center inner-part inp">
			<form action="" method="post">
				<h2 style="font-family: 'Lato', sans-serif;">Seller Details</h2>
				<?php  
                if(isset($this->sellerUser) and !empty($this->sellerUser)){
					while($row = $this->sellerUser->fetch_assoc()){           
            	?>
				<div class="padding">
				<label for="fname"><i class="fa fa-user"></i> &nbsp;Full Name</label><br>
				<input type="text" id="fname" name="fullname" value="<?php echo $row['name'] ?>" placeholder="" minlength="5" maxlength="100" pattern="[a-zA-Z'-'\s]*" title="Remove unwanted characters." required > <br>
				</div>
				<div class="padding">
				<label for="lname"><i class="fa fa-mail-bulk"></i>&nbsp; Email</label><br>
				<input type="text" id="email" name="email" value="<?php echo $row['email'] ?>" placeholder="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Please fill the filed required format." required ><br>
				</div>
				<div class="padding">
				<label for="phn-no"><i class="fa fa-phone"></i>&nbsp; Phone Number</label><br>
				<input type="tel" id="phn-no" name="phn-no" value="<?php echo $row['phoneNo'] ?>" placeholder="" minlength="10" maxlength="10" 
       					title="Please enter a valid phone number" required><br>
				</div>
				<div class="padding">
				<label for="dob"><i class="fa fa-birthday-cake"></i>&nbsp; Date of Birth</label><br>
				<input type="date" id="Birth" name="dob" value="<?php echo $row['dob'] ?>" placeholder="" required><br><br>
				</div>
				<!------------------Gender Radio ------------------>
				<div class="padding">
				<label style="font-size: 18px;"for="gender"><i class="fas fa-venus-mars"></i>&nbsp; Select your Gender</label>	<br><br>
				<label for="male">Male &nbsp;&nbsp;&nbsp;</label>
				<input type="radio" id="m/ale" name="gender" value="male" <?php echo ($row['gender'] == 'male') ? 'checked' : ''; ?> required><br>
				<label for="female">Female </label>
				<input type="radio" id="female" name="gender" value="female" <?php echo ($row['gender'] == 'female') ? 'checked' : ''; ?> required>
				</div>

				<div class="padding">
				<label for="fname"><i class="fas fa-ring"></i>&nbsp;Marital Status</label><br>
				<input type="text" id="fname" name="fullname" value="<?php echo $row['status'] ?>" placeholder="" minlength="5" maxlength="100" pattern="[a-zA-Z'-'\s]*" title="Remove unwanted characters." required > <br>
				</div>
				
				<!------------------Address section------------------->
				<div class="padding">
				<label for="Address"><i class="fa fa-address-card"></i> Address Line 1</label><br>
				<input type="text" id="line1" name="aline1" value="<?php echo $row['aLine1'] ?>" placeholder="" minlength="5" maxlength="100" required>
				</div>
				<div class="padding">
				<label for="Address"><i class="fa fa-address-card"></i> Address Line 2</label><br>
				<input type="text" id="line2" name="aline2" value="<?php echo $row['aLine2'] ?>" placeholder="" minlength="5" maxlength="100" required><br>
				</div>
				<div class="padding">
				<label for="city"><i class="fa fa-city"></i>  City</label><br>
				<input type="text" id="city" name="acity" value="<?php echo $row['city'] ?>" placeholder="" minlength="5" maxlength="100" pattern="[a-zA-Z'-'\s]*" title="Remove unwanted characters." required >
				</div>
				<div class="padding">
				<label for="city"><i class="fa fa-city"></i>Country</label><br>
				<input type="text" id="country" name="acountry" value="<?php echo $row['country'] ?>" placeholder="" minlength="5" maxlength="100" pattern="[a-zA-Z'-'\s]*" title="Remove unwanted characters."  required><br>
				</div>
				<!------------------ ------------------->
	
				<h2 style="font-family: 'Lato', sans-serif;">Login Details</h2>
				
				<div class="padding">
				<label for="Username-field"><i class="fa fa-user-alt"></i> Username</label><br>
				<input type="text" name="Username-field" value="<?php echo $row['userID'] ?>" placeholder=""  minlength="5" maxlength="100" pattern="[a-zA-Z'-'\s]*" title="Remove unwanted characters." required ><br>
				</div>
				<?php
                     }
                }
                ?>
			<!------------------Buttons------------------->
				<div class="row col12 padding commonB">
					<button class="center " type="submit" value="submit">Save</button>	
				</div>
			</form>
			</div>
		</div>
	</div> 
</body>
</html>