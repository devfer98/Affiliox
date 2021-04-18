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
						echo "<i class='fas fa-user'></i><h3>Active Promoters</h3><p>".$row['COUNT(userID)']."</p>";	
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
						echo "<i class='fas fa-user'></i><h3>Active Sellers</h3><p>".$row['COUNT(userID)']."</p>";	
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
						echo "<i class='fas fa-user'></i><h3>Customers</h3><p>".$row['COUNT(userID)']."</p>";	
					}  
				}
			?>  							
				</div>
			</div>
  
			<div class="column">
				<div class="card">
				<?php 
                  if(isset($this->countAdmins) and !empty($this->countAdmins and $this->countAdmins->num_rows>0)){
                   while($row = $this->countAdmins->fetch_assoc()){
						echo "<i class='fas fa-user'></i><h3>Admins</h3><p>".$row['COUNT(userID)']."</p>";	
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
                  if(isset($this->countMinistores) and !empty($this->countMinistores and $this->countMinistores->num_rows>0)){
                   while($row = $this->countMinistores->fetch_assoc()){
						echo "<i class='fas fa-store'></i><h3>Total Ministores</h3><p>".$row['COUNT(userID)']."</p>";	
					}  
				}
			?>  				
				</div>
			</div>

			<div class="column">
				<div class="card">
				<?php 
                  if(isset($this->PromoteCount) and !empty($this->PromoteCount and $this->PromoteCount->num_rows>0)){
                   while($row = $this->PromoteCount->fetch_assoc()){
						echo "<i class='fas fa-ad'></i><h3>Promoted Products</h3><p>".$row['COUNT(userID)']."</p>";	
					}  
				}
			?>  									
				</div>
			</div>

			<div class="column">
				<div class="card">
				<?php 
                  if(isset($this->ClickCount) and !empty($this->ClickCount and $this->ClickCount->num_rows>0)){
                   while($row = $this->ClickCount->fetch_assoc()){
						echo "<i class='fas fa-mouse'></i><h3>No of Clicks<h3><p>".$row['SUM(noClicks)']."</p>";	
					}  
				}
			?>  								
				</div>
			</div>
  
			<div class="column">
				<div class="card">
				<?php 
                  if(isset($this->countBanPromoters) and !empty($this->countBanPromoters and $this->countBanPromoters->num_rows>0)){
                   while($row = $this->countBanPromoters->fetch_assoc()){
						echo "<i class='fas fa-user'></i><h3>Banned Promoters<h3><p>".$row['COUNT(userID)']."</p>";	
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
                  if(isset($this->countBanSellers) and !empty($this->countBanSellers and $this->countBanSellers->num_rows>0)){
                   while($row = $this->countBanSellers->fetch_assoc()){
						echo "<i class='fas fa-user'></i><h3>Banned Sellers<h3><p>".$row['COUNT(userID)']."</p>";	
					}  
				}
			?>  								
				</div>
			</div>
			</div>
		<br/><br/><br/><br/><br/><br/>
    </div>
<!--Container------------------------------------------>
</body>

</html>