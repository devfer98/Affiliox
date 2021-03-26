<!DOCTYPE html>
<html>
<head>
	<title>Add Product</title>
	<!-- <link rel="stylesheet" type="text/css" href="../css/common-dashboard.css"> -->
	<link rel="shortcut icon" href="../images/logoOnly.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="/css/Seller/main.css">
	<link rel="stylesheet" type="text/css" href="/css/Seller/grid.css">
	<link rel="stylesheet" type="text/css" href="/css/Seller/tabs.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous"/>
	<link href="https://fonts.googleapis.com/css2?family=Lato&family=Nunito&family=Roboto+Mono&display=swap" rel="stylesheet">
	<!-- <script src="/js/Seller/common-dashboard.js"></script> -->
	<script type="text/javascript" src="/js/Seller/postPro.js"></script>
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
			<div class="col8 col-center inner-part">
			<form enctype='multipart/form-data' method="post" action ="../Ministore/createProduct">
				<div class= "inp">
				<div class="row col12 padding commonB">
				<h2 style="font-family: 'Lato', sans-serif;">Product Details</h2>
				</div>
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
				<label for="fname"><i class="fas fa-filter"></i> &nbsp;Category</label><br>
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
				<label for="dob"><i class="fas fa-money-bill-wave"></i>&nbsp; Price(Rs.)</label><br>
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
				<label for="Address"><i class="fas fa-images"></i>&nbsp;Main Image</label><br>
				<input type="file" id="line2" name="mainImage" placeholder="" accept="image/*"><br>
				</div>
				<div class="row col6 padding">
				<label for="Address"><i class="fas fa-images"></i>&nbsp;Other Images</label><br>
				<input type="file" id="line2" name="otherImages[]" placeholder="" accept="image/*" multiple><br>
				</div>
				</div>

				<div class="row col8 padding">
				<h2 style="font-family: 'Lato', sans-serif;">Delivery Details</h2>
                </div>
				<div class="row">
				<div class="col6 padding">
				<label for="Address"><i class="fas fa-weight"></i>&nbsp;Weight(kg)</label><br>
				<input type="number" id="line1" name="proWeight" placeholder="">
				</div>
				<div class="col4 padding">
				<label for="fname"><i class="fas fa-map-marker-alt"></i> &nbsp;Dispatch District</label><br>
				<select name="startDis" id="categories">
					<option value="" style="display:none"></option>
					<option value="Ampara">Ampara</option>
					<option value="Anuradhapura">Anuradhapura</option>
					<option value="Badulla">Badulla</option>
					<option value="Batticaloa">Batticaloa</option>
					<option value="Colombo">Colombo</option>
					<option value="Galle">Galle</option>
					<option value="Gampaha">Gampaha</option>
					<option value="Hambantota">Hambantota</option>
					<option value="Jaffna">Jaffna</option>
					<option value="Kalutara">Kalutara</option>
					<option value="Kandy">Kandy</option>
					<option value="Kegalle">Kegalle</option>
					<option value="Kilinochchi">Kilinochchi</option>
					<option value="Kurunegala">Kurunegala</option>
					<option value="Mannar">Mannar</option>
					<option value="Matale">Matale</option>
					<option value="Matara">Matara</option>
					<option value="Monaragala">Monaragala</option>
					<option value="Mullaitivu">Mullaitivu</option>
					<option value="Nuwara Eliya">Nuwara Eliya</option>
					<option value="Polonnaruwa">Polonnaruwa</option>
					<option value="Puttalam">Puttalam</option>
					<option value="Ratnapura">Ratnapura</option>
					<option value="Trincomalee">Trincomalee</option>
					<option value="Vavuniya">Vavuniya</option>
                </select>
				</div>
				</div>
				
				<div class="row">
				<div class="col12 padding">
				<label for="Address"><i class="fas fa-weight"></i>&nbsp;Common Delivery Period(days)</label><br>
				<div class="row">
					<div class="col6"><input type="number" id="comPeriod" name="" placeholder=""></div>
					<div class="col6 commonB" style="margin-top: 15px;"><button class="center" type="button" onclick="periodPopulate()">Populate</button></div>	
				</div>
				</div>
				</div>

				<div class="row">
				<div class="col12 padding">
				<label for="Address"><i class="fas fa-weight"></i>&nbsp;Common Delivery Price(Rs.)</label><br>
				<div class="row">
					<div class="col6"><input type="number" id="comPrice" name="" placeholder=""></div>
					<div class="col6 commonB" style="margin-top: 15px;"><button class="center" type="button" onclick="pricePopulate()">Populate</button></div>	
				</div>
				</div>
				</div>
				
				<!-- <div class="row">
				<div class="col6 padding">
				<label for="Address"><i class="fas fa-weight"></i>&nbsp;Common Delivery Period(days)</label><br>
				<input type="number" id="comPeriod" name="comPeriod" placeholder="">
				</div>
				<div class="col6 padding">
				<label for="Address"><i class="fas fa-weight"></i>&nbsp;Common Delivery Price(Rs.)</label><br>
				<input type="number" id="comPrice" name="comPrice" placeholder="">
				</div>
				</div>
				</div> -->

				<div class="row col12 padding">
					<div id="tab1" class="tabcontent row" style="display: block;">
						<div class="col-center" style="width: 95%;">
						<div class="row heading">
							<div class="col4">Delivery District</div>
							<div class="col4">Delivery Period(days)</div>
							<div class="col4">Price(Rs.)</div>
						</div>
						<div class="row record">
							<div class="col4">Ampara</div>
							<div style="padding:0px;"class="col4"><input class="col3" type="number" id="fname" name="period2" placeholder="Enter Period"></div>
							<div style="padding:0px;"class="col4"><input class="col3" type="number" id="fname" name="price2" placeholder="Enter Price"></div>
						</div>
						<div class="row record">
							<div class="col4">Anuradhapura</div>
							<div style="padding:0px;"class="col4"><input class="col3" type="number" id="fname" name="period3" placeholder="Enter Period"></div>
							<div style="padding:0px;"class="col4"><input class="col3" type="number" id="fname" name="price3" placeholder="Enter Price"></div>
						</div>
						<div class="row record">
							<div class="col4">Badulla</div>
							<div style="padding:0px;"class="col4"><input class="col3" type="number" id="fname" name="period4" placeholder="Enter Period"></div>
							<div style="padding:0px;"class="col4"><input class="col3" type="number" id="fname" name="price4" placeholder="Enter Price"></div>
						</div>
						<div class="row record">
							<div class="col4">Batticaloa</div>
							<div style="padding:0px;"class="col4"><input class="col3" type="number" id="fname" name="period5" placeholder="Enter Period"></div>
							<div style="padding:0px;"class="col4"><input class="col3" type="number" id="fname" name="price5" placeholder="Enter Price"></div>
						</div>
						<div class="row record">
							<div class="col4">Colombo</div>
							<div style="padding:0px;"class="col4"><input class="col3" type="number" id="fname" name="period6" placeholder="Enter Period"></div>
							<div style="padding:0px;"class="col4"><input class="col3" type="number" id="fname" name="price6" placeholder="Enter Price"></div>
						</div>
						<div class="row record">
							<div class="col4">Galle</div>
							<div style="padding:0px;"class="col4"><input class="col3" type="number" id="fname" name="period7" placeholder="Enter Period"></div>
							<div style="padding:0px;"class="col4"><input class="col3" type="number" id="fname" name="price7" placeholder="Enter Price"></div>
						</div>
						<div class="row record">
							<div class="col4">Gampaha</div>
							<div style="padding:0px;"class="col4"><input class="col3" type="number" id="fname" name="period8" placeholder="Enter Period"></div>
							<div style="padding:0px;"class="col4"><input class="col3" type="number" id="fname" name="price8" placeholder="Enter Price"></div>
						</div>
						<div class="row record">
							<div class="col4">Hambantota</div>
							<div style="padding:0px;"class="col4"><input class="col3" type="number" id="fname" name="period9" placeholder="Enter Period"></div>
							<div style="padding:0px;"class="col4"><input class="col3" type="number" id="fname" name="price9" placeholder="Enter Price"></div>
						</div>
						<div class="row record">
							<div class="col4">Jaffna</div>
							<div style="padding:0px;"class="col4"><input class="col3" type="number" id="fname" name="period10" placeholder="Enter Period"></div>
							<div style="padding:0px;"class="col4"><input class="col3" type="number" id="fname" name="price10" placeholder="Enter Price"></div>
						</div>
						<div class="row record">
							<div class="col4">Kandy</div>
							<div style="padding:0px;"class="col4"><input class="col3" type="number" id="fname" name="period11" placeholder="Enter Period"></div>
							<div style="padding:0px;"class="col4"><input class="col3" type="number" id="fname" name="price11" placeholder="Enter Price"></div>
						</div>
						<div class="row record">
							<div class="col4">Kegalle</div>
							<div style="padding:0px;"class="col4"><input class="col3" type="number" id="fname" name="period12" placeholder="Enter Period"></div>
							<div style="padding:0px;"class="col4"><input class="col3" type="number" id="fname" name="price12" placeholder="Enter Price"></div>
						</div>
						<div class="row record">
							<div class="col4">Kilinochchi</div>
							<div style="padding:0px;"class="col4"><input class="col3" type="number" id="fname" name="period13" placeholder="Enter Period"></div>
							<div style="padding:0px;"class="col4"><input class="col3" type="number" id="fname" name="price13" placeholder="Enter Price"></div>
						</div>
						<div class="row record">
							<div class="col4">Kurunegala</div>
							<div style="padding:0px;"class="col4"><input class="col3" type="number" id="fname" name="period14" placeholder="Enter Period"></div>
							<div style="padding:0px;"class="col4"><input class="col3" type="number" id="fname" name="price14" placeholder="Enter Price"></div>
						</div>
						<div class="row record">
							<div class="col4">Mannar</div>
							<div style="padding:0px;"class="col4"><input class="col3" type="number" id="fname" name="period15" placeholder="Enter Period"></div>
							<div style="padding:0px;"class="col4"><input class="col3" type="number" id="fname" name="price15" placeholder="Enter Price"></div>
						</div>
						<div class="row record">
							<div class="col4">Matale</div>
							<div style="padding:0px;"class="col4"><input class="col3" type="number" id="fname" name="period16" placeholder="Enter Period"></div>
							<div style="padding:0px;"class="col4"><input class="col3" type="number" id="fname" name="price16" placeholder="Enter Price"></div>
						</div>
						<div class="row record">
							<div class="col4">Matara</div>
							<div style="padding:0px;"class="col4"><input class="col3" type="number" id="fname" name="period17" placeholder="Enter Period"></div>
							<div style="padding:0px;"class="col4"><input class="col3" type="number" id="fname" name="price17" placeholder="Enter Price"></div>
						</div>
						<div class="row record">
							<div class="col4">Monaragala</div>
							<div style="padding:0px;"class="col4"><input class="col3" type="number" id="fname" name="period18" placeholder="Enter Period"></div>
							<div style="padding:0px;"class="col4"><input class="col3" type="number" id="fname" name="price18" placeholder="Enter Price"></div>
						</div>
						<div class="row record">
							<div class="col4">Mullaitivu</div>
							<div style="padding:0px;"class="col4"><input class="col3" type="number" id="fname" name="period19" placeholder="Enter Period"></div>
							<div style="padding:0px;"class="col4"><input class="col3" type="number" id="fname" name="price19" placeholder="Enter Price"></div>
						</div>
						<div class="row record">
							<div class="col4">Nuwara Eliya</div>
							<div style="padding:0px;"class="col4"><input class="col3" type="number" id="fname" name="period20" placeholder="Enter Period"></div>
							<div style="padding:0px;"class="col4"><input class="col3" type="number" id="fname" name="price20" placeholder="Enter Price"></div>
						</div>
						<div class="row record">
							<div class="col4">Polonnaruwa</div>
							<div style="padding:0px;"class="col4"><input class="col3" type="number" id="fname" name="period21" placeholder="Enter Period"></div>
							<div style="padding:0px;"class="col4"><input class="col3" type="number" id="fname" name="price21" placeholder="Enter Price"></div>
						</div>
						<div class="row record">
							<div class="col4">Puttalam</div>
							<div style="padding:0px;"class="col4"><input class="col3" type="number" id="fname" name="period22" placeholder="Enter Period"></div>
							<div style="padding:0px;"class="col4"><input class="col3" type="number" id="fname" name="price22" placeholder="Enter Price"></div>
						</div>
						<div class="row record">
							<div class="col4">Ratnapura</div>
							<div style="padding:0px;"class="col4"><input class="col3" type="number" id="fname" name="period23" placeholder="Enter Period"></div>
							<div style="padding:0px;"class="col4"><input class="col3" type="number" id="fname" name="price23" placeholder="Enter Price"></div>
						</div>
						<div class="row record">
							<div class="col4">Trincomalee</div>
							<div style="padding:0px;"class="col4"><input class="col3" type="number" id="fname" name="period24" placeholder="Enter Period"></div>
							<div style="padding:0px;"class="col4"><input class="col3" type="number" id="fname" name="price24" placeholder="Enter Price"></div>
						</div>
						<div class="row record">
							<div class="col4">Vavuniya</div>
							<div style="padding:0px;"class="col4"><input class="col3" type="number" id="fname" name="period25" placeholder="Enter Period"></div>
							<div style="padding:0px;"class="col4"><input class="col3" type="number" id="fname" name="price25" placeholder="Enter Price"></div>
						</div>
						<div class="row record">
							<div class="col4">Jaffna</div>
							<div style="padding:0px;"class="col4"><input class="col3" type="number" id="fname" name="period26" placeholder="Enter Period"></div>
							<div style="padding:0px;"class="col4"><input class="col3" type="number" id="fname" name="price26" placeholder="Enter Price"></div>
						</div>
						</div>
					</div>
				</div>
				
				<!-- </div> -->
				<div class="row col12 padding commonB">
					<button class="center" type="submit" value="submit">Next</button>	
				</div>
				
			</div>
			</form>
			</div>
			
		</div>
		
	</div>	

</body>
</html>