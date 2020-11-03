<!DOCTYPE html>
<html>
<head>
  <title>Promoter Statistics</title>
  <link rel="stylesheet" type="text/css" href="css/promoter-statistics-css.css">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="shortcut icon" href="../images/logoOnly.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous"/>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans&display=swap" rel="stylesheet">
  <script src="js/promoter-statistics-js.js"></script>
</head>
<body>
  <!-------------- Top-Navigation-Bar ---------------------->
    <header>
        <div class="open-btn" onclick="openNav()">&#9776;</div>
        <nav class="top-nav">
      <ul class="main-nav">
        <li class="logo"><a href="../index.php" style="border: none;"><img src="../images/SideLogo.png"></a></li>
        <li class="item"><a href=""><i class="fas fa-home"></i>&nbsp;Home</a></li>
        <li class="item"><a href=""><i class="fas fa-users"></i>&nbsp;About Us</a></li>
        <li class="item"><a href=""><i class="fas fa-question-circle"></i>&nbsp;Help & Support</a></li>
        <!-- <li class="item"><a href=""><i class="fas fa-user"></i>&nbsp;&nbsp;Account</a></li>
        <li class="item"><a href=""><i class="fas fa-shopping-cart"></i>&nbsp;Add to cart</a></li> -->
        <li class="push"><input type="search" name="" placeholder="search"><button><i class="fas fa-search"></i> &nbsp;Search</button></li>
        <li class="last">
          <select name="direction" onchange="location = this.value;">
              <option value="../index.php">SELECT</option>
              <option value="../index.php">Logout</option>
              <option value="">Login</option>
          </select>
        </li>
      </ul>
    </nav>
    </header>
      <hr>
    <!-- inner part of the evry dashboard -->
              
    <div class="container">
      <h2><i class="fas fa-chart-line"></i>&nbsp; &nbsp;Promoter Statistics</h2>
     
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
      <p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Consequuntur soluta, ab quod! Iure dolore est perspiciatis voluptatem corporis sed quas, excepturi mollitia possimus commodi, nobis maiores necessitatibus quo, aspernatur debitis!</p>
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
