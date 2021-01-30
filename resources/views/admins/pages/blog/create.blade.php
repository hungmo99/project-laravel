@extends('admins.Master')
@section('content')
@section('page','Blog')
@section('title','Add')
    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="row layout-top-spacing">
                <legend>Informations</legend>
                <div class="col-md-6">
                    <legend>Add Blog</legend>
                    <form action="{{route('blog.store')}}" method="POST" role="form" enctype="multipart/form-data">
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
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Post By</label>
                            {{-- @dd($admin) --}}
                            <input type="text" name="id_admin" class="form-control @error('id_admin') is-invalid @enderror" id="exampleFormControlInput1" value="{{$admin->name}}" readonly>
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


            </div>

        </div>
@endsection
