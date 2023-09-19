<!-- Start Navbar Area -->
<div class="navbar-area">
    <!-- Menu For Mobile Device -->
    <div class="mobile-nav">
        <a href="index.html" class="logo">
            <img src="{{asset('site/assets/images/logos/logo_1.png')}}" class="logo-one" alt="Logo">
            <img src="{{asset('site/assets/images/logos/logo_2.png')}}" class="logo-two" alt="Logo">
        </a>
    </div>

    <!-- Menu For Desktop Device -->
    <div class="main-nav">
        <div class="container-fluid">
            <div class="container-max">
                <nav class="navbar navbar-expand-md navbar-light ">
                    <a class="navbar-brand" href="{{route('site.index')}}">
                        <img src="{{asset('site/assets/images/logos/logo_1.png')}}" class="logo-one" alt="Logo">
                        <img src="{{asset('site/assets/images/logos/logo_2.png')}}" class="logo-two" alt="Logo">
                    </a>

                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item">
                                <a href="{{route('site.index')}}" class="nav-link">
                                    Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('site.about')}}" class="nav-link">
                                    About us
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('site.portfolio')}}" class="nav-link">
                                    Portfolio
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('site.service')}}" class="nav-link">
                                    Services
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('site.countries')}}" class="nav-link">
                                    Clients
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('site.blog')}}" class="nav-link">
                                    Blog
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('site.contact')}}" class="nav-link">
                                    Contact
                                </a>
                            </li>
                        </ul>


                        <div class="nav-side d-display nav-side-mt">
                            <div class="nav-side-item">
                                <div class="search-side-widget">
                                    <form class="search-side-form">
                                        <input type="search" class="form-control" placeholder="Search...">
                                        <button type="submit">
                                            <i class="bx bx-search"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>

                            <!-- <div class="nav-side-item">
                                <div class="get-btn">
                                    <a href="contact.html" class="default-btn btn-bg-two border-radius-50">Get A
                                        Quote <i class='bx bx-chevron-right'></i></a>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <div class="side-nav-responsive">
        <div class="container-max">
            <div class="dot-menu">
                <div class="circle-inner">
                    <div class="in-circle circle-one"></div>
                    <div class="in-circle circle-two"></div>
                    <div class="in-circle circle-three"></div>
                </div>
            </div>

            <div class="container">
                <div class="side-nav-inner">
                    <div class="side-nav justify-content-center align-items-center">
                        <div class="side-nav-item nav-side">
                            <div class="search-box">
                                <i class='bx bx-search'></i>
                            </div>
                            <div class="get-btn">
                                <a href="contact.html" class="default-btn btn-bg-two border-radius-50">Get A Quote
                                    <i class='bx bx-chevron-right'></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Navbar Area -->

<!-- Search Overlay -->
<div class="search-overlay">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="search-layer"></div>
            <div class="search-layer"></div>
            <div class="search-layer"></div>

            <div class="search-close">
                <span class="search-close-line"></span>
                <span class="search-close-line"></span>
            </div>

            <div class="search-form">
                <form>
                    <input type="text" class="input-search" placeholder="Search here...">
                    <button type="submit"><i class='bx bx-search'></i></button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Search Overlay -->
