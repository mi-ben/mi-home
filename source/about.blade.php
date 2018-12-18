@extends('_layouts.master')

@section('title', 'About')

@section('content')
    <h1>About</h1>

    <p>My name is {{ $page->owner->name }}</p>

    Building a business is the greatest way to create value in the world! You provide value to yourself, your team, and your customers.

    Focus on your customers.
    Long-term coaching.
    Subscriptions are the perfect business model to match this mentality.

    <h2>Links:</h2>

    <ul>
        <li><a href="https://twitter.com/{{ $page->owner->twitter }}" target="_blank">Twitter</a></li>
    </ul>
@endsection
