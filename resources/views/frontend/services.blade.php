@extends("layouts.app")

@section("content")
    <!-- Banner -->
    <div class="single-page">
        <div class="nch-banner__bg"></div>
        <div class="nch-banner__overlay"></div>
        <div class="container text-center">
            {{-- <span class="nch-eyebrow nch-eyebrow--ghost"><i class="fa fa-th-large"></i> What we do</span> --}}
            <h1>Our Services</h1>
            {{-- <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route("home")}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Services</li>
                </ol>
            </nav> --}}
        </div>
    </div>

    <!-- Services: sticky intro + numbered list -->
    <section class="nch-section bg-cream">
        <div class="container">
            <div class="nch-svc-layout">
                <aside class="nch-svc-aside">
                    <span class="nch-eyebrow"><i class="fa fa-th-large"></i> What we do</span>
                    <h2>From the impact to back on the road</h2>
                    <p>Northwest Credit Hire manages the entire process after a non-fault accident &mdash; recovery,
                        replacement, repairs and your full claim, all handled under one roof.</p>
                    <div class="nch-svc-note">
                        <i class="fa fa-shield"></i>
                        <span>You pay nothing. We recover every cost directly from the at-fault party's insurer.</span>
                    </div>
                    <a class="btn btn-red" href="{{route("contact")}}">Start your claim <i class="fa fa-long-arrow-right"></i></a>
                </aside>

                <div class="nch-svc-list">
                    <article class="nch-svc">
                        <span class="nch-svc__n">01</span>
                        <div class="nch-svc__body">
                            <div class="nch-svc__head">
                                <i class="fa fa-car"></i>
                                <h3>Credit Hire &mdash; Replacement Vehicles</h3>
                            </div>
                            <p>If you've been involved in a non-fault accident and your vehicle is off the road, you're
                                legally entitled to a like-for-like replacement at no cost to you &mdash; cars, vans,
                                executive vehicles and taxi-plated cars, so your life and work continue uninterrupted.</p>
                            <p>All taxi replacement vehicles are under two years old, fully insured and licensed with the
                                relevant local authority. <strong>Available 24 hours a day, 365 days a year.</strong></p>
                        </div>
                    </article>

                    <article class="nch-svc">
                        <span class="nch-svc__n">02</span>
                        <div class="nch-svc__body">
                            <div class="nch-svc__head">
                                <i class="fa fa-clipboard"></i>
                                <h3>Accident Management</h3>
                            </div>
                            <p>We take complete ownership of your claim from start to finish &mdash; liaising directly with
                                insurers, solicitors, garages and third parties on your behalf, without the burden of
                                paperwork or endless phone calls.</p>
                            <ul class="nch-checks">
                                <li><i class="fa fa-check"></i> Accident reporting and documentation</li>
                                <li><i class="fa fa-check"></i> Vehicle storage, recovery &amp; repair coordination</li>
                                <li><i class="fa fa-check"></i> Access to a 300+ like-for-like fleet</li>
                                <li><i class="fa fa-check"></i> Ongoing claim monitoring and regular updates</li>
                            </ul>
                        </div>
                    </article>

                    <article class="nch-svc">
                        <span class="nch-svc__n">03</span>
                        <div class="nch-svc__body">
                            <div class="nch-svc__head">
                                <i class="fa fa-truck"></i>
                                <h3>24/7 Vehicle Recovery</h3>
                            </div>
                            <p>Accidents happen at any hour &mdash; and so does our recovery service. Available around the
                                clock, we collect or deliver your vehicle to or from any destination across the UK.</p>
                            <p>Your damaged vehicle is then transported to a secure, fully insured storage facility &mdash;
                                one less thing to worry about at a stressful time.</p>
                        </div>
                    </article>

                    <article class="nch-svc">
                        <span class="nch-svc__n">04</span>
                        <div class="nch-svc__body">
                            <div class="nch-svc__head">
                                <i class="fa fa-wrench"></i>
                                <h3>Approved Repairs</h3>
                            </div>
                            <p>Your vehicle is repaired at a quality-approved garage using manufacturer-approved parts. We
                                work only with reputable, thoroughly vetted repair centres to return it to pre-accident
                                condition &mdash; no shortcuts, no compromises.</p>
                            <p>All repair costs are recovered from the at-fault insurer. <strong>There is no excess for you to
                                    pay.</strong></p>
                        </div>
                    </article>

                    <article class="nch-svc">
                        <span class="nch-svc__n">05</span>
                        <div class="nch-svc__body">
                            <div class="nch-svc__head">
                                <i class="fa fa-taxi"></i>
                                <h3>Taxi &amp; Private Hire Replacement</h3>
                            </div>
                            <p>For taxi and private hire drivers, every hour off the road means lost earnings. We specialise
                                in same-day plated replacements from a 300+ fleet, licensed across a wide range of councils:</p>
                            <div class="nch-councils">
                                <span>Oldham</span><span>Rochdale</span><span>Bury</span><span>Rossendale</span><span>Manchester</span><span>Knowsley</span><span>Wolverhampton</span><span>Walsall</span><span>Solihull</span><span>Luton</span>
                            </div>
                        </div>
                    </article>

                    <article class="nch-svc">
                        <span class="nch-svc__n">06</span>
                        <div class="nch-svc__body">
                            <div class="nch-svc__head">
                                <i class="fa fa-cube"></i>
                                <h3>Van &amp; Commercial Vehicle Hire</h3>
                            </div>
                            <p>If your van or commercial vehicle is off the road after a non-fault accident, we provide a
                                like-for-like replacement to keep your business running.</p>
                            <p>For tradespeople, delivery drivers and operators, a van isn't just a vehicle &mdash; it's your
                                livelihood. We understand that, and we act accordingly.</p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <!-- Fleet -->
    <section class="nch-section bg-white">
        <div class="container">
            <div class="nch-sec-head">
                <div class="nch-sec-head-l">
                    {{-- <span class="nch-eyebrow"><i class="fa fa-car"></i> Our fleet</span> --}}
                    <h2>300+ vehicles, ready to go</h2>
                    <p>A 300+ strong fleet of private hire and hackney carriage vehicles, kept under two years old, fully
                        insured and ready for same-day dispatch.</p>
                </div>
            </div>
            <!-- Hybrid Taxis -->
            <div class="nch-fleet-row">
                <div class="nch-fleet-row__media">
                    <img src="{{asset("assets/images/cars/toyota-corolla.jpg")}}" alt="Toyota Corolla hybrid taxi">
                    <span class="nch-fleet-row__count">5 models</span>
                </div>
                <div class="nch-fleet-row__content">
                    {{-- <span class="nch-eyebrow"><i class="fa fa-leaf"></i> Fleet 01 &mdash; Eco &amp; efficient</span> --}}
                    <h3>Hybrid Taxis</h3>
                    <p class="nch-fleet-row__desc">Efficient, low-emission hybrids that keep running costs down without
                        compromising on comfort &mdash; ideal for everyday private hire work and longer shifts.</p>
                    <ul class="nch-checks">
                        <li><i class="fa fa-check"></i> Low fuel costs &amp; lower emissions</li>
                        <li><i class="fa fa-check"></i> Under two years old, fully insured</li>
                        <li><i class="fa fa-check"></i> Plated and ready for same-day dispatch</li>
                    </ul>
                    <div class="nch-tags">
                        <span>Toyota Corolla</span><span>Toyota Auris</span><span>Suzuki Swace</span><span>Kia Niro</span><span>Toyota C-HR</span>
                    </div>
                </div>
            </div>

            <!-- Prestige Taxis -->
            <div class="nch-fleet-row nch-fleet-row--flip">
                <div class="nch-fleet-row__media">
                    <img src="{{asset("assets/images/cars/bmw-5-series.jpg")}}" alt="BMW 5 Series executive saloon">
                    <span class="nch-fleet-row__count">5 models</span>
                </div>
                <div class="nch-fleet-row__content">
                    {{-- <span class="nch-eyebrow"><i class="fa fa-star"></i> Fleet 02 &mdash; Executive</span> --}}
                    <h3>Prestige Taxis</h3>
                    <p class="nch-fleet-row__desc">Executive saloons for premium, corporate and airport journeys where
                        presentation matters &mdash; refined, spacious and immaculately maintained.</p>
                    <ul class="nch-checks">
                        <li><i class="fa fa-check"></i> Premium, executive interiors</li>
                        <li><i class="fa fa-check"></i> Ideal for corporate &amp; airport runs</li>
                        <li><i class="fa fa-check"></i> Same-day availability across the fleet</li>
                    </ul>
                    <div class="nch-tags">
                        <span>BMW 5 Series</span><span>Audi A6</span><span>Lexus ES 300h</span><span>Mercedes E-Class</span><span>Mercedes C-Class</span>
                    </div>
                </div>
            </div>

            <!-- 9-Seaters -->
            <div class="nch-fleet-row">
                <div class="nch-fleet-row__media">
                    <img src="{{asset("assets/images/section-bg.jpg")}}" alt="9-seater group vehicle">
                    <span class="nch-fleet-row__count">Group travel</span>
                </div>
                <div class="nch-fleet-row__content">
                    {{-- <span class="nch-eyebrow"><i class="fa fa-users"></i> Fleet 03 &mdash; Group &amp; access</span> --}}
                    <h3>9-Seaters</h3>
                    <p class="nch-fleet-row__desc">Spacious people-carriers for larger groups, families and accessible
                        transport &mdash; plenty of room for passengers and luggage in comfort.</p>
                    <ul class="nch-checks">
                        <li><i class="fa fa-check"></i> Seats up to nine passengers</li>
                        <li><i class="fa fa-check"></i> Wheelchair-accessible options available</li>
                        <li><i class="fa fa-check"></i> Perfect for group &amp; event travel</li>
                    </ul>
                    <div class="nch-tags">
                        <span>Mercedes Vito</span>
                    </div>
                </div>
            </div>

            <!-- More from our fleet -->
            <div class="nch-fleet-more">
                <p class="nch-fleet-more__label">More from our fleet</p>
                <div class="nch-fleet-gallery">
                    <figure class="nch-fleet-gallery__item">
                        <img src="{{asset("assets/images/cars/lexus-es-300h.jpg")}}" alt="Lexus ES 300h replacement vehicle">
                        <figcaption>Lexus ES 300h</figcaption>
                    </figure>
                    <figure class="nch-fleet-gallery__item">
                        <img src="{{asset("assets/images/cars/mercedes-e-class.jpg")}}" alt="Mercedes E-Class replacement vehicle">
                        <figcaption>Mercedes E-Class</figcaption>
                    </figure>
                    <figure class="nch-fleet-gallery__item">
                        <img src="{{asset("assets/images/cars/cupra-formentor.jpg")}}" alt="Cupra Formentor replacement vehicle">
                        <figcaption>Cupra Formentor</figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA band -->
    {{-- <section class="nch-section--tight bg-cream">
        <div class="container">
            <div class="nch-ctaband">
                <div class="nch-ctaband__inner">
                    <h2>Not sure what you're entitled to?</h2>
                    <p>Call our team today and we'll talk you through exactly where you stand &mdash; no jargon, no pressure.</p>
                    <div class="nch-ctaband__actions">
                        <a class="btn btn-light" href="{{route("contact")}}">Contact us <i class="fa fa-long-arrow-right"></i></a>
                        <a class="nch-ctaband__phone" href="tel:08000000000"><i class="fa fa-phone"></i> 0800 000 0000</a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
@endsection
