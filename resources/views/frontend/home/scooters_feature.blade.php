<section class="section" id="trainers">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading">
                    <h2>Featured <em>Scooters</em></h2>
                    <img src="{{asset('frontend/assets/images/line-dec.png')}}" alt="" />
                    <p>
                        Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed
                        viverra ipsum dolor, ultricies fermentum massa consequat eu.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">

            @php
            $category_bikes =App\Models\Category::where('category_name','Best Scooter')->get();
            @endphp

            @foreach($category_bikes as $top_scooters)

            @php
            $scooters
            =App\Models\VehicleModel::where('category_id',$top_scooters->id)->orderBy('model_name','ASC')->get();
            @endphp

            @foreach($scooters as $scooter)
            <div class="col-lg-3">
                <div class="trainer-item">
                    <div class="image-thumb">
                        <img src="{{asset($scooter->model_thumbnail)}}" alt="" />
                    </div>
                    <div class="down-content">
                        <span>
                            <del><sup>$</sup>11999 </del> &nbsp; <sup>$</sup>11779
                        </span>

                        <h4>Lorem ipsum dolor sit amet, consectetur</h4>

                        <p>
                            <i class="fa fa-dashboard"></i> 130 000km
                            <i class="fa fa-cube"></i> 1800 cc &nbsp;&nbsp;&nbsp;
                            <i class="fa fa-cog"></i> Manual &nbsp;&nbsp;&nbsp;
                        </p>

                        <ul class="social-icons">
                            <li><a href="{{asset('frontend/')}}aprilia150details.html">+ Preview</a></li>
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