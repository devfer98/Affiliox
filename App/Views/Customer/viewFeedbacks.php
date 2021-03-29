<html>

<head>
    <title>Affiliox-View-Feedbacks</title>
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
            <div class="">
                <div class=" row margint50 marginb50 ">
                    <div class="left">
                        <h2><i class="fas fa-clock fa"></i>&nbsp;Previous Feedbacks</h2>
                        <div class="row">

                            <div class="col12 hrCustom lm-half-width">
                                <hr />
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Loop area --------------------------------------------->
                <?php  
                
                if(isset($this->data) and !empty($this->data)){
					
                    while ($row = $this->data->fetch_assoc()) {
                        
                        ?>
                <div class="row center ">
                    <div clas="center">
                        <div class="boxsummery shoppingBlock marginb20 margint20 center">

                        <div class="col2 imgw">
                            <img class="images" src="/images/upload/<?php echo $row['imageCode'] ?>" style="width:100%">
                        </div>
                            <div class="col3">
                                <div class="margint20 left">
                                    
                                    <h4><?php echo $row['prodName'] ?></h4>
                                    <p> Price   : Rs.<?php  echo $row['price'] ?></p>
                                    <p> Seller Name :<?php  echo $row['name'] ?></p>
                                    <p> Rating  :<?php  echo $row['rating'] ?></p>
                                </div>
                            </div>
                            <div class="col7">
                                <div class="margint20 center width80">
                                    <div class="width90">
                                        <textarea readonly class="row" rows="5"
                                            name="comment-space"><?php  if(empty($row['comment'])){ echo "Feedback message not given"; } else echo $row['comment'] ?></textarea><br>
                                    </div>
                                </div>
                                <div><?php if(empty($row['reply'])){} else { ?> 
                                    <div class="margint20 marginl20 center width90">
                                        <div class="width70">
                                            <textarea readonly class="row" rows="3"
                                                name="comment-space2"> <?php  echo 'Seller Reply : '. $row['reply'] ?></textarea><br>
                                        </div>
                                    </div>
                                     <?php }  ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <?php
                    }
                    
            }?>

    </div>

    <!-- bottom-part-------------------------------------------->
</body>

</html>