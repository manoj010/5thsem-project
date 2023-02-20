<section class="section" id="trainers">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading">
                    <h2>{{$category_3->category_name}} <em>{{$category_3['vehicle']['vehicle_name']}}</em></h2>
                    <hr>
                </div>
            </div>
        </div>
        <div class="row">



            @foreach($category_3_model as $bike)
            <div class="col-lg-3">
                <div class="trainer-item">
                    <a href="{{ url('model/details/'.$bike->id.'/'.$bike->model_slug )}} class=" image-thumb">
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
                            <i class="fa fa-dashboard"></i> {{$bike->mileage}} km/hr &nbsp;&nbsp;&nbsp;
                            <i class="fa fa-cube"></i> {{$bike->displacement}} cc &nbsp;&nbsp;&nbsp;
                            <i class="fa fa-cog"></i> {{$bike->emission_type}} &nbsp;&nbsp;&nbsp;
                        </p>

                        <ul class="social-icons text-center">
                            <a href="" class="primaryButton  btn-dcb p-2" style="border:1px solid red"><span><i
                                        class="fa fa-cart-plus"> </i> Book Now</a>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach

        </div>

        <br />

        <div class="main-button text-center">
            <a href="viewscooter.html">View Scooters</a>
        </div>
    </div>
</section>