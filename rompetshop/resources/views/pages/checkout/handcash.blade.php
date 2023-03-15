<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Ròm | E-Shopper</title>
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/animate.css')}}" rel="stylesheet">
	<link href="{{asset('frontend/css/main.css')}}" rel="stylesheet">
	<link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/sweetalert.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
                                <li><a href="#"><i class="fa fa-phone"></i> +84 703594421</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> rompetshop@gmail.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.html"><img src="{{('frontend/images/home/romf.png')}}" alt="" /></a>
						</div>
						
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-user"></i> Account</a></li>
								<li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
							<?php
								$customer_id = Session::get('customer_id');
								if($customer_id!=NULL){

							?>
								<li><a href="{{URL::to('/checkout')}}"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<?php
								}else{
								?>
								<li><a href="{{URL::to('/login-checkout')}}"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<?php
								}
							?>

								

								<li><a href="{{URL::to('/show-cart')}}"><i class="fa fa-shopping-cart"></i> Cart</a></li>

							<?php
									$customer_id = Session::get('customer_id');
									if($customer_id!=NULL){

							?>
									<li><a href="{{URL::to('/logout-checkout')}}"><i class="fa fa-lock"></i>Logout</a></li>
								<?php

									}else{
								?>
									<li><a href="{{URL::to('/login-checkout')}}"><i class="fa fa-lock"></i> Login</a></li>
								<?php
									}
								?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="{{URL::to('/trang-chu')}}" class="active">Home</a></li>
								<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="{{URL::to('/trang-chu')}}">Products</a></li>
										<li><a href="{{URL::to('/show-cart')}}">Cart</a></li> 
		
                                    </ul>
                                </li> 
								{{-- <li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="{{URL::to('/error')}}">Blog List</a></li>
										<li><a href="{{URL::to('/error')}}">Blog Single</a></li>
                                    </ul>
                                </li>  --}}
								{{-- <li><a href="{{URL::to('/error')}}">404</a></li> --}}
								{{-- <li><a href="{{URL::to('/error')}}">Contact</a></li> --}}
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->

    <section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>Ròm | </span>Pet Shop</h1>
									<h2>Reptile Shop</h2>
									<p> Helping buyers have a better overview of the colorful reptile world. </p>
									<button type="button" class="btn btn-default get">Details</button>
								</div>
								<div class="col-sm-6">
									<img src="{{asset('frontend/images/home/gecko3.jpg')}}" class="girl img-responsive" alt="" />
									{{-- <img src="{{('public/frontend/images/home/pricing.png')}}"  class="pricing" alt="" /> --}}
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>Ròm | </span>Pet Shop</h1>
									<h2>Reptile Shop</h2>
									<p> Helping buyers have a better overview of the colorful reptile world.</p>
									<button type="button"  class="btn btn-default get">Details</button>
								</div>
								<div class="col-sm-6">
									<img src="{{asset('frontend/images/home/gecko2.jpg')}}" class="girl img-responsive" alt="" />
									{{-- <img src="{{('public/frontend/images/home/pricing.png')}}"  class="pricing" alt="" /> --}}
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
									<h1><span>Ròm | </span>Pet Shop</h1>
									<h2>Reptile Shop</h2>
									<p> Helping buyers have a better overview of the colorful reptile world. </p>
									<button type="button" class="btn btn-default get">Details</button>
								</div>
								<div class="col-sm-6">
									<img src="{{asset('frontend/images/home/gecko1.jpg')}}" class="girl img-responsive" alt="" />
									{{-- <img src="{{('public/frontend/images/home/pricing.png')}}" class="pricing" alt="" /> --}}
								</div>
							</div>
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->

