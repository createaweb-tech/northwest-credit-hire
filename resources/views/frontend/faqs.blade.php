@extends("layouts.app")

@section("content")
    <!-- Banner -->
    <div class="single-page">
        <div class="nch-banner__bg"></div>
        <div class="nch-banner__overlay"></div>
        <div class="container text-center">
            {{-- <span class="nch-eyebrow nch-eyebrow--ghost"><i class="fa fa-question-circle"></i> Answers</span> --}}
            <h1>Frequently Asked Questions</h1>
            {{-- <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route("home")}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">FAQ</li>
                </ol>
            </nav> --}}
        </div>
    </div>

    <!-- FAQ -->
    <section class="nch-section bg-cream">
        <div class="container">
            <div class="nch-faq-wrap">
                <div class="nch-prose nch-faq-intro">
                    {{-- <span class="nch-eyebrow"><i class="fa fa-lightbulb-o"></i> Good to know</span> --}}
                    <h2>Questions, answered</h2>
                    <p>Got questions about credit hire, accident claims, or what you're entitled to? We've answered the most
                        common ones here. Can't find what you're looking for? We're available 24/7.</p>
                    <a href="tel:08000000000" class="btn btn-red mt-24"><i class="fa fa-phone"></i> Call us 24/7</a>
                </div>
                <div class="nch-faq">
                        <details open>
                            <summary>What is credit hire?</summary>
                            <div class="faq-body">Credit hire provides you with a replacement vehicle after a non-fault
                                accident at no upfront cost to you. The hire costs are recovered directly from the at-fault
                                party's insurer, so you stay mobile without paying a penny.</div>
                        </details>
                        <details>
                            <summary>Am I entitled to a replacement vehicle?</summary>
                            <div class="faq-body">If the accident wasn't your fault, yes. You have a legal right to a
                                like-for-like replacement vehicle while yours is being repaired or assessed. Many drivers
                                don't realise this &mdash; insurers often don't volunteer the information.</div>
                        </details>
                        <details>
                            <summary>Do I have to go through my own insurer?</summary>
                            <div class="faq-body">No. You can come directly to us without involving your own insurance. That
                                means no impact on your no-claims bonus and no excess to pay.</div>
                        </details>
                        <details>
                            <summary>How quickly can I get a replacement vehicle?</summary>
                            <div class="faq-body">Same-day vehicles are available in most cases. Contact us as soon as
                                possible after your accident and we'll get things moving straight away.</div>
                        </details>
                        <details>
                            <summary>What happens to my damaged vehicle?</summary>
                            <div class="faq-body">We arrange 24/7 recovery and transport your vehicle to a secure, insured
                                storage facility. From there we'll arrange a full assessment and approved repairs where
                                applicable.</div>
                        </details>
                        <details>
                            <summary>Will genuine parts be used?</summary>
                            <div class="faq-body">Yes. We only work with vetted, quality-approved garages using
                                manufacturer-approved parts. Your vehicle will be returned to pre-accident condition with no
                                shortcuts.</div>
                        </details>
                        <details>
                            <summary>What if my vehicle is written off?</summary>
                            <div class="faq-body">We'll support you through the settlement process to make sure you receive a
                                fair valuation &mdash; and not just whatever the insurer initially offers.</div>
                        </details>
                        <details>
                            <summary>I'm a taxi driver. Can you help me?</summary>
                            <div class="faq-body">Absolutely. We specialise in same-day plated taxi replacements because we
                                know every hour off the road costs you money. Whether you're a sole trader or running a
                                fleet, we'll get you back earning as quickly as possible.</div>
                        </details>
                        <details>
                            <summary>I drive a van for work. Am I covered?</summary>
                            <div class="faq-body">Yes. We provide like-for-like van and commercial vehicle replacements for
                                tradespeople, delivery drivers and business operators.</div>
                        </details>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA band -->
    <section class="nch-section--tight bg-cream" style="padding-top:0;">
        <div class="container">
            <div class="nch-ctaband">
                <div class="nch-ctaband__inner">
                    <h2>Still have a question?</h2>
                    <p>Call us now. No jargon, no pressure &mdash; just straight answers.</p>
                    <div class="nch-ctaband__actions">
                        <a class="btn btn-light" href="{{route("contact")}}">Contact us <i class="fa fa-long-arrow-right"></i></a>
                        <a class="nch-ctaband__phone" href="tel:08000000000"><i class="fa fa-phone"></i> 0800 000 0000</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
