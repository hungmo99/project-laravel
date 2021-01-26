@extends('admins.Master')
@section('content')
@section('page','Category')
@section('title','Edit')
    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="row layout-top-spacing">
                <legend>Category</legend>
                <div class="col-md-6">
                    <legend>Edit Category</legend>
                    <form action="{{route('category.update',$cate->id)}}" method="POST" role="form">
                        @csrf
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Name</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="exampleFormControlInput1" value="{{$cate->name}}" placeholder="Type here...">
                            @error('name')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Desc</label>
                            <textarea type="text" name="desc" class="form-control @error('desc') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Type here...">{{$cate->desc}}</textarea>
                            @error('desc')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="status" id="input" value="1" {{$cate->status==1?'checked':''}}>
                                Hiện
                            </label>
                            <label>
                                <input type="radio" name="status" id="input" value="0" {{$cate->status==0?'checked':''}}>
                                Ẩn
                            </label>
                        </div>
                        <input type="submit" name="time" class="btn btn-primary" value="Submit">
                    </form>
                </div>


            </div>

        </div>
@endsection
