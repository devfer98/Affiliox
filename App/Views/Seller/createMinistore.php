<!DOCTYPE html>
<html>
<head>
	<title>Create Ministore</title>
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
				<p>Create MiniStore</p>
				<!-- <hr> -->
			</div> 
				<!------------------Seller Registration Form------------------->
		</div>
		<div class="row row-padding">	
			<div class="col6 col-center inner-part inp">
			<div class="row col12">
				<p style="color:red;"><?php if(isset($this->errorMssg) and !empty($this->errorMssg)){echo $this->errorMssg;}  ?></p>
			</div>
			<form enctype='multipart/form-data' method="post" action ="../Seller/createMinistore">
				<!-- <div class= "inp"> -->
				<h2 class="row col12" style="font-family: 'Lato', sans-serif;">Store Details</h2>
				<div class="row col8 padding">
				<label for="fname"> &nbsp;Store Name</label><br>
				<input type="text" id="fname" name="storeName" placeholder="">
                </div>
                <div class="row col6 padding">
                <label for="Address">Logo</label><br>
                <input type="file" id="line2" name="logoImage" placeholder="" accept="image/*"><br>
                </div>
				<!-- <div class="row col12 padding">
				<label for="lname">&nbsp; Home Page Title</label><br>
				<input type="text" id="email" name="email" placeholder="">
                </div> -->
                <!-- <div class="row" style="padding:0px;"> -->
				<div class="row col12 padding">
				<label for="phn-no">&nbsp; Description</label><br>
				<textarea id="phn-no" name="description" placeholder=""></textarea>
				</div>
				<!-- <div class="row col12 padding">
				<label for="dob">&nbsp; About Us</label><br>
				<textarea id="Birth" name="dob" placeholder=" "></textarea>
                </div>
                
				<div class="row col12 padding">
				<label for="Address">Contact Us</label><br>
				<textarea type="text" id="line1" name="aline1" placeholder=""></textarea>
                </div> -->

                <h2 class="row col12" style="font-family: 'Lato', sans-serif;">Store Design</h2>
				<div class="row col6 padding">
				<label for="Address">Slider Images</label><br>
				<input type="file" id="line2" name="sliderImages[]" placeholder="" accept="image/*" multiple><br>
                </div>
                <div class="row">
                <div class="col6 fitcontent padding">
                <label for="Address">Navigation Background Colour</label><br>
                <input type="color" id="line2" name="navColor" placeholder=""><br>
                </div>
                <div class="col6 padding">
                <label for="Address">Button Background Colour</label><br>
                <input type="color" id="line2" name="buttonColor" placeholder=""><br>
                </div>
                </div>
                <div class="row col4 padding">
                <label for="Address">Font</label><br>
                <select name="font" id="font">
                    <option value="Arial"> Arial</option>
					<option value="Verdana"> Verdana</option>
					<option value="Helvetica">Helvetica</option>
					<option value="Tahoma">Tahoma</option>
					<option value="Trebuchet MS">Trebuchet MS</option>
                    <option value="Times New Roman">Times New Roman</option>
                    <option value="Georgia">Georgia</option>
					<option value="Garamond">Garamond</option>
					<option value="Courier New">Courier New</option>
                    <option value="Brush Script MT">Brush Script MT</option>
                </select>
                </div>
				<!-- </div> -->
			<!------------------Buttons------------------->
				<div class="row col12 padding commonB">
					<button class="center" type="submit" value="submit">Save</button>	
				</div>
			<!-- </div> -->
			</form>
			</div>
		</div>

	</div> 

</body>
</html>