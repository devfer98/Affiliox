<html>

<head>
  <title>Affiliox-Completed-Orders</title>
	<link rel="shortcut icon" href="/images/Logo/logoOnly.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="/css/Customer/common.css" />
    <link rel="stylesheet" type="text/css" href="/css/Customer/customer-grid.css" />
    <script type="text/javascript" src="/js/Customer/nav-fixed.js"></script>
  <script src="https://kit.fontawesome.com/6cdc06033e.js" crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
<!-- navigation bar--------------------------------------------->

<!-- Container content  --------------------------------------------->


  <div class="container">
    <div class="row">
            <div class="margint100 marginb50 center">
              <h2>Start a Conversation with the Seller</h2>
            </div>
    </div>
            <?php if(isset($this->UImsgNotice) and !empty($this->UImsgNotice)){
                        if($this->State==1) {

                           ?><div class="center  marginb100 margint100 errorMsgSuccess"><?php
                           
                        }else{
                          ?><div class="center  margint100 marginb100 errorMsgFailed"> <?php
                        }                 
                  }  ?>
                    <p><?php if(isset($this->UImsgNotice) and !empty($this->UImsgNotice)){echo $this->UImsgNotice;}  ?></p>
                </div>



  <?php  
                if (isset($this->order) and !empty($this->order)) {
                    while ($row = $this->order->fetch_assoc()) {
                        ?>
    
    <div class="row center">

        <div class="col12">


         <!-- Loop area --------------------------------------------->
         
          
          <div class="row" >
            <div clas="sm-width center">
              <div class="boxsummery shoppingBlock marginb100 margint20 center  ">
                <div class="row" >
            <div class="col3 imgw">
            <img class="images" src="/images/upload/<?php echo $row['imageCode'] ?>" style="width:100%">
            </div>

            <div class="col4">
              <div class="margint20 left">
              <h3><?php echo $row['prodName'] ?></h3>
              <p>Price:Rs <?php echo number_format($row['price'],2) ?></p>
              </div>
            </div>

            <div class="col2 search label">
              <div class="margint20">
              <label for="quantity"><i class="fa fa-truck-loading"></i>&nbsp;Quantity</label>
              <input style="z-index: 1;" type="number" id="quantity" name="quantity"   value="<?php echo $row['quantity'] ?>" readonly placeholder="1"> <br>
            </div>
            </div>

            <div class="col3">
            <h4>Order Code :<?php echo $row['orderID'] ?></h4>
              <h4>Seller Store :<?php echo $row['name'] ?>
            </div>
              </div>

              <form method = "POST" action = "../Buyer/ContactSeller">      
              <div class="row rowMargin label search">
                <div class="col12">
                  <div class="margint20">
                    <label for="message"><i class="fas fa-envelope-square"></i>&nbsp;Type Your message here</label><br>
                    <br>
                    <textarea rows = "7" cols = "55" name = "description"  pattern="^[a-zA-Z0-9,-.'()/ ]*$" placeholder="...."></textarea><br>
                    <p class="font-heavy"> Seller will respond to your request via the provided email</p>
                  </div>
                </div>
              </div>

              <div class="row rowMargin marginb100 search">
                <div class="col12 center">
                  <div class=>
                  <input type="text" name ="ProdID" value ="<?php echo $row['productID'] ?> " hidden>
                  <input type="text" name ="OrderID" value ="<?php echo $row['orderID'] ?>" hidden>
                  <input type="number" name ="quantity" value ="<?php echo $row['quantity'] ?>" hidden>
                  <input type="text" name ="storename" value ="<?php echo $row['name'] ?>" hidden>
                   <input type="text" name ="prodName" value ="<?php echo $row['prodName'] ?>" hidden>  
                  <button type="submit" value="submit">Send Message</button>

                  </div>
                </div>
              </div>
              </form>
            </div>

          </div>
        </div>
        <!-- Loop area --------------------------------------------->


        </div>

        </div>

        <?php
              }
          }?>

    </div>  

<!-- Bottom Part   --------------------------------------------->
  </div>
</body>

</html>