@extends('Frontend.layouts.app')

@section('title', "Our Projects")

@section('content')
    <!-- Projects Page Start -->
    <div class="our-projects">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <!-- Sidebar Our Projects Nav start -->
                    <div class="our-projects-nav wow fadeInUp" data-wow-delay="0.25s">
                        <ul>
                            <li><a href="#" class="active-btn" data-filter="*">all</a></li>
                            @forelse($projectCategories as $cat)
                                    <li><a href="#" data-filter=".{{ $cat->slug }}">{{ $cat->name }}</a></li>
                                @empty
                                    No Data !
                                @endforelse
                        </ul>
                    </div>
                    <!-- Sidebar Our Projects Nav End -->
                </div>

                <div class="col-lg-12">
                    <!-- Project Item Box start -->
                    <div class="row project-item-boxes">
                        @forelse($projects as $project)
                            <div class="col-md-6 project-item-box {{ $project->category->slug }}">
                                <!-- Works Item Start -->
                                <div class="works-item">
                                    <div class="works-image">
                                        <figure class="image-anime">
                                            <img src="{{ url("/") }}/storage/{{ $project->image }}" alt="{{ $project->name }}">
                                        </figure>
                                    </div>
                                    <div class="works-content">
                                        <h2><a href="{{ route("singleProject", ["slug" => $project->slug]) }}">{{ $project->name }}</a></h2>
                                        <p>
                                            {{ $project->description }}
                                        </p>
                                    </div>
                                </div>
                                <!-- Works Item End -->
                            </div>
                        @empty
                            No Data !
                        @endforelse
                    </div>
                    <!-- Project Item Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Projects Page End -->
@endsection
