@extends('admins.Master')
@section('content')
@section('page','Product')
@section('title','Home')
    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="row layout-top-spacing">
                @if (session()->has('success'))
                <div class="alert alert-success col-md-4">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>{{session('success')}}</strong>
                </div>
                @endif
                    <div class="col-12">
                        <div class="card">
                            <a href="{{route('products.index')}}" class="btn btn-success col-5">Quay lại danh sách sản phẩm</a>
                            <div class="card-body">
                                <h4>Thuộc tính của sp: {{$product->name}}</h4>
                                <h4>Code: <span id="sku">{{$product->sku}}</span> </h4>
                                <form action="{{route('product-detail.store',$product->id)}}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group col">
                                            <label for="sku_detail">SKU</label>
                                            <input type="text" class="form-control " placeholder="Sku" id="sku_detail" name="sku" value="{{$product->sku}}"/>
                                            @error('sku')
                                            <span class="text-red">{{$message}}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group  col">
                                            <label for="id_attr">Size</label><a href="{{route('attr.index')}}" class=""> -Thêm-</a>
                                            <select name="id_attr" id="id_attr" class="form-control " >
                                                <option value="">--Size--</option>
                                                @foreach($attr as $value)
                                                <option value="{{$value->id}}">{{$value->value}}</option>
                                                @endforeach
                                            </select>
                                            @error('id_attr')
                                            <span class="text-red">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group col">
                                            <label for="price">Price</label>
                                            <input type="number" class="form-control " placeholder="Price" min="0" name="price" value=""/>
                                            @error('price')
                                            <span class="text-red">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group col">
                                            <label for="discount">Discount</label>
                                            <input type="number" class="form-control " placeholder="Discount" min="0" name="discount" value="0"/>
                                            @error('discount')
                                            <span class="text-red">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group col">
                                            <label for="quantity">Quantity</label>
                                            <input type="number" class="form-control " placeholder="Quantity" min="0" name="quantity" value="0"/>
                                            @error('quantity')
                                            <span class="text-red">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group col">
                                            <label for="">Status</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="status" id="input" value="1" checked="checked">
                                                    Hiện
                                                </label>
                                                <label>
                                                    <input type="radio" name="status" id="input" value="0">
                                                    Ẩn
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <button type="submit" class="btn btn-info">Add</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card text-center">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <table id="datatable-buttons" class="table table-striped table-bordered nowrap dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable-buttons_info">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting">#</th>
                                                    <th class="sorting">SKU</th>
                                                    <th class="sorting">Size</th>
                                                    <th class="sorting">Price (đ)</th>
                                                    <th class="sorting">Discount (%)</th>
                                                    <th class="sorting">Quantity</th>
                                                    <th class="sorting">Status</th>
                                                    <th class="sorting">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($product_detail as $value)
                                                <tr>
                                                    <td>{{$loop->index +1}}</td>
                                                    <td>{{$value->sku}}</td>
                                                    {{-- <td>{{$value->attrs->name=="size"?$value->attrs->value:''}}</td> --}}
                                                    <td>{{$value->attrs->value}}</td>
                                                    <td>{{number_format($value->price)}}</td>
                                                    <td>{{$value->discount}}</td>
                                                    <td>{{$value->quantity}}</td>
                                                    <td>{!!($value->status==1)?'<span class="badge badge-pill badge-soft-success font-size-12">Hiện</span>':'<span class="badge badge-pill badge-soft-danger font-size-12">Ẩn</span>'!!}</td>
                                                    <td>
                                                        <a href="{{route('product-detail.edits',['id'=>$product->id,'id_detail'=>$value->id])}}"><i class="fas fa-edit"></i></a>
                                                        <a href="{{route('product-detail.delete',['id'=>$product->id,'id_detail'=>$value->id])}}" onclick="return confirm('Delete name: {{$value->products->name}}/sku: {{$value->sku}}')"><i class="fas fa-trash-alt"></i></a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


            </div>

        </div>

@endsection
