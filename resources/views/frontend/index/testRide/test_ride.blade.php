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
                    <h2> <em>Test</em><span> Ride</span>
                    </h2>



                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Call to Action End ***** -->

<!-- ***** Fleet Starts ***** -->
<section class="section" id="trainers">

    <div class="col-12 col-md-10 col-lg-6 mx-auto mt-5 p-3 mb-5">

        <div class="card shadow ">
            <div class="card-header">
                <div class="card-title">
                    <h4 class="text-center"><strong>Test Ride Form</strong> </h4>

                </div>
            </div>
            <div class="card-body">

                <form data-toggle="validator" id="form" onsubmit="return validation()">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="firstname"> <span class="text-danger align-middle">* </span>
                                <strong>First Name</strong> :</label>
                            <input type="text" class="form-control" id="firstname" placeholder="First Name"
                                autocomplete="off">
                            <div class="invalid-feedback">
                                First Character Must be Capital and minimum 3 Characters.
                            </div>
                            <div class="valid-feedback">
                                First Name Format is Valid.
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lastname"><span class="text-danger align-middle">* </span>Last Name:</label>
                            <input type="text" class="form-control" id="lastname" placeholder="Last Name"
                                autocomplete="off">
                            <div class="invalid-feedback">
                                First Character Must be Capital and minimum 3 Characters.
                            </div>
                            <div class="valid-feedback">
                                Last Name Format is Valid.
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="email"><span class="text-danger align-middle">* </span>Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter Email Address"
                                autocomplete="off">
                            <div class="invalid-feedback">
                                Incorrect Email format.
                            </div>
                            <div class="valid-feedback">
                                Email Looks Good.
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="phone"><span class="text-danger align-middle">* </span>Mobile:</label>
                            <input type="tel" class="form-control" id="phone" placeholder="Enter Mobile Number"
                                autocomplete="off">
                            <div class="invalid-feedback">
                                Must Begin with + and min 6 and max 14
                            </div>
                            <div class="valid-feedback">
                                Phone Number Looks Good.
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <legend class="col-form-label"><span class="text-danger align-middle">* </span>Gender:
                            </legend>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="Male" name="customRadio" class="custom-control-input" required
                                    autocomplete="off">
                                <label class="custom-control-label" for="Male">Male</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="female" name="customRadio" class="custom-control-input" required
                                    autocomplete="off">
                                <label class="custom-control-label" for="female">Female</label>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="example-date-input" class="col-form-label"><span
                                    class="text-danger align-middle">* </span>Date:</label>
                            <input class="form-control" type="date" id="example-date-input" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="district"><span class="text-danger align-middle">* </span>District:</label>
                            <input type="text" class="form-control" id="district" placeholder="District"
                                autocomplete="off">
                            <div class="invalid-feedback">
                                District Name at least 3 Character.
                            </div>
                            <div class="valid-feedback">
                                District Name Looks Good.
                            </div>
                        </div>
                        <div class="form-group col">
                            <label for="city"><span class="text-danger align-middle">* </span>City:</label>
                            <input type="text" class="form-control" id="city" placeholder="City" autocomplete="off">
                            <div class="invalid-feedback">
                                City Name at least 3 Character.
                            </div>
                            <div class="valid-feedback">
                                City Name Looks Good.
                            </div>
                        </div>
                        <div class="form-group col">
                            <label for="zip"><span class="text-danger align-middle">* </span>Zip:</label>
                            <input type="text" class="form-control" id="zip" placeholder="Zip" autocomplete="off">
                            <div class="invalid-feedback">
                                Zip must have 4 number.
                            </div>
                            <div class="valid-feedback">
                                Zip Number Looks Good.
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-dark d-block mx-auto">Sign up</button>

                </form>

            </div>
        </div>
    </div>
</section>
<!-- ***** Fleet Ends ***** -->
@endsection