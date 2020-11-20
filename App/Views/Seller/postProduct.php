<!DOCTYPE html>
<html>
<head>
	<title>Add Product</title>
	<!-- <link rel="stylesheet" type="text/css" href="../css/common-dashboard.css"> -->
	<link rel="shortcut icon" href="../images/logoOnly.png" type="image/x-icon">
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
			<div class="col12 center title">
				<p>Add Product</p>
				<!-- <hr> -->
			</div> 
				<!------------------Seller Registration Form------------------->
		</div>
		<div class="row row-padding">	
			<div class="col8 col-center inner-part inp">
			<form>
				<!-- <div class= "inp"> -->
				<!-- <h2 style="font-family: 'Lato', sans-serif;">Seller Details</h2> -->
				<div class="row col6 padding">
				<label for="fname"> &nbsp;Name</label><br>
				<input type="text" id="fname" name="fullname" placeholder="">
				</div>
				<div class="row col8 padding">
				<label for="lname">&nbsp; Description</label><br>
				<textarea id="email" name="email" placeholder=""></textarea>
                </div>
                <div class="row">
				<div class="col6 fitcontent padding">
				<label for="phn-no">&nbsp; Quantity</label><br>
				<input type="text" id="phn-no" name="phn-no" placeholder="">
				</div>
				<div class="col6 padding">
				<label for="dob">&nbsp; Price</label><br>
				<input type="text" id="Birth" name="dob" placeholder="">
                </div>
                </div>
				<!------------------Address section------------------->
				<div class="row col6 padding">
				<label for="Address">Commission Rate</label><br>
				<input type="text" id="line1" name="aline1" placeholder="">
				</div>
				<div class="row col6 padding">
				<label for="Address">Images</label><br>
				<input type="file" id="line2" name="aline2" placeholder=""><br>
				</div>

				<!-- </div> -->
			<!------------------Buttons------------------->
				<div class="row col12 padding">
					<button class="center" type="submit" value="submit">Save</button>	
				</div>
			<!-- </div> -->
			</form>
			</div>
		</div>
	</div>	

</body>
</html>