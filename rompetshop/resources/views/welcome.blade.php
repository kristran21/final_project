
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Ròm Pet Shop</title>
	<link rel = "icon" href = "{{('frontend/images/home/romf.png')}}" type = "image/x-icon">
    <link href="{{asset('/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('/frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('/frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('/frontend/css/animate.css')}}" rel="stylesheet">
	<link href="{{asset('/frontend/css/main.css')}}" rel="stylesheet">
	<link href="{{asset('/frontend/css/responsive.css')}}" rel="stylesheet">
	<link href="{{asset('/frontend/css/sweetalert.css')}}" rel="stylesheet">
	
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
							<ul class="nav navbar-nav ">
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
		</div>
		<!--/header_top-->
		
		<!--header-middle-->
		<div class="header-middle">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="{{route('front..home.index')}}"><img src="{{asset('frontend/images/home/romf.png')}}" alt="" /></a>
						</div>
						
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								
								{{-- <li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li> --}}
							<?php
								$customer_id = Session::get('customer_id');
								if($customer_id!=NULL){

							?>
								{{-- <li><a href="{{route('front..cart.show_cart')}}"><i class="fa fa-crosshairs"></i> Checkout</a></li> --}}

							<?php
								}else{
								?>
									{{-- <li><a href="{{route('front..cart.show_cart')}}"><i class="fa fa-crosshairs"></i> Checkout</a></li> --}}
								<?php
								}
							?>
								<li><a href="{{URL::to('/show-cart')}}"><i style="margin-right: 7px" class="fa fa-shopping-cart"></i> Cart</a></li>
							<?php
									$customer_id = Session::get('customer_id');
									if($customer_id!=NULL){
										

							?>
									<li>
										
										<a href="{{route('front..home.logout')}}"><i class="fa fa-lock"></i>Logout</a>
									</li>
									
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
					<div class="col-sm-8">
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
                                        <li><a href="#">Products</a></li>
										<li><a href="{{route('front..cart.show_cart')}}">Cart</a></li>
										<li><a href="/rom-information">About us</a></li>
										
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
					<div class="col-sm-4">
						<form action="{{route('front..home.search')}}" method="POST">
							@csrf
						<div class="search_box pull-right">
							<input type="text" name="keywords_submit" placeholder="Search product"/>
							<input type="submit" style="margin-top:0; color:black; width:25%" name="search_items" class="btn btn-primary btn-sm" value="Search"/>
						</div>
					    </form>
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
									{{-- <img src="{{('public/frontend/images/dashboard/pricing.png')}}"  class="pricing" alt="" /> --}}
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
									{{-- <img src="{{('public/frontend/images/dashboard/pricing.png')}}"  class="pricing" alt="" /> --}}
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
									{{-- <img src="{{('public/frontend/images/dashboard/pricing.png')}}" class="pricing" alt="" /> --}}
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
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category Product</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
						 @foreach($category as $key => $cate)
							<div class="panel panel-default">			
								<div class="panel-heading">
									<h4 class="panel-title"><a href="{{route('front..category.show_prod',[$cate->category_id])}}">{{$cate->category_name}}</a></h4>
								</div>
							</div>
						@endforeach 

						</div><!--/category-products-->
					
						<div class="brands_products"><!--brands_products-->
							<h2>Product Type</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									@foreach($brand as $key => $brand)
									<li><a href="{{route('front..brand.show_brand',[$brand->brand_id])}}"> <span class="pull-right"></span>{{$brand->brand_name}}</a></li>
								    @endforeach
								</ul>
							</div>
						</div><!--/brands_products-->
						
						{{-- <div class="price-range"><!--price-range-->
							<h2>Price Range</h2>
							<div class="well text-center">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
								 <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
							</div>
						</div><!--/price-range--> --}}
						
						{{-- <div class="shipping text-center"><!--shipping-->
							<img src="{{('public/frontend/images/dashboard/shipping.jpg')}}" alt="" />
						</div><!--/shipping--> --}}
					
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					
				@yield('content')
					
				</div>
			</div>
		</div>
	</section>
	
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
		<div>
			<h1 style="text-align: center;" >Map</h1>
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15680.416416392198!2d106.6815306!3d10.7264534!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2269f5662578020b!2sR%C3%B2m%20Pet%20Shop!5e0!3m2!1svi!2s!4v1664648726071!5m2!1svi!2s" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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
	<script type="text/javascript">
	
	// $(document).ready(function(){
	// 	$('.add-to-cart').click(function(){
	// 		var id= $(this).data('id_product');
	// 		var cart_product_id = $('.cart_product_id_' + id).val();
	// 		var cart_product_name = $('.cart_product_name_' + id).val();
	// 		var cart_product_image = $('.cart_product_image_' + id).val();
	// 		var cart_product_price = $('.cart_product_price_' + id).val();
	// 		var cart_product_qty = $('.cart_product_qty_' + id).val();
	// 		var _token = $('input[name="_token"]').val();
            
	// 		$.ajax({
	// 			url: '{{url('/add-cart-ajax')}}',
    //                 method: 'POST',
    //                 data:{cart_product_id:cart_product_id,cart_product_name:cart_product_name,cart_product_image:cart_product_image,cart_product_price:cart_product_price,cart_product_qty:cart_product_qty,_token:_token},
					
	// 				success:function(data){
	// 					swal({
	// 							title:"Đã thêm sản phẩm vào giỏ hàng",
	// 							text: "Bạn có thể mua hàng tiếp hoặc tới giỏ hàng để tiến hành thanh toán",
	// 							showCancelButton: true,
	// 							cancelButtonText: "Xem tiếp",
	// 							confirmButtonClass: "btn-success",
	// 							confirmButtonText: "Đi đến giỏ hàng",
	// 							closeOnConfirm: false
	// 							},
	// 							function() {
	// 							window.location.href = "{{url('/gio-hang')}}";
	// 							});
								
	// 								}
	// 		});
	// 	 });
	// });
	</script>
	{{-- <script type="text/javascript" src="https://web.cmbliss.com/webtools/hotline/js/hotline.js"></script><script type="text/javascript">$("body").hotline({phone:"0703594421",p_bottom:true,bottom:0,p_left:true,left:0,bg_color:"#e60808",abg_color:"rgba(230, 8, 8, 0.7)",show_bar:true,position:"fixed",});</script> --}}
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