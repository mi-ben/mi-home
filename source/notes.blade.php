@extends('_layouts.single-column')

@section('title', 'Notes')

@section('main-content')
    <h1>Notes</h1>

    @forelse ($notes->sortBy('-date') as $note)

        <div class="py-2 leading-normal pb-10">
            <p class="text-grey-dark font-thin text-sm">{{ date('M j, Y', $note->date) }}</p>
            <a href="{{ $note->getPath() }}" class="text-black pb-2 uppercase text-2xl no-underline">{{ $note->title }}</a>
            <p class="text-grey-darker pb-4">{{ $note->teaser }}</p>
            <a href="{{ $note->getPath() }}" class="no-underline text-grey-darker hover:text-grey-darkest text-sm">Read this note <i class="fal fa-arrow-circle-right"></i></a>
        </div>
    @empty
        <p>No notes to show.</p>
    @endforelse
@endsection
