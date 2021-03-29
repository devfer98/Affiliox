<!DOCTYPE html>
<html>
<head>
	<title>Affiliox-ContactUs</title>
	<link rel="stylesheet" type="text/css" href="/css/Customer/common.css" />
	<link rel="stylesheet" type="text/css" href="/css/Customer/customer-grid.css" />
	<link rel="stylesheet" type="text/css" href="/css/Common/Contactus.css" />
	<script type="text/javascript" src="/js/Customer/nav-fixed.js"></script>
  <script src="https://kit.fontawesome.com/6cdc06033e.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>

	<!---Navigation bar-------------------------------------------->
	<div class="container">

		  <!-- inner-part-------------------------------------------->
		  
		  <br/><br/>
      
            <?php if(isset($this->UImsgNotice) and !empty($this->UImsgNotice)){
                        if($this->State==1) {

                           ?><div class="center  marginb100 margint100 errorMsgSuccess"><?php
                           
                        }else{
                          ?><div class="center  margint100 marginb100 errorMsgFailed"> <?php
                        }                 
                  }  ?>
                    <p><?php if(isset($this->UImsgNotice) and !empty($this->UImsgNotice)){echo $this->UImsgNotice;}  ?></p>
                </div>
 
	  
          <div class="acontainer margint100">

            <div class="margint100" style="text-align:center">
                <h2>Get in Touch</h2>
				<br/>
				<h3>Want to find out how Affiliox can solve problems
                    specific to your need? Let's Talk
                </h3>
            </div>
            <div class="arow">
              <div class="acolumn">
                <img src="/images/Common/help.png " style="width:100%">
              </div>
              <div class="acolumn">
                <?php if(isset($this->UImsg) and !empty($this->UImsg)){
                        if($this->State==1) {

                           ?><div class="center marginb50 errorMsgSuccess"><?php
                           
                        }else{
                          ?><div class="center marginb50 errorMsgFailed"> <?php
                        }                 
                  }  ?>
                    <p><?php if(isset($this->UImsg) and !empty($this->UImsg)){echo $this->UImsg;}  ?></p>
                <form method="post" onsubmit="return validateForm();" action ="../User/Help">
                  <label for="fname">Full Name</label>
                  <input type="text" id="fname" name="firstname" placeholder="Your name..">
                  <label for="lname">Email</label>
                  <input type="text" id="lname" name="email" placeholder="example @123.com">

                  <!-- <select id="country" name="country">
                    <option value="australia">Sri Lanka</option>
                    <option value="canada">Canada</option>
                    <option value="usa">USA</option>
                  </select> -->
                  <label for="subject">Message</label>
                  <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
                  <button class="button">Send Message</button>
                </form>
              </div>
            </div>
          </div>
		<!-- bottom-part-------------------------------------------->
</div>
<!--Container------------------------------------------>
<hr style="height:1px;border:none;color:#333;background-color:#333; margin-top:40px">
</body>

</html>