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
	<div id="main" class="container navigation">

        <div class="row" style="margin-top: 20px;">
			<button onclick="location.href='../Ministore/ministoreView';">View Ministore</button>
            <button onclick="location.href='../Ministore/update';">Update Ministore</button>
            <button onclick="location.href='../Ministore/addProduct';">Add Products</button>
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
                              <p><button onclick="location.href='../Ministore/updateProduct';">Update Product</button></p>
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
	</div>

</body>
</html>