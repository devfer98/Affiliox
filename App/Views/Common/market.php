<html>
<?php  echo $_SESSION['type'];?>

<head>
  <title>Affiliox-market</title>
  <link rel="stylesheet" type="text/css" href="/css/Common/Signin.css" />
  <link rel="stylesheet" type="text/css" href="/css/Customer/common.css" />
  <link rel="stylesheet" type="text/css" href="/css/Customer/customer-grid.css" />
  <script type="text/javascript" src="/js/Customer/nav-fixed.js"></script>
  <script src="/js/Common/drop.js"></script>
  <link rel="stylesheet" type="text/css" href="/css/Common/drop.css" />
  <script src="https://kit.fontawesome.com/6cdc06033e.js" crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
  <!---Navigation bar-------------------------------------------->
  <div class="container">
    <div class="backcolor"> 
      <div class="row hidden-xm marginb100 backcolor">
      <div class=" nav-bar sm-logo-nav hidden-xm  sm-header backcolor " >
          
        <div class="sm-1 open-btn" onclick="openNav()">&#9776;</div>
        <div class="sm-9">
          <a href="/index.html"><img src="/imagesLogo/Sidelogo.png" alt="Affiliox LOGO"/></a>
        </div>
        <div class="sm-2 ">
          <div class="selector margint20">
            <select>
              <option value="sign in">Sign In</option><br/>
              <option value="login">Login</option><br/>
            </select>
          </div>
        </div>
        

      </div>
    </div>
      <div class=" nav-bar center backcolor">
        <div class="col1 open-btn hidden-sm" onclick="openNav()">&#9776;</div>
        <div class="col2 hidden-sm">
          <a href="/index.html"><img src="/images/Logo/Sidelogo.png" alt="Affiliox LOGO"/></a>
        </div>

        <div class="col4 center">
          <ul>
            <a href=""><i class="fas fa-home"></i>&nbsp;Home</a>
            <a href=""><i class="fas fa-users"></i>&nbsp;About Us</a>
            <a href="../BuyerCon/helpIndex"><i class="fas fa-inbox"></i>&nbsp;Help</a>
            <a href="../BuyerCon/accountIndex"><i class="fas fa-users"></i>&nbsp;Account</a>
          </ul>
        </div>

        <div class="col4 search fitcontent center">
          <ul>
            <input type="text" name="search" placeholder="Headsets" />
            <a href=""><i class="fas fa-search"></i></a>
          </ul>
        </div>
        <div class="col1 hidden-sm ">
          <div class="selector margint20">
            <select>
              <option value="sign in">Sign in</option><br/>
              <option value="login">Login</option><br/>

            </select>
          </div>

        </div>


      </div>
    
      <div class="row">
		  <div class="col12 fullwidth">
        <hr>
		  </div>
        
    </div>
  </div>

    <!-- Container content  --------------------------------------------->


    
    <div class="row center">

        <div class="col12 ">

          <div class=" row margint50 marginb50 ">
            
            <div class="left">
            <h2 ><i class="fas fa-product fa"></i>&nbsp;Sreach Products</h2>
            <div class="row">
              <div class="col12 hrCustom lm-half-width">
                <hr />
              </div>
            </div>
        
            
            
          </div>
        
          </div>
         
          <div class="row nav-bar">
            <div class="col8 search fitcontent center">
              <ul>
                <input type="text" name="search" placeholder="Clothing , Phones , Toys" />
                <a href=""><i class="fas fa-search "></i>&nbsp; Search</a>
              </ul>
            </div>
           
           <div class="col4 hidden-sm"> 
             <div class="margint20">

            <div class="col1 search fitcontent " onclick="openNav2()"><i class="icon fas fa-filter"></i></div>
            <div class="col1 search fitcontent "><i class="icon fas fa-sort-amount-down-alt"></i></div>
            <div class="col1 search fitcontent "><i class="icon fas fa-sort-amount-up-alt"></i></div>
          </div>
          </div>

          <div class="row hidden-xm  "> 
            <div class="center lm-half-width">
            <div class="margint20  icon-flo search center">
           <div class=" search fitcontent center" onclick="openNav2()"><i class="icon fas fa-filter"></i></div>
           <div class=" search fitcontent "><i class="icon fas fa-sort-amount-down-alt"></i></div>
           <div class=" search fitcontent "><i class="icon fas fa-sort-amount-up-alt"></i></div>
         </div>
        </div>
         </div>
          </div>

          <!-- Loop area --------------------------------------------->
          <div class="row" >
            <div clas="sm-width center">
              <div class="boxsummery shoppingBlock marginb20 margint20 center ">
            <div class="col3 imgw">
              <img class="images" src="/images/Products/drone.jpg" style="width:100%">
            </div>

            <div class="col6">
              <div class="margint20 left">
              <h3>Inspire 1</h3>
              
              <p>The Inspire 1 was a revelation. The first filmmaking drone in
                the world to integrate an HD video transmission system, 360°
                rotating gimbal and a 4K camera,</p> <br><br>

                <h4>Price:Rs 4000.00</h4>
              </div>
            </div>

            <div class="col3">
              <div class="">
                <div class="col12 nav-bar center">
                  <button>&nbsp;&nbsp; Buy Product &nbsp;&nbsp;</button>


                </div>

              </div>
            </div>
    
            </div>

          </div>
        </div>

        <div class="row" >
          <div clas="sm-width center">
            <div class="boxsummery shoppingBlock marginb20 margint20 center ">
          <div class="col3 imgw">
            <img class="images" src="/images/Products/action-camera.jpg" style="width:100%">
          </div>

          <div class="col6">
            <div class="margint20 left">
            <h3>GoPro HERO9</h3>
            
            <p> Waterproof Action Camera with Front LCD and Touch Rear Screens, 5K Ultra HD Video, 20MP Photos, 1080p Live Streaming, Webcam, Stabilization</p> <br><br>

              <h4>Price:Rs 23,000.00</h4>
            </div>
          </div>

          <div class="col3">
            <div class="">
              <div class="col12 nav-bar center">
                <button>&nbsp;&nbsp; Buy Product &nbsp;&nbsp;</button>


              </div>

            </div>
          </div>
  
          </div>

        </div>
      </div>

      <div class="row" >
        <div clas="sm-width center">
          <div class="boxsummery shoppingBlock marginb20 margint20 center ">
        <div class="col3 imgw">
          <img class="images" src="/images/Products/i-phone.png" style="width:100%">
        </div>

        <div class="col6">
          <div class="margint20 left">
          <h3>I-Phone X 64GB</h3>
          <p>Simple Mobile Prepaid - Apple iPhone X (64GB) - Silver</p>

            <h4>Price:Rs 66,000.00</h4>
          </div>
        </div>

        <div class="col3">
          <div class="">
            <div class="col12 nav-bar center">
              <button>&nbsp;&nbsp; Buy Product &nbsp;&nbsp;</button>


            </div>

          </div>
        </div>

        </div>

      </div>
    </div

        <!-- Loop area ---------------------------------------------

        </div>

        </div>

    </div>  
    <!-- bottom-part-------------------------------------------->
    <div class="row">
		  <div class="col12 fullwidth">
        <hr>
		  </div>
        
    </div>
    <div class="row center backcolor">

      
      <div class=" col3 img-span hidden-sm">
        <td ><img src="/images/Products/SideLogo.png"  width='200'></td>
      </div>

      <div class="col9  nav-bar center">       
    <table class="row center sm-table">
        <tr class="thead center">
        
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
    </div> 
    
     </div>  
     <!-- bottom-part -->

		<div class="row footer backcolor paddingt20">
      
  			<ul>
  				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  				tempor incididunt ut labore et dolore magna aliqua.</li>
  				<li> Affiliox &trade;</li>
  			</ul>
        </div>	 <!-- footer -->
        
