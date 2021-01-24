@extends('admins.Master')
@section('content')
@section('page','Brand')
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
                <legend>Brand</legend>
                <div class="col-md-4">
                    <legend>Add Brand</legend>
                    <form action="{{route('brand.store')}}" method="POST" role="form" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Name</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Type here...">
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
                <div class="col-md-8">
                    <legend>List Brand</legend>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped mb-4">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th class="text-center">Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($brand as $value)
                                <tr>
                                    <td>{{$loop->index+1}}</td>
                                    <td><img src="{{asset($value->image)}}" alt="" style="width:100px"></td>
                                    <td>{{$value->name}}</td>
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
