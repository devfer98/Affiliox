<!DOCTYPE html>
<html>
<head>
	<title>Promoter Dashboard</title>
	<link rel="shortcut icon" href="/images/promoter/logoOnly.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="/css/promoter/promoter-dashboard-css.css">
  	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous"/>
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans&display=swap" rel="stylesheet">
	<script src="/js/promoter/promoter-dashboard-js.js"></script>
</head>
<body>
	
		<!-- inner part of the evry dashboard -->
	<div class="container">
		<h2><i class="fas fa-user"></i>&nbsp; &nbsp;Profile Details</h2>
		<?php  
                if(isset($this->UImsg) and !empty($this->UImsg)){
					
					while($row = $this->UImsg->fetch_assoc()){           
        ?>
		<div class="inner-part">
				<table>
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
                        <td><?php echo $row['aLine1'] ; echo "<br>"; echo $row['aLine2']; echo "&nbsp,"; echo $row['city'] ?> </td>
                    </tr>
                    <tr>
                        <td id="td-1">Country:</td>
                        <td><?php echo $row['country'] ?></td>
                    </tr>
			</table>
			<?php
					}
				}
			?>
				
			<form action="../Promoter/promoterProfileUpdate">
				<input type="submit" name="edit-details" value="Edit Details">
			</form>					
		</div><!-- inner-part -->
		<hr style="height:2px;border:none;color:#333;background-color:#333;">

	</div> <!-- container -->
		<!-- bottom-part-------------------------------------------->
		

</body>
</html>


