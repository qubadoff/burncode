@extends('Front.Layouts.app')

@section('meta')
    <meta name="description" content="{!! $singleNews->description !!}">
    <meta name="author" content="{{ $singleNews->users->name }}">
    <meta property="og:title" content="{{ $singleNews->title }}" />
    <meta property="og:url" content="{{ url('/') }}/{{ app()->getLocale() }}/news/{{ $singleNews->slug }}" />
    <meta property="og:image" content="{{ url('/') }}/storage/{{ $singleNews->image }}" />

    <meta name="twitter:title" content="{{ $singleNews->title }}">
    <meta name="twitter:description" content="{!! $singleNews->description !!}">
    <meta name="twitter:image" content="{{ url('/') }}/{{ app()->getLocale() }}/news/{{ $singleNews->slug }}">
    <meta name="twitter:card" content="{{ url('/') }}/storage/{{ $singleNews->image }}">
@endsection

@section('pageTitle')
    {{ $singleNews->title }}
@endsection

@section('content')
    <section class="page-header post-details bd-bottom">
        <div class="lines">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
        <div class="container">
            <div class="page-header-info text-center">
                <h2>{{ $singleNews->title }}</h2>
                <p>
                    {!! $singleNews->description !!}
                </p>
                <ul class="post-meta">
                    <li><i class="las la-user"></i>{{ $singleNews->users->name }}</li>
                    <li><i class="las la-calendar"></i>{{ $singleNews->created_at->format('Y-m-d') }}</li>
                </ul>
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

    <section class="blog-section blog-page bg-grey padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="post-details">
                        <p>
                            {!! $singleNews->body !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
