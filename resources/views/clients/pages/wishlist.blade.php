@section('page','WISHLIST')
<!doctype html>
<html class="no-js" lang="">

<!-- Mirrored from irsfoundation.com/tf/ecommerce/ecomoshop/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Nov 2020 08:33:48 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>EcomoShop || Home</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" type="image/png" href="{{asset('clients/img/favicon.png')}}">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="{{asset('clients/css/normalize.css')}}">
		<!-- font stylesheet.css -->
        <link rel="stylesheet" href="{{asset('clients/fonts/stylesheet.css')}}">
		<!-- owl.carousel.min.css -->
        <link rel="stylesheet" href="{{asset('clients/css/owl.carousel.min.css')}}">
		<!-- font-awesome.min.css -->
        <link rel="stylesheet" href="{{asset('clients/css/font-awesome.min.css')}}">
		<!-- magnific-popup.css -->
        <link rel="stylesheet" href="{{asset('clients/css/magnific-popup.css')}}">
		<!-- animate.css -->
        <link rel="stylesheet" href="{{asset('clients/css/animate.css')}}">
		<!-- slicknav.min.css -->
        <link rel="stylesheet" href="{{asset('clients/css/slicknav.min.css')}}">
		<!-- bootstrap css -->
        <link rel="stylesheet" href="{{asset('clients/css/bootstrap.min.css')}}">
		<!-- style.css -->
        <link rel="stylesheet" href="{{asset('clients/style.css')}}">
		<!-- responsive.css -->
        <link rel="stylesheet" href="{{asset('clients/css/responsive.css')}}">

		<!-- Color Css Files Start -->
		<link href="{{asset('clients/css/switcher/switcher.css')}}" rel="stylesheet">
		<link href="{{asset('clients/css/switcher/style-1.css')}}" rel="stylesheet" id="colors">
		<!-- Color Css Files End -->

        <script src="{{asset('clients/js/vendor/modernizr-2.8.3.min.js')}}"></script>
        <style>
            .ok1 li a:hover{
                color:white !important;
            }
            .nav1 {
                width: 100%;
                margin: 0;
                padding: 0;
                display: flex;
                justify-content: space-around;
            }
            .nav1 li{
                padding: 27px 0px !important;
            }
            .nav1 li a{
                color: white !important;
            }
            .nav1 li a:hover{
                color: #7d2505 !important;
            }
            .ok.fa.fa-heart,.ok.fa-shopping-cart,.ok.fa-search{
                color: white !important;
            }
            .ok.fa.fa-heart:hover,.ok.fa-shopping-cart:hover,.ok.fa-search:hover{
                color: #7d2505 !important;
            }
            .size li:hover,a:hover{
                background-color: #f25c27;
                color:aliceblue;
            }
            .contact-item{
                height: 190px;
            }
        </style>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

		<div class="overlay-bg"></div>
		<header class="home2-header-area">
			<div class="header-top bg-2">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-lg-7 col-sm-9 col-xs-12">
							<div class="profile-wrap">
								<ul class="ok1">
									@if(session()->has('customer'))
									<li><a href="{{route('client.account')}}"><i class="fa fa-user"></i>My Account</a></li>
									<li><a href="checkout.html"><i class="fa fa-key"> </i> CheckOut</a></li>
									<li><a href="cart.html"><i class="fa fa-shopping-cart"></i>Shoping Cart</a></li>
									<li><a href="wishlist.html"><i class="fa fa-heart"></i>Wishlist</a></li>
									<li><a href="{{route('client.logout')}}"><i class="fa fa-sign-in"></i>Logout</a></li>
                                    @else
                                    <li><a href="{{route('client.login')}}"><i class="fa fa-sign-in"></i>Login</a></li>
                                    @endif
								</ul>
							</div>
						</div>
						<div class="col-md-4 col-lg-5 col-sm-3 col-xs-12">
							<div class="header-top-right text-right">
								<ul>
									<li><a href="#">English <i class="fa fa-angle-down"></i></a>
										<ul>
											<li><a href="#">Hindi</a></li>
											<li><a href="#">Bangla</a></li>
											<li><a href="#">Turki</a></li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="header-muddil-area bg-1">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-4 col-xs-12">
							<div class="logo">
								<h1><a href="{{route('client.index')}}"><span>E</span>como<span>S</span>hop</a></h1>
							</div>
						</div>
						<div class="col-md-7 hidden-sm hidden-xs">
							<div class="mainmenu">
								<ul id="navigation" class="nav1">
									<li><a href="index.html">Home</a></li>
									<li><a href="Shop.html">Cart</i></a></li>
									<li><a href="blog.html">Blog</i></a></li>
									<li><a href="#">About us</a></li>
									<li><a href="contact.html">Contact</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-2 col-sm-6 col-xs-8">
							<div class="header-bottom-right text-right">
								<ul>
									<li><a href="javascript:void(0);"><i class="ok fa fa-heart"></i> <span>2</span></a>
										<ul>
											<li class="wishlist">
												<div class="wishlist-image">
													<img src="{{asset('clients/img/product/small/4.png')}}" alt="" />
												</div>
												<div class="wishlist-content">
													<a href="#">Man Product</a>
													<p>$30.00</p>
												</div>
											</li>
										</ul>
									</li>
									<li><a href="javascript:void(0);"><i class="ok fa fa-shopping-cart"></i> <span>3</span></a>
										<ul class="wishlist-wrap">
											<li class="wishlist">
												<div class="wishlist-image">
													<img src="{{asset('clients/img/product/small/2.png')}}" alt="" />
												</div>
												<div class="wishlist-content">
													<a href="#">Woman Product</a>
													<p>$30.00</p>
												</div>
											</li>
										</ul>
									</li>
									<li><a href="javascript:void(0);"><i class="ok fa fa-search"></i></a>
										<ul class="search">
											<li class="search-wrap">
												<form action="#">
													<input type="text" placeholder="Search Here.."/>
													<button><i class="fa fa-search"></i></button>
												</form>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- header-end -->


    <!-- breadcumb-area start -->
		<div class="bradcumb-area black-opacity bg-img-3">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="bradcumb-wrap">
							<h2>@yield('page')</h2>
							<ul>
								<li><a href="index.html">Home</a></li>
								<li>|</li>
								<li><a href="shop-2.html">Shop</a></li>
								<li>|</li>
								<li>@yield('page')</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- breadcumb-area end -->

		<!-- cart-area start -->
		<div class="cart-area ptb-100 bg-4">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<h3 class="cart-title">Wishlist</h3>
						<div class="table-responsive">
							<table>
								<thead>
									<tr>
										<th>Remove</th>
										<th>Image</th>
										<th>Product Name</th>
										<th>UNIT PRICE</th>
										<th>STOCK STATUS </th>
										<th>TOTAL</th>
									</tr>
								</thead>
								<tbody>
                                    {{-- @dd($wishlist) --}}
                                    @foreach($wishlist as $value)
									<tr>
										<td><a href="{{route('wishlist.delete',$value->id)}}"  onclick="return confirm('Delete Product -{{ $value->product_details->products->name }}?')"><i class="fa fa-times"></i></a></td>
										<td><img src="{{asset($value->product_details->products->avatar)}}" alt="" /></td>
										<td><p>{{$value->product_details->products->name}}</p></td>
                                        @if($value->product_details->discount > 0)
										<td><span>{{number_format($value->product_details->price-($value->product_details->price*$value->product_details->discount/100))}} đ</span> <del>{{number_format($value->product_details->price)}} đ</del></td>
                                        @else
                                        <td><span>{{number_format($value->product_details->price)}} đ</span></td>
                                        @endif
										<td><span class="stok">In Stock</span></td>
										<td><button>Add to Cart</button></td>
									</tr>
                                    @endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- cart-area end -->

   @include('clients.components.footer')
