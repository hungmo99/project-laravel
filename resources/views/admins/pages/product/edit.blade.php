@extends('admins.Master')
@section('content')
@section('page','Product')
@section('title','Edit')
<style>
    .imgs {
        height:100%;
        transition: transform .5s; /* Animation */
    }
    .imgs:hover{
        transform: scale(2);
        z-index: 1;
        position: relative;
    }
</style>
    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="layout-top-spacing">
                <legend>Product Edit</legend>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                {{-- <h4 class="card-title text-red">Thêm mới sản phẩm</h4> --}}
                                <form action="{{route('products.update',$product->id)}}" method="POST" role="form" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="name">Tên sản phẩm</label>
                                                <input type="text" class="form-control" id="name" placeholder="Nhập tên sản phẩm" name="name" onkeyup="ChangeToSlug()" value="{{$product->name}}">
                                                @error('name')
                                                <span class="text-red">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="sku">SKU</label>
                                                <input type="text" class="form-control" id="sku" placeholder="sku"  name="sku" value="{{$product->sku}}">
                                                @error('sku')
                                                <span class="text-red">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="">Category</label>
                                                <div class="form-group">
                                                    <select class="custom-select" id="classCoverageDistribution" aria-label="Example select with button addon" name="id_cate">
                                                        <option value="">---Trống---</option>
                                                        @foreach($category as $value)
                                                        <option value="{{$value->id}}" {{($product->id_cate==$value->id)?'selected':''}}>{{$value->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                @error('id_cate')
                                                <span class="text-red">{{$message}}</span>
                                                @enderror

                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="">Brand</label>
                                                <div class="form-group">
                                                    <select class="custom-select" id="classCoverageDistribution" aria-label="Example select with button addon" name="id_brand">
                                                        <option value="">---Trống---</option>
                                                        @foreach($brand as $value)
                                                        <option value="{{$value->id}}" {{($product->id_brand==$value->id)?'selected':''}}>{{$value->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                @error('id_brand')
                                                <span class="text-red">{{$message}}</span>
                                                @enderror

                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="">Status</label>
                                                <div class="radio" class="row">
                                                    <label>
                                                        <input type="radio"  name="status" id="input" value="1" checked="checked">
                                                        Hiện
                                                    </label>
                                                    <label>
                                                        <input type="radio"  name="status" id="input" value="0">
                                                        Ẩn
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Avatar</label>
                                                <input type="file" class="form-control @error('avatar') is-invalid @enderror" name="avatar">
                                                @error('avatar')
                                                <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <div class="row" >
                                                    <div class="card text-center col-md-12">
                                                        <img class="card-img-top img" src="{{asset($product->avatar)}}" id="img">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class="form-group">
                                                <label for="">Photo Description</label>
                                                <input type="file" multiple class="form-control @error('image') is-invalid @enderror" name="image[]"> @error('image')
                                                <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <div class="row form-group">
                                                    @foreach($img_pro as $value)
                                                    <div class="card text-center col">
                                                        <img class="card-img-top imgs" src="{{asset($value->image)}}" alt="Card image cap">
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Description</label>
                                        <textarea type="text" name="description" class="form-control @error('description') is-invalid @enderror" id="text" placeholder="Type here...">{{$product->description}}</textarea>
                                        @error('description')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="meta_title">Meta title</label>
                                        <input type="text" class="form-control" id="meta_title" placeholder=""  name="meta_title" multiple="multiple" value="{{$product->meta_title}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="meta_key">Meta keyword</label>
                                        <input type="text" class="form-control" id="meta_key" placeholder=""  name="meta_keyword" multiple="multiple" value="{{$product->meta_keyword}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="meta_desc">Meta description</label>
                                        <textarea name="meta_desc" id="meta_desc" class="form-control" rows="5">{{$product->meta_desc}}</textarea>
                                    </div>


                                    <button class="btn btn-info" type="submit">Update</button>
                                </form>

                            </div>	<!-- end card body -->
                        </div>	<!-- end card	 -->
                    </div><!-- end col -->
                </div><!-- end row -->


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
