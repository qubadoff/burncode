@extends('Front.Layouts.app')

@section('meta')
    <meta name="description" content="{!! $member->description !!}">
    <meta name="author" content="{{ $member->name }}">
    <meta property="og:title" content="{{ $member->name }}" />
    <meta property="og:url" content="{{ url('/') }}/{{ app()->getLocale() }}/team/{{ $member->slug }}" />
    <meta property="og:image" content="{{ url('/') }}/storage/{{ $member->image }}" />

    <meta name="twitter:title" content="{{ $member->name }}">
    <meta name="twitter:description" content="{!! $member->description !!}">
    <meta name="twitter:image" content="{{ url('/') }}/{{ app()->getLocale() }}/team/{{ $member->slug }}">
    <meta name="twitter:card" content="{{ url('/') }}/storage/{{ $member->image }}">
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
                            <li><a href="{{ $member->facebook_page }}" target="_blank"><i class="lab la-facebook-f"></i></a></li>
                            <li><a href="{{ $member->twitter_page }}" target="_blank"><i class="lab la-twitter"></i></a></li>
                            <li><a href="{{ $member->linkedin_page }}" target="_blank"><i class="lab la-linkedin"></i></a></li>
                            <li><a href="{{ $member->instagram_page }}" target="_blank"><i class="lab la-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
