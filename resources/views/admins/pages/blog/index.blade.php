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
                                    <th class="text-center">#</th>
                                    <th class="text-center">Image</th>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Title Description</th>
                                    <th class="text-center">Category</th>
                                    <th class="text-center">Credit</th>
                                    <th class="text-center">Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($blogs as $value)
                                <tr>
                                    <td class="text-center">{{$loop->index+1}}</td>
                                    <td class="text-center"><img src="{{asset($value->image)}}" alt="" style="width:100px"></td>
                                    <td class="text-center">{{$value->name}}</td>
                                    <td class="text-center">{{$value->title}}</td>
                                    <td class="text-center">{{$value->cateName}}</td>
                                    <td class="text-center">{{$value->adminName}}</td>
                                    <td class="text-center"><span class="text-success">{{$value->status==1?'Show':'Hidden'}}</span></td>
                                    <td class="text-center">
                                        <a href="{{route('blog.edits',$value->id)}}"><i class="fas fa-edit"></i></a>
                                        <a href="{{route('blog.delete',$value->id)}}"><i class="fas fa-trash-alt"></i></a>
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
