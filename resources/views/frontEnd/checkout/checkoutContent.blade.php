
<html>
    <head>
        <title>@yield('Title')</title>
        <!-- for-mobile-apps -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Smart Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
            function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- //for-mobile-apps -->
        <link href="{{asset('frontEnd/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
        <link rel="stylesheet" href="{{asset('frontEnd/css/flexslider.css')}}" type="text/css" media="screen" />

        <!-- pignose css -->
        <link href="{{asset('frontEnd/css/pignose.layerslider.css')}}" rel="stylesheet" type="text/css" media="all" />

        <link rel="stylesheet" type="text/css" href="{{asset('frontEnd/css/jquery-ui.css')}}">
        <!-- //pignose css -->
        <link href="{{asset('frontEnd/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />

        <!-- single -->
        <script src="{{asset('frontEnd/js/imagezoom.js')}}"></script>
        <script src="{{asset('frontEnd/js/jquery.flexslider.js')}}"></script>
        <!-- single -->

        <!-- js -->
        <script type="text/javascript" src="{{asset('frontEnd/js/jquery-2.1.4.min.js')}}"></script>
        <!-- //js -->
        <!-- cart -->
        <script src="{{asset('frontEnd/js/simpleCart.min.js')}}"></script>
        <!-- cart -->
        <!-- for bootstrap working -->
        <script type="text/javascript" src="{{asset('frontEnd/js/bootstrap-3.1.1.min.js')}}"></script>
        <!-- //for bootstrap working -->
        <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
        <script src="{{asset('frontEnd/js/jquery.easing.min.js')}}"></script>
    </head>
    <body>
        <!-- header -->
         @include('frontEnd.includes.header')
        <!-- //header -->
        <!-- header-bot -->
        <div class="header-bot">
            <div class="container">
                <div class="col-md-3 header-left">
                    <h1><a href="index.html"><img src="images/logo3.jpg"></a></h1>
                </div>
                <div class="col-md-6 header-middle">
                    <form>
                        <div class="search">
                            <input type="search" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {
                                        this.value = 'Search';
                                    }" required="">
                        </div>
                        <div class="section_room">
                            <select id="country" onchange="change_country(this.value)" class="frm-field required">
                                <option value="null">All categories</option>
                                <option value="null">Electronics</option>     
                                <option value="AX">kids Wear</option>
                                <option value="AX">Men's Wear</option>
                                <option value="AX">Women's Wear</option>
                                <option value="AX">Watches</option>
                            </select>
                        </div>
                        <div class="sear-sub">
                            <input type="submit" value=" ">
                        </div>
                        <div class="clearfix"></div>
                    </form>
                </div>
                <div class="col-md-3 header-right footer-bottom">
                    <ul>
                        <li><a href="#" class="use1" data-toggle="modal" data-target="#myModal4"><span>Login</span></a>

                        </li>
                        <li><a class="fb" href="#"></a></li>
                        <li><a class="twi" href="#"></a></li>
                        <li><a class="insta" href="#"></a></li>
                        <li><a class="you" href="#"></a></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- //header-bot -->
        <!-- banner -->
       @include('frontEnd.includes.menu')
        <!-- //banner-top -->
        <!-- banner -->
        <div class="page-head">
            <div class="container">
                <h3>Check Out</h3>
            </div>
        </div>
        <!-- //banner -->
        <!-- check out -->
        
        
        <!-- //check out -->
        <!-- //product-nav -->
        <div class="coupons">
            <div class="container">
                <div class="coupons-grids text-center">
                    <div class="col-md-3 coupons-gd">
                        <h3>Buy your product in a simple way</h3>
                    </div>
                    <div class="col-md-3 coupons-gd">
                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                        <h4>LOGIN TO YOUR ACCOUNT</h4>
                        <p>Neque porro quisquam est, qui dolorem ipsum quia dolor
                            sit amet, consectetur.</p>
                    </div>
                    <div class="col-md-3 coupons-gd">
                        <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                        <h4>SELECT YOUR ITEM</h4>
                        <p>Neque porro quisquam est, qui dolorem ipsum quia dolor
                            sit amet, consectetur.</p>
                    </div>
                    <div class="col-md-3 coupons-gd">
                        <span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span>
                        <h4>MAKE PAYMENT</h4>
                        <p>Neque porro quisquam est, qui dolorem ipsum quia dolor
                            sit amet, consectetur.</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <!-- footer -->
        <div class="footer">
            <div class="container">
                <div class="col-md-3 footer-left">
                    <h2><a href="index.html"><img src="images/logo3.jpg" alt=" " /></a></h2>
                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor
                        sit amet, consectetur, adipisci velit, sed quia non 
                        numquam eius modi tempora incidunt ut labore 
                        et dolore magnam aliquam quaerat voluptatem.</p>
                </div>
                <div class="col-md-9 footer-right">
                    <div class="col-sm-6 newsleft">
                        <h3>SIGN UP FOR NEWSLETTER !</h3>
                    </div>
                    <div class="col-sm-6 newsright">
                        <form>
                            <input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {
                                        this.value = 'Email';
                                    }" required="">
                            <input type="submit" value="Submit">
                        </form>
                    </div>
                    <div class="clearfix"></div>
                    <div class="sign-grds">
                        <div class="col-md-4 sign-gd">
                            <h4>Information</h4>
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="mens.html">Men's Wear</a></li>
                                <li><a href="womens.html">Women's Wear</a></li>
                                <li><a href="electronics.html">Electronics</a></li>
                                <li><a href="codes.html">Short Codes</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>

                        <div class="col-md-4 sign-gd-two">
                            <h4>Store Information</h4>
                            <ul>
                                <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Address : 1234k Avenue, 4th block, <span>Newyork City.</span></li>
                                <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>Email : <a href="mailto:info@example.com">info@example.com</a></li>
                                <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>Phone : +1234 567 567</li>
                            </ul>
                        </div>
                        <div class="col-md-4 sign-gd flickr-post">
                            <h4>Flickr Posts</h4>
                            <ul>
                                <li><a href="single.html"><img src="images/b15.jpg" alt=" " class="img-responsive" /></a></li>
                                <li><a href="single.html"><img src="images/b16.jpg" alt=" " class="img-responsive" /></a></li>
                                <li><a href="single.html"><img src="images/b17.jpg" alt=" " class="img-responsive" /></a></li>
                                <li><a href="single.html"><img src="images/b18.jpg" alt=" " class="img-responsive" /></a></li>
                                <li><a href="single.html"><img src="images/b15.jpg" alt=" " class="img-responsive" /></a></li>
                                <li><a href="single.html"><img src="images/b16.jpg" alt=" " class="img-responsive" /></a></li>
                                <li><a href="single.html"><img src="images/b17.jpg" alt=" " class="img-responsive" /></a></li>
                                <li><a href="single.html"><img src="images/b18.jpg" alt=" " class="img-responsive" /></a></li>
                                <li><a href="single.html"><img src="images/b15.jpg" alt=" " class="img-responsive" /></a></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <p class="copy-right">&copy 2016 Smart Shop. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
            </div>
        </div>
        <!-- //footer -->
        <!-- login -->
        <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content modal-info">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
                    </div>
                    <div class="modal-body modal-spa">
                        <div class="login-grids">
                            <div class="login">
                                <div class="login-bottom">
                                    <h3>Sign up for free</h3>
                                    <form>
                                        <div class="sign-up">
                                            <h4>Email :</h4>
                                            <input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                        this.value = 'Type here';}" required="">	
                                        </div>
                                        <div class="sign-up">
                                            <h4>Password :</h4>
                                            <input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                        this.value = 'Password';}" required="">

                                        </div>
                                        <div class="sign-up">
                                            <h4>Re-type Password :</h4>
                                            <input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                        this.value = 'Password';
                                                    }" required="">

                                        </div>
                                        <div class="sign-up">
                                            <input type="submit" value="REGISTER NOW" >
                                        </div>

                                    </form>
                                </div>
                                <div class="login-right">
                                    <h3>Sign in with your account</h3>
                                    <form>
                                        <div class="sign-in">
                                            <h4>Email :</h4>
                                            <input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                        this.value = 'Type here';}" required="">	
                                        </div>
                                        <div class="sign-in">
                                            <h4>Password :</h4>
                                            <input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                        this.value = 'Password';
                                                    }" required="">
                                            <a href="#">Forgot password?</a>
                                        </div>
                                        <div class="single-bottom">
                                            <input type="checkbox"  id="brand" value="">
                                            <label for="brand"><span></span>Remember Me.</label>
                                        </div>
                                        <div class="sign-in">
                                            <input type="submit" value="SIGNIN" >
                                        </div>
                                    </form>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //login -->
    </body>
</html>