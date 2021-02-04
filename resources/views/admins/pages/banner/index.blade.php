@extends('admins.Master')
@section('content')
@section('page','Banner')
@section('title','Home')
<style>
    .getcontent p{
        margin: 0;
        white-space: nowrap;
        width: 100px;
        height: 100%;
        text-overflow: ellipsis;
        overflow: hidden;
    }
</style>
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
                <legend>Banner</legend>
                <div class="col-md-4">
                    <legend>Add Banner</legend>
                    <form action="{{route('banner.store')}}" method="POST" role="form" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Name</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Type here...">
                            @error('name')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Title</label>
                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Type here...">
                            @error('title')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Content</label>
                            <textarea type="text" name="content" class="form-control @error('content') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Type here..."></textarea>
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
                    <legend>List banner</legend>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped mb-4">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">Image</th>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Title</th>
                                    <th class="text-center">Content</th>
                                    <th class="text-center">Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($banner as $value)
                                <tr class="getcontent">
                                    <td class="text-center">{{$loop->index+1}}</td>
                                    <td class="text-center"><img src="{{asset($value->image)}}" alt="" style="width:100px"></td>
                                    <td class="text-center">{{$value->name}}</td>
                                    <td class="text-center"><p>{{$value->title}}</p></td>
                                    <td class="text-center"><p>{{$value->content}}</p></td>
                                    <td class="text-center"><span class="text-success">{{$value->status==1?'Show':'Hidden'}}</span></td>
                                    <td class="text-center">
                                        <a href="{{route('banner.edits',$value->id)}}"><i class="fas fa-edit"></i></a>
                                        <a href="{{route('banner.delete',$value->id)}}"><i class="fas fa-trash-alt"></i></a>
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
