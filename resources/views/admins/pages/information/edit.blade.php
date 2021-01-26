@extends('admins.Master')
@section('content')
@section('page','Info')
@section('title','Edit')
    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="row layout-top-spacing">
                <legend>Informations</legend>
                <div class="col-md-6">
                    <legend>Edit Information</legend>
                    <form action="{{route('info.update',$info->id)}}" method="POST" role="form">
                        @csrf
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Name</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="exampleFormControlInput1" value="{{$info->name}}" placeholder="Type here...">
                            @error('name')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Email</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="exampleFormControlInput1" value="{{$info->email}}" placeholder="Type here...">
                            @error('email')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Phone Number</label>
                            <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" id="exampleFormControlInput1" value="{{$info->phone}}" placeholder="Type here...">
                            @error('phone')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Address</label>
                            <textarea type="text" name="address" class="form-control @error('address') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Type here...">{{$info->address}}</textarea>
                            @error('address')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="status" id="input" value="1" {{$info->status==1?'checked':''}}>
                                Hiện
                            </label>
                            <label>
                                <input type="radio" name="status" id="input" value="0" {{$info->status==0?'checked':''}}>
                                Ẩn
                            </label>
                        </div>
                        <input type="submit" name="time" class="btn btn-primary" value="Submit">
                    </form>
                </div>


            </div>

        </div>
@endsection
