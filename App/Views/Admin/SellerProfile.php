  
<html>

<head>
    <title>Affiliox-account-profile</title>
    <link rel="shortcut icon" href="/images/Logo/logoOnly.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="/css/Customer/common.css" />
    <link rel="stylesheet" type="text/css" href="/css/Customer/customer-grid.css" />
    <script type="text/javascript" src="/js/Customer/nav-fixed.js"></script>
    <script src="https://kit.fontawesome.com/6cdc06033e.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <!---Navigation bar-------------------------------------------->

    <!---Content -------------------------------------------->
    <div class="container">


        <div class="row">
            <div class="row  marginb50 margint50">
                <h2 class="marginl100"><i class="fas fa-user"></i>&nbsp; &nbsp;Profile Details</h2>
                <div class="col12">
                    <div class="hrCustom">
                        <hr />
                    </div>
                </div>
            </div>
            <div class="errorMsg">


                <!-- if(isset($this->UImsg) and !empty($this->UImsg)){
					
					while($row = $this->UImsg->fetch_assoc()){   
                      echo  $row['userID'];  
                      
					}
					}   -->

            </div>
            <div class="row">
                <?php  
                if(isset($this->sellDetails) and !empty($this->sellDetails) and $this->sellDetails->num_rows >0){
					
					while($row = $this->sellDetails->fetch_assoc()){           
            ?>
                <table class="profileTable">
                    <tr>
                        <td id="td-1">Your Name:</td>
                        <td><?php echo $row['name'] ?> </td>
                    </tr>
                    <tr>
                        <td id="td-1">Username:</td>
                        <td><?php echo $row['userID'] ?> </td>
                    </tr>
                    <tr>
                        <td id="td-1">Password:</td>
                        <td> ********** </td>
                    </tr>
                    <tr>
                        <td id="td-1">Date of Birth:</td>
                        <td><?php echo $row['dob'] ?> </td>
                    </tr>
                    <tr>
                        <td id="td-1">Gender:</td>
                        <td><?php echo $row['gender'] ?> </td>
                    </tr>
                    <tr>
                        <td id="td-1">Email:</td>
                        <td><?php echo $row['email'] ?> </td>
                    </tr>
                    <tr>
                        <td id="td-1">Mobile Number:</td>
                        <td><?php echo $row['phoneNo'] ?> </td>
                    </tr>
                    <tr>
                        <td id="td-1">Marital Status:</td>
                        <td><?php echo $row['status'] ?></td>
                    </tr>
                    <tr>
                        <td id="td-1" >Address:</td>
                        <td><?php echo $row['aLine1'] ;echo $row['aLine2']; echo $row['city'] ?> </td>
                    </tr>
                    <tr>
                        <td id="td-1">Country:</td>
                        <td><?php echo $row['country'] ?></td>
                    </tr>
                </table>

                <?php
                     }
                }else{
                    echo ' <table class="profileTable">
                    <tr>
                        <td id="td-1">User Invalid</td>
                    </tr>
                    </table>'; 
                }
                ?>
            </div>
            <div class="center margint20 marginb50">
       
                    <!-- <button onclick="location.href='../Buyer/PasswordReset'" name="change-pw" >Change password</button> -->
                    <button  onclick="location.href='../Admin/ApproveReg'"  name="change-data" >Back</button>
            </div>
        </div>
    </div>

    <!---Bottom part-------------------------------------------->
</body>

</html>