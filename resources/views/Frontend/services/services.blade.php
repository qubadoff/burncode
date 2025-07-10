@extends('Frontend.Layouts.app')

@section('title', "Our services")

@section('content')
    @forelse($services as $service)
        <!-- Our Services Section Start -->
        <div class="our-services page-service">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <!-- Service Item Start -->
                        <div class="service-item wow fadeInUp" data-wow-delay="0.25s">
                            <div class="service-content">
                                <div class="service-content-title">
                                    <h2>{{ $service->name }}</h2>
                                    <a href="{{ route("singleService", ["slug" => $service->slug]) }}"><img src="{{ asset('') }}assets2/images/arrow.svg" alt=""></a>
                                </div>
                                <p>
                                    {{ $service->description }}
                                </p>
                            </div>
                            <div class="service-image">
                                <figure class="image-anime">
                                    <img src="{{ url('') }}/storage/{{ $service->image }}" alt="">
                                </figure>
                            </div>
                        </div>
                        <!-- Service Item End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Services Section End -->
    @empty
        No Data !
    @endforelse
@endsection
