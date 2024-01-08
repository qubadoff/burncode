@extends('Front.Layouts.app')

@section('meta')
    <meta name="description" content="{{__("Our Services")}}">
    <meta name="author" content="{{__("Our Services")}}">
    <meta property="og:image" content="{{ url('/') }}/storage/{{ siteInfo()->image }}" />
@endsection

@section('pageTitle') {{__("Our Services")}} @endsection

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
                <h4>{{__("Our Services")}}</h4>
                <h2>{{__("Explore Our")}}  <span class="wow border-animation" data-wow-delay="300ms">{{__("Services")}}</span>...</h2>
                <p>
                    {{__("Our versatile services cover all aspects of your project or business, from creative design to technical development and strategic consulting. We're passionate experts ready to deliver results.")}}
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

    <section class="promo-section padding">
        <div class="container">
            <div class="row promo-items">
                @forelse($services as $service)
                    <div class="col-lg-3 col-md-6 padding-15">
                        <div class="promo-item">
                            <div class="promo-icon"><img src="{{ url('/') }}/storage/{{ $service->service_icon }}" alt="icon"></div>
                            <h3>{{ $service->name }}</h3>
                            <p>{{ Illuminate\Support\Str::limit($service->description, 100) }}</p>
                            <a href="{{ route("singleService", ['slug' => $service->slug]) }}" class="read-more"><i class="las la-arrow-right"></i></a>
                        </div>
                    </div>
                @empty
                    No Data !
                @endforelse
            </div>
        </div>
    </section>
@endsection
