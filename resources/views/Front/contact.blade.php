@extends('Front.Layouts.app')

@section('meta')
    <meta name="description" content="{{__("Contact us")}}">
    <meta name="author" content="{{__("Contact us")}}">
    <meta property="og:image" content="{{ url('/') }}/storage/{{ siteInfo()->image }}" />
@endsection


@section('pageTitle') {{__("Contact us")}} @endsection

@section('content')
    <section class="contact-section bg-grey padding">
        <div class="globe"><img src="{{ url('/') }}/assets/img/globe-dark.svg" alt="globe"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 sm-padding">
                    <div class="contact-info">
                        <div class="contact-heading">
                            <h2>{{__("Get In Touch")}}</h2>
                            <p>
                                {{__("Getting in touch is an invitation to contact us, whether for questions, inquiries, or collaboration. We welcome your communication and look forward to connecting with you.")}}
                            </p>
                        </div>
                        <ul class="contact-details">
                            <li><i class="las la-map-marked-alt"></i>
                                {{ siteInfo()->location }}
                            </li>
                            <li><i class="las la-envelope-open"></i><a href="mailto:{{ siteInfo()->email }}">{{ siteInfo()->email }}</a>
                            </li>
                            <li><i class="las la-phone-volume"></i><a href="tel:{{ siteInfo()->phone }}">{{ siteInfo()->phone }}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 sm-padding">
                    <div class="contact-form-wrap">
                        <div class="contact-heading">
                            <h2>{{__("Fill Up The Form")}}</h2>
                        </div>
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
                            <form action="{{ route("contactSend") }}" method="post">
                                @csrf
                                @method("POST")
                                <div class="contact-form-group">
                                    <div class="form-field">
                                        <input type="text" id="firstname" name="name" class="form-control"
                                               placeholder="{{__("First Name")}}" required>
                                    </div>
                                    <div class="form-field">
                                        <input type="text" id="lastname" name="surname" class="form-control"
                                               placeholder="{{__("Last Name")}}" required>
                                    </div>
                                    <div class="form-field">
                                        <input type="email" id="email" name="email" class="form-control"
                                               placeholder="{{__("Email")}}" required>
                                    </div>
                                    <div class="form-field">
                                        <input type="text" id="phone" name="phone" class="form-control"
                                               placeholder="{{__("Phone Number")}}" required>
                                    </div>
                                    <div class="form-field message">
                                        <textarea id="message" name="body" cols="30" rows="4" class="form-control"
                                                  placeholder="{{__("Message")}}" required></textarea>
                                    </div>
                                    <div class="form-field submit-btn">
                                        <button id="submit" name="submit" class="default-btn" type="submit">{{__("Send message")}}</button>
                                    </div>
                                </div>
                                <div id="form-messages" class="alert" role="alert"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="animated-dots">
            <span class="dot lf-left-right"></span>
            <span class="dot lf-up-down"></span>
            <span class="dot lf-up-down"></span>
            <span class="dot lf-rotate-center"></span>
            <span class="dot lf-left-right"></span>
            <span class="dot lf-rotate-center"></span>
        </div>
    </section>

    <div class="map-wrapper">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3039.0610163889764!2d49.8261072774833!3d40.38534027144465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40307d9be60052ab%3A0xd7852fa710c6b11a!2sCaspian%20Plaza!5e0!3m2!1sen!2saz!4v1692884525012!5m2!1sen!2saz" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
@endsection
