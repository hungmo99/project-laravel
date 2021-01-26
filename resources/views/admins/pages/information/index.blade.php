@extends('admins.Master')
@section('content')
@section('page','Info')
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
                <legend>Informations</legend>
                <div class="col-md-3">
                    <legend>Add Informations</legend>
                    <form action="{{route('info.store')}}" method="POST" role="form">
                        @csrf
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Name</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Name...">
                            @error('name')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Email</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Email...">
                            @error('email')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Phone Number</label>
                            <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Phone...">
                            @error('phone')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Address</label>
                            <textarea type="text" name="address" class="form-control @error('address') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Address..."></textarea>
                            @error('address')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="radio">
                            <label>
                                <input type="radio" name="status" id="input" value="1" checked="checked">
                                Show
                            </label>
                            <label>
                                <input type="radio" name="status" id="input" value="0">
                                Hidden
                            </label>
                        </div>
                        <input type="submit" name="time" class="btn btn-primary" value="Submit">
                    </form>
                </div>
                <div class="col-md-9">
                    <legend>List Informations</legend>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped mb-4">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th class="text-center">Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($info as $value)
                                <tr>
                                    <td>{{$loop->index+1}}</td>
                                    <td>{{$value->name}}</td>
                                    <td>{{$value->email}}</td>
                                    <td>{{$value->phone}}</td>
                                    <td>{{$value->address}}</td>
                                    <td class="text-center"><span class="text-success">{{$value->status==1?'Show':'Hidden'}}</span></td>
                                    <td class="text-center">
                                        <a href="{{route('info.edits',$value->id)}}"><i class="fas fa-edit"></i></a>
                                        <a href="{{route('info.delete',$value->id)}}"><i class="fas fa-trash-alt"></i></a>
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
