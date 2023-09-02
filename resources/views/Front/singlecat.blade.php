@extends('Front.Layouts.app')

@section('meta')
    <meta name="description" content="{!! $cat->name !!}">
    <meta name="author" content="{{ $cat->name }}">
    <meta property="og:title" content="{{ $cat->name }}" />
    <meta property="og:url" content="{{ url('/') }}/{{ app()->getLocale() }}/{{ $cat->slug }}" />
    <meta property="og:image" content="{{ url('/') }}/storage/{{ $cat->image }}" />

    <meta name="twitter:title" content="{{ $cat->name }}">
    <meta name="twitter:description" content="{{ $cat->name }}">
    <meta name="twitter:image" content="{{ url('/') }}/{{ app()->getLocale() }}/{{ $cat->slug }}">
    <meta name="twitter:card" content="{{ url('/') }}/storage/{{ $cat->image }}">
@endsection

@section('pageTitle')
    {{ $cat->name }}
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
            <div class="page-header-info text-center">
                <h2>{{ $cat->name }}</h2>
                <p>
                    {{ $cat->description }}
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

    <section class="blog-section blog-page bg-grey padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 sm-padding">
                    <div class="row grid-post">
                        @forelse($posts as $new)
                            <div class="col-md-6 padding-15">
                                <div class="post-card">
                                    <div class="post-thumb">
                                        <img src="{{ url('/') }}/storage/{{ $new->image }}" alt="post">
                                        <a href="{{ route("singlecat", ['slug' => $new->category->slug]) }}" class="post-category">{{ $new->category->name }}</a>
                                    </div>
                                    <div class="post-content-wrap">
                                        <ul class="post-meta">
                                            <li><i class="las la-calendar"></i>{{ $new->created_at->format('Y-m-d') }}</li>
                                            <li><i class="las la-user"></i>{{ $new->users->name }}</li>
                                        </ul>
                                        <div class="post-content">
                                            <h3>
                                                <a href="{{ route("singleNews", ['slug' => $new->slug]) }}" class="hover">
                                                    {{ $new->title }}
                                                </a>
                                            </h3>
                                            <p>
                                                {!! $new->description !!}
                                            </p>
                                            <a href="{{ route("singleNews", ['slug' => $new->slug]) }}" class="read-more">{{__("Read More")}}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            No Data !
                        @endforelse
                    </div>
                    {{ $posts->links() }}
                </div>

                <div class="col-lg-4 sm-padding">
                    <div class="sidebar-widget">
                        <div class="widget-title">
                            <h3>Categories</h3>
                        </div>
                        <ul class="category-list">
                            @forelse($categories as $cat)
                                <li>
                                    <a href="{{ route("singlecat", ['slug' => $cat->slug]) }}">
                                        {{ $cat->name }}
                                    </a>
                                    <span>{{ \App\Models\News::where('cat_id', $cat->id)->where('status', 'published')->count() }}</span>
                                </li>
                            @empty
                                No Data !
                            @endforelse
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
