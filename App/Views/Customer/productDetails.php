<html>

<head>
    <title>Affiliox-Product</title>
    <link rel="shortcut icon" href="/images/Logo/logoOnly.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="/css/Customer/common.css" />
    <link rel="stylesheet" type="text/css" href="/css/Customer/customer-grid.css" />
    <script type="text/javascript" src="/js/Customer/nav-fixed.js"></script>
    <link rel="stylesheet" type="text/css" href="/css/Customer/market/prod.css" />
    <script type="text/javascript" src="/js/Customer/transition.js"></script>
    <script src="https://kit.fontawesome.com/6cdc06033e.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>

    <!---Navigation bar-------------------------------------------->
    <div class="container">
        <?php
                if (isset($this->UImsg) and !empty($this->UImsg)) {

                    while ($row = $this->UImsg->fetch_assoc()) {
                        $images = explode(',', $row['images']);
                        
                ?>
        <!-- Container content  --------------------------------------------->
        <!-- Image container --------------------------------------------->

        <div class="row margint50">
            <div class="col6">

                <div class="col12 holder center">
                    <?php for($i=0; $i<count($images); $i++){

                        echo " <img class=\"images\" src=\"/images/upload/$images[$i]\" style=\"width:100%\"> " ;
                        

                    }?>
                    <!-- <img class="images" src="/images/upload/<?php echo $images[$i] ?>" style="width:100%">
                    
                    <img class="images" src="/images/upload/<?php echo $images[1] ?>" style="width:100%"> -->
                    <div class="margint20">
                        <button class="" onclick="increment(-1)">&nbsp;&#10094;&nbsp;</button>
                        <button class="" onclick="increment(1)">&nbsp;&#10095;&nbsp;</button>
                    </div>
                </div>



            </div>
            <!-- Prod Details --------------------------------------------->
            <div class="col6">
                <div class="row">
                    <div class="col12 hrCustom">

                        <h1><?php echo $row['prodName'];?></h1>
                        <hr style="width:60%" />
                    </div>
                </div>


                <div class="col12">
                    <div class="col6 quantity center">
                        <div class="margint50">
                            <label for="price"><i class="fa fa-dollar-sign"></i> &nbsp;Price</label><br>
                            <input style="width: 60%;" type="number" id="price" name="price"
                                value="<?php echo $row['price']?>.00" readonly> <br>
                        </div>
                        <p id="test" class="center">Price without Delivery Charges</p>
                    </div>

                    <div class="col6 quantity center">
                        <form action="" method="POST">
                            <div class="margint50">
                                <label for="quantity"><i class="fa fa-truck-loading"></i>
                                    &nbsp;Quantity</label><br>
                                <input style="z-index: 1;" type="number" id="quantity" name="quantity" value="1">
                                <br>
                            </div>

                        </form>
                    </div>
                </div>
                <div class="col12">
                    <div class="row col11 hidden-xm-marginauto">
                        <h4>Description:</h4>
                        
                        <p> <?php echo $row['description'] ?></p>
                    </div>
                </div>
                <div class="col12 nav-bar center">
                    <button onclick="location.href='../User/shoppingCart'">Add to cart </button>
                    <button onclick="location.href='../Buyer/Delivery'">Delivery Charges </button>
                </div>
            </div>

        </div>
        <?php 
                            }
                        }
            ?>

        <!-- SIMILER PRODUCTS-------------------------------------------->


        <div class="row">

            <div class="col12">
                <div class="margint50 marginr100 marginl100 marginb50">
                    <h3>Products you may like ...</h3>
                    <hr>
                </div>
            </div>
        </div>
        <div class="row center img-margintop">
            <!-- SIMILER PRODUCTS-loop------------------------------------------->
            
            <div class="col4 imgw">
                <div class="center imgbox marginb100 ">
                    <img src="/images/products/nike-shoe.png"><br><br>
                    <label name="pht1"> Nike-300s Rs:3000.00</label>
                </div>

            </div class="marginb100">

            <div class="col4 imgw">
                <div class="center imgbox marginb100">
                    <img src="/images/Products/i-phone.png"><br><br>
                    <label name="pht2">IphoneXs Rs:80000.00</label>
                </div>
            </div>
            <div class="col4 imgw">
                <div class="center imgbox marginb100">
                    <img src="/images/Products/toy.png"><br><br>
                    <label name="pht3"> Old Car model Red Rs5000.00</label>
                </div>
            </div>
        </div>
        <!-- Feedback------------------------------------------->

        <div class="row">
            <div class="col12 pad">
                <h2>Reviews</h2>
            </div>
        </div>
        <!-- Feedback user account------------------------------------------->
        <?php
                if (isset($this->UIfeedbacks) and !empty($this->UIfeedbacks)) {
                    while ($row = $this->UIfeedbacks->fetch_assoc()) {
                        ?>
        <div class="row">

            <div class="col1 center">
                <div class="">
                    <i class="fas fa-user-astronaut fa-4x"></i>
                    <p><?php echo $row['userID'] ?></p>
                </div>
            </div>
            <!-- Feedback textarea------------------------------------------->
            <div class="col10">
                <div class="">
                    <textarea readonly class="row" rows="3" name="comment-space"><?php echo $row['comment'] ?>
              </textarea><br>
                </div>
            </div>
             <!-- Feedback textarea-reply------------------------------------------>
             <?php if(!empty($row['reply']) ){ ?>

             <div class="col9 marginb50 right">
                <div class="marginb20 marginl100 right">
                    <textarea readonly class="row " rows="3" name="comment-space"><?php echo $row['reply'] ?>
              </textarea><br>
                </div>   
            </div>
            <div class="col1 right  hidden-sm">
                <div class="">
                    <i class="fas fa-store-alt fa-4x"></i>
                    
                </div>
            </div>

            <?php }?>
        </div>
        <?php
                    }
                }else{
                    echo "<p class=\"center font-heavy margint100 marginb100\"> No comments Posted ...  <p>";
                }
                ?>
        <!-- bottom-part-------------------------------------------->

    </div>
    <script>
    show(Index);
    </script>

</body>

</html>