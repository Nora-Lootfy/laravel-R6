@extends('layouts.main')


@section('content')
            <section class="slick-slideshow">   
                <div class="slick-custom">
                    <img src="{{asset('assets/images/slideshow/medium-shot-business-women-high-five.jpeg')}}" class="img-fluid" alt="">

                    <div class="slick-bottom">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-10">
                                    <h1 class="slick-title">Cool Fashion</h1>

                                    <p class="lead text-white mt-lg-3 mb-lg-5">Little fashion template comes with total 8 HTML pages provided by Tooplate website.</p>

                                    <a href="about.html" class="btn custom-btn">Learn more about us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="slick-custom">
                    <img src="{{asset('assets/images/slideshow/team-meeting-renewable-energy-project.jpeg')}}" class="img-fluid" alt="">

                    <div class="slick-bottom">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-10">
                                    <h1 class="slick-title">New Design</h1>

                                    <p class="lead text-white mt-lg-3 mb-lg-5">Please share this Little Fashion template to your friends. Thank you for supporting us.</p>

                                    <a href="product.html" class="btn custom-btn">Explore products</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="slick-custom">
                    <img src="{{asset('assets/images/slideshow/two-business-partners-working-together-office-computer.jpeg')}}" class="img-fluid" alt="">

                    <div class="slick-bottom">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-10">
                                    <h1 class="slick-title">Talk to us</h1>

                                    <p class="lead text-white mt-lg-3 mb-lg-5">Tooplate is one of the best HTML CSS template websites for everyone.</p>

                                    <a href="contact.html" class="btn custom-btn">Work with us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

            <section class="about section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-12 text-center">
                            <h2 class="mb-5">Get started with <span>Little</span> Fashion</h2>
                        </div>

                        <div class="col-lg-2 col-12 mt-auto mb-auto">
                            <ul class="nav nav-pills mb-5 mx-auto justify-content-center align-items-center" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Introduction</button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-youtube-tab" data-bs-toggle="pill" data-bs-target="#pills-youtube" type="button" role="tab" aria-controls="pills-youtube" aria-selected="true">How we work?</button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-skill-tab" data-bs-toggle="pill" data-bs-target="#pills-skill" type="button" role="tab" aria-controls="pills-skill" aria-selected="false">Capabilites</button>
                                </li>
                            </ul>
                        </div>

                        <div class="col-lg-10 col-12">
                            <div class="tab-content mt-2" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                                    <div class="row">
                                        <div class="col-lg-7 col-12">
                                            <img src="{{asset('assets/images/pim-chu-z6NZ76_UTDI-unsplash.jpeg')}}" class="img-fluid" alt="">
                                        </div>

                                        <div class="col-lg-5 col-12">
                                            <div class="d-flex flex-column h-100 ms-lg-4 mt-lg-0 mt-5">
                                                <h4 class="mb-3">Good <span>Design</span> <br>Ideas for <span>your</span> fashion</h4>

                                                <p>Little Fashion templates comes with <a href="sign-in.html">sign in</a> / <a href="sign-up.html">sign up</a> pages, product listing / product detail, about, FAQs, and contact page.</p>

                                                <p>Since this HTML template is based on Boostrap 5 CSS library, you can feel free to add more components as you need.</p>

                                                <div class="mt-2 mt-lg-auto">
                                                    <a href="about.html" class="custom-link mb-2">
                                                        Learn more about us
                                                        <i class="bi-arrow-right ms-2"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="pills-youtube" role="tabpanel" aria-labelledby="pills-youtube-tab">

                                    <div class="row">
                                        <div class="col-lg-7 col-12">
                                            <div class="ratio ratio-16x9">
                                                <iframe src="https://www.youtube-nocookie.com/embed/f_7JqPDWhfw?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            </div>
                                        </div>

                                        <div class="col-lg-5 col-12">
                                            <div class="d-flex flex-column h-100 ms-lg-4 mt-lg-0 mt-5">
                                                <h4 class="mb-3">Life at Studio</h4>

                                                <p>Over three years in business, We’ve had the chance to work on a variety of projects, with companies</p>

                                                <p>Custom work is branding, web design, UI/UX design</p>

                                                <div class="mt-2 mt-lg-auto">
                                                    <a href="contact.html" class="custom-link mb-2">
                                                        Work with us
                                                        <i class="bi-arrow-right ms-2"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="pills-skill" role="tabpanel" aria-labelledby="pills-skill-tab">
                                    <div class="row">
                                        <div class="col-lg-7 col-12">
                                            <img src="{{asset('assets/images/cody-lannom-G95AReIh_Ko-unsplash.jpeg')}}" class="img-fluid" alt="">
                                        </div>

                                        <div class="col-lg-5 col-12">
                                            <div class="d-flex flex-column h-100 ms-lg-4 mt-lg-0 mt-5">
                                                <h4 class="mb-3">What can help you?</h4>

                                                <p>Over three years in business, We’ve had the chance on projects</p>

                                                <div class="skill-thumb mt-3">

                                                    <strong>Branding</strong>
                                                        <span class="float-end">90%</span>
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                                                            </div>

                                                    <strong>Design & Stragety</strong>
                                                        <span class="float-end">70%</span>
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
                                                            </div>

                                                    <strong>Online Platform</strong>
                                                        <span class="float-end">80%</span>
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                                                            </div>

                                                </div>
                                                
                                                <div class="mt-2 mt-lg-auto">
                                                    <a href="products.html" class="custom-link mb-2">
                                                        Explore products
                                                        <i class="bi-arrow-right ms-2"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="front-product">
                <div class="container-fluid p-0">
                    <div class="row align-items-center">

                        <div class="col-lg-6 col-12">
                            <img src="{{asset('assets/images/retail-shop-owner-mask-social-distancing-shopping.jpg')}}" class="img-fluid" alt="">
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="px-5 py-5 py-lg-0">
                                
                                <h2 class="mb-4"><span>Retail</span> shop owners</h2>

                                <p class="lead mb-4">Credits go to Unsplash and FreePik websites for images used in this Little Fashion by Tooplate.</p>

                                <a href="products.html" class="custom-link">
                                    Explore Products
                                    <i class="bi-arrow-right ms-2"></i>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="featured-product section-padding">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-12 text-center">
                            <h2 class="mb-5">Featured Products</h2>
                        </div>

                        
                        <div class="col-lg-4 col-12 mb-3">
                            <div class="product-thumb">
                                <a href="product-detail.html">
                                    <img src="{{asset('assets/images/product/jordan-nix-CkCUvwMXAac-unsplash.jpeg')}}" class="img-fluid product-image" alt="">
                                </a>

                                <div class="product-top d-flex">
                                    <span class="product-alert">Low Price</span>

                                    <a href="#" class="bi-heart-fill product-icon ms-auto"></a>
                                </div>

                                <div class="product-info d-flex">
                                    <div>
                                        <h5 class="product-title mb-0">
                                            <a href="product-detail.html" class="product-title-link">Fashion Set</a>
                                        </h5>

                                        <p class="product-p">Costume Package</p>
                                    </div>

                                    <small class="product-price text-muted ms-auto mt-auto mb-5">$35</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-12">
                            <div class="product-thumb">
                                <a href="product-detail.html">
                                    <img src="{{asset('assets/images/product/nature-zen-3Dn1BZZv3m8-unsplash.jpeg')}}" class="img-fluid product-image" alt="">
                                </a>

                                <div class="product-top d-flex">
                                    <a href="#" class="bi-heart-fill product-icon ms-auto"></a>
                                </div>

                                <div class="product-info d-flex">
                                    <div>
                                        <h5 class="product-title mb-0">
                                            <a href="product-detail.html" class="product-title-link">Juice Drinks</a>
                                        </h5>

                                        <p class="product-p">Nature made another world</p>
                                    </div>

                                    <small class="product-price text-muted ms-auto mt-auto mb-5">$45</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 text-center">
                            <a href="products.html" class="view-all">View All Products</a>
                        </div>

                    </div>
                </div>
            </section>
@endsection
        