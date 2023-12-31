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
                <h2>{{__("Explore Our")}}  <span class="wow border-animation" data-wow-delay="300ms">{{__("Projects")}}</span>...</h2>
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
                    <ul class="nav justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route("projects", [ "locale" => app()->getLocale() ]) }}">
                                <button type="button" class="btn btn-warning">{{__("All Projects")}}</button>
                            </a>
                        </li>
                        @forelse(\App\Models\ProjectCategory::orderBy('sort', 'ASC')->get() as $item)
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route("singleProjectCat", [ "slug" => $item->slug ]) }}">
                                    <button type="button" class="btn btn-warning">{{ $item->name }}</button>
                                </a>
                            </li>
                        @empty
                            No Data
                        @endforelse
                    </ul>
                </div>
            </div>
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
