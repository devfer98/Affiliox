<!DOCTYPE html>
<html>
<head>
	<title>Affiliox-ManageAccounts</title>
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


    <!-- Container content  --------------------------------------------->
   
    <div class="row center">

        <div class=" ">
          <div class=" row margint50 marginb50 ">
            <div class="left">
            <h2 ><i class='fas fa-user-cog'></i>&nbsp;Manage Accounts</h2>
            <div class="row">

              <div class="col12 hrCustom lm-half-width">
                <hr />
              </div>
            </div>
          </div>
          </div>
         <!-- content area --------------------------------------------->
         <div class="tab marginb50 ">
          <button class="tablinks button1 active" de onclick="openPage(event,'SellerAcc')" id="defaultOpen">Seller Accounts</button>
          <button class="tablinks button1" onclick="openPage(event,'PromoterAcc')">Promoter Accounts</button>
		      <button class="tablinks button1" onclick="openPage(event,'BannedUserAcc')">Banned User Accounts</button>

          <div id="SellerAcc" class="tabcontent" style="display: block;">
            <div class="body">
            <table>
                <tr>
                  <th>Username</th>
                  <th>Fullname</th>
                  <th>warning Count</th>
                  <th>Action</th>
                </tr>
                <?php 
                  if(isset($this->actSellers) and !empty($this->actSellers) and $this->actSellers->num_rows>0){
                    while($row = $this->actSellers->fetch_assoc()){   
                      // echo "<tr><td><a href='../Admin/ActSeller?id=".$row['userID']."' style='text-decoration:None; color:black;'>".$row['userID']."</a></td>"; 
                      echo "<tr><td><a href='../Admin/ActSeller?id=".$row['userID']."' style='color:green;'>".$row['userID']."</a></td>"; 
                      echo "<td>".$row['name']."</td>"; 
                      echo "<td>".$row['warningCount']."</td>"; 
                      echo "<form method='post' action ='../Admin/BanSellStatus'>";
                      echo "<input type='hidden' name='username' value='".$row['userID']."' />";
                      echo "<td><button name='status' type='submit' value='2' class='button button2'>Ban</button></td></form>";
                    }	
                  }else{
                    echo "<tr><td colspan='6'>No Active Sellers</td></tr>";
                  }  
                ?>
              </table>
            </div>	
          </div>
         
          <div id="PromoterAcc" class="tabcontent">
          <div class="body">
          <table>
                <tr>
                  <th>Username</th>
                  <th>Fullname</th>
                  <th>warning Count</th>
                  <th>Action</th>
                </tr>
                <?php 
                  if(isset($this->actPromoters) and !empty($this->actPromoters) and $this->actPromoters->num_rows>0){
                    while($row = $this->actPromoters->fetch_assoc()){   
                      // echo "<tr><td><a href='../Admin/ActPromoter?id=".$row['userID']."' style='text-decoration:None; color:black;'>".$row['userID']."</a></td>"; 
                      echo "<tr><td><a href='../Admin/ActPromoter?id=".$row['userID']."' style='color:green;'>".$row['userID']."</a></td>"; 
                      echo "<td>".$row['name']."</td>"; 
                      echo "<td>".$row['warningCount']."</td>"; 
                      echo "<form method='post' action ='../Admin/BanProStatus'>";
                      echo "<input type='hidden' name='username' value='".$row['userID']."' />";
                      echo "<td><button name='status' type='submit' value='2' class='button button2'>Ban</button></td></form>";
                    }	
                  }else{
                    echo "<tr><td colspan='6'>No Active Promoters</td></tr>";
                  }  
                ?>
              </table>
            </div>	
          </div>
         
          <div id="BannedUserAcc" class="tabcontent" style="display: block;">
            <div class="body">
            <table>
                <tr>
                  <th>Username</th>
                  <th>Fullname</th>
                  <th>warning Count</th>
                  <th>Action</th>
                </tr>
                <?php 
                  if(isset($this->actSellers) and !empty($this->actSellers) and $this->actSellers->num_rows>0){
                    while($row = $this->actSellers->fetch_assoc()){   
                      // echo "<tr><td><a href='../Admin/ActSeller?id=".$row['userID']."' style='text-decoration:None; color:black;'>".$row['userID']."</a></td>"; 
                      echo "<tr><td><a href='../Admin/ActSeller?id=".$row['userID']."' style='color:green;'>".$row['userID']."</a></td>"; 
                      echo "<td>".$row['name']."</td>"; 
                      echo "<td>".$row['warningCount']."</td>"; 
                      echo "<form method='post' action ='../Admin/BanSellStatus'>";
                      echo "<input type='hidden' name='username' value='".$row['userID']."' />";
                      echo "<td><button name='status' type='submit' value='2' class='button button2'>Ban</button></td></form>";
                    }	
                  }else{
                    echo "<tr><td colspan='6'>No Active Sellers</td></tr>";
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