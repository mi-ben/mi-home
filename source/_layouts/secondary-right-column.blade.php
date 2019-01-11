@extends('_layouts.master')

@section('layout')

    <div class="flex -mx-2">
        <div class="mx-2 flex-grow">
            @yield('middle-column')
        </div>

        <div class="mx-2 w-64 flex-no-shrink">
            @yield('right-column')
        </div>
    </div>

@endsection
