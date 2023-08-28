@extends('Front.Layouts.app')

@section('meta')
    <meta name="description" content="{{__("Our Services")}}">
    <meta name="author" content="{{__("Our Services")}}">
@endsection

@section('pageTitle') {{__("Our Services")}} @endsection

@section('content')

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
        </div>
    </section>
@endsection
