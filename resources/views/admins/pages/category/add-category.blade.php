@extends('admins.Master')
@section('content')
@section('title','Category')
@section('name_page','Home')
<style>
    .radio label::before{
        background-color: #fff !important;
    }
</style>
<div class="page-body">
    <div class="container-fluid">
      <div class="page-title">
        <div class="row">
          <div class="col-6">
            <h3>Category</h3>
          </div>
          <div class="col-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
              <li class="breadcrumb-item">@yield('title')</li>
              <li class="breadcrumb-item active">@yield('name_page')</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
        <div class="row form-builder-2">
            <div class="col-md-6">
                <div class="mb-3 ui-draggable-handle" style="position: static;">
                    <label for="input-text-1">Name</label>
                    <input class="form-control btn-square" id="input-text-1" type="email" placeholder="Enter name" data-bs-original-title="" title="" name="name">
                </div>
                <div class="mb-3 ui-draggable-handle" style="position: static;">
                    <label for="input-text-2">Description</label>
                    <input class="form-control btn-square" id="input-text-2" type="email" placeholder="Enter desc" data-bs-original-title="" title="" name="desc">
                </div>
                <div class="mb-3 ui-draggable-handle" style="">
                    <label>Status</label>
                    <div class="col">
                        <div class="m-checkbox-inline">
                            <div class="radio radio-theme">
                                <input class="radioin" id="radioinline1" type="radio" name="status" value="option1" data-bs-original-title="" title="">
                                <label for="radioinline1">Show</label>
                            </div>
                            <div class="radio radio-theme">
                                <input class="radioin" id="radioinline2" type="radio" name="status" value="option2" data-bs-original-title="" title="">
                                <label for="radioinline2">Hidden</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3 ui-draggable-handle" style="position: static;">
                    <button class="btn btn-primary active" type="button" data-original-title="btn btn-dark active" title="" data-bs-original-title="">Submit</button>
                </div>
            </div>
        </div>
      </div>




</div>
@endsection
