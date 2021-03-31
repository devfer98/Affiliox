<!DOCTYPE html>
<html>
<head>
	<title>Update Product</title>
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
				<p>Update Product</p>
				<!-- <hr> -->
			</div> 
				<!------------------Seller Registration Form------------------->
		</div>
		<div class="row row-padding">	
			<div class="col6 col-center inner-part inp">
			<form method="post" action="../Ministore/editProduct">
				<!-- <div class= "inp"> -->
				<!-- <h2 style="font-family: 'Lato', sans-serif;">Seller Details</h2> -->
				<div class="row col12">
					<p style="color:red;"><?php if(isset($this->errorMssg) and !empty($this->errorMssg)){echo $this->errorMssg;}  ?></p>
				</div>
				<?php  
					if(isset($this->product) and !empty($this->product)){
						while($row = $this->product->fetch_assoc()){
					?>
				<div class="row col8 padding">
					<input type="hidden" name="productID" value="<?php echo $row['productID'] ?>" />
					<label for="fname"> &nbsp;Quantity</label><br>
					<input type="number" id="fname" name="availQuantity" placeholder="" value="<?php echo $row['availQuantity'] ?>">
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