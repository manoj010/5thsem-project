@extends('dashboard')
@section('user')

<section class="section section-bg" id="call-to-action"
    style="background-image: url({{asset('frontend/assets/images/bike-landscape.jpg')}})">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="cta-content">
                    <br>
                    <br>
                    <h2>User <em>Dashboard</em></h2>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- ***** Our Classes Start ***** -->
<section class="section" id="our-classes">
    <div class="container">
        <br>
        <br>
        <br>
        <div class="row" id="tab">
            <div class="col-lg-4">
                <ul>
                    <li>
                        <div class="nav-link  " data-bs-toggle="tab" href="#tabs-1" role="tab" aria-controls="dashboard"
                            aria-selected="false">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="{{(!empty($userData->photo))?url('upload/userImages/'.$userData->photo):url('upload/NoImage.jpg')}}"
                                    alt="User" class="rounded-circle p-1 bg-transparent"
                                    style="width:150px; height:150px">
                                <div class="mt-3">
                                    <h4 class="mb-2">{{$userData->name}}</h4>
                                    <p class="text-muted font-size-sm">{{$userData->address}}</p>

                                </div>
                            </div>
                            </>
                    </li>
                    <li><a href='#tabs-2'><i class="fa fa-list"></i> Orders</a></a></li>
                    <li><a href='#tabs-3'><i class="fa fa-first-order"></i> Track Your Order</a></a></li>
                    <li><a href='#tabs-4'><i class="fa fa-address-book"></i> My Address</a></a></li>
                    <li><a href='#tabs-5'><i class="fa fa-sign-in"></i> Account Details</a></a></li>
                    <li><a href='#tabs-6'><i class="fa fa-save"></i> Account Security</a></a></li>
                    <li><a href='#tabs-7'><i class="fa fa-sign-out"></i> Logout</a></a></li>
                </ul>
            </div>
            <div class="col-lg-8 ">
                <section class='tabs-content'>

                    <div id='tabs-2'>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="mb-0 text-center">Your Orders</h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Order</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Total</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>#1357</td>
                                                <td>March 45, 2020</td>
                                                <td>Processing</td>
                                                <td>$125.00 for 2 item</td>
                                                <td><a href="#" class="btn-small d-block">View</a></td>
                                            </tr>
                                            <tr>
                                                <td>#2468</td>
                                                <td>June 29, 2020</td>
                                                <td>Completed</td>
                                                <td>$364.00 for 5 item</td>
                                                <td><a href="#" class="btn-small d-block">View</a></td>
                                            </tr>
                                            <tr>
                                                <td>#2366</td>
                                                <td>August 02, 2020</td>
                                                <td>Completed</td>
                                                <td>$280.00 for 3 item</td>
                                                <td><a href="#" class="btn-small d-block">View</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id='tabs-3'>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="mb-0 text-center">Orders tracking</h3>
                            </div>
                            <div class="card-body contact-from-area">
                                <p>To track your order please enter your OrderID in the box below and
                                    press "Track" button. This was given to you on your receipt and in
                                    the confirmation email you should have received.</p>
                                <div class="row">
                                    <div class="col-lg-8">
                                        <form class="contact-form-style mt-30 mb-50" action="#" method="post">
                                            <div class="input-style mb-20">
                                                <label>Order ID</label>
                                                <input name="order-id"
                                                    placeholder="Found in your order confirmation email" type="text" />
                                            </div>
                                            <div class="input-style mb-20">
                                                <label>Billing email</label>
                                                <input name="billing-email" placeholder="Email you used during checkout"
                                                    type="email" />
                                            </div>
                                            <button class="submit submit-auto-width" type="submit">Track</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id='tabs-4'>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card mb-3 mb-lg-0">
                                    <div class="card-header">
                                        <h3 class="mb-0 text-center">Billing Address</h3>
                                    </div>
                                    <div class="card-body">
                                        <address>
                                            3522 Interstate<br />
                                            75 Business Spur,<br />
                                            Sault Ste. <br />Marie, MI 49783
                                        </address>
                                        <p>New York</p>
                                        <a href="#" class="btn-small">Edit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="mb-0 text-center">Shipping Address</h5>
                                    </div>
                                    <div class="card-body">
                                        <address>
                                            4299 Express Lane<br />
                                            Sarasota, <br />FL 34249 USA <br />Phone: 1.941.227.4444
                                        </address>
                                        <p>Sarasota</p>
                                        <a href="#" class="btn-small">Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id='tabs-5'>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="text-center">Account Details</h5>
                            </div>
                            <div class="card-body">
                                <form method="post" action="{{route('user.profile.store')}}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <label>User Name <span class="required">*</span></label>
                                            <input required="" class="form-control" name="username" type="text"
                                                value="{{$userData->username}}" />
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Full Name <span class="required">*</span></label>
                                            <input required="" class="form-control" name="name" type="text"
                                                value="{{$userData->name}}" />
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Email <span class="required">*</span></label>
                                            <input required="" class="form-control" name="email" type="email"
                                                value="{{$userData->email}}" />
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Phone <span class="required">*</span></label>
                                            <input required="" class="form-control" name="phone" type="text"
                                                value="{{$userData->phone}}" />
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Address <span class="required">*</span></label>
                                            <input required="" class="form-control" name="address" type="text"
                                                value="{{$userData->address}}" />
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Photo <span class="required">*</span></label>
                                            <input class="form-control" name="photo" type="file" id="image" />
                                        </div>
                                        <div class="form-group col-md-12">
                                            <div class="col-sm-9 text-secondary">
                                                <img src="{{(!empty($userData->photo))?url('upload/userImages/'.$userData->photo):url('upload/NoImage.jpg')}}"
                                                    alt="User" class="rounded-circle p-1 bg-secondary "
                                                    style="width:100px; height:100px; ">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-success" name="submit"
                                                value="Submit">Save Change</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div id='tabs-6'>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="text-center">Account Security</h5>
                            </div>
                            <div class="card-body">

                                <form method="post" name="enq">
                                    <div class="row">

                                        <div class="form-group col-md-12">
                                            <label>Current Password
                                                <span class="required">*</span></label>
                                            <input required="" class="form-control" name="password" type="password" />
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>New Password <span class="required">*</span></label>
                                            <input required="" class="form-control" name="npassword" type="password" />
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Confirm Password
                                                <span class="required">*</span></label>
                                            <input required="" class="form-control" name="cpassword" type="password" />
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-success" name="submit" value="Submit">
                                                Save Change
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </section>
            </div>
        </div>
    </div>
</section>
<!-- ***** Our Classes End ***** -->

@endsection