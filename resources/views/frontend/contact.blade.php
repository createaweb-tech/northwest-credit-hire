@extends("layouts.app")

@section("content")

    <!-- Start Page Banner -->
    <div class="single-page">
        <div class="container">
            <h1>Contact Us</h1>
            <nav aria-label="breadcrumb single-page">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route("home")}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- End Page Banner -->

    <!-- Contact Section Start -->
    <section id="contact" class="bg-grey contact-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="section-title">
                        <h2>Get In Touch</h2>
                        <h5>We're available 24 hours a day, 7 days a week, 365 days a year</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-12 wow fadeInUp" data-wow-delay="0.2s">
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
                                            <textarea class="form-control" id="message" name="message" rows="8"
                                                placeholder="Tell us briefly what happened*" required="required"
                                                data-error="Please, leave us a message."></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="button" data-text="Send Message">Send Message</button>
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
                <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                    <div class="contact-widget">
                        <div class="contact-info">
                            <h6>Phone (24/7):</h6>
                            <p><i class="fa fa-phone"></i> <a href="tel:08000000000">0800 000 0000</a></p>
                        </div>
                        <div class="contact-info">
                            <h6>Email:</h6>
                            <p><i class="fa fa-envelope"></i> <a
                                    href="mailto:info@northwestcredithire.co.uk">info@northwestcredithire.co.uk</a></p>
                        </div>
                        <div class="contact-info">
                            <h6>Address:</h6>
                            <p><i class="fa fa-map"></i> Greater Manchester, United Kingdom</p>
                            <p><a href="https://www.google.com/maps/search/Greater+Manchester" target="_blank">Get
                                    Directions</a></p>
                        </div>
                        <div class="contact-info">
                            <h6>Hours:</h6>
                            <p><i class="fa fa-clock-o"></i> Open 24/7, 365 days a year</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Map Section Start -->
    <div id="map">
        <iframe src="https://www.google.com/maps?q=Greater+Manchester,+UK&amp;output=embed" frameborder="0"
            style="border:0; width: 100%; height: 390px; margin-bottom: -10px;" allowfullscreen loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- Map Section End -->

@endsection