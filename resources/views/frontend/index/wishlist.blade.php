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
        <div class="card body">
            <div class="card-header">
                <strong class="card-title text-center">Wishlist</strong>
            </div>
            <div class="card-body">
                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>SN</th>
                            <th>Vehicle Model</th>
                            <th>Displacement</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($wishlist as $key => $wishlists)
                        <tr>
                            <td>{{$key+1}}</td>

                            <td>{{$wishlists['model']['model_name']}}</td>
                            <td>{{$wishlists['model']['displacement']}} CC
                            </td>

                            <td><img src="{{ asset( $wishlists->model->model_thumbnail) }}" width="100"> </td>
                            <td>
                                <a href="" class="btn btn-danger">Remove</a>
                                <a href="" class="btn btn-success">Booking</a>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endforeach
<!-- Wishlist -->
@endsection