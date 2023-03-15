
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
							<a href="{{route('front..home.index')}}"><img src="{{('frontend/images/home/romf.png')}}" alt="" /></a>
						</div>
						
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								
                            <?php
								$customer_id = Session::get('customer_id');
								if($customer_id!=NULL){

							?>
								{{-- <li><a href="{{URL::to('/show-cart')}}"><i class="fa fa-crosshairs"></i> Checkout</a></li> --}}
							<?php
								}else{
								?>
								{{-- <li><a href="{{URL::to('/show-cart')}}"><i class="fa fa-crosshairs"></i> Checkout</a></li> --}}
								<?php
								}
							?>

								

								<li><a href="{{URL::to('/show-cart')}}"><i style="margin-right: 7px" class="fa fa-shopping-cart"></i> Cart</a></li>

							<?php
									$customer_id = Session::get('customer_id');
									if($customer_id!=NULL){

							?>
									<li><a href="{{route('front..home.logout')}}"><i class="fa fa-lock"></i>Logout</a></li>
								<?php

									}else{
								?>
									<li><a href="{{route('login')}}"><i class="fa fa-lock"></i> Login</a></li>
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
								<li><a href="{{route('front..home.index')}}" class="active">Home</a></li>
								<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                       
										<li><a href="{{route('front..home.index')}}">Products</a></li> 
										<li><a href="{{URL::to('/show-cart')}}">Cart</a></li> 
                                        <li><a href="/rom-information">About us</a></li>
                                    </ul>
                                </li> 
								{{-- <li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html">Blog List</a></li>
										<li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li> 
								<li><a href="404.html">404</a></li>
								<li><a href="contact-us.html">Contact</a></li> --}}
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
									{{-- <button type="button" class="btn btn-default get">Details</button> --}}
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
									{{-- <button type="button"  class="btn btn-default get">Details</button> --}}
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
									{{-- <button type="button" class="btn btn-default get">Details</button> --}}
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
        <div class="breadcrumbs">
            <ol class="breadcrumb">
              <li><a href="{{URL::to('/trang-chu')}}">Home</a></li>
              <li class="active">Shopping Cart</li>
            </ol>
        </div>
        <div class="table-responsive cart_info">
            <?php 
            $content = Cart::content();
            ?>
            
            <table class="table table-condensed">
                <thead>
                    <tr class="cart_menu">
                        <td class="image">Product Image</td>
                        <td class="description">Description</td>
                        <td class="price">Price</td>
                        <td class="quantity">Quantity</td>
                        <td class="total">Total</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($content as $v_content)
                    <tr>
                        <td class="cart_product">
                            <a href=""><img src="{{URL::to('uploads/product/'.$v_content->options->image)}}" width="68" alt=""></a>
                        </td>
                        <td class="cart_description">
                            <h4><a class="prod" data-product="{{$v_content->name}}" href="">{{$v_content->name}}</a></h4>
                            <p> ID: {{$v_content->id}} </p>
                        </td>
                        <td class="cart_price">
                            <p>{{number_format($v_content->price).' '.'$'}}</p>
                        </td>
                        <td class="cart_quantity">
                            <div class="cart_quantity_button">
                                <form action="{{URL::to('/update-cart-quantity')}}" method="POST">
                                {{ csrf_field()  }}
                                <input class="cart_quantity_input" type="text" name="cart_quantity" value="{{$v_content->qty}}"  size="2">
                                <input  type="hidden" value="{{$v_content->rowId}}" name="rowId_cart"  class="form-control">
                                <input  type="submit" value="Cập Nhật" name="update_qty"  class="btn btn-default btn-sm">
                            </form>
                            </div>
                        </td>
                        <td class="cart_total">
                            <p class="cart_total_price">
                                <?php
                                    $subtotal = $v_content->price * $v_content->qty;
                                    echo number_format($subtotal).' '.'$';
                                    ?>
                            </p>
                        </td>
                        <td class="cart_delete">
                            <a class="cart_quantity_delete" href="{{URL::to('/delete-to-cart/'.$v_content->rowId)}}"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    @endforeach
                    
                    
                </tbody>
            </table>
        </div>
    </div>
</section> <!--/#cart_items-->

<section id="do_action">
    <div class="container">
        
        <div class="row">
           
            <div class="col-sm-6">
                <div class="total_area">
                    <form id="fpay" action="{{route('momo')}}" method="POST">
                        @csrf
                    <div>
                    <ul>
                        <h4 style="text-align: center">Bill</h4>
                        <li>Total <span>{{Cart::priceTotal(0, ',', '.').''.'$'}}</span></li>
                        <li>Tax <span>{{Cart::tax(0, ',', '.').''.'$'}}</span></li>
                        <li>Shipping Fee <span>Free</span></li>
                        <li>Total Order <span>{{Cart::total(0, ',', '.').''.'$'}}</span></li>
                    </ul>
                    </div>

                    <div style="position: absolute;
                    z-index: 2;
                    right: -568px;
                    top: 0px;
                    padding: 18px;
                    border: 1px solid #e6e4df;
                    padding-bottom: 34px;">
                    <ul style="padding:0";>
                        <h4 style="text-align: center">Information Order</h4>
                        <li style="width: 500px; "><input style=" margin-left: 20px ; width: 423px; box-sizing: border-box; border: 3px solid rgba(133, 120, 120, 0.651); border-radius: 4px;" type="text" name="name" placeholder="Full Name" required/></li>
                        <li style="width: 500px; "><input style=" margin-left: 20px ; width: 423px; box-sizing: border-box; border: 3px solid rgba(133, 120, 120, 0.651); border-radius: 4px;" type="text" name="phone" placeholder="Phone" required /></li>
                        <li style="width: 500px; "><input style=" margin-left: 20px ; width: 423px; box-sizing: border-box; border: 3px solid rgba(133, 120, 120, 0.651); border-radius: 4px;" type="text" name="address" placeholder="Address" required /></li>
                        {{-- <li style="width: 500px; "><input style=" margin-left: 20px ; width: 423px; box-sizing: border-box; border: 3px solid rgba(133, 120, 120, 0.651); border-radius: 4px;" type="text" name="note" placeholder="Note" required/></li> --}}
                        <li><textarea style="margin-left: 20px ; width: 423px; box-sizing: border-box; border: 3px solid rgba(133, 120, 120, 0.651); border-radius: 4px;"  name="note" placeholder="Note Order"  required></textarea></li>
                        <input type="hidden" value=" {{Cart::total(0, ',', '.').''.'$'}}"  name="bill" />
                        <input type="hidden" value=" {{Cart::content()}}"  name="lineItems" />
                        {{--  --}}
                        {{-- @foreach($content as $prod_ord)
                        {{$prod_ord->name}}
                         {{$prod_ord->qty}}
                        {{$prod_ord->id}} 
                        @endforeach  --}}
                        
                        

                    </ul>
                    </div>

                    <input type="hidden" name="amount" value="{{Cart::total(0)}}"/>
                        {{-- <a class="btn btn-default update" href="">Update</a> --}}
                        <?php
								$customer_id = Session::get('customer_id');
								if($customer_id!=NULL){

							?>
								<button class="btn btn-default check_out" type="submit" name="payUrl">Payment Momo</button>
                                <br/>
                                <button id="btn_paypal" class="btn btn-default check_out" type="submit" name="payUrl">Payment Paypal</button>
                                
								<?php
							}else{
								?>
								<a class="btn btn-default check_out" href="{{route('login')}}">Login to payment</a>
								<?php
							}
							?>
                        
                </div>
            </div>
        </div>

    </div>
</section><!--/#do_action-->

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
                    <div  class="address">
                        <img  src="images/home/map.png" alt="" />
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
                            <li><a href="https://www.google.com/maps/place/Ròm+Pet+Shop/@10.7264534,106.6815306,15z/data=!4m2!3m1!1s0x0:0x2269f5662578020b?sa=X&ved=2ahUKEwiAjOCdl8H7AhV5ZWwGHamxCq0Q_BJ6BAhSEAM">Nguyen Van Linh, District 7, Ho Chi Minh City</a></li>
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
                            <li><a href="/rom-information">Rom Information</a></li>
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
<script>
    $(document).ready(function(){
        $("#btn_paypal").click(function(){
            $("#fpay").attr("action","{{route('paypal')}}");
        });
    })
</script>
<div class="hotline-phone-ring-wrap">
    <div class="hotline-phone-ring">
        <div class="hotline-phone-ring-circle"></div>
        <div class="hotline-phone-ring-circle-fill"></div>
        <div class="hotline-phone-ring-img-circle"> <a href="tel:0703594421" class="pps-btn-img"> <img src="https://netweb.vn/img/hotline/icon.png" alt="so dien thoai" width="50"> </a></div>
    </div>
    <div class="hotline-bar">
        <a href="tel:0703594421"> <span class="text-hotline">0703594421</span> </a>
    </div>
</div>
<div class="float-icon-hotline">			
    <ul class ="left-icon hotline">
        <li class="hotline_float_icon"><a target="_blank" rel="nofollow" id="messengerButton" href="https://zalo.me/0703594421"><i class="fa fa-zalo animated infinite tada"></i><span>Zalo</span></a></li>
        <li class="hotline_float_icon"><a target="_blank" rel="nofollow" id="messengerButton" href="https://www.facebook.com/messages/t/107204058026143"><i class="fa fa-messenger animated infinite tada"></i><span>Facebook</span></a></li>
    </ul>		
</div>	
</body>
</html>