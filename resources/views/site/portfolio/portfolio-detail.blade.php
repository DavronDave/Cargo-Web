@extends('site/layouts/app')
@section('content')
    <!-- Inner Banner -->
    <div class="inner-banner">
        <div class="container">
            <div class="inner-title text-center">
                <h3>Portfolio Details</h3>
                <ul>
                    <li>
                        <a href="{{route('site.index')}}">Home</a>
                    </li>
                    <li>
                        <i class='bx bx-chevrons-right'></i>
                    </li>
                    <li>Portfolio Details</li>
                </ul>
            </div>
        </div>
        <div class="inner-shape">
            <img src="{{asset('site/assets/images/shape/inner-shape.png')}}" alt="Images">
        </div>
    </div>
    <!-- Inner Banner End -->

    <!-- Portfolio Area -->
    <div class="portfolio-details-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="case-article">
                        <div class="case-article-img">
                            <img src="{{asset('site/assets/images/case_study/case_details.jpg')}}" alt="Images">
                        </div>
                        <div class="case-article-content">
                            <h2>Web Development</h2>
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

                            <a href="#" class="mt-3 default-btn btn-bg-two border-radius-50">Go to website</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="side-bar-area">
                        <div class="side-bar-widget">

                            <h3 class="title">Recent Project</h3>
                            <div class="side-bar-categories">
                                <ul>
                                    <li>
                                        <div class="line-circle"></div>
                                        <a href="portfolio-details.html" target="_blank">Web Development</a>
                                    </li>
                                    <li>
                                        <div class="line-circle"></div>
                                        <a href="portfolio-details.html" target="_blank">Social Media App</a>
                                    </li>
                                    <li>
                                        <div class="line-circle"></div>
                                        <a href="portfolio-details.html" target="_blank">UI/UX Research</a>
                                    </li>
                                    <li>
                                        <div class="line-circle"></div>
                                        <a href="portfolio-details.html" target="_blank">Business Reform</a>
                                    </li>
                                    <li>
                                        <div class="line-circle"></div>
                                        <a href="portfolio-details.html" target="_blank">Consulting </a>
                                    </li>
                                    <li>
                                        <div class="line-circle"></div>
                                        <a href="portfolio-details.html" target="_blank">Data Analysis</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="side-bar-widget">
                            <h3 class="title">Tag Cloud</h3>
                            <ul class="side-bar-widget-tag">
                                <li><a href="portfolio-details.html" target="_blank">Android</a></li>
                                <li><a href="portfolio-details.html" target="_blank">Creative</a></li>
                                <li><a href="portfolio-details.html" target="_blank">App</a></li>
                                <li><a href="portfolio-details.html" target="_blank">IOS</a></li>
                                <li><a href="portfolio-details.html" target="_blank">Business</a></li>
                                <li><a href="portfolio-details.html" target="_blank">Consulting</a></li>
                            </ul>
                        </div>

                        <div class="side-bar-widget">
                            <h3 class="title">Gallery</h3>
                            <ul class="blog-gallery">
                                <li>
                                    <a href="https://www.instagram.com/" target="_blank">
                                        <img src="assets/images/blog/blog-small-img1.jpg" alt="image">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/" target="_blank">
                                        <img src="assets/images/blog/blog-small-img2.jpg" alt="image">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/" target="_blank">
                                        <img src="assets/images/blog/blog-small-img3.jpg" alt="image">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/" target="_blank">
                                        <img src="assets/images/blog/blog-small-img4.jpg" alt="image">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/" target="_blank">
                                        <img src="assets/images/blog/blog-small-img5.jpg" alt="image">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/" target="_blank">
                                        <img src="assets/images/blog/blog-small-img6.jpg" alt="image">
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="side-bar-widget">
                            <h3 class="title">Archive</h3>
                            <div class="side-bar-categories">
                                <ul>
                                    <li>
                                        <div class="line-circle"></div>
                                        <a href="portfolio-details.html" target="_blank">Design<span>[70]</span></a>
                                    </li>
                                    <li>
                                        <div class="line-circle"></div>
                                        <a href="portfolio-details.html" target="_blank">Business<span>[24]</span></a>
                                    </li>
                                    <li>
                                        <div class="line-circle"></div>
                                        <a href="portfolio-details.html"
                                            target="_blank">Development<span>[08]</span></a>
                                    </li>
                                    <li>
                                        <div class="line-circle"></div>
                                        <a href="portfolio-details.html" target="_blank">Technology
                                            <span>[17]</span></a>
                                    </li>
                                    <li>
                                        <div class="line-circle"></div>
                                        <a href="portfolio-details.html" target="_blank">Startup <span>[20]</span></a>
                                    </li>
                                    <li>
                                        <div class="line-circle"></div>
                                        <a href="portfolio-details.html" target="_blank">Marketing Growth
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
    <!-- Portfolio Area End -->
@endsection
