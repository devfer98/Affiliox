<!DOCTYPE html>
<html>
<head>
  <title>Review Feedback</title>
  <link rel="stylesheet" type="text/css" href="css/review-feedback-css.css">
  <link rel="shortcut icon" href="images/affiliox.png" type="image/x-icon">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous"/>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans&display=swap" rel="stylesheet">
  <script src="js/review-feedback-js.js"></script>
</head>
<body>
  <!-------------- Top-Navigation-Bar ---------------------->
    <header>
        <div class="open-btn" onclick="openNav()">&#9776;</div>
        <nav class="top-nav">
      <ul class="main-nav">
        <li class="logo-name"><a href="">Affiliox</a></li>
        <li class="item"><a href=""><i class="fas fa-home"></i>&nbsp;Home</a></li>
        <li class="item"><a href=""><i class="fas fa-users"></i>&nbsp;About Us</a></li>
        <li class="item"><a href=""><i class="fas fa-question-circle"></i>&nbsp;Help & Support</a></li>
        <!-- <li class="item"><a href=""><i class="fas fa-user"></i>&nbsp;&nbsp;Account</a></li>
        <li class="item"><a href=""><i class="fas fa-shopping-cart"></i>&nbsp;Add to cart</a></li> -->
        <li class="push"><input type="search" name="" placeholder="search"><button><i class="fas fa-search"></i> &nbsp;Search</button></li>
          <li class="last">
              <select name="direction" onchange="location = this.value;">
                <option value="../index.html">SELECT</option>
                <option value="../index.html">Logout</option>
                <option value="">Login</option>
              </select>
        </li>
      </ul>
    </nav>
    </header>
    <hr>
    <!-- inner part of the evry dashboard -->
              
    <div class="container">
      <h2><i class="far fa-comment-dots"></i>&nbsp; &nbsp;Review Feedback</h2>

      <div class="top">
        <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua.</h4>
      </div> <!-- top -->

      <div class="overall-review">
        <table id="overall-review-table">
          <tr>
            <th>Value</th>
            <th>Rated Method</th>
            <th>Percentage</th>
          </tr>
          <tr>            
              <td>Excellent</td>
              <td><i id="star" class="fas fa-star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></td>
              <td>60%</td>
            </tr>
            <tr>
              <td>Great</td>
              <td><i id="star" class="fas fa-star"><i class="fas fa-star"><i class="fas fa-star"><i class="fas fa-star"></td>
              <td>10%</td>
            </tr>
            <tr>
              <td>Average</td>
              <td><i id="star" class="fas fa-star"><i class="fas fa-star"></td>
              <td>15%</td>
            </tr>
            <tr>
              <td>Poor</td>
              <td><i id="star" i class="fas fa-star-half-alt"></i></td>
              <td>10%</td>
            </tr>
            <tr>
              <td>Bad</td>
              <td style="color: red;">Not Rated</td>
              <td>5%</td>
            </tr>
        </table>
        </div> <!--overall-review -->
        <br><br>
        <div class="inner-line">
          <p>Customer Reviews</p>
        </div>

      <div class="customer-review-1">

          <form action="" method="post">
          <table>
            <tr>
              <th colspan="2" id="cus-name">John Smith</th>
            </tr>
            <tr>
              <td>Fantastic Store</td>
              <td><textarea placeholder="Write Reply" name="reply" required=""></textarea></td>
            </tr>
            <tr>
              <td></td>
              <td><input type="submit" name="reply" value="Submit Reply"></td>
            </tr>
          </table>
          </form>

          <form action="" method="post">
          <table>
            <tr>
              <th colspan="2" id="cus-name">Smith Merry</th>
            </tr>
            <tr>
              <td>Amaizing! Easy to search.</td>
              <td><textarea placeholder="Write Reply" name="reply" required=""></textarea></td>
            </tr>
            <tr>
              <td></td>
              <td><input type="submit" name="reply" value="Submit Reply"></td>
            </tr>
          </table>
          </form>

          <form action="" method="post">
          <table>
            <tr>
              <th colspan="2" id="cus-name">Lilly Benjamin</th>
            </tr>
            <tr>
              <td>Thanks a lot! Your support was incredibly helpful.</td>
              <td><textarea placeholder="Write Reply" required=""></textarea></td>
            </tr>
            <tr>
              <td></td>
              <td><input type="submit" name="" value="Submit Reply"></td>
            </tr>
          </table>
          </form>

          <form action="" method="post">
          <table>
            <tr>
              <th colspan="2" id="cus-name">Mark Benny</th>
            </tr>
            <tr>
              <td>Very happy. Quick Deliver and communication</td>
              <td><textarea placeholder="Write Reply" required=""></textarea></td>
            </tr>
            <tr>
              <td></td>
              <td><input type="submit" name="" value="Submit Reply"></td>
            </tr>
          </table>
          </form>

          <form action="" method="post">
          <table>
            <tr>
              <th colspan="2" id="cus-name">James Mary</th>
            </tr>
            <tr>
              <td>Thank you so much</td>
              <td><textarea placeholder="Write Reply" required=""></textarea></td>
            </tr>
            <tr>
              <td></td>
              <td><input type="submit" name="" value="Submit Reply"></td>
            </tr>
          </table>
          </form>

          <form action="" method="post">
          <table>
            <tr>
              <th colspan="2" id="cus-name">George</th>
            </tr>
            <tr>
              <td>Fast and fabulous.</td>
              <td><textarea placeholder="Write Reply" required=""></textarea></td>
            </tr>
            <tr>
              <td></td>
              <td><input type="submit" name="" value="Submit Reply"></td>
            </tr>
          </table>
        </form>
      </div> <!-- customer-review-1 -->

    </div> <!-- container -->

    <div class="footer">
        <ul>
          <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua.</li>
          <li><a href="">Privacy & Policy</a></li>
          <li>© Affiliox</li>
        </ul>
    </div>  <!-- footer --> 
  <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="promoter-dashboard.php">User profile<i class="far fa-user"></i></a>     
      <a href="market-place.php">Marker Place<i class="fab fa-shopify"></i></a>
      <a href="promoter-statistics.php">Statstics<i class="fas fa-chart-line"></i></i></a>
      <a href="withdraw-earnings.php">Transactions<i class="fas fa-money-check-alt"></i></a>
      <a href="review-feedback.php">Feedback<i class="fas fa-phone-square"></i></i></a>
      <a href="support-center.php">Support<i class="fas fa-envelope-open-text"></i></a>
  </div>
  <span onclick="openNav()"></span>

</body>
</html>

