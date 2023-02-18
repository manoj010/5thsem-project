<section class="section" id="trainers">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading">
                    <h2>Best <em>Scooters</em></h2>
                    <hr>
                </div>
            </div>
        </div>
        <div class="row">

            @php
            $category_bikes =App\Models\Category::where('category_name','Latest Scooter')->get();
            @endphp

            @foreach($category_bikes as $top_scooters)

            @php
            $scooters
            =App\Models\VehicleModel::where('category_id',$top_scooters->id)->orderBy('model_name','ASC')->get();
            @endphp

            @foreach($scooters as $scooter)
            <div class="col-lg-3">
                <div class="trainer-item">
                    <a href="{{url('model/details/'.$scooter->id.'/'.$scooter->model_slug )}}" class="image-thumb">
                        <img src="{{asset($scooter->model_thumbnail)}}" alt="" />
                    </a>
                    <div class="down-content">
                        <div class="bike_name">
                            <a href="" class="title" title="Model Name">{{$scooter->model_name}}</a>
                        </div>
                        <div class="price">
                            <p>Rs. {{$scooter->price}} </p>
                        </div>

                        <p>
                            <i class="fa fa-dashboard"></i> {{$scooter->mileage}} km/hr &nbsp;&nbsp;&nbsp;
                            <i class="fa fa-cube"></i> {{$scooter->displacement}} cc &nbsp;&nbsp;&nbsp;
                            <i class="fa fa-cog"></i> {{$scooter->emission_type}} &nbsp;&nbsp;&nbsp;
                        </p>

                        <ul class="social-icons text-center">
                            <span class="primaryButton  btn-dcb p-2" style="border:1px solid red">View February
                                Offers</span>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
            @endforeach
        </div>

        <br />

        <div class="main-button text-center">
            <a href="viewscooter.html">View Scooters</a>
        </div>
    </div>
</section>