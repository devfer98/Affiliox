<!DOCTYPE html>
<html>

<head>
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
    <div class="container">
        <div class=" ">
            <div class="row hidden-xm marginb100 backcolor">
                <div class=" nav-bar sm-logo-nav hidden-xm  sm-header backcolor ">

                    <div class="sm-1 open-btn" onclick="openNav()">&#9776;</div>
                    <div class="sm-9">
                        <a href="/index.html"><img src="/images/Logo/Sidelogo.png" alt="Affiliox LOGO" /></a>
                    </div>
                    <div class="sm-2 ">
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
            </div>
            <div class=" nav-bar center backcolor">
                <div class="col1 open-btn hidden-sm" onclick="openNav()"> &#9776;</div>
                <div class="col2 hidden-sm">
                    <a href="/index.html"><img src="/images/Logo/Sidelogo.png" alt="Affiliox LOGO" /></a>
                </div>

                <div class="col4 center">
                    <ul>
                        <a href="../Buyer/Index"><i class="fas fa-home"></i>&nbsp;Home</a>
                        <a href=""><i class="fas fa-users"></i>&nbsp;About Us</a>
                        <a href=""><i class="fas fa-inbox"></i>&nbsp;Help</a>
                        <a href=""><i class="fas fa-users"></i>&nbsp;Account</a>
                    </ul>
                </div>

                <div class="col4 search  fullWidth center">
                    <ul>
                        <input type="text" name="search" placeholder=" Search" pattern="^[a-zA-Z0-9 ]*$" />
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
        </div>

        <div class="fullwidth col12full">
            <div class=" fullwidth">
                <hr>
            </div>
        </div>
     </div>
</body>
</html>
