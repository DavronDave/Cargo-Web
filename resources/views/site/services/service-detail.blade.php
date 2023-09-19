@extends('site/layouts/app')
@section('content')
    <!-- Inner Banner -->
    <div class="inner-banner">
        <div class="container">
            <div class="inner-title text-center">
                <h3>Service Details</h3>
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <i class='bx bx-chevrons-right'></i>
                    </li>
                    <li>Service Details</li>
                </ul>
            </div>
        </div>
        <div class="inner-shape">
            <img src="{{asset('site/assets/images/shape/inner-shape.png')}}" alt="Images">
        </div>
    </div>
    <!-- Inner Banner End -->

    <!-- Service Details Area -->
    <div class="service-details-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="service-article">
                        <div class="service-article-img">
                            <img src="{{asset('site/assets/images/services/service-details.jpg')}}" alt="Images">
                        </div>
                        <div class="service-article-content">
                            <h2>Cloud Computing</h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                                dolor. Aenean massa. cu
                                sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec
                                quam felis, ultricies ne,
                                pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo,
                                fringilla vel, aliquet n,
                                vu eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam
                                dictum felis eu pede mollis
                                pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean
                                vulputate eleifend tellus. Aen
                                li, porttitor eu, consequat vitae, eleifend ac, enim.
                            </p>

                            <p>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                                dolor. Aenean massa. cu
                                sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec
                                quam felis, ultricies ne,
                                pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo,
                                fringilla vel, aliquet n,
                                vu eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam
                                dictum felis eu pede mollis
                                pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean
                                vulputate eleifend tellus. Aen
                                li, porttitor eu, consequat vitae, eleifend ac, enim.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="side-bar-area">
                        <div class="side-bar-widget">
                            <h3 class="title">Our Services</h3>
                            <div class="side-bar-categories">
                                <ul>
                                    <li>
                                        <div class="line-circle"></div>
                                        <a href="service-details.html" target="_blank">IT Services</a>
                                    </li>
                                    <li>
                                        <div class="line-circle"></div>
                                        <a href="service-details.html" target="_blank">Cloud Computing</a>
                                    </li>
                                    <li>
                                        <div class="line-circle"></div>
                                        <a href="service-details.html" target="_blank">Web Development</a>
                                    </li>
                                    <li>
                                        <div class="line-circle"></div>
                                        <a href="service-details.html" target="_blank">Business Reform</a>
                                    </li>
                                    <li>
                                        <div class="line-circle"></div>
                                        <a href="service-details.html" target="_blank">Infrastructure</a>
                                    </li>
                                    <li>
                                        <div class="line-circle"></div>
                                        <a href="service-details.html" target="_blank">Data Analysis</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="side-bar-widget">
                            <h3 class="title">Tag Cloud</h3>
                            <ul class="side-bar-widget-tag">
                                <li><a href="service-details.html" target="_blank">Android</a></li>
                                <li><a href="service-details.html" target="_blank">Creative</a></li>
                                <li><a href="service-details.html" target="_blank">App</a></li>
                                <li><a href="service-details.html" target="_blank">IOS</a></li>
                                <li><a href="service-details.html" target="_blank">Business</a></li>
                                <li><a href="service-details.html" target="_blank">Consulting</a></li>
                            </ul>
                        </div>

                        <div class="side-bar-widget">
                            <h3 class="title">Archive</h3>
                            <div class="side-bar-categories">
                                <ul>
                                    <li>
                                        <div class="line-circle"></div>
                                        <a href="service-details.html" target="_blank">Design<span>[70]</span></a>
                                    </li>
                                    <li>
                                        <div class="line-circle"></div>
                                        <a href="service-details.html" target="_blank">Business<span>[24]</span></a>
                                    </li>
                                    <li>
                                        <div class="line-circle"></div>
                                        <a href="service-details.html" target="_blank">Development<span>[08]</span></a>
                                    </li>
                                    <li>
                                        <div class="line-circle"></div>
                                        <a href="service-details.html" target="_blank">Technology <span>[17]</span></a>
                                    </li>
                                    <li>
                                        <div class="line-circle"></div>
                                        <a href="service-details.html" target="_blank">Startup <span>[20]</span></a>
                                    </li>
                                    <li>
                                        <div class="line-circle"></div>
                                        <a href="service-details.html" target="_blank">Marketing Growth
                                            <span>[13]</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service Details Area End -->
@endsection
