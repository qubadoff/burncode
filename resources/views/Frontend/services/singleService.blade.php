@extends('Frontend.Layouts.app')

@section('title', $service->name)

@section('content')
    <!-- Single Service Page Start -->
    <div class="page-service-single">
        <div class="container">
            <div class="col-lg-16">
                <!-- Service Content Start -->
                <div class="service-single-content">
                    <!-- Service Featured Image Start -->
                    <div class="service-featured-image">
                        <figure class="image-anime reveal">
                            <img src="{{ url('/') }}/storage/{{ $service->image }}" alt="">
                        </figure>
                    </div>
                    <!-- Service Featured Image End -->

                    <!-- Service Entry Content Start -->
                    <div class="service-entry">
                        <p class="wow fadeInUp" data-wow-delay="0.25s">
                            {!! $service->body !!}
                        </p>
                    </div>
                    <!-- Service Entry Content End -->
                </div>
                <!-- Service Content End -->
            </div>
        </div>
    </div>
    <!-- Single Service Page End -->
@endsection
