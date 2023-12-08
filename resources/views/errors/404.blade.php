@extends('Front.Layouts.app')

@section('pageTitle')
    404 Not Found !
@endsection

@section('content')
    <section class="page-header error bd-bottom">
        <div class="lines">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
        <div class="container">
            <div class="page-header-info text-center">
                <img src="{{ url('/') }}/assets/img/crying-emoji.svg" alt="img">
                <h2>404 Page Not Found!</h2>
                <p>The page you are looking for was moved, removed, <br> renamed or might never existed.</p>
                <a href="{{ route("index", ['locale' => app()->getLocale()]) }}" class="default-btn mt-20">{{__("Back To Home")}}</a>
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
@endsection
