<!DOCTYPE html>
<html>
<head>
<title>Affiliox-AdminDashboard</title>
    <link rel="shortcut icon" href="/images/Logo/logoOnly.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="/css/Customer/common.css" />
	<link rel="stylesheet" type="text/css" href="/css/Customer/customer-grid.css" />
	<link rel="stylesheet" type="text/css" href="/css/Admin/admincard.css"/>
    <script type="text/javascript" src="/js/Customer/nav-fixed.js"></script>
	<script src="https://kit.fontawesome.com/6cdc06033e.js" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
					
	<!---Navigation bar-------------------------------------------->
	<div class="container">
		<br/><br/>
		<!-- <div class="inner-part"> -->

		<div class="row">
			<div class="column">
				<div class="card">
				<?php 
                  if(isset($this->countPromoters) and !empty($this->countPromoters and $this->countPromoters->num_rows>0)){
                   while($row = $this->countPromoters->fetch_assoc()){
						//echo $row['COUNT(userID)'];
					//echo "<h3>.Promoter Count </h3>"
						echo "<h3>Promoter Count</h3><p>".$row['COUNT(userID)']."</p>";	
					}  
				}
			?>  				 
				</div>
			</div>

			<div class="column">
				<div class="card">
				<?php 
                  if(isset($this->countSellers) and !empty($this->countSellers and $this->countSellers->num_rows>0)){
                   while($row = $this->countSellers->fetch_assoc()){
						echo "<h3>Seller Count</h3><p>".$row['COUNT(userID)']."</p>";	
					}  
				}
			?>  								
				</div>
			</div>
  
			<div class="column">
				<div class="card">
				<?php 
                  if(isset($this->countBuyers) and !empty($this->countBuyers and $this->countBuyers->num_rows>0)){
                   while($row = $this->countBuyers->fetch_assoc()){
						echo "<h3>Buyer Count</h3><p>".$row['COUNT(userID)']."</p>";	
					}  
				}
			?>  							
				</div>
			</div>
  
			<div class="column">
				<div class="card">
				<?php 
                  if(isset($this->countMinistores) and !empty($this->countMinistores and $this->countMinistores->num_rows>0)){
                   while($row = $this->countMinistores->fetch_assoc()){
						echo "<h3>Ministore Count</h3><p>".$row['COUNT(userID)']."</p>";	
					}  
				}
			?>  				
				</div>
			</div>
		</div>
		<br/><br/>	
		<div class="row">
			<div class="column">
				<div class="card">
				<?php 
                  if(isset($this->countOrders) and !empty($this->countOrders and $this->countOrders->num_rows>0)){
                   while($row = $this->countOrders->fetch_assoc()){
						echo "Orders<p>".$row['COUNT(orderID)']."</p>";	
					}  
				}
			?>  									
				</div>
			</div>

			<div class="column">
				<div class="card">
				<?php 
                  if(isset($this->countPromoters) and !empty($this->countPromoters and $this->countPromoters->num_rows>0)){
                   while($row = $this->countPromoters->fetch_assoc()){
						echo "Promoter Count<p>".$row['COUNT(userID)']."</p>";	
					}  
				}
			?>  								
				</div>
			</div>
  
			<div class="column">
				<div class="card">
				<?php 
                  if(isset($this->countPromoters) and !empty($this->countPromoters and $this->countPromoters->num_rows>0)){
                   while($row = $this->countPromoters->fetch_assoc()){
						echo "Promoter Count<p>".$row['COUNT(userID)']."</p>";	
					}  
				}
			?>  								
				</div>
			</div>
  
			<div class="column">
				<div class="card">
					<?php 
                  if(isset($this->countPromoters) and !empty($this->countPromoters and $this->countPromoters->num_rows>0)){
                   while($row = $this->countPromoters->fetch_assoc()){
						echo "Promoter Count<p>".$row['COUNT(userID)']."</p>";	
					}  
				}
			?>  				
				</div>
			</div>
		</div>
		<br/><br/><br/><br/><br/><br/>
    </div>
					
</div>
</div>
</div>
<!--Container------------------------------------------>
</body>

</html>