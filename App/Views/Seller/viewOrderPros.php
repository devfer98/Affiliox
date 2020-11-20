<!DOCTYPE html>
<html>
<head>
	<title>Order Details</title>
	<!-- <link rel="stylesheet" type="text/css" href="../css/common-dashboard.css"> -->
	<link rel="shortcut icon" href="../images/logoOnly.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="/css/Seller/main.css">
	<link rel="stylesheet" type="text/css" href="/css/Seller/grid.css">
	<link rel="stylesheet" type="text/css" href="/css/Seller/market.css">
	<link rel="stylesheet" type="text/css" href="/css/Seller/sellerProfile.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous"/>
	<link href="https://fonts.googleapis.com/css2?family=Lato&family=Nunito&family=Roboto+Mono&display=swap" rel="stylesheet">
	<script src="/js/Seller/common-dashboard.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
	<!-------------- Top-Navigation-Bar ---------------------->
	<div id="main" class="container navigation">

        <div class="row row-padding">	
			<div class="col12 center title">
				<p>Order Details</p>
			</div> 
            <div class="col8 col-center inner-part">
                <table>
					<tr>
						<td id="td-1">Order ID</td>
						<td>D0001</td>
					</tr>
					<tr>
						<td id="td-1">Status</td>
						<td>Sample DOB is here</td>
					</tr>
					<tr>
						<td id="td-1">Issued Date and Time</td>
						<td>sample@gmail.com</td>
					</tr>
					<tr>
						<td id="td-1">Delivery Address</td>
						<td>Sample number is here</td>
					</tr>
					<tr>
						<td id="td-1">Delivery Deadline Date</td>
						<td>Sample address is here</td>
					</tr>
					<tr>
						<td id="td-1">Total Amount</td>
						<td>Sample state is here</td>
					</tr>
				</table>
			</div>
			<div class="col12 center title">
				<p>Ordered Products</p>
			</div> 
			<div class="col8 col-center boxsummery inp row" style="margin-bottom: 20px;">
				<div class="col3"><img class="imgw" src="../images/action-camera.jpg"></div>
				<div class="col5 padding">
					<h3>Inspire 1</h3>
					<p>Price :Rs 4000.00</p>
					<p>Delivery:Free</p>
				</div>
				<div class="col3 fitcontent padding">
					<label><i class="fa fa-truck-loading"></i>&nbsp;Quantity</label><br/>
					<input readonly  type="number" id="quantity" name="quantity" style="min-width: 50px; width: 70px;" placeholder="1"><br/>
					<button class="center" type="submit" value="submit" style="margin-top: 20px;">Dispatch</button>
				</div>
			</div>

			<div class="col8 col-center boxsummery inp row" style="margin-bottom: 20px;">
				<div class="col3"><img class="imgw" src="../images/action-camera.jpg"></div>
				<div class="col5 padding">
					<h3>Inspire 1</h3>
					<p>Price :Rs 4000.00</p>
					<p>Delivery:Free</p>
				</div>
				<div class="col3 fitcontent padding">
					<label><i class="fa fa-truck-loading"></i>&nbsp;Quantity</label><br/>
					<input readonly  type="number" id="quantity" name="quantity" style="min-width: 50px; width: 70px;" placeholder="1"><br/>
					<button class="center" type="submit" value="submit" style="margin-top: 20px;">Dispatch</button>
				</div>
			</div>

			<div class="col8 col-center boxsummery inp row" style="margin-bottom: 20px;">
				<div class="col3"><img class="imgw" src="../images/action-camera.jpg"></div>
				<div class="col5 padding">
					<h3>Inspire 1</h3>
					<p>Price :Rs 4000.00</p>
					<p>Delivery:Free</p>
				</div>
				<div class="col3 fitcontent padding">
					<label><i class="fa fa-truck-loading"></i>&nbsp;Quantity</label><br/>
					<input readonly  type="number" id="quantity" name="quantity" style="min-width: 50px; width: 70px;" placeholder="1"><br/>
					<button class="center" type="submit" value="submit" style="margin-top: 20px;">Dispatch</button>
				</div>
			</div>

			<div class="row col12" style="margin-top: 10px;">
				<a class="col4 center" href="viewOrders.html"><button class="center" type="submit" value="submit">Back</button></a>	
			</div>
		</div>
	</div> 
</body>
</html>