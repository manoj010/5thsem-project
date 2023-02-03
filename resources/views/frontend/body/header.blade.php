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
                        <li><a href="#" class="active">Home</a></li>
                        <!-- Bikes Menu -->
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="" role="button" aria-haspopup="true"
                                aria-expanded="false">Bikes</a>

                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="latestbikes.html">Latest Bikes</a>
                                <a class="dropdown-item" href="popularbikes.html">Popular Bikes</a>
                                <a class="dropdown-item" href="budgetbikes.html">Best Budget Bikes</a>
                            </div>
                        </li>
                        <!-- Bikes Menu end -->

                        <!-- Scooter Menu -->
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="" role="button" aria-haspopup="true"
                                aria-expanded="false">Scooter</a>

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

                        @auth

                        <li>
                            <a href="#"><img src="{{asset('frontend/assets/images/notification.png')}}"
                                    style="height: 30px; width: 30px; margin-bottom: 5px" alt="" /></a>

                        <li>
                            <a href="#"><img src="{{asset('frontend/assets/images/wishlist.png')}}"
                                    style="height: 30px; width: 30px; margin-bottom: 5px" alt="" /></a>
                        </li>
                        <li>
                            <a href="#" class=" active text-center " aria-haspopup="true" aria-expanded="false">
                                <img class="user-avatar rounded-circle p-2"
                                    src="{{(!empty($userData->photo))?url('upload/userImages/'.$userData->photo):url('upload/NoImage.jpg')}}"
                                    alt="User Avatar">


                            </a>
                        </li>
                        @else
                        <li>
                            <a href="{{route('login')}}"><img src="{{asset('frontend/assets/images/login-icon.png')}}"
                                    style="height: 35px; width: 35px" alt="" />Log In</a>
                        </li>

                        <li>
                            <a href="{{route('register')}}"><img src="{{asset('frontend/assets/images/signup.png')}}"
                                    style="height: 30px; width: 30px; margin-bottom: 5px" alt="" />Sign Up</a>
                        </li>
                        @endauth


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