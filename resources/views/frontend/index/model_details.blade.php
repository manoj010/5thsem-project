@extends('frontend.master')
@section('main')



<!-- ***** Call to Action Start ***** -->
<section class="section section-bg" id="call-to-action"
    style="background-image: url({{asset($models->model_thumbnail) }})">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="cta-content">
                    <br />
                    <br />
                    <br>
                    <br>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Call to Action End ***** -->

<!-- ***** Fleet Starts ***** -->
<section class="section" id="trainers">
    <div class="container model_data">
        <div class="nav-bike ">
            <ul class="nav nav-tabs justify-content-center " role="presentation">
                <li class="ul-bike nav-item">
                    <a href="#bike" data-bs-toggle="tab" id="bike-tab" role="tab" aria-controls="bike"
                        area-selected="true" class="nav-link active">Bike</a>
                </li>
                <li class="ul-bike nav-item">
                    <a href="#price" data-bs-toggle="tab" id="price-tab" role="tab" aria-controls="price"
                        area-selected="true" class="nav-link">Price</a>
                </li>
                <li class="ul-bike nav-item">
                    <a href="#offer" data-bs-toggle="tab" id="offer-tab" role="tab" aria-controls="offer"
                        area-selected="true" class="nav-link">Booking</a>
                </li>
                <li class="ul-bike nav-item">
                    <a href="#specs" data-bs-toggle="tab" role="tab" aria-controls="specs" area-selected="true"
                        class="nav-link">Specs</a>
                </li>
                <li class="ul-bike nav-item">
                    <a href="#review" data-bs-toggle="tab" role="tab" aria-controls="review" area-selected="true"
                        class="nav-link">Review</a>
                </li>
            </ul>
            <ul class="nav p-0">
                <li class="ul-bike " style="font-size: 13px;  ">
                    <a href="" style=" color:black;">Home <span>></span></a>
                </li>





                <li class="ul-bike " style="font-size: 13px;">
                    <a href="" style=" color:black;">{{$models['brand']['brand_name']}} <span>></span></a>
                </li>

            </ul>
            <hr>
            <div class="tab-content" id="myTabControl">
                <div class="tab-pane fade show active" role="tab-pane" id="bike" aria-labelledby="bike-tab">
                    <div class="d-flex">
                        <div class="row justify-content-start" style="
                  max-height: 400px;
                  width: 400px;
                  margin-left: 20px;
                  margin-bottom: 20px;
                ">

                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">

                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="{{asset($models->model_thumbnail)}}"
                                            alt="First slide" />
                                    </div>
                                    @foreach( $multiImg as $multiImgs)
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="{{asset($multiImgs->photo_name)}}"
                                            alt="Second slide" />
                                    </div>
                                    @endforeach
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                            <br />
                            <br />
                        </div>
                        <div class="row justify-content-center"
                            style="max-height: 400px; width: 400px; margin-left: 20px; margin-bottom: 20px">
                            <div class=" bike-content" style="padding: 20px; margin: 10px; line-height: 40px;">


                                <h5> <strong>{{$models->model_name}}</strong> </h5>


                                <div class="span">
                                    <span style="color:rgb(199, 80, 25)">Rs.
                                        3,59,900
                                    </span>

                                    <ul class="social-icons mt-2">
                                        <span class="primaryButton  btn-dcb p-2"
                                            style="background-color: #d02f2f; color:#fff">View February
                                            Offers</span>


                                    </ul>
                                </div>
                                <div class="short-desc">
                                    <span>Don't miss out on the best offers this February</span>
                                </div>
                            </div>
                        </div>

                        <div class=" row justify-content-end ">

                            <div class=" font"
                                style="background-color:#e9e9e9 ;height: 38px; width:39px; border-radius: 50% ; margin-top:22px; margin-left:10px">
                                <span class="" style=" justify-content: center; ">

                                    @php
                                    $user_fav =
                                    App\Models\Wishlist::where('model_id',$models->id)->where('user_id',Auth::id())->first();
                                    @endphp


                                    @if(!$user_fav)
                                    <form action="{{route('add.wishlist')}}" method="post">
                                        @csrf

                                        @auth
                                        <input type="hidden" name="model_id" value="{{ $models->id }}">
                                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                        @endauth

                                        <button type="submit" style="border-radius:50%" class="btn btn-primary ">

                                            <i class=" fa-regular fa-heart  "></i>
                                        </button>

                                    </form>
                                    @else
                                    <a href="" style="border-radius:50%" class="btn btn-primary ">
                                        <i class="fa-solid fa-heart"></i>
                                    </a>
                                    @endif

                                </span>

                            </div>
                        </div>


                    </div>

                </div>

                <div class=" tab-pane fade show " role=" tab-pane" id="price" aria-labelledby="price-tab">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="d-flex justfly-content-starts p-2">
                                <img src="{{asset($models->model_thumbnail) }}" style="height: 15rem;" alt="" />
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class=" bike-content" style="padding: 20px; margin: 10px; line-height: 30px;">


                                <h5>On Road Price of <strong>{{$models->model_name}}</strong>
                                </h5>
                                <hr>
                                <div class="span" style="color:rgb(199, 80, 25)">
                                    <span>Rs.
                                        <del>3,99,900 </del> &nbsp; 3,59,900
                                    </span>
                                </div>


                                <p>
                                    <i class="fa fa-dashboard"></i> 130 000km &nbsp;&nbsp;&nbsp;
                                    <i class="fa fa-cube"></i> 1800 cc &nbsp;&nbsp;&nbsp;
                                    <i class="fa fa-cog"></i> Manual &nbsp;&nbsp;&nbsp;
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade show " role="tab-pane" id="offer" aria-labelledby="offer-tab">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="d-flex justfly-content-starts p-2">
                                <img src="{{asset($models->model_thumbnail) }}" style="height: 15rem;" alt="" />
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class=" bike-content" style="padding: 20px; margin: 10px; line-height: 40px;">


                                <h5> <strong>{{$models->model_name}}</strong> </h5>


                                <div class="span" style="color:rgb(199, 80, 25)">

                                    <!-- rating -->
                                    <!-- end rating -->
                                    <ul class="social-icons mt-2">
                                        <a href="{{ route('booking',$models->id) }}" class="primaryButton  btn-dcb p-2"
                                            style="border:1px solid red"><span><i class="fa fa-cart-plus"> </i> Book
                                                Now</a>
                                    </ul>
                                    <!-- <div class="short-desc">
                                        <span ">Don't miss out on the best offers this February</span>
                </div> -->
                                </div>



                            </div>
                        </div>
                    </div>
                </div>



                <div class=" tab-pane fade show" role="tab-pane" id="specs" aria-labelledby="specs-tab">
                    <div class="row" id="tab">
                        <div class="col-lg-4">
                            <ul>

                                <li>
                                    <a href="#tabs-1"><i class="fa fa-cog"></i>
                                        Engine </a>
                                </li>
                                <li>
                                    <a href="#tabs-2"><i class="fa fa-plus-circle"></i>
                                        Safety</a>
                                </li>
                                <li>
                                    <a href="#tabs-3"><i class="fa fa-info-circle"></i>
                                        Performance</a>
                                </li>
                                <li>
                                    <a href="#tabs-4"><i class="fa-solid fa-weight-scale"></i>
                                        Dimensions </a>
                                </li>
                                <li>
                                    <a href="#tabs-5"><i class="fa-sharp fa-solid fa-bolt"></i>
                                        Electricals</a>
                                </li>
                                <li>
                                    <a href="#tabs-6"><i class="fa-solid fa-shield"></i>
                                        Tyres and Brakes</a>
                                </li>
                                <li>
                                    <a href="#tabs-7"><i class="fa-solid fa-arrow-up-wide-short"></i>
                                        Underpinnings</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-8">
                            <section class="tabs-content" style="width: 100%">
                                <article id="tabs-1">
                                    <h4>Engine and Transmission</h4>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label>Engine Type</label>

                                            <p>{{$models->engine_type}}</p>
                                        </div>

                                        <div class="col-sm-6">
                                            <label>Displacement</label>

                                            <p>{{$models->displacement}}<span> CC
                                                </span> </p>
                                        </div>

                                        <div class="col-sm-6">
                                            <label> Max Power</label>

                                            <p>{{$models->max_power}}</p>
                                        </div>

                                        <div class="col-sm-6">
                                            <label>Max Torque</label>

                                            <p>{{$models->max_torque}}</p>
                                        </div>

                                        <div class="col-sm-6">
                                            <label>Mileage</label>

                                            <p>{{$models->mileage}} <span> KMpl</span></p>
                                        </div>

                                        <div class="col-sm-6">
                                            <label>Emission Type</label>

                                            <p>{{$models->emission_type}} </p>

                                        </div>

                                        <div class="col-sm-6">
                                            <label>Braking Type</label>

                                            <p>{{$models->braking_type}} </p>
                                        </div>

                                        <div class="col-sm-6">
                                            <label>Color</label>

                                            <p>Black-Orange</p>
                                        </div>

                                    </div>
                                </article>
                                <article id="tabs-2">
                                    <h4>Features and Safety</h4>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label>Engine Type</label>

                                            <p>{{$models->engine_type}}</p>
                                        </div>

                                        <div class="col-sm-6">
                                            <label>Displacement</label>

                                            <p>{{$models->displacement}}<span> CC
                                                </span> </p>
                                        </div>

                                        <div class="col-sm-6">
                                            <label> Max Power</label>

                                            <p>{{$models->max_power}}</p>
                                        </div>

                                        <div class="col-sm-6">
                                            <label>Max Torque</label>

                                            <p>{{$models->max_torque}}</p>
                                        </div>

                                        <div class="col-sm-6">
                                            <label>Mileage</label>

                                            <p>{{$models->mileage}} <span> KMpl</span></p>
                                        </div>

                                        <div class="col-sm-6">
                                            <label>Emission Type</label>

                                            <p>{{$models->emission_type}} </p>

                                        </div>

                                        <div class="col-sm-6">
                                            <label>Braking Type</label>

                                            <p>{{$models->braking_type}} </p>
                                        </div>

                                        <div class="col-sm-6">
                                            <label>Color</label>

                                            <p>Black-Orange</p>
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Color</label>

                                            <p>Black-Orange</p>
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Color</label>

                                            <p>Black-Orange</p>
                                        </div>
                                    </div>
                                </article>
                                <article id="tabs-3">
                                    <h4>Mileage and Performance</h4>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p>ABS</p>
                                        </div>
                                        <div class="col-sm-6">
                                            <p>Digita Screen View</p>
                                        </div>
                                        <div class="col-sm-6">
                                            <p>F.I system</p>
                                        </div>
                                    </div>
                                </article>
                                <article id="tabs-4">
                                    <h4>Dimensions and Capacity</h4>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label>Name</label>

                                            <p>Ram Prasad</p>
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Phone</label>

                                            <p>9852146523</p>
                                        </div>

                                        <div class="col-sm-6">
                                            <label>Email</label>
                                            <p><a href="#">ramprasad@gmail.com</a>
                                            </p>
                                        </div>
                                    </div>
                                </article>
                                <article id="tabs-5">
                                    <h4>Electricals</h4>


                                </article>
                                <article id="tabs-6">
                                    <h4>Tyres and Brakes</h4>


                                </article>
                                <article id="tabs-7">
                                    <h4>Underpinnings</h4>


                                </article>
                            </section>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade show" role="tab-pane" id="review" aria-labelledby="review-tab">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="d-flex justfly-content-starts p-2">
                                <img src="{{asset($models->model_thumbnail) }}" style="height: 15rem;" alt="" />
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class=" bike-content" style="padding: 20px; margin: 10px; line-height: 30px;">


                                <h5>Review of
                                    <strong>{{$models->model_name}}</strong>
                                </h5>
                                <hr>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br />
        <br />

        <div class="right"></div>
    </div>
</section>
<!-- ***** Fleet Ends ***** -->

@endsection