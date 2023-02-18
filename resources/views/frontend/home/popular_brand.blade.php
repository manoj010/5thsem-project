<section class="section" id="trainers">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 ">
                <div class="section-heading">
                    <h2>Popular <em>Brand</em></h2>
                    <hr>
                </div>
            </div>
        </div>
        <div class="row">
            @php
            $popular_brands =App\Models\Brand::orderBy('brand_name','ASC')->limit(12)->get();
            @endphp

            @foreach($popular_brands as $brand)
            <div class="col-lg-2">
                <div class="trainer-item">
                    <div class="image-thumb">
                        <img src="{{asset($brand->brand_logo)}}" alt="" />
                    </div>

                </div>
            </div>
            @endforeach
        </div>

        <br />

        <div class="main-button text-center">
            <a href="viewbikes.html">All Brand</a>
        </div>
    </div>
</section>