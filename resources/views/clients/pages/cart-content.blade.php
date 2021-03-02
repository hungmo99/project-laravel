@section('page','cart')
<!-- breadcumb-area start -->
<div class="bradcumb-area black-opacity bg-img-1">
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
{{-- @dd($cart) --}}
<!-- cart-area start -->

    <div class="cart-area ptb-100 bg-4">
        <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h3 class="cart-title">Shoping cart</h3>
                <div class="table-content table-responsive mb-40" data-url="{{route('cart.remove')}}">
                    <table id="tb" class="update-cart-url" data-url="{{route('cart.update')}}">
                        <thead>
                            <tr>
                                <th>Remove</th>
                                <th>Image</th>
                                <th>Product Name</th>
                                <th>PRICE</th>
                                <th>QUANTITY</th>
                                <th>TOTAL</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($cart)
                            @csrf
                            @foreach($cart as $id => $item)
                            <tr>
                                <td><a href="" data-id="{{$id}}" class="delete"><i class="fa fa-times"></i></a></td>
                                <td>
                                    <a href="{{route('client.product-detail',['slug'=>$item['slug'],'id'=>$item['id']])}}"><img src="{{asset($item['image'])}}" alt=""></a>
                                </td>
                                <td>
                                    <p>{{$item['name']}}</p>
                                </td>
                                <td><span>{{number_format($item['price'])}} d</span></td>
                                <td>
                                    <div class="qty">
                                        <div class="dec qtybutton">-</div>
                                        <input class="cart-plus-minus-box" type="text" name="quantity" value="{{$item['quantity']}}">
                                        <div class="inc qtybutton" data-qty="{{$item['total_quantity']}}">+</div>
                                    </div>
                                </td>
                                <td><span>{{number_format($item['price']*$item['quantity'])}} d</span></td>
                                <td><a href="" class="update" data-id="{{$id}}">Update cart</a></td>
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                    <div class="cart-btn text-right">
                        <ul>
                            <li><a href="#">Continue Shopping </a></li>
                        </ul>
                    </div>
                </div>
                <div class="table-responsive">
                    <div class="total-cart">
                        <table>
                            <thead>
                                <tr>
                                    <th>Sub Total</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>$500.00 </td>
                                    <td>$500.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
<!-- cart-area end -->
