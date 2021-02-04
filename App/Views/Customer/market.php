<html>

<head>
    <title>Affiliox-market</title>
</head>

<body>
    <!---Navigation bar-------------------------------------------->

    <!-- Container content  --------------------------------------------->
    <div class="container">
        <div class="row center">
            <div class="col12 ">
                <div class=" row margint50 marginb50 ">
                    <div class="left">
                    <?php if(!empty($_GET['search'])){
                                 $val=$_GET['search'];
                                 echo "<h2><i class=\"fas fa-product fa\"></i>&nbsp;Search Result :$val  </h2> ";
                             }else{
                                 echo " <h2><i class=\"fas fa-product fa\"></i>&nbsp;Search Products</h2>";                        
                            }
                             ?>
                            <div class="row">
                                <div class="col12 hrCustom lm-half-width">
                                    <hr />
                                </div>
                            </div>
                    </div>
                </div>
                <div class="row nav-bar">
                <form method="GET" action="../user/market">
                    <div class="col8 search fitcontent center">
                        <ul>
                            <input type="text" name="search" pattern="^[a-zA-Z0-9 ]*$" placeholder="Clothing , Phones , Toys"
                            <?php if(!empty($_GET['search'])){
                                $val=$_GET['search'];
                                 echo " value =\"$val\" ";
                             }else{
                                 
                             }?> />
                            <button value="submit" type="submit"><i class="fas fa-search"></i>&nbsp; Search </button>
                        </ul>
                    </div>
                    <div>
                        <?php if(!empty($_GET['cat'])){
                            $val=$_GET['cat'];
                            echo " <input type=\"hidden\" name=\"cat\" value=$val ></input>";
                        }?>
                    </div>
                </form>
                    <div class="col4 hidden-sm">
                        <div class="margint20">

                            <div class="col1 search fitcontent " onclick="openNav2()"><i class="icon fas fa-filter"></i>
                            </div>
                            <div class="col1 search fitcontent "><i class="icon fas fa-sort-amount-down-alt"></i></div>
                            <div class="col1 search fitcontent "><i class="icon fas fa-sort-amount-up-alt"></i></div>
                        </div>
                    </div>

                    <div class="row hidden-xm  ">
                        <div class="center lm-half-width">
                            <div class="margint20  icon-flo search center">
                                <div class=" search fitcontent center" onclick="openNav2()"><i class="icon fas fa-filter"></i>
                                </div>
                                <div class=" search fitcontent "><i class="icon fas fa-sort-amount-down-alt"></i></div>
                                <div class=" search fitcontent "><i class="icon fas fa-sort-amount-up-alt"></i></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Loop area --------------------------------------------->
                <?php
                if (isset($this->UImsg) and !empty($this->UImsg)) {

                    while ($row = $this->UImsg->fetch_assoc()) {
                        $images = explode(',', $row['images']);
                       
                        $text=$row['description'];
                        if (str_word_count($text, 0) > 20) {
                            $words = str_word_count($text,2);
                            $pos   = array_keys($words);
                            $text  = substr($text, 0, $pos[20]) . '.....';
                        }

                ?>

                        <div class="row">
                            <div clas="sm-width center">
                                <div class="boxsummery shoppingBlock marginb20 margint20 center ">
                                    <div class="col3 imgw">

                                        <img class="images" src="/images/upload/<?php echo $images[0] ?>" style="width:100%">
                                    </div>

                                    <div class="col6">
                                        <div class="margint20 left">
                                            <h3><?php echo $row['prodName'] ?></h3>

                                            <p><?php echo $text ?></p> <br><br>

                                            <h4>Rs. <?php echo $row['price'] ?>/=</h4>
                                        </div>
                                    </div>
                                    <div class="col3">
                                        <div class="">
                                            <div class="col12 nav-bar center">
                                                <button onclick="location.href='../Product/view?id=<?php echo $row['productID']?>'">&nbsp;&nbsp; Buy Product
                                                    &nbsp;&nbsp;</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                }else{
                    echo "<p class=\"center font-heavy margint100 marginb100\" >No products Found , Please use a diffrent keyword<p>" ;
                } ?>
            </div>
        </div>
        <!-- bottom-part-------------------------------------------->


        <div id="mySidenav2" class="sidenav-fil drp-btn">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav2()">&times;</a>
            <button class="dropdown-btn">Clothing
                <!-- <i class="fa fa-caret-down"></i> -->
            </button>
            
            <form method ="GET" action =../user/market >
            <?php if(!empty($_GET['search'])){
                            $val=$_GET['search'];
                            echo " <input type=\"hidden\" name=\"search\" value=$val ></input>";
                        }?>
            <div class="dropdown-container">
                <button value=1 name=cat type=submit>Mens </button>  
                <button value=3 name=cat type=submit>Wemen </button>  
            </div>
            <button class="dropdown-btn">Electrical
                <!-- <i class="fa fa-caret-down"></i> -->
            </button>
            <div class="dropdown-container">
            <button value=3 name=cat type=submit>Phones </button>  
            <button value=4 name=cat type=submit>Headsets </button>  
            <button value=5 name=cat type=submit>Speakers </button>  
            <button value=6 name=cat type=submit>Accessories </button>  

            </div>
            <button class="dropdown-btn">Travel
                <!-- <i class="fa fa-caret-down"></i> -->
            </button>
            <div class="dropdown-container">
            <button value=3 name=cat type=submit>Phones </button> 
            <button value=8 name=cat type=submit>Go-pro </button> 
            <button value=9 name=cat type=submit>Tents </button> 

            </div>
            <button class="dropdown-btn">Kids
                <!-- <i class="fa fa-caret-down"></i> -->
            </button>
            <div class="dropdown-container">
            <button value=10 name=cat type=submit>Drones </button> 
            <button value=11 name=cat type=submit>RC Toys </button> 

            </div>

            <button class="dropdown-btn">Home Appliance
                <!-- <i class="fa fa-caret-down"></i> -->
            </button>
            <div class="dropdown-container">
            <button value=12 name=cat type=submit>>Blenders </button> 
            <button value=13 name=cat type=submit>Ovens </button> 
            <button value=14 name=cat type=submit>Fans</button> 

            </div>
            </form>
            <form method="GET" action ="../user/market">
            <?php if(!empty($_GET['search']) ){
                            $val=$_GET['search'];
                            echo " <input type=\"hidden\" name=\"search\" value=$val ></input>";
                        }
                  if (!empty($_GET['cat'])) {
                            $val=$_GET['cat'];
                            echo " <input type=\"hidden\" name=\"cat\" value=$val ></input>";
                 } 
                        ?>
            <div>
                <button class="dropdown-btn">Price
                </button>
                <label class="dropdown-price">
                    <input type="radio" checked="checked"  value =1000.00 name="price">&nbsp; Rs :upto 1000

                </label>
                <label class="dropdown-price">
                    <input type="radio" checked="checked" value =5000.00 name="price">&nbsp; Rs : upto 5000

                </label>
                <label class="dropdown-price">
                    <input type="radio" checked="checked" value =10000.00 name="price">&nbsp; Rs : upto 10000

                </label>
                <label class="dropdown-price">
                    <input type="radio" checked="checked"  value=10000.00 name="price">&nbsp; Rs : upto 100000

                </label>

            </div>

            <div class="margint20 marginb100">
                <button type="submit">Filter with price </button>
                <button type="reset" value="reset">Reset Filter</button>
            </div>
           </form>
        </div>

        <span onclick="openNav2()"></span>


    </div>

</body>

</html>