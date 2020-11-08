<!DOCTYPE html>
<html>
<head>
	<title>Generate Link</title>
	<link rel="shortcut icon" href="../../../public/images/promoter/logoOnly.png" type="image/x-icon">
   <link rel="stylesheet" type="text/css" href="../../../public/css/promoter/generate-link-css.css">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous"/>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans&display=swap" rel="stylesheet">
  <script src="../../../public/js/promoter/promoter-dashboard-js.js"></script>
</head>
<body>
	<!-------------- Top-Navigation-Bar ---------------------->
    	  <header>
          <div class="open-btn" onclick="openNav()">&#9776;</div>
          <!-- <div class="affiliox"><a href="">Affiliox</a></div>
          <div class="loggedin">Welcome User name</div> -->
          <nav class="top-nav">
      <ul class="main-nav">
        <li class="logo"><a href="index.php" style="border: none;"><img src="../../../public/images/promoter/SideLogo.png"></a></li>
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
          <h2><i class="fas fa-link"></i></i>&nbsp; &nbsp;Generate Link</h2>

        <div class="area">
            <p>Genrate Link</p> <br>
            <label>Encrypted Link:</label>
            <input type="text" name="link" id="myInput" placeholder="You can Copy this Link">
            <button onclick="myFunction()">Copy</button>
        </div> <!-- area -->	
        
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