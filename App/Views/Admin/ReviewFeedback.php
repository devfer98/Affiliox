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
            <div class="body">
              <table>
                <tr>
                  <th>Full Name</th>
                  <th>UserID</th>
                  <th>Email</th>
                  <th>Rating</th>
                </tr>
                <?php 
                  if(isset($this->actPromoters) and !empty($this->actPromoters) and $this->actPromoters->num_rows>0){
                    while($row = $this->actPromoters->fetch_assoc()){   
                      // echo "<tr><td><a href='../Admin/ActPromoter?id=".$row['userID']."' style='text-decoration:None; color:black;'>".$row['userID']."</a></td>"; 
                      echo "<tr><td><a href='../Admin/ActPromoter?id=".$row['userID']."' style='color:green;'>".$row['userID']."</a></td>"; 
                      echo "<td>".$row['name']."</td>"; 
                      echo "<td>".$row['email']."</td>"; 
                      echo "<td>".$row['rating']."</td>";
                    }	
                  }else{
                    echo "<tr><td colspan='6'>No Seller Feedbacks</td></tr>";
                  }  
                ?>
              </table>
            </div>	
          </div>
         
          <div id="PromoterFeedback" class="tabcontent">
            <div class="body">
              <table>
                <tr>
                  <th>Full Name</th>
                  <th>UserID</th>
                  <th>Email</th>
                  <th>Rating</th>
                </tr>
                <?php 
                  if(isset($this->actPromoters) and !empty($this->actPromoters) and $this->actPromoters->num_rows>0){
                    while($row = $this->actPromoters->fetch_assoc()){   
                      // echo "<tr><td><a href='../Admin/ActPromoter?id=".$row['userID']."' style='text-decoration:None; color:black;'>".$row['userID']."</a></td>"; 
                      echo "<tr><td><a href='../Admin/ActPromoter?id=".$row['userID']."' style='color:green;'>".$row['userID']."</a></td>"; 
                      echo "<td>".$row['name']."</td>"; 
                      echo "<td>".$row['email']."</td>"; 
                      echo "<td>".$row['rating']."</td>";
                    }	
                  }else{
                    echo "<tr><td colspan='6'>No Promoter Feedbacks</td></tr>";
                  }  
                ?>
              </table>
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