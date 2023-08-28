@extends('Front.Layouts.app')

@section('meta')
    <meta name="description" content="{{ $singleProject->name }}">
    <meta name="author" content="{{ $singleProject->name }}">
@endsection

@section('pageTitle') {{ $singleProject->name }} @endsection

@section('content')
    <section class="project-details padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="project-thumb">
                        <img src="{{ url('/') }}/storage/{{ $singleProject->image }}" alt="img">
                    </div>
                    <div class="project-details-content">
                        <h2 class="mt-30">{{ $singleProject->name }}</h2>
                        <p>
                            {!! $singleProject->body !!}
                        </p>
                        <ul class="project-social">
                            <li>{{__("Share This Project")}}:</li>
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
