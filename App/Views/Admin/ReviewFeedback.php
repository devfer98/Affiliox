<html>

<head>
  <title>Affiliox-ReviewFeedbacks</title>
	<link rel="shortcut icon" href="/images/Logo/logoOnly.png" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="/css/Customer/common.css" />
	<link rel="stylesheet" type="text/css" href="/css/Customer/customer-grid.css" />
  <link rel="stylesheet" type="text/css" href="/css/Admin/manage.css">
  <link rel="stylesheet" type="text/css" href="/css/Admin/verify.css">
  <script type="text/javascript" src="/js/Customer/nav-fixed.js"></script>
  <script type="text/javascript" src="js/Admin/tab.js"></script>
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
          <a href="../../index.html"><img src="../../images/Sidelogo.png" alt="Affiliox LOGO"/></a>
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
          <a href="../../index.html"><img src="../../images/Sidelogo.png" alt="Affiliox LOGO"/></a>
        </div>

        <div class="col4 center">
          <ul>
            <a href=""><i class="fas fa-home"></i>&nbsp;Home</a>
            <a href=""><i class="fas fa-users"></i>&nbsp;About Us</a>
            <a href=""><i class="fas fa-inbox"></i>&nbsp;Help</a>
            <a href=""><i class="fas fa-users"></i>&nbsp;Account</a>
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

        <div class=" ">
          <div class=" row margint50 marginb50 ">
            <div class="left">
            <h2 ><i class='fas fa-star'></i>&nbsp;Review Feedbacks</h2>
            <div class="row">

              <div class="col12 hrCustom lm-half-width">
                <hr />
              </div>
            </div>
          </div>
          </div>
         <!-- content area --------------------------------------------->
         <div class="tab">
          <button class="tablinks button1 active" de onclick="openPage(event,'SellerFeedback')" id="defaultOpen">Seller Feedbacks</button>
          <button class="tablinks button1" onclick="openPage(event,'PromoterFeedback')">Promoter Feedbacks</button>
         
          <div id="SellerFeedback" class="tabcontent" style="display: block;">
            <div class="body">
              <table>
                <tr>
                  <th>Full Name</th>
                  <th>UserID</th>
                  <th>Email</th>
                  <th>Date Created</th>
                  <th>Action</th>
                </tr>
                <tr>
                  <td>Peter</td>
                  <td>seller1</td>
                  <td>peter@gmail.com</td>
                  <td>19th September 2020</td>
                  <td><button>View Feedback</button></td>
                </tr>
                <tr>
                  <td>Griffin</td>
                  <td>seller2</td>
                  <td>griffin@gmail.com</td>
                  <td>22nd September 2020</td>
                  <td><button>View Feedback</button></td>
                </tr>
                <tr>
                  <td>Lily</td>
                  <td>seller3</td>
                  <td>lily@gmail.com</td>
                  <td>10th October 2020</td>
                  <td><button>View Feedback</button></td>
                </tr>
                <tr>
                  <td>John</td>
                  <td>seller4</td>
                  <td>john@gmail.com</td>
                  <td>15th October 2020</td>
                  <td><button>View Feedback</button></td>
                </tr>
              </table>
            </div>	
          </div>
         
          <div id="PromoterFeedback" class="tabcontent">
            <div class="body">
              <table>
                <tr>
                  <th>Full Name</th>
                  <th>UserID</th>
                  <th>Email</th>
                  <th>Date Created</th>
                  <th>Action</th>
                </tr>
                <tr>
                  <td>Michel</td>
                  <td>promoter1</td>
                  <td>michel@gmail.com</td>
                  <td>8th August 2020</td>
                  <td><button>View Feedback</button></td>
                </tr>
                <tr>
                  <td>Joe</td>
                  <td>promoter2</td>
                  <td>joe@gmail.com</td>
                  <td>10th September 2020</td>
                  <td><button>View Feedback</button></td>
                </tr>
                <tr>
                  <td>Liza</td>
                  <td>promoter3</td>
                  <td>liza@gmail.com</td>
                  <td>19th September 2020</td>
                  <td><button>View Feedback</button></td>
                </tr>
                <tr>
                  <td>Jhon</td>
                  <td>promoter4</td>
                  <td>jhon@gmail.com</td>
                  <td>10th OCtober 2020</td>
                  <td><button>View Feedback</button></td>
                </tr>
              </table>
            </div>
          </div>
         
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
        <td ><img src="../../images/SideLogo.png"  width='200'></td>
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
  		<a href="AdminDashboard.html">Dashboard<i class='fas fa-ellipsis-h'></i></a>
			<a href="AdminProfile.html">User Profile<i class="far fa-user"></i></a>
			<a href="ManageAccount.html">Manage Accounts<i class='fas fa-users-cog'></i></a>
			<a href="VerifyUser.html">Approve Registrations<i class="fas fa-user-check"></i></a>
			<a href="AddAdmin.html">Add Admins<i class='fas fa-user-plus'></i></a>
			<a href="AdminStatistics.html">View Statistics<i class="fas fa-chart-line"></i></i></a>
			<a href="ReviewFeedback.html">Review Feedbacks<i class='fas fa-comments'></i></a>
	</div>
	<span onclick="openNav()"></span>


  </div>
  <!--Container------------------------------------------>
</body>

</html>