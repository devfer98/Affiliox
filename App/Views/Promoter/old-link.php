<!DOCTYPE html>
<html>
<head>
	 <title>Promoted Links</title>
	 <link rel="shortcut icon" href="/images/Promoter/logoOnly.png" type="image/x-icon">
   	 <link rel="stylesheet" type="text/css" href="/css/promoter/old-link-css.css">
     <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous"/>
     <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans&display=swap" rel="stylesheet">
	 <script src="/js/promoter/generate-link-js.js"></script>
</head>
<body>
	
	<div class="container">
    <h2><i class="fab fa-shopify"></i>&nbsp; &nbsp;Alredy Promoted Items</h2>
        <!-- <div class="table-list"> -->
        <div class="error-msg">
			<p><?php if(isset($this->empty) and !empty($this->empty)){echo $this->empty;}  ?></p>
		</div>
			<div class="table-list">
			<?php  
                if(isset($this->UImsg) and !empty($this->UImsg)){
					echo "<table>";    
                        echo "<tr>";
                            echo "<th>Number</th>";
                            echo "<th>Promoted Date</th>";
                            echo "<th>Generated Link</th>";
                            echo "<th>Copy</th>";
                        echo "</tr>";     
					while($row = $this->UImsg->fetch_assoc()) {
						echo "<tr>";
                            echo "<td>" . $row['linkID'] . "</td>";
                            echo "<td>" . $row['date'] . "</td>";
                            echo "<td>"; echo'<input type="" name="link" id="myInput" value=" '.$row['link'].'" readonly>' . "</td>";
                            echo "<td>";  echo'<button onclick="myFunction()">Copy <i class="far fa-copy"></i>' . "</td>";
						echo "</tr>";
					}   	
				}
				    echo "</table>"; 
			?>
            </div>  
	<hr style="height:1px;border:none;color:#333;background-color:#333;">
			
</body>
</html>

