@extends('frontend.master')
@section('main')
    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/bike-landscape.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>Book<em> Now</em></h2>
                        <h2>{{ $bike->brand_id }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h3>Booking Detail</h3>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <img src="{{ url('/' . $bike->model_thumbnail) }}" alt="" class="img-fluid mb-3" width="70%" >
                        </div>
                        <div class="detail">
                            <form action="{{ route('bookingSubmit') }}" method="post" >
                                @csrf
                                <input type="text" value="{{ $bike->id }}" class="form-control mb-3" name="bike_id">
                                <input type="text" value="{{ $bike->model_name }}" class="form-control mb-3" name="model_name">
                                <input type="text" name="name" value="{{ auth()->user()->name }}" class="form-control mb-3">
                                <input type="text" name="email" value="{{ auth()->user()->email }}" class="form-control mb-3">
                                <input type="text" name="phone" value="{{ auth()->user()->phone }}" class="form-control mb-3">
                                <button class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
