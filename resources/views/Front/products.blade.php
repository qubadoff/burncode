@extends('Front.Layouts.app')

@section('meta')
    <meta name="description" content="{{__("Our Products")}}">
    <meta name="author" content="{{__("Our Products")}}">
    <meta property="og:image" content="{{ url('/') }}/storage/{{ siteInfo()->image }}" />
@endsection

@section('pageTitle') {{__("Our Products")}} @endsection

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
                <h4>{{__("Our Products")}}</h4>
                <h2>{{__("Explore Our")}}  <span class="wow border-animation" data-wow-delay="300ms">{{__("Products")}}</span>...</h2>
                <p>
                    {{__("Discover our range of IT products designed to revolutionize your digital experience")}}
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

    <section class="project-section padding">
        <div class="container">
            <div class="row">
                @forelse($products as $project)
                    <div class="col-lg-4 col-sm-6 padding-15">
                        <div class="project-item">
                            <div class="project-thumb">
                                <a href="{{ route("singleProduct", ['slug' => $project->slug]) }}">
                                    <img src="{{ url('/') }}/storage/{{ $project->image }}" alt="img"></a>
                            </div>
                            <div class="project-content">
                                <h3><a href="{{ route("singleProduct", ['slug' => $project->slug]) }}">{{ $project->name }}</a></h3>
                                <a href="{{ route("singleProduct", ['slug' => $project->slug]) }}" class="read-more"><i class="las la-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                @empty
                    No data !
                @endforelse
            </div>
            {{ $products->links() }}
        </div>
    </section>
@endsection
