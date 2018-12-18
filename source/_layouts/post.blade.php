@extends('_layouts.secondary-right-column')

@section('title', $page->title)

@section('middle-column')

<div class="border p-4 bg-white shadow rounded-lg mb-8 overflow-hidden">
    <div class="flex items-stretch mb-4">
        <img src="{{ $page->imageCdn($page->image) }}" class="w-64 h-48 rounded-lg border-b border-l shadow">

        <div class="ml-4 flex-1 flex relative">
            <div class="flex-1 self-center">
                 <h1 class="uppercase text-3xl pb-2">{{ $page->title }}</h1>

                <div class="flex items-center justify-between pb-4">
                    <p class="text-grey-dark font-thin text-sm">{{ date('M j, Y', $page->date) }}</p>
                    <div>
                        @foreach ($page->tags as $tag)
                        <a href="/tags/{{ $tag }}" class="rounded-full bg-grey-lighter text-grey-darker px-4 py-1 mx-1 no-underline uppercase text-xs">{{ $tag }}</a>
                        @endforeach
                    </div>
                </div>
            </div>
            <i class="far fa-chevron-circle-down fa-lg absolute pin-x pin-b mx-auto mb-2"></i>
        </div>


    </div>


    @yield('postContent')

</div>

@endsection
