<html>

<head>
    <title>Affiliox-Password-Reset</title>

    <link rel="shortcut icon" href="/images/Logo/logoOnly.png" type="image/x-icon">
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

        <!-- Sign in --------------------------------------------->
        <!-- <div class="row "> -->

        <div class=" col12 sign-note center ">
            <div class="marginb100 margint50">
                <h1>Reset your Password</h1>

            </div>

        </div>
        <!------------------------Sign in text-boxs------------------->
        <form method="POST" onsubmit="ValidatePassword()" action="../Buyer/PasswordReset">
            <div class="row">
            <?php if(isset($this->UImsg) and !empty($this->UImsg)){
                        if($this->State==1) {

                           ?><div class="center marginb50 errorMsgSuccess"><?php
                           
                        }else{
                          ?><div class="center marginb50 errorMsgFailed"> <?php
                        }                 
                  }  ?>
                    <p><?php if(isset($this->UImsg) and !empty($this->UImsg)){echo $this->UImsg;}  ?></p>
                </div>
                <div class=" col12 search signin center">
                    
                    Current Password &nbsp; : <input   required type="password" name="current_password" id="current-pass-field"
                        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                        title="Password should be same to the required type." placeholder="*********"> <br></br>
                    New Password &nbsp; &nbsp; &nbsp; : <input   required type="password" name="password" id="con-pass-field"
                        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                        title="Password should be same to the required type." placeholder="*********"> <br></br>
                    Confirm Password : <input  type="password"  required name="con-password" id="pass-field"
                        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                        title="Password should be same to the required type." placeholder="********"><br><br>
                    <input style="width:5%;box-shadow: 0 0 0px #719ECE;" type="checkbox" onclick="passVisibility()">Show
                    Password

                </div>

            </div>
 
        <div class="row">
            <div class="nav-bar col12 center ">
                <div class="marginb50">
                        <button type="submit" ><i class="fas fa-sign-out-alt"></i>&nbsp;Reset Password</button>

                </div>
            </div>
        </div>
    </form>
        <!-- bottom-part-------------------------------------------->


    </div>
    <!--Container------------------------------------------>
</body>

</html>