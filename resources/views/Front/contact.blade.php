@extends('Front.Layouts.app')
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
                            <h2>Fill Up The Form</h2>
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
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8826.923787362664!2d-118.27754354757262!3d34.03471770929568!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2sLos%20Angeles%2C%20California%2C%20Hoa%20K%E1%BB%B3!5e0!3m2!1svi!2s!4v1566525118697!5m2!1svi!2s"
            width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen></iframe>
    </div>
@endsection
