<section class="section" id="trainers">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading">
                    <h2>Popular <em>Bikes</em></h2>


                </div>
            </div>
        </div>
        <div class="row">
            @php
            $category_bikes =App\Models\Category::where('category_name','Brand Bike')->get();
            @endphp

            @foreach($category_bikes as $top_bikes)

            @php
            $bikes
            =App\Models\VehicleModel::where('category_id',$top_bikes->id)->orderBy('model_name','ASC')->get();
            @endphp

            @foreach($bikes as $bike)
            <div class="col-lg-3">
                <div class="trainer-item">
                    <div class="image-thumb">
                        <img src="{{asset($bike->model_thumbnail)}}" alt="" />
                    </div>
                    <div class="down-content">
                        <span>
                            <del><sup>$</sup>11999 </del> &nbsp; <sup>$</sup>11779
                        </span>

                        <h4>Lorem ipsum dolor sit amet, consectetur</h4>

                        <p>
                            <i class="fa fa-dashboard"></i> 130 000km &nbsp;&nbsp;&nbsp;
                            <i class="fa fa-cube"></i> 1800 cc &nbsp;&nbsp;&nbsp;
                            <i class="fa fa-cog"></i> Manual &nbsp;&nbsp;&nbsp;
                        </p>

                        <ul class="social-icons">
                            <li><a href="dukedetails.html">+ Peview</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
            @endforeach

        </div>

        <br />

        <div class="main-button text-center">
            <a href="viewbikes.html">View Bikes</a>
        </div>
    </div>
</section>