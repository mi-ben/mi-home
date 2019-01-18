@extends('_layouts.single-column')

@section('main-content')
    {{-- What --}}
    <div>
        <h1>Welcome to Benjamin A. Wilson's Personal Site</h1>
        <p class="italic">A bit about what you can expect here.</p>
    </div>



    <div class="my-16 bg-white shadow-lg p-8">
        <h2>The 25-Year Committment</h2>
        <p class="italic">A committment to exploring, learning, developing, and applying. Random thoughts expected.</p>
    </div>

    {{-- How --}}
    <div class="max-w-md mx-auto">
        <h2>Game Plan -- The Process</h2>
        <p class="italic">Walk through the progression of Journal --> Notes --> Articles --> Models --> Projects</p>
        <i class="fal fa-book-open"></i>
        <i class="fal fa-sticky-note"></i>
        {{-- Articles / Light --}}
        Step 3 - Articles
        Our random thoughts are starting to click! I'll take some time to explain concepts clearly <span class="italic small">(hopefull)</span>, before creating a tech-enabled version.
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="icon-light"><path class="primary" d="M5 8a7 7 0 1 1 10.62 6l-.64 3.2a1 1 0 0 1-.98.8h-4a1 1 0 0 1-.98-.8L8.38 14A7 7 0 0 1 5 8zm12 0a5 5 0 0 0-5-5 1 1 0 0 0 0 2 3 3 0 0 1 3 3 1 1 0 0 0 2 0z"/><path class="secondary" d="M15 21a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2 1 1 0 0 1 0-2h6a1 1 0 0 1 0 2z"/></svg>
        {{-- Project / Package --}}
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="icon-package"><polygon class="primary" points="3 6 12 2 21 6 21 18 12 22 3 18"/><path class="secondary" d="M21 6v12l-9 4V10l9-4zM9 8.67v3l-3-1.34v-3l9-4 3 1.34-9 4z"/></svg>
        {{-- Models / Brick --}}
        Step 4 - Models
        Models make up our digitized concept. 
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="icon-brick"><path class="primary" d="M3 6l9 4v12l-9-4V6zm14-3v2c0 1.1-2.24 2-5 2s-5-.9-5-2V3c0 1.1 2.24 2 5 2s5-.9 5-2z"/><polygon class="secondary" points="21 6 12 10 12 22 21 18"/></svg>
        {{-- Notes / Clouds --}}
        Step 2 - Notes
        Things are still messy here. This is when my head is still in the proverbial "clouds". You can expect some random throughout.
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="icon-clouds"><path class="secondary" d="M16.85 6.06A3.52 3.52 0 0 1 21 9.5a3.5 3.5 0 0 1-6.96.5H14a3 3 0 1 1 2.85-3.94z"/><path class="primary" d="M5.03 12.12A5.5 5.5 0 0 1 16 11.26 4.5 4.5 0 1 1 17.5 20H6a4 4 0 0 1-.97-7.88z"/></svg>

        {{-- Journal / Map --}}
        Step 1 - Journal
        The Journal is the map. The goals ahead of us, reflections on the path behind us.
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="icon-map"><path class="primary" d="M15 18.12L9.45 20.9a1 1 0 0 1-.9 0l-6-3A1 1 0 0 1 2 17V4a1 1 0 0 1 1.45-.9L9 5.89l5.55-2.77a1 1 0 0 1 .9 0l6 3A1 1 0 0 1 22 7v13a1 1 0 0 1-1.45.89L15 18.12z"/><path class="secondary" d="M9 21V5.88l5.55-2.77A1 1 0 0 1 15 3v15.1L9.45 20.9A1 1 0 0 1 9 21z"/></svg>
    </div>


    {{-- Who --}}
    <h2>About Me</h2>
    <img src="{{ $page->imageCdn("Sorrento_Wide.jpg") }}" alt="Ben Wilson" class="shadow-lg my-8">
    <ul>
        <li>Professionally: Developer, Analyst</li>
        <li>Semi-Pro: Designer, Marketer</li>
        <li>Personal: Cornhole, Taco Afficianado</li>
    </ul>

    <h2>Get in Touch</h2>
    <p class="italic">Email is the best to get in touch.</p>
@endsection
