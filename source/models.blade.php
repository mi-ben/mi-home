@extends('_layouts.single-column')

@section('title', 'Models')

@section('main-content')
    <h1>Models</h1>

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
@endsection
