<html>

<head>
    <title>Affiliox-Cart</title>
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
                        <h2><i class="fas fa-shopping-cart"></i> &nbsp; Shopping Cart</h2>
                    </div>
                </div>
                <!-- Loop area --------------------------------------------->
                <?php 
                    if(empty($_COOKIE['items']) || $_COOKIE['items']=="[]" ){
                        $flag=1;
                        echo "<p class=\"center font-heavy margint100 marginb100\" >Shopping Cart empty , Please add products ...<p>" ;
                    }else{
                        $items = isset($_COOKIE["items"]) ? $_COOKIE["items"] : "[]";
                        $items = json_decode($items,true);
                        
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
                                    <p> Rs <?php echo $item['price'] ?></p>
                                    
                                </div>
                            </div>

                            <div class="col3 search label">
                                <div class="margint20">
                                    <label for="quantity"><i class="fa fa-truck-loading"></i>&nbsp;Quantity</label>
                                    <input disabled style="z-index: 1;" type="number" id="quantity" name="quantity"
                                       value ="<?php echo $item['Q'] ?>" placeholder="1"> <br>
                                </div>
                            </div>

                            <div class="col1">
                                <div class="margint50 link-trash ">
                                    <a href="../user/deleteShoppingCart?id=<?php echo $item['ID'] ?>"> <i class="fas fa-trash fa-1x"></i></a>
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

                        <div class="col12 hrCustom">
                            <div>
                                <p> Total : Rs <?php echo $this->UItotal[0] ?></p>  <br><br><br> 
                                <p> Please Confirm the Delivery deatils for the Delivery charges.</p><br>                         
                                <hr />
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>





        <div class="row ">

            <div class="col12 ">
                <div class="center marginb50">
                    <?php 
                    if((isset($flag)) && ($flag==1)){
                        
                        echo "<button class=\"disabled \" onclick=\"location.href='../Buyer/Delivery'\" type=\"submit\" value=\"submit\" disabled> &nbsp; Proceed &nbsp; </button>";
                    }else
                        echo "<button onclick=\"location.href='../Buyer/Delivery'\" type=\"submit\" value=\"submit\"> &nbsp; Proceed &nbsp; </button>"
                    ?>
                </div>
            </div>
        </div>




    </div>

    <!-- bottom-part-------------------------------------------->
</body>

</html>