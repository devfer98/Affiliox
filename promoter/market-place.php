<!DOCTYPE html>
<html>
<head>
	 <title>Market Place</title>
	 <link rel="stylesheet" type="text/css" href="css/market-place-css.css">
   <link rel="shortcut icon" href="images/affiliox.png" type="image/x-icon">
   <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous"/>
   <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans&display=swap" rel="stylesheet">
	 <script src="js/market-place-js.js"></script>
</head>
<body>
	<!-------------- Top-Navigation-Bar ---------------------->
  	   <header>
          <div class="open-btn" onclick="openNav()">&#9776;</div>
         <nav class="top-nav">
      <ul class="main-nav">
        <li class="logo-name"><a href="">Affiliox</a></li>
        <li class="item"><a href=""><i class="fas fa-home"></i>&nbsp;Home</a></li>
        <li class="item"><a href=""><i class="fas fa-users"></i>&nbsp;About Us</a></li>
        <li class="item"><a href=""><i class="fas fa-question-circle"></i>&nbsp;Help & Support</a></li>
        <!-- <li class="item"><a href=""><i class="fas fa-user"></i>&nbsp;&nbsp;Account</a></li>
        <li class="item"><a href=""><i class="fas fa-shopping-cart"></i>&nbsp;Add to cart</a></li> -->
        <li class="push"><input type="search" name="" placeholder="search"><button><i class="fas fa-search"></i> &nbsp;Search</button></li>
        <li class="last">
          <select>
            <option value="sign in">Sign In</option>
            <option value="login">Login</option>
            <option value="logout">Logout</option>
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
  				<img src="images/drone.jpg" alt="Drone">
  			<div class="promote-button">
  				<form action="generate-link.php" name="" method="">
            <p>Price 99.9 USD</p>
  					<input id="promoter-button" type="submit" name="" value="Promote"></a>
  				</form>
  			</div> <!-- promote-button -->
    			  <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    			  tempor incididunt ut labore et dolore magna aliqua.</h4>
			</div> <!-- card -->

			<div class="card">
  				<img src="images/action-camera.jpg" alt="Drone">
  				<div class="promote-button">
  					<form action="generate-link.php" name="" method="">
              <p>Price 99.9 USD</p>
  						<input id="promoter-button" type="submit" name="" value="Promote"></a>
  					</form>
  				</div> <!-- promote-button -->
    			  <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    			  tempor incididunt ut labore et dolore magna aliqua.</h4>
			</div> <!-- card -->

			<div class="card">
  				<img src="images/i-phone.png" alt="Drone">
  				<div class="promote-button">
  				<form action="generate-link.php" name="" method="">
            <p>Price 99.9 USD</p>
  					<input id="promoter-button" type="submit" name="" value="Promote"></a>
  				</form>
  				</div> <!-- promote-button -->
    			  <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    			  tempor incididunt ut labore et dolore magna aliqua.</h4>
			</div> <!-- card -->

			<div class="card">
  				<img src="images/watch.png" alt="Drone">
  				<div class="promote-button">
  				<form action="generate-link.php" name="" method="">
            <p>Price 99.9 USD</p>
  					<input id="promoter-button" type="submit" name="" value="Promote"></a>
  				</form>
  				</div> <!-- promote-button -->
    			  <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    			  tempor incididunt ut labore et dolore magna aliqua.</h4>
			</div> <!-- card -->

			<div class="card">
  				<img src="images/dslr.jpg" alt="Drone">
  				<div class="promote-button">
  				  <form action="generate-link.php" name="" method="">
              <p>Price 99.9 USD</p>
  					 <input  id="promoter-button" type="submit" name="" value="Promote"></a>
  				  </form>
  				</div> <!-- promote-button -->
    			  <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    			  tempor incididunt ut labore et dolore magna aliqua.</h4>
			 </div> <!-- card -->
	 </div> <!-- container -->

		<div class="footer">
  			<ul>
          <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua.</li>
          <li><a href="">Privacy & Policy</a></li>
          <li>© Affiliox</li>
        </ul>
		</div>	<!-- footer -->	
	</div> <!-- navigation -->

	<div id="mySidenav" class="sidenav">
  		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  		<a href="promoter-dashboard.php">User profile<i class="far fa-user"></i></a>
  		<a href="market-place.php">Marker Place<i class="fab fa-shopify"></i></a>
  		<a href="promoter-statistics.php">Statstics<i class="fas fa-chart-line"></i></i></a>
  		<a href="withdraw-earnings.php">Transactions<i class="fas fa-money-check-alt"></i></a>
  		<a href="review-feedback.php">Feedback<i class="fas fa-phone-square"></i></i></a>
  		<a href="support-center.php">Support<i class="fas fa-envelope-open-text"></i></a>
	</div> <!-- sidenav -->
	<span onclick="openNav()"></span>

</body>
</html>