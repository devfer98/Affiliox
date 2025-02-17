<html>

<head>
    <title>Affiliox-Password Reset Code</title>
    <link rel="shortcut icon" href="/images/Logo/logoOnly.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="/css/Customer/common.css" />
    <link rel="stylesheet" type="text/css" href="/css/Customer/customer-grid.css" />
    <script type="text/javascript" src="/js/Common/Signin.js"></script>
    <script type="text/javascript" src="/js/Customer/nav-fixed.js"></script>
    <script src="https://kit.fontawesome.com/6cdc06033e.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans&display=swap" rel="stylesheet">
</head>

<body>
    <!---Navigation bar-------------------------------------------->
    <div class="container">


        <!-- Sign in --------------------------------------------->
        <div class="row ">

            <div class=" col12 center">
                <h1>Send Reset Code</h1>

            </div>

            <div class=" col12  sm-center ">
                <div class="margint50  center">
                    <p>Enter Your Username or Emaill Address</p>
                    <p>We will send the Password reset code to your Email address</p>
                </div>
            </div>

        </div>
        <!------------------------Sign in text-boxs------------------->
        <form method="POST" action="../login/forget">
            <div class="row ">
                <div class=" col12 search  center signin ">

                    <div class="margin margint50 sm-center">
                        Email : <input type="resetcode" name="resetcode"  pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" title="Incorrect Email Format." placeholder="Magic.piper@gmail.com">
                    </div>

                </div>

            </div>
            <div class="row">
                <div class="nav-bar col12 ">
                    <div class="marginl100 sm-center center marginb50">
                        <ul>
                            <button><i class="fas fa-sign-out-alt" type="submit" value='submit' onclick="validateForm();"></i>&nbsp;Send
                                Email</button>
                        </ul>
                    </div>
                </div>
            </div>
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
                </div> 

        </form>


        <!-- bottom-part-------------------------------------------->

    </div>
    <!--Container------------------------------------------>
    <script type="text/javascript" src="/js/Common/Signin.js"></script>
</body>

</html>