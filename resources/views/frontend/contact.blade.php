@extends("layouts.app")

@section("content")

    <!-- Banner -->
    <div class="single-page">
        <div class="nch-banner__bg"></div>
        <div class="nch-banner__overlay"></div>
        <div class="container text-center">
            {{-- <span class="nch-eyebrow nch-eyebrow--ghost"><i class="fa fa-paper-plane-o"></i> Get in touch</span> --}}
            <h1>Contact Us</h1>
            {{-- <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route(" home")}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                </ol>
            </nav> --}}
        </div>
    </div>

    <!-- Contact -->
    <section id="contact" class="contact-area nch-section">
        <div class="container">
            <div class="nch-sec-head">
                <div class="nch-sec-head-l">
                    {{-- <span class="nch-eyebrow"><i class="fa fa-comments-o"></i> Start your claim</span> --}}
                    <h2>Talk to a real person, right now</h2>
                    <p>We're available 24 hours a day, 7 days a week, 365 days a year. Send a message or call
                        whatever's easiest. No automated queue, no script.</p>
                </div>
            </div>
            <div class="row align-items-stretch">
                <div class="col-lg-8 col-md-12 mb-4">
                    <div class="form-container-box">
                        <form class="contact-form form" id="ajax-contact" method="post"
                            action="assets/phpscripts/contact.php">
                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="name" name="name"
                                                placeholder="Name*" required="required" data-error="name is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="email" name="email"
                                                placeholder="Email*" required="required"
                                                data-error="valid email is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="tel" class="form-control" id="phone" name="phone"
                                                placeholder="Phone Number*" required="required">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="subject"
                                                placeholder="Subject (e.g. non-fault accident)" required="required">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea class="form-control" id="message" name="message" rows="6"
                                                placeholder="Tell us briefly what happened*" required="required"
                                                data-error="Please, leave us a message."></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-red" data-text="Send Message">Send message <i
                                                class="fa fa-long-arrow-right"></i></button>
                                    </div>
                                    <div class="messages">
                                        <div class="alert alert alert-success alert-dismissable alert-dismissable hidden"
                                            id="msgSubmit"><button type="button" class="close" data-dismiss="alert"
                                                aria-hidden="true">&times;</button> Thank You! Your message has been sent.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="contact-widget">
                        {{-- <img class="contact-widget__img"
                            src="{{asset("assets/images/cars/mercedes-e-class.jpg")}}"
                            alt="Northwest Credit Hire replacement vehicle"> --}}
                        <h3 class="contact-widget__title">Northwest Credit Hire Ltd</h3>
                        <p class="contact-widget__sub">Credit hire &amp; accident management specialists</p>
                        <div class="contact-info">
                            <span class="ci-ic"><i class="fa fa-phone"></i></span>
                            <div>
                                <h6>Phone 24/7</h6>
                                <p><a href="tel:07824973768">07824 973768</a></p>
                            </div>
                        </div>
                        <div class="contact-info">
                            <span class="ci-ic"><i class="fa fa-envelope-o"></i></span>
                            <div>
                                <h6>Email</h6>
                                <p><a href="mailto:info@northwestcredithire.co.uk">info@northwestcredithire.co.uk</a></p>
                            </div>
                        </div>
                        <div class="contact-info">
                            <span class="ci-ic"><i class="fa fa-map-marker"></i></span>
                            <div>
                                <h6>Address</h6>
                                <p>Unit A2, Highfield Industrial Estate, W End St, Oldham OL9 6AJ, United Kingdom</p>
                            </div>
                        </div>
                        <div class="contact-info">
                            <span class="ci-ic"><i class="fa fa-clock-o"></i></span>
                            <div>
                                <h6>Opening Hours</h6>
                                <p>Open 24/7, 365 days a year</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map -->
    <div id="map">

        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2170.178780831207!2d-2.125107123705445!3d53.5428514600028!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487bb7912052326b%3A0x4e6982b72fbc2c5f!2sNorthwest%20Credit%20Hire%20Ltd!5e1!3m2!1sen!2s!4v1782120599298!5m2!1sen!2s"
            style="border:0; width: 100%; height: 440px;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

@endsection