<!DOCTYPE html>
<html>

<head>
    <!-- <link rel="stylesheet" type="text/css" href="/css/Common/Signin.css" /> -->
    <link rel="stylesheet" type="text/css" href="/css/Seller/common.css" />
    <link rel="stylesheet" type="text/css" href="/css/Seller/customer-grid.css" />
    <script type="text/javascript" src="/js/Seller/sideNav.js"></script>
    <!-- <script src="/js/Common/drop.js"></script> -->
    <link rel="stylesheet" type="text/css" href="/css/Seller/drop.css" />
    <script src="https://kit.fontawesome.com/6cdc06033e.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <div class="containerN">
        <div class=" ">
            <div class="rowN hidden-xmN marginb100N backcolorN">
                <div class=" nav-barN sm-logo-navN hidden-xmN  sm-headerN backcolorN ">

                    <div class="sm-1N open-btnN" onclick="openNav()">&#9776;</div>
                    <div class="sm-9N">
                        <a href="/index.html"><img src="/images/Logo/Sidelogo.png" alt="Affiliox LOGO" /></a>
                    </div>
                    <div class="sm-2N">
                        <div class="selectorN margint20N">
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
            </div>
            <div class=" nav-barN centerN backcolorN">
                <div class="col1N open-btnN hidden-smN" onclick="openNav()"> &#9776;</div>
                <div class="col2N hidden-smN">
                    <a href="/index.html"><img src="/images/Logo/Sidelogo.png" alt="Affiliox LOGO" /></a>
                </div>

                <div class="col4N centerN">
                    <ul>
                        <a href="../Buyer/Index"><i class="fas fa-home"></i>&nbsp;Home</a>
                        <a href=""><i class="fas fa-users"></i>&nbsp;About Us</a>
                        <a href=""><i class="fas fa-inbox"></i>&nbsp;Help</a>
                        <a href=""><i class="fas fa-users"></i>&nbsp;Account</a>
                    </ul>
                </div>

                <div class="col4N searchN fullWidthN centerN">
                    <ul>
                        <input type="text" name="search" placeholder="Headsets" />
                        <a href=""><i class="fas fa-search"></i></a>
                    </ul>
                </div>
                <div class="col1N hidden-smN">
                    <div class="selectorN margint20N">

                        <select name="direction" id="select-nav" onchange="location = this.value;">
                            <?php if(isset($_SESSION['username']) and !empty($_SESSION['username'])){

                            echo '<option value="" selected disabled hidden>SELECT</option>';
                            echo '<option value="../login/logout">Logout</option>';
                        }else{
                            echo '<option value="" selected disabled hidden>SELECT</option>';
                            echo '<option value="../Signup/create">Signup</option>';
                            echo '<option value="../login/index">Login</option>';
                   
                        }?>
                        </select>

                    </div>

                </div>
            </div>
        </div>

        <div class="fullwidthN col12N">
            <div class=" fullwidthN">
                <hr>
            </div>
        </div>
    </div>

    <div id="mySidenav" class="sidenavN">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="/Seller/profile">User profile<i class="far fa-user"></i></a>
        <a href="/MiniStore/ministore">Mini Store<i class="fas fa-store"></i></a>
        <a href="/Seller/market">Market Place<i class="fab fa-shopify"></i></a>
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
</body>
</html>
       