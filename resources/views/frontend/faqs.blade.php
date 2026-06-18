@extends("layouts.app")

@section("content")
    <!-- Start Page Banner -->
    <div class="single-page">
        <div class="container">
            <h1>Frequently Asked Questions</h1>
            <nav aria-label="breadcrumb single-page">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route("home")}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">FAQ</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- End Page Banner -->

    <!-- FAQ Section -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 text-center">
                    <p class="nch-lead">Got questions about credit hire, accident claims, or what you're entitled to? We've
                        answered the most common ones below. If you can't find what you're looking for, give us a call
                        &mdash; we're available 24/7.</p>
                </div>
            </div>

            <div class="nch-faq" style="margin-top: 40px;">
                <details open>
                    <summary>What is credit hire?</summary>
                    <div class="faq-body">Credit hire provides you with a replacement vehicle after a non-fault accident at
                        no upfront cost to you. The hire costs are recovered directly from the at-fault party's insurer, so
                        you stay mobile without paying a penny.</div>
                </details>
                <details>
                    <summary>Am I entitled to a replacement vehicle?</summary>
                    <div class="faq-body">If the accident wasn't your fault, yes. You have a legal right to a like-for-like
                        replacement vehicle while yours is being repaired or assessed. Many drivers don't realise this
                        &mdash; insurers often don't volunteer the information.</div>
                </details>
                <details>
                    <summary>Do I have to go through my own insurer?</summary>
                    <div class="faq-body">No. You can come directly to us without involving your own insurance. That means
                        no impact on your no-claims bonus and no excess to pay.</div>
                </details>
                <details>
                    <summary>How quickly can I get a replacement vehicle?</summary>
                    <div class="faq-body">Same-day vehicles are available in most cases. Contact us as soon as possible
                        after your accident and we'll get things moving straight away.</div>
                </details>
                <details>
                    <summary>What happens to my damaged vehicle?</summary>
                    <div class="faq-body">We arrange 24/7 recovery and transport your vehicle to a secure, insured storage
                        facility. From there we'll arrange a full assessment and approved repairs where applicable.</div>
                </details>
                <details>
                    <summary>Will genuine parts be used?</summary>
                    <div class="faq-body">Yes. We only work with vetted, quality-approved garages using
                        manufacturer-approved parts. Your vehicle will be returned to pre-accident condition with no
                        shortcuts.</div>
                </details>
                <details>
                    <summary>What if my vehicle is written off?</summary>
                    <div class="faq-body">We'll support you through the settlement process to make sure you receive a fair
                        valuation &mdash; and not just whatever the insurer initially offers.</div>
                </details>
                <details>
                    <summary>I'm a taxi driver. Can you help me?</summary>
                    <div class="faq-body">Absolutely. We specialise in same-day plated taxi replacements because we know
                        every hour off the road costs you money. Whether you're a sole trader or running a fleet, we'll get
                        you back earning as quickly as possible.</div>
                </details>
                <details>
                    <summary>I drive a van for work. Am I covered?</summary>
                    <div class="faq-body">Yes. We provide like-for-like van and commercial vehicle replacements for
                        tradespeople, delivery drivers and business operators.</div>
                </details>
            </div>
        </div>
    </section>

    <!-- CTA Band -->
    <section class="nch-cta-band">
        <div class="container">
            <h2>Still have a question?</h2>
            <p>Call us now. No jargon, no pressure &mdash; just straight answers.</p>
            <div>
                <a href="tel:08000000000" class="nch-phone"><i class="fa fa-phone"></i> 0800 000 0000</a>
            </div>
            <a href="{{route("contact")}}" class="nch-btn-light">Contact Us</a>
        </div>
    </section>
@endsection