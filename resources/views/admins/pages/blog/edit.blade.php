@extends('admins.Master')
@section('content')
@section('page','Blog')
@section('title','Add')
    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="row layout-top-spacing">
                <legend>Informations</legend>
                <div class="col-md-4">
                    <legend>Edit Blog</legend>
                    <form action="{{route('blog.update',$blog->id)}}" method="POST" role="form" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Name</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="exampleFormControlInput1" value="{{$blog->name}}">
                            @error('name')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Image</label>
                                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image"> @error('image')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <img src="{{asset($blog->image)}}" style="width: 300px" alt="">
                            </div>
                            <div class="form-group">
                                <label for="">Danh mục tin tức</label>
                                <div class="form-group">
                                    <select class="custom-select text-center" id="classCoverageDistribution" aria-label="Example select with button addon" name="id_cate">
                                        <option value="">{{$blog->cateName}}</option>
                                        @foreach($category as $value)
                                        <option value="{{$value->id}}" {{($blog->id_cate==$value->id)?'selected':''}}>{{$value->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="status" id="input" value="1" {{$blog->status==1?'checked':''}}>
                                    Show
                                </label>
                                <label>
                                    <input type="radio" name="status" id="input" value="0" {{$blog->status==0?'checked':''}}>
                                    Hidden
                                </label>
                            </div>
                            <input type="submit" name="time" class="btn btn-primary" value="Submit">
                        </div>
                        </div>
                        <div class="col-md-8">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Title</label>
                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="exampleFormControlInput1" value="{{$blog->title}}">
                            @error('title')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Content</label>
                            <textarea type="text" name="content" class="form-control @error('content') is-invalid @enderror" id="text" placeholder="Type here...">{{$blog->content}}</textarea>
                            @error('content')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </form>
                </div>


            </div>

        </div>
    <script src={{ url('ckeditor/ckeditor.js') }}></script>
    <script>
    CKEDITOR.replace( 'text', {
        filebrowserBrowseUrl: '{{ route('ckfinder_browser') }}',

    } );
    </script>
    @include('ckfinder::setup')
@endsection
