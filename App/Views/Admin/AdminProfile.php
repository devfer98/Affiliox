<!DOCTYPE html>
<html>
<head>
	<title>Affiliox-AdminProfile</title>
	<link rel="shortcut icon" href="/images/Logo/logoOnly.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="/css/Customer/common.css" />
	<link rel="stylesheet" type="text/css" href="/css/Customer/customer-grid.css" />
	<link rel="stylesheet" type="text/css" href="/css/Admin/adminprofile.css">
    <script type="text/javascript" src="/js/Customer/nav-fixed.js"></script>
	<script src="https://kit.fontawesome.com/6cdc06033e.js" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
		<!---Body-------------------------------------------->
		<div class="container">

        <div class="row">
            <div class="row  marginb50 margint50">
                <h2 class="marginl100"><i class="fas fa-user"></i>&nbsp; &nbsp;Admin Profile Details</h2>
                <div class="col12">
                    <div class="hrCustom">
                        <hr />
                    </div>
                </div>
            </div>
            <div class="row">
                <?php  
                if(isset($this->UImsg) and !empty($this->UImsg)){
					
					while($row = $this->UImsg->fetch_assoc()){           
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
                    </tr>]
                    <tr>
                        <td id="td-1">Country:</td>
                        <td><?php echo $row['country'] ?></td>
                    </tr>			
					<tr>
						<td id="td-1">Position:</td>
						<td><?php echo $row['position'] ?></td>
					</tr>

                </table>

                <?php
                     }
                }
                ?>
            </div>
            <div class="center margint20 marginb50">
       
                    <button onclick="location.href='../Admin/PasswordReset'" name="change-pw" >Change password</button>
                    <button  onclick="location.href='../Admin/EditAdmin'"  name="change-data" >Edit Details</button>

            </div>
        </div>
    </div>

  </body>
  
  </html>