<!DOCTYPE html>
<html>
<head>
	<title>Update Ministore</title>
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
				<p>Update MiniStore</p>
				<!-- <hr> -->
			</div> 
				<!------------------Seller Registration Form------------------->
		</div>
		<div class="row row-padding">	
			<div class="col6 col-center inner-part inp">
			<div class="row col12">
				<p style="color:red;"><?php if(isset($this->errorMssg) and !empty($this->errorMssg)){echo $this->errorMssg;}  ?></p>
			</div>
			<form enctype='multipart/form-data' method="post" action ="../Ministore/edit">
				<!-- <div class= "inp"> -->
				<?php  
                if(isset($this->store) and !empty($this->store)){
					while($row = $this->store->fetch_assoc()){ 
						$attributes=explode(", ", $row["design"]);    
            	?>
				<h2 class="row col12" style="font-family: 'Lato', sans-serif;">Store Details</h2>
				<div class="row col8 padding">
				<label for="fname"> &nbsp;Store Name</label><br>
				<input readonly type="text" id="fname" name="storeName" value="<?php echo $row['name'] ?>" placeholder="">
                </div>
                <div class="row col6 padding">
                <label for="Address">Logo (add image to update)</label><br>
                <input type="file" id="line2" name="logoImage" placeholder="" accept="image/*"><br>
                </div>
				<!-- <div class="row col12 padding">
				<label for="lname">&nbsp; Home Page Title</label><br>
				<input type="text" id="email" name="email" placeholder="">
                </div> -->
                <!-- <div class="row" style="padding:0px;"> -->
				<div class="row col12 padding">
				<label for="phn-no">&nbsp; Description</label><br>
				<textarea id="phn-no" name="description" placeholder=""><?php echo $row['Description'] ?></textarea>
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
				<label for="Address">Slider Images (add images to update)</label><br>
				<input type="file" id="line2" name="sliderImages[]" placeholder="" accept="image/*" multiple><br>
                </div>
                <div class="row">
                <div class="col6 fitcontent padding">
                <label for="Address">Background Colour</label><br>
                <input type="color" id="line2" name="navColor" value="<?php echo $attributes[1] ?>" placeholder=""><br>
                </div>
                <div class="col6 padding">
                <label for="Address">Font Colour</label><br>
                <input type="color" id="line2" name="buttonColor" value="<?php echo $attributes[2] ?>" placeholder=""><br>
                </div>
                </div>
                <div class="row col4 padding">
                <label for="Address">Font</label><br>
                <select name="font" id="font">
                    <option value="Arial" <?php if ($attributes[0] == 'Arial') echo ' selected="selected"'; ?>> Arial</option>
					<option value="Verdana" <?php if ($attributes[0] == 'Verdana') echo ' selected="selected"'; ?>> Verdana</option>
					<option value="Helvetica" <?php if ($attributes[0] == 'Helvetica') echo ' selected="selected"'; ?>>Helvetica</option>
					<option value="Tahoma" <?php if ($attributes[0] == 'Tahoma') echo ' selected="selected"'; ?>>Tahoma</option>
					<option value="Trebuchet MS" <?php if ($attributes[0] == 'Trebuchet MS') echo ' selected="selected"'; ?>>Trebuchet MS</option>
                    <option value="Times New Roman" <?php if ($attributes[0] == 'Times New Roman') echo ' selected="selected"'; ?>>Times New Roman</option>
                    <option value="Georgia" <?php if ($attributes[0] == 'Georgia') echo ' selected="selected"'; ?>>Georgia</option>
					<option value="Garamond" <?php if ($attributes[0] == 'Garamond') echo ' selected="selected"'; ?>>Garamond</option>
					<option value="Courier New" <?php if ($attributes[0] == 'Courier New') echo ' selected="selected"'; ?>>Courier New</option>
                    <option value="Brush Script MT" <?php if ($attributes[0] == 'Brush Script MT') echo ' selected="selected"'; ?>>Brush Script MT</option>
                </select>
                </div>
				<?php
                    }
                }
                ?>
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