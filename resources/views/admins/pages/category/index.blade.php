@extends('admins.Master')
@section('content')
@section('page','Category')
@section('title','Home')
    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="row layout-top-spacing">
                @if (session()->has('success'))
                <div class="alert alert-success col-md-6">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>{{session('success')}}</strong>
                </div>
                @endif
                <legend>Category</legend>
                <div class="col-md-4">
                    <legend>Add Category</legend>
                    <form action="{{route('category.store')}}" method="POST" role="form">
                        @csrf
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Name</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Type here...">
                            @error('name')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Desc</label>
                            <textarea type="text" name="desc" class="form-control @error('desc') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Type here..."></textarea>
                            @error('desc')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                            <div class="col-md-11">
                                <div class="form-group">
                                    <label for="">Type Category</label>
                                    <div class="radio">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>
                                                    <input type="radio" name="type" id="input" value="1" checked="checked">
                                                    Product_Cate
                                                </label>
                                            </div>
                                            <div class="col-md-6">
                                                <label>
                                                    <input type="radio" name="type" id="input" value="0">
                                                    Blog_cate
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="">Status</label>
                                    <div class="radio">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>
                                                    <input type="radio" name="status" id="input" value="1" checked="checked">
                                                    Show
                                                </label>
                                            </div>
                                            <div class="col-md-6">
                                                <label>
                                                    <input type="radio" name="status" id="input" value="0">
                                                    Hidden
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <input type="submit" name="time" class="btn btn-primary" value="Submit">
                    </form>
                </div>
                <div class="col-md-8">
                    <legend>List Category</legend>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped mb-4">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Desc</th>
                                    <th class="text-center">Type</th>
                                    <th class="text-center">Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($cate as $value)
                                <tr>
                                    <td class="text-center">{{$loop->index+1}}</td>
                                    <td class="text-center">{{$value->name}}</td>
                                    <td class="text-center">{{$value->desc}}</td>
                                    <td class="text-center"><span class="text-success">{{$value->type==1?'Product':'Blog'}}</span></td>
                                    <td class="text-center"><span class="text-success">{{$value->status==1?'Show':'Hidden'}}</span></td>
                                    <td class="text-center">
                                        <a href="{{route('category.edits',$value->id)}}"><i class="fas fa-edit"></i></a>
                                        <a href="{{route('category.delete',$value->id)}}"><i class="fas fa-trash-alt"></i></a>
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
