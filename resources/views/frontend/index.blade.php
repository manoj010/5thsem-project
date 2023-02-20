 @extends('frontend.master')
 @section('main')

 <!-- ***** Header Area Start ***** -->
 @include('frontend.home.main_banner')
 <!-- ***** Header Area End ***** -->

 <!-- ***** popular brand Starts ***** -->
 @include('frontend.home.popular_brand')
 <!-- ***** popular brand Ends ***** -->

 <!-- *****Best Bikes Starts ***** -->
 @include('frontend.home.bikes_feature')
 <!-- ***** Bikes Ends ***** -->

 <!-- *****Best Scooter Starts ***** -->
 @include('frontend.home.scooters_feature')
 <!-- ***** Scooter Ends ***** -->

 <!-- *****Popular Scooter Starts ***** -->
 @include('frontend.home.popular_bikes')
 <!-- ***** Scooter Ends ***** -->

 <!-- *****Popular Scooter Starts ***** -->
 @include('frontend.home.popular_scooter')
 <!-- ***** Scooter Ends ***** -->


 <!-- ***** Call to Action Start ***** -->
 <section class="section section-bg" id="call-to-action"
     style="background-image: url({{asset('frontend/assets/images/bike-landscape.jpg')}})">
     <div class="container">
         <div class="row">
             <div class="col-lg-10 offset-lg-1">
                 <div class="cta-content">
                     <h2>Send us a <em>message</em></h2>
                     <p>
                         Ut consectetur, metus sit amet aliquet placerat, enim est
                         ultricies ligula, sit amet dapibus odio augue eget libero. Morbi
                         tempus mauris a nisi luctus imperdiet.
                     </p>
                     <div class="main-button">
                         <a href="contact.html">Contact us</a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- ***** Call to Action End ***** -->

 @endsection