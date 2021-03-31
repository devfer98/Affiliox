
<!DOCTYPE html>
<html>
<head>
	<title>Payout History</title>
	<link rel="shortcut icon" href="/images/promoter/logoOnly.png" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="/css/promoter/payout-history-css.css">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous"/>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans&display=swap" rel="stylesheet">
  <script src="/js/promoter/payout-history-js.js"></script>
</head>
<body>
	
		<!-- inner part of the evry dashboard -->
	<div class="container">
		<h2><i class="far fa-file-alt"></i>&nbsp; &nbsp;Payout History</h2>						
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat.</p>
			<div class="error-msg">
				<p><?php if(isset($this->empty) and !empty($this->empty)){echo $this->empty;}  ?></p>
			</div>
			<div class="table-list">
			<?php  
                if(isset($this->UImsg) and !empty($this->UImsg)){
					echo "<table>";    
                        echo "<tr>";
                            echo "<th>Transaction ID</th>";
                            echo "<th>Withdraw Amount </th>";
                            echo "<th>Withdraw Status</th>";
                            echo "<th>Withdraw Date</th>";
                        echo "</tr>";     
					while($row = $this->UImsg->fetch_assoc()) {
						echo "<tr>";
                            echo "<td>" . $row['transID'] . "</td>";
                        	echo "<td>" . number_format($row['ammount'],2) . " Rs" . "</td>";
                            echo "<td>" . $row['status'] . "</td>";
                            echo "<td>" . $row['date'] . "</td>";
						echo "</tr>";
					 
					}   	
				}
				echo "</table>"; 
			?>
			</div>
			</div> <!-- container -->	
		<hr style="height:2px;border:none;color:#333;background-color:#333; margin-top:150px; margin-bottom:-150px ">
	

		<!-- bottom-part-------------------------------------------->
	
		

</body>
</html>
