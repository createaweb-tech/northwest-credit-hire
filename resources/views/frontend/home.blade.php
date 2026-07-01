@extends("layouts.app")

@section("content")

    <!-- Hero -->
    <section class="nch-hero">
        <div class="container">
            <div class="nch-hero__grid">
                <div class="nch-hero__inner">
                    <h1>Welcome to <span class="accent">Northwest Credit Hire</span></h1>
                    <p class="nch-hero__lead">We take care of everything after a non-fault accident. From start to finish, we manage your claim, provide a like-for-like replacement vehicle, arrange accredited repairs, and negotiate a fair settlement  recovering all costs from the at-fault driver's insurer, so there's no cost to you.</p>
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

                    </div>
                </div>
                <div class="nch-hero__visual">
                    <div class="nch-hero__media">
                        <img src="{{asset("assets/images/cars/lexus-es-300h.jpg")}}"
                            alt="Premium like-for-like replacement vehicle">
                        <div class="nch-hero__tag">
                            <span class="ic"><i class="fa fa-check"></i></span>
                            <span><strong>&pound;0 upfront</strong> &mdash; we bill the at-fault insurer</span>
                        </div>
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
                    {{-- <p>You deal with one local team not a call centre. We deal with all aspects of your claim ensuring you get what you're entitled to and a smooth sailing claims process.</p> --}}
                    <p>We deal with all aspects of your claim ensuring you get what you're entitled to and a smooth sailing claims process.</p>
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
                    <p>We claim all costs for the recovery, storage, replacement vehicle, and repairs directly from the third-party insurer.</p>
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


    <!-- Like-for-like (red band) -->
    <section class="nch-section bg-dark nch-redband">
        <div class="container">
            <div class="nch-sec-head">
                <div class="nch-sec-head-l">
                    {{-- <span class="nch-eyebrow nch-eyebrow--ghost"><i class="fa fa-refresh"></i> Like-for-like</span>
                    --}}
                    <h2>A replacement for every driver</h2>
                    <p>If you've been involved in a non-fault accident and your vehicle is off the road, you're legally
                        entitled to a like-for-like replacement at no upfront cost from you — cars, vans, executive vehicles and
                        taxi-plated cars, so your life and work continue uninterrupted.</p>
                </div>
            </div>
            <div class="nch-showcase-grid">
                <figure class="nch-showcard">
                    {{-- <span class="nch-badge nch-badge--dark nch-showcard__badge">Same-day plated</span> --}}
                    <img src="{{asset("assets/images/cars/toyota-corolla.jpg")}}?v=1"
                        alt="Toyota Corolla hybrid replacement">
                    <figcaption class="nch-showcard__label">Standard Taxi</figcaption>
                </figure>
                <figure class="nch-showcard">
                    {{-- <span class="nch-badge nch-badge--dark nch-showcard__badge">Same-day plated</span> --}}
                    <img src="{{asset("assets/images/cars/cupra-formentor-1.jpg")}}?v=1"
                        alt="Cupra Formentor replacement vehicle">
                    <figcaption class="nch-showcard__label">Standard Hire </figcaption>
                </figure>
                <figure class="nch-showcard">
                    {{-- <span class="nch-badge nch-badge--dark nch-showcard__badge">Same-day plated</span> --}}
                    <img src="{{asset("assets/images/cars/audi-a4.jpg")}}?v=1" alt="Audi A4 replacement vehicle">
                    <figcaption class="nch-showcard__label">Executive Taxi</figcaption>
                </figure>
                <figure class="nch-showcard">
                    {{-- <span class="nch-badge nch-badge--dark nch-showcard__badge">9-seater</span> --}}
                    <img src="{{asset("assets/images/cars/9-seater.png")}}?v=1" alt="Mini  bus 6-9 seater taxi">
                    <figcaption class="nch-showcard__label">Mini  bus 6-9 seater taxi</figcaption>
                </figure>
            </div>
            <div class="nch-redband__cta">
                <a class="btn btn-red" href="{{route("services")}}">View all services <i
                        class="fa fa-long-arrow-right"></i></a>
            </div>
        </div>
    </section>


    <!-- Our mission -->
    <section class="nch-section bg-dark dark-bg">
        <div class="container">
            <div class="nch-quote">
                <div class="nch-quote__media">
                    <img src="{{asset("assets/images/cars/mercedes-g-class.jpg")}}?v=1"
                        alt="Northwest Credit Hire fleet vehicle">
                    {{-- <span class="nch-quote__caption"><span class="ic"><i class="fa fa-car"></i></span> Part of our 300+
                        fleet</span> --}}
                </div>
                <div class="nch-quote__body">
                    <span class="nch-quote__mark" aria-hidden="true">&ldquo;</span>
                    <span class="nch-eyebrow"><i class="fa fa-quote-left"></i> Our mission</span>
                    <blockquote>
                        <p class="nch-quote__text">No driver should face the aftermath of an accident alone.</p>
                        <p class="nch-quote__text">From the moment of impact to the moment you're back on the road, we
                            handle every step of the claims process so you don't have to.</p>
                    </blockquote>
                    <div class="nch-quote__by">
                        <span class="bar" aria-hidden="true"></span>
                        <span class="nch-quote__cite">
                            <strong>Northwest Credit Hire Ltd</strong>
                            <span>Greater Manchester</span>
                        </span>
                    </div>
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
                                href="mailto:info@northwestcredithire.com">info@northwestcredithire.com</a></li>
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
                        <div class="nch-testi__stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
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
                        <div class="nch-testi__stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
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
                        <div class="nch-testi__stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                    </div>
                    <p class="nch-testi__quote">Excellent service from start to finish. They recovered my car from Luton and
                        provided me with a like-for-like replacement vehicle, which made the whole process much easier.
                        Ahmed was professional, helpful, and kept everything running smoothly. Top service throughout –
                        highly recommended!
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


@endsection