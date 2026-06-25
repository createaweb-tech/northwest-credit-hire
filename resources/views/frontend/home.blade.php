@extends("layouts.app")

@section("content")

    <!-- Hero -->
    <section class="nch-hero">
        <div class="container">
            <div class="nch-hero__grid">
                <div class="nch-hero__inner">
                    <h1>Know your rights, Get back on the road, Same day replacement, <span class="accent">sorted</span>
                    </h1>
                    <p class="nch-hero__lead">Under UK law, if you weren't at fault, you're entitled to a like for like
                        replacement vehicle at no cost to you. We arrange this the same day, run your claim, and recover
                        every penny directly from the at fault insurer, so there's nothing for you</p>
                    <div class="nch-hero__stats">
                        <div class="nch-hero__stat">
                            <span class="ic"><i class="fa fa-car"></i></span>
                            <div>
                                <div class="n">300+</div>
                                <div class="l">Vehicle fleet</div>
                            </div>
                        </div>
                        <div class="nch-hero__stat">
                            <span class="ic"><i class="fa fa-clock-o"></i></span>
                            <div>
                                <div class="n">4 hrs</div>
                                <div class="l">Avg. delivery</div>
                            </div>
                        </div>
                        <div class="nch-hero__stat">
                            <span class="ic"><i class="fa fa-headphones"></i></span>
                            <div>
                                <div class="n">24/7</div>
                                <div class="l">365 days a year</div>
                            </div>
                        </div>
                        {{-- <div class="nch-hero__stat">
                            <span class="ic"><i class="fa fa-gbp"></i></span>
                            <div>
                                <div class="n">&pound;0</div>
                                <div class="l">Upfront cost</div>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="nch-hero__visual">
                    <div class="nch-hero__media">
                        <img src="{{asset("assets/images/cars/lexus-es-300h.jpg")}}"
                            alt="Premium like-for-like replacement vehicle">
                    </div>
                    <div class="nch-hero__rating">
                        <div class="stars">
                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                class="fa fa-star"></i><i class="fa fa-star"></i>
                        </div>
                        <div class="rt">
                            <strong>Rated excellent</strong>
                            <span>by drivers across the North West</span>
                        </div>
                    </div>
                    <div class="nch-hero__pill">
                        <span class="ic"><i class="fa fa-check"></i></span>
                        <span><strong>&pound;0 upfront</strong> &middot; we bill the insurer</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why choose us -->
    <section class="nch-section bg-cream">
        <div class="container">
            <div class="nch-sec-head">
                <div class="nch-sec-head-l">
                    {{-- <span class="nch-eyebrow"><i class="fa fa-check-circle"></i> Why choose us</span> --}}
                    <h2>Everything handled, all under one roof</h2>
                    <p>You deal with one local team not a call centre. We level the playing field with the at-fault
                        insurer and keep you moving from day one.</p>
                </div>
            </div>
            <div class="nch-feature-grid">
                <div class="nch-feature">
                    <span class="nch-feature__ic"><i class="fa fa-bolt"></i></span>
                    <h3>Fast response</h3>
                    <p>Same-day, like-for-like replacement vehicles delivered in around four hours from your first call.</p>
                </div>
                <div class="nch-feature">
                    <span class="nch-feature__ic"><i class="fa fa-gbp"></i></span>
                    <h3>No upfront cost</h3>
                    <p>Nothing to pay for non-fault claimants. We recover every penny directly from the at-fault insurer.
                    </p>
                </div>
                <div class="nch-feature">
                    <span class="nch-feature__ic"><i class="fa fa-handshake-o"></i></span>
                    <h3>Fully managed</h3>
                    <p>We deal with insurers, solicitors and garages so you don't have to. One point of contact throughout.
                    </p>
                </div>
                <div class="nch-feature">
                    <span class="nch-feature__ic"><i class="fa fa-shield"></i></span>
                    <h3>No risk to you</h3>
                    <p>No impact on your no-claims bonus and no excess to pay. Honest, transparent communication at every
                        step.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Our fleet -->
    {{-- <section class="nch-section bg-dark dark-bg">
        <div class="container">
            <div class="nch-sec-head">
                <div class="nch-sec-head-l">
                    <span class="nch-eyebrow"><i class="fa fa-car"></i> Our fleet</span>
                    <h2>300+ vehicles, ready to go</h2>
                    <p>A 300+ strong fleet of private hire and hackney carriage vehicles, kept under two years old, fully
                        insured and ready for same-day dispatch.</p>
                </div>
            </div>
            <div class="nch-showcase-grid">
                <figure class="nch-showcard">
                    <img src="{{asset("assets/images/cars/bmw-5-series.jpg")}}" alt="BMW 5 Series replacement vehicle">
                    <figcaption class="nch-showcard__label">BMW 5 Series</figcaption>
                </figure>
                <figure class="nch-showcard">
                    <img src="{{asset("assets/images/cars/audi-a6.jpg")}}" alt="Audi A6 replacement vehicle">
                    <figcaption class="nch-showcard__label">Audi A6</figcaption>
                </figure>
                <figure class="nch-showcard">
                    <img src="{{asset("assets/images/cars/mercedes-e-class.jpg")}}" alt="Mercedes E-Class replacement vehicle">
                    <figcaption class="nch-showcard__label">Mercedes E-Class</figcaption>
                </figure>
                <figure class="nch-showcard">
                    <img src="{{asset("assets/images/cars/lexus-es-300h.jpg")}}" alt="Lexus ES 300h replacement vehicle">
                    <figcaption class="nch-showcard__label">Lexus ES 300h</figcaption>
                </figure>
            </div>
        </div>
    </section> --}}

    <!-- Like-for-like (red band) -->
    <section class="nch-section bg-dark nch-redband">
        <div class="container">
            <div class="nch-sec-head">
                <div class="nch-sec-head-l">
                    {{-- <span class="nch-eyebrow nch-eyebrow--ghost"><i class="fa fa-refresh"></i> Like-for-like</span> --}}
                    <h2>A replacement for every driver</h2>
                    <p>If you've been involved in a non-fault accident and your vehicle is off the road, you're legally
                        entitled to a like-for-like replacement at no cost to you cars, vans, executive vehicles and
                        taxi-plated cars, so your life and work continue uninterrupted.</p>
                </div>
            </div>
            <div class="nch-showcase-grid">
                <figure class="nch-showcard">
                    {{-- <span class="nch-badge nch-badge--dark nch-showcard__badge">Same-day plated</span> --}}
                    <img src="{{asset("assets/images/cars/toyota-corolla.jpg")}}?v=1" alt="Toyota Corolla hybrid replacement">
                    <figcaption class="nch-showcard__label">Standard Taxi</figcaption>
                </figure>
                <figure class="nch-showcard">
                    {{-- <span class="nch-badge nch-badge--dark nch-showcard__badge">Same-day plated</span> --}}
                    <img src="{{asset("assets/images/cars/cupra-formentor-1.jpg")}}?v=1" alt="Cupra Formentor replacement vehicle">
                    <figcaption class="nch-showcard__label">Standard Hire </figcaption>
                </figure>
                <figure class="nch-showcard">
                    {{-- <span class="nch-badge nch-badge--dark nch-showcard__badge">Same-day plated</span> --}}
                    <img src="{{asset("assets/images/cars/audi-a4.jpg")}}?v=1" alt="Audi A4 replacement vehicle">
                    <figcaption class="nch-showcard__label">Executive Taxi</figcaption>
                </figure>
                <figure class="nch-showcard">
                    {{-- <span class="nch-badge nch-badge--dark nch-showcard__badge">9-seater</span> --}}
                    <img src="{{asset("assets/images/cars/9-seater.png")}}?v=1" alt="Mercedes Vito 9-seater">
                    <figcaption class="nch-showcard__label">Mercedes Vito</figcaption>
                </figure>
            </div>
            <div class="nch-redband__cta">
                <a class="btn btn-red" href="{{route("services")}}">View all services <i
                        class="fa fa-long-arrow-right"></i></a>
            </div>
        </div>
    </section>

    <!-- Our services -->
    {{-- <section class="nch-section bg-dark dark-bg">
        <div class="container">
            <div class="nch-sec-head">
                <div class="nch-sec-head-l">
                    <span class="nch-eyebrow"><i class="fa fa-th-large"></i> Our services</span>
                    <h2>Our services</h2>
                    <p>From the moment of impact to the moment you're back on the road, we manage every step of your
                        non-fault claim.</p>
                </div>
                <a class="nch-sec-link" href="{{route("services")}}">View all services <i
                        class="fa fa-long-arrow-right"></i></a>
            </div>
            <div class="nch-card-grid">
                <article class="nch-pcard">
                    <div class="nch-pcard__media">
                        <span class="nch-badge nch-badge--red">No upfront cost</span>
                        <img src="{{asset("assets/images/photos/gallery-2.jpg")}}" alt="Like-for-like replacement vehicle">
                    </div>
                    <div class="nch-pcard__body">
                        <h3>Credit Hire</h3>
                        <p>Same-day like-for-like replacement vehicles cars, executive, vans and plated Taxi.</p>
                        <div class="nch-pcard__meta">
                            <span><i class="fa fa-car"></i> Cars &amp; executive</span>
                            <span><i class="fa fa-taxi"></i> Plated Taxi</span>
                        </div>
                        <div class="nch-pcard__foot">
                            <span class="nch-pcard__price">From day one</span>
                            <a class="nch-pcard__link" href="{{route("services")}}">Learn more <i
                                    class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </article>
                <article class="nch-pcard">
                    <div class="nch-pcard__media">
                        <span class="nch-badge nch-badge--dark">Fully managed</span>
                        <img src="{{asset("assets/images/news/blog-2.jpg")}}" alt="Accident management specialist">
                    </div>
                    <div class="nch-pcard__body">
                        <h3>Accident Management</h3>
                        <p>We take complete ownership of your claim insurers, solicitors and garages, all handled
                            for you.</p>
                        <div class="nch-pcard__meta">
                            <span><i class="fa fa-folder-open-o"></i> Documentation</span>
                            <span><i class="fa fa-refresh"></i> Claim updates</span>
                        </div>
                        <div class="nch-pcard__foot">
                            <span class="nch-pcard__price">End to end</span>
                            <a class="nch-pcard__link" href="{{route("services")}}">Learn more <i
                                    class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </article>
                <article class="nch-pcard">
                    <div class="nch-pcard__media">
                        <span class="nch-badge nch-badge--red">24/7</span>
                        <img src="{{asset("assets/images/photos/gallery-3.jpg")}}" alt="24/7 vehicle recovery">
                    </div>
                    <div class="nch-pcard__body">
                        <h3>24/7 Vehicle Recovery</h3>
                        <p>Around-the-clock collection and delivery anywhere in the UK, with secure, fully insured storage.
                        </p>
                        <div class="nch-pcard__meta">
                            <span><i class="fa fa-truck"></i> UK-wide</span>
                            <span><i class="fa fa-lock"></i> Secure storage</span>
                        </div>
                        <div class="nch-pcard__foot">
                            <span class="nch-pcard__price">Any hour</span>
                            <a class="nch-pcard__link" href="{{route("services")}}">Learn more <i
                                    class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </article>
                <article class="nch-pcard">
                    <div class="nch-pcard__media">
                        <span class="nch-badge nch-badge--dark">Genuine parts</span>
                        <img src="{{asset("assets/images/photos/gallery-5.jpg")}}" alt="Approved vehicle repairs">
                    </div>
                    <div class="nch-pcard__body">
                        <h3>Approved Repairs</h3>
                        <p>Repairs at vetted, quality-approved garages using manufacturer-approved parts. No excess to pay.
                        </p>
                        <div class="nch-pcard__meta">
                            <span><i class="fa fa-wrench"></i> Vetted garages</span>
                            <span><i class="fa fa-check"></i> No excess</span>
                        </div>
                        <div class="nch-pcard__foot">
                            <span class="nch-pcard__price">Pre-accident condition</span>
                            <a class="nch-pcard__link" href="{{route("services")}}">Learn more <i
                                    class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </article>
                <article class="nch-pcard">
                    <div class="nch-pcard__media">
                        <span class="nch-badge nch-badge--red">Same-day plated</span>
                        <img src="{{asset("assets/images/photos/gallery-4.jpg")}}" alt="Taxi and private hire replacement">
                    </div>
                    <div class="nch-pcard__body">
                        <h3>Taxi &amp; Private Hire</h3>
                        <p>Same-day plated replacements from a 300+ fleet, licensed across a wide range of council
                            authorities.</p>
                        <div class="nch-pcard__meta">
                            <span><i class="fa fa-taxi"></i> Plated &amp; insured</span>
                            <span><i class="fa fa-id-card-o"></i> Multi-council</span>
                        </div>
                        <div class="nch-pcard__foot">
                            <span class="nch-pcard__price">Keep earning</span>
                            <a class="nch-pcard__link" href="{{route("services")}}">Learn more <i
                                    class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </article>
                <article class="nch-pcard">
                    <div class="nch-pcard__media">
                        <span class="nch-badge nch-badge--dark">Like-for-like</span>
                        <img src="{{asset("assets/images/news/blog-1.jpg")}}" alt="Van and commercial vehicle hire">
                    </div>
                    <div class="nch-pcard__body">
                        <h3>Van &amp; Commercial</h3>
                        <p>Like-for-like van and commercial replacements to keep tradespeople and businesses moving.</p>
                        <div class="nch-pcard__meta">
                            <span><i class="fa fa-cube"></i> Vans &amp; LCV</span>
                            <span><i class="fa fa-briefcase"></i> Business-ready</span>
                        </div>
                        <div class="nch-pcard__foot">
                            <span class="nch-pcard__price">No downtime</span>
                            <a class="nch-pcard__link" href="{{route("services")}}">Learn more <i
                                    class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section> --}}

    <!-- Our mission -->
    <section class="nch-section bg-dark dark-bg">
        <div class="container">
            <div class="nch-quote">
                <div class="nch-quote__media">
                    <img src="{{asset("assets/images/cars/mercedes-g-class.jpg")}}?v=1"
                        alt="Northwest Credit Hire fleet vehicle">
                </div>
                <div class="nch-quote__body">
                    <span class="nch-eyebrow"><i class="fa fa-quote-left"></i> Our mission</span>
                    <blockquote>No driver should face the aftermath of an accident alone. From the moment of impact to the
                        moment you're back on the road, we handle every step of the claims process so you don't have
                        to.</blockquote>
                    <div class="nch-quote__by">Northwest Credit Hire Ltd <span>Greater Manchester</span></div>
                    <div class="nch-quote__stats">
                        <div class="nch-quote__stat">
                            <div class="n">300+</div>
                            <div class="l">Vehicles in our fleet</div>
                        </div>
                        <div class="nch-quote__stat">
                            <div class="n">4 hrs</div>
                            <div class="l">Average delivery time</div>
                        </div>
                        <div class="nch-quote__stat">
                            <div class="n">2</div>
                            <div class="l">Strategic UK sites</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How it works -->
    <section class="nch-section bg-dark dark-bg">
        <div class="container">
            <div class="nch-sec-head">
                <div class="nch-sec-head-l">
                    <h2>What to do in a collision</h2>
                    <p>Four simple steps to follow if you're in a car accident that wasn't your fault then leave the rest to
                        us.</p>
                </div>
            </div>
            <div class="nch-steps">
                <div class="nch-step">
                    <div class="nch-step__n">Step 01</div>
                    <span class="nch-step__ic"><i class="fa fa-ambulance"></i></span>
                    <h3>Safety first</h3>
                    <p>Check for injuries and call 999 immediately if anyone is hurt. If it's safe to do so, move your
                        vehicle out of harm's way.</p>
                </div>
                <div class="nch-step">
                    <div class="nch-step__n">Step 02</div>
                    <span class="nch-step__ic"><i class="fa fa-pencil-square-o"></i></span>
                    <h3>Gather the details</h3>
                    <p>Take names, addresses, phone numbers, insurance details and vehicle make/model for everyone involved,
                        plus any witnesses.</p>
                </div>
                <div class="nch-step">
                    <div class="nch-step__n">Step 03</div>
                    <span class="nch-step__ic"><i class="fa fa-camera"></i></span>
                    <h3>Take pictures</h3>
                    <p>Photograph the accident scene, the damage to all vehicles and any injuries. The more evidence, the
                        stronger your claim.</p>
                </div>
                <div class="nch-step">
                    <div class="nch-step__n">Step 04</div>
                    <span class="nch-step__ic"><i class="fa fa-phone"></i></span>
                    <h3>Call Northwest Credit Hire</h3>
                    <p>We'll notify your insurance company, recover your car and get a like-for-like replacement to you,
                        often right there on the scene.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Our location -->
    <section class="nch-section bg-dark dark-bg">
        <div class="container">
            <div class="nch-sec-head">
                <div class="nch-sec-head-l">
                    {{-- <span class="nch-eyebrow"><i class="fa fa-map-marker"></i> Our location</span> --}}
                    <h2>Talk to a real person, right now</h2>
                    <p>We're available 24 hours a day, 7 days a week, 365 days a year. Send a message or call whatever's
                        easiest. No automated queue, no script.</p>
                </div>
            </div>
            <div class="nch-loc">
                <div class="nch-loc__card">
                    <h3>Northwest Credit Hire Ltd</h3>
                    <p class="nch-loc__sub">Credit hire &amp; accident management specialists</p>
                    <ul class="nch-loc__list">
                        <li><i class="fa fa-map-marker"></i> <span>Unit A2, Highfield Industrial Estate, W End St, Oldham
                                OL9 6AJ, United Kingdom</span></li>
                        <li><i class="fa fa-phone"></i> <a href="tel:07824973768">07824 973768</a></li>
                        <li><i class="fa fa-envelope-o"></i> <a
                                href="mailto:info@northwestcredithire.co.uk">info@northwestcredithire.co.uk</a></li>
                        <li><i class="fa fa-clock-o"></i> <span>Open 24/7, 365 days a year</span></li>
                    </ul>
                    <a class="btn btn-red"
                        href="https://www.google.com/maps/dir/?api=1&destination=Northwest+Credit+Hire+Ltd+Oldham+OL9+6AJ"
                        target="_blank" rel="noopener">Get directions <i class="fa fa-long-arrow-right"></i></a>
                </div>
                <div class="nch-loc__map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2170.178780831207!2d-2.125107123705445!3d53.5428514600028!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487bb7912052326b%3A0x4e6982b72fbc2c5f!2sNorthwest%20Credit%20Hire%20Ltd!5e1!3m2!1sen!2s!4v1782120599298!5m2!1sen!2s"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- Offer banner -->
    {{-- <section class="nch-section--tight bg-cream">
        <div class="container">
            <div class="nch-offer">
                <div class="nch-offer__bg"></div>
                <div class="nch-offer__overlay"></div>
                <div class="nch-offer__inner">
                    <h2>You pay <span>nothing.</span> We recover every penny.</h2>
                    <p>Recovery, storage, replacement hire, repairs and your full claim all handled under one roof, at no
                        cost to you.</p>
                    <div class="nch-offer__actions">
                        <a class="btn btn-red" href="{{route("contact")}}">Start your claim <i
                                class="fa fa-long-arrow-right"></i></a>
                        <a class="nch-offer__phone" href="tel:07824973768"><i class="fa fa-phone"></i> 07824 973768</a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- Testimonials -->
    <section class="nch-section bg-dark dark-bg">
        <div class="container">
            <div class="nch-sec-head">
                <div class="nch-sec-head-l">
                    {{-- <span class="nch-eyebrow"><i class="fa fa-star"></i> Rated excellent</span> --}}
                    <h2>What our clients say</h2>
                    <p>We've grown almost entirely through trust and repeat referrals across the North West.</p>
                </div>
            </div>
            <div class="nch-tgrid">
                <div class="nch-testi">
                    <div class="nch-testi__top">
                        <span class="nch-testi__q"><i class="fa fa-quote-right"></i></span>
                        <div class="nch-testi__stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                    </div>
                    <p class="nch-testi__quote">Quick and excellent service, recovered my car right away and was provided a
                        courtesy within the the hour, all paperwork dealt with and got was paid for my car very quickly by
                        insurance. Jacob was very professional and was easy to contact and explained the process very
                        thoroughly. Highly recommended!</p>
                    <div class="nch-testi__person">
                        <img src="{{asset("assets/images/users/user1.png")}}" alt="Danyal javed">
                        <div>
                            <div class="name">Danyal javed</div>
                            {{-- <div class="role">Non-fault driver &middot; Manchester</div> --}}
                        </div>
                    </div>
                </div>
                <div class="nch-testi">
                    <div class="nch-testi__top">
                        <span class="nch-testi__q"><i class="fa fa-quote-right"></i></span>
                        <div class="nch-testi__stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                    </div>
                    <p class="nch-testi__quote">Excellent professional service from Hire Ltd. Jacob was particularly helpful
                        throughout, providing clear advice and keeping me updated at every stage. The process was handled
                        efficiently and with great attention to detail.

                        I would highly recommend Hire Ltd and would happily use their services again.</p>
                    <div class="nch-testi__person">
                        <img src="{{asset("assets/images/users/user2.png")}}" alt="Muzzy Hussain">
                        <div>
                            <div class="name">Muzzy Hussain</div>
                            {{-- <div class="role">Private hire driver &middot; Oldham</div> --}}
                        </div>
                    </div>
                </div>
                <div class="nch-testi">
                    <div class="nch-testi__top">
                        <span class="nch-testi__q"><i class="fa fa-quote-right"></i></span>
                        <div class="nch-testi__stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                    </div>
                    <p class="nch-testi__quote">Excellent service from start to finish. They recovered my car from Luton and provided me with a like-for-like replacement vehicle, which made the whole process much easier. Ahmed was professional, helpful, and kept everything running smoothly. Top service throughout – highly recommended!
                    </p>
                    <div class="nch-testi__person">
                        <img src="{{asset("assets/images/users/user3.png")}}" alt="Saeed Akhtar">
                        <div>
                            <div class="name">Saeed Akhtar</div>
                            {{-- <div class="role">Non-fault driver &middot; Bury</div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA band -->
    {{-- <section class="nch-section--tight bg-cream">
        <div class="container">
            <div class="nch-ctaband">
                <div class="nch-ctaband__inner">
                    <h2>Had a non-fault accident?</h2>
                    <p>Speak to our team today and find out exactly what you're entitled to. Available 24 hours a day, 365
                        days a year.</p>
                    <div class="nch-ctaband__actions">
                        <a class="btn btn-light" href="{{route("contact")}}">Start your claim <i
                                class="fa fa-long-arrow-right"></i></a>
                        <a class="nch-ctaband__phone" href="tel:07824973768"><i class="fa fa-phone"></i> 07824 973768</a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

@endsection
