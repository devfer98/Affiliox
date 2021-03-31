<!DOCTYPE html>
<html>
<head>
	<title>Update Promoter</title>
  	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="shortcut icon" href="/images/promoter/logoOnly.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="/css/promoter/update-promoter-css.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous"/>
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans&display=swap" rel="stylesheet">
	<script src="/js/promoter/update-promoter-js.js"></script>
</head>
<body>
	
		<!-- inner part of the evry dashboard -->
	<div class="container">
		<h2><i class="fas fa-user"></i>&nbsp; &nbsp; Update Personal Information</h2>

		<?php 
			if (isset($this->UImsg) and !empty($this->UImsg)) {
                if ($this->State == 1) {

                    ?><div class="error-msg"><?php

                                } else {
                                      ?><div class="success-msg"> <?php
                                     }
                                ?> <p>  <?php  echo $this->UImsg ?>  </p></div>    

                              <?php   }  ?>
        </div>
		<div class="inner-part">
		<?php  
            if(isset($this->UImsg1) and !empty($this->UImsg1)){
				while($row = $this->UImsg1->fetch_assoc()) {          
        ?>
			<form action="../Promoter/promoterProfileUpdate" method="post">
				<table>
					<tr>
						<td id="td-1"> Full Name: </td>
						<td id="td-2"><input type="text" name="name" value="<?php echo $row['name'] ?>" minlength="5" maxlength="100" pattern="[a-zA-Z'-'\s]*" title="Remove unwanted characters." ></td>
					</tr>
					<tr>
						<td id="td-1">Email: <p style="font-size: 12px; color: red">* View only</p></td>
						<td id="td-2"><input type="text" name="email" value="<?php echo $row['email'] ?>" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Please fill the filed required format." readonly></td>
					</tr>
					<tr>
						<td id="td-1">Phone Number:</td>
						<td id="td-2"><input type="tel" name="phoneNo" value="<?php echo $row['phoneNo'] ?>" minlength="10" maxlength="10"  pattern="[0-9]*"
       					title="Please enter a valid phone number" ></td>
					</tr>
					<tr>
						<td id="td-1">Date of Birth: </td>
						<td id="td-2"><input type="date" name="dob" value="<?php echo $row['dob'] ?>" readonly></td>
					</tr>
					<tr>
						<td id="td-1">Material Status: </td>
						<td id="td-2"><input type="text" name="status" value="<?php echo $row['status'] ?>"></td>
					</tr>
					<tr>
						<td id="td-1">Address Line 1:</td>
						<td id="td-2"><input type="text" name="aLine1" value="<?php echo $row['aLine1'] ?>"minlength="5" maxlength="100" pattern="^[a-zA-Z0-9,-.'()/ ]*$"  title="Remove unwanted characters." required></td>
					</tr>
					<tr>
						<td id="td-1">Address Line 2:</td>
						<td id="td-2"><input type="text" name="aLine2" value="<?php echo $row['aLine2'] ?>"minlength="5" maxlength="100" pattern="^[a-zA-Z0-9,-.'()/ ]*$"  title="Remove unwanted characters." required></td>
					</tr>
					<tr>
						<td id="td-1">City</td>
						<td id="td-2"><input type="text" name="city" value="<?php echo $row['city'] ?>" minlength="5" maxlength="100" pattern="[a-zA-Z'-'\s]*" title="Remove unwanted characters." required></td>
					</tr>
					<tr>
						<td id="td-1">Country:</td>
						<td id="td-2"><input type="text" name="country" value="<?php echo $row['country'] ?>"minlength="3" maxlength="50" pattern="[a-zA-Z'-'\s]*" title="Remove unwanted characters." required></td>
					</tr>
					<tr>
						<td id="td-1">User Name: <p style="font-size: 12px; color: red">* View only</p></td>
						<td id="td-2"><input type="" name="userID" value="<?php echo $row['userID'] ?>" readonly></td>
					</tr>
				</table>
				<input type="submit" name="submit" value="Submit" class="btn">
				<!-- <button type="submit" value="submit" class="btn">Submit Changes</button> -->
			</form>	
			<?php
				}
			}
			?>
		</div><!-- inner-part -->
		</div> <!-- container -->
		<hr style="height:2px;border:none;color:#333;background-color:#333;">
	
	
		

</body>
</html>

