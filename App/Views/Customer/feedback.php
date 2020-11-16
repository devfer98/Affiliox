<html>

<head>
    <title>Affiliox-Completed-Orders</title>
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
        
        <div class="row center">
            <div class="col12">
                <div class="margint50 marginb50 ">
                    <h2>Product Feedback</h2>
                </div>
                <div class="row">
                    <div clas="sm-width center">
                        <div class="boxsummery shoppingBlock marginb100 margint20 center ">
                            <div class="row">
                                <div class="col3 imgw">
                                    <img class="images" src="/images/Products/drone.jpg" style="width:100%">
                                </div>

                                <div class="col4">
                                    <div class="margint20 left">
                                        <h3>Inspire 1</h3>
                                        <p>Price:Rs 4000.00</p>
                                        <p>Delivery:Free</p>
                                    </div>
                                </div>

                                <div class="col2 search label">
                                    <div class="margint20">
                                        <label for="quantity"><i class="fa fa-truck-loading"></i>&nbsp;Quantity</label>
                                        <input style="z-index: 1;" type="number" id="quantity" name="quantity" readonly
                                            placeholder="1"> <br>
                                    </div>
                                </div>

                                <div class="col3">
                                    <div class="margint20">
                                        <h4>ETA : 24/Nov/2020</h4>

                                    </div>
                                </div>
                            </div>


                            <div class="row left margint20 ">
                                <h4>Store Name :Shan's Tech area</h4></br>
                                <h4>Order Code :213ZWE31YASD092</h4>

                            </div>

                            <form method="POST" action="../Buyer/SubmitFeedback">
                                <div class="row center">
                                    <div class="col12 center ">

                                        <h2 class="margint50">Rate This product</h2>
                                        <div class="center ">
                                            <fieldset class="rating marginr50p">
                                                <input type="radio" id="star5" name="rating" value="5" required /><label
                                                    class="full" for="star5"></label>
                                                <input type="radio" id="star4half" name="rating" value="4.5" /><label
                                                    class="half" for="star4half"></label>
                                                <input type="radio" id="star4" name="rating" value="4" /><label
                                                    class="full" for="star4"></label>
                                                <input type="radio" id="star3half" name="rating" value="3.5" /><label
                                                    class="half"></label>
                                                <input type="radio" id="star3" name="rating" value="3" /><label
                                                    class="full" for="star3"></label>
                                                <input type="radio" id="star2half" name="rating" value="2.5" /><label
                                                    class="half" for="star2half"></label>
                                                <input type="radio" id="star2" name="rating" value="2" /><label
                                                    class="full" for="star2"></label>
                                                <input type="radio" id="star1half" name="rating" value="1.5" /><label
                                                    class="half" for="star1half"></label>
                                                <input type="radio" id="star1" name="rating" value="1" /><label
                                                    class="full" for="star1"></label>
                                                <input type="radio" id="starhalf" name="rating" value="0.5" /><label
                                                    class="half" for="starhalf"></label>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>


                                <div class="row rowMargin label search">
                                    <div class="col12">
                                        <div>
                                            <label for="message"><i class="fas fa-envelope-square"></i>&nbsp;Your
                                                Feedback</label><br>
                                            <br>
                                            <textarea rows="7" cols="55" name="description" minlength="5"
                                                maxlength="250" required placeholder="...."></textarea><br>
                                            <p class="font-heavy">Your Feedback will help many customers</p>
                                        </div>
                                    </div>
                                </div>


                                <div class="row rowMargin marginb100 search">
                                    <div class="col12 center">
                                        <div class=>
                                            <button type="submit" value="submit">Submit Feedback</button>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>

                    </div>
                </div>
                <!-- Loop area --------------------------------------------->


            </div>

        </div>
   
     </div>
    <!-- bottom-part-------------------------------------------->

</body>

</html>