@extends('frontend.master')
@section('main')
<!-- ***** Call to Action Start ***** -->
<section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/bike-landscape.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="cta-content">


                    <br>
                    <br>
                    <h2>Filter by <em> Bikes <em> and</em> Scooters</em>
                    </h2>



                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Call to Action End ***** -->

<!-- ***** Fleet Starts ***** -->
<section class="section" id="trainers">
    <div class="container">
        <div class="row mt-4">
            <!-- upcoming vehicle -->

            <div class="col-lg-3 col-12 card">

                <div class="card-header">
                    <h4 class="text-center">Filter By Brand</h4>
                </div>

                <div class="row">
                    <form action="{{route('all.filter')}}" method="post">
                        @csrf


                        <div class="sidebar-widget price_range range mb-30">
                            <div class="price-filter mb-4">
                                <div class="price-filter-inner">
                                    <div id="slider-range"
                                        class="mb-20 noUi-target noUi-ltr noUi-horizontal noUi-background">
                                        <div class="noUi-base">
                                            <div class="noUi-origin noUi-connect" style="left: 1.05%;">
                                                <div class="noUi-handle noUi-handle-lower"></div>
                                            </div>
                                            <div class="noUi-origin noUi-background" style="left: 90.8%;">
                                                <div class="noUi-handle noUi-handle-upper"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div class="caption">From: <strong id="slider-range-value1"
                                                class="text-brand">$21</strong></div>
                                        <div class="caption">To: <strong id="slider-range-value2"
                                                class="text-brand">$1,816</strong></div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group">
                                <div class="list-group-item mb-10 mt-10">

                                    @if(!empty($_GET['brand']))
                                    @php
                                    $filterBrand = explode(',',$_GET['brand']);
                                    @endphp
                                    @endif
                                    <div class="custome-checkbox">
                                        @foreach($brands as $brand)
                                        @php
                                        $model =App\Models\VehicleModel::where('brand_id',$brand->id)->get();
                                        @endphp
                                        <input class="form-check-input " type="checkbox" name="brand[]"
                                            id="exampleCheckbox{{$brand->id}}" value="{{$brand->brand_slug}}"
                                            @if(!empty($filterBrand) && in_array($brand->brand_slug,$filterBrand))
                                        checked @endif
                                        onchange="this.form.submit()">
                                        <label class="form-check-label mb-2"
                                            for="exampleCheckbox{{$brand->id}}"><span>{{$brand->brand_name}}
                                                ({{count($model)}})</span></label>
                                        <br>
                                        @endforeach
                                    </div>


                                </div>
                            </div>
                            <a href="shop-grid-right.html" class="btn ml-5 btn-primary text-center"><i
                                    class="fi-rs-filter mr-5 "></i>
                                Fillter</a>
                        </div>
                    </form>

                </div>
            </div>

            <!--end upcoming vehicle -->
            <div class="col-lg-9 col-12 ">
                <div class="row">
                    <div class="col-12 card p-3">
                        <h5> Brand</h5>
                        <p class="fs-2">Hero Scooters price starts at Rs 68,368. Hero offers total of 6 scooters of
                            which
                            1
                            model is
                            upcoming which include eMaestro. The Hero Maestro Edge 125 is the most expensive among
                            scooters of Hero with a price tag of Rs 86,766.The most popular names in the line-up include
                            Xoom 110, Pleasure Plus, Maestro Edge 125, Destini 125 and Maestro Edge 110. Get the</p>
                    </div>
                    <hr>
                    <button class="btn btn-link" style="color:dark-blue;">Read More </button>
                    <div class="col-12 card-header">
                        <div class="row">
                            <div class="col-lg-12">
                                <h5>Latest Bike</h5>
                            </div>

                        </div>



                    </div>
                    <div class="col-12 card">
                        <div class="row">


                            @foreach($models as $bike)
                            <div class="col-lg-4 mt-2">
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
    </div>
</section>
<!-- ***** Fleet Ends ***** -->
@endsection