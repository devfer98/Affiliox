<!DOCTYPE html>
<html>
<head>
  <title>Promoter Statistics</title>
  <link rel="stylesheet" type="text/css" href="css/promoter-statistics-css.css">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="shortcut icon" href="images/affiliox.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous"/>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
  <script src="js/promoter-statistics-js.js"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>
<body>
  <!-------------- Top-Navigation-Bar ---------------------->
    <header>
        <div class="open-btn" onclick="openNav()">&#9776;</div>
        <div class="affiliox"><a href="">Affiliox</a></div>
        <div class="loggedin">Welcome User name</div>
    </header>
      <hr>
    <!-- inner part of the evry dashboard -->
              
    <div class="container">
      <h2><i class="fas fa-chart-line"></i>&nbsp; &nbsp;Promoter Statistics</h2>
        
        <div id="columnchart_values">
        <script type="text/javascript">
            google.charts.load("current", {packages:['corechart']});
            google.charts.setOnLoadCallback(drawChart);
            function drawChart() {
              var data = google.visualization.arrayToDataTable([
                ["Element", "Amount", { role: "style" } ],
                ["Total Promoted Items", 778.48, "#b87333"],
                ["Total Sales", 567.98, "silver"],
                ["Total Returns", 78.74, "gold"],
                ["Most Selling Items", 354.12, "color: #e5e4e2"],
                ["Net Income", 99.91, "color: #ddd"]
              ]);

              var view = new google.visualization.DataView(data);
              view.setColumns([0, 1,
                               { calc: "stringify",
                                 sourceColumn: 1,
                                 type: "string",
                                 role: "annotation" },
                               2]);

              var options = {
                title: "Statistic Methods, Amount in USD $",
                width: 800,
                height: 500,
                bar: {groupWidth: "80%"},
                legend: { position: "none" },
              };
              var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
              chart.draw(view, options);
          }
      </script>
      </div>

      <div class="heading">
        <p>Overall List Statistics</p>
           <table>
             <tr>
               <th>Color Category</th>
               <th>Amount</th>
             </tr>
             <tr>
               <td>Total Promoted Items</td>
               <td>89</td>
             </tr>
             <tr>
               <td>Total Sale Items</td>
               <td>41</td>
             </tr>
             <tr>
               <td>Total Return Items</td>
               <td>13</td>
             </tr>
             <tr>
               <td>Most Selling Items</td>
               <td>10</td>
             </tr>
           </table>
     </div> <!-- heading --> 

     <br><br>
     <div class="inner-part">
       <table>
         <tr>
           <th colspan="2" >Total Promoted Items</th>
         </tr>
         <tr>
           <td>Items</td>
           <td>89</td>
         </tr>
       </table>

       <table>
         <tr>
           <th colspan="2" >Total Sales</th>
         </tr>
         <tr>
           <td>Amount</td>
           <td>$USD 476.63</td>
         </tr>
       </table>
      <table>
         <tr>
           <th>Total Amount of Returns</th>
           <th>Total Value Per Month</th>
         </tr>
         <tr>
           <td>Amount</td>
           <td>$USD 75.00</td>
         </tr>
       </table>
       <table>
         <tr>
           <th>Most Selling Items</th>
           <th>Amount Per Month</th>
         </tr>
         <tr>
           <td>Electonics</td>
           <td>85</td>
         </tr>
       </table>
       <table>
         <tr>
           <th colspan="2">Net Income</th>
         </tr>
         <tr>
           <td>Total Sales</td>
           <td>$USD 476.63</td>
         </tr>
         <tr>
           <td>Amount of Return</td>
           <td>$USD 75.00</td>
         </tr>
         <tr>
           <td>Net Income</td>
           <td>$USD 471.63</td>
         </tr>
         <tr>
           <td>Total Profit Related to the Net Income</td>
           <td>$USD 87.54</td>
         </tr>
       </table>
     </div> <!-- inner-part -->
  

    </div> <!-- container -->
    <div class="footer">
        <ul>
          <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua.</li>
          <li><a href="">Privacy & Policy</a></li>
          <li>© Affiliox</li>
        </ul>
    </div>  <!-- inner-part --> 
  </div> 
  <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="promoter-dashboard.php">User profile<i class="far fa-user"></i></a>     
      <a href="market-place.php">Marker Place<i class="fab fa-shopify"></i></a>
      <a href="promoter-statistics.php">Statstics<i class="fas fa-chart-line"></i></a>
      <a href="withdraw-earnings.php">Transactions<i class="fas fa-money-check-alt"></i></a>
      <a href="review-feedback.php">Feedback<i class="fas fa-phone-square"></i></i></a>
      <a href="support-center.php">Support<i class="fas fa-envelope-open-text"></i></a>
  </div>
  <span onclick="openNav()"></span>

</body>
</html>