@extends('admin.admin_dashboard')
@section('content')
<div class="animated fadeIn">


    <div class="row">

        <div class="col-lg-12">
            <div class="card">
                <div class="card-header h3 text-center">Admin Change Password</div>
                <div class="card-body card-block">
                    <form action="#" method="post" class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa-sharp fa-solid fa-key"></i></div>
                                <input type="text" id="username" name="username" placeholder="Old Password"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa-sharp fa-solid fa-key"></i></div>
                                <input type="text" id="email" name="email" placeholder="New Password"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa-sharp fa-solid fa-key"></i></div>
                                <input type="password" id="password" name="password" placeholder="Confirm Password"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="form-actions form-group"><button type="submit"
                                class="btn btn-success btn-sm">Change</button></div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection