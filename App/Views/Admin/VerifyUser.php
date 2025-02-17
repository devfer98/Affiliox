<html>

<head>
  <title>Verify Users</title>
  <link rel="shortcut icon" href="/images/Logo/logoOnly.png" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="/css/Customer/common.css" />
  <link rel="stylesheet" type="text/css" href="/css/Customer/customer-grid.css" />
  <script type="text/javascript" src="/js/Customer/nav-fixed.js"></script>
  <link rel="stylesheet" type="text/css" href="/css/Admin/verify.css" />
  <link rel="stylesheet" type="text/css" href="/css/Admin/manage.css">
  <script type="text/javascript" src="/js/Admin/tab.js"></script>
  <script type="text/javascript" src="/js/Common/Signin.js"></script>
  <script src="https://kit.fontawesome.com/6cdc06033e.js" crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
  <!---Navigation bar-------------------------------------------->
  <div class="container">

  <!-- <?php echo $_SESSION["type"] ?> -->
    <!-- Container content  --------------------------------------------->
   
      <div class="row">
          <div class=" row margint50 marginb50 ">
            <h2 class="marginl100"><i class='fas fa-star'></i>&nbsp;&nbsp;Verify Users</h2>
            <div class="row">
                <div class="hrCustom">
                      <hr />
                </div>
            </div>
          </div>
      </div>
         <!-- content area --------------------------------------------->
         <div class="tab marginb50">
          <button class="tablinks button1 active" de onclick="openPage(event,'SellerReg')" id="defaultOpen">Seller Pending Approvals</button>
          <button class="tablinks button1" onclick="openPage(event,'PromoterReg')">Promoter Pending Approvals</button>
         
          <div id="SellerReg" class="tabcontent" style="display: block;">
            <div class="body">
              <table>
                <tr>
                  <th>Username</th>
                  <th>Email</th>
                  <th>City</th>
                  <th colspan="2">Action</th>
                </tr>
                <?php 
                  if(isset($this->pendSellers) and !empty($this->pendSellers) and $this->pendSellers->num_rows>0){
                    while($row = $this->pendSellers->fetch_assoc()){   
                      // echo "<tr><td><a href='../Admin/PendSeller?id=".$row['userID']."' style='text-decoration:None; color:black;'>".$row['userID']."</a></td>"; 
                      echo "<tr><td><a href='../Admin/PendSeller?id=".$row['userID']."' style='color:green;'>".$row['userID']."</a></td>"; 
                      echo "<td>".$row['email']."</td>"; 
                      echo "<td>".$row['city']."</td>"; 
                      echo "<form method='post' action ='../Admin/UpdateSellStatus'>";
                      echo "<input type='hidden' name='username' value='".$row['userID']."' />";
                      echo "<td><button name='status' type='submit' value='1' class='button button1'>Approve</button></td>";
                      echo "<td><button name='status' type='submit' value='2' class='button button2'>Deny</button></td></form>";
                      // echo "<td><button onclick='location.href='../Admin/PendSeller?id=".$row['userID']."'' class='button button1'>View</button></td></tr>";
                      // echo "<td><button onclick='location.href='../Admin/PendSeller?id=abcdeeewqq'' class='button button1'>View</button></td></tr>";
                    }	
                  }else{
                    echo "<tr><td colspan='6'>No Pending Sellers</td></tr>";
                  }  
                ?>
              </table>
            </div>	
          </div>
         
          <div id="PromoterReg" class="tabcontent">
            <div class="body">
              <table>
                <tr>
                  <th>Username</th>
                  <th>Email</th>
                  <th>City</th>
                  <th colspan="2">Action</th>
                </tr>
                <?php 
                  if(isset($this->pendPromoters) and !empty($this->pendPromoters) and $this->pendPromoters->num_rows>0){
                    while($row = $this->pendPromoters->fetch_assoc()){   
                      echo "<tr><td><a href='../Admin/PendPromoter?id=".$row['userID']."' style='color:green;'>".$row['userID']."</a></td>"; 
                      echo "<td>".$row['email']."</td>"; 
                      echo "<td>".$row['city']."</td>"; 
                      echo "<form method='post' action ='../Admin/UpdateProStatus'>";
                      echo "<input type='hidden' name='username' value='".$row['userID']."' />";
                      echo "<td><button name='status' type='submit' value='1' class='button button1'>Approve</button></td>";
                      echo "<td><button name='status' type='submit' value='2' class='button button2'>Deny</button></td></form>";
                      // echo "<td><button onclick='location.href='../Admin/PendPromoter?id=".$row['userID']."'' class='button button1'>View</button></td></tr>";
                      // echo "<td><button onclick='location.href='../Admin/PendSeller?id=abcdeeewqq'' class='button button1'>View</button></td></tr>";
                    }	
                  }else{
                    echo "<tr><td colspan='6'>No Pending Promoters</td></tr>";
                  }  
                ?>
              </table>
            </div>
          </div>
         
         </div> 
        </div>
      </div>


  </div>
  <!--Container------------------------------------------>
</body>

</html>