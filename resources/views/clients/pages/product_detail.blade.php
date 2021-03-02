@section('page','PRODUCT DETAIL')
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
									<li><a href="login.html"><i class="fa fa-user"></i>My Account</a></li>
									<li><a href="checkout.html"><i class="fa fa-key"> </i> CheckOut</a></li>
									<li><a href="cart.html"><i class="fa fa-shopping-cart"></i>Shoping Cart</a></li>
									<li><a href="wishlist.html"><i class="fa fa-heart"></i>Wishlist</a></li>
									<li><a href="login.html"><i class="fa fa-sign-in"></i>Login</a></li>
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


    <!-- .breadcumb-area start -->
    <div class="bradcumb-area black-opacity bg-img-3">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="bradcumb-wrap">
                        <h2>@yield('page')</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>|</li>
                            <li>@yield('page')</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .breadcumb-area end -->

    <!-- product-details-area start -->
    <div class="product-details-area ptb-100 bg-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <div class="product-details-wrap">
                        <div class="product-details-active">
                            @if(count($product->img_pros)==1)
                            {{-- @dd($product->img_pros) --}}
                            <div class="product-details-img" data-hash="one">
                                <img src="{{asset($product->img_pros[0]->image)}}" alt="" />
                            </div>
                            @elseif(count($product->img_pros)==2)
                            <div class="product-details-img" data-hash="one">
                                <img src="{{asset($product->img_pros[0]->image)}}" alt="" />
                            </div>
                            <div class="product-details-img" data-hash="two">
                                <img src="{{asset($product->img_pros[1]->image)}}" alt="" />
                            </div>
                            @elseif(count($product->img_pros)==3)
                            <div class="product-details-img" data-hash="one">
                                <img src="{{asset($product->img_pros[0]->image)}}" alt="" />
                            </div><div class="product-details-img" data-hash="two">
                                <img src="{{asset($product->img_pros[1]->image)}}" alt="" />
                            </div><div class="product-details-img" data-hash="three">
                                <img src="{{asset($product->img_pros[2]->image)}}" alt="" />
                            </div>
                            @endif
                        </div>
                        <div class="thamb-active">
                                {{-- @foreach($img_pro as $item) --}}
                                {{-- @dd($img_pro[0]->image) --}}
                                @if(count($img_pro)==1)
                                <div class="product-details-thambnil">
                                <a href="#one">
                                    <img src="{{asset($item->image[1])}}" alt="" />
                                </a>
                                </div>
                                @elseif(count($img_pro)==2)
                                <div class="product-details-thambnil">
                                <a href="#two">
                                    <img src="{{asset($img_pro[0]->image)}}" alt="" />
                                </a>
                                </div>
                                <div class="product-details-thambnil">
                                <a href="#two">
                                    <img src="{{asset($img_pro[1]->image)}}" alt="" />
                                </a>
                                </div>
                                @elseif(count($img_pro)==3)
                                <div class="product-details-thambnil">
                                <a href="#one">
                                    <img src="{{asset($img_pro[0]->image)}}" alt="" />
                                </a>
                                </div>
                                <div class="product-details-thambnil">
                                <a href="#two">
                                    <img src="{{asset($img_pro[1]->image)}}" alt="" />
                                </a>
                                </div>
                                <div class="product-details-thambnil">
                                <a href="#three">
                                    <img src="{{asset($img_pro[2]->image)}}" alt="" />
                                </a>
                                </div>
                                @endif
                                {{-- @endforeach --}}
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12">
                    <div class="product-details-conttent">
                        <h2>{{$product->name}}</h2>
                        <div class="ratting">
                            <ul>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star-o"></i></li>
                            </ul>
                            <ul>
                                <li>(06 Reviews)</li>
                            </ul>
                        </div>
                        <div class="stock">
                            <strong>Aveilable:</strong>
                            {{-- @dd($product_detail_id->quantity) --}}
                            @if($product_detail_id->quantity>0)
                            <span>In Stock</span>
                            @else
                            <span>Out of Stock</span>
                            @endif
                        </div>
                        <p>{{$product_detail_id->meta_desc}}</p>
                        <ul class="size" style="display: flex;">
                            <strong>Size: </strong>
                            @foreach($product_detail as $value)
                            {{-- @dd($value->attrs) --}}
                            <li ><a href=""style="padding: 0 12px">{{ $value->attrs->value }}</a></li>
                            @endforeach
                        </ul>
                        <div style="margin-bottom: 20px;"><strong>Category: </strong><a href="{{route('client.category',$product->categories->slug)}}">{{$product->categories->name}}</a></div>
                        @if($product_detail_id->discount>0)
                        <span>{{number_format($product_detail_id->price-($product_detail_id->price*$product_detail_id->discount/100))}} đ</span>
                        <del>{{number_format($product_detail_id->price)}} đ</del>
                        @else
                        <span>{{number_format($product_detail_id->price)}} đ</span>
                        @endif
                        <div class="quality-wrap">
                            <form action="{{route('cart.update-qty')}}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{$product_detail_id->id}}">
                                <strong>QTY :</strong>
                                <input class="quantity" type="number" name="quantity" value="1"/>
                                <button class="add-cart" type="submit"><i class="fa fa-shopping-cart"></i> Add to cart</button>
                            </form>
                        </div>
                        <div class="share-wrap">
                            <ul>
                                <li class="share">Share</li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12">
                    <div class="product-details-menu">
                        <ul>
                            <li class="active" style="width:50%"><a href="#description" data-toggle="tab">Description</a></li>
                            <li style="width:50%"><a href="#reviews" data-toggle="tab">Reviews (3)</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active" id="description">
                            <div class="description-wrap clear">
                                {!! $product->description !!}
                            </div>
                        </div>
                        <div class="tab-pane clear" id="reviews">
                            <div class="review-wrap clear">
                                <h3>{{$count_star}} Reviews From Customers</h3>
                                <ul>
                                    @foreach($feedback_pro as $feedback)
                                    {{-- @dd($feedback_pro) --}}
                                    <li>
                                        <div class="review-info">
                                            <a href="#">{{$feedback->users->name}}</a>
                                            <p>{{$feedback->content}}</p>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="add-review">
                                <h3>Add A Review</h3>
                                <form action="{{route('client.feedback',$product->id)}}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <h4>Your Review:</h4>
                                            <textarea name="content" id="massage" cols="30" rows="10" placeholder="Your review here..."></textarea>
                                        </div>
                                        <div class="col-xs-12">
                                            <button class="btn-style" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="propuler-product">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="section-title text-center mb-30">
                                    <h2>Propuler Product</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="product-wrap">
                                    <div class="product-img">
                                        <a href="#">
                                            <img class="primary" src="img/product/1.jpg" alt="">
                                            <img class="secondary" src="img/product/2.jpg" alt="">
                                        </a>
                                        <div class="product-icon">
                                            <ul>
                                                <li>
                                                    <a href="cart.html">
                                                        <i class="fa fa-shopping-cart"></i>
                                                        <span>Add to Cart</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html">
                                                        <i class="fa fa-heart"></i>
                                                        <span>Wishlist</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="checkout.html">
                                                        <i class="fa fa-compress"></i>
                                                        <span>Compare</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <span class="sale">Sale</span>
                                    </div>
                                    <div class="product-content text-center">
                                        <a href="product-details.html">Man T-Shirt</a>
                                        <div class="ratting">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star-half-o"></i></li>
                                                <li><i class="fa fa-star-o"></i></li>
                                            </ul>
                                        </div>
                                        <span>$28.00</span>
                                        <del>$30.00</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product-details-area end -->

    @include('clients.components.footer')
    <script>
        $(function(){
        $('.quantity').on('change',function(){
            quantity = $(this).val();
            // alert(quantity);
            if(quantity < 1){
                $(this).val(1);
            }else if(quantity>{{$product_detail_id->quantity}}){
                $(this).val({{$product_detail_id->quantity}})
            }
        })
    });
    </script>
