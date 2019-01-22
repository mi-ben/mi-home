@extends('_layouts.single-column')

@section('main-content')
    {{-- What --}}
    <div>
        <h1 class="text-center uppercase text-4xl">The Personal Home of <br> Curiosity Driven R&amp;D</h1>
        <p>Welcome! I'm <em>Benjamin A. Wilson</em> when I want to sound smart, but please, call me <em>Ben</em>.</p>
        <p>Thoughts to digits to people.</p>
        <p>Through exploration and experimentation, I'm working to bring you models of what technology and data is making possible today.</p>
    </div>



    <div class="my-16 bg-white shadow-lg p-8">
        <h2>100-Q Committment</h2>
        <p>It's no secret that all good things take time. That is why I'm making a long-term committment to you all.</p>
        <p class="italic">A committment to exploring, learning, developing, and applying. Random thoughts expected.</p>
    </div>

    {{-- How --}}
    <div class="max-w-sm mx-auto content">
        <h2 class="text-center uppercase">My Process</h2>
        <p>I've found a 5-step process that works for me. It'll change and improve as we go through the process together.</p>
        <p>Here's a quick walk-through the process, so you can find the most interesting part of the site for you.</p>
    </div>

    {{-- Articles / Light --}}
    <div class="mr-auto ml-4 my-8 max-w-md flex shadow">
        <div class="p-6 bg-grey w-1/5">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="icon-map"><path class="primary" d="M15 18.12L9.45 20.9a1 1 0 0 1-.9 0l-6-3A1 1 0 0 1 2 17V4a1 1 0 0 1 1.45-.9L9 5.89l5.55-2.77a1 1 0 0 1 .9 0l6 3A1 1 0 0 1 22 7v13a1 1 0 0 1-1.45.89L15 18.12z"/><path class="secondary" d="M9 21V5.88l5.55-2.77A1 1 0 0 1 15 3v15.1L9.45 20.9A1 1 0 0 1 9 21z"/></svg>
        </div>
        <div class="bg-grey-light flex-1 p-6">
            <h3 class="mb-2">Step 1 - Journal</h3>
            <p>I'm not good enough to plan out 100 steps into the future, so the Journal will be our map. I'll lay out our goal for the quarter ahead, and reflections from the past 90 daysThe goals ahead of us, reflections on the path behind us.</p>
        </div>
    </div>

    {{-- Notes / Clouds --}}
    <div class="ml-auto mr-4 my-8 max-w-md flex shadow">
        <div class="bg-grey-light flex-1 p-6">
            <h3 class="mb-2">Step 2 - Notes</h3>
            <p>Things are still messy here. This is when my head is still in the proverbial <em>"clouds"</em>. You can expect some random thoughts throughout.</p>
        </div>
        <div class="p-6 bg-grey w-1/5">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="icon-clouds"><path class="secondary" d="M16.85 6.06A3.52 3.52 0 0 1 21 9.5a3.5 3.5 0 0 1-6.96.5H14a3 3 0 1 1 2.85-3.94z"/><path class="primary" d="M5.03 12.12A5.5 5.5 0 0 1 16 11.26 4.5 4.5 0 1 1 17.5 20H6a4 4 0 0 1-.97-7.88z"/></svg>
        </div>
    </div>

    {{-- Articles / Light --}}
    <div class="mr-auto ml-4 my-8 max-w-md flex shadow">
        <div class="p-6 bg-grey w-1/5">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="icon-light"><path class="primary" d="M5 8a7 7 0 1 1 10.62 6l-.64 3.2a1 1 0 0 1-.98.8h-4a1 1 0 0 1-.98-.8L8.38 14A7 7 0 0 1 5 8zm12 0a5 5 0 0 0-5-5 1 1 0 0 0 0 2 3 3 0 0 1 3 3 1 1 0 0 0 2 0z"/><path class="secondary" d="M15 21a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2 1 1 0 0 1 0-2h6a1 1 0 0 1 0 2z"/></svg>
        </div>
        <div class="bg-grey-light flex-1 p-6">
            <h3 class="mb-2">Step 3 - Articles</h3>
            <p>Our random thoughts are starting to click! I'll take some time to explain concepts clearly <span class="italic small">(hopefull)</span>, before creating a tech-enabled version.</p>
        </div>
    </div>

    {{-- Models / Brick --}}
    <div class="ml-auto mr-4 my-8 max-w-md flex shadow">
        <div class="bg-grey-light flex-1 p-6">
            <h3 class="mb-2">Step 4 - Models</h3>
            <p>Models are where we transition from conceptual and written, to functional and physical. This digitization is key to unlocking new growth oppotuntities. My hope is they can be the building blocks for your projects.</p>
        </div>
        <div class="p-6 bg-grey w-1/5">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="icon-brick"><path class="primary" d="M3 6l9 4v12l-9-4V6zm14-3v2c0 1.1-2.24 2-5 2s-5-.9-5-2V3c0 1.1 2.24 2 5 2s5-.9 5-2z"/><polygon class="secondary" points="21 6 12 10 12 22 21 18"/></svg>
        </div>
    </div>

    {{-- Project / Package --}}
    <div class="mr-auto ml-4 my-8 max-w-md flex shadow">
        <div class="p-6 bg-grey w-1/5">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="icon-package"><polygon class="primary" points="3 6 12 2 21 6 21 18 12 22 3 18"/><path class="secondary" d="M21 6v12l-9 4V10l9-4zM9 8.67v3l-3-1.34v-3l9-4 3 1.34-9 4z"/></svg>
        </div>
        <div class="bg-grey-light flex-1 p-6">
            <h3 class="mb-2">Step 5 - Projects</h3>
            <p>The vision may not be clear at the start, but I expect some of these models to come together nicely. So nicely in fact, that it may inspire the creation of a long-lasting multi-faceted project.</p>
        </div>
    </div>


    {{-- Who --}}
    <h2 class="text-center uppercase">My-self</h2>
    <img src="{{ $page->imageCdn("Sorrento_Wide.jpg") }}" alt="Ben Wilson" class="shadow-lg my-8">
    <ul>
        <li>Professionally: Developer, Analyst</li>
        <li>Semi-Pro: Designer, Marketer</li>
        <li>Personal: Cornhole, Taco Afficianado</li>
    </ul>

    <div class="content my-8 mx-auto max-w-md">
        <h2 class="uppercase text-center">It takes a village</h2>
        <p>So far there has been a lot of "I" and "me". Hopefully you noticed some of the "ours" and "we". Those are intentional. This is a journey together. I could not do this without the help and support of my family, friends, colleagues, and generous strangers that have shared their thoughts.</p>
        <p>Whether you'd like to dive into detail, provide some critical feedback, or bounce an idea off me, I would love to hear from you. I enjoy helping out and will respond to as many messages as I can, time permitting.</p>
        <p>Take a look at how we can best <a href="/connect">connect</a>.</p>
    </div>

@endsection
