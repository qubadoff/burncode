@extends('Frontend.Layouts.app')

@section('title', $singleProject->name)

@section('content')
    <!-- Project Single Page Start -->
    <div class="page-project-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Project Feature Image Start -->
                    <div class="project-feature-image">
                        <figure class="image-anime reveal">
                            <img src="{{ url("") }}/storage/{{ $singleProject->image }}" alt="">
                        </figure>
                    </div>
                    <!-- Project Feature Image End -->
                </div>

                <div class="col-lg-4">
                    <!-- Project Sidebar Start -->
                    <div class="project-sidebar wow fadeInUp" data-wow-delay="0.25s">
                        <!-- About Project Box Start -->
                        <div class="about-project-box wow fadeInUp">
                            <!-- Project Info Box Start -->
                            <div class="project-info-box">
                                <div class="project-icon">
                                    <img src="{{ asset('') }}assets2/images/icon-date.svg" alt="">
                                </div>
                                <p>Date</p>
                                <h3>{{ \Carbon\Carbon::parse($singleProject->created_at)->format('M Y') }}</h3>
                            </div>
                            <!-- Project Info Box End -->

                            <!-- Project Info Box Start -->
                            <div class="project-info-box">
                                <div class="project-icon">
                                    <img src="{{ asset('') }}assets2/images/icon-client.svg" alt="">
                                </div>

                                <p>Client</p>
                                <h3>{{ $singleProject->client_info }}</h3>
                            </div>
                            <!-- Project Info Box End -->

                            <!-- Project Info Box Start -->
                            <div class="project-info-box">
                                <div class="project-icon">
                                    <img src="{{ asset('') }}assets2/images/icon-website.svg" alt="">
                                </div>

                                <p>Website</p>
                                <h3><a href="{{ $singleProject->project_link }}" target="_blank">{{ $singleProject->project_link }}</a> </h3>
                            </div>
                            <!-- Project Info Box End -->
                        </div>
                        <!-- About Project Box End -->
                    </div>
                    <!-- Project Sidebar End -->
                </div>

                <div class="col-lg-8">
                    <!-- Project Content Start -->
                    <div class="project-content">
                        <!-- Project Entry Start -->
                        <div class="project-entry">
                            <h2 class="wow fadeInUp" data-wow-delay="0.25s">{{ $singleProject->name }}</h2>

                            <p class="wow fadeInUp" data-wow-delay="0.5s">
                                {!! $singleProject->body !!}
                            </p>
                        </div>
                        <!-- Project Entry End -->
                    </div>
                    <!-- Project Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Project Single Page End -->

    <div class="project-details-gallery">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Project Gallery Start -->
                    <div class="project-gallery">
                        <div class="project-gallery-items wow fadeInUp" data-wow-delay="0.25s">
                            <!-- Project Gallery Item Start -->
                            <div class="project-gallery-item">
                                <a href="{{ asset('') }}assets2/images/post-1.jpg">
                                    <figure class="image-anime">
                                        <img src="{{ asset('') }}assets2/images/post-1.jpg" alt="">
                                    </figure>
                                </a>
                            </div>
                            <!-- Project Gallery Item End -->

                            <!-- Project Gallery Item Start -->
                            <div class="project-gallery-item wow fadeInUp" data-wow-delay="0.5s">
                                <a href="{{ asset('') }}assets2/images/post-2.jpg">
                                    <figure class="image-anime">
                                        <img src="{{ asset('') }}assets2/images/post-2.jpg" alt="">
                                    </figure>
                                </a>
                            </div>
                            <!-- Project Gallery Item End -->

                            <!-- Project Gallery Item Start -->
                            <div class="project-gallery-item wow fadeInUp" data-wow-delay="0.75s">
                                <a href="{{ asset('') }}assets2/images/post-3.jpg">
                                    <figure class="image-anime">
                                        <img src="{{ asset('') }}assets2/images/post-3.jpg" alt="">
                                    </figure>
                                </a>
                            </div>
                            <!-- Project Gallery Item End -->
                        </div>
                    </div>
                    <!-- Project Gallery End -->
                </div>
            </div>
        </div>
    </div>
@endsection
