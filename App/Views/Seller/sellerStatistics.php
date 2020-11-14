<!DOCTYPE html>
<html>
<head>
	<title>Seller Statistics</title>
	<!-- <link rel="stylesheet" type="text/css" href="../css/common-dashboard.css"> -->
  <link rel="shortcut icon" href="../images/logoOnly.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="/css/Seller/main.css">
  <link rel="stylesheet" type="text/css" href="/css/Seller/grid.css">
  <link rel="stylesheet" type="text/css" href="/css/Seller/market.css">
  <link rel="stylesheet" type="text/css" href="/css/Seller/sellerProfile.css">
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous"/>
	<link href="https://fonts.googleapis.com/css2?family=Lato&family=Nunito&family=Roboto+Mono&display=swap" rel="stylesheet">
	<script src="/js/Seller/common-dashboard.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Amount", { role: "style" } ],
        ["Total Sales", 778.48, "#b87333"],
        ["Total Commission", 567.98, "silver"],
        ["Total Shipping", 78.74, "gold"],
        ["Most Selling Items", 354.12, "color: #e5e4e2"],
        // ["Net Income", 99.91, "color: #ddd"]
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
        // width: 800,
        height: 500,
        bar: {groupWidth: "80%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
    }
  </script>

	<!-------------- Top-Navigation-Bar ---------------------->
  <div id="main" class="container navigation">
    <ul class="">
      <li onclick="openNav()">&#9776;</li>
      <li><a href="">Affiliox</a></li></a>
      <li style="float: right;">user-name</li>
    </ul>
    <div class="row row-padding">
      <hr class="col12"/>
    </div>
    <!-- </div> -->
    <div class="row row-padding">
      <div class="col12 center title">
        <p><i class="fas fa-chart-line"></i>&nbsp; &nbsp;Seller Statistics</p>
      </div> 
      
      <div class="row">
        <div id="columnchart_values" class="col8 col-center"></div>
      </div>

      <div class="row col6 col-center inner-part">
        <table>
          <!-- <tr>
            <th>Color Category</th>
            <th>Amount</th>
          </tr> -->
          <tr>
            <td id="td-1">Total Sold Items</td>
            <td>89</td>
          </tr>
          <tr>
            <td id="td-1">Total Promoted Items</td>
            <td>41</td>
          </tr>
          <tr>
            <td id="td-1">Total Refunded Items</td>
            <td>13</td>
          </tr>
          <tr>
            <td id="td-1" style="border: none;">Most Selling Items</td>
            <td style="border: none;">10</td>
          </tr>
        </table>
      </div> <!-- heading --> 

      <div class="col12 center title">
				<p>Products</p>
			</div>

      <br><br>
      <div class="row col8 col-center boxsummery inp" style="margin-bottom: 20px;">
        <div class="col3" style="padding: 0px;"><img class="imgw" src="../images/action-camera.jpg"></div>
				<div class="col9">
					<div class="row padding"><h3 class="col6">Inspire 1</h3> <p class="col6">Price :Rs 4000.00</p></div>
          <div class="row padding">
          <div class="col3 fitcontent">
            <label>Total Sold</label><br/>
            <input readonly  type="number" id="quantity" name="quantity" style="min-width: 50px; width: 50px;" placeholder="1">
          </div>
          <div class="col3 fitcontent">
            <label>Sold this week</label><br/>
            <input readonly  type="number" id="quantity" name="quantity" style="min-width: 50px; width: 50px;" placeholder="1">
          </div>
          <div class="col3 fitcontent">
            <label>Promoted</label><br/>
            <input readonly  type="number" id="quantity" name="quantity" style="min-width: 50px; width: 50px;" placeholder="1">
          </div>
          <div class="col3 fitcontent">
            <label>Refunded</label><br/>
            <input readonly  type="number" id="quantity" name="quantity" style="min-width: 50px; width: 50px;" placeholder="1">
          </div>
          </div>
        </div>
      </div>
      
      <div class="row col8 col-center boxsummery inp" style="margin-bottom: 20px;">
        <div class="col3" style="padding: 0px;"><img class="imgw" src="../images/action-camera.jpg"></div>
				<div class="col9">
					<div class="row padding"><h3 class="col6">Inspire 1</h3> <p class="col6">Price :Rs 4000.00</p></div>
          <div class="row padding">
          <div class="col3 fitcontent">
            <label>Total Sold</label><br/>
            <input readonly  type="number" id="quantity" name="quantity" style="min-width: 50px; width: 50px;" placeholder="1">
          </div>
          <div class="col3 fitcontent">
            <label>Sold this week</label><br/>
            <input readonly  type="number" id="quantity" name="quantity" style="min-width: 50px; width: 50px;" placeholder="1">
          </div>
          <div class="col3 fitcontent">
            <label>Promoted</label><br/>
            <input readonly  type="number" id="quantity" name="quantity" style="min-width: 50px; width: 50px;" placeholder="1">
          </div>
          <div class="col3 fitcontent">
            <label>Refunded</label><br/>
            <input readonly  type="number" id="quantity" name="quantity" style="min-width: 50px; width: 50px;" placeholder="1">
          </div>
          </div>
        </div>
      </div>

    </div> 
      
    <!-- <div class="container"> -->
    <div class="row row-padding">
      <hr class="col12"/>
    </div>

    <!-- bottom-part-------------------------------------------->
    <div class="row bottom-part">
      <div class="col3 hidden-sm center">
        <a href=""><img src="../images/LOGO.png" alt="Affiliox LOGO" /></a>
      </div>

      <div class="col2">
        <!-- <ul> -->
        <p>Main Menu</p>
        <a href="">Affiliox Home</a>
        <a href="">About us</a>
        <a href="">Help</a>
        <a href="">Account</a>
        <!-- </ul> -->
      </div>
      <div class="col2">
        <!-- <ul> -->
        <p>Company</p>
        <a href="">Address</a>
        <a href="">Email</a>
        <a href="">Help</a>
        <a href="">Account</a>
        <!-- </ul> -->
      </div>
      <div class="col2">
        <!-- <ul> -->
        <p>Discover</p>
        <a href="">Home</a>
        <a href="">About us</a>
        <a href="">Help</a>
        <a href="">Account</a>
        <!-- </ul> -->
      </div>
      <div class="col2">
        <!-- <ul> -->
        <p>Find Us on</p>
        <a href="">Facebook</a>
        <a href="">Twitter</a>
        <a href="">Instagram</a>
        <a href="">Youtube</a>
        <!-- </ul> -->
      </div>
    </div>

    <div class="row">
    <div class="col12 company-address">
      <ul>
      <li>© All Right reserved</li>
      <li>Affiliox 2020 ™</li>
      </ul>
    </div>
    </div>
		<!-- inner-part -->	
	</div> 
	<div id="mySidenav" class="sidenav">
  		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  		<a href="sellerProfile.html">User profile<i class="far fa-user"></i></a>
  		<a href="ministore.html">Mini Store<i class="fas fa-store"></i></a>
  		<a href="#">Marker Place<i class="fab fa-shopify"></i></a>
  		<a href="sellerStatistics.html">Statstics<i class="fas fa-chart-line"></i></i></a>
		<a href="viewOrders.html">View Orders<i class="fas fa-chart-line"></i></i></a>
  		<a href="sellerTransactions.html">Transactions<i class="fas fa-money-check-alt"></i></a>
  		<a href="sellerFeedback.html">Feedback<i class="fas fa-phone-square"></i></i></a>
  		<a href="#">Support<i class="fas fa-envelope-open-text"></i></a>
	</div>
	<span onclick="openNav()"></span>

</body>
</html>