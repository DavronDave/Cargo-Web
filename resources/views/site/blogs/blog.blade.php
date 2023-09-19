@extends('site/layouts/app')
@section('content')
    <!-- Inner Banner -->
    <div class="inner-banner">
        <div class="container">
            <div class="inner-title text-center">
                <h3>Blog Style</h3>
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <i class='bx bx-chevrons-right'></i>
                    </li>
                    <li>Blog Style</li>
                </ul>
            </div>
        </div>
        <div class="inner-shape">
            <img src="assets/images/shape/inner-shape.png" alt="Images">
        </div>
    </div>
    <!-- Inner Banner End -->

    <!-- Blog Area -->
    <div class="blog-area pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <span class="sp-color2">Latest Blog</span>
                <h2>Let’s Check Some Latest Blog</h2>
            </div>

            <div class="row pt-45">
                <div class="col-lg-4 col-md-6">
                    <div class="blog-card">
                        <div class="blog-img">
                            <a href="{{route('site.blog_detail')}}">
                                <img src="{{asset('site/assets/images/blog/blog-img1.jpg')}}" alt="Blog Images">
                            </a>
                            <div class="blog-tag">
                                <h3>11</h3>
                                <span>Dec</span>
                            </div>
                        </div>
                        <div class="content">
                            <ul>
                                <li>
                                    <a href="index.html"><i class='bx bxs-user'></i> By Admin</a>
                                </li>
                                <li>
                                    <a href="index.html"><i class='bx bx-purchase-tag-alt'></i>Business</a>
                                </li>
                            </ul>
                            <h3>
                                <a href="{{route('site.blog_detail')}}">Product Idea Solution for New Generation</a>
                            </h3>
                            <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="blog-card">
                        <div class="blog-img">
                            <a href="{{route('site.blog_detail')}}">
                                <img src="{{asset('site/assets/images/blog/blog-img2.jpg')}}" alt="Blog Images">
                            </a>
                            <div class="blog-tag">
                                <h3>14</h3>
                                <span>Dec</span>
                            </div>
                        </div>
                        <div class="content">
                            <ul>
                                <li>
                                    <a href="index.html"><i class='bx bxs-user'></i> By Admin</a>
                                </li>
                                <li>
                                    <a href="index.html"><i class='bx bx-purchase-tag-alt'></i>Invention</a>
                                </li>
                            </ul>
                            <h3>
                                <a href="{{route('site.blog_detail')}}">New Device Invention for Digital Platform</a>
                            </h3>
                            <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="blog-card">
                        <div class="blog-img">
                            <a href="{{route('site.blog_detail')}}">
                                <img src="{{asset('site/assets/images/blog/blog-img3.jpg')}}" alt="Blog Images">
                            </a>
                            <div class="blog-tag">
                                <h3>17</h3>
                                <span>Dec</span>
                            </div>
                        </div>
                        <div class="content">
                            <ul>
                                <li>
                                    <a href="index.html"><i class='bx bxs-user'></i> By Admin</a>
                                </li>
                                <li>
                                    <a href="index.html"><i class='bx bx-purchase-tag-alt'></i>Achieve</a>
                                </li>
                            </ul>
                            <h3>
                                <a href="{{route('site.blog_detail')}}">Business Strategy Make His Goal Achieve </a>
                            </h3>
                            <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="blog-card">
                        <div class="blog-img">
                            <a href="{{route('site.blog_detail')}}">
                                <img src="{{asset('site/assets/images/blog/blog-img4.jpg')}}" alt="Blog Images">
                            </a>
                            <div class="blog-tag">
                                <h3>19</h3>
                                <span>Dec</span>
                            </div>
                        </div>
                        <div class="content">
                            <ul>
                                <li>
                                    <a href="index.html"><i class='bx bxs-user'></i> By Admin</a>
                                </li>
                                <li>
                                    <a href="index.html"><i class='bx bx-purchase-tag-alt'></i>Planing</a>
                                </li>
                            </ul>
                            <h3>
                                <a href="{{route('site.blog_detail')}}">10 Ways To Get Efficient Result and Benefits</a>
                            </h3>
                            <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="blog-card">
                        <div class="blog-img">
                            <a href="{{route('site.blog_detail')}}">
                                <img src="{{asset('site/assets/images/blog/blog-img5.jpg')}}" alt="Blog Images">
                            </a>
                            <div class="blog-tag">
                                <h3>20</h3>
                                <span>Dec</span>
                            </div>
                        </div>
                        <div class="content">
                            <ul>
                                <li>
                                    <a href="index.html"><i class='bx bxs-user'></i> By Admin</a>
                                </li>
                                <li>
                                    <a href="index.html"><i class='bx bx-purchase-tag-alt'></i>App</a>
                                </li>
                            </ul>
                            <h3>
                                <a href="{{route('site.blog_detail')}}">Top 10 Ways How to Develop Mobile Application</a>
                            </h3>
                            <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="blog-card">
                        <div class="blog-img">
                            <a href="{{route('site.blog_detail')}}">
                                <img src="{{asset('site/assets/images/blog/blog-img6.jpg')}}" alt="Blog Images">
                            </a>
                            <div class="blog-tag">
                                <h3>20</h3>
                                <span>Dec</span>
                            </div>
                        </div>
                        <div class="content">
                            <ul>
                                <li>
                                    <a href="{{route('site.index')}}"><i class='bx bxs-user'></i> By Admin</a>
                                </li>
                                <li>
                                    <a href="{{route('site.index')}}"><i class='bx bx-purchase-tag-alt'></i>Planing</a>
                                </li>
                            </ul>
                            <h3>
                                <a href="{{route('site.blog_detail')}}">How to Make Secure for Your Personal Information</a>
                            </h3>
                            <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 text-center">
                    <div class="pagination-area">
                        <a href="blog.html" class="prev page-numbers">
                            <i class='bx bx-left-arrow-alt'></i>
                        </a>

                        <span class="page-numbers current" aria-current="page">1</span>
                        <a href="blog.html" class="page-numbers">2</a>
                        <a href="blog.html" class="page-numbers">3</a>

                        <a href="blog.html" class="next page-numbers">
                            <i class='bx bx-right-arrow-alt'></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Area End -->
@endsection
