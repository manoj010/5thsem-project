@extends('frontend.master')
@section('main')

<section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/bike-landscape.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>Compared Bikes <em>Specification</em></h2>
                        <p>Ut consectetur, metus sit amet aliquet placerat, enim est ultricies ligula</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Specification start -->
    <div class="spec-text">
      <h1>Specifications</h1>
     </div>
  <div class="spec-wrapper">
    <section id="specifiaction-table">
     
       <div class="spec-table">
           <table class="table table-borderless">
               <thead>
                 <tr>
                   <th scope="col"><img src="assets/images/Specification-icon.png" style="height: 35px; width: 35px; " alt=""> Basic Informations</th>
                   <th scope="col">BIke Name</th>
                   <th scope="col">Second Bike Name</th>
               
                 </tr>
               </thead>
               <tbody>
                 <tr>
                   <th scope="row">On Road Price</th>
                   <td>$200</td>
                   <td>$100</td>
                 </tr>
                 <tr>
                   <th scope="row">Max Power</th>
                   <td>16.04 PS @ 8750 rpm</td>
                   <td>16.04 PS @ 8750 rpm</td>
                 
                 </tr>
                 <tr>
                   <th scope="row">Body Type</th>
                   <td>Sports Bike</td>
                   <td>Sports Bike</td>
                 </tr>
                 <tr>
                   <th scope="row">User Rating</th>
            
                     <td><div class="ratingStar">
                       <p>4.6</p>
                       <span class="fa fa-star checked"></span>
                       <span class="fa fa-star checked"></span>
                       <span class="fa fa-star checked"></span>
                       <span class="fa fa-star checked"></span>
                       <span class="fa fa-star-half-full checked"></span>

                     </div></td>
                     <td><div class="ratingStar">
                       <p>4.0</p>
                       <span class="fa fa-star checked"></span>
                       <span class="fa fa-star checked"></span>
                       <span class="fa fa-star checked"></span>
                       <span class="fa fa-star checked"></span>
                       <span class="fa fa-star"></span>
                     </div></td>
                 </tr>
                 <tr>
                   <th scope="row">Insurance</th>
                   <td>Rs. 5000</td>
                   <td>Rs. 10000</td>
                 </tr>
                 <tr>
                   <th scope="row">Colours</th>
                   <td>
                     <span class="dot1"></span>
                     <span class="dot2"></span>
                     <span class="dot3"></span>
                   </td>
                   <td>
                     <span class="dot4"></span>
                     <span class="dot5"></span>
                     <span class="dot6"></span>
                   </td>
                 </tr>
                 <tr>
                   <th scope="row">Body Type</th>
                   <td>Sports Bike</td>
                   <td>Sports Bike</td>
                 </tr>
               </tbody>
             </table>
       </div>
   </section>
  </div>

  <!-- engine transmission  -->
  <div class="spec-wrapper">

    <section id="specifiaction-table">
     
      <div class="spec-table">
        <p>
          <table class="table table-borderless">
              <thead>
                <tr>
                  <th scope="col"><img src="assets/images/engine-icon.png" style="height: 35px; width: 35px; " alt="">  Engine & Transmission</th>
               
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">Engine type</th>
                  <td>	
                   SI, 4 stroke, Air cooled, SOHC, Fuel Injection</td>
                  <td>	
                   SI, 4 stroke, Air cooled, SOHC, Fuel Injection</td>
                </tr>
                <tr>
                  <th scope="row">Displacement</th>
                  <td>159.7 cc</td>
                  <td>159.7 cc</td>
                
                </tr>
                <tr>
                  <th scope="row">Max Torque</th>
                  <td>13.85 Nm @ 7000 rpm</td>
                  <td>13.85 Nm @ 7000 rpm</td>
                </tr>
                <tr>
                  <th scope="row">Cooling System</th>
                  <td>Air Cooled</td>
                  <td>Air Cooled</td>
                </tr>
               
  
                <span id="dots"></span><span id="more">
                 <tr>
                   <th scope="row">Insurance</th>
                   <td>Rs. 5000</td>
                   <td>Rs. 10000</td>
                 </tr>
                 <tr>
                   <th scope="row">Colours</th>
                   <td>
                     <span class="dot1"></span>
                     <span class="dot2"></span>
                     <span class="dot3"></span>
                   </td>
                   <td>
                     <span class="dot4"></span>
                     <span class="dot5"></span>
                     <span class="dot6"></span>
                   </td>
                 </tr>
                 <tr>
                   <th scope="row">Body Type</th>
                   <td>Sports Bike</td>
                   <td>Sports Bike</td>
                 </tr>
               </tbody>
              </span>
            </p>
               
             </table>
             <button onclick="myFunction()" id="myBtn">Read more</button>
         
       </div>
   </section>
  </div>
  <!-- engine transmission end -->
    

  <!-- Features -->

  <div class="spec-wrapper">

    <section id="specifiaction-table">
     
      <div class="spec-table">
          <table class="table table-borderless">
              <thead>
                <tr>
                  <th scope="col"><img src="assets/images/features-icon.png" style="height: 35px; width: 35px; " alt=""> Features</th>
               
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">Speedometer</th>
                  <td>	Digital</td>
                  <td> Digital</td>
                </tr>
                <tr>
                  <th scope="row">Tachometer</th>
                  <td>Digital</td>
                  <td>Digital</td>
                
                </tr>
                <tr>
                  <th scope="row">Odometer</th>
                  <td>Digital</td>
                  <td>Digital</td>
                </tr>
                <tr>
                  <th scope="row">Tripmeter</th>
                  <td>Digital</td>
                  <td>Digital</td>
                </tr>
                <tr>
                  <th scope="row">Fuel Gauge</th>
                  <td>Digital</td>
                  <td>Digital</td>
                </tr>
                <tr>
                  <th scope="row">Riding Modes</th>
                  <td><i class="fa fa-check" style="font-size:24px;color: green"></i></td>
                  <td></td>
                </tr>
              </div>
            </table>
            </section>
           </div>
                
    <!-- Features end -->

    <!-- tyres and brakes -->
    <div class="spec-wrapper2">

      <section id="specifiaction-table">
       
        <div class="spec-table">
          <p>
            <table class="table table-borderless">
                <thead>
                  <tr>
                    <th scope="col"><img src="assets/images/Tyres-icon.png" style="height: 35px; width: 35px; " alt=""> Tyres & Brakes</th>
                 
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">Front Brake Diameter</th>
                    <td>	270 mm</td>
                    <td> 270 mm</td>
                  </tr>
                  <tr>
                    <th scope="row">Rear Brake Diamete</th>
                    <td>130 mm</td>
                    <td>130 mm</td>
                  
                  </tr>
                </div>
              </table>
              </section>
             </div>
            
      <!-- tyres  and  brakes end-->

      <!-- Performance -->
      <div class="spec-wrapper2">

        <section id="specifiaction-table">
         
          <div class="spec-table">
            <p>
              <table class="table table-borderless">
                  <thead>
                    <tr>
                      <th scope="col"><img src="assets/images/performance-icon.png" style="height: 35px; width: 35px; " alt=""> Performance</th>
                   
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">Front Brake Diameter</th>
                      <td>	270 mm</td>
                      <td> 270 mm</td>
                    </tr>
                    <tr>
                      <th scope="row">Rear Brake Diamete</th>
                      <td>130 mm</td>
                      <td>130 mm</td>
                    
                    </tr>
                  </div>
                </table>
                </section>
               </div>
      <!-- Performance end -->
       <!-- Specification end -->

@endsection