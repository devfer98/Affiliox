<html>
<head>
	<title>Affiliox-BuyerRegistration</title>
	<link rel="shortcut icon" href="/images/Logo/logoOnly.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="/css/Customer/common.css" />
    <link rel="stylesheet" type="text/css" href="/css/Customer/customer-grid.css" />
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans&display=swap" rel="stylesheet">
    <script type="text/javascript" src="/js/Common/Signin.js"></script>
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
					<h1>Create a New Account</h1>
				</div>
			</div>
		</div>
		<!-----------------Customer-Registration Form------------------->
		
			<form class="search label marginl100 sm-center" method="post" onsubmit="return validateForm();" action ="../Signup/buyerToDB">
		<div class="row ">
			<div class="col12">
				<div class=" marginl100">
				<h2>User Details</h2>
				</div>		
	
		<div class="row">
            <?php if(isset($this->UImsg) and !empty($this->UImsg)){
                        if($this->State==1) {

                           ?><div class="center marginb50 errorMsgSuccess"><?php
                           
                        }else{
                          ?><div class="center marginb50 errorMsgFailed"> <?php
                        }                 
                  }  ?>
                    <p><?php if(isset($this->UImsg) and !empty($this->UImsg)){echo $this->UImsg;}  ?></p>
               	 </div>
                </div>
			<div class="row rowMargin ">
				<div class="col12">
					<div>
						<label for="fname"><i class="fa fa-user"></i> &nbsp;Full Name</label><br>
						<input type="text" id="fname" name="fullname" placeholder="Enter your name" minlength="5" maxlength="100" pattern="[a-zA-Z'-'\s]*" title="Remove unwanted characters." required> <br>
					</div>
				</div>
			</div>

			<div class="row rowMargin">
				<div class="col6">
					<div>
						<label for="email"><i class="fa fa-mail-bulk"></i>&nbsp; Email</label><br>
						<input type="text" id="email" name="email" placeholder="enter your e-mail" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" title="Incorrect Email Format." required ><br>
					</div>
				</div>
				<div class="col6">
					<div class="">
						<label for="phn-no"><i class="fa fa-phone"></i>&nbsp; Phone Number</label><br>
						<input type="tel" id="phn-no" name="phn-no" placeholder="Phone number" minlength="10" maxlength="10" pattern="[0-9]*"
       					title="Please enter a valid phone number" required><br>
					</div>
				</div>

			</div>

			<div class="row rowMargin">
				<div class="col6">
					<div>
						<label for="dob"><i class="fa fa-birthday-cake"></i>&nbsp; Date of Birth</label><br>
						<input type="date" id="Birth" name="dob" required><br><br>
					</div>
				</div>
				<div class="col6">
					<div>
						<label for="status">Marital status</label><br>
						<input type="text" id="status" name="status" placeholder="Married" minlength="5" maxlength="25" pattern="[a-zA-Z'-'\s]*" title="Remove unwanted characters." required><br>
					</div>
				</div>
			</div>

			<div class="row rowMargin">
				<div class="col12">
					<div>
						<!------------------Address section------------------->
						<label for="Addressl1"><i class="fa fa-address-card"></i> Address Line 1</label><br>
						<input type="text" id="line1" name="aline1" placeholder="Address Line 1" minlength="5" maxlength="100" pattern="^[a-zA-Z0-9,-.'()/ ]*$"  title="Remove unwanted characters." required><br><br>
						<label for="Addressl2"><i class="fa fa-address-card"></i> Address Line 2</label><br>
						<input type="text" id="line2" name="aline2" placeholder="Address Line 2" minlength="5" maxlength="100" pattern="^[a-zA-Z0-9,-.'()/ ]*$"  title="Remove unwanted characters."required><br>
						<!------------------ ------------------->
					</div>
				</div>
			</div>
			
			<div class="row rowMargin">
				<div class="col6">
					<div>
						<label for="district"><i class="fa fa-city"></i>District</label><br>

						
						<input  list ="districts"  id="district" name="district" placeholder="Gampaha" minlength="5" maxlength="100" pattern="[a-zA-Z'-'\s]*" title="Remove unwanted characters." required>
						<datalist id="districts">
						
						<option value="Ampara">
						<option value="Anuradhapura">
						<option value="Badulla">
						<option value="Batticaloa">
						<option value="Colombo">
						<option value="Galle">
						<option value="Gampaha">
						<option value="Hambantota">
						<option value="Jaffna">
						<option value="Kalutara">
						<option value="Kandy">
						<option value="Kegalle">
						<option value="Kilinochchi">
						<option value="Kurunegala">
						<option value="Mannar">
						<option value="Matale">
						<option value="Matara">
						<option value="Monaragala">
						<option value="Mullaitivu">
						<option value="Nuwara Eliya">
						<option value="Polonnaruwa">
						<option value="Puttalam">
						<option value="Ratnapura">
						<option value="Trincomalee">
						<option value="Vavuniya">						
						
						</datalist>
					</div>
				</div>
				<div class="col6">
					<div>
						<label for="city"><i class="fa fa-globe"></i> City</label><br>
						<input type="text" id="city" name="city" placeholder="Kiribathgoda" minlength="3" maxlength="50" pattern="[a-zA-Z'-'\s]*" title="Remove unwanted characters." required><br>
					
					</div>
				</div>
			</div>
			<div class="row rowMargin ">
				<div class="col12">
					<div>
					<label for="country"><i class="fa fa-globe"></i> Country</label><br>
						<input type="text" id="country" value="Srilanka" name="country"  minlength="3" maxlength="50" pattern="[a-zA-Z'-'\s]*" title="Remove unwanted characters." required><br>
						</div>
				</div>
			</div>

			<div class="row rowMargin">
				<div class="col12">
					<div class="radio-hover">
						<!------------------Gender Radio ------------------>
						<label style="font-size: 18px;" for="gender"> Select your Gender</label>
						<br><br>
						<label for="male"><i class="fa fa-male fa-2x"></i>&nbsp; Male</label>
						<input type="radio" id="male" name="gender" value="male" required>
						<label for="female"><i class="fa fa-female fa-2x"></i>&nbsp; Female </label>
						<input type="radio" id="female" name="gender" value="female" required>

					</div>
				</div>
			</div>
				<div class="row ">
					<div class="col12 ">
						<div class=" margint100 marginl100">
							<h2>User Login Credentials</h2>
						</div>
					</div>
				</div>
				<div class="row  rowMargin">
					<div class="col12">
						<div>
							<label for="Username-field"><i class="fa fa-user-alt"></i> Username</label><br>
							<input type="text" name="Username-field" placeholder="Username" minlength="5" maxlength="100" pattern="[a-zA-Z0-9'-'\s]*" title="Invalid Username Format." required><br>
						</div>
					</div>
				</div>
				<div class="row  rowMargin">
					<div class="col6">
						<div>
							<label for="Password-field"><i class="fa fa-key"></i> Password</label><br>
							<input type="password" name="Password-field" id="pass-field" placeholder="****" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
  							title="Password should be same to the required type." required><br>
							<p> &#x25FE; Must contain at least one  number and one uppercase and lowercase letter.</p><br>
							<p>&#x25FE; At least 8 or more characters.</p>
						</div>
					</div>
					<div class="col6">
						<div>
							<label for="Confirm-Password-field"><i class="fa fa-key"></i> Confirm Password</label><br>
							<input type="password" name="Confirm-Password-field" id="con-pass-field"
							placeholder="****" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
  							title="Password should be same to the required type." required><br><br>
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
		

    <!-- bottom-part-------------------------------------------->

	</div>
	<!--Container------------------------------------------>
	<script type="text/javascript" src="/js/Common/Signin.js"></script>
</body>

</html>