</div>

  <div id="mySidenav" class="sidenav">
  		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  		<a href="">User profile<i class="far fa-user"></i></a>  		
      <a href="">Marker Place<i class="fab fa-shopify"></i></a>
      <a href="">Shopping cart<i class="fas fa-shopping-cart"></i></i></a>
  		<a href="">Orders<i class="fas fa-chart-line"></i></i></a>
  		<a href="">Transactions<i class="fas fa-money-check-alt"></i></a>
  		<a href="">Feedback<i class="fas fa-phone-square"></i></i></a>
  		<a href="">Support<i class="fas fa-envelope-open-text"></i></a>
	</div>
	<span onclick="openNav()"></span>

  
<div id="mySidenav2" class="sidenav-fil drp-btn" >
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav2()">&times;</a>
  <button class="dropdown-btn">Clothing
    <!-- <i class="fa fa-caret-down"></i> -->
  </button>
  <div class="dropdown-container">
    <a href="#">Mens</a>
    <a href="#">Women</a>
  </div>
  <button class="dropdown-btn">Electrical
    <!-- <i class="fa fa-caret-down"></i> -->
  </button>
  <div class="dropdown-container">
    <a href="#">Phones</a>
    <a href="#">Headsets</a>
    <a href="#">Speakers</a>
    <a href="#">Drones</a>
  </div>
  <button class="dropdown-btn">Travel
    <!-- <i class="fa fa-caret-down"></i> -->
  </button>
  <div class="dropdown-container">
    <a href="#">DSLR </a>
    <a href="#">Go-Pro</a>
    <a href="#">Tents</a>
  </div>
  <button class="dropdown-btn">Kids
    <!-- <i class="fa fa-caret-down"></i> -->
  </button>
  <div class="dropdown-container">
    <a href="#">Toys </a>
    <a href="#">Kids Clothing</a>

  </div>

  <button class="dropdown-btn">Home Appliance
    <!-- <i class="fa fa-caret-down"></i> -->
  </button>
  <div class="dropdown-container">
    <a href="#">Blenders</a>
    <a href="#">Ovens</a>
    <a href="#">Fans</a>
    <a href="#">Sofas</a>
  </div>
  <div>
  <button class="dropdown-btn">Price
  </button>
    <label class="dropdown-price">
      <input type="radio" checked="checked"  name="radio">&nbsp; Rs :upto 1000

    </label>
    <label class="dropdown-price">
      <input type="radio" checked="checked" name="radio">&nbsp; Rs : upto 5000

    </label>
    <label class="dropdown-price">
      <input type="radio" checked="checked" name="radio">&nbsp; Rs : upto 50000

    </label>
    <label class="dropdown-price">
      <input type="radio" checked="checked" name="radio">&nbsp; Rs : more than 50000 

    </label>
 
  </div>

 <div class="margint20 marginb100">
  <button type="submit" value="submit">Filter </button>
  <button type="reset" value="reset">Reset Filter</button>
</div>
</div>
<span onclick="openNav2()"></span>


  </div>
  <!--Container------------------------------------------>
</body>

</html>