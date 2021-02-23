@extends('clients.Master')
@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="tab-content">
            <div class="tab-pane active" id="grid">
                <div class="row">
                    <div class="col-xs-12 col-lg-4 col-md-6 col-sm-6">
                        <div class="product-wrap mb-30">
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
                <div class="row">
                    <div class="col-xs-12">
                        <div class="pagination-wrap">
                            <ul>
                                <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="list">
                <div class="shop-list-area">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="shop-list-wrap mb-30">
                                <div class="shop-list-img">
                                    <img src="img/product/2.jpg" alt="" />
                                </div>
                                <div class="shop-list-content">
                                    <h3>All In Black Snapback</h3>
                                    <div class="ratting">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <div class="price">
                                        <span>$50.00</span>
                                        <del>$55.00</del>
                                    </div>
                                    <div class="stock">
                                        <strong>Aveilable</strong>
                                        <span>In Stock</span>
                                    </div>
                                    <p>consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip</p>
                                    <div class="product-action">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i> Add To Cart</a></li>
                                            <li><a href="#"><i class="fa fa-heart"></i> Wishlist</a></li>
                                            <li><a href="#"><i class="fa fa-compress"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="shop-list-wrap mb-30">
                                <div class="shop-list-img">
                                    <img src="img/product/3.jpg" alt="" />
                                </div>
                                <div class="shop-list-content">
                                    <h3>Boyfriend Jeans</h3>
                                    <div class="ratting">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <div class="price">
                                        <span>$45.00</span>
                                        <del>$40.00</del>
                                    </div>
                                    <div class="stock">
                                        <strong>Aveilable</strong>
                                        <span>In Stock</span>
                                    </div>
                                    <p>consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip</p>
                                    <div class="product-action">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i> Add To Cart</a></li>
                                            <li><a href="#"><i class="fa fa-heart"></i> Wishlist</a></li>
                                            <li><a href="#"><i class="fa fa-compress"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="shop-list-wrap mb-30">
                                <div class="shop-list-img">
                                    <img src="img/product/4.jpg" alt="" />
                                </div>
                                <div class="shop-list-content">
                                    <h3>Breton Stripe T-Shirt</h3>
                                    <div class="ratting">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <div class="price">
                                        <span>$30.00</span>
                                    </div>
                                    <div class="stock">
                                        <strong>Aveilable</strong>
                                        <span>In Stock</span>
                                    </div>
                                    <p>consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip</p>
                                    <div class="product-action">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i> Add To Cart</a></li>
                                            <li><a href="#"><i class="fa fa-heart"></i> Wishlist</a></li>
                                            <li><a href="#"><i class="fa fa-compress"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="shop-list-wrap mb-30">
                                <div class="shop-list-img">
                                    <img src="img/product/5.jpg" alt="" />
                                </div>
                                <div class="shop-list-content">
                                    <h3>Bucket Hat in Terry Towel</h3>
                                    <div class="ratting">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <div class="price">
                                        <span>$51.00</span>
                                        <del>$46.00</del>
                                    </div>
                                    <div class="stock">
                                        <strong>Aveilable</strong>
                                        <span>In Stock</span>
                                    </div>
                                    <p>consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip</p>
                                    <div class="product-action">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i> Add To Cart</a></li>
                                            <li><a href="#"><i class="fa fa-heart"></i> Wishlist</a></li>
                                            <li><a href="#"><i class="fa fa-compress"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="shop-list-wrap">
                                <div class="shop-list-img">
                                    <img src="img/product/6.jpg" alt="" />
                                </div>
                                <div class="shop-list-content">
                                    <h3>Distressed Denim Shirt</h3>
                                    <div class="ratting">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <div class="price">
                                        <span>$20.00</span>
                                    </div>
                                    <div class="stock">
                                        <strong>Aveilable</strong>
                                        <span>In Stock</span>
                                    </div>
                                    <p>consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip</p>
                                    <div class="product-action">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i> Add To Cart</a></li>
                                            <li><a href="#"><i class="fa fa-heart"></i> Wishlist</a></li>
                                            <li><a href="#"><i class="fa fa-compress"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="pagination-wrap">
                                <ul>
                                    <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
