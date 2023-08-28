@extends('Front.Layouts.app')

@section('meta')
    <meta name="description" content="{{ $member->name }}>
    <meta name="author" content="{{ $member->name }}>
@endsection

@section('pageTitle')
    {{ $member->name }}
@endsection

@section('content')
    <section class="page-header bd-bottom">
        <div class="lines">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
        <div class="container">
            <div class="page-header-info text-left">
                <h4>{{__("Team Details")}}</h4>
                <h2><span class="wow border-animation" data-wow-delay="300ms">{{ $member->name }}</span></h2>
                <p>
                    {{ $member->description }}
                </p>
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

    <section class="team-details padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 sm-padding">
                    <div class="team-details-thumb">
                        <img src="{{ url('/') }}/storage/{{ $member->image }}" alt="img">
                    </div>
                </div>
                <div class="col-lg-6 sm-padding">
                    <div class="team-details-wrap">
                        <div class="section-heading mb-20">
                            <p>
                                {!! $member->body !!}
                            </p>
                        </div>
                        <ul class="social-share">
                            <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                            <li><a href="#"><i class="lab la-twitter"></i></a></li>
                            <li><a href="#"><i class="lab la-youtube"></i></a></li>
                            <li><a href="#"><i class="lab la-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
