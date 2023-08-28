@extends('Front.Layouts.app')

@section('meta')
    <meta name="description" content="{{__("Our Team")}}">
    <meta name="author" content="{{__("Our Team")}}">
@endsection

@section('pageTitle')
    {{__("Our Team")}}
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
                <h4>{{__("Our team")}}</h4>
                <h2>Our Team Create Great Things <span class="wow border-animation" data-wow-delay="300ms">Together!</span></h2>
                <p>
                    {{__("Our versatile team is built of designers, developers and digital marketers who all bring unique
                    experience.")}}
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

    <section class="team-section bg-grey padding">
        <div class="container">
            <div class="row">
                @forelse($team as $item)
                    <div class="col-lg-3 col-sm-6 padding-15">
                        <div class="team-item">
                            <div class="team-thumb">
                                <img src="{{ url('/') }}/assets/img/team-shape.png" alt="img">
                                <img src="{{ url('/') }}/storage/{{ $item->image }}" alt="img">
                            </div>
                            <div class="team-content">
                                <h3>
                                    <a href="{{ route("teamSingle", ['slug' => $item->slug]) }}">{{ $item->name }}</a>
                                </h3>
                                <h4>
                                    {{ $item->description }}
                                </h4>
                            </div>
                        </div>
                    </div>
                @empty
                    No data !
                @endforelse
            </div>
        </div>
    </section>
@endsection
