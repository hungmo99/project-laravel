@extends('admins.Master')
@section('content')
@section('title','Dashboard')
@section('name_page','Home')
<div class="page-body">
    <div class="container-fluid">
      <div class="page-title">
        <div class="row">
          <div class="col-6">
            <h3>Default</h3>
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
</div>
@endsection
