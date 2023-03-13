<section class="section" id="trainers">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading">

                    <h2>
                        <em> Bikes</em> in Spotlight
                    </h2>

                    <hr>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 ">
                <div class="card-shadow">
                    <div class="card-header">
                        <div class="nav">
                            <ul class="nav nav-tabs justify-content-center " role="presentation">
                                <li class="ul-bike nav-item">
                                    <a href="#bike" data-bs-toggle="tab" id="bike-tab" role="tab" aria-controls="bike"
                                        area-selected="true" class="nav-link active">Bike</a>
                                </li>
                                <li class="ul-bike nav-item">
                                    <a href="#price" data-bs-toggle="tab" id="price-tab" role="tab"
                                        aria-controls="price" area-selected="true" class="nav-link">Price</a>
                                </li>
                                <li class="ul-bike nav-item">
                                    <a href="#offer" data-bs-toggle="tab" id="offer-tab" role="tab"
                                        aria-controls="offer" area-selected="true" class="nav-link">Booking</a>
                                </li>
                                <li class="ul-bike nav-item">
                                    <a href="#specs" data-bs-toggle="tab" role="tab" aria-controls="specs"
                                        area-selected="true" class="nav-link">Specs</a>
                                </li>
                                <li class="ul-bike nav-item">
                                    <a href="#review" data-bs-toggle="tab" role="tab" aria-controls="review"
                                        area-selected="true" class="nav-link">Review</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 card">
                        <div class="row">

                        </div>
                        <div class="row">


                            @foreach($category_1_model as $bike)
                            <div class="col-lg-3 mt-2">
                                <div class="trainer-item">
                                    <a href="{{ url('model/details/'.$bike->id.'/'.$bike->model_slug )}}"
                                        class=" image-thumb">
                                        <div><img src="{{asset($bike->model_thumbnail)}}" alt="" /></div>
                                    </a>
                                    <div class="down-content">

                                        <div class="bike_name">
                                            <a class="title" title="Model Name"
                                                href="{{ url('model/details/'.$bike->id.'/'.$bike->model_slug )}}">{{$bike->model_name}}
                                            </a>
                                        </div>
                                        <div class="price">
                                            <p>Rs. {{$bike->price}} </p>
                                        </div>

                                        <p>
                                            <i class="fa fa-dashboard"></i> {{$bike->mileage}} km/hr
                                            &nbsp;&nbsp;&nbsp;
                                            <i class="fa fa-cube"></i> {{$bike->displacement}} cc &nbsp;&nbsp;&nbsp;
                                            <i class="fa fa-cog"></i> {{$bike->emission_type}} &nbsp;&nbsp;&nbsp;
                                        </p>

                                        <ul class="social-icons text-center">
                                            <a href="{{ route('booking',$bike->id) }}"
                                                class="primaryButton  btn-dcb p-2" style="border:1px solid red"><span><i
                                                        class="fa fa-cart-plus"> </i>
                                                    Book
                                                    Now</a>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>

                    </div>

                </div>
            </div>


        </div>

        <br />

        <div class="main-button text-center">
            <a href="{{route('all.filter.bikes&scooters')}}">All
                Bikes and Scooters
            </a>
        </div>
    </div>
</section>