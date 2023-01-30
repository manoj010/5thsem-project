<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

    <title>Suvida</title>

    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/bootstrap.min.css')}}" />

    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/font-awesome.css')}}" />

    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}" />
</head>

<body>
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo"><img src="{{asset('frontend/assets/images/logo.png')}}"
                                style="height: 60px; width: 60px; margin-left: -50px" alt="" /><em style="
                    position: absolute;
                    width: 69px;
                    height: 34px;
                    left: 60px;
                    top: 13px;
                    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial,
                      sans-serif;
                    font-style: normal;
                    font-size: 18px;
                    line-height: 34px;
                    color: #fff;
                    margin-left: -50px;
                  ">Suvida</em></a>
                        <!-- ***** Logo End ***** -->

                        <!-- search bar -->

                        <!-- serach bar end -->

                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="index.html" class="active">Home</a></li>
                            <!-- Bikes Menu -->
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="" role="button"
                                    aria-haspopup="true" aria-expanded="false">Bikes</a>

                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="latestbikes.html">Latest Bikes</a>
                                    <a class="dropdown-item" href="popularbikes.html">Popular Bikes</a>
                                    <a class="dropdown-item" href="budgetbikes.html">Best Budget Bikes</a>
                                </div>
                            </li>
                            <!-- Bikes Menu end -->

                            <!-- Scooter Menu -->
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="" role="button"
                                    aria-haspopup="true" aria-expanded="false">Scooter</a>

                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="latestscooter.html">Latest Scooter</a>
                                    <a class="dropdown-item" href="popularscooter.html">Popular Scooter</a>
                                    <a class="dropdown-item" href="budgetscooter.html">Best Budget Scooter</a>
                                </div>
                            </li>
                            <!-- Scooter Menu end -->

                            <li><a href="usedvehicle.html">Used Vehicles</a></li>

                            <li><a href="about.html">About</a></li>

                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                        <ul class="nav-auth">
                            <li>
                                <a>
                                    <div class="fas fa-search" id="search-btn"></div>
                                </a>
                            </li>
                            <li>
                                <a href="#"><img src="{{asset('frontend/assets/images/login-icon.png')}}"
                                        style="height: 35px; width: 35px" alt="" />Log In</a>
                            </li>

                            <li>
                                <a href="#"><img src="{{asset('frontend/assets/images/signup.png')}}"
                                        style="height: 30px; width: 30px; margin-bottom: 5px" alt="" />Sign Up</a>
                            </li>
                        </ul>

                        <a class="menu-trigger">
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
        <div class="search-form">
            <input type="search" id="search-box" placeholder="search here..." />
            <label for="search-box" class="fas fa-search"></label>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <video autoplay muted loop id="bg-video">
            <source src="{{asset('frontend/assets/images/video.mp4')}}" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="caption">
                <h6>Explore Our Ranges Of Bikes & Scooters</h6>
                <h2>Best <em>Brand New & Used Bikes Dealer</em> in town!</h2>
                <div class="main-button">
                    <a href="contact.html">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Bikes Starts ***** -->
    <section class="section" id="trainers">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Featured <em>Bikes</em></h2>
                        <img src="{{asset('frontend/assets/images/line-dec.png')}}" alt="" />
                        <p>
                            Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed
                            viverra ipsum dolor, ultricies fermentum massa consequat eu.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="{{asset('frontend/assets/images/duke390.jpg')}}" alt="" />
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
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="{{asset('frontend/assets/images/XR.webp')}}" alt="" />
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
                                <li><a href="XRdetails.html">+ Preview</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="{{asset('frontend/assets/images/royalenfield.jpg')}}" alt="" />
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
                                <li><a href="royalenfielddetails.html">+ Preview</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <br />

            <div class="main-button text-center">
                <a href="viewbikes.html">View Bikes</a>
            </div>
        </div>
    </section>
    <!-- ***** Bikes Ends ***** -->

    <!-- ***** Scooter Starts ***** -->
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
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="{{asset('frontend/assets/images/Aprilia.jpg')}}" alt="" />
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
                                <li><a href="{{asset('frontend/')}}aprilia150details.html">+ Preview</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="{{asset('frontend/assets/images/dio.jpeg')}}" alt="" />
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
                                <li><a href="diodetails.html">+ Preview</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="{{asset('frontend/assets/images/ntorq.jpg')}}" alt="" />
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
                                <li><a href="ntorqdetails.html">+ Preview</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <br />

            <div class="main-button text-center">
                <a href="viewscooter.html">View Scooters</a>
            </div>
        </div>
    </section>
    <!-- ***** Scooter Ends ***** -->

    <section class="section section-bg" id="schedule" style="
        background-image: url({{asset('frontend/assets/images/about-fullscreen-1-1920x700.jpg')}});
      ">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading dark-bg">
                        <h2>Read <em>About Us</em></h2>
                        <img src="{{asset('frontend/assets/images/line-dec.png')}}" alt="" />
                        <p>
                            Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed
                            viverra ipsum dolor, ultricies fermentum massa consequat eu.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-content text-center">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore
                            deleniti voluptas enim! Provident consectetur id earum ducimus
                            facilis, aspernatur hic, alias, harum rerum velit voluptas,
                            voluptate enim! Eos, sunt, quidem.
                        </p>

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto
                            nulla quo cum officia laboriosam. Amet tempore, aliquid quia
                            eius commodi, doloremque omnis delectus laudantium dolor
                            reiciendis non nulla! Doloremque maxime quo eum in culpa
                            mollitia similique eius doloribus voluptatem facilis!
                            Voluptatibus, eligendi, illum. Distinctio, non!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

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

    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright © 2022 <a href="index.html">SUVIDA</a></p>
                </div>
            </div>
        </div>
    </footer>

    <!-- serachbar -->

    <!-- jQuery -->
    <script src="{{asset('frontend/assets/js/jquery-2.1.0.min.js')}}"></script>

    <!-- Bootstrap -->
    <script src="{{asset('frontend/assets/js/popper.js')}}"></script>
    <script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>

    <!-- Plugins -->
    <script src="{{asset('frontend/assets/js/scrollreveal.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/waypoints.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/imgfix.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/mixitup.js')}}"></script>
    <script src="{{asset('frontend/assets/js/accordions.js')}}"></script>

    <!-- Global Init -->
    <script src="{{asset('frontend/assets/js/custom.js')}}"></script>

    <script>
    let searchForm = document.querySelector(".search-form");
    let header = document.querySelector(".dropdown-menu");
    document.querySelector("#search-btn").onclick = () => {
        searchForm.classList.toggle("active");
    };
    window.onscroll = () => {
        searchForm.classList.remove("active");
    };
    </script>
</body>

</html>