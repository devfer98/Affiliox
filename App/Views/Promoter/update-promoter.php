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
		<h2><i class="fas fa-user"></i>&nbsp; &nbsp; Edit Profile Details</h2>
		<div class="inner-part">
		<?php  
            if(isset($this->UImsg) and !empty($this->UImsg)){
				while($row = $this->UImsg->fetch_assoc()) {          
        ?>
			<form action="../Promoter/promoterProfile" method="post">
				<table>
					<tr>
						<td id="td-1">Your ID:</td>
						<td id="td-2"><input type="" name="userID" value="<?php echo $row['userID'] ?>" readonly></td>
					</tr>
					<tr>
						<td id="td-1"> Full Name:</td>
						<td id="td-2"><input type="text" name="name" value="<?php echo $row['name'] ?>" min="0" max="50"></td>
					</tr>
					<tr>
						<td id="td-1">Email:</td>
						<td id="td-2"><input type="text" name="email" value="<?php echo $row['email'] ?>"></td>
					</tr>
					<tr>
						<td id="td-1">Phone Number:</td>
						<td id="td-2"><input type="tel" name="phoneNo" value="<?php echo $row['phoneNo'] ?>" pattern="[1-9]{4}-[1-12]{2}-[1-30]{2}"></td>
					</tr>
					<tr>
						<td id="td-1">Date of Birth:</td>
						<td id="td-2"><input type="date" name="dob" value="<?php echo $row['dob'] ?>"></td>
					</tr>
					<tr>
						<td id="td-1">Address Line 1:</td>
						<td id="td-2"><input type="text" name="aLine1" value="<?php echo $row['aLine1'] ?>"></td>
					</tr>
					<tr>
						<td id="td-1">Address Line 2:</td>
						<td id="td-2"><input type="text" name="aLine2" value="<?php echo $row['aLine2'] ?>"></td>
					</tr>
					<tr>
						<td id="td-1">City</td>
						<td id="td-2"><input type="text" name="city" value="<?php echo $row['city'] ?>"></td>
					</tr>
					<tr>
						<td id="td-1">Country:</td>
						<td id="td-2"><input type="text" name="country" value="<?php echo $row['country'] ?>"></td>
					</tr>
					
				</table>
				<input type="submit" name="submit" value="Submit" class="btn">
			</form>	
			<?php
				}
			}
			?>
		</div><!-- inner-part -->
		<hr style="height:2px;border:none;color:#333;background-color:#333;">
	</div> <!-- container -->
	
		

</body>
</html>

