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
                <legend>Product</legend>
                <div class="col-md-8">
                    <legend>List Product</legend>
                    <a class="btn btn-primary" href="{{route('products.create')}}">Add Product</a>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped mb-4">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">Image</th>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Category</th>
                                    <th class="text-center">Brand</th>
                                    <th class="text-center">Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $value)
                                <tr>
                                    <td class="text-center">{{$loop->index+1}}</td>
                                    <td class="text-center"><img src="{{asset($value->image)}}" alt="" style="width:100px"></td>
                                    <td class="text-center">{{$value->name}}</td>
                                    <td class="text-center">{{$value->categories->name}}</td>
                                    <td class="text-center">{{$value->brands->name}}</td>
                                    <td class="text-center"><span class="text-success">{{$value->status==1?'Show':'Hidden'}}</span></td>
                                    <td class="text-center">
                                        <a href="{{route('product-detail.index',$value->id)}}"><i class="mdi mdi-eye btn-info btn"></i></a>
                                        <a href="{{route('products.edits',$value->id)}}"><i class="fas fa-edit"></i></a>
                                        <a href="{{route('products.delete',$value->id)}}"><i class="fas fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

        </div>

@endsection
