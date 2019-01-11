@extends('_layouts.master')

@section('layout')

    <div class="flex -mx-2">
        <div class="mx-2 w-64">
            @yield('left-column')
        </div>

        <div class="mx-2 flex-1">
            @yield('middle-column')
        </div>

        <div class="mx-2 w-64">
            @yield('right-column')
        </div>
    </div>

@endsection
