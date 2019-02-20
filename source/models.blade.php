@extends('_layouts.single-column')

@section('title', 'Models')

@section('main-content')
<div class="max-w-md">
    <h1 class="mb-4">Models</h1>
    <p class="leading-normal text-grey-darker mb-8">Models are where we transition from conceptual and written, to functional and physical. This digitization is key to unlocking new growth oppotuntities. My hope is they can be the building blocks for your own projects.</p>

    @forelse ($models->sortBy('-date') as $model)

        <div class="py-2 leading-normal pb-10">
            <p class="text-grey-dark font-thin text-sm">{{ date('M j, Y', $model->date) }}</p>
            <a href="{{ $model->getPath() }}" class="text-black pb-2 uppercase text-2xl no-underline">{{ $model->title }}</a>
            <p class="text-grey-darker pb-4">{{ $model->teaser }}</p>
            <a href="{{ $model->getPath() }}" class="no-underline text-grey-darker hover:text-grey-darkest text-sm">Explore this model <i class="fal fa-arrow-circle-right"></i></a>
        </div>
    @empty
        <p>No models to show.</p>
    @endforelse
</div>
@endsection
