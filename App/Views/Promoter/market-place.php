<!DOCTYPE html>
<html>
<head>
	 <title>Market Place</title>
	 <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	 <link rel="shortcut icon" href="/images/promoter/logoOnly.png" type="image/x-icon">
   	 <link rel="stylesheet" type="text/css" href="/css/promoter/market-place-css.css">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous"/>
     <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans&display=swap" rel="stylesheet">
	 <script src="/js/promoter/market-place-js.js"></script>
</head>
<body>
	
	<div class="container">
      <h2><i class="fab fa-shopify"></i>&nbsp; &nbsp;Welcome <?php echo $_SESSION["username"];  ?> to the Market Place</h2>
		<div class="top-part">
		<a href="../Promoter/linkHistory" class="top">Already Promoted Items  <i class="fas fa-history"></i> </a> <br><br>
			<!-- <input type="search" name="search" placeholder="search"> -->
			<!-- <a href="../Promoter/Market"><button type="search" name="submit">Search</button></a> -->
		</div> <!-- top-part -->
		
		<?php  
                if(isset($this->UImsg) and !empty($this->UImsg)){
					
					while($row = $this->UImsg->fetch_assoc()){           
        ?>	

			<div class="product-card">
			<table>
					<tr>
						<td colspan="2" rowspan="6" class="item-img"><img src="/images/upload/<?php echo $row['imageCode'] ?>" ></td>
						<td class="item-name" colspan=3 id=title><?php echo $row['prodName'] ?></td>
						<td>
							<a href="../Promoter/viewProduct?id=<?php echo $row['productID']?>">View More <i class="fas fa-angle-double-right"></i></a>
						</td>
					</tr>
					<tr>
						<td class="item-price"><p>Product price</p> <?php echo number_format($row['price'],2) ?> Rs</td>
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