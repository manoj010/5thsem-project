@extends('admin.admin_dashboard')
@section('content')
< <div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Bike Brand</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Brand</a></li>
                            <li class="active">Add Bike Brand</li>
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
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header"><strong>Add Bike Company</strong></div>
                        <div class="card-body card-block">
                            <div class="form-group"><label for="brand" class=" form-control-label">Brand
                                    Name</label><input type="text" name="brand_name" id="brand"
                                    placeholder="Enter Brand Name" class="form-control"></div>
                        </div>
                    </div>

                </div>


            </div>
        </div><!-- .content -->
        @endsection