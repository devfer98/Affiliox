<html>
<head>
	<title>Affiliox-BuyerRegistration</title>
	<link rel="shortcut icon" href="/images/Logo/logoOnly.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="/css/Customer/common.css" />
    <link rel="stylesheet" type="text/css" href="/css/Customer/customer-grid.css" />
    <script type="text/javascript" src="/js/Common/Signin.js"></script>
    <script type="text/javascript" src="/js/Customer/nav-fixed.js"></script>
	<script src="https://kit.fontawesome.com/6cdc06033e.js" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
	<!---Navigation bar-------------------------------------------->
    <div class="container">
		<div class="backcolor"> 
		  <div class="row hidden-xm marginb100 backcolor">
		  <div class=" nav-bar sm-logo-nav hidden-xm  sm-header backcolor " >
			  
			<div class="sm-1 open-btn" onclick="openNav()">&#9776;</div>
			<div class="sm-9">
			  <a href="/index.html"><img src="/images/Logo/Sidelogo.png" alt="Affiliox LOGO"/></a>
			</div>
			<div class="sm-2 ">
			  <div class="selector margint20">
				<select>
				  <option value="sign in">Sign In</option><br/>
				  <option value="login">Login</option><br/>
				</select>
			  </div>
			</div>
			
	
		  </div>
		</div>
		  <div class=" nav-bar center backcolor">
			<div class="col1 open-btn hidden-sm" onclick="openNav()">&#9776;</div>
			<div class="col2 hidden-sm">
			  <a href="/index.html"><img src="/images/Logo/Sidelogo.png" alt="Affiliox LOGO"/></a>
			</div>
	
			<div class="col4 center">
			  <ul>
				<a href=""><i class="fas fa-home"></i>&nbsp;Home</a>
				<a href=""><i class="fas fa-users"></i>&nbsp;About Us</a>
				<a href=""><i class="fas fa-inbox"></i>&nbsp;Help</a>
				<a href=""><i class="fas fa-users"></i>&nbsp;Account</a>
			  </ul>
			</div>
	
			<div class="col4 search fitcontent center">
			  <ul>
				<input type="text" name="search" placeholder="Headsets" />
				<a href=""><i class="fas fa-search"></i></a>
			  </ul>
			</div>
			<div class="col1 hidden-sm ">
			  <div class="selector margint20">
				<select>
				  <option value="sign in">Sign in</option><br/>
				  <option value="login">Login</option><br/>
				</select>
			  </div>
			</div>
		  </div>
		  <div class="row">
			  <div class="col12 fullwidth">
			<hr>
			  </div>		
		</div>
	  </div>
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
			</div>
		</div>
		<div class="row  center">
            <div class="errorMsg">
				
            <p><?php if(isset($this->UImsg) and !empty($this->UImsg)){echo $this->UImsg;}  ?></p></div></div>
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
						<input type="text" id="email" name="email" placeholder="enter your e-mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Please fill the filed required format." required ><br>
					</div>
				</div>
				<div class="col6">
					<div class="">
						<label for="phn-no"><i class="fa fa-phone"></i>&nbsp; Phone Number</label><br>
						<input type="tel" id="phn-no" name="phn-no" placeholder="Phone number" minlength="10" maxlength="10" 
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
						<input type="text" id="line1" name="aline1" placeholder="Address Line 1" minlength="5" maxlength="100" required><br><br>
						<label for="Addressl2"><i class="fa fa-address-card"></i> Address Line 2</label><br>
						<input type="text" id="line2" name="aline2" placeholder="Address Line 2" minlength="5" maxlength="100" required><br>
						<!------------------ ------------------->
					</div>
				</div>
			</div>

			<div class="row rowMargin">
				<div class="col6">
					<div>
						<label for="city"><i class="fa fa-city"></i> City</label><br>
						<input type="text" id="city" name="acity" placeholder="Current city" minlength="5" maxlength="100" pattern="[a-zA-Z'-'\s]*" title="Remove unwanted characters." required>
					</div>
				</div>
				<div class="col6">
					<div>
						<label for="country"><i class="fa fa-globe"></i> Country</label><br>
						<input type="text" id="country" name="country" placeholder="Country" minlength="3" maxlength="50" pattern="[a-zA-Z'-'\s]*" title="Remove unwanted characters." required><br>
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
							<input type="text" name="Username-field" placeholder="Username" minlength="5" maxlength="100" pattern="[a-zA-Z'-'\s]*" title="Remove unwanted characters." required><br>
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

    <div class="row">
		<div class="col12 fullwidth">
	  <hr>
		</div>
	  
  </div>
  <div class="row center backcolor">

	
	<div class=" col3 img-span hidden-sm">
	  <td ><img src="/images/Logo/SideLogo.png"  width='200'></td>
	</div>

	<div class="col9  nav-bar center">       
  <table class="row center sm-table">
	  <tr class="thead center">
	  
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
   <!-- bottom-part -->

	  <div class="row footer backcolor paddingt20">
	
			<ul>
				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua.</li>
				<li> Affiliox &trade;</li>
			</ul>
	  </div>	 <!-- footer -->
	  
</div>

  <div id="mySidenav" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<a href="">User profile<i class="far fa-user"></i></a>  		
	<a href="">Marker Place<i class="fab fa-shopify"></i></a>
	<a href="">Shopping cart<i class="fas fa-shopping-cart"></i></i></a>
		<a href="">Orders<i class="fas fa-chart-line"></i></i></a>
		<a href="">Transactions<i class="fas fa-money-check-alt"></i></a>
		<a href="">Feedback<i class="fas fa-phone-square"></i></i></a>
		<a href="">Support<i class="fas fa-envelope-open-text"></i></a>
  </div>
  <span onclick="openNav()"></span>

	</div>
	<!--Container------------------------------------------>
	<script type="text/javascript" src="/js/Common/Signin.js"></script>
</body>

</html>