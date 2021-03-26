<html>

<head>
    <title>Affiliox-Delivery</title>
    <link rel="shortcut icon" href="/images/Logo/logoOnly.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="/css/Customer/common.css" />
    <link rel="stylesheet" type="text/css" href="/css/Customer/customer-grid.css" />
    <script type="text/javascript" src="/js/Customer/nav-fixed.js"></script>
    <script src="https://kit.fontawesome.com/6cdc06033e.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <!---Navigation bar-------------------------------------------->
    <div class="container">

        <!-- Container content  --------------------------------------------->

        <div class="row  sm-center ">
            <div class="col9  marginl100 search label ">
                <div class="marginl100">
                <div class="col12 ">
                    <div class="hrCustom  marginb50 margint50">
                        <h2> Delivery Details</h2>
                        <hr />
                    </div>
                </div>

                <?php  
                if (isset($this->data) and !empty($this->data)) {
                    while ($row = $this->data->fetch_assoc()) {
                        ?>
                    
                <form method ="POST" action= "../buyer/checkout">
                <div class="col12">
                    <div>
                        <label for="fname"><i class="fa fa-user"></i> &nbsp;Full Name</label><br><br>
                        <input type="text" id="name" name="name"  value="<?php echo $row['name'] ?>" placeholder="Kamal sachintha" minlength="5" maxlength="100" pattern="[a-zA-Z'-'\s]*"  required> <br>
                    </div>
                </div>
                <div class="col12">
                    <div class="sm-text-width ">
                        <label for="channels"><i class="fa fa-address-book"></i> &nbsp;Address Line</label><br>
                        <br>
                        <textarea  required rows="7" name="address" placeholder="Address"><?php echo $row['aLine1'].","?> <?php echo $row['aLine2'].","?>  <?php echo $row['city']."."?> </textarea><br>
                    </div>
                </div>
                <div class="col12">
                    <div>
                        <label for="fname"><i class="fa fa-city"></i> &nbsp;City</label><br><br>
                        <input type="text" id="city" name="city"  value="<?php echo $row['city'] ?>" placeholder="Kiribathgoda" minlength="5" maxlength="100" pattern="[a-zA-Z'-'\s]*"  required> <br>
                    </div>
                </div>
                <div class="col12">
                    <div class="col6">

                        <div >
						<label for="district"><i class="fa fa-map-marker"></i>&nbsp;District</label><br><br>

						<div  >
						<input class="dropCon" list ="districts"  id="district" name="district" value="<?php echo $row['district'] ?>"  placeholder="Gampaha" minlength="5" maxlength="100" pattern="[a-zA-Z'-'\s]*"  required>
						<datalist  id="districts">
						
						<option value="Ampara">
						<option value="Anuradhapura">
						<option value="Badulla">
						<option value="Batticaloa">
						<option value="Colombo">
						<option value="Galle">
						<option value="Gampaha">
						<option value="Hambantota">
						<option value="Jaffna">
						<option value="Kalutara">
						<option value="Kandy">
						<option value="Kegalle">
						<option value="Kilinochchi">
						<option value="Kurunegala">
						<option value="Mannar">
						<option value="Matale">
						<option value="Matara">
						<option value="Monaragala">
						<option value="Mullaitivu">
						<option value="Nuwara Eliya">
						<option value="Polonnaruwa">
						<option value="Puttalam">
						<option value="Ratnapura">
						<option value="Trincomalee">
						<option value="Vavuniya">						
                    </div>
						</datalist>
					</div>


                    </div>
                    <div class="col6">
                        <div>
                            <label for="country"><i class="fa fa-globe"></i> Country</label><br><br>
                            <input type="text" id="country"  Disabled name="country"  vlaue ="Srilanka" placeholder="Srilanka"><br>
                        </div>
                    </div>
                </div>
                <div class="col12">
                    <div class="">
                        <label for="phn-no"><i class="fa fa-phone"></i>&nbsp; Phone Number</label><br><br>
                        <input type="text" id="phoneNo" required name="phoneNo"  value="<?php echo $row['phoneNo'] ?>" placeholder="0771123344"><br>
                    </div>
                </div> 
                <div class="col12">
                    <div class="">
                        <label for="email"><i class="fa fa-mail"></i>&nbsp; Email</label><br><br>
                        <input type="text" id="email" required name="email"  value="<?php echo $row['email'] ?>" placeholder="xyz@affiliox.xyz"><br>
                    </div>
                </div>                       
                <div class="col12">
                    <div class="sm-text-width ">
                        <label for="channels"><i class="fa fa-sticky-note"></i> &nbsp;Special Note</label><br>
                        <br>
                        <textarea rows="7" name="note" placeholder="note"></textarea><br>
                    </div>
                </div>
                <?php
                    }
                } ?>
                <!-- <form>
                    <div class="col12 ">
                        <div class="col6 labelHover">
                            <label>
                                <div class="boxsummery radio-hover sm-width center margint20">
                                    <input class="sm-width" type="radio" name="delivery-type" />
                                    <h3> Free Delivery </h3>
                                    <p> ETA :within 7-14 Days </p>
                                </div>
                            </label>
                        </div>
                        <div class="col6">
                            <label>
                                <div class="boxsummery  radio-hover sm-width center margint20">
                                    <input type="radio" name="delivery-type" />
                                    <h3> Charged Delivery </h3>
                                    <p> ETA :within 3-6 Days </p>
                                </div>
                            </label>
                        </div>
                    </div>
                </form> -->



                <div class="row">
                    <div class="col12 hrCustom">
                        <hr>
                    </div>
                </div>
           
                </div>
            </div>

            <!-- <div class="col3 ">
                <div class="margint50 marginb50">
                    <div class="boxsummery">
                        <div class="col12 hrCustom">
                            <div class="margint100 center">
                                <h2>Summary</h2>
                                <hr />
                            </div>
                        </div>

                        <div class="col12 hrCustom">
                            <div>
                                <p> SUBTOTAL : Rs 4000.00 </p>
                                <p> SHIPPING : FREE </p>
                                <p> TAXES : Rs 400.00 </p>
                                <hr />
                            </div>
                        </div>
                        <div class="col12 ">
                            <div class="marginb100 center boxsummery">
                                <h4>Total : RS 4400.00</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>

        <div class="row ">

            <div class="col12 ">
                <div class="center marginb50">
                    <button type="submit" value="submit"> &nbsp; Proceed &nbsp; </button>
                    
                </div>
            </div>
        </div>

            </form>
    </div>
        
        <!-- bottom-part-------------------------------------------->

</body>

</html>