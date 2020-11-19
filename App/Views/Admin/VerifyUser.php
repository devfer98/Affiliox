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

  <?php echo $_SESSION["type"] ?>
    <!-- Container content  --------------------------------------------->
   
    <div class="row center">

        <div class=" ">
          <div class=" row margint50 marginb50 ">
            <div class="left">
            <h2 ><i class='fas fa-star'></i>&nbsp;Verify Users</h2>
            <div class="row">

              <div class="col12 hrCustom lm-half-width">
                <hr />
              </div>
            </div>
          </div>
          </div>
         <!-- content area --------------------------------------------->
         <div class="tab">
          <button class="tablinks button1" de onclick="openPage(event,'SellerReg')" id="defaultOpen">Seller Pending Approvals</button>
          <button class="tablinks button1" onclick="openPage(event,'PromoterReg')">Promoter Pending Approvals</button>
         
          <div id="SellerReg" class="tabcontent">
            <div class="body">
              <table>
                <tr>
                  <th>Username</th>
                  <th>UserID</th>
                  <th>Email</th>
                  <th colspan="2">Action</th>
                </tr>
                <tr>
                  <td>Peter</td>
                  <td>seller1</td>
                  <td>peter@gmail.com</td>
                  <td><button class="button button1">Approve</button></td>
                  <td><button class="button button2">Deny</button></td>
                </tr>
                <tr>
                  <td>Griffin</td>
                  <td>seller2</td>
                  <td>griffin@gmail.com</td>
                  <td><button class="button button1">Approve</button></td>
                  <td><button class="button button2">Deny</button></td>
                </tr>
                <tr>
                  <td>Lily</td>
                  <td>seller3</td>
                  <td>lily@gmail.com</td>
                  <td><button class="button button1">Approve</button></td>
                  <td><button class="button button2">Deny</button></td>
                </tr>
                <tr>
                  <td>John</td>
                  <td>seller4</td>
                  <td>john@gmail.com</td>
                  <td><button class="button button1">Approve</button></td>
                  <td><button class="button button2">Deny</button></td>
                </tr>
              </table>
            </div>	
          </div>
         
          <div id="PromoterReg" class="tabcontent">
            <div class="body">
              <table>
                <tr>
                  <th>Full Name</th>
                  <th>UserID</th>
                  <th>Email</th>
                  <th colspan="2">Action</th>
                </tr>
                <tr>
                  <td>Michel</td>
                  <td>promoter1</td>
                  <td>michel@gmail.com</td>
                  <td><button class="button button1">Approve</button></td>
                  <td><button class="button button2">Deny</button></td>
                </tr>
                <tr>
                  <td>Joe</td>
                  <td>promoter2</td>
                  <td>joe@gmail.com</td>
                  <td><button class="button button1">Approve</button></td>
                  <td><button class="button button2">Deny</button></td>
                </tr>
                <tr>
                  <td>Liza</td>
                  <td>promoter3</td>
                  <td>liza@gmail.com</td>
                  <td><button class="button button1">Approve</button></td>
                  <td><button class="button button2">Deny</button></td>
                </tr>
                <tr>
                  <td>Jhon</td>
                  <td>promoter4</td>
                  <td>jhon@gmail.com</td>
                  <td><button class="button button1">Approve</button></td>
                  <td><button class="button button2">Deny</button></td>
                </tr>
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