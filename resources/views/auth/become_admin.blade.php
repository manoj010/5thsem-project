@extends('admin.admin_dashboard')
@section('content')
<div class="breadcrumbs mt-5">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Add New Admin</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                            <li class="active">Add Admin</li>
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
                    <form method="post" action="{{route('admin.register')}}">
                        @csrf
                        <div class="card-header"><strong>Admin Information</strong></div>
                        <div class="card-body card-block">
                            <div class="form-group hello"><label class="form-control-label">Admin Name</label><input type="text" name="name" id="name"
                                placeholder="Enter Admin Name" class="form-control"></div>
                            <div class="form-group hello"><label class="form-control-label">Admin Username</label><input type="text" name="username" id="username"
                                placeholder="Enter Admin Username" class="form-control"></div>
                            <div class="form-group hello"><label class="form-control-label">Admin Email</label><input type="text" name="email" id="email"
                                placeholder="Enter Email" class="form-control"></div>
                            <div class="form-group hello"><label class="form-control-label">Admin Phone</label><input type="text" name="phone" id="phone"
                                placeholder="Enter Phone" class="form-control"></div>
                                <div class="form-group hello"><label class="form-control-label">Password</label><input type="password" name="password" id="password"
                                placeholder="Enter Password" class="form-control"></div>
                            <div class="form-group hello"><label class="form-control-label">Confirm Password</label><input type="password" name="password_confirmation" id="password_confirmation"
                                placeholder="Confirm Password" class="form-control"></div>
                            <div class="col-sm-6 text-secondary">
                                <input type="submit" class="btn btn-primary px-4" name="login" value="Register" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection