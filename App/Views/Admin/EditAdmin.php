<html>

<head>
	<title>Affiliox-EditAdmin</title>
	<link rel="shortcut icon" href="/images/Logo/logoOnly.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="/css/Customer/common.css" />
    <link rel="stylesheet" type="text/css" href="/css/Customer/customer-grid.css" />
    <script type="text/javascript" src="/js/Customer/nav-fixed.js"></script>
    <script src="https://kit.fontawesome.com/6cdc06033e.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col12">
                <div class="margint50 marginb100 center ">
                    <h1>Edit Admin Details</h1>
                </div>
            </div>
        </div>
        <?php if (isset($this->UImsg) and !empty($this->UImsg)) {
                        if ($this->State == 1) {

                    ?><div class="center marginb100 margint100 errorMsgSuccess"><?php

                                } else {
                                      ?><div class="center marginb100 margint100 errorMsgFailed"> <?php
                                     }
                                ?> <p>  <?php  echo $this->UImsg ?>  </p></div>    

                              <?php   }  ?>
        </div>
        <!-----------------Admin-Profile Form------------------->
        <?php  
                if(isset($this->UImsg2) and !empty($this->UImsg2)){
					
					while($row = $this->UImsg2->fetch_assoc()){           
            ?>
        <form class="search label marginl100 sm-center" method= "POST" action ="../Admin/EditAdmin">
            <div class="row ">
                <div class="col12">
                    <div class=" marginl100">
                        <h2>Admin Details</h2>
                    </div>
                </div>
            </div>

            <div class="row rowMargin ">
                <div class="col12">
                    <div>
                        <label for="fname"><i class="fa fa-user"></i> &nbsp;Full Name</label><br>
                        <input type="text" id="fname" name="fullname" value="<?php echo $row['name'] ?>" placeholder="Kamal sachintha"> <br>
                    </div>
                </div>
            </div>

            <div class="row rowMargin">
                <div class="col6">
                    <div>
                        <label for="lname"><i class="fa fa-mail-bulk"></i>&nbsp; Email</label><br>
                        <input type="text" id="email" name="email" value="<?php echo $row['email'] ?>" placeholder="KSPerera@gmail.com"><br>
                    </div>
                </div>
                <div class="col6">
                    <div class="">
                        <label for="phn-no"><i class="fa fa-phone"></i>&nbsp; Phone Number</label><br>
                        <input type="text" id="phn-no" name="phn-no" value="<?php echo $row['phoneNo'] ?>" placeholder="0771123344"><br>
                    </div>
                </div>

            </div>

            <div class="row rowMargin">
                <div class="col6">
                    <div>
                        <label for="dob"><i class="fa fa-birthday-cake"></i>&nbsp; Date of Birth</label><br>
                        <input type="date" id="Birth" name="dob" disabled value="<?php echo $row['dob'] ?>" readonly placeholder="Perera"><br><br>
                    </div>
                </div>
                <div class="col6">
                    <div>
                        <label for="status">Marital status</label><br>
                        <input type="text" id="status" name="status" value="<?php echo $row['status'] ?>" placeholder="Married"><br>
                    </div>
                </div>
            </div>

            <div class="row rowMargin">
                <div class="col12">
                    <div>
                        <!------------------Address section------------------->

                        <label for="Addressl1"><i class="fa fa-address-card"></i> Address Line 1</label><br>
                        <input type="text" id="line1" name="aline1" value="<?php echo $row['aLine1'] ?>" placeholder="No 23/3 B"><br><br>
                        <label for="Addressl2"><i class="fa fa-address-card"></i> Address Line 2</label><br>
                        <input type="text" id="line2" name="aline2"value="<?php echo $row['aLine2'] ?>" placeholder="Jayasekara Mawatha"><br>
                        <!------------------ ------------------->
                    </div>
                </div>
            </div>

            <div class="row rowMargin">
                <div class="col6">
                    <div>
                        <label for="city"><i class="fa fa-city"></i> City</label><br>
                        <input type="text" id="city" name="city" value="<?php echo $row['city'] ?>" placeholder="Warakapola">
                    </div>
                </div>
                <div class="col6">
                    <div>
                        <label for="country"><i class="fa fa-globe"></i> Country</label><br>
                        <input type="text" id="country"value="<?php echo $row['country'] ?>" name="country" placeholder="Srilanka"><br>
                    </div>
                </div>
            </div>

            <div class="row rowMargin">
                <div class="col12">
                    <div class="radio-hover">
                        <!------------------Gender Radio ------------------>
                        <label style="font-size: 18px;" for="gender"> Select your Gender</label>
                        <br><br>
                        <label for="male"><i class="fa fa-male fa-2x"></i>&nbsp; Male</label>
                        <input type="radio" id="male" name="gender" value="male" <?php echo ($row['gender'] == 'male') ? 'checked' : ''; ?>>
                        <label for="female"><i class="fa fa-female fa-2x"></i>&nbsp; Female </label>
                        <input type="radio" id="female" name="gender" value="female" <?php echo ($row['gender'] == 'female') ? 'checked' : ''; ?>>

                    </div>
                </div>
            </div>

            <div class="row ">
				<div class="col12 ">
					<div class=" margint100 marginl100">
						<h2>Admin Login Credentials</h2>
					</div>
				</div>
			</div>

            <div class="row  rowMargin">
                <div class="col12">
                    <div>
                        <label for="Username-field"><i class="fa fa-user-alt"></i> Username</label><br>
                        <input type="text" value="<?php echo $row['userID'] ?>" name="Username-field" placeholder="Username" readonly><br>
                    </div>
                </div>
            </div>
            <div class="row  rowMargin">
				<div class="col12">
					<div>
						<label for="position"><i class="fa fa-user-alt"></i> Position</label><br>
						<input type="text" value="<?php echo $row['position'] ?>"name="position" placeholder="Head Admin"><br>
					</div>
				</div>
			</div>

            <?php
                     }
                }
                ?>
            <div class="row rowMargin marginb100">
                <div class="col12 center">
                    <div class=>
                        <button type="submit" value="submit">Save Changes</button>
                    </div>
                </div>
            </div>

        </form>

    </div>

</html>