<!DOCTYPE html>
<html>
<head>
	<title>Seller Transactions</title>
	<!-- <link rel="stylesheet" type="text/css" href="../css/common-dashboard.css"> -->
	<link rel="stylesheet" type="text/css" href="/css/Seller/main.css">
	<link rel="stylesheet" type="text/css" href="/css/Seller/grid.css">
	<!-- <link rel="stylesheet" type="text/css" href="css/market.css"> -->
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
		
		<div class="row col12 title center">
			<p class="center">Transactions History</p>
		</div> 

		<div class="row col8 col-center" style="margin-bottom: 20px;">
			<div id="tab1" class="tabcontent row" style="display: block;">
				<div class="col-center" style="width: 95%;">
				<div class="row heading">
					<div class="col3">Transfer ID</div>
					<div class="col3">Status</div>
					<div class="col3">Date & Time</div>
					<div class="col3">Amount</div>
				</div>
				<?php  
					if(isset($this->TransHis) and !empty($this->TransHis)){
						while($row = $this->TransHis->fetch_assoc()){
					?>
				<div class="row record">
					<div class="col3"><?php echo $row['transID'] ?></div>
					<div class="col3"><?php if($row['status']==1)echo "Success"; else echo "Pending"; ?></div>
					<div class="col3"><?php echo $row['date'] ?></div>
					<div class="col3">Rs. <?php echo $row['ammount'] ?></div>
				</div>
				<?php
						}
					}
					?>
				</div>
			</div>
        </div>
        
        <div class="row col12 commonB" style="margin-top: 10px;">
            <button class="center" onclick="location.href='../Seller/transaction';">Back</button>
        </div>
		
	</div> 

</body>
</html>