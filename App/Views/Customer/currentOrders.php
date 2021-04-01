<html>

<head>
    <title>Affiliox-Current-Orders</title>
    <link rel="shortcut icon" href="/images/Logo/logoOnly.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="/css/Customer/common.css" />
    <link rel="stylesheet" type="text/css" href="/css/Customer/customer-grid.css" />
    <script type="text/javascript" src="/js/Customer/nav-fixed.js"></script>
    <script src="https://kit.fontawesome.com/6cdc06033e.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <!---Navigation bar-------------------------------------------->

    <!-- Container content  --------------------------------------------->
  
  
    <div class="container">
        <div class="row center">

            <div class="col12 center">

                <div class="row ">
                    <div class="margint50 marginb50 ">

                        <div class="big-button nav-bar">
                            <ul>
                                <a href="../Buyer/currentOrders"><i class="fas fa-clock fa"></i>&nbsp;Current Orders</a>
                                <a href="../Buyer/completedOrders"><i class="fas fa-check-square"></i>&nbsp;Completed
                                    Orders</a>
                            </ul>
                        </div>

                    </div>
                </div>
                <?php if (isset($this->UImsgNotice) and !empty($this->UImsgNotice)) {
                        if ($this->State == 1) {

                    ?><div class="center marginb100 margint20 errorMsgSuccess"><?php

                                } else {
                                      ?><div class="center marginb100 margint100 errorMsgFailed"> <?php
                                     }
                                ?> <p>  <?php  echo $this->UImsgNotice ?>  </p></div>    

                              <?php   }  ?>
                <div class=" row marginb50 ">

                    <div class="left">
                        <h2><i class="fas fa-clock fa"></i>&nbsp;Current Orders</h2>
                        <div class="row">
                            <div class="col12 hrCustom lm-half-width">
                                <hr />
                            </div>
                        </div>



                    </div>

                </div>
                <!-- Loop area --------------------------------------------->
                <?php  
                
                if(isset($this->orders) and !empty($this->orders)){
					
                    while ($row = $this->orders->fetch_assoc()) {
                            
                            $this->details->data_seek(0);
                        ?>
                
                <div class="row boxsummery shoppingBlock marginb100">

                                <div class="right marginr100">
                                    <h3>Order ID  :<?php echo $row['orderID'] ?></h3>
                                    <p>Amount :<?php echo number_format($row['amount'] ,2)?></p>
                                    <p>Delivery Date  :<?php echo $row['deliveryDeadline'] ?></p>
                                    <p>Delivery Address  :<?php echo $row['deliveryAddress'] ?></p>
                                </div>
                    <?php while ($row2 = $this->details->fetch_assoc()) {

                         
                    if( $row['orderID'] == $row2['orderID']) { 
                        

                        ?>

                    <div clas="sm-width center">
                        <div class="boxsummery shoppingBlock marginb20 margint20 center ">
                            <div class="col3 imgw">
                            
                                <img class="images" src="/images/upload/<?php echo $row2['imageCode'] ?>" style="width:100%">
                            </div>
                            <div class="col4">
                                <div class="margint20 left">
                            
                                    <h3><?php echo $row2['prodName'] ?></h3>
                                    <p>Order ID :<?php echo $row['orderID'] ?></p>
                                    <p>price : Rs.<?php  echo number_format($row2['price'],2)?></p>
                                    <p>Dispatch status :<?php echo $row2['dispatchStatus'] ?></p>
                                    
                                </div>
                            </div>

                            <div class="col2 search label">
                                <div class="margint20">
                                    <label for="quantity"><i class="fa fa-truck-loading"></i>&nbsp;Quantity</label>
                                    <input style="z-index: 1;" type="number" id="quantity" value= "<?php echo $row2['quantity'] ?>" name="quantity" readonly
                                        placeholder="1"> <br>
                                </div>
                            </div>                         
                            <div class="col3">
                                <div class="">
                                    
                                    <div class="col12 nav-bar center">


                                        <form method ="POST" action="../Buyer/OrderSuccess">
                                        <input type="text" name ="ProdID" value ="<?php echo $row2['productID'] ?> " hidden>
                                        <input type="text" name ="OrderID" value ="<?php echo $row2['orderID'] ?>" hidden>
                                        <button value="submit" type="submit" >&nbsp; Order Received
                                            &nbsp;</button></form>
                                        <form method ="POST" action="../Buyer/ContactSeller">
                                            <input type="text" name ="ProdID" value ="<?php echo $row2['productID'] ?> " hidden>
                                            <input type="text" name ="OrderID" value ="<?php echo $row2['orderID'] ?>" hidden>
                                        <button value="submit" type="submit" >Contact Seller</button>
                                        </form>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>

                   <?php  }
                    }  ?>
                </div>

                <?php
                     }

                } ?>

            </div>
        </div>
    </div>

        <!-- bottom-part-------------------------------------------->
</body>

</html>