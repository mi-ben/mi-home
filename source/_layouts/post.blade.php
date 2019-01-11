@extends('_layouts.single-column')

@section('title', $page->title)

@section('main-content')

<div class="leading-normal">
    <p class="text-grey-dark font-thin text-sm">{{ date('M j, Y', $page->date) }}</p>
    <h1 class="text-black mb-12 uppercase text-4xl no-underline">{{ $page->title }}</h1>

    <div class="content max-w-md border-r pr-4">
        @yield('postContent')
    </div>
</div>

@endsection
