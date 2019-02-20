@extends('_layouts.single-column')

@section('title', 'Projects')

@section('main-content')
{{-- Who --}}
<img src="{{ $page->imageCdn("Sorrento_Wide.jpg") }}" alt="Ben Wilson" class="shadow-lg">
<div class="content my-8 mx-auto max-w-md">

    <p>Since I was 18 I have felt like I was searching for what I was supposed to do to help others, make a living, and hopefully make a positive impact on my community. I went to a liberal arts university to learn about a wide array of topics. I did not declare a major until my junior year, just because I was forced to in order to graduate on time. I chose computer science, not because memorizing Big O notation for different sorting algorithms was so much fun, but because I loved finding the interesting intersections between computers and other disciplines!</p>
    <p>After college I've had a lot of different roles...</p>
    <ul>
        <li>Professionally: Developer, Analyst</li>
        <li>Semi-Pro: Designer, Marketer</li>
        <li>Personal: Cornhole, Taco Afficianado</li>
    </ul>
    <p>Finally, I began to think, maybe it's not the topic but the process of learning that I love.</p>
    <p>If my one specialty emerges during this 25-year period, then that's a win. If it doesn't, I'll be really good at exploring new avenues!</p>

    {{-- Connect --}}
    <h2 class="uppercase text-center">It takes a village</h2>
    <p>So far there has been a lot of "I" and "me". Hopefully you noticed some of the "ours" and "we". Those are intentional. This is a journey together. </p>
    <p class="font-bold">Thank you for being here!</p>
    <p>I could not do this without the help and support of my family, friends, colleagues, and generous strangers that have shared their thoughts.</p>
    <p>Whether you'd like to dive into detail, provide some critical feedback, or bounce an idea off me, I would love to hear from you. I enjoy helping out and will respond to as many messages as I can, time permitting.</p>
    <p>Take a look at how we can best <a href="/connect">connect</a>.</p>
</div>
@endsection
