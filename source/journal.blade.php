@extends('_layouts.single-column')

@section('title', 'Journal')

@section('main-content')
<div class="max-w-md">
    <h1 class="mb-4">Journal</h1>
    <p class="leading-normal text-grey-darker mb-8">You're supposed to <em>begin with the end in mind</em>. Well, I'm no grand chess master that can see 100 steps ahead. So, we will take it one step at a time in the Journal. Here I'll set the goals ahead of us and reflect on the path behind us.</p>

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
</div>
@endsection
