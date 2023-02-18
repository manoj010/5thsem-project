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
    <div class="container">
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
                        area-selected="true" class="nav-link">Offer</a>
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
                <li class="ul-bike " style="font-size: 12px;">
                    <a href="" class=" ">Home</a>
                </li>
                <li class="ul-bike " style="font-size: 12px;">
                    <a href="" class=" ">Brand Name</a>
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
                                        <img class="d-block w-100" src="{{asset('frontend/assets/images/duke390.jpg')}}"
                                            alt="First slide" />
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="{{asset('frontend/assets/images/duke390.jpg')}}"
                                            alt="Second slide" />
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="{{asset('frontend/assets/images/duke390.jpg')}}"
                                            alt="Third slide" />
                                    </div>
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


                                <div class="span" style="color:rgb(199, 80, 25)">
                                    <span>Rs.
                                        3,59,900
                                    </span>
                                    <!-- rating -->
                                    <!-- end rating -->
                                    <ul class="social-icons mt-2">
                                        <span class="primaryButton  btn-dcb p-2"
                                            style="background-color: #d02f2f; color:#fff">View February
                                            Offers</span>
                                        </li>

                                    </ul>
                                    <div class="short-desc">
                                        <span ">Don't miss out on the best offers this February</span>
                </div>
                </div>
                

               
              </div>

                <br />
              </div>
            </div>
            
          </div>
           
            <div
              class=" tab-pane fade show "
              role=" tab-pane" id="price" aria-labelledby="price-tab">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="d-flex justfly-content-starts p-2">
                                                        <img src="{{asset($models->model_thumbnail) }}"
                                                            style="height: 15rem;" alt="" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class=" bike-content"
                                                        style="padding: 20px; margin: 10px; line-height: 30px;">


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

                                    <div class="tab-pane fade show " role="tab-pane" id="offer"
                                        aria-labelledby="offer-tab">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="d-flex justfly-content-starts p-2">
                                                    <img src="{{asset($models->model_thumbnail) }}"
                                                        style="height: 15rem;" alt="" />
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class=" bike-content"
                                                    style="padding: 20px; margin: 10px; line-height: 40px;">


                                                    <h5> <strong>{{$models->model_name}}</strong> </h5>


                                                    <div class="span" style="color:rgb(199, 80, 25)">
                                                        <span>Rs.
                                                            <del>3,99,900 </del> &nbsp; 3,59,900
                                                        </span>
                                                        <!-- rating -->
                                                        <!-- end rating -->
                                                        <ul class="social-icons mt-2">
                                                            <span class="primaryButton  btn-dcb p-2"
                                                                style="background-color: #d02f2f; color:#fff">View
                                                                February
                                                                Offers</span>
                                                        </ul>
                                                        <div class="short-desc">
                                                            <span ">Don't miss out on the best offers this February</span>
                </div>
                </div>
                

               
              </div>
            </div>
          </div> 
          </div>

           

            <div
              class=" tab-pane fade show" role="tab-pane" id="specs" aria-labelledby="specs-tab">
                                                                <div class="row" id="tabs">
                                                                    <div class="col-lg-4">
                                                                        <ul>
                                                                            <li>
                                                                                <a href="#tabs-1"><i
                                                                                        class="fa fa-cog"></i> Bike
                                                                                    Specs</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#tabs-2"><i
                                                                                        class="fa fa-info-circle"></i>
                                                                                    Bike Description</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#tabs-3"><i
                                                                                        class="fa fa-plus-circle"></i>
                                                                                    Bike Extras</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#tabs-4"><i
                                                                                        class="fa fa-phone"></i> Contact
                                                                                    Details</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-lg-8">
                                                                        <section class="tabs-content"
                                                                            style="width: 100%">
                                                                            <article id="tabs-1">
                                                                                <h4>Vehicle Specs</h4>

                                                                                <div class="row">
                                                                                    <div class="col-sm-6">
                                                                                        <label>Type</label>

                                                                                        <p>Brand New</p>
                                                                                    </div>

                                                                                    <div class="col-sm-6">
                                                                                        <label>Make</label>

                                                                                        <p>Lorem ipsum dolor sit</p>
                                                                                    </div>

                                                                                    <div class="col-sm-6">
                                                                                        <label> Model</label>

                                                                                        <p>Lorem ipsum dolor sit</p>
                                                                                    </div>

                                                                                    <div class="col-sm-6">
                                                                                        <label>First
                                                                                            registration</label>

                                                                                        <p>05/2010</p>
                                                                                    </div>

                                                                                    <div class="col-sm-6">
                                                                                        <label>Mileage</label>

                                                                                        <p>30 km</p>
                                                                                    </div>

                                                                                    <div class="col-sm-6">
                                                                                        <label>Engine size</label>

                                                                                        <p>390 cc</p>
                                                                                    </div>

                                                                                    <div class="col-sm-6">
                                                                                        <label>Power</label>

                                                                                        <p>85 hp</p>
                                                                                    </div>

                                                                                    <div class="col-sm-6">
                                                                                        <label>Color</label>

                                                                                        <p>Black-Orange</p>
                                                                                    </div>
                                                                                </div>
                                                                            </article>
                                                                            <article id="tabs-2">
                                                                                <h4>Vehicle Description</h4>

                                                                                <p>
                                                                                    -12 months used <br />
                                                                                    - 2000km runned <br />
                                                                                    - Warranty <br />
                                                                                    Lorem ipsum dolor sit amet,
                                                                                    consectetur adipiscing elit,
                                                                                    sed do eiusmod tempor incididunt ut
                                                                                    labore et dolore
                                                                                    magna aliqua. Ut enim ad minim
                                                                                    veniam, quis nostrud
                                                                                    exercitation ullamco laboris nisi ut
                                                                                    aliquip ex ea
                                                                                    commodo consequat. Duis aute irure
                                                                                    dolor in
                                                                                    reprehenderit in voluptate velit
                                                                                    esse cillum dolore eu
                                                                                    fugiat nulla pariatur. Excepteur
                                                                                    sint occaecat cupidatat
                                                                                    non proident, sunt in culpa qui
                                                                                    officia deserunt mollit
                                                                                    anim id est laborum.
                                                                                </p>
                                                                            </article>
                                                                            <article id="tabs-3">
                                                                                <h4>Vehicle Extras</h4>

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
                                                                                <h4>Contact Details</h4>

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
                                                                                        <p><a
                                                                                                href="#">ramprasad@gmail.com</a>
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                            </article>
                                                                        </section>
                                                                    </div>
                                                                </div>
                                                        </div>

                                                        <div class="tab-pane fade show" role="tab-pane" id="review"
                                                            aria-labelledby="review-tab">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <div class="d-flex justfly-content-starts p-2">
                                                                        <img src="{{asset($models->model_thumbnail) }}"
                                                                            style="height: 15rem;" alt="" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                    <div class=" bike-content"
                                                                        style="padding: 20px; margin: 10px; line-height: 30px;">


                                                                        <h5>On Road Price of
                                                                            <strong>{{$models->model_name}}</strong>
                                                                        </h5>
                                                                        <hr>
                                                                        <div class="span"
                                                                            style="color:rgb(199, 80, 25)">
                                                                            <span>Rs.
                                                                                <del>3,99,900 </del> &nbsp; 3,59,900
                                                                            </span>
                                                                        </div>


                                                                        <p>
                                                                            <i class="fa fa-dashboard"></i> 130 000km
                                                                            &nbsp;&nbsp;&nbsp;
                                                                            <i class="fa fa-cube"></i> 1800 cc
                                                                            &nbsp;&nbsp;&nbsp;
                                                                            <i class="fa fa-cog"></i> Manual
                                                                            &nbsp;&nbsp;&nbsp;
                                                                        </p>
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