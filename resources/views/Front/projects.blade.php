@extends('Front.Layouts.app')

@section('meta')
    <meta name="description" content="{{__("Our Projects")}}">
    <meta name="author" content="{{__("Our Projects")}}">
    <meta property="og:image" content="{{ url('/') }}/storage/{{ siteInfo()->image }}" />
@endsection

@section('pageTitle') {{__("Our Projects")}} @endsection

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
                <h4>{{__("Our Projects")}}</h4>
                <h2>Explore Our  <span class="wow border-animation" data-wow-delay="300ms">Projects</span>...</h2>
                <p>
                    {{__("Welcome to our portfolio page, where creativity and innovation converge. Explore our curated collection of design excellence and craftsmanship.")}}
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
            <div class="card">
                <div class="card-body">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        @forelse(\App\Models\ProjectCategory::all() as $item)
                            <a href="{{ route("singleProjectCat", [ "slug" => $item->slug ]) }}">
                                <button type="button" class="btn btn-secondary">{{ $item->name }}</button>
                            </a>
                        @empty
                            No Data
                        @endforelse
                    </div>
                </div>
            </div>
            <br/>
            <br/>
            <div class="row">
                @forelse($projects as $project)
                    <div class="col-lg-4 col-sm-6 padding-15">
                        <div class="project-item">
                            <div class="project-thumb">
                                <a href="{{ route("singleProject", ['slug' => $project->slug]) }}">
                                    <img src="{{ url('/') }}/storage/{{ $project->image }}" alt="img"></a>
                            </div>
                            <div class="project-content">
                                <h4><a href="{{ route("singleProject", ['slug' => $project->slug]) }}">{{ $project->category->name }}</a></h4>
                                <h3><a href="{{ route("singleProject", ['slug' => $project->slug]) }}">{{ $project->name }}</a></h3>
                                <a href="{{ route("singleProject", ['slug' => $project->slug]) }}" class="read-more"><i class="las la-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                @empty
                    No data !
                @endforelse
            </div>
            {{ $projects->links() }}
        </div>
    </section>
@endsection
