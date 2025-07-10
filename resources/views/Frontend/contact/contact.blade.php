@extends('Frontend.Layouts.app')

@section('title', "Contact Us")

@section('content')
    <!-- Contact Information Section Start -->
    <div class="contact-information">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <!-- Contact Item Start -->
                    <div class="contact-item wow fadeInUp" data-wow-delay="0.25s">
                        <div class="contact-content">
                            <div class="contact-content-title">
                                <h2>Address</h2>
                                <a href="#"><img src="{{ asset("") }}assets2/images/icon-location.svg" alt=""></a>
                            </div>
                            <p>{{ siteInfo()->location }}</p>
                        </div>
                    </div>
                    <!-- Contact Item End -->
                </div>

                <div class="col-md-4">
                    <!-- Contact Item Start -->
                    <div class="contact-item wow fadeInUp" data-wow-delay="0.5s">
                        <div class="contact-content">
                            <div class="contact-content-title">
                                <h2>call now</h2>
                                <a href="#"><img src="{{ asset("") }}assets2/images/icon-phone.svg" alt=""></a>
                            </div>
                            <p><a href="tel:{{ siteInfo()->phone }}">{{ siteInfo()->phone }}</a> </p>
                        </div>
                    </div>
                    <!-- Contact Item End -->
                </div>

                <div class="col-md-4">
                    <!-- Contact Item Start -->
                    <div class="contact-item wow fadeInUp" data-wow-delay="0.75s">
                        <div class="contact-content">
                            <div class="contact-content-title">
                                <h2>email us</h2>
                                <a href="#"><img src="{{ asset("") }}assets2/images/icon-mail.svg" alt=""></a>
                            </div>
                            <p><a href="mailto:{{ siteInfo()->email }}">{{ siteInfo()->email }}</a></p>
                        </div>
                    </div>
                    <!-- Contact Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Information Section End -->

    <!-- Contact Us Section Start -->
    <div class="contact-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Contact Details Section Start -->
                    <div class="contact-details">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">contact us</h3>
                            <h2 class="text-anime-style-3">Get in touch with us today</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form-box wow fadeInUp" data-wow-delay="0.5s">
                        <!-- Contact Form Start -->
                        <div class="contact-form">
                            @if(Session::has('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                    @php
                                        \Illuminate\Support\Facades\Session::forget('success');
                                    @endphp
                                </div>
                            @endif
                            @if($errors->any())
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            @endif
                            <form id="contactForm" action="{{ route("contactSend") }}" method="POST" data-toggle="validator">
                                @csrf
                                @method("post")
                                <div class="row">
                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="name" class="form-control" id="fname" placeholder="first name" required >
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="surname" class="form-control" id="lname" placeholder="last name" required >
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone" required >
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <input type="email" name ="email" class="form-control" id="email" placeholder="email" required >
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-12 mb-4">
                                        <textarea name="body" class="form-control" id="msg" rows="7" placeholder="message" required></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="col-md-12">
                                        <button type="submit" name="submit" class="btn-default">send a message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Contact Form End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Us Section End -->

    <!-- Google Map Section Start -->
    <div class="google-map wow fadeInUp" data-wow-delay="0.25s">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3039.0610163889764!2d49.8261072774833!3d40.38534027144465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40307d9be60052ab%3A0xd7852fa710c6b11a!2sCaspian%20Plaza!5e0!3m2!1sen!2saz!4v1692884525012!5m2!1sen!2saz" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- Google Map Section End -->
@endsection
