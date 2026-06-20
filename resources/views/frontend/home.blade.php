@extends("layouts.app")

@section("content")

    <!-- Hero -->
    <section class="nch-hero">
        <div class="container">
            <div class="nch-hero__grid">
                <div class="nch-hero__inner">
                    <h1>Same-day replacement vehicles, <span class="accent">sorted.</span></h1>
                    <p class="nch-hero__lead">If the accident wasn't your fault, you're legally entitled to a like-for-like
                        replacement at no cost to you. We manage the whole claim and recover every penny from the at-fault
                        insurer.</p>
                    <div class="nch-hero__stats">
                        <div class="nch-hero__stat">
                            <span class="ic"><i class="fa fa-car"></i></span>
                            <div><div class="n">300+</div><div class="l">Vehicle fleet</div></div>
                        </div>
                        <div class="nch-hero__stat">
                            <span class="ic"><i class="fa fa-clock-o"></i></span>
                            <div><div class="n">4 hrs</div><div class="l">Avg. delivery</div></div>
                        </div>
                        <div class="nch-hero__stat">
                            <span class="ic"><i class="fa fa-headphones"></i></span>
                            <div><div class="n">24/7</div><div class="l">365 days a year</div></div>
                        </div>
                        {{-- <div class="nch-hero__stat">
                            <span class="ic"><i class="fa fa-gbp"></i></span>
                            <div><div class="n">&pound;0</div><div class="l">Upfront cost</div></div>
                        </div> --}}
                    </div>
                </div>
                <div class="nch-hero__visual">
                    <div class="nch-hero__media">
                        <img src="{{asset("assets/images/cars/lexus-es-300h.jpg")}}" alt="Premium like-for-like replacement vehicle">
                    </div>
                    <div class="nch-hero__rating">
                        <div class="stars">
                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
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
                    <p>You deal with one local team &mdash; not a call centre. We level the playing field with the at-fault
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
                    <p>Nothing to pay for non-fault claimants. We recover every penny directly from the at-fault insurer.</p>
                </div>
                <div class="nch-feature">
                    <span class="nch-feature__ic"><i class="fa fa-handshake-o"></i></span>
                    <h3>Fully managed</h3>
                    <p>We deal with insurers, solicitors and garages so you don't have to. One point of contact throughout.</p>
                </div>
                <div class="nch-feature">
                    <span class="nch-feature__ic"><i class="fa fa-shield"></i></span>
                    <h3>No risk to you</h3>
                    <p>No impact on your no-claims bonus and no excess to pay. Honest, transparent communication at every step.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services / catalog -->
    {{-- <section class="nch-section bg-white">
        <div class="container">
            <div class="nch-sec-head">
                <div class="nch-sec-head-l">
                    <h2>Our services</h2>
                    <p>From the moment of impact to the moment you're back on the road, we manage every step of your
                        non-fault claim.</p>
                </div>
                <a class="nch-sec-link" href="{{route("services")}}">View all services <i class="fa fa-long-arrow-right"></i></a>
            </div>
            <div class="nch-card-grid">
                <article class="nch-pcard">
                    <div class="nch-pcard__media">
                        <span class="nch-badge nch-badge--red">No upfront cost</span>
                        <img src="{{asset("assets/images/photos/gallery-2.jpg")}}" alt="Like-for-like replacement vehicle">
                    </div>
                    <div class="nch-pcard__body">
                        <h3>Credit Hire</h3>
                        <p>Same-day like-for-like replacement vehicles &mdash; cars, executive, vans and plated taxis.</p>
                        <div class="nch-pcard__meta">
                            <span><i class="fa fa-car"></i> Cars &amp; executive</span>
                            <span><i class="fa fa-taxi"></i> Plated taxis</span>
                        </div>
                        <div class="nch-pcard__foot">
                            <span class="nch-pcard__price">From day one</span>
                            <a class="nch-pcard__link" href="{{route("services")}}">Learn more <i class="fa fa-long-arrow-right"></i></a>
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
                        <p>We take complete ownership of your claim &mdash; insurers, solicitors and garages, all handled
                            for you.</p>
                        <div class="nch-pcard__meta">
                            <span><i class="fa fa-folder-open-o"></i> Documentation</span>
                            <span><i class="fa fa-refresh"></i> Claim updates</span>
                        </div>
                        <div class="nch-pcard__foot">
                            <span class="nch-pcard__price">End to end</span>
                            <a class="nch-pcard__link" href="{{route("services")}}">Learn more <i class="fa fa-long-arrow-right"></i></a>
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
                        <p>Around-the-clock collection and delivery anywhere in the UK, with secure, fully insured storage.</p>
                        <div class="nch-pcard__meta">
                            <span><i class="fa fa-truck"></i> UK-wide</span>
                            <span><i class="fa fa-lock"></i> Secure storage</span>
                        </div>
                        <div class="nch-pcard__foot">
                            <span class="nch-pcard__price">Any hour</span>
                            <a class="nch-pcard__link" href="{{route("services")}}">Learn more <i class="fa fa-long-arrow-right"></i></a>
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
                        <p>Repairs at vetted, quality-approved garages using manufacturer-approved parts. No excess to pay.</p>
                        <div class="nch-pcard__meta">
                            <span><i class="fa fa-wrench"></i> Vetted garages</span>
                            <span><i class="fa fa-check"></i> No excess</span>
                        </div>
                        <div class="nch-pcard__foot">
                            <span class="nch-pcard__price">Pre-accident condition</span>
                            <a class="nch-pcard__link" href="{{route("services")}}">Learn more <i class="fa fa-long-arrow-right"></i></a>
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
                            <a class="nch-pcard__link" href="{{route("services")}}">Learn more <i class="fa fa-long-arrow-right"></i></a>
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
                            <a class="nch-pcard__link" href="{{route("services")}}">Learn more <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section> --}}

    <!-- Offer banner -->
    {{-- <section class="nch-section--tight bg-cream">
        <div class="container">
            <div class="nch-offer">
                <div class="nch-offer__bg"></div>
                <div class="nch-offer__overlay"></div>
                <div class="nch-offer__inner">
                    <h2>You pay <span>nothing.</span> We recover every penny.</h2>
                    <p>Recovery, storage, replacement hire, repairs and your full claim &mdash; all handled under one roof,
                        at no cost to you.</p>
                    <div class="nch-offer__actions">
                        <a class="btn btn-red" href="{{route("contact")}}">Start your claim <i class="fa fa-long-arrow-right"></i></a>
                        <a class="nch-offer__phone" href="tel:08000000000"><i class="fa fa-phone"></i> 0800 000 0000</a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- How it works -->
    <section class="nch-section bg-cream">
        <div class="container">
            <div class="nch-sec-head">
                <div class="nch-sec-head-l">
                    <h2>How it works</h2>
                    <p>Four simple steps from your first call to getting your settlement &mdash; we do the heavy lifting.</p>
                </div>
            </div>
            <div class="nch-steps">
                <div class="nch-step">
                    <div class="nch-step__n">Step 01</div>
                    <span class="nch-step__ic"><i class="fa fa-phone"></i></span>
                    <h3>Get in touch</h3>
                    <p>Call us 24/7 or send a message. Tell us briefly what happened &mdash; that's all we need to start.</p>
                </div>
                <div class="nch-step">
                    <div class="nch-step__n">Step 02</div>
                    <span class="nch-step__ic"><i class="fa fa-car"></i></span>
                    <h3>Get your vehicle</h3>
                    <p>We deliver a like-for-like replacement, usually the same day, and recover your damaged vehicle.</p>
                </div>
                <div class="nch-step">
                    <div class="nch-step__n">Step 03</div>
                    <span class="nch-step__ic"><i class="fa fa-wrench"></i></span>
                    <h3>We manage repairs</h3>
                    <p>Approved garages, genuine parts and full liaison with insurers and solicitors on your behalf.</p>
                </div>
                <div class="nch-step">
                    <div class="nch-step__n">Step 04</div>
                    <span class="nch-step__ic"><i class="fa fa-check-circle"></i></span>
                    <h3>Claim resolved</h3>
                    <p>We pursue everything you're owed and recover all costs from the at-fault insurer. You pay nothing.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="nch-section bg-white">
        <div class="container">
            <div class="nch-sec-head">
                <div class="nch-sec-head-l">
                    {{-- <span class="nch-eyebrow"><i class="fa fa-comment-o"></i> Client stories</span> --}}
                    <h2>What our clients say</h2>
                    <p>We've grown almost entirely through trust and repeat referrals across the North West.</p>
                </div>
            </div>
            <div class="nch-tgrid">
                <div class="nch-testi">
                    <div class="nch-testi__stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                    <p class="nch-testi__quote">I was off the road after someone went into the back of me. They had a
                        like-for-like car with me the same afternoon and dealt with the other insurer completely. I didn't
                        pay a thing.</p>
                    <div class="nch-testi__person">
                        <img src="{{asset("assets/images/team/team-1.jpg")}}" alt="James P.">
                        <div>
                            <div class="name">James P.</div>
                            <div class="role">Non-fault driver &middot; Manchester</div>
                        </div>
                    </div>
                </div>
                <div class="nch-testi">
                    <div class="nch-testi__stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                    <p class="nch-testi__quote">As a private hire driver, time off the road is lost income. They got me a
                        plated replacement within hours so I never stopped working. Proper specialists who understand the
                        trade.</p>
                    <div class="nch-testi__person">
                        <img src="{{asset("assets/images/clients/testimonial-3.jpg")}}" alt="Imran S.">
                        <div>
                            <div class="name">Imran S.</div>
                            <div class="role">Private hire driver &middot; Oldham</div>
                        </div>
                    </div>
                </div>
                <div class="nch-testi">
                    <div class="nch-testi__stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                    <p class="nch-testi__quote">Clear communication from start to finish. No jargon, no pressure &mdash; just
                        straight answers and a fair settlement. They recovered far more than the insurer first offered me.</p>
                    <div class="nch-testi__person">
                        <img src="{{asset("assets/images/clients/testimonial-2.jpg")}}" alt="Sarah W.">
                        <div>
                            <div class="name">Sarah W.</div>
                            <div class="role">Non-fault driver &middot; Bury</div>
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
                        <a class="btn btn-light" href="{{route("contact")}}">Start your claim <i class="fa fa-long-arrow-right"></i></a>
                        <a class="nch-ctaband__phone" href="tel:08000000000"><i class="fa fa-phone"></i> 0800 000 0000</a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

@endsection
