@extends('admins.Master')
@section('content')
@section('title','Category')
@section('name_page','Home')
<style>
    .display th{
        margin-left: 10px;
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
        <div class="row">
          <!-- Individual column searching (text inputs) Starts-->
          <div class="col-sm-12">
            <div class="card">
              <div class="card-body">
                <div class="table-responsive product-table">
                  <table class="display" id="basic-1" width="100%">
                    <thead>
                      <tr>
                        <th style="padding-right: 10px;">STT</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th>Start date</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</td>
                        <td>$10</td>
                        <td class="font-success">In Stock</td>
                        <td>2011/04/25</td>
                        <td>
                          <button class="btn btn-danger btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Delete</button>
                          <button class="btn btn-success btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Edit</button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- Individual column searching (text inputs) Ends-->
        </div>
      </div>




</div>
@endsection
