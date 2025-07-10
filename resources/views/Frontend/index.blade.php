@extends('Frontend.layouts.app')

@section('title', siteInfo()->name)

@section('content')
    <!-- Hero Section Start -->
    <div class="hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="hero-layout-2">
                        <!-- Hero Content Start -->
                        <div class="hero-content">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h1 class="text-anime-style-3">Bring your business to the virtual world <br/> <span>with Burncode</span></h1>
                            </div>
                            <!-- Section Title End -->

                            <!-- Hero Body Start -->
                            <div class="hero-body">
                                <p class="wow fadeInUp" data-wow-delay="0.5s">
                                    Burncode company has been serving its customers for more than 5 years. During this period, we have implemented a number of small and large projects. We offer you quality work and a reasonable price.
                                </p>
                            </div>
                            <!-- Hero Body End -->

                            <!-- Hero Footer Start -->
                            <div class="hero-footer">
                                <a href="{{ route("contact") }}" class="btn-default wow fadeInUp" data-wow-delay="0.75s">free consultation</a>
                                <a href="{{ route("projects") }}" class="btn-default wow fadeInUp" data-wow-delay="0.75s">View Portfolio</a>
                            </div>
                            <!-- Hero Footer End -->
                        </div>
                        <!-- Hero Left Content End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Section End -->

    <!-- About Section Start -->
    <div class="about-us">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-8">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h2 class="text-anime-style-3">🚀 Why Choose Us for Software Development?</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- About Us Image Start -->
                    <div class="about-image">
                        <div class="about-img">
                            <figure class="image-anime reveal">
                                <img src="{{ asset('/') }}assets2/images/about-us-img.jpg" alt="">
                            </figure>
                        </div>
                        <div class="about-consultation">
                            <figure>
                                <img src="{{ asset('/') }}assets2/images/about-circle.png" alt="">
                            </figure>
                        </div>
                    </div>
                    <!-- About Us Image End -->
                </div>

                <div class="col-lg-6">
                    <!-- About Us Content Start -->
                    <div class="about-content">
                        <p class="wow fadeInUp" data-wow-delay="0.25s">
                            At Burncode, we turn ideas into scalable, secure, and user-centric digital products. Whether you're a startup building your MVP or an enterprise modernizing legacy systems, we bring the technology, talent, and vision to make it happen.
                        </p>

                        <ul class="wow fadeInUp" data-wow-delay="1s">
                            <li>Ease of Scalability</li>
                            <li>Instant Impact</li>
                            <li>Expertise and Experience</li>
                            <li>Time Zone Aligned</li>
                            <li>Full Flexibility</li>
                            <li>Proactive Support</li>
                        </ul>

                        <a href="{{ route("contact") }}" class="btn-default wow fadeInUp" data-wow-delay="1.25s">free consultation</a>
                    </div>
                    <!-- About Us Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- About Section End -->

    <!-- Our Services Section Start -->
    <div class="our-services">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-7 col-md-7">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">our services</h3>
                        <h2 class="text-anime-style-3">What we can offer today</h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-5 col-md-5">
                    <!-- Section Btn Start -->
                    <div class="section-btn">
                        <a href="{{ route("services") }}" class="btn-default wow fadeInUp" data-wow-delay="0.25s">view all services</a>
                    </div>
                    <!-- Section Btn End -->
                </div>
            </div>

            <div class="row">
                @forelse($services as $service)
                    <div class="col-lg-4 col-md-6">
                        <!-- Service Item Start -->
                        <div class="service-item wow fadeInUp" data-wow-delay="0.25s">
                            <div class="service-content">
                                <div class="service-content-title">
                                    <h2>{{ $service->name }}</h2>
                                    <a href="{{ route("singleService", ['slug' => $service->slug]) }}"><img src="{{ asset('') }}assets2/images/arrow.svg" alt=""></a>
                                </div>
                                <p>{{ $service->description }}</p>
                            </div>
                        </div>
                        <!-- Service Item End -->
                    </div>
                @empty
                    No Data !
                @endforelse
            </div>
        </div>
    </div>
    <!-- Our Services Section End -->

    <!-- Our Work Section Start -->
    <div class="our-work">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-8 col-md-9">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">our projects</h3>
                        <h2 class="text-anime-style-3">Excellence from concept to completion</h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-4 col-md-3">
                    <!-- Section Btn Start -->
                    <div class="section-btn wow fadeInUp" data-wow-delay="0.25s">
                        <a href="{{ route("projects") }}" class="btn-default">all projects</a>
                    </div>
                    <!-- Section Btn End -->
                </div>
            </div>

            <div class="row">
                @forelse($projects as $project)
                    <div class="col-md-6">
                        <!-- Works Item Start -->
                        <div class="works-item wow fadeInUp" data-wow-delay="0.25s"">
                            <div class="works-image">
                                <figure class="image-anime">
                                    <img src="{{ url('/') }}/storage/{{ $project->image }}" alt="">
                                </figure>
                            </div>
                            <div class="works-content">
                                <h2>
                                    <a href="{{ route("singleProject", ['slug' => $project->slug]) }}">{{ $project->name }}</a>
                                </h2>
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
        </div>
    </div>
    <!-- Our Work Section End -->

    <!-- Why Choose Us Section Start -->
    <div class="why-choose-us">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-8 col-md-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h2 class="text-anime-style-3">Why choose us ?</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- Why Choose Item Start -->
                    <div class="why-choose-us-item wow fadeInUp" data-wow-delay="0.25s">
                        <div class="icon-box">
                            <img src="{{ asset('/') }}assets2/images/icon-whyus-1.svg" alt="">
                        </div>
                        <h3>innovation</h3>
                        <p>
                            We embrace emerging technologies and forward-thinking approaches to deliver creative, future-ready software solutions that solve real-world problems.
                        </p>
                    </div>
                    <!-- Why Choose Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Why Choose Item Start -->
                    <div class="why-choose-us-item wow fadeInUp" data-wow-delay="0.5s">
                        <div class="icon-box">
                            <img src="{{ asset('/') }}assets2/images/icon-whyus-2.svg" alt="">
                        </div>
                        <h3>quality-focused</h3>
                        <p>
                            From clean code to intuitive user experiences, we prioritize excellence at every stage — ensuring your product is stable, scalable, and built to last.
                        </p>
                    </div>
                    <!-- Why Choose Item End -->
                </div>

                <div class="col-lg-4">
                    <!-- Why Choose Item Start -->
                    <div class="why-choose-us-item wow fadeInUp" data-wow-delay="0.75s">
                        <div class="icon-box">
                            <img src="{{ asset('/') }}assets2/images/icon-whyus-3.svg" alt="">
                        </div>
                        <h3>value for money</h3>
                        <p>We offer transparent pricing and flexible engagement models, delivering top-tier development services without unnecessary overhead or complexity.</p>
                    </div>
                    <!-- Why Choose Item End -->
                </div>

                <div class="col-md-12">
                    <!-- Why Us Explore Item Start -->
                    <div class="why-us-explore-item">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="why-us-section-title">
                                    <!-- Section Title Start -->
                                    <div class="section-title">
                                        <h2 class="text-anime-style-3">Do you want to explore our outstanding work?</h2>
                                    </div>
                                    <!-- Section Title End -->

                                    <!-- Explore Item Icon Start -->
                                    <div class="explore-item-icon">
                                        <img src="{{ asset('/') }}assets2/images/icon-whyus-4.svg" alt="">
                                    </div>
                                    <!-- Explore Item Icon End -->
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <!-- Explore Item Content Start -->
                                <div class="explore-item-content wow fadeInUp" data-wow-delay="0.25s">
                                    <p>
                                        Discover how we've helped startups and enterprises turn ideas into impactful digital products. From intuitive mobile apps to scalable cloud platforms — our portfolio reflects innovation, precision, and a deep commitment to quality.
                                    </p>
                                </div>
                                <!-- Explore Item Content End -->
                            </div>

                            <div class="col-lg-6">
                                <!-- Explore Item Content Start -->
                                <div class="explore-item-tags wow fadeInUp" data-wow-delay="0.25s">
                                    <ul>
                                        <li><a href="{{ siteInfo()->facebook_page }}" target="_blank" class="btn-default">Facebook</a></li>
                                        <li><a href="{{ siteInfo()->instagram_page }}" target="_blank" class="btn-default">Instagram</a></li>
                                        <li><a href="{{ siteInfo()->linkedin_page }}" target="_blank" class="btn-default">Linkedin</a></li>
                                    </ul>
                                </div>
                                <!-- Explore Item Content End -->
                            </div>
                        </div>
                    </div>
                    <!-- Why Us Explore Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Why Choose Us Section End -->

    <!-- Latest News Section Start -->
    <div class="latest-news">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-6 col-md-8">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Latest Blog & Articles</h3>
                        <h2 class="text-anime-style-3">The latest insights you need to know</h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-6 col-md-4">
                    <!-- Section Btn Start -->
                    <div class="section-btn wow fadeInUp" data-wow-delay="0.25s">
                        <a href="{{ route("news", ['locale' => app()->getLocale()]) }}" class="btn-default">view all articles</a>
                    </div>
                    <!-- Section Btn End -->
                </div>
            </div>

            <div class="row">
                @forelse($news as $new)
                    <div class="col-lg-4 col-md-6">
                        <!-- Blog Item Start -->
                        <div class="blog-item wow fadeInUp" data-wow-delay="0.25s">
                            <!-- Blog Image Start -->
                            <div class="post-featured-image">
                                <figure class="image-anime">
                                    <a href="{{ route("singleNews", ['slug' => $new->slug]) }}"><img src="{{ url('/') }}/storage/{{ $new->image }}" alt=""></a>
                                </figure>
                            </div>
                            <!-- Blog Image End -->

                            <!-- Blog Content Start -->
                            <div class="post-item-body">
                                <p><a href="{{ route("singleNews", ['slug' => $new->slug]) }}">{{ \Carbon\Carbon::parse($new->created_at)->format('M d, Y') }}</a></p>
                                <h2><a href="{{ route("singleNews", ['slug' => $new->slug]) }}">{{ $new->title }}</a></h2>
                            </div>
                            <!-- Blog Content End -->
                        </div>
                        <!-- Blog Item End -->
                    </div>
                @empty
                    No Data !
                @endforelse
            </div>
        </div>
    </div>
    <!-- Latest News Section End -->
@endsection
