@extends('Front.Layouts.app')

@section('meta')
    <meta name="description" content="{!! $singleProduct->description !!}">
    <meta name="author" content="{{ $singleProduct->name }}">
    <meta property="og:title" content="{{ $singleProduct->name }}" />
    <meta property="og:url" content="{{ url('/') }}/{{ app()->getLocale() }}/projects/{{ $singleProduct->slug }}" />
    <meta property="og:image" content="{{ url('/') }}/storage/{{ $singleProduct->image }}" />

    <meta name="twitter:title" content="{{ $singleProduct->name }}">
    <meta name="twitter:description" content="{!! $singleProduct->description !!}">
    <meta name="twitter:image" content="{{ url('/') }}/{{ app()->getLocale() }}/projects/{{ $singleProduct->slug }}">
    <meta name="twitter:card" content="{{ url('/') }}/storage/{{ $singleProduct->image }}">
@endsection

@section('pageTitle') {{ $singleProduct->name }} @endsection

@section('content')
    <section class="project-details padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <div class="project-details-content">
                        <h2 class="mt-30">{{ $singleProduct->name }}</h2>
                        <p>
                            {!! $singleProduct->body !!}
                        </p>
                        <ul class="project-social">
                            <li>{{__("Share")}}:</li>
                            <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                            <li><a href="#"><i class="lab la-twitter"></i></a></li>
                            <li><a href="#"><i class="lab la-linkedin"></i></a></li>
                            <li><a href="#"><i class="lab la-youtube"></i></a></li>
                            <li><a href="#"><i class="lab la-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
