@extends('admins.Master')
@section('content')
@section('page','Banner')
@section('title','Edit')
    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="row layout-top-spacing">
                <legend>Banner</legend>
                <div class="col-md-6">
                    <legend>Edit Banner</legend>
                    <form action="{{route('banner.update',$banner->id)}}" method="POST" role="form" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Name</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="exampleFormControlInput1" value="{{$banner->name}}" placeholder="Type here...">
                            @error('name')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Title</label>
                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="exampleFormControlInput1" value="{{$banner->title}}" placeholder="Type here...">
                            @error('title')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Content</label>
                            <textarea type="text" name="content" class="form-control @error('content') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Type here...">{{$banner->content}}</textarea>
                            @error('content')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Image</label>
                            <input type="file" class="form-control @error('image') is-invalid @enderror" name="image"> @error('image')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <img src="{{asset($banner->image)}}" style="width: 300px" alt="">
                        <div class="radio">
                            <label>
                                <input type="radio" name="status" id="input" value="1" {{$banner->status==1?'checked':''}}>
                                Hiện
                            </label>
                            <label>
                                <input type="radio" name="status" id="input" value="0" {{$banner->status==0?'checked':''}}>
                                Ẩn
                            </label>
                        </div>
                        <input type="submit" name="time" class="btn btn-primary" value="Submit">
                    </form>
                </div>
            </div>
        </div>
@endsection
