<html>

<head>
    <title>Affiliox-Product</title>
    <link rel="shortcut icon" href="/images/Logo/logoOnly.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="/css/Customer/common.css" />
    <link rel="stylesheet" type="text/css" href="/css/Customer/customer-grid.css" />
    <script type="text/javascript" src="/js/Customer/nav-fixed.js"></script>
    <link rel="stylesheet" type="text/css" href="/css/Customer/market/prod.css" />
    <script type="text/javascript" src="/js/Customer/transition.js"></script>
    <script src="https://kit.fontawesome.com/6cdc06033e.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>

    <!---Navigation bar-------------------------------------------->
    <div class="container">

        <!-- Container content  --------------------------------------------->
        <!-- Image container --------------------------------------------->
        <div class="row margint50">
            <div class="col6">

                <div class="col12 holder center">
                    <img class="images" src="/images/Products/drone.jpg" style="width:100%">
                    <img class="images" src="/images/Products/drone3.jpg" style="width:100%">
                    <img class="images" src="/images/Products/drone2.jpg" style="width:100%">
                    <div class="margint20">
                        <button class="" onclick="increment(-1)">&nbsp;&#10094;&nbsp;</button>
                        <button class="" onclick="increment(1)">&nbsp;&#10095;&nbsp;</button>
                    </div>
                </div>



            </div>
            <!-- Prod Details --------------------------------------------->
            <div class="col6">
                <div class="row">
                    <div class="col12 hrCustom">
                        <h1>Inspire 1</h1>
                        <hr style="width:60%" />
                    </div>
                </div>


                <div class="col12">
                    <div class="col6 quantity center">
                        <div class="margint50">
                            <label for="price"><i class="fa fa-dollar-sign"></i> &nbsp;Price</label><br>
                            <input style="width: 60%;" type="number" id="price" name="price" placeholder="4000.00"
                                readonly> <br>
                        </div>
                        <p id="test" class="center">Price without Delivery Charges</p>
                    </div>

                    <div class="col6 quantity center">
                        <form action="" method="POST">
                            <div class="margint50">
                                <label for="quantity"><i class="fa fa-truck-loading"></i>
                                    &nbsp;Quantity</label><br>
                                <input style="z-index: 1;" type="number" id="quantity" name="quantity" placeholder="1">
                                <br>
                            </div>

                        </form>
                    </div>
                </div>
                <div class="col12">
                    <div class="row col11">
                        <h4>Description:</h4>
                        <p>The Inspire 1 was a revelation. The first filmmaking drone in
                            the world to integrate an HD video transmission system, 360°
                            rotating gimbal and a 4K camera,
                            as well as the simplicity of app control. The launches of the
                            Zenmuse X5 and X5R cameras further cemented the Inspire as a
                            critical tool for filmmakers around the globe.</p>
                    </div>
                </div>
                <div class="col12 nav-bar center">
                    <button onclick="location.href='../User/shoppingCart'">Add to cart </button>
                    <button onclick="location.href='../Buyer/Delivery'">Delivery Charges </button>
                </div>
            </div>

        </div>


        <!-- SIMILER PRODUCTS-------------------------------------------->
        <div class="row">

            <div class="col12 center">
                <div class="margint50 marginb50">
                    <h1> Similer Products</h1>
                    <hr>
                </div>
            </div>
        </div>
        <div class="row center img-margintop">
            <div class="col4 imgw">
                <div class="center imgbox marginb100 ">
                    <img src="/images/products/nike-shoe.png"><br><br>
                    <label name="pht1"> Nike-300s Rs:3000.00</label>
                </div>
            </div class="marginb100">
            <div class="col4 imgw">
                <div class="center imgbox marginb100">
                    <img src="/images/Products/i-phone.png"><br><br>
                    <label name="pht2">IphoneXs Rs:80000.00</label>
                </div>
            </div>
            <div class="col4 imgw">
                <div class="center imgbox marginb100">
                    <img src="/images/Products/toy.png"><br><br>
                    <label name="pht3"> Old Car model Red Rs5000.00</label>
                </div>
            </div>
        </div>
        <!-- Feedback------------------------------------------->

        <div class="row">
            <div class="col12 pad">
                <h2>Reviews</h2>
            </div>
        </div>
        <!-- Feedback user account------------------------------------------->
        <div class="row">

            <div class="col2 center">
                <div class="margint20">
                    <i class="fas fa-user-astronaut fa-4x"></i>
                    <p>Username :1234</p>
                </div>
            </div>
            <!-- Feedback textarea------------------------------------------->
            <div class="col10 marginb50">

                <div class="marginb50">

                    <textarea readonly class="row" rows="3" name="comment-space"> Good Quality and Sound, for the given price.
              </textarea><br>
                </div>
            </div>
        </div>
        <!-- bottom-part-------------------------------------------->

    </div>
    <script>
    show(Index);
    </script>
    
</body>

</html>