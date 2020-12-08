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
			<form enctype='multipart/form-data' method="post" action ="../Ministore/createProduct">
				<!-- <div class= "inp"> -->
				<!-- <h2 style="font-family: 'Lato', sans-serif;">Seller Details</h2> -->
				<div class="row">
				<div class="col6 padding">
				<label for="fname"><i class="fas fa-file-signature"></i> &nbsp;Name</label><br>
				<input type="text" id="fname" name="proName" placeholder="">
				</div>
				<div class="col4 padding">
				<!-- <?php
					if(isset($this->ministore) and !empty($this->ministore) and $this->ministore->num_rows>0){
						$row = $this->ministore->fetch_assoc();
						echo '<input type="hidden" name="ministore" value="'.$row["name"].'" />';
					}
				?> -->
				<label for="fname"><i class="fas fa-file-signature"></i> &nbsp;Category</label><br>
				<select name="category" id="categories">
					<option value="" style="display:none"></option>
					<?php 
					if(isset($this->categories) and !empty($this->categories) and $this->categories->num_rows>0){
						while($row = $this->categories->fetch_assoc()){
							echo '<option value="'.$row["CatID"].'">'.$row["name"].'</option>';
						}
					}else{
						echo '<option value="">Not loaded</option>';
					}
					?>
                </select>
				</div>
				</div>
				<div class="row col8 padding">
				<label for="lname"><i class="fas fa-info"></i>&nbsp; Description</label><br>
				<textarea id="email" name="description" placeholder=""></textarea>
                </div>
                <div class="row">
				<div class="col6 fitcontent padding">
				<label for="phn-no"><i class="fas fa-boxes"></i>&nbsp; Quantity</label><br>
				<input type="number" id="phn-no" name="availQuantity" placeholder="">
				</div>
				<div class="col6 padding">
				<label for="dob"><i class="fas fa-money-bill-wave"></i>&nbsp; Price</label><br>
				<input type="number" id="Birth" name="price" placeholder="">
                </div>
                </div>
				<!------------------Address section------------------->
				<div class="row col6 padding">
				<label for="Address"><i class="fas fa-percent"></i>&nbsp;Commission Rate</label><br>
				<input type="number" id="line1" name="comRate" placeholder="">
				</div>
				<div class="row">
				<div class="col6 padding">
				<label for="Address"><i class="fas fa-images"></i>&nbsp;Main Images</label><br>
				<input type="file" id="line2" name="mainImage" placeholder="" accept="image/*"><br>
				</div>
				<div class="row col6 padding">
				<label for="Address"><i class="fas fa-images"></i>&nbsp;Other Images</label><br>
				<input type="file" id="line2" name="otherImages" placeholder="" accept="image/*" multiple><br>
				</div>
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