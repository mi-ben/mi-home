@extends('_layouts.single-column')

@section('title', 'Projects')

@section('main-content')
    <h1>Projects</h1>

    @forelse ($projects->sortBy('-date') as $project)

        <div class="py-2 leading-normal pb-10">
            <p class="text-grey-dark font-thin text-sm">{{ date('M j, Y', $project->date) }}</p>
            <a href="{{ $project->getPath() }}" class="text-black pb-2 uppercase text-2xl no-underline">{{ $project->title }}</a>
            <p class="text-grey-darker pb-4">{{ $project->teaser }}</p>
            <a href="{{ $project->getPath() }}" class="no-underline text-grey-darker hover:text-grey-darkest text-sm">Explore this project <i class="fal fa-arrow-circle-right"></i></a>
        </div>
    @empty
        <p>No projects to show.</p>
    @endforelse
@endsection
