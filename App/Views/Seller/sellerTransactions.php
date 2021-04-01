<!DOCTYPE html>
<html>
<head>
	<title>Seller Transactions</title>
	<!-- <link rel="stylesheet" type="text/css" href="../css/common-dashboard.css"> -->
	<link rel="shortcut icon" href="../images/logoOnly.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="/css/Seller/main.css">
	<link rel="stylesheet" type="text/css" href="/css/Seller/grid.css">
	<link rel="stylesheet" type="text/css" href="/css/Seller/market.css">
	<link rel="stylesheet" type="text/css" href="/css/Seller/tabs.css">
	<!-- <link rel="stylesheet" type="text/css" href="css/sellerTransactions.css"> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous"/>
	<link href="https://fonts.googleapis.com/css2?family=Lato&family=Nunito&family=Roboto+Mono&display=swap" rel="stylesheet">
	<script src="/js/Seller/common-dashboard.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
	<!-------------- Top-Navigation-Bar ---------------------->
	<div id="main" class="container navigation">
		<div class="row col12 title">
			<p class="center">Withdrawal</p>
		</div> 

		<div class="row col6 col-center inner-part inp">
			<form action="../Seller/addTransaction" method="post">
			<div class="row">
				<p><b>Withdraw Earn:</b> Use this page to transfer your balance to your preferred method of payout. 
					You should have minimum payout amount available in your account. To see the list and status of your payouts.
						<a id="payout-history" href="../Seller/transactionHis">Click Here</a></p>
			</div>
			<div class="row col8 col-center center padding">
				<label class="col12 center">Current Amount</label>
				<!-- <div class="col12 center" >Rs. 20,000</div> -->
				<div class="row col12">
				<p style="color:red;"><?php if(isset($this->errorMssg) and !empty($this->errorMssg)){echo $this->errorMssg;}  ?></p>
				</div>
				<?php  
					// if(isset($this->salesAmount) and !empty($this->salesAmount)){
					// 	while($row = $this->salesAmount->fetch_assoc()){
					?>
				<input readonly  type="text" id="quantity" name="quantity" class="center" style="width: 250px;" placeholder="Rs. <?php echo number_format((float)$this->salesAmount, 2, '.', '') ?>">
				<?php
					// 	}
					// }
					?>
			</div>
			<div class="row col8 col-center padding">
				<label for="fname">&nbsp;Tansfer Method</label><br>
				<select>
					<option value="">Select Payout Method</option>
					<option value="paypal">Paypal</option>
					<option value="BT">Bank Transfer</option>
				</select>
			</div>
			<div class="row col8 col-center padding">
				<label for="dob">&nbsp;Amount</label><br>
				<input type="number" name="amount" required="" placeholder="Rs. 00.00" id="c-a" min="0">
			</div>
			<div class="row col12 padding commonB">
				<button class="center" type="submit" value="submit">Submit</button>	
				<button class="center" type="reset" value="submit">Reset</button>	
			</div>
			</form>
		</div>

		<!-- <div class="row col12 title">
			<p class="center">Successful Orders</p>
		</div> 

		<div class="row col8 col-center" style="margin-bottom: 20px;">
			<div id="tab1" class="tabcontent row" style="display: block;">
				<div class="col-center" style="width: 95%;">
				<div class="row heading">
					<div class="col2">User</div>
					<div class="col5">Address</div>
					<div class="col3">Date</div>
					<div class="col2">Total Amount</div>
				</div>
				<div class="row record">
					<div class="col2">david98</div>
					<div class="col5">No.20, Araliya road, Bangalaatta, Wattala</div>
					<div class="col3">2020 / 12 / 28</div>
					<div class="col2">Rs. 2,000</div>
				</div>
				<div class="row record">
					<div class="col2">david98</div>
					<div class="col5">No.20, Araliya road, Bangalaatta, Wattala</div>
					<div class="col3">2020 / 12 / 28</div>
					<div class="col2">Rs. 2,000</div>
				</div>
				<div class="row record">
					<div class="col2">david98</div>
					<div class="col5">No.20, Araliya road, Bangalaatta, Wattala</div>
					<div class="col3">2020 / 12 / 28</div>
					<div class="col2">Rs. 2,000</div>
				</div>
				<div class="row record">
					<div class="col2">david98</div>
					<div class="col5">No.20, Araliya road, Bangalaatta, Wattala</div>
					<div class="col3">2020 / 12 / 28</div>
					<div class="col2">Rs. 2,000</div>
				</div>
				</div>
			</div>
		</div> -->
	</div> 

</body>
</html>