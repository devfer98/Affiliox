<html>

<head>
	<title>Affiliox-EditAdmin</title>
	<link rel="shortcut icon" href="/images/Logo/logoOnly.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="/css/Customer/common.css" />
	<link rel="stylesheet" type="text/css" href="/css/Customer/customer-grid.css" />
    <script type="text/javascript" src="/js/Customer/nav-fixed.js"></script>
	<script src="https://kit.fontawesome.com/6cdc06033e.js" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
	<!---Navigation bar-------------------------------------------->
    <div class="container">
		<!-- Customer Registration Text--------------------------------------------->
		<div class="row">
			<div class="col12">
				<div class="margint50 marginb100 center ">
					<h1>Edit Admin Details</h1>
				</div>
			</div>
		</div>
		<!-----------------Admin-Registration Form------------------->
		
		<form class="search label marginl100 sm-center">
			<div class="row ">
				<div class="col12">
					<div class=" marginl100">
					<h2>Admin Details</h2>
					</div>
				</div>
			</div>
			
				<div class="row rowMargin ">
					<div class="col12">
						<div>
							<label for="fname"><i class="fa fa-user"></i> &nbsp;Full Name</label><br>
							<input type="text" id="fname" name="fullname" placeholder="Kamal sachintha"> <br>
						</div>
					</div>
				</div>
	
				<div class="row rowMargin">
					<div class="col6">
						<div>
							<label for="lname"><i class="fa fa-mail-bulk"></i>&nbsp; Email</label><br>
							<input type="text" id="email" name="email" placeholder="KSPerera@gmail.com"><br>
						</div>
					</div>
					<div class="col6">
						<div class="">
							<label for="phn-no"><i class="fa fa-phone"></i>&nbsp; Phone Number</label><br>
							<input type="text" id="phn-no" name="phn-no" placeholder="0771123344"><br>
						</div>
					</div>
	
				</div>
	
				<div class="row rowMargin">
					<div class="col6">
						<div>
							<label for="dob"><i class="fa fa-birthday-cake"></i>&nbsp; Date of
								Birth</label><br>
							<input type="date" id="Birth" name="dob" placeholder="Perera"><br><br>
						</div>
					</div>
					<div class="col6">
						<div>
							<label for="status"><i class="fa fa-ring"></i>&nbsp; Marital status</label><br>
							<input type="text" id="status" name="status" placeholder="Married"><br>
						</div>
					</div>
				</div>
	
				<div class="row rowMargin">
					<div class="col12">
						<div>
							<!------------------Address section------------------->
	
							<label for="Addressl1"><i class="fa fa-address-card"></i> Address Line 1</label><br>
							<input type="text" id="line1" name="aline1" placeholder="No 23/3 B"><br><br>
							<label for="Addressl2"><i class="fa fa-address-card"></i> Address Line 2</label><br>
							<input type="text" id="line2" name="aline2" placeholder="Jayasekara Mawatha"><br>
							<!------------------ ------------------->
						</div>
					</div>
				</div>
	
				<div class="row rowMargin">
					<div class="col6">
						<div>
							<label for="city"><i class="fa fa-city"></i> City</label><br>
							<input type="text" id="city" name="acity" placeholder="Warakapola">
						</div>
					</div>
					<div class="col6">
						<div>
							<label for="country"><i class="fa fa-globe"></i> Country</label><br>
							<input type="text" id="country" name="country" placeholder="Srilanka"><br>
						</div>
					</div>
				</div>
	
				<div class="row rowMargin">
					<div class="col12">
						<div>
							<!------------------Gender Radio ------------------>
							<label style="font-size: 18px;" for="gender"> Select your Gender</label>
							<br><br>
							<label for="male"><i class="fa fa-male fa-2x"></i>&nbsp; Male</label>
							<input style="width:5%;box-shadow: 0 0 0px #719ECE;"type="radio" id="male" name="gender" value="male">
							<label for="female"><i class="fa fa-female fa-2x"></i>&nbsp; Female </label>
							<input style="width:5%;box-shadow: 0 0 0px #719ECE;"type="radio" id="female" name="gender" value="female">
	
						</div>
					</div>
				</div>
	
	
				<div class="row rowMargin ">
					<div class="col12">
						<div>
							<label for="position"><i class="fa fa-briefcase"></i>&nbsp; Position</label><br>
							<input type="text" id="position" name="position" placeholder="IT Consultant"><br>
						</div>
					</div>
				</div>
					<div class="row ">
						<div class="col12 ">
							<div class=" margint100 marginl100">
								<h2>Admin Login Credentials</h2>
							</div>
						</div>
					</div>
					<div class="row  rowMargin">
						<div class="col12">
							<div>
								<label for="Username-field"><i class="fa fa-user-alt"></i> Username</label><br>
								<input type="text" name="Username-field" placeholder="Username"><br>
							</div>
						</div>
					</div>
					<div class="row  rowMargin">
						<div class="col6">
							<div>
								<label for="Password-field"><i class="fa fa-key"></i> Password</label><br>
								<input type="password" name="Password-field" id="pass-field" placeholder="********"><br>
							</div>
						</div>
						<div class="col6">
							<div>
								<label for="Confirm-Password-field"><i class="fa fa-key"></i> Confirm Password</label><br>
								<input type="password" name="Confirm-Password-field" id="con-pass-field"
									placeholder="********"><br><br>
								<input style="width:5%;box-shadow: 0 0 0px #719ECE;" type="checkbox"
									onclick="passVisibility()">Show Password
							</div>
						</div>
					</div>
	
					<div class="row rowMargin marginb100">
						<div class="col12 center">
							<div class=>
								<button type="submit" value="submit">Submit</button>
								<button type="reset" value="reset">Reset</button>
							</div>
						</div>
					</div>
	
				</form>
	
  	</div>
	<!--Container------------------------------------------>
</body>

</html>