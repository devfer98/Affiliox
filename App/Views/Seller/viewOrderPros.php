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
            <div class="col8 col-center inner-part data">
                <table>
					<?php  
						$orderID;
						if(isset($this->order) and !empty($this->order)){
							while($row = $this->order->fetch_assoc()){
								$orderID=$row['orderID'];
						?>
					<tr>
						<td id="td-1">Order ID</td>
						<td><?php echo $row['orderID'] ?></td>
					</tr>
					<tr>
						<td id="td-1">Status</td>
						<td><?php echo $row['status'] ?></td>
					</tr>
					<tr>
						<td id="td-1">Issued Date and Time</td>
						<td><?php echo $row['datetime'] ?></td>
					</tr>
					<tr>
						<td id="td-1">Delivery Address</td>
						<td><?php echo $row['deliveryAddress'] ?></td>
					</tr>
					<tr>
						<td id="td-1">Delivery Deadline Date</td>
						<td><?php echo $row['deliveryDeadline'] ?></td>
					</tr>
					<tr>
						<td id="td-1" style="border: none;">Total Amount</td>
						<td style="border: none;">Rs. <?php echo $row['amount'] ?></td>
					</tr>
					<?php
							}
						}
						?>
				</table>
			</div>
			<div class="col12 center title">
				<p>Ordered Products</p>
			</div> 
			<?php  
			if(isset($this->orderPros) and !empty($this->orderPros)){
				while($row = $this->orderPros->fetch_assoc()){
			?>
			<div class="col8 col-center boxsummery inp row" style="margin-bottom: 20px;">
				<div class="col3"><img class="imgw" src="/images/Seller/<?php echo $row['imageCode'] ?>"></div>
				<div class="col5 padding">
					<h3><?php echo $row['prodName'] ?></h3>
					<p>Price : Rs. <?php echo $row['proPrice'] ?></p>
					<p>Delivery: Rs. <?php echo $row['price'] ?></p>
				</div>
				<div class="col3 fitcontent padding commonB">
					<label><i class="fa fa-truck-loading"></i>&nbsp;Quantity</label><br/>
					<input readonly  type="number" id="quantity" name="quantity" style="min-width: 50px; width: 70px;" placeholder="<?php echo $row['quantity'] ?>"><br/>
					<form action="../Seller/orderDispatch" method="post">
						<input type="hidden" name="orderID" value="<?php echo $orderID ?>" />
						<input type="hidden" name="productID" value="<?php echo $row['productID'] ?>" />
						<?php 
						if($row['dispatchStatus']=='Pending'){
							echo '<button class="center" type="submit" value="submit" style="margin-top: 20px;">Dispatch</button><br/>';
						}else{
							echo '<button class="center" type="submit" value="submit" style="margin-top: 20px; color:red;" disabled>Dispatched</button><br/>';
						}
						
						?>
					</form>
					<!-- <button class="center" type="submit" value="submit" style="margin-top: 20px;">Dispatch</button> -->
				</div>
			</div>
			<?php
				}
			}
			?>
			<div class="row col12 commonB" style="margin-top: 10px;">
				<button class="center" onclick="location.href='../Seller/order';">Back</button>
			</div>
		</div>
	</div> 
</body>
</html>