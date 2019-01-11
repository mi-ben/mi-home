@extends('_layouts.single-column')

@section('title', 'Articles')

@section('main-content')
    <h1>Articles</h1>

    @forelse ($articles->sortBy('-date') as $article)

        <div class="py-2 leading-normal pb-10">
            <p class="text-grey-dark font-thin text-sm">{{ date('M j, Y', $article->date) }}</p>
            <a href="{{ $article->getPath() }}" class="text-black pb-2 uppercase text-2xl no-underline">{{ $article->title }}</a>
            <p class="text-grey-darker pb-4">{{ $article->teaser }}</p>
            <a href="{{ $article->getPath() }}" class="no-underline text-grey-darker hover:text-grey-darkest text-sm">Read this article <i class="fal fa-arrow-circle-right"></i></a>
        </div>
    @empty
        <p>No articles to show.</p>
    @endforelse
@endsection
