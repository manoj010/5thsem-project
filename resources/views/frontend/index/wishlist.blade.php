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
                    <h2>Our Range Of <span>Wishlist</span> </>
                    </h2>



                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Call to Action End ***** -->

<!-- Wishlist -->
<div class="container">
    <div class="card shadow">
        <div class="card-body">
            @if($wishlist->count() > 0)

            @else

            <h4> There is no model on wishlist </h4>
            @endif
        </div>
    </div>
</div>
<!-- Wishlist -->
@endsection