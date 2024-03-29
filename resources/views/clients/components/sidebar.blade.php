<!-- shop-area start -->
<div class="shop-area ptb-100 bg-4 shop-sidebar-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-xs-12">
                <aside class="sm-mb-50">
                    <!-- categorie-wrap -->
                    <div class="categorie-wrap mb-30">
                        <h3 class="sidebar-title">categorie <i class="fa fa-cube pull-right"></i></h3>
                        <div class="categorie-menu p-20">
                            <ul>
                                @foreach($cate_pro as $value)
                                <li><a href="{{route('client.category',$value->slug)}}">{{$value->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <!-- categorie-wrap -->

                    <div class="related-product">
                        <h3 class="sidebar-title">Related Product <i class="fa fa-product-hunt pull-right"></i></h3>
                        <div class="related-product-sidebar p-20">
                            <div class="related-product-item clear">
                                <div class="related-product-img">
                                    <img src="img/related/1.jpg" alt="" />
                                </div>
                                <div class="related-product-content">
                                    <a href="#">Woman Best T-Shirt</a>
                                    <div class="ratting">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <p>$30.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
            <div class="col-lg-9 col-md-8 col-xs-12">
                <div class="row mb-40">
                    <div class="col-md-5 col-lg-6 col-sm-6 col-xs-12">
                        <h3 class="shop-title">Showing {{ $products->firstItem() }} to {{ $products->lastItem() }} of {{ $products->total() }} ({{ $products->lastPage() }} pages</h3>
                    </div>
                    <div class="col-md-7 col-lg-6 col-sm-6 col-xs-12">
                        {{-- <div class="shop-short-by ml-30">
                            <ul>
                                <li><a href="{{route('client.sort_date')}}">Sort by date</a></li>
                                <li><a href="{{route('client.sort_low')}}">Sort by price: low to high</a></li>
                                <li><a href="{{route('client.sort_high')}}">Sort by price: high to low</a></li>
                            </ul>
                        </div> --}}
                        <div class="shop-menu">
                            <ul>
                                <li class="active"><a href="#grid" data-toggle="tab"><i class="fa fa-th"></i></a></li>
                                <li><a href="#list" data-toggle="tab"><i class="fa fa-list"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

