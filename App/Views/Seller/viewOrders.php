<!DOCTYPE html>
<html>
<head>
	<title>View Orders</title>
	<!-- <link rel="stylesheet" type="text/css" href="../css/common-dashboard.css"> -->
	<link rel="shortcut icon" href="../images/logoOnly.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="/css/Seller/main.css">
	<link rel="stylesheet" type="text/css" href="/css/Seller/grid.css">
	<link rel="stylesheet" type="text/css" href="/css/Seller/tabs.css">
	<script src="/js/Seller/tabs.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous"/>
	<link href="https://fonts.googleapis.com/css2?family=Lato&family=Nunito&family=Roboto+Mono&display=swap" rel="stylesheet">
	<!-- <script src="/js/Seller/common-dashboard.js"></script> -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
	<div id="main" class="container navigation">
		<!-- <div class="Reg-container"> -->
		<div class="row">
			<div class="col12 center title">
				<p>Orders</p>
				<!-- <hr> -->
			</div> 
				<!------------------Seller Registration Form------------------->
		</div>
		<div class="row row-padding">	
			<div class="col10 col-center">
				<div class="row tab">
					<button class="tablinks active col3" onclick="openCity(event, 'tab1')">Orders</button>
					<button class="tablinks col3" onclick="openCity(event, 'tab2')">Dispatched</button>
					<button class="tablinks col3" onclick="openCity(event, 'tab3')">Successfully Delivered</button>
					<button class="tablinks col3" onclick="openCity(event, 'tab4')">Not Delivered</button>
				</div>
				  
				<div id="tab1" class="tabcontent row" style="display: block;">
					<div class="col-center" style="width: 95%;">
					<div class="row heading">
						<div class="col3">User</div>
						<div class="col6">Address</div>
						<div class="col3">Total Price</div>
					</div>
					<div class="row record" onclick="location.href='../Seller/orderPro'">
						<div class="col3">david98</div>
						<div class="col6">No.20, Araliya road, Bangalaatta, Wattala</div>
						<div class="col3">Rs. 2,000</div>
					</div>
					<div class="row record">
						<div class="col3">david98</div>
						<div class="col6">No.20, Araliya road, Bangalaatta, Wattala</div>
						<div class="col3">Rs. 2,000</div>
					</div>
					<div class="row record">
						<div class="col3">david98</div>
						<div class="col6">No.20, Araliya road, Bangalaatta, Wattala</div>
						<div class="col3">Rs. 2,000</div>
					</div>
					</div>
				</div>
				  
				<div id="tab2" class="tabcontent" style="overflow-x:auto;">
					<div class="col-center" style="width: 95%;">
						<div class="row heading">
							<div class="col3">User</div>
							<div class="col6">Address</div>
							<div class="col3">Last Date to be Deliverd</div>
						</div>
						<div class="row record">
							<div class="col3">david98</div>
							<div class="col6">No.20, Araliya road, Bangalaatta, Wattala</div>
							<div class="col3">2020/12/22</div>
						</div>
						<div class="row record">
							<div class="col3">david98</div>
							<div class="col6">No.20, Araliya road, Bangalaatta, Wattala</div>
							<div class="col3">2020/12/22</div>
						</div>
						<div class="row record">
							<div class="col3">david98</div>
							<div class="col6">No.20, Araliya road, Bangalaatta, Wattala</div>
							<div class="col3">2020/12/22</div>
						</div>
					</div>
					<!-- <table>
						<tr>
							<th>User</th>
							<th>Address</th>
							<th>Action</th>
						</tr>
						<tr>
							<td>thenuka98</td>
							<td>No.20, Araliya road, Bangalaatta, Wattala</td>
							<td><button style="width: 80%;">Dispatch</button></td>
						</tr>
					</table> -->
				</div>
				  
				<div id="tab3" class="row tabcontent">
					<div class="col-center" style="width: 95%;">
						<div class="row heading">
							<div class="col3">User</div>
							<div class="col6">Address</div>
							<div class="col3">Received Date</div>
						</div>
						<div class="row record">
							<div class="col3">david98</div>
							<div class="col6">No.20, Araliya road, Bangalaatta, Wattala</div>
							<div class="col3">2020/12/22</div>
						</div>
						<div class="row record">
							<div class="col3">david98</div>
							<div class="col6">No.20, Araliya road, Bangalaatta, Wattala</div>
							<div class="col3">2020/12/22</div>
						</div>
						<div class="row record">
							<div class="col3">david98</div>
							<div class="col6">No.20, Araliya road, Bangalaatta, Wattala</div>
							<div class="col3">2020/12/22</div>
						</div>
					</div>
				</div>
				<div id="tab4" class="row tabcontent">
					<div class="col-center" style="width: 95%;">
						<div class="row heading">
							<div class="col3">User</div>
							<div class="col6">Address</div>
							<div class="col3">Delivery Deadline</div>
						</div>
						<div class="row record">
							<div class="col3">david98</div>
							<div class="col6">No.20, Araliya road, Bangalaatta, Wattala</div>
							<div class="col3">2020/12/22</div>
						</div>
						<div class="row record">
							<div class="col3">david98</div>
							<div class="col6">No.20, Araliya road, Bangalaatta, Wattala</div>
							<div class="col3">2020/12/22</div>
						</div>
						<div class="row record">
							<div class="col3">david98</div>
							<div class="col6">No.20, Araliya road, Bangalaatta, Wattala</div>
							<div class="col3">2020/12/22</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> 
</body>
</html>
