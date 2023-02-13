@extends('admin.admin_dashboard')
@section('content')
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-1">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                            <li><a href="{{route('all.model')}}">All Model</a></li>
                            <li class="active">Add Model</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <strong>Vehicle</strong> Model
                </div>
                <div class="card-body p-4">

                    <div class="form-body mt-4">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="border border-3 p-4 rounded">
                                    <div class="mb-3">
                                        <label for="inputProductTitle" class="form-label">Model Name</label>
                                        <input type="email" class="form-control" id="inputProductTitle"
                                            placeholder="Enter Model Name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputProductTitle" class="form-label">Engine Type</label>
                                        <input type="email" class="form-control" id="inputProductTitle"
                                            placeholder="Enter Engine Type">
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputProductTitle" class="form-label">Displacement</label>
                                        <input type="email" class="form-control" id="inputProductTitle"
                                            placeholder="Enter Displacement">
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputProductTitle" class="form-label">Mileage</label>
                                        <input type="email" class="form-control" id="inputProductTitle"
                                            placeholder="Enter Mileage">
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputProductDescription" class="form-label">Image</label>
                                        <input type="file" id="file-multiple-input" name="file-multiple-input"
                                            multiple="" class="form-control-file">
                                    </div>


                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="border border-3 p-4 rounded">
                                    <div class="row g-3">
                                        <div class="col-6">
                                            <label for="brand" class="form-label">Brand Name</label>
                                            <select class="form-control mb-3" id="brand">
                                                <option> Select Brand</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="col-6">
                                            <label for="vehicle" class="form-label">Vehicle Name</label>
                                            <select class="form-control mb-3" id="vehicle">
                                                <option>Select Vehicle</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="col-6">
                                            <label for="inputVendor" class="form-label">Category Name</label>
                                            <select class="form-control mb-3" id="inputVendor">
                                                <option>Select Category</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputPrice" class="form-label">Price</label>
                                            <input type="email" class="form-control mb-3" id="inputPrice"
                                                placeholder="">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputPrice" class="form-label">Power</label>
                                            <input type="email" class="form-control mb-3" id="inputPrice"
                                                placeholder="">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputPrice" class="form-label">Torque</label>
                                            <input type="email" class="form-control mb-3" id="inputPrice"
                                                placeholder="">
                                        </div>

                                        <div class="col-12">
                                            <label for="inputProductDescription" class="form-label">Description</label>
                                            <textarea class="form-control mb-3" id="inputProductDescription"
                                                rows="3"></textarea>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="d-grid m-4">
                                <button type="button" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                        <!--end row-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/.col-->

@endsection