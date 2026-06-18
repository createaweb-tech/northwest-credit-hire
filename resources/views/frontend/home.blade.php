@extends("layouts.app")

@section("content")

    <!-- Start Slider Area -->
    <header id="slider-home" class="slider slider-prlx bg-b">
        <div class="swiper-container parallax-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="assets/images/slider-1.jpg" data-overlay-dark="6">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-8 col-lg-9 col-md-12">
                                    <div class="caption">
                                        <h2>Non-fault accident? You pay nothing.</h2>
                                        <h1>Same-Day Replacement Vehicles</h1>
                                        <p style="max-width: 700px;">If the accident wasn't your fault, you're legally
                                            entitled to a like-for-like replacement vehicle &mdash; arranged at no cost to
                                            you. We recover every penny from the at-fault insurer.</p>
                                        <h3>0800 000 0000</h3>
                                        <div class="home-button-box home-slider-btn">
                                            <a href="{{route("contact")}}" class="button home-btn js-scroll">Start Your Claim</a>
                                        </div>
                                        <div class="features">
                                            <span><i class="fa fa-clock-o"></i> Fast</span>
                                            <span><i class="fa fa-shield"></i> No-fault</span>
                                            <span><i class="fa fa-check-circle"></i> Hassle-free</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </header>
    <!-- End Slider Area -->


    <!-- Start Notice Strip -->
    <div>
        <div class="container position-relative">
            <div class="nch-notice">
                <h2>Accident not your fault? <span>You owe nothing.</span></h2>
                <p>We deal directly with the at-fault insurer &mdash; recovery, storage, replacement hire, repairs and your
                    full claim, all handled under one roof.</p>
            </div>
        </div>
    </div>
    <!-- End Notice Strip -->

    <!-- Services Section Start -->
    <section id="services" class="theme-repair-services section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="section-title">
                        <h2>WHAT WE DO</h2>
                        <h5>From the moment of impact to the moment you're back on the road &mdash; we manage every step.
                        </h5>
                    </div>
                </div>
            </div>
            <div class="row d-flex align-items-stretch">
                <!-- single service -->
                <div class="col-lg-4 col-md-4 col-sm-12 wow kar-theme-single-service fadeInLeft text-center"
                    data-wow-delay="0.2s">
                    <div class="kar-theme-single-service-card">
                        <i class="fa fa-car service-icon"></i>
                        <h5>CREDIT HIRE</h5>
                        <p>Same-day like-for-like replacement vehicles &mdash; cars, executive, vans and plated taxis
                            &mdash; at no cost to non-fault drivers.</p>
                    </div>
                </div>
                <!-- single service -->
                <div class="col-lg-4 col-md-4 col-sm-12 wow kar-theme-single-service fadeInLeft text-center"
                    data-wow-delay="0.2s">
                    <div class="kar-theme-single-service-card">
                        <i class="fa fa-clipboard service-icon"></i>
                        <h5>ACCIDENT MANAGEMENT</h5>
                        <p>We take complete ownership of your claim &mdash; liaising with insurers, solicitors and garages
                            so you don't have to.</p>
                    </div>
                </div>
                <!-- single service -->
                <div class="col-lg-4 col-md-4 col-sm-12 wow kar-theme-single-service fadeInLeft text-center"
                    data-wow-delay="0.2s">
                    <div class="kar-theme-single-service-card">
                        <i class="fa fa-truck service-icon"></i>
                        <h5>24/7 VEHICLE RECOVERY</h5>
                        <p>Around-the-clock collection and delivery anywhere in the UK, with secure, fully insured storage
                            for your damaged vehicle.</p>
                    </div>
                </div>
                <!-- single service -->
                <div class="col-lg-4 col-md-4 col-sm-12 wow kar-theme-single-service fadeInLeft text-center"
                    data-wow-delay="0.2s">
                    <div class="kar-theme-single-service-card">
                        <i class="fa fa-wrench service-icon"></i>
                        <h5>APPROVED REPAIRS</h5>
                        <p>Repairs at vetted, quality-approved garages using manufacturer-approved parts. No excess for you
                            to pay.</p>
                    </div>
                </div>
                <!-- single service -->
                <div class="col-lg-4 col-md-4 col-sm-12 wow kar-theme-single-service fadeInLeft text-center"
                    data-wow-delay="0.2s">
                    <div class="kar-theme-single-service-card">
                        <i class="fa fa-taxi service-icon"></i>
                        <h5>TAXI &amp; PRIVATE HIRE</h5>
                        <p>Same-day plated replacements from a 300+ fleet, licensed across a wide range of local council
                            authorities.</p>
                    </div>
                </div>
                <!-- single service -->
                <div class="col-lg-4 col-md-4 col-sm-12 wow kar-theme-single-service fadeInLeft text-center"
                    data-wow-delay="0.2s">
                    <div class="kar-theme-single-service-card">
                        <i class="fa fa-cube service-icon"></i>
                        <h5>VAN &amp; COMMERCIAL</h5>
                        <p>Like-for-like van and commercial replacements to keep tradespeople, delivery drivers and
                            businesses moving.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center mt-15">
                    <a class="button" href="{{route("services")}}">View All Services</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Stats Band Start -->
    <section class="nch-stats">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-6">
                    <div class="nch-stat">
                        <div class="num">300+</div><span class="label">Vehicles in our fleet</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <div class="nch-stat">
                        <div class="num">4hrs</div><span class="label">Average delivery time</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <div class="nch-stat">
                        <div class="num">24/7</div><span class="label">365 days a year</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <div class="nch-stat">
                        <div class="num">£0</div><span class="label">Upfront cost to you</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Stats Band End -->

    <!-- Why Choose Us Start -->
    <section class="bg-grey section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="nch-content-block">
                        <h3>Know Your Rights. Claim What You're Owed.</h3>
                        <p class="nch-lead">Most drivers involved in a non-fault accident are unaware of the full range of
                            entitlements available to them. Insurers have teams working to minimise what they pay out
                            &mdash; you deserve the same expertise in your corner.</p>
                        <p>We're a Greater Manchester-based team with deep local roots and years of experience in accident
                            management and credit hire. From your first call to final resolution, our focus is entirely on
                            getting you the outcome you deserve &mdash; with as little disruption to your life as possible.
                        </p>
                        <div class="home-button-box mt-15"><a href="{{route("about")}}" class="button">More About Us</a></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="nch-list">
                        <li><i class="fa fa-check"></i> Fast response &mdash; same-day vehicles available</li>
                        <li><i class="fa fa-check"></i> No upfront costs for non-fault claimants</li>
                        <li><i class="fa fa-check"></i> Fully managed &mdash; we deal with insurers so you don't have to
                        </li>
                        <li><i class="fa fa-check"></i> Transparent, honest communication throughout</li>
                        <li><i class="fa fa-check"></i> No impact on your no-claims bonus, no excess to pay</li>
                        <li><i class="fa fa-check"></i> Specialist support for taxi and private hire drivers</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Why Choose Us End -->

    <!-- Start Reservation Area -->
    <section id="reservation" class="kar-theme-reservation-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 text-center">
                    <h2>AVAILABLE 24 HOURS A DAY, 7 DAYS A WEEK</h2>
                    <h5>Accidents don't keep office hours &mdash; and neither do we. Call now and we'll get things moving
                        straight away.</h5>
                    <h2>0800 000 0000</h2>
                    <div class="mt-20"><a class="reservation-btn" href="{{route("contact")}}"><i class="fa fa-phone"></i> Start Your
                            Claim</a></div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Reservation Area -->

    <!-- Testimonials Section Start -->
    <section id="review" class="testimonial-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2>What Our Clients Say</h2>
                        <h5>Grown almost entirely through trust and repeat referrals</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div id="testimonial-slide" class="owl-carousel owl-theme owl-loaded owl-drag">
                        <!-- testimonials item -->
                        <div class="single-testimonial">
                            <div class="testi-content-inner">
                                <div class="testimonial-content">
                                    <p>I was off the road after someone went into the back of me. Northwest Credit Hire had
                                        a like-for-like car with me the same afternoon and dealt with the other insurer
                                        completely. I didn't pay a thing.</p>
                                </div>
                                <div class="testimonial-bio">
                                    <div class="bio-info">
                                        <h3 class="name">James P.</h3>
                                    </div>
                                </div>
                                <div class="rating-box">
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- testimonials item -->
                        <div class="single-testimonial">
                            <div class="testi-content-inner">
                                <div class="testimonial-content">
                                    <p>As a private hire driver, time off the road is lost income. They got me a plated
                                        replacement within hours so I never stopped working. Proper specialists who
                                        understand the trade.</p>
                                </div>
                                <div class="testimonial-bio">
                                    <div class="bio-info">
                                        <h3 class="name">Imran S.</h3>
                                    </div>
                                </div>
                                <div class="rating-box">
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- testimonials item -->
                        <div class="single-testimonial">
                            <div class="testi-content-inner">
                                <div class="testimonial-content">
                                    <p>Clear communication from start to finish. No jargon, no pressure &mdash; just
                                        straight answers and a fair settlement. They recovered far more than the insurer
                                        first offered me.</p>
                                </div>
                                <div class="testimonial-bio">
                                    <div class="bio-info">
                                        <h3 class="name">Sarah W.</h3>
                                    </div>
                                </div>
                                <div class="rating-box">
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials Section End -->

@endsection