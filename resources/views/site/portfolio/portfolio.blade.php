@extends('site/layouts/app')
@section('content')
    <!-- Inner Banner -->
    <div class="inner-banner">
        <div class="container">
            <div class="inner-title text-center">
                <h3>Portfolio</h3>
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <i class='bx bx-chevrons-right'></i>
                    </li>
                    <li>Portfolio</li>
                </ul>
            </div>
        </div>
        <div class="inner-shape">
            <img src="{{asset('site/assets/images/shape/inner-shape.png')}}" alt="Images">
        </div>
    </div>
    <!-- Inner Banner End -->

    <!-- Posrtfolio Area -->
    <div class="case_study-area pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <span class="sp-color2">Case Study</span>
                <h2>Introduce Our Projects and Check Recent Work </h2>
            </div>

            <div class="row pt-45">
                <div class="col-lg-4 col-md-6">
                    <div class="case_study-item">
                        <a href="{{route('site.portfolio_detail')}}">
                            <img src="{{asset('site/assets/images/case_study/case_study1.jpg')}}" alt="Images">
                        </a>
                        <div class="content">
                            <h3><a href="{{route('site.portfolio_detail')}}">Business Solution</a></h3>
                            <ul>
                                <li><a href="{{route('site.portfolio_detail')}}">Business</a></li>
                                <li><a href="{{route('site.portfolio_detail')}}">Planing</a> </li>
                            </ul>
                            <a href="{{route('site.portfolio_detail')}}" class="more-btn"><i class='bx bx-right-arrow-alt'></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="case_study-item">
                        <a href="{{route('site.portfolio_detail')}}">
                            <img src="{{asset('site/assets/images/case_study/case_study2.jpg')}}" alt="Images">
                        </a>
                        <div class="content">
                            <h3><a href="{{route('site.portfolio_detail')}}">Web Development</a></h3>
                            <ul>
                                <li><a href="{{route('site.portfolio_detail')}}">Design</a></li>
                                <li><a href="{{route('site.portfolio_detail')}}">Development</a> </li>
                            </ul>
                            <a href="{{route('site.portfolio_detail')}}" class="more-btn"><i class='bx bx-right-arrow-alt'></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="case_study-item">
                        <a href="{{route('site.portfolio_detail')}}">
                            <img src="{{asset('site/assets/images/case_study/case_study3.jpg')}}" alt="Images">
                        </a>
                        <div class="content">
                            <h3><a href="{{route('site.portfolio_detail')}}">Social Media App</a></h3>
                            <ul>
                                <li><a href="{{route('site.portfolio_detail')}}">Design</a></li>
                                <li><a href="{{route('site.portfolio_detail')}}">Social</a> </li>
                            </ul>
                            <a href="{{route('site.portfolio_detail')}}" class="more-btn"><i class='bx bx-right-arrow-alt'></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="case_study-item">
                        <a href="{{route('site.portfolio_detail')}}">
                            <img src="{{asset('site/assets/images/case_study/case_study4.jpg')}}" alt="Images">
                        </a>
                        <div class="content">
                            <h3><a href="{{route('site.portfolio_detail')}}">UI/UX Research</a></h3>
                            <ul>
                                <li><a href="{{route('site.portfolio_detail')}}">UI/UX Design</a></li>
                                <li><a href="{{route('site.portfolio_detail')}}">Research</a></li>
                            </ul>
                            <a href="{{route('site.portfolio_detail')}}" class="more-btn"><i class='bx bx-right-arrow-alt'></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="case_study-item">
                        <a href="{{route('site.portfolio_detail')}}">
                            <img src="{{asset('site/assets/images/case_study/case_study5.jpg')}}" alt="Images">
                        </a>
                        <div class="content">
                            <h3><a href="{{route('site.portfolio_detail')}}">Business Growth</a></h3>
                            <ul>
                                <li><a href="{{route('site.portfolio_detail')}}">Business</a></li>
                                <li><a href="{{route('site.portfolio_detail')}}">Growth</a></li>
                            </ul>
                            <a href="{{route('site.portfolio_detail')}}" class="more-btn"><i class='bx bx-right-arrow-alt'></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="case_study-item">
                        <a href="{{route('site.portfolio_detail')}}">
                            <img src="{{asset('site/assets/images/case_study/case_study6.jpg')}}" alt="Images">
                        </a>
                        <div class="content">
                            <h3><a href="{{route('site.portfolio_detail')}}">Consulting</a></h3>
                            <ul>
                                <li><a href="{{route('site.portfolio_detail')}}">Consulting</a></li>
                                <li><a href="{{route('site.portfolio_detail')}}">Planing</a></li>
                            </ul>
                            <a href="{{route('site.portfolio_detail')}}" class="more-btn"><i class='bx bx-right-arrow-alt'></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="case_study-item">
                        <a href="{{route('site.portfolio_detail')}}">
                            <img src="{{asset('site/assets/images/case_study/case_study7.jpg')}}" alt="Images">
                        </a>
                        <div class="content">
                            <h3><a href="{{route('site.portfolio_detail')}}">IT Management</a></h3>
                            <ul>
                                <li><a href="{{route('site.portfolio_detail')}}">IT</a></li>
                                <li><a href="{{route('site.portfolio_detail')}}">Management</a></li>
                            </ul>
                            <a href="{{route('site.portfolio_detail')}}" class="more-btn"><i class='bx bx-right-arrow-alt'></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="case_study-item">
                        <a href="{{route('site.portfolio_detail')}}">
                            <img src="{{asset('site/assets/images/case_study/case_study8.jpg')}}" alt="Images">
                        </a>
                        <div class="content">
                            <h3><a href="{{route('site.portfolio_detail')}}">Data Analysis</a></h3>
                            <ul>
                                <li><a href="{{route('site.portfolio_detail')}}">Data</a></li>
                                <li><a href="{{route('site.portfolio_detail')}}">Analysis</a></li>
                            </ul>
                            <a href="{{route('site.portfolio_detail')}}" class="more-btn"><i class='bx bx-right-arrow-alt'></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                    <div class="case_study-item">
                        <a href="{{route('site.portfolio_detail')}}">
                            <img src="{{asset('site/assets/images/case_study/case_study9.jpg')}}" alt="Images">
                        </a>
                        <div class="content">
                            <h3><a href="{{route('site.portfolio_detail')}}">Business Reform</a></h3>
                            <ul>
                                <li><a href="{{route('site.portfolio_detail')}}">Business</a></li>
                                <li><a href="{{route('site.portfolio_detail')}}">Reform</a></li>
                            </ul>
                            <a href="{{route('site.portfolio_detail')}}" class="more-btn"><i class='bx bx-right-arrow-alt'></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 text-center">
                    <div class="pagination-area">
                        <a href="{{route('site.portfolio_detail')}}" class="prev page-numbers">
                            <i class='bx bx-left-arrow-alt'></i>
                        </a>

                        <span class="page-numbers current" aria-current="page">1</span>
                        <a href="{{route('site.portfolio_detail')}}" class="page-numbers">2</a>
                        <a href="{{route('site.portfolio_detail')}}" class="page-numbers">3</a>

                        <a href="{{route('site.portfolio_detail')}}" class="next page-numbers">
                            <i class='bx bx-right-arrow-alt'></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Posrtfolio Area End -->
@endsection
