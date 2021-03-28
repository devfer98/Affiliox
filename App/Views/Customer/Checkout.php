<html>

<head>
    <title>Affiliox-Proceed to Payhere</title>
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
        
        <div class="row center">

            <div class="col9 ">
                
                <div class="row ">
                    <div class="margint50 marginb50">
                        <h2><i class="fas fa-shopping-cart"></i> &nbsp; Checkout</h2>
                    </div>

                    <div class="left marginl100">
                                <p> <b>Name : </b> <?php echo $_POST['name'] ?>
                                <p> <b>Address : </b><?php echo $_POST['address']  ?> , <?php echo $_POST['city']  ?> ,<?php echo $_POST['district']  ?>
                                <p> <b>Phone-num : </b><?php  echo $_POST['phoneNo'] ?>
                                <p> <b>Special Note : </b><?php  echo $_POST['note'] ?>
                </div>
                </div>
                <!-- Loop area --------------------------------------------->
                <?php 
                              
                    if(empty($_COOKIE['items']) || $_COOKIE['items']=="[]" ){
                       
                    }else{
                        // $items = isset($_COOKIE["items"]) ? $_COOKIE["items"] : "[]";
                        // $items = json_decode($items,true);
                        
                        foreach ($this->UItotal[3] as $cat=>$item) { 
                            
                            
                            ?>
                      
                <div class="row">
                    <div clas="sm-width center">
                        <div class="boxsummery shoppingBlock marginb20 margint20 center ">
                            <div class="col3 imgw">
                                <img class="images" src="/images/upload/<?php echo $item['image'] ?>" style="width:100%">
                            </div>
                            
                            <div class="col5 ">
                                <div class="margint20 left">
                                    <h3><?php echo $item['name'] ?></h3>
                                    <p>Product Price   : Rs<?php echo $item['price'] ?></p>
                                    <p>Delivery Price  : Rs<?php echo $item['dprice'] ?></p>
                                    <p>Delivery period :<?php echo $item['dperiod'] ?> Days</p>

                                   
                                </div>
                            </div>

                            <div class="col3 search label">
                                <div class="margint20">
                                    <label for="quantity" ><i class="fa fa-truck-loading"></i>&nbsp;Quantity</label>
                                    <input disabled style="z-index: 1;"  disabled type="number" id="quantity" name="quantity"
                                       value ="<?php echo $item['Q'] ?>" placeholder="1"> <br>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <?php   }
                    }
                ?>
                <!-- Loop area --------------------------------------------->
            </div>

            <div class="col3   mm-fullwidth">
                <div class="margint50 marginb50">
                    <div class="boxsummery">
                        <div class="col12 hrCustom">
                            <div class="margint100 center">
                                <h2>Summary</h2>
                                <hr />
                            </div>
                        </div>
                    
                        <div class="col12  left hrCustom">
                            <div>
    
                                 <?php $datetime =date("Y-m-d") ;
                                    //     date_add($datetime,date_interval_create_from_date_string("40 days"));
                                    // echo date_format($datetime,"Y-m-d");

                                    ?>
                                <p> Products : <?php echo $this->UItotal[0] ?></p>  
                                <p> Delivery &nbsp;: <?php echo $this->UItotal[1] ?> </p>
                                <p> Taxes&nbsp;&nbsp;&nbsp; &nbsp; : <?php echo $this->UItotal[4] ?> </p><br>    
                                <p class="font-heavy"> Sub-Total : <?php echo $this->UItotal[2] ?> </p><br>                     
                                <hr />


                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

        <form method="post" action="../buyer/payment">

            <input type="hidden" name="merchant_id" value="1216939" hidden> 
            <input type="hidden" name="return_url" value="http://localhost/Buyer/PGreply" hidden>
            <input type="hidden" name="cancel_url" value="http://127.0.0.1/buyer/checkout" hidden>
            <input type="hidden" name="notify_url" value="http://127.0.0.1/user/market" hidden>  
           <input type="text" name="first_name" value="<?php echo $_POST['name'] ?>" hidden> 
           <input type="text" name="last_name" value=" " hidden>
           <input type="text" name="order_id" value="ItemNo12345" hidden>
           <input type="text" name="address" value="<?php echo $_POST['address']  ?> " hidden>
           <input type="text" name="phone" value="<?php  echo $_POST['phoneNo'] ?>" hidden><br>
           <input type="text" name="city" value="<?php  echo $_POST['city'] ?>" hidden>
           <input type="text" name="email" value="<?php  echo $_POST['email'] ?>" hidden>
           <input type="text" name="custom_1" value="<?php  echo json_encode($this->UItotal[3]) ?>" hidden>
           <input type="text" name="country" value="Srilanka" hidden>
           <input type="text" name="district" value="<?php  echo $_POST['district'] ?>" hidden>
           <input type="text" name="amount" value=" <?php echo $this->UItotal[2] ?> " hidden>
           <input type="text" name="items" value="<?php  echo $this->UItotal[3] ?>" hidden><br>
           <input type="text" name="currency" value="LKR" hidden>

        
        




        <div class="row ">

            <div class="col12 ">
                <div class="center marginb50">
                    <?php 
                    if((isset($flag)) && ($flag==1)){
                        
                        echo "<button class=\"disabled \" onclick=\"location.href='../Buyer/Delivery'\" type=\"submit\" value=\"submit\" disabled> &nbsp; Proceed &nbsp; </button>";
                    }else
                        echo "<button  type=\"submit\" value=\"Buy Now\"> &nbsp; Proceed  &nbsp; </button>"
                    ?>
                </div>
            </div>
        </div>

        </form> 




    </div>

    <!-- bottom-part-------------------------------------------->
</body>

</html>