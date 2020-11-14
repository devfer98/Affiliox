<!DOCTYPE html>
<html>
<head>
	<title>Ministore</title>
	<!-- <link rel="stylesheet" type="text/css" href="../css/common-dashboard.css"> -->
	<link rel="stylesheet" type="text/css" href="/css/Seller/main.css">
    <link rel="stylesheet" type="text/css" href="/css/Seller/grid.css">
    <link rel="stylesheet" type="text/css" href="/css/Seller/market.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous"/>
	<link href="https://fonts.googleapis.com/css2?family=Lato&family=Nunito&family=Roboto+Mono&display=swap" rel="stylesheet">
	<script src="/js/Seller/common-dashboard.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
	<!-------------- Top-Navigation-Bar ---------------------->
	<div id="main" class="container navigation">
		<?php 
			//if(session_id() == '') {
			//         session_start();
			//     }
			//if(isset($_SESSION['type']) && ($_SESSION['type'] == 'seller') ){
				require "sellerHeader.php";
			//}else{
				// header("Location:../Login/index");	
			//}
		?>

        <div class="row" style="margin-top: 20px;">
			<a class="col4 center" href="miniStoreView.html"><button>View Ministore</button></a>
            <a class="col4 center" href="updateMinistore.html"><button>Update Ministore</button></a>
            <a class="col4 center" href="postProducts.html"><button>Add Products</button></a>
		</div>
		
		<!-- <div class="Reg-container"> -->
		<div class="row">
			<div class="col12 center title">
				<p>Ministore Products</p>
				<!-- <hr> -->
			</div>
		</div>
		<div class="row row-padding">	
			<div class="col10 col-center">
                <!-- <div class="row row-padding col12">
                    <button class="center">Add Product</button>
                </div> -->
                <div class="row">
                    <div class="card">
                          <img src="images/i-phone.png" alt="Denim Jeans" style="width:100%">
                              <h4>Tailored Jeans</h4>
                              <p class="price">$19.99</p>
                              <p>Some text about the jeans..</p>
                              <p><a href="updateProduct.html"><button>Update Product</button></a></p>
                              <button>Delete Product</button>
                    </div>
        
                    <div class="card">
                          <img src="images/i-phone-earphone.png" alt="Denim Jeans" style="width:100%">
                              <h4>Tailored Jeans</h4>
                              <p class="price">$19.99</p>
                              <p>Some text about the jeans..</p>
                              <p><button>Update Product</button></p>
                              <button>Delete Product</button>
                    </div>
        
                    <div class="card">
                          <img src="images/nike-shoe.png" alt="Denim Jeans" style="width:100%">
                              <h4>Tailored Jeans</h4>
                              <p class="price">$19.99</p>
                              <p>Some text about the jeans..</p>
                              <p><button>Update Product</button></p>
                              <button>Delete Product</button>
                    </div>
        
                    <div class="card">
                          <img src="images/nike-shoe.png" alt="Denim Jeans" style="width:100%">
                              <h4>Tailored Jeans</h4>
                              <p class="price">$19.99</p>
                              <p>Some text about the jeans..</p>
                              <p><button>Update Product</button></p>
                              <button>Delete Product</button>
                    </div>
                    </div>
            </div>
		</div>

		<!-- bottom-part-------------------------------------------->
		<?php 
		//if(session_id() == '') {
		//         session_start();
		//     }
		//if(isset($_SESSION['type']) && ($_SESSION['type'] == 'seller') ){
			require "sellerFooter.php";
		//}else{
			// header("Location:../Login/index");	
		//}
		?>
	</div>

</body>
</html>