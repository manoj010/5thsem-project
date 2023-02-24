@extends('frontend.master')
@section('main')

<section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/bike-landscape.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>Learn more <em>About Us</em></h2>
                        <p>Ut consectetur, metus sit amet aliquet placerat, enim est ultricies ligula</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Compare start ***** -->
<div class="wrapper">
    <h1>Compare Bikes <em>&</em> Scooters</h1>

    <div class="Box">
        <div class="Box1">
            <div class="AddCircle">
                <div class="circle">
                   <div class="plus">
                    <button style="border: none; background-color: transparent;"><a href="compareSpecification.html"><img src="assets/images/plus-icon.png" style="height: 25px; width: 25px;" alt=""></a></button>
                   </div>
                  
                </div>
            </div>
                <div class="Add-text">
                    <p>Add Bike</p>
                </div>
                <div class="drop-down">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Select Brand/Model
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#">TVS RTR 160</a>
                          <a class="dropdown-item" href="#">Bajaj NS 200</a>
                          <a class="dropdown-item" href="#">Bajaj Pulsar 220F</a>
                        </div>
                      </div>
                </div>
        </div>

        <div class="Box2">
            <div class="AddCircle">
                <div class="circle">
                    <div class="plus">
                        <button style="border: none; background-color: transparent;"><a href="dropdown"><img src="assets/images/plus-icon.png" style="height: 25px; width: 25px;" alt=""></a></button>
                    </div>

                </div>
            </div>
            <div class="Add-text">
                <p>Add Bike</p>
            </div>
            <div class="drop-down">
                <div class="drop-down">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Select Brand/Model
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#">TVS RTR 160</a>
                          <a class="dropdown-item" href="#">Bajaj NS 200</a>
                          <a class="dropdown-item" href="#">Bajaj Pulsar 220F</a>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
 <!-- ***** Compare end ***** -->
@endsection