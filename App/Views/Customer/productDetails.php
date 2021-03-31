<html>

<head>
    <title>Affiliox-Product</title>
    <link rel="shortcut icon" href="/images/Logo/logoOnly.png" type="image/x-icon">
    <!-- <link rel="stylesheet" type="text/css" href="/css/Customer/common.css" />
    <link rel="stylesheet" type="text/css" href="/css/Customer/customer-grid.css" /> -->
    <script type="text/javascript" src="/js/Customer/nav-fixed.js"></script>
    <link rel="stylesheet" type="text/css" href="/css/Customer/market/prod.css" />
    <script type="text/javascript" src="/js/Customer/transition.js"></script>
    <!-- <script src="https://kit.fontawesome.com/6cdc06033e.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
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
                <!-- <form method ="POST" action="../user/ADDShoppingCart">                  -->
                <div class="row margint50">
                    <div class="col6">

                        <div class="col12 holder center">
                            <?php for ($i = 0; $i < count($images); $i++) {

                                echo " <img class=\"images\" src=\"/images/upload/$images[$i]\" style=\"width:100%\"> ";
                            } ?>
                            <!-- <img class="images" src="/images/upload/<?php echo $images[$i] ?>" style="width:100%">
                    
                    <img class="images" src="/images/upload/<?php echo $images[1] ?>" style="width:100%"> -->
                            <div class="margint20">
                                <button class="" onclick="increment(-1)">&nbsp;&#10094;&nbsp;</button>
                                <button class="" onclick="increment(1)">&nbsp;&#10095;&nbsp;</button>
                            </div>
                        </div>



                    </div>
                    <!-- <form method="POST" action="../user/ADDShoppingCart"> -->
                    <!-- Prod Details --------------------------------------------->
                    <div class="col6">
                        <div class="row">
                            <div class="col12 hrCustom">

                                <h1><?php echo $row['prodName']; ?></h1>
                                <hr style="width:60%" />
                            </div>
                        </div>


                        <div class="col12">
                            <div class="col6 quantity center">
                                <div class="margint50">
                                    <label for="price"><i class="fa fa-dollar-sign"></i> &nbsp;Price</label><br>
                                    <input style="width: 60%;" type="text" id="price" name="price" value="<?php echo $row['price'] ?>" readonly> <br>
                                </div>
                                <p id="test" class="center">Price without Delivery Charges</p>
                            </div>

                            <div class="col6 quantity center">
                                <form method="POST" action="../user/ADDShoppingCart">
                                    <div class="margint50">
                                        <label for="quantity"><i class="fa fa-truck-loading"></i>
                                            &nbsp;Quantity</label><br>
                                        <input style="z-index: 1;" type="number" id="quantity" min="1" max="50" name="quantity" value="1">
                                        <br>
                                    </div>
                                    <!-- </form> -->
                            </div>

                        </div>
                        <div class="col12">
                            <div class="row col11 hidden-xm-marginauto">
                                <h4>Description:</h4>
                                <div class="right marginb20" ><h4> Rating : <?php echo number_format($row['overallRating'] ,1)?>&nbsp; <i style ="color:gold"class="fas fa-star "></i></h4></div>

                                <p> <?php echo $row['description'] ?></p>
                            </div>
                        </div>
                        <input type="hidden" name="productID" value="<?php echo $row['productID'] ?>" readonly> <br>
                        <input type="hidden" name="frontimg" value="<?php echo $images[0] ?>" readonly> <br>
                        <input type="hidden" name="prodName" value="<?php echo $row['prodName'] ?>" readonly> <br>
                        <div class="col12 nav-bar center">
                            <div class="col12 nav-bar center">
                                <button value="submit" type="submit">Add to cart </button>
                                </form>
                                <button onclick="openNav3()"> View Delivery Charges </button>

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
             
                <?php while ($row = $this->UImsg0->fetch_assoc()) {
                    $images = explode(',', $row['images']); ?>

                    <div class="col4  relatedbox imgw ">
                        <a class="remove" href='../Product/view?id=<?php echo $row['productID'] ?>'>

                            <div class="center  imgbox marginb100 ">
                                <img src="/images/upload/<?php echo $images[0]; ?>"><br><br><br><br>
                                <label name="related-prod-name" class="font-heavy"><?php echo $row['prodName']; ?></label><br>
                                <label name="related-prod-price"> Rs<?php echo $row['price']; ?> </label>

                            </div>
                        </a>
                    </div>
                <?php } ?>
                <?php while ($row = $this->UImsg1->fetch_assoc()) {
                        $images = explode(',', $row['images']); ?>
                <div class="col4 relatedbox  imgw">
                        <a class="remove" href='../Product/view?id=<?php echo $row['productID'] ?>'>
                        <div class="center imgbox marginb100 ">
                            
                            <img src="/images/upload/<?php echo $images[0]; ?>"><br><br><br><br>
                            <label name="related-prod-name" class="font-heavy"><?php echo $row['prodName']; ?></label><br>
                            <label name="related-prod-price"> Rs<?php echo $row['price']; ?> </label>
                        </div>  
                        </a>                 
                </div>
                <?php } ?>
                <?php while ($row = $this->UImsg2->fetch_assoc()) {
                        $images = explode(',', $row['images']); ?>

                <div class="col4  relatedbox  imgw">
                         <a class="remove" href='../Product/view?id=<?php echo $row['productID'] ?>'>
                        <div class="center imgbox marginb100 ">
                            <img src="/images/upload/<?php echo $images[0]; ?>"><br><br><br><br>
                            <label name="related-prod-name" class="font-heavy"><?php echo $row['prodName']; ?></label><br>
                            <label name="related-prod-price"> Rs<?php echo $row['price']; ?> </label>
                        </div>
                          </a>
                </div>
                <?php } ?>
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
                        <?php if (!empty($row['reply'])) { ?>

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

                        <?php } ?>
                    </div>
            <?php
                }
            } else {
                echo "<p class=\"center font-heavy margint100 marginb100\"> No comments Posted ...  <p>";
            }
            ?>
            <!-- bottom-part-------------------------------------------->
     
        <div id="mySidenav2" class="sidenav-fil drp-btn">
            <a href="javascript:void(0)" class="closebtn " onclick="closeNav3()">&times;</a>
          <table class="deliverytable" >
            <tr>
            <th>Destination </th>
            <th>Delivery Time (Days)</th>
            <th>Price</th>
            </tr>
           <?php while ($row2 = $this->UImsg3->fetch_assoc()) {
               echo "<tr>";
               echo "<td>" . $row2['endDis'] . "</td>";
               echo "<td>" . $row2['dPeriod'] . " Days</td>";
               echo "<td>" . $row2['price'] . ".00</td>";
               echo "</tr>";

           } ?>

          </table>


        </div>

        <!-- <span onclick="openNav3()"></span> -->
        
                <script>
                    show(Index);
                </script>

</body>

</html>