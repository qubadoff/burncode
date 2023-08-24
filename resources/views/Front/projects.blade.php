@extends('Front.Layouts.app')

@section('pageTitle') {{__("Our Projects")}} @endsection

@section('content')
    <section class="project-section padding">
        <div class="container">
            <div class="row">
                @forelse($projects as $project)
                    <div class="col-lg-4 col-sm-6 padding-15">
                        <div class="project-item">
                            <div class="project-thumb">
                                <a href="{{ route("singleProject", ['slug' => $project->slug]) }}">
                                    <img src="{{ url('/') }}/storage/{{ $project->image }}" alt="img"></a>
                            </div>
                            <div class="project-content">
                                <h4><a href="{{ route("singleProject", ['slug' => $project->slug]) }}">Tech App</a></h4>
                                <h3><a href="{{ route("singleProject", ['slug' => $project->slug]) }}">{{ $project->name }}</a></h3>
                                <a href="{{ route("singleProject", ['slug' => $project->slug]) }}" class="read-more"><i class="las la-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                @empty
                    No data !
                @endforelse
            </div>

            <ul class="pagination-wrap text-center mt-40">
                {{ $projects->links() }}
            </ul>

        </div>
    </section>
@endsection
