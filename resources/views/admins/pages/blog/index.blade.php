@extends('admins.Master')
@section('content')
@section('page','Blog')
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
                <legend>Blog</legend>
                <div class="col-md-8">
                    <legend>List Blog</legend>
                    <a class="btn btn-primary" href="{{route('blog.create')}}">Add Blog</a>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped mb-4">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Title Description</th>
                                    <th>Category</th>
                                    <th>Credit</th>
                                    <th class="text-center">Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($blog as $value)
                                <tr>
                                    <td>{{$loop->index+1}}</td>
                                    <td><img src="{{asset($value->image)}}" alt="" style="width:100px"></td>
                                    <td>{{$value->name}}</td>
                                    <td>{{$value->title}}</td>
                                    <td>{{$cate->name}}</td>
                                    <td>{{$value->AdminName}}</td>
                                    <td class="text-center"><span class="text-success">{{$value->status==1?'Show':'Hidden'}}</span></td>
                                    <td class="text-center">
                                        <a href="{{route('brand.edits',$value->id)}}"><i class="fas fa-edit"></i></a>
                                        <a href="{{route('brand.delete',$value->id)}}"><i class="fas fa-trash-alt"></i></a>
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
