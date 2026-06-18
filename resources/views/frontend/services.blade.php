@extends("layouts.app")

@section("content")
    <!-- Start Page Banner -->
    <div class="single-page">
        <div class="container">
            <h1>Our Services</h1>
            <nav aria-label="breadcrumb single-page">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route("home")}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Services</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- End Page Banner -->

    <!-- Intro Section -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 text-center">
                    <p class="nch-lead">From the moment an accident happens to the moment you're back on the road, Northwest
                        Credit Hire manages the entire process. We recover the hire costs directly from the at-fault party's
                        insurer &mdash; <strong>you pay nothing.</strong></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Detailed Services -->
    <section class="bg-grey section-padding" style="padding-top: 30px;">
        <div class="container">
            <div class="row">
                <!-- Service 1 -->
                <div class="col-lg-6">
                    <div class="nch-service wow fadeInUp" data-wow-delay="0.1s">
                        <div class="nch-service-head">
                            <i class="fa fa-car"></i>
                            <h3>Credit Hire &mdash; Replacement Vehicles</h3>
                        </div>
                        <p>If you've been involved in a non-fault accident and your vehicle is off the road, you are legally
                            entitled to a like-for-like replacement at no cost to you. We arrange same-day replacement
                            vehicles &mdash; including cars, vans, executive vehicles and taxi-plated cars &mdash; so your
                            life and work continue without interruption.</p>
                        <p>All taxi replacement vehicles are less than two years old, fully comprehensively insured, and
                            licensed with the relevant local authority. Where required, vehicles are supplied with radio and
                            metering equipment as standard.</p>
                        <p><strong>Our service runs 24 hours a day, 7 days a week, 365 days a year</strong> &mdash; because
                            accidents don't keep office hours.</p>
                    </div>
                </div>
                <!-- Service 2 -->
                <div class="col-lg-6">
                    <div class="nch-service wow fadeInUp" data-wow-delay="0.2s">
                        <div class="nch-service-head">
                            <i class="fa fa-clipboard"></i>
                            <h3>Accident Management</h3>
                        </div>
                        <p>We take complete ownership of your claim from start to finish. Our team liaises directly with
                            insurers, solicitors, garages and third parties on your behalf &mdash; keeping you informed at
                            every stage, without the burden of paperwork or endless phone calls.</p>
                        <ul class="nch-list">
                            <li><i class="fa fa-check"></i> Accident reporting and documentation</li>
                            <li><i class="fa fa-check"></i> Vehicle storage and recovery</li>
                            <li><i class="fa fa-check"></i> Credit hire arrangement</li>
                            <li><i class="fa fa-check"></i> Repair coordination</li>
                            <li><i class="fa fa-check"></i> Access to a fleet of 300+ like-for-like vehicles</li>
                            <li><i class="fa fa-check"></i> Ongoing claim monitoring and regular updates</li>
                        </ul>
                    </div>
                </div>
                <!-- Service 3 -->
                <div class="col-lg-6">
                    <div class="nch-service wow fadeInUp" data-wow-delay="0.1s">
                        <div class="nch-service-head">
                            <i class="fa fa-truck"></i>
                            <h3>24/7 Vehicle Recovery</h3>
                        </div>
                        <p>Accidents happen at any hour &mdash; and so does our recovery service. Available around the
                            clock, we can collect or deliver your vehicle to or from any destination across the UK.</p>
                        <p>Once collected, your damaged vehicle is transported to a secure, fully insured storage facility,
                            giving you one less thing to worry about at what can be an incredibly stressful time.</p>
                    </div>
                </div>
                <!-- Service 4 -->
                <div class="col-lg-6">
                    <div class="nch-service wow fadeInUp" data-wow-delay="0.2s">
                        <div class="nch-service-head">
                            <i class="fa fa-wrench"></i>
                            <h3>Approved Repairs</h3>
                        </div>
                        <p>Your vehicle will be repaired at a quality-approved garage using manufacturer-approved parts. We
                            work exclusively with reputable, thoroughly vetted repair centres to ensure your vehicle is
                            returned to its pre-accident condition &mdash; with no shortcuts and no compromises.</p>
                        <p>All repair costs are recovered directly from the at-fault insurer. <strong>There is no excess for
                                you to pay.</strong></p>
                    </div>
                </div>
                <!-- Service 5 -->
                <div class="col-lg-6">
                    <div class="nch-service wow fadeInUp" data-wow-delay="0.1s">
                        <div class="nch-service-head">
                            <i class="fa fa-taxi"></i>
                            <h3>Taxi &amp; Private Hire Replacement</h3>
                        </div>
                        <p>For taxi and private hire drivers, every hour off the road means lost earnings. That's why we
                            specialise in same-day replacement vehicles, with a fleet of over 300 vehicles ready to keep you
                            working.</p>
                        <p>Our vehicles are licensed across a wide range of local council authorities, including:</p>
                        <div class="nch-councils">
                            <span>Oldham</span><span>Rochdale</span><span>Bury</span><span>Rossendale</span><span>Manchester</span><span>Knowsley</span><span>Wolverhampton</span><span>Walsall</span><span>Solihull</span><span>Luton</span>
                        </div>
                    </div>
                </div>
                <!-- Service 6 -->
                <div class="col-lg-6">
                    <div class="nch-service wow fadeInUp" data-wow-delay="0.2s">
                        <div class="nch-service-head">
                            <i class="fa fa-cube"></i>
                            <h3>Van &amp; Commercial Vehicle Hire</h3>
                        </div>
                        <p>If your van or commercial vehicle has been taken off the road following a non-fault accident, we
                            can provide a like-for-like replacement to keep your business running.</p>
                        <p>For tradespeople, delivery drivers and commercial operators, a van isn't just a vehicle &mdash;
                            it's your livelihood. We understand that, and we act accordingly.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Fleet Section -->
    <section class="section-padding">
        <div class="container">
            <div class="section-title">
                <h2>OUR FLEET</h2>
                <h5>A 300+ strong fleet of private hire and hackney carriage vehicles ready to go</h5>
            </div>
            <div class="row nch-fleet">
                <div class="col-lg-4 col-md-6">
                    <div class="fleet-group">
                        <h4><i class="fa fa-leaf" style="color:#B61314;"></i> Hybrid Taxis</h4>
                        <div class="nch-chips">
                            <span>Toyota Corolla</span><span>Toyota Auris</span><span>Suzuki Swace</span><span>Kia
                                Niro</span><span>Toyota C-HR</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="fleet-group">
                        <h4><i class="fa fa-star" style="color:#B61314;"></i> Prestige Taxis</h4>
                        <div class="nch-chips">
                            <span>BMW 5 Series</span><span>Audi A6</span><span>Lexus ES 300h</span><span>Mercedes
                                E-Class</span><span>Mercedes C-Class</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="fleet-group">
                        <h4><i class="fa fa-users" style="color:#B61314;"></i> 9-Seaters</h4>
                        <div class="nch-chips">
                            <span>Mercedes Vito</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Band -->
    <section class="nch-cta-band">
        <div class="container">
            <h2>Not sure what you're entitled to?</h2>
            <p>Call our team today and we'll talk you through exactly where you stand &mdash; no jargon, no pressure.</p>
            <div>
                <a href="tel:08000000000" class="nch-phone"><i class="fa fa-phone"></i> 0800 000 0000</a>
            </div>
            <a href="{{route("contact")}}" class="nch-btn-light">Contact Us</a>
        </div>
    </section>
@endsection