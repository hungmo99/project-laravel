@extends('clients.Master')
@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="tab-content">
            <div class="tab-pane active" id="grid">
                <div class="row">
                    @foreach($products as $product)
                    {{-- @dd($products) --}}
                    <div class="col-xs-12 col-lg-4 col-md-6 col-sm-6">
                        <div class="product-wrap mb-30">
                            <div class="product-img">
                                <a href="{{route('client.product-detail',[$product->slug,$product->id_detail])}}">
                                    {{-- @dd($value) --}}
                                    <img class="primary" src="{{asset($product->avatar)}}" alt="">
                                    <img class="secondary" src="{{asset($product->avatar)}}" alt="">
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
                                            @if($client==null || $val->product_details->products->id==$product->id)
                                            {{-- @if(($val->product_details->products->id==$product->id)) --}}
                                            {{-- @dd($product->id) --}}
                                            {{-- <a href="{{route('wishlist.delete',$product->id)}}">
                                                <i class="fa fa-heart"></i>
                                                <span>Remove Wishlist</span>
                                            </a> --}}
                                            @else
                                            <a href="{{route('wishlist.add',$product->id_detail)}}">
                                                <i class="fa fa-heart"></i>
                                                <span>Add Wishlist</span>
                                            </a>
                                            @endif
                                        </li>
                                        <li>
                                            <a href="checkout.html">
                                                <i class="fa fa-compress"></i>
                                                <span>Compare</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                @if($product->discount > 0)
                                <span class="sale">Sale {{$product->discount}}%</span>
                                @endif
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
                                @if($product->discount > 0)
                                <span>{{$product->price-($product->price*$product->discount/100)}}</span>
                                <del>{{$product->price}}</del>
                                @else
                                {{-- @dd($product->price) --}}
                                <span>{{number_format($product->price)}} đ</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                {{-- {{$products->links()}} --}}
                @if($products->hasPages())
                <div class="row">
                    <div class="col-xs-12">
                        <div class="pagination-wrap">
                            <ul>
                                @if ($products->currentPage() - 1 > 0)
                                <li><a href="{{ $products->previousPageUrl() }}"><i class="fa fa-angle-left"></i></a></li>
                                @endif
                                @for ($i = 1; $i <= $products->lastPage(); $i++)
                                <li class="{{ $products->currentPage() == $i ? 'active' : '' }}"><a href="{{ $products->url($i) }}">{{ $i }}</a></li>
                                @endfor
                                @if ($products->currentPage() < $products->lastPage())
                                <li><a href="{{ $products->nextPageUrl() }}"><i class="fa fa-angle-right"></i></a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
