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
                    <h2><span>Wishlist</span> </>
                    </h2>



                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Call to Action End ***** -->
@foreach($wishlist as $wishlists)
<!-- Wishlist -->
@php
@endphp
<div class="container">
    <div class="card shadow">
        <div class="card-body">
            {{$wishlists['vehicleModel']['model_name']}}

        </div>
    </div>
</div>
@endforeach
<!-- Wishlist -->
@endsection