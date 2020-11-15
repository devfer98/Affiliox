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
	<!-------------- Top-Navigation-Bar ---------------------->
  	   <header>
          <div class="open-btn" onclick="openNav()">&#9776;</div>
         <nav class="top-nav">
      <ul class="main-nav">
        <li class="logo"><a href="index.php" style="border: none;"><img src="/images/promoter/SideLogo.png"></a></li>
        <li class="item"><a href=""><i class="fas fa-home"></i>&nbsp;Home</a></li>
        <li class="item"><a href=""><i class="fas fa-users"></i>&nbsp;About Us</a></li>
        <li class="item"><a href=""><i class="fas fa-question-circle"></i>&nbsp;Help & Support</a></li>
        <!-- <li class="item"><a href=""><i class="fas fa-user"></i>&nbsp;&nbsp;Account</a></li>
        <li class="item"><a href=""><i class="fas fa-shopping-cart"></i>&nbsp;Add to cart</a></li> -->
        <li class="push"><input type="search" name="" placeholder="search"><button><i class="fas fa-search"></i> &nbsp;Search</button></li>
        <li class="last">
          <select name="direction" onchange="location = this.value;">
              <option value="../index.php">SELECT</option>
              <option value="../index.php">Logout</option>
              <option value="">Login</option>
          </select>
        </li>
      </ul>
    </nav>
      </header>
      <hr>	
	  <div class="container">
      <h2><i class="fab fa-shopify"></i>&nbsp; &nbsp;Welcome to Market Place</h2>
		<div class="top-part">
        <input type="search" name="search" placeholder="seach">
        <button type="search" name="submit">Search</button>
		</div> <!-- top-part -->

			<div class="card">
  				<img src="/images/promoter/drone.jpg" alt="Drone">
  			<div class="promote-button">
  				<form action="../Promoter/generateLink" name="" method="">
            <p>Price 99.9 USD</p>
  					<input id="promoter-button" type="submit" name="" value="Promote"></a>
  				</form>
  			</div> <!-- promote-button -->
    			  <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    			  tempor incididunt ut labore et dolore magna aliqua.</h4>
			</div> <!-- card -->

			<div class="card">
  				<img src="/images/promoter/action-camera.jpg" alt="Drone">
  				<div class="promote-button">
  					<form action="../Promoter/generateLink" name="" method="">
              <p>Price 99.9 USD</p>
  						<input id="promoter-button" type="submit" name="" value="Promote"></a>
  					</form>
  				</div> <!-- promote-button -->
    			  <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    			  tempor incididunt ut labore et dolore magna aliqua.</h4>
			</div> <!-- card -->

			<div class="card">
  				<img src="/images/promoter/i-phone.png" alt="Drone">
  				<div class="promote-button">
  				<form action="../Promoter/generateLink" name="" method="">
            <p>Price 99.9 USD</p>
  					<input id="promoter-button" type="submit" name="" value="Promote"></a>
  				</form>
  				</div> <!-- promote-button -->
    			  <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    			  tempor incididunt ut labore et dolore magna aliqua.</h4>
			</div> <!-- card -->

			<div class="card">
  				<img src="/images/promoter/watch.png" alt="Drone">
  				<div class="promote-button">
  				<form action="../Promoter/generateLink" name="" method="">
            <p>Price 99.9 USD</p>
  					<input id="promoter-button" type="submit" name="" value="Promote"></a>
  				</form>
  				</div> <!-- promote-button -->
    			  <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    			  tempor incididunt ut labore et dolore magna aliqua.</h4>
			</div> <!-- card -->

			<div class="card">
  				<img src="/images/promoter/dslr.jpg" alt="Drone">
  				<div class="promote-button">
  				  <form action="../Promoter/generateLink" name="" method="">
              <p>Price 99.9 USD</p>
  					 <input  id="promoter-button" type="submit" name="" value="Promote"></a>
  				  </form>
  				</div> <!-- promote-button -->
    			  <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    			  tempor incididunt ut labore et dolore magna aliqua.</h4>
			 </div> <!-- card -->
			 <hr style="height:2px;border:none;color:#333;background-color:#333;">
	 </div> <!-- container -->

	<!-- bottom-part-------------------------------------------->
		<div class="bottom-part">
			<table>
				<tr class="thead">
					<td rowspan="4"><img src="/images/promoter/affiliox.png" height='150' width='150'></td>
					<td>Main Menu</td>
					<td>Find us On</td>
					<td>Contact us</td>
				</tr>
				<tr>
					<!-- <td></td> -->
					<td><a href="">About Affiliox <i class="fas fa-users"></i></a></td>
					<td><a href=""></i>FaceBook <i class="fab fa-facebook-f"></i></a></td>
					<td>Address: Sri Lanka.</td>
				</tr>
				<tr>
					<!-- <td></td> -->
					<td><a href="">Help & Support <i class="fas fa-question-circle"></a></td>
					<td><a href="">Twitter <i class="fab fa-twitter"></i></a></td>
					<td>Phone: 011-1234567</td>
				</tr>
				<tr>
					<!-- <td></td> -->
					<td><a href="">Privacy & Policy <i class="fas fa-shield-alt"></i></a></td>
					<td><a href="">Youtube <i class="fab fa-youtube"></i></a></td>
					<td>Email: affiliox@gmail.com</td>	
				</tr>
			</table>
		</div> <!-- bottom-part -->
		
		<div class="footer">
  			<ul>
  				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  				tempor incididunt ut labore et dolore magna aliqua.</li>
  				<li> Affiliox &trade;</li>
  			</ul>
		</div>	 <!-- footer -->	
	</div> <!-- navigation -->

	<div id="mySidenav" class="sidenav">
  		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  		<a href="../Promoter/promoterProfile">User profile<i class="far fa-user"></i></a>
  		<a href="../Promoter/Market">Marker Place<i class="fab fa-shopify"></i></a>
  		<a href="../Promoter/staticPromoter">Statstics<i class="fas fa-chart-line"></i></i></a>
  		<a href="../Promoter/promoterTrans">Transactions<i class="fas fa-money-check-alt"></i></a>
  		<a href="../Promoter/promoterFeedback">Feedback<i class="fas fa-phone-square"></i></i></a>
  		<a href="../Promoter/promoterSupport">Support<i class="fas fa-envelope-open-text"></i></a>
	</div> <!-- sidenav -->
	<span onclick="openNav()"></span>

</body>
</html>