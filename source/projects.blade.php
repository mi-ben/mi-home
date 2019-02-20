@extends('_layouts.single-column')

@section('title', 'Projects')

@section('main-content')
<div class="max-w-md">
    <h1 class="mb-4">Projects</h1>
    <p class="leading-normal text-grey-darker mb-8">The vision may not be clear at the start, but I expect over time some of these models will come together nicely. So nicely in fact, that it may inspire the creation of a long-lasting multi-faceted project.</p>

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
</div>
@endsection
