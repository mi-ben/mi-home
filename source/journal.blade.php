@extends('_layouts.single-column')

@section('title', 'Journal')

@section('main-content')
    <h1>Journal</h1>

    @forelse ($journal->sortBy('-date') as $journal_entry)

        <div class="py-2 leading-normal pb-10">
            <p class="text-grey-dark font-thin text-sm">{{ date('M j, Y', $journal_entry->date) }}</p>
            <a href="{{ $journal_entry->getPath() }}" class="text-black pb-2 uppercase text-2xl no-underline">{{ $journal_entry->title }}</a>
            <p class="text-grey-darker pb-4">{{ $journal_entry->teaser }}</p>
            <a href="{{ $journal_entry->getPath() }}" class="no-underline text-grey-darker hover:text-grey-darkest text-sm">Read this journal entry <i class="fal fa-arrow-circle-right"></i></a>
        </div>
    @empty
        <p>No journal entries to show.</p>
    @endforelse
@endsection
