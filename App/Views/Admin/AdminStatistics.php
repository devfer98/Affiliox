<!DOCTYPE html>
<html>
<head>
	<title>Affiliox-AdminStatistics</title>
	<link rel="shortcut icon" href="/images/Logo/logoOnly.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="/css/Customer/common.css" />
	<link rel="stylesheet" type="text/css" href="/css/Customer/customer-grid.css" />
	<link rel="stylesheet" type="text/css" href="/css/Admin/adminstatistics.css">
	<script type="text/javascript" src="/js/Customer/nav-fixed.js"></script>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script src="https://kit.fontawesome.com/6cdc06033e.js" crossorigin="anonymous"></script>
  <link href="https:/fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />  
</head>
<body>
    <div class="containerB">
      <h2>&nbsp;<i class="fas fa-chart-line"></i>&nbsp; &nbsp;Admin Statistics</h2>
      <br/><br/><br/>
        
        <!-- <div id="piechart">
        <script type="text/javascript">
            google.charts.load("current", {packages:['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            // Draw the chart and set the chart values
				function drawChart() {
					var data = google.visualization.arrayToDataTable([
						['Type', 'ClicksPerDay'],
						['Clothing', 8],
						['Electicals', 13],
						['Travel', 6],
						['Kids', 26],
						['Home Applience', 6]
					]);

				var options = {'title':'Traffic Type', 'width':650, 'height':450};

				var chart = new google.visualization.PieChart(document.getElementById('piechart'));
				chart.draw(data, options);
				}
      </script>
      </div> -->

      <div class="heading">
        <p>&nbsp; <i class="fas fa-chart-line"></i> Overall Statistics </p>
           <table>
             <tr>
               <th>Attribute</th>
               <th>Amount</th>
             </tr>
             <tr>
               <td>Number of Sellers</td>
               <td><?php 
                  if(isset($this->countSellers) and !empty($this->countSellers and $this->countSellers->num_rows>0)){
                   while($row = $this->countSellers->fetch_assoc()){
						echo $row['COUNT(userID)'];	
					}  
				}
			?>  				</td>
             </tr>
             <tr>
               <td>Number of Buyers</td>
               <td><?php 
                  if(isset($this->countBuyers) and !empty($this->countBuyers and $this->countBuyers->num_rows>0)){
                   while($row = $this->countBuyers->fetch_assoc()){
						echo $row['COUNT(userID)'];	
					}  
				}
			?>  	</td>
             </tr>
             <tr>
               <td>Number of Promoters</td>
               <td><?php 
                  if(isset($this->countPromoters) and !empty($this->countPromoters and $this->countPromoters->num_rows>0)){
                   while($row = $this->countPromoters->fetch_assoc()){
						echo $row['COUNT(userID)'];	
					}  
				}
			?>  				 </td>
             </tr>
             <tr>
               <td>Number of Ministores</td>
               <td><?php 
                  if(isset($this->countMinistores) and !empty($this->countMinistores and $this->countMinistores->num_rows>0)){
                   while($row = $this->countMinistores->fetch_assoc()){
						echo $row['COUNT(userID)'];	
					}  
				}
			?>  				</td>
             </tr>
			      <tr>
               <td>Number of Products Promoted</td>
               <td><?php 
                  if(isset($this->PromoteCount) and !empty($this->PromoteCount and $this->PromoteCount->num_rows>0)){
                   while($row = $this->PromoteCount->fetch_assoc()){
						echo $row['COUNT(userID)'];	
					}  
				}
			?>  	</td>
             </tr>
           </table>
     </div> <!-- heading --> 

	</div>
</body>

</html>