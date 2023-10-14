<header class="main-header menu-absolute">

    <!--Header-Upper-->
    <div class="header-upper">
        <div class="container container-1620 clearfix">

            <div class="header-inner rpy-10 rel d-flex align-items-center">
                <div class="logo-outer">
                    <div class="logo"><a href="index.html"><img src=" {{ asset('assets/images/logos/logo.png')}}"
                                                                alt="Logo" title="Logo" width="229px" height="40px"></a>
                    </div>
                </div>

                <div class="nav-outer ms-lg-auto clearfix">
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-lg">
                        <div class="navbar-header py-10">
                            <div class="mobile-logo">
                                <a href="index.html">
                                    <img src=" {{ asset('assets/images/logos/logo.png')}}" alt="Logo" title="Logo"
                                        width="229px" height="40px">
                                </a>
                            </div>

                            <!-- Toggle Button -->
                            <button type="button" class="navbar-toggle" data-bs-toggle="collapse"
                                    data-bs-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li><a href="#home">Home</a></li>
                                <li><a href="#about">About Us</a></li>
                                <li><a href="#technologies">Technologies</a></li>
                                <li><a href="#services">Services</a></li>
                                <li><a href="#packages">Packages</a></li>
                                <li><a href="#conatct-us">Contact Us</a></li>
                            </ul>
                        </div>

                    </nav>
                    <!-- Main Menu End-->
                </div>

                <!-- Nav Search -->
                <div class="nav-search py-10">
                    <button class="far fa-search"></button>
                    <form action="#" class="hide">
                        <input type="text" placeholder="Search" class="searchbox" required="">
                        <button type="submit" class="searchbutton far fa-search"></button>
                    </form>
                </div>

                <!-- Menu Button -->
                <div class="menu-btns">
                    <!-- menu sidbar -->
                    <div class="menu-sidebar">
                        <button>
                            <img src=" {{ asset('assets/images/icons/toggler.svg')}}" alt="Toggler">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Header Upper-->
</header>
