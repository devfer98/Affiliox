<html>

<head>
    <title>Affiliox-Sign in</title>
    <link rel="shortcut icon" href="/images/Logo/logoOnly.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="/css/Common/Signin.css" />
    <link rel="stylesheet" type="text/css" href="/css/Customer/common.css" />
    <link rel="stylesheet" type="text/css" href="/css/Customer/customer-grid.css" />
    <script type="text/javascript" src="/js/Common/Signin.js"></script>
    <script type="text/javascript" src="/js/Customer/nav-fixed.js"></script>

    <script src="https://kit.fontawesome.com/6cdc06033e.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <!---Navigation bar-------------------------------------------->
    <div class="container">
        <div class="backcolor">
            <div class="row hidden-xm marginb100 backcolor">
                <div class=" nav-bar sm-logo-nav hidden-xm  sm-header backcolor ">

                    <div class="sm-1 open-btn" onclick="openNav()">&#9776;</div>
                    <div class="sm-9">
                        <a href="/index.html"><img src="/images/Logo/Sidelogo.png" alt="Affiliox LOGO" /></a>
                    </div>
                    <div class="sm-2 ">
                        <div class="selector margint20">
                            <select>
                                <option value="sign in">Sign In</option><br />
                                <option value="login">Login</option><br />
                            </select>
                        </div>
                    </div>


                </div>
            </div>
            <div class=" nav-bar center backcolor">
                <div class="col1 open-btn hidden-sm" onclick="openNav()">&#9776;</div>
                <div class="col2 hidden-sm">
                    <a href="/index.html"><img src="/images/Logo/Sidelogo.png" alt="Affiliox LOGO" /></a>
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
				
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col12 fullwidth">
                    <hr>
                </div>
            </div>



            <!-- Sign in --------------------------------------------->
            <div class="row margint50">

                <div class=" col12 sign-note center">
                    <h1>Sign in to your Account</h1>

                </div>

            </div>
            <!------------------------Sign in text-boxs------------------->
            <form  method="POST" action="../Login/auth">
            <div class="row  center">
            <div class="errorMsg">
            <p><?php if(isset($this->UImsg) and !empty($this->UImsg)){echo $this->UImsg;}  ?></p></div></div>
            <div class="row margint50">
                <div class=" col12 search signin label center">

                    <label style="text-align: left;" for="Username-field"><i class="fa fa-user-alt"></i> Username
                        :</label>
                    <input type="text" name="Username-field" required placeholder="Super Unqiue Username"> <br></br>
                    <label for="password-field"><i class="fa fa-key"></i> Passsword :</label>
                    <input type="password" name="Password-field" id="pass-field"  required placeholder="********"><br><br>
                    <input style="width:5%;box-shadow: 0 0 0px #719ECE;" type="checkbox" onclick="passVisibility()">Show
                    Password

                </div>

            </div>
            <div class="row">
                <div class="nav-bar col12 center ">
                    <ul>
                        <button type="submit" value="submit"><i class="fas fa-sign-out-alt"></i>&nbsp;Sign in</button>
                    </ul>
                </div>
            </div>

            </form>
            <div class="row center ">
                <div class="col12">
                    <div class="marginb50">
                        <a href="../login/forget">Forgot Password?</a>
                        <a href="../signup/create">Need an Account?</a>
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
                    <td><img src="/images/Logo/SideLogo.png" width='200'></td>
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
            </div> <!-- footer -->

        </div>



    </div>
    <!--Container------------------------------------------>

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
  
</body>

</html>