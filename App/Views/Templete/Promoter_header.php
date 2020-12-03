<header>
      <div class="open-btn" onclick="openNav()">&#9776;</div>
      <nav class="top-nav">
      <ul class="main-nav">
        <li class="logo"><a href="../promoter/index" style="border: none;"><img src="/images/promoter/SideLogo.png"></a></li>
        <li class="item"><a href="../promoter/index"><i class="fas fa-home"></i>&nbsp;Home</a></li>
        <li class="item"><a href="../promoter/aboutUs"><i class="fas fa-users"></i>&nbsp;About Us</a></li>
        <li class="item"><a href="../promoter/contactUs"><i class="fas fa-question-circle"></i>&nbsp;Help & Support</a></li>
        <!-- <li class="item"><a href=""><i class="fas fa-user"></i>&nbsp;&nbsp;Account</a></li>
        <li class="item"><a href=""><i class="fas fa-shopping-cart"></i>&nbsp;Add to cart</a></li> -->
        <li class="push"><input type="search" name="" placeholder="search"><button><a href="../Promoter/index"><i class="fas fa-search"></i></a></button></li>
        <li class="last">
        <select name="direction" id="select-nav" onchange="location = this.value;">
            <?php if(isset($_SESSION['username']) and !empty($_SESSION['username'])){

                echo '<option value="" selected disabled hidden></option>';
                echo '<option value="../login/logout">Logout</option>';
                } else {
                echo '<option value="" selected disabled hidden></option>';
                echo '<option value="../Signup/create">Signup</option>';
                echo '<option value="../login/index">Login</option>';
                }?>
          </select>
        </li>
      </ul>
    </nav>
    </header>
    <hr>	
