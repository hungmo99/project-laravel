@extends('admins.Master')
@section('content')
@section('page','Attr')
@section('title','Edit')
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
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <form method="POST" action="{{route('attr.update',$attr->id)}}">
                                            @csrf
                                            <h4>Edit Attributes</h4>
                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label>Attributes </label>
                                                        <select name="name" id="input" class="form-control" required="required">
                                                            <option value="size">Size</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label>Value</label>
                                                        <div class="input-group " id="size" >
                                                            <input type="text" class="form-control input-lg" name="value" value={{$attr->value}}>
                                                        </div>
                                                        @error('value')
                                                <span class="text-red">{{$message}}</span>
                                                @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn btn-success" type="submit">Update</button>
                                        </form>
                                    </div>
                                    <div class="col-sm-8">
                                        <table id="datatable-buttons" class="table table-striped table-bordered  nowrap dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable-buttons_info">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting">#</th>
                                                    <th class="sorting">Attributes</th>
                                                    <th class="sorting">Value</th>
                                                    <th class="sorting"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($attrs as $value)
                                                <tr>
                                                    <td>{{$loop->index +1}}</td>
                                                    <td>{{$value->name}}</td>
                                                    <td>{{$value->value}}</td>
                                                    <td>
                                                        <a href="{{route('attr.edits',$value->id)}}"><i class="fas fa-edit"></i></a>
                                                        <a href="{{route('attr.delete',$value->id)}}" onclick="return confirm('Delete Attr{{$value->name}}/{{$value->value}}')"><i class="fas fa-trash-alt"></i></a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

        </div>

@endsection