<section id="cart_items">
    <div class="container">
        
        <div class="jumbotron text-center">
            <h1 class="display-3">Thank You for your order !</h1>
            <p class="lead"><strong>Delivery time will be 3-4 days. Thank you for your support.</strong> </p>
            <hr>
            <p>
              Having trouble? <a href="https://pranx.com/hacker/">Contact us</a>
            </p>
            <p class="lead">
              <a class="btn btn-primary btn-sm" href="{{URL::to('/trang-chu')}}" role="button">Continue to homepage</a>
            </p>
          </div>
    </div>

</section> <!--/#cart_items-->


<footer id="footer"><!--Footer-->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <div class="companyinfo">
                        <h2><span>Ròm Pet Shop</span></h2>
                        <p> is a website that specializes in selling reptiles. Thereby helping buyers have a better overview of the colorful animal world.</p>
                    </div>
                </div>
                <div class="col-sm-7">
                    
                    <div class="col-sm-3">
                        <div class="video-gallery text-center">
                            <a href="#">
                                <div class="iframe-img">
                                    <img src="{{asset('frontend/images/home/gecko3.jpg')}}" alt="" />
                                </div>
                                <div class="overlay-icon">
                                    <i class="fa fa-play-circle-o"></i>
                                </div>
                            </a>
                            <p>Gecko</p>
                            <h2></h2>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="video-gallery text-center">
                            <a href="#">
                                <div class="iframe-img">
                                    <img src="{{asset('frontend/images/home/beard.jpg')}}" alt="" />
                                </div>
                                <div class="overlay-icon">
                                    <i class="fa fa-play-circle-o"></i>
                                </div>
                            </a>
                            <p>Bearded Dragon</p>
                            <h2></h2>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="video-gallery text-center">
                            <a href="#">
                                <div class="iframe-img">
                                    <img src="{{asset('frontend/images/home/iguana.png')}}" alt="" />
                                </div>
                                <div class="overlay-icon">
                                    <i class="fa fa-play-circle-o"></i>
                                </div>
                            </a>
                            <p>Iguana</p>
                            <h2></h2>
                        </div>
                    </div>
                    
                
                </div>
                <div class="col-sm-3">
                    <div class="address">
                        <img src="images/home/map.png" alt="" />
                        <p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="footer-widget">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Address</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Nguyen Van Linh, District 7, Ho Chi Minh City</a></li>
                            {{-- <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Order Status</a></li>
                            <li><a href="#">Change Location</a></li>
                            <li><a href="#">FAQ’s</a></li> --}}
                        </ul>
                    </div>
                </div>
                
                {{-- <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Policies</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Terms of Use</a></li>
                             <li><a href="#">Privecy Policy</a></li>
                            <li><a href="#">Refund Policy</a></li>
                            <li><a href="#">Billing System</a></li>
                            <li><a href="#">Ticket System</a></li> 
                        </ul>
                    </div>
                </div> --}}
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>About Rom</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Rom Information</a></li>
                            {{-- <li><a href="#">Careers</a></li>
                            <li><a href="#">Store Location</a></li>
                            <li><a href="#">Affillate Program</a></li>
                            <li><a href="#">Copyright</a></li> --}}
                        </ul>
                    </div>
                </div>
                {{-- <div class="col-sm-3 col-sm-offset-1">
                    <div class="single-widget">
                        <h2>About Shop</h2>
                        <form action="#" class="searchform">
                            <input type="text" placeholder="Your email address" />
                            <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                            <p>Get the most recent updates from <br />our site and be updated your self...</p>
                        </form> 
                    </div>
                </div> --}}
                
            </div>
        </div>
    </div>
    
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p class="pull-left">Copyright © 2022 Ròm Pet Shop Inc. All rights reserved.</p>
                <p class="pull-right">Designed by <span><a style="text-decoration:none" target="_blank" href="#">Kri$</a></span></p>
            </div>
        </div>
    </div>
    
</footer><!--/Footer-->
    
    
    
    <script src="{{asset('frontend/js/jquery.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('frontend/js/price-range.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('frontend/js/main.js')}}"></script>
    <script src="{{asset('frontend/js/sweetalert.min.js')}}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </body>
    </html>