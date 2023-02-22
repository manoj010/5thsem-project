@extends('frontend.master')
@section('main')
<section class="section section-bg" id="call-to-action"
    style="background-image: url({{asset($bike->model_thumbnail) }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="cta-content">
                    <br>
                    <br>
                    <h2>Book<em> Now</em></h2>

                </div>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="row">
        <div class="col-lg-12 ">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Booking Detail</h3>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <img src="{{ url('/' . $bike->model_thumbnail) }}" alt="" class="img-fluid mb-3" width="30%">
                    </div>
                    <div class="detail">
                        <form action="{{ route('bookingSubmit') }}" method="post">
                            @csrf


                            <!-- //// -->
                            <div class="card-body card-block">
                                <div class="form-group "><label for="id" class=" form-control-label">Bike Id
                                    </label><input type="text" name="bike_id" id="id" value="{{ $bike->id }}"
                                        class="form-control">
                                </div>
                                <div class="form-group "><label for="bike" class=" form-control-label">Bike Name
                                    </label><input type="text" name="model_name" id="bike" class="form-control"
                                        value="{{ $bike->model_name }}">
                                </div>
                                <div class="form-group "><label for="user_name" class=" form-control-label">User Name
                                    </label><input type="text" name="name" id="user_name"
                                        value="{{ auth()->user()->name }}" class="form-control">
                                </div>
                                <div class="form-group "><label for="email" class=" form-control-label">User Email
                                    </label><input type="email" name="email" id="email"
                                        value="{{ auth()->user()->email }}" class="form-control">
                                </div>
                                <div class="form-group "><label for="phone" class=" form-control-label">User Phone
                                    </label><input type="text" name="phone" id="phone"
                                        value="{{ auth()->user()->phone }}" class="form-control">
                                </div>

                                <div class="col-sm-6 text-secondary">
                                    <input type="submit" class="btn btn-primary px-4 mt-2" value="Submit" />
                                </div>
                            </div>

                            <!-- ///////// -->

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection