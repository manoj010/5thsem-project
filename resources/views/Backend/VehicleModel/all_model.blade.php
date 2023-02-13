@extends('admin.admin_dashboard')
@section('content')
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>All Vehicle Model</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <a href="{{route('add.model')}}" class="btn btn-primary">Add Model</a>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">All Model </strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Model</th>
                                    <th>Price</th>
                                    <th>Image</th>
                                    <th>Engine</th>
                                    <th>Displacement</th>
                                    <th>Power</th>
                                    <th>Torque</th>
                                    <th>Mileage</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($models as $key => $model)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$model->model_name}}</td>
                                    <td>{{$model->price}}</td>
                                    <td><img src="{{asset($model->model_thumbnail)}}" style="width:60px; height:50px"
                                            alt="model">
                                    </td>
                                    <td>{{$model->engine_type}}</td>
                                    <td>{{$model->displacement}}</td>
                                    <td>{{$model->max_power}}</td>
                                    <td>{{$model->max_torque}}</td>
                                    <td>{{$model->mileage}}</td>
                                    <td>
                                        <a href="" class="btn btn-primary">Edit</a>
                                        <a href="" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div><!-- .animated -->
</div><!-- .content -->
@endsection