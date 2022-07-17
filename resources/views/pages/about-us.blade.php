@extends('layouts.master')

@section('title-meta')
    <title>About Us | {{ config('app.name') }} </title>
    <meta name="description" content="We at Custom Boxes US provide the best quality Custom Printed Packaging Boxes at your doorstep at affordable rates. Contact us to get the best price today!">
    <link rel="canonical" href="{{route('about-us')}}" />
@endsection

@section('custom-css')
@endsection

@section('content')
    <div class="breadcrumb-area bg-gray">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h1 style="color: red">About Us</h1>
            </div>
        </div>
    </div>
    <div class="about-us-area pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <div class="about-us-logo">
                        <img src="{{ asset('assets/website') }}/images/favicon.png" alt="customboxesus logo">
                    </div>
                </div>
                <div class="col-lg-10 col-md-10">
                    <div class="about-us-content">
                        <h3>Custome Boxes Us</h3>
                        <p>When it comes to purchasing packaging supplies, we all face the same problem, i.e., a wide range
                            of options and a tightly limited budget. Looking for a reliable supplier who can offer custom
                            products at the best prices can prove tricky, which is where CustomBoxesUs comes into play! With
                            excellent services, custom options, and competitive rates. And we strive to make your life as
                            stress-free as possible. We love helping small business start their operations. Our packaging
                            products are affordable and reliable, but they’re not the only things that set us apart from
                            others. We have a spectacular team of customer experience professionals who will support your
                            every need. For a hassle-free shipping experience with gorgeous packaging for your products,
                            turn to CustomBoxesUs!</p>

                        <h3>Why should CustomBoxesUs be your first choice?</h3>
                        <p>We are reliable and trustworthy when it comes to your online orders. We offer competitive rates,
                            which makes us the best choice for small businesses. You can rely on us because we will give you
                            a stress-free experience. You can get the most out of our services. And you won't get stuck
                            wondering how to make use of your shipping supplies or whether they will arrive on time. We will
                            also let you know what would be the right size boxes for packing, as well as materials that are
                            appropriate for shipping food and products. We provide custom packaging solutions that are more
                            affordable than any other packaging company. Our services include shipping, packing, custom
                            boxes, and more. We devote ourselves to delivering reliable services to help you reach your
                            goals in the most cost-efficient way possible.</p>
                        {{-- <div class="signature">
                            <h2>David Moye</h2>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="service-area pb-120">
        <div class="container">
            <div class="service-wrap-border service-wrap-padding-3">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 service-border-1">
                        <div class="single-service-wrap-2 mb-30">
                            <div class="service-icon-2 icon-red">
                                <i class="icon-cursor"></i>
                            </div>
                            <div class="service-content-2">
                                <h3>Free Shipping</h3>
                                <p>Oders over $99</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 service-border-1 service-border-1-none-md">
                        <div class="single-service-wrap-2 mb-30">
                            <div class="service-icon-2 icon-red">
                                <i class="icon-refresh "></i>
                            </div>
                            <div class="service-content-2">
                                <h3>90 Days Return</h3>
                                <p>For any problems</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 service-border-1">
                        <div class="single-service-wrap-2 mb-30">
                            <div class="service-icon-2 icon-red">
                                <i class="icon-credit-card "></i>
                            </div>
                            <div class="service-content-2">
                                <h3>Secure Payment</h3>
                                <p>100% Guarantee</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="single-service-wrap-2 mb-30">
                            <div class="service-icon-2 icon-red">
                                <i class="icon-earphones "></i>
                            </div>
                            <div class="service-content-2">
                                <h3>24h Support</h3>
                                <p>Dedicated support</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    {{-- <div class="banner-area pb-85">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="banner-wrap mb-30">
                        <div class="banner-img banner-img-zoom">
                            <a href="product-details.html"><img
                                    src="{{ asset('assets/website') }}/images/banner/banner-10.jpg" alt=""></a>
                        </div>
                        <div class="banner-content-11 banner-content-11-modify">
                            <h2><span>Zara</span> Pattern Boxed <br>Underwear</h2>
                            <p>Stretch, & Fress cool</p>
                            <div class="btn-style-4">
                                <a class="hover-red" href="product-details.html">Shop now <i
                                        class="icon-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="banner-wrap mb-30">
                        <div class="banner-img banner-img-zoom">
                            <a href="product-details.html"><img
                                    src="{{ asset('assets/website') }}/images/banner/banner-11.jpg" alt=""></a>
                        </div>
                        <div class="banner-content-11 banner-content-11-modify">
                            <h2><span>Basic</span> Color<br>Caps</h2>
                            <p>Less is more!</p>
                            <div class="btn-style-4">
                                <a class="hover-red" href="product-details.html">Shop now <i
                                        class="icon-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="contact-info-wrap-3 pb-85 container">
        <h3>contact info</h3>
        <p>Make your dream packaging come true with! Contact us and Get your desired packaging today from us!</p>
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="single-contact-info-3 text-center mb-30">
                    <i class="icon-location-pin "></i>
                    <h4>our address</h4>
                    <p>Willow Pass Rd, Concord, CA 94520, United States. </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="single-contact-info-3 extra-contact-info text-center mb-30">
                    <ul>
                        <li><i class="icon-screen-smartphone"></i> <a href="tel:9256959888"> (925) 695 9888 </a></li>
                        <li><i class="icon-envelope "></i> <a href="mailto:info@customboxesus.com"> info@customboxesus.com</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="single-contact-info-3 text-center mb-30">
                    <i class="icon-clock "></i>
                    <h4>openning hour</h4>
                    <p>24 Hours</p>
                </div>
            </div>
        </div>
        <p>So, stop waiting around and get in touch with us today to get your wholesale packaging with free shipping!</p>
    </div>
    {{-- team --}}
    {{-- <div class="team-area pb-90">
        <div class="container">
            <div class="section-title mb-45 text-center">
                <h2>Team Members</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team-wrapper mb-30">
                        <div class="team-img">
                            <img src="{{ asset('assets/website') }}/images/team/team-1.jpg" alt="">
                            <div class="team-action">
                                <a class="facebook" href="#">
                                    <i class="social_facebook"></i>
                                </a>
                                <a class="twitter" href="#">
                                    <i class="social_twitter"></i>
                                </a>
                                <a class="instagram" href="#">
                                    <i class="social_instagram"></i>
                                </a>
                            </div>
                        </div>
                        <div class="team-content text-center">
                            <h4>Mr. Mike Banding</h4>
                            <span>Manager </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team-wrapper mb-30">
                        <div class="team-img">
                            <img src="{{ asset('assets/website') }}/images/team/team-2.jpg" alt="">
                            <div class="team-action">
                                <a class="facebook" href="#">
                                    <i class="social_facebook"></i>
                                </a>
                                <a class="twitter" href="#">
                                    <i class="social_twitter"></i>
                                </a>
                                <a class="instagram" href="#">
                                    <i class="social_instagram"></i>
                                </a>
                            </div>
                        </div>
                        <div class="team-content text-center">
                            <h4>Mr. Peter Pan</h4>
                            <span>Developer </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team-wrapper mb-30">
                        <div class="team-img">
                            <img src="{{ asset('assets/website') }}/images/team/team-3.jpg" alt="">
                            <div class="team-action">
                                <a class="facebook" href="#">
                                    <i class="social_facebook"></i>
                                </a>
                                <a class="twitter" href="#">
                                    <i class="social_twitter"></i>
                                </a>
                                <a class="instagram" href="#">
                                    <i class="social_instagram"></i>
                                </a>
                            </div>
                        </div>
                        <div class="team-content text-center">
                            <h4>Ms. Sophia</h4>
                            <span>Designer </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team-wrapper mb-30">
                        <div class="team-img">
                            <img src="{{ asset('assets/website') }}/images/team/team-4.jpg" alt="">
                            <div class="team-action">
                                <a class="facebook" href="#">
                                    <i class="social_facebook"></i>
                                </a>
                                <a class="twitter" href="#">
                                    <i class="social_twitter"></i>
                                </a>
                                <a class="instagram" href="#">
                                    <i class="social_instagram"></i>
                                </a>
                            </div>
                        </div>
                        <div class="team-content text-center">
                            <h4>Mr. John Lee</h4>
                            <span>Chairmen </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    {{-- testimonial --}}
    {{-- <div class="testimonial-area bg-gray-3 pt-115 pb-115">
        <div class="container">
            <div class="section-title mb-45 text-center">
                <h2>Testimonials</h2>
            </div>
            <div class="testimonial-active-2 dot-style-2 dot-style-2-position-static">
                <div class="single-testimonial-2 text-center">
                    <div class="testimonial-img">
                        <img alt="" src="{{ asset('assets/website') }}/images/testimonial/client-1.png">
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip ex ea commodo.</p>
                    <div class="client-info">
                        <h5>Anna Miller</h5>
                        <span>Deginer</span>
                    </div>
                </div>
                <div class="single-testimonial-2 text-center">
                    <div class="testimonial-img">
                        <img alt="" src="{{ asset('assets/website') }}/images/testimonial/client-1.png">
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua. Ut enim ad minim, quis nostrud exercitation ullamco laboris nisi ut aliquip
                        commodo.</p>
                    <div class="client-info">
                        <h5>Anna Miller</h5>
                        <span>Deginer</span>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    {{-- <div class="brand-logo-area pt-120 pb-80">
        <div class="container">
            <div class="brand-logo-wrap-2">
                <div class="single-brand-logo-2 mb-30">
                    <img src="{{ asset('assets/website') }}/images/brand-logo/brand-logo-6.png" alt="brand-logo">
                </div>
                <div class="single-brand-logo-2 mb-30">
                    <img src="{{ asset('assets/website') }}/images/brand-logo/brand-logo-7.png" alt="brand-logo">
                </div>
                <div class="single-brand-logo-2 mb-30">
                    <img src="{{ asset('assets/website') }}/images/brand-logo/brand-logo-8.png" alt="brand-logo">
                </div>
                <div class="single-brand-logo-2 mb-30">
                    <img src="{{ asset('assets/website') }}/images/brand-logo/brand-logo-9.png" alt="brand-logo">
                </div>
                <div class="single-brand-logo-2 mb-30">
                    <img src="{{ asset('assets/website') }}/images/brand-logo/brand-logo-10.png" alt="brand-logo">
                </div>
                <div class="single-brand-logo-2 mb-30">
                    <img src="{{ asset('assets/website') }}/images/brand-logo/brand-logo-11.png" alt="brand-logo">
                </div>
            </div>
        </div>
    </div> --}}
@endsection

@section('custom-script')
@endsection
