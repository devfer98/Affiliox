<html>

<head>
  <title>Affiliox-ReviewFeedbacks</title>
	<link rel="shortcut icon" href="/images/Logo/logoOnly.png" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="/css/Customer/common.css" />
  <link rel="stylesheet" type="text/css" href="/css/Customer/customer-grid.css" />
  <script type="text/javascript" src="/js/Customer/nav-fixed.js"></script>
  <link rel="stylesheet" type="text/css" href="/css/Admin/verify.css" />
  <link rel="stylesheet" type="text/css" href="/css/Admin/manage.css">
  <script type="text/javascript" src="/js/Admin/manage.js"></script>
  <script type="text/javascript" src="/js/Common/Signin.js"></script>
  <script src="https://kit.fontawesome.com/6cdc06033e.js" crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
  <!---Navigation bar-------------------------------------------->
  <div class="container">

        <div class="row ">
          <div class=" row margint50 marginb50 ">
            <h2 class="marginl100"><i class='fas fa-star'></i>&nbsp;&nbsp;Review Feedbacks</h2>
            <div class="row">
                <div class="hrCustom">
                      <hr />
                </div>
            </div>
          </div>
          </div>
         <!-- content area --------------------------------------------->
         <div class="tab">
          <button class="tablinks button1 active" de onclick="openPage(event,'SellerFeedback')" id="defaultOpen">Seller Feedbacks</button>
          <button class="tablinks button1" onclick="openPage(event,'PromoterFeedback')">Promoter Feedbacks</button>
         
          <div id="SellerFeedback" class="tabcontent" style="display: block;">
          <div class="container">

<!-- Container content  --------------------------------------------->

    <div class="row">
        <div class=" row margint50 marginb50 ">
                <h3 class="marginl100"><i class="fas fa-comments"></i>&nbsp;Seller Feedbacks</h3>
                <div class="row">
                  <div class="hrCustom">
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
          </div>
         
          <div id="PromoterFeedback" class="tabcontent">
          <div class="row">
        <div class=" row margint50 marginb50 ">
                <h3 class="marginl100"><i class="fas fa-comments"></i>&nbsp;Promoter Feedbacks</h3>
                <div class="row">
                  <div class="hrCustom">
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
          </div>
          <!-- <div id="PromoterFeedback" class="tabcontent">
            <div class="body">
              <table>
                <tr>
                  <th>Full Name</th>
                  <th>UserID</th>
                  <th>Email</th>
                  <th>Date Created</th>
                  <th>Action</th>
                </tr>
                <tr>
                  <td>Michel</td>
                  <td>promoter1</td>
                  <td>michel@gmail.com</td>
                  <td>8th August 2020</td>
                  <td><button>View Feedback</button></td>
                </tr>
                <tr>
                  <td>Joe</td>
                  <td>promoter2</td>
                  <td>joe@gmail.com</td>
                  <td>10th September 2020</td>
                  <td><button>View Feedback</button></td>
                </tr>
                <tr>
                  <td>Liza</td>
                  <td>promoter3</td>
                  <td>liza@gmail.com</td>
                  <td>19th September 2020</td>
                  <td><button>View Feedback</button></td>
                </tr>
                <tr>
                  <td>Jhon</td>
                  <td>promoter4</td>
                  <td>jhon@gmail.com</td>
                  <td>10th OCtober 2020</td>
                  <td><button>View Feedback</button></td>
                </tr>
              </table>
            </div>
          </div> -->
         
         </div> 
        </div>
      </div>
  </div>
</body>

</html>