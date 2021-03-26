<!DOCTYPE html>
<html>
<head>
	 <title>Market Place</title>
	 <link rel="shortcut icon" href="/images/Promoter/logoOnly.png" type="image/x-icon">
   	 <link rel="stylesheet" type="text/css" href="/css/promoter/market-place-css.css">
     <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous"/>
     <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans&display=swap" rel="stylesheet">
	 <script src="/js/promoter/market-place-js.js"></script>
</head>
<body>
	
	<div class="container">
      <h2><i class="fab fa-shopify"></i>&nbsp; &nbsp;Welcome <?php echo $_SESSION["username"];  ?> to the Market Place</h2>
		<div class="top-part">
		<a href="../Promoter/linkHistory" class="top">Already Promoted Items <i class="fas fa-history"></i> </a> <br><br>
			<input type="search" name="search" placeholder="seach">
			<a href="../Promoter/Market"><button type="search" name="submit">Search</button></a>
		</div> <!-- top-part -->

		<?php  
                if(isset($this->UImsg) and !empty($this->UImsg)){
					
					while($row = $this->UImsg->fetch_assoc()){           
        ?>	

			<div class="product-card">
				<table>
					<tr>
						<td colspan=3 id=title><?php echo $row['prodName'] ?></td>
					</tr>
					<tr>
						<td rowspan = 3><img src="/images/promoter/drone.jpg" alt="Drone"></td>
					</tr>
					<tr>
						<td><?php echo $row['gender'] ?></td>
					</tr>
					<tr>
						<td><a href="../Promoter/viewProduct">View More <i class="fas fa-angle-double-right"></i></a></td>
					</tr>
					<tr>
						<td colspan=3><?php echo $row['description'] ?></td>
					</tr>
				</table>
			</div>
            
			<?php
					}
				}
			?>

			 </div> <!-- container -->
			 
			
			<hr style="height:1px;border:none;color:#333;background-color:#333;">
			
</body>
</html>