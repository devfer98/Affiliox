<link rel="stylesheet" type="text/css" href="/css/Common/Signin.css" />
<link rel="stylesheet" type="text/css" href="/css/Seller/common.css" />
<link rel="stylesheet" type="text/css" href="/css/Customer/customer-grid.css" />
<link rel="stylesheet" type="text/css" href="/css/Common/drop.css" />

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
          <form>
          <select name="direction" id="select-nav" onchange="location = this.value;">
            <?php if(isset($_SESSION['username']) and !empty($_SESSION['username'])){

                echo '<option value="" selected disabled hidden></option>';
                echo '<option value="../login/logout">Logout</option>';
            }else{
                echo '<option value="" selected disabled hidden></option>';
                echo '<option value="../Signup/create">Signup</option>';
                echo '<option value="../login/index">Login</option>';

            
            }?>
          </select>
          </form>	
          </div>

        </div>


      </div>
    
      <div class="row">
		  <div class="col12 fullwidth">
        <hr>
		  </div>
        
    </div>
  </div>

  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="/Seller/profile">User profile<i class="far fa-user"></i></a>
    <a href="/MiniStore/ministore">Mini Store<i class="fas fa-store"></i></a>
    <a href="#">Marker Place<i class="fab fa-shopify"></i></a>
    <a href="/Seller/statistics">Statstics<i class="fas fa-chart-line"></i></i></a>
    <a href="/Seller/order">View Orders<i class="fas fa-chart-line"></i></i></a>
    <a href="/Seller/transaction">Transactions<i class="fas fa-money-check-alt"></i></a>
    <a href="/Seller/feedback">Feedback<i class="fas fa-phone-square"></i></i></a>
    <a href="/Seller/support">Support<i class="fas fa-envelope-open-text"></i></a>
</div>
<span onclick="openNav()"></span>





<!-- <div id="main" class="container navigation">
    <ul class="">
        <li onclick="openNav()">&#9776;</li>
        <li><a href="">Affiliox</a></li></a>
        <li style="float: right;">user-name</li>
    </ul>
    <div class="row row-padding">
        <hr class="col12"/>
    </div>
</div>

<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="/Seller/profile">User profile<i class="far fa-user"></i></a>
    <a href="/MiniStore/ministore">Mini Store<i class="fas fa-store"></i></a>
    <a href="#">Marker Place<i class="fab fa-shopify"></i></a>
    <a href="/Seller/statistics">Statstics<i class="fas fa-chart-line"></i></i></a>
    <a href="/Seller/order">View Orders<i class="fas fa-chart-line"></i></i></a>
    <a href="/Seller/transaction">Transactions<i class="fas fa-money-check-alt"></i></a>
    <a href="/Seller/feedback">Feedback<i class="fas fa-phone-square"></i></i></a>
    <a href="/Seller/support">Support<i class="fas fa-envelope-open-text"></i></a>
</div>
<span onclick="openNav()"></span> -->