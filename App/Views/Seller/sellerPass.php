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
				<p>Change Password</p>
				<!-- <hr> -->
			</div> 
				<!------------------Seller Registration Form------------------->
		</div>
		<div class="row row-padding">	
			<div class="col6 col-center inner-part inp">
			<form action="" method="post">
				<div class="padding">
				<label for="fname">Current Password</label><br>
				<input type="text" id="fname" name="fullname" placeholder="" minlength="5" maxlength="100" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Please fill the filed required format." required > <br>
				</div>
				<div class="padding">
				<label for="lname">New Password</label><br>
				<input type="text" id="email" name="email" placeholder="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Please fill the filed required format." required ><br>
				</div>
				<div class="padding">
				<label for="phn-no">Confirm New Password</label><br>
				<input type="text" id="email" name="email" placeholder="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Please fill the filed required format." required ><br>
				</div>
				
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