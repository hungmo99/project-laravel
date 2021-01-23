@extends('admins.Master')
@section('content')
@section('page','Category')
@section('title','Create')
    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="row layout-top-spacing">
                <form action="{{route('category.store')}}" method="POST">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Name</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Alan Green">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Desc</label>
                        <input type="textarea" row="3" class="form-control" id="exampleFormControlInput1" placeholder="Alan Green">
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline1" name="status" checked class="custom-control-input">
                        <label class="custom-control-label" for="customRadioInline1">Show</label>
                        </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline2" name="status" class="custom-control-input">
                        <label class="custom-control-label" for="customRadioInline2">Hidden</label>
                    </div>

                </form>


            </div>

        </div>
@endsection
