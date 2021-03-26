<html>

<head>
    
    <title>Payhere reply</title>
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
                <div class="col12 margint50">
                    <div class="hrCustom margint50">
                        <h2>Reply status from Payhere : <?php echo $this->data?></h2>
                        <div class="col6">
                            <hr />
                        </div>
                    </div>
                </div>
                <div class="col12">
                    <h3>.
                    </h3><br><br>
                    
                </div>
        <div class="col12">
        <div class="col4">        
        <form method="post" action="../buyer/CurrentOrders">
      

            <input type="hidden" name="merchant_id" value="1216939" hidden>  

            <input type="text" name="order_id" value=" <?php echo $this->data ?>" hidden>
            <input type="text" name="status_code" value="2" hidden>
            <input type="text" name="custom_1" value=" <?php echo $_SESSION['custom_1'] ?>" hidden>
            <input type="text" name="payment_id" value=" <?php echo(rand(1000000,9000000));?>" hidden>
                <div class="row ">
                    <div class="col12 ">
                        <div class="center nav-bar margint50 ">
                            <ul>
                                <button type="submit" value="submit"><i class="fas fa-sign-in-alt"></i>&nbsp;Payment Success</button>
                            </ul>
                        </div>
                    </div>
                </div>

        </form>  
        </div> 
        <div class="col4">
        <form method="post" action="../buyer/CurrentOrders">
            <!-- <?php echo $_SESSION['custom_1']; ?> -->
            <input type="hidden" name="merchant_id" value="1216939" hidden>  

            <input type="text" name="order_id" value=" <?php echo $this->data?>" hidden>
            <input type="text" name="status_code" value="-2" hidden>
            <input type="text" name="custom_1" value=" <?php echo $_SESSION['custom_1'] ?>" hidden>
            <input type="text" name="payment_id" value=" <?php echo(rand(1000000,9000000));?>" hidden>
                <div class="row ">
                    <div class="col12 ">
                        <div class="center nav-bar margint50">
                            <ul>
                                <button type="submit" value="sumbit"><i class="fas fa-sign-in-alt"></i>&nbsp;Payment Failed</button>
                            </ul>
                        </div>
                    </div>
                </div>

        </form>  
        </div>
        <div class="col4">
        <form method="post" action="../buyer/CurrentOrders">

            <input type="hidden" name="merchant_id" value="1216939" hidden>  
            <input type="text" name="payment_id" value=" <?php echo(rand(1000000,9000000));?>" hidden>
            <input type="text" name="order_id" value=" <?php echo $this->data?>" hidden>
            <input type="text" name="status_code" value="-1" hidden>
            <input type="text" name="custom_1" value=" <?php echo $_SESSION['custom_1'] ?>" hidden>
                <div class="row ">
                    <div class="col12 ">
                        <div class="center nav-bar margint50 marginb100">
                            <ul>
                                <button type="submit" value="sumbit"><i class="fas fa-sign-in-alt"></i>&nbsp;Payment canceled</button>
                            </ul>
                        </div>
                    </div>
                </div>

        </form>     
        </div>
        </div>
              <div class="row">
                    <div class="col12  marginb100 hrCustom">
                        <hr>
                    </div>
                </div>
            <!-- </div> -->
        
        </div>
    </div>
    <!--Container------------------------------------------>
</body>

</html>