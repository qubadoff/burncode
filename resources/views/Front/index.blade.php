@extends('Front.Layouts.app')

@section('meta')
    <meta name="description" content="{{ siteInfo()->description }}">
    <meta name="author" content="{{ siteInfo()->description }}">
    <meta property="og:image" content="{{ url('/') }}/storage/{{ siteInfo()->image }}" />
@endsection

@section('pageTitle')
    {{ siteInfo()->description }}
@endsection


@section('content')

    @include('Front.Layouts.inc.slider')

    <div class="sponsor-section padding"></div>

    <section class="feature-section padding-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 sm-padding">
                    <div class="feature-img">
                        <img src="{{ url('/') }}/assets/img/illustration03.png" alt="illustration">
                    </div>
                </div>
                <div class="col-lg-6 sm-padding">
                    <div class="section-heading mb-40 wow fade-in-bottom" data-wow-delay="200ms">
                        <h2>{{__("Strategies that get you on the Path to")}} <span class="wow border-animation" data-wow-delay="300ms">{{__("Success")}}!</span></h2>
                        <p>
                            {{__("Our success in creating business solutions is due in large part spacially to talented and highly committed team.")}}
                        </p>
                    </div>
                    <div class="feature-lists">
                        <div class="feature-item wow fade-in-bottom" data-wow-delay="300ms">
                            <img class="feature-icon" src="{{ url('/') }}/assets/img/icons/icon03.png" alt="icon">
                            <div class="feature-content">
                                <h3>{{__("User Interface")}}</h3>
                                <p>{{__("A well-designed UI enhances user experience by presenting information and functionality in an intuitive and user-friendly manner.")}}</p>
                            </div>
                        </div>
                        <div class="feature-item wow fade-in-bottom" data-wow-delay="400ms">
                            <img class="feature-icon" src="{{ url('/') }}/assets/img/icons/icon05.png" alt="icon">
                            <div class="feature-content">
                                <h3>{{__("Branding Strategy")}}</h3>
                                <p>{{__("An effective branding strategy helps businesses establish a strong, recognizable presence and build lasting connections with their target audience.")}}</p>
                            </div>
                        </div>
                        <div class="feature-item wow fade-in-bottom" data-wow-delay="500ms">
                            <img class="feature-icon" src="{{ url('/') }}/assets/img/icons/icon15.png" alt="icon">
                            <div class="feature-content">
                                <h3>{{__("Data Analytics")}}</h3>
                                <p>{{__("Data analytics is the process of examining and interpreting large volumes of data to uncover meaningful insights, patterns, and trends. It empowers organizations to make informed decisions, optimize operations, and gain a competitive edge by harnessing the power of data.")}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                            <p>{{ $service->description }}</p>
                            <a href="{{ route("singleService", ['slug' => $service->slug]) }}" class="read-more"><i class="las la-arrow-right"></i></a>
                        </div>
                    </div>
                @empty
                    No Data !
                @endforelse
            </div>
            <a href="{{ route("services", ['locale' => app()->getLocale()]) }}">
                <button type="button" class="btn btn-primary btn-lg">{{__("All services")}}</button>
            </a>
        </div>
    </section>

@endsection
