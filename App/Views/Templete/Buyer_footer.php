    <div class="row fullwidth ">
        <div class="col12 fullwidth">
            <hr>
        </div>
    </div>
        <div class="row center backcolor">

        <div class=" col3 img-span hidden-sm">
            <td><img src="/images/Logo/SideLogo.png" width='200'></td>
        </div>

        <div class="col9  nav-bar center">
            <table class="row center sm-table">
                <tr class="thead center">

                    <td>Main Menu</td>
                    <td>Find us On</td>
                    <td>Contact us</td>
                </tr>

                <tr>
                    <!-- <td></td> -->
                    <td><a href="../User/AboutUs">About Affiliox <i class="fas fa-users"></i></a></td>
                      <td><a href="https://www.facebook.com/Affiliox"></i>FaceBook <i class="fab fa-facebook-f"></i></a></td>
                      <td><b>Address:</b> 21/3 Y Road, Colombo 7</td>
                  </tr>
                  <tr>
                      <!-- <td></td> -->
                      <td><a href="../User/Help">Help & Support <i class="fas fa-question-circle"></a></td>
                      <td><a href="https://www.instagram.com/affiliox/">Instagram <i class="fab fa-instagram"></i></a></td>
                      <td><b>Phone:</b> 011-1234567</td>
                </tr>
                <tr>
                    <!-- <td></td> -->
                    <td><a href="../User/privacy">Privacy & Policy <i class="fas fa-shield-alt"></i></a></td>
                    <td><a href="https://www.youtube.com/channel/UC1Cv4AAe8ovZsBKfV0BFTzw/">Youtube <i class="fab fa-youtube"></i></a></td>
                    <td><b>Email:</b> affiliox.com@gmail.com</td>
                </tr>

            </table>
        </div>

      </div>
      <div class="row footer backcolor paddingt20">

          <ul>
              <li>Group Project 2020 (IS-06)</li>
              <li> Affiliox &trade;</li>
          </ul>
      </div>


      <!--Container------------------------------------------>

      <div id="mySidenav" class="sidenav "style ="z-index :1000">
           <p class= "center "> <b>Hi ,<?php echo $_SESSION['username'];?></b></p><br><br>
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          <a href="../Buyer/Account">User profile<i class="far fa-user"></i></a>
          <a href="../Buyer/Market">Market Place<i class="fab fa-shopify"></i></a>
          <a href="../User/ADDShoppingCart">Shopping cart<i class="fas fa-shopping-cart"></i></i></a>
          <a href="../Buyer/CurrentOrders">Orders<i class="fas fa-chart-line"></i></i></a>
          <a href="../Buyer/FeedbackView">Feedback<i class="fas fa-phone-square"></i></i></a>
          <a href="../User/Help">Support<i class="fas fa-envelope-open-text"></i></a>
      </div>
      <span onclick="openNav()"></span>
      
