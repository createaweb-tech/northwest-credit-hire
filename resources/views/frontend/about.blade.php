@extends("layouts.app")

@section("content")

    <!-- Banner -->
    <div class="single-page">
        <div class="nch-banner__bg"></div>
        <div class="nch-banner__overlay"></div>
        <div class="container text-center">
            {{-- <span class="nch-eyebrow nch-eyebrow--ghost"><i class="fa fa-info-circle"></i> About us</span> --}}
            <h1>About Northwest Credit Hire</h1>
            {{-- <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route("home")}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About</li>
                </ol>
            </nav> --}}
        </div>
    </div>

    <!-- Who we are -->
    <section class="nch-section bg-cream">
        <div class="container">
            <div class="nch-split nch-split--media-r">
                <div class="nch-prose">
                    <span class="nch-eyebrow"><i class="fa fa-users"></i> Who we are</span>
                    <h2>Specialists you can actually reach</h2>
                    <p class="nch-lead" style="margin-bottom:18px;">Northwest Credit Hire is a leading provider of credit
                        hire and accident management services, trusted by non-fault accident victims and the insurance
                        industry alike.</p>
                    <p>Headquartered in Greater Manchester, we operate one of the North West's largest fleets of over 300
                        private hire and hackney carriage vehicles &mdash; ensuring rapid, reliable replacements when you
                        need them most.</p>
                    <p>From the moment of your accident, we take complete ownership of the process: vehicle recovery, secure
                        storage, like-for-like replacement hire, approved repairs, insurance liaison, and end-to-end claims
                        management. All under one roof, at no cost to you if the other party was at fault.</p>
                </div>
                <div class="nch-split__media">
                    <img src="{{asset("assets/images/photos/gallery-2.jpg")}}" alt="Premium replacement vehicle">
                </div>
            </div>
        </div>
    </section>

    <!-- Stats -->
    <section class="nch-section--tight bg-cream" style="padding-top:0;">
        <div class="container">
            <div class="nch-statcard">
                <div><div class="n">300<span>+</span></div><div class="l">Vehicles in our fleet</div></div>
                <div><div class="n">4<span>hrs</span></div><div class="l">Average delivery time</div></div>
                <div><div class="n">2</div><div class="l">Strategic UK sites</div></div>
                <div><div class="n">24/7</div><div class="l">365 days a year</div></div>
            </div>
        </div>
    </section>

    <!-- Story + Mission -->
    <section class="nch-section bg-white">
        <div class="container">
            <div class="nch-split">
                <div class="nch-prose">
                    <span class="nch-eyebrow"><i class="fa fa-bookmark-o"></i> Our story</span>
                    <h2>Built on speed and consistency</h2>
                    <p>Northwest Credit Hire was founded on a simple premise: drivers across the North West deserve a service
                        that actually shows up when it matters. Operating from two strategic sites across the UK, we've built
                        our reputation around speed and consistency. Our average vehicle delivery time is four hours from
                        first notification &mdash; a standard we set ourselves and work hard to maintain every day.</p>
                    <p>All of our vehicles are fully licensed with local authorities throughout the country, so wherever you
                        are, you're covered. We are not a call centre. There's no automated queue, no script, no passing you
                        between departments &mdash; just a local team who have grown almost entirely through trust and repeat
                        referrals.</p>
                </div>
                <div class="nch-prose">
                    <span class="nch-eyebrow"><i class="fa fa-flag-o"></i> Our mission</span>
                    <h2>No driver should face it alone</h2>
                    <p>We believe no driver should face the aftermath of an accident alone. From the moment of impact to the
                        moment you're back on the road, we handle every step of the claims process &mdash; so you don't have
                        to.</p>
                    <ul class="nch-checks">
                        <li><i class="fa fa-check"></i> Fast response &mdash; same-day vehicles available</li>
                        <li><i class="fa fa-check"></i> No upfront costs for non-fault claimants</li>
                        <li><i class="fa fa-check"></i> Fully managed &mdash; we deal with insurers so you don't have to</li>
                        <li><i class="fa fa-check"></i> Transparent, honest communication throughout</li>
                        <li><i class="fa fa-check"></i> Specialist support for taxi and private hire drivers</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Why choose us -->
    <section class="nch-section bg-cream">
        <div class="container">
            <div class="nch-sec-head">
                <div class="nch-sec-head-l">
                    <span class="nch-eyebrow"><i class="fa fa-balance-scale"></i> Why choose us</span>
                    <h2>Know your rights. Claim what you're owed.</h2>
                    <p>Many insurers offer a quick settlement that falls short of what you're genuinely owed &mdash; relying
                        on the fact that most people don't know any better. <strong style="color:var(--ink);">We do.</strong></p>
                </div>
            </div>
            <div class="nch-feature-grid" style="grid-template-columns:repeat(3,1fr);">
                <div class="nch-feature">
                    <span class="nch-feature__ic"><i class="fa fa-balance-scale"></i></span>
                    <h3>We level the playing field</h3>
                    <p>Insurers have teams working to minimise payouts. We identify every entitlement you're legally due
                        &mdash; replacement vehicle, personal injury, repairs or loss of earnings &mdash; and pursue your
                        claim with diligence. No shortcuts. No underselling.</p>
                </div>
                <div class="nch-feature">
                    <span class="nch-feature__ic"><i class="fa fa-map-marker"></i></span>
                    <h3>Local knowledge, real experience</h3>
                    <p>We're not a faceless national call centre. We're a Greater Manchester-based team with deep roots in
                        the local area and years of experience handling accident management and credit hire claims.</p>
                </div>
                <div class="nch-feature">
                    <span class="nch-feature__ic"><i class="fa fa-heart-o"></i></span>
                    <h3>Always on your side</h3>
                    <p>From your first call to final resolution, our focus is entirely on you. We communicate clearly, act
                        promptly, and get you the outcome you deserve with as little disruption as possible.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA band -->
    <section class="nch-section--tight bg-cream" style="padding-top:0;">
        <div class="container">
            <div class="nch-ctaband">
                <div class="nch-ctaband__inner">
                    <h2>Had a non-fault accident?</h2>
                    <p>Speak to our team today and find out exactly what you're entitled to.</p>
                    <div class="nch-ctaband__actions">
                        <a class="btn btn-light" href="{{route("contact")}}">Contact us <i class="fa fa-long-arrow-right"></i></a>
                        <a class="nch-ctaband__phone" href="tel:08000000000"><i class="fa fa-phone"></i> 0800 000 0000</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
