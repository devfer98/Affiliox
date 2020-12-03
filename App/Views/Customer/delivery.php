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

        <div class="row margint50 sm-center ">
            <div class="col9 search label ">
                <div class="col12 ">
                    <div class="hrCustom">
                        <h2> Delivery Details</h2>
                        <hr />
                    </div>
                </div>
                <div class="col12">
                    <div>
                        <label for="fname"><i class="fa fa-user"></i> &nbsp;Full Name</label><br><br>
                        <input type="text" id="fname" name="fullname" placeholder="Kamal sachintha"> <br>
                    </div>
                </div>
                <div class="col12">
                    <div class="sm-text-width ">
                        <label for="channels"><i class="fa fa-address-book"></i> &nbsp;Address Line</label><br>
                        <br>
                        <textarea rows="7" name="description" placeholder="Address lines 1,2"></textarea><br>
                    </div>
                </div>
                <div class="col12">
                    <div class="col6">
                        <div>
                            <label for="city"><i class="fa fa-city"></i> City</label><br><br>
                            <input type="text" id="city" name="acity" placeholder="Warakapola">
                        </div>
                    </div>
                    <div class="col6">
                        <div>
                            <label for="country"><i class="fa fa-globe"></i> Country</label><br><br>
                            <input type="text" id="country" name="country" placeholder="Srilanka"><br>
                        </div>
                    </div>
                </div>
                <div class="col12">
                    <div class="">
                        <label for="phn-no"><i class="fa fa-phone"></i>&nbsp; Phone Number</label><br><br>
                        <input type="text" id="phn-no" name="phn-no" placeholder="0771123344"><br>
                    </div>
                </div>
                <form>
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
                </form>



                <div class="row">
                    <div class="col12 hrCustom">
                        <hr>
                    </div>
                </div>
            </div>

            <div class="col3 ">
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
            </div>
        </div>

        <div class="row ">

            <div class="col12 ">
                <div class="center marginb50">
                    <button type="submit" value="submit"> &nbsp; Proceed To Payment &nbsp; </button>
                    <button type="reset" value="reset"> &nbsp; Reset &nbsp; </button>
                </div>
            </div>
        </div>

    </div>
        
        <!-- bottom-part-------------------------------------------->

</body>

</html>