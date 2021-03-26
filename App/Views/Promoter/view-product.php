<!DOCTYPE html>
<html>
<head>
	 <title>Market Place</title>
	 <link rel="shortcut icon" href="/images/Promoter/logoOnly.png" type="image/x-icon">
   	 <link rel="stylesheet" type="text/css" href="/css/promoter/view-product-css.css">
     <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous"/>
     <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans&display=swap" rel="stylesheet">
	 
</head>
<body>
	
	<div class="container">
        <h2><i class="fas fa-puzzle-piece"></i></i>&nbsp; &nbsp;Check Product Details</h2>
       
       <div class="inner-content">
       <?php  
                if(isset($this->UImsg) and !empty($this->UImsg)){
					
					while($row = $this->UImsg->fetch_assoc()){           
        ?>
            <table >
                <tr>
                    <td colspan = 3 id=pName><?php echo $row['prodName'] ?></td>
                </tr>
                <tr>
                    <td rowspan=5>
                        <img class="images" src="/images/promoter/drone.jpg" alt="Drone">
                        <img class="images" src="/images/promoter/drone2.jpg">
                        <img class="images" src="/images/promoter/drone3.jpg" >
                    
                       <div class="btn">
                            <button class="" onclick="increment(-1)"><i class="fas fa-angle-left"></i></button>
                            <button class="" onclick="increment(1)"><i class="fas fa-angle-right"></i></button>
                       </div>
                        
                    </td>
                </tr>
                <tr>
                    <td id=imp>Product Price</td>
                    <td id=imp>Discount Rate</td>
                </tr>
                <tr>
                    <td><?php echo $row['price'] ?> LKR</td>
                    <td><?php echo $row['comRate'] ?> %</td>
                </tr>
                <tr>
                    <td colspan=2 id=desc>Sepecifications :- <br>&#9733; <?php echo $row['description'] ?></td>
                </tr>
                <tr>
                    <td><a href="../Promoter/Market">Go Back <i class="fas fa-arrow-circle-left"></i></a></td>
                    <td><a href="../Promoter/generateLink?id=<?php echo $row['productID']?>proid=<?php echo $row['comRate']?>">Proceed to Promote <i class="fas fa-check"></i></a></td>
                </tr>
            </table>
            <?php
					}
				}
			?>  
       </div> <!-- inner-content --> 
	</div> <!-- container -->
		
	<hr style="height:1px;border:none;color:#333;background-color:#333;">
    <script src="/js/promoter/view-product-js.js"></script>		
</body>
</html>