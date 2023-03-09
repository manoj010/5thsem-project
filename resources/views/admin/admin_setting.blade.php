@extends('admin.admin_dashboard')
@section('content')

<div class="breadcrumbs mt-5">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Admin Settings</h1>
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
                        <strong class="card-title">Settings</strong>
                    </div>
                    <div class="card-body">
                    <a href="{{route('become.admin')}}">
                        <div class="form-group my-4">
                            <div class="input-group">
                                <div class="input-group-addon px-4 mr-1" style="width: 200px;">Register Admin</div>
                                <div class="text-center">
                                    <div class="btn btn-success"><i class="fa fa-user"></i></div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="{{route('admin.change.password')}}">
                        <div class="form-group my-4">
                            <div class="input-group">
                                <div class="input-group-addon px-4 mr-1" style="width: 200px;">Change Password</div>
                                <div class="text-center">
                                    <div class="btn btn-success"><i class="fa-solid fa-key"></i></div>
                                </div>
                            </div>
                        </div>
                    </a>
                   <a href="">
                        <div class="form-group my-4">
                            <div class="input-group">
                                <div class="input-group-addon px-4 mr-1" style="width: 200px;">Forget Password</div>
                                <div class="text-center">
                                    <div class="btn btn-success"><i class="fa-sharp fa-solid fa-unlock"></i></div>
                                </div>
                            </div>
                        </div>
                    </a> 
                    <a href="">
                        <div class="form-group my-4">
                            <div class="input-group">
                                <div class="input-group-addon px-4 mr-1" style="width: 200px;">View All Admin</div>
                                <div class="text-center">
                                    <div class="btn btn-success"><i class="fa fa-user"></i></div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="{{route('admin.logout')}}">
                        <div class="form-group my-4">
                            <div class="input-group">
                                <div class="input-group-addon px-4 mr-1" style="width: 200px;">Logout</div>
                                <div class="text-center">
                                    <div class="btn btn-success"><i class="fa-sharp fa-solid fa-unlock"></i></div>
                                </div>
                            </div>
                        </div>
                    </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection