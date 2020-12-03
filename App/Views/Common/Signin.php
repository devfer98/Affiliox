<!DOCTYPE html>
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
    <!---Navigation bar HEADER-------------------------------------------->


    <!-- Sign in --------------------------------------------->
    <div class="row margint50">

        <div class=" col12 sign-note center">
            <h1>Sign in to your Account</h1>

        </div>

    </div>
    <!------------------------Sign in text-boxs------------------->
    <form method="POST" action="../Login/auth">

        <div class="row  center">
            <div class="errorMsgFailed">
                <p><?php if(isset($this->UImsg) and !empty($this->UImsg)){echo $this->UImsg;}  ?></p>
            </div>
        </div>
        <div class="row margint50">
            <div class=" col12 search signin label center">

                <label style="text-align: left;" for="Username-field"><i class="fa fa-user-alt"></i> Username :</label>
                <input type="text" name="Username-field"minlength="5" maxlength="100" pattern="[a-zA-Z0-9'-'\s]*" title="Invalid Username Format." required placeholder="Super Unqiue Username"> <br></br>
                <label for="password-field"><i class="fa fa-key"></i> Password :</label>
                <input type="password" name="Password-field" id="pass-field" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
  							title="Password should be same to the required type."  required placeholder="********"><br><br>
                <input style="width:5%;box-shadow: 0 0 0px #719ECE;" type="checkbox" onclick="passVisibility()">Show Password

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




    <!-- bottom-part---FOOTTER----------------------------------------->


</body>

</html>