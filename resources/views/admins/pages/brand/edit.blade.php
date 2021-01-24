@extends('admins.Master')
@section('content')
@section('page','Brand')
@section('title','Edit')
    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="row layout-top-spacing">
                <legend>Brand</legend>
                <div class="col-md-6">
                    <legend>Edit Brand</legend>
                    <form action="{{route('brand.update',$brand->id)}}" method="POST" role="form" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Name</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="exampleFormControlInput1" value="{{$brand->name}}" placeholder="Type here...">
                            @error('name')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Image</label>
                            <input type="file" class="form-control @error('image') is-invalid @enderror" name="image"> @error('image')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <img src="{{asset($brand->image)}}" style="width: 300px" alt="">
                        <div class="radio">
                            <label>
                                <input type="radio" name="status" id="input" value="1" {{$brand->status==1?'checked':''}}>
                                Hiện
                            </label>
                            <label>
                                <input type="radio" name="status" id="input" value="0" {{$brand->status==0?'checked':''}}>
                                Ẩn
                            </label>
                        </div>
                        <input type="submit" name="time" class="btn btn-primary" value="Submit">
                    </form>
                </div>


            </div>

        </div>
@endsection
