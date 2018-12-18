@extends('_layouts.secondary-right-column')

@section('title', 'Posts')

@section('middle-column')
    <h1>Posts</h1>

    @forelse ($posts->sortBy('-date') as $post)
        <a href="{{ $post->getPath() }}" class="bg-white border rounded-lg flex overflow-hidden my-4 p-2 no-underline shadow">
            <img src="{{ $page->imageCdn($post->image) }}" class="w-48 h-32 rounded-lg m-2">
            <div class="py-2 px-2 flex-1">
                <h2 class="text-black pb-2 uppercase text-xl">{{ $post->title }}</h2>

                <div class="flex items-center justify-between pb-4 w-full">
                    <p class="text-grey-dark font-thin text-sm">{{ date('M j, Y', $post->date) }}</p>
                    <div>
                        @forelse($post->tags as $tag)
                        <span class="rounded-full bg-grey-lighter text-grey-darker px-4 py-1 mx-1 no-underline uppercase text-xs">{{ $tag }}</span>
                        @empty

                        @endforelse
                    </div>

                </div>
                <p class="text-grey-darker">{{ $post->teaser }}</p>
            </div>
        </a>
    @empty
        <p>No posts to show.</p>
    @endforelse
@endsection
