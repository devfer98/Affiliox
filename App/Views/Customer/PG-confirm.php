<html>

<head>
    <title>Affiliox-Payhere</title>
    <link rel="shortcut icon" href="/images/Logo/logoOnly.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="/css/Customer/common.css" />
    <link rel="stylesheet" type="text/css" href="/css/Customer/customer-grid.css" />
    <script type="text/javascript" src="/js/Customer/nav-fixed.js"></script>
    <script src="https://kit.fontawesome.com/6cdc06033e.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <!---Navigation bar-------------------------------------------->
    <div class="container">
        <!-- Container content  --------------------------------------------->
        <div class="row margint50 sm-center ">
            <div class="col9 search label ">
                <div class="col12 ">
                    <div class="hrCustom">
                        <h2>One more step</h2>
                        <div class="col6">
                            <hr />
                        </div>
                    </div>
                </div>
                <div class="col12">
                    <h3>You will be directed to a secured payment gateway to complete order.
                    </h3><br><br>
                    
                </div>

                
        <form method="post" action="https://sandbox.payhere.lk/pay/checkout">

            <input type="hidden" name="merchant_id" value="1216939" hidden> 
            <input type="hidden" name="return_url" value="http://localhost/Buyer/CurrentOrders" hidden>
            <input type="hidden" name="cancel_url" value="http://127.0.0.1/buyer/checkout" hidden>
            <input type="hidden" name="notify_url" value="http://127.0.0.1/user/market" hidden>  
            <input type="text" name="first_name" value="<?php echo $this->data['first_name'] ?> "hidden > 
            <input type="text" name="last_name" value=" " hidden>
            <input type="text" name="order_id" value=" <?php echo $this->data['order_id']  ?>" hidden>
            <input type="text" name="address" value="<?php  $this->data['address']  ?> " hidden>
            <input type="text" name="phone" value="<?php   $this->data['phoneNo'] ?>" hidden><br>
            <input type="text" name="city" value="<?php   $this->data['city'] ?>" hidden>
            <input type="text" name="email" value="<?php   $this->data['email'] ?>" hidden>
            <input type="text" name="country" value="Srilanka" hidden>
            <input type="text" name="amount" value=" <?php echo $this->data['amount']  ?> " hidden>
            <input type="text" name="items" value=" <?php echo $this->data['items']  ?> " hidden><br>
            <input type="text" name="currency" value="LKR" hidden>
            <input type="text" name="custom_1" value="<?php  echo $this->UItotal[3] ?>" hidden>

                <div class="row ">
                    <div class="col12 ">
                        <div class="center nav-bar margint50 marginb100">
                            <ul>
                                <button type="submit" value="sumbit"><i class="fas fa-sign-in-alt"></i>&nbsp;Proceed to Payhere</button>
                            </ul>
                        </div>
                    </div>
                </div>

        </form>   
                <div class="row">
                    <div class="col12  marginb100 hrCustom">
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Container------------------------------------------>
</body>

</html>