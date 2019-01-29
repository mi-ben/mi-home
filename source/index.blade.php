@extends('_layouts.single-column')

@section('main-content')
{{-- What --}}
<div class="flex items-center mx-8 my-24">
    <div class="text-left flex-1">
        <h1 class="uppercase text-4xl mb-2">The Personal Home of <br> Curiosity Driven R&amp;D</h1>
        <p class="text-grey-darker text-xl">It's like Mythbusters for applied digital tech</p>
    </div>
    <div class="relative bg-grey shadow-lg h-48 w-48">
        <i class="fal fa-sync fa-8x fa-stack-1x z-0"></i>
        <div class="m-12 z-50 absolute w-24">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="icon-light"><path class="primary" d="M5 8a7 7 0 1 1 10.62 6l-.64 3.2a1 1 0 0 1-.98.8h-4a1 1 0 0 1-.98-.8L8.38 14A7 7 0 0 1 5 8zm12 0a5 5 0 0 0-5-5 1 1 0 0 0 0 2 3 3 0 0 1 3 3 1 1 0 0 0 2 0z"/><path class="secondary" d="M15 21a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2 1 1 0 0 1 0-2h6a1 1 0 0 1 0 2z"/></svg>
        </div>
    </div>
</div>
<div class="max-w-md mx-auto">
    <div class="content">
        <p>Welcome! I'm <em>Benjamin A. Wilson</em> when I want to sound smart, but please, call me <em>Ben</em>.</p>
        <p>Thoughts to digits to people.</p>
        <p>Through exploration and experimentation, I'm working to bring you models of what technology and data is making possible today.</p>
        <p>The three tennants of our research</p>
        <ul>
            <li>Helpful</li>
            <li>Digital</li>
            <li>Teachable</li>
        </ul>
        <p>Areas of Interest:</p>
    </div>
</div>

<div class="max-w-md mx-auto flex">
    <div class="w-1/2 flex">
        <div class="bg-grey w-1/5 p-3 shadow">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="icon-chart"><path class="primary" d="M5 3h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5c0-1.1.9-2 2-2zm11 4a1 1 0 0 0-1 1v8a1 1 0 0 0 2 0V8a1 1 0 0 0-1-1z"/><path class="secondary" d="M8 11a1 1 0 0 1 1 1v4a1 1 0 0 1-2 0v-4a1 1 0 0 1 1-1zm4-2a1 1 0 0 1 1 1v6a1 1 0 0 1-2 0v-6a1 1 0 0 1 1-1z"/></svg>
        </div>
        <div class="ml-2 my-auto text-xs uppercase leading-normal">
            <p>Data</p>
            <p>Advanced Analytics</p>
            <p>Machine Learning</p>
        </div>
    </div>

    <div class="w-1/2 flex">
        <div class="bg-grey w-1/5 p-3 shadow">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="icon-time"><circle cx="12" cy="12" r="10" class="primary"/><path class="secondary" d="M13 11.59l3.2 3.2a1 1 0 0 1-1.4 1.42l-3.5-3.5A1 1 0 0 1 11 12V7a1 1 0 0 1 2 0v4.59z"/></svg>
        </div>
        <div class="ml-2 my-auto text-xs uppercase leading-normal">
            <p>Time</p>
        </div>
    </div>
</div>
<div class="max-w-md mx-auto flex mb-8 mt-4">
    <div class="w-1/2 flex">
        <div class="bg-grey w-1/5 p-3 shadow leading-normal">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="icon-target"><path class="primary" d="M15.23 2.53l-.35.35a3 3 0 0 0-.8 1.4 8.01 8.01 0 1 0 5.64 5.63 3 3 0 0 0 1.4-.79l.35-.35A9.99 9.99 0 0 1 12 22a10 10 0 1 1 3.23-19.47zM13.55 6.2L11.75 8a4 4 0 1 0 4.24 4.25l1.8-1.8a6 6 0 1 1-4.24-4.25z"/><path class="secondary" d="M16 6.59V5a1 1 0 0 1 .3-.7l2-2A1 1 0 0 1 20 3v1h1a1 1 0 0 1 .7 1.7l-2 2a1 1 0 0 1-.7.3h-1.59l-4.7 4.7a1 1 0 0 1-1.42-1.4L16 6.58z"/></svg>
        </div>
        <div class="ml-2 my-auto text-xs uppercase leading-normal">
            <p>Business</p>
            <p>Strategy</p>
            <p>AS-A-SERVICE</p>
        </div>
    </div>

    <div class="w-1/2 flex">
        <div class="bg-grey w-1/5 p-3 shadow">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="icon-factory"><path class="primary" d="M21 21H3a1 1 0 0 1-1-1.06l1-16A1 1 0 0 1 4 3h2a1 1 0 0 1 1 .94l.39 6.26 2.9-2.9A1 1 0 0 1 12 8v2.59l3.3-3.3A1 1 0 0 1 17 8v2.59l3.3-3.3A1 1 0 0 1 22 8v12a1 1 0 0 1-1 1z"/><path class="secondary" d="M7 13h3v2H7v-2zm5 0h3v2h-3v-2zm5 0h3v2h-3v-2zM7 17h3v2H7v-2zm5 0h3v2h-3v-2zm5 0h3v2h-3v-2z"/></svg>
        </div>
        <div class="ml-2 my-auto text-xs uppercase leading-normal">
            <p>IoT</p>
            <p>Edge Devices</p>
        </div>
    </div>

</div>


<div class="content max-w-md mx-auto">
    <p>
        If those sound like large general topics, well... they are! <br>
        and before it's all said and done, my curiosity will force me to add more.
    </p>
    <p>Do not worry, we have plenty of time. That is why I am making a <strong>100 Quarter Commitment</strong>.</p>
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
    <div class="p-6 bg-grey w-1/5 flex">
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
    <div class="p-6 bg-grey w-1/5 flex">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="icon-clouds"><path class="secondary" d="M16.85 6.06A3.52 3.52 0 0 1 21 9.5a3.5 3.5 0 0 1-6.96.5H14a3 3 0 1 1 2.85-3.94z"/><path class="primary" d="M5.03 12.12A5.5 5.5 0 0 1 16 11.26 4.5 4.5 0 1 1 17.5 20H6a4 4 0 0 1-.97-7.88z"/></svg>
    </div>
</div>

{{-- Articles / Document --}}
<div class="mr-auto ml-4 my-8 max-w-md flex shadow">
    <div class="p-6 bg-grey w-1/5 flex">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="icon-document"><path class="primary" d="M6 2h6v6c0 1.1.9 2 2 2h6v10a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V4c0-1.1.9-2 2-2z"/><polygon class="secondary" points="14 2 20 8 14 8"/></svg>
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
    <div class="p-6 bg-grey w-1/5 flex">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="icon-brick"><path class="primary" d="M3 6l9 4v12l-9-4V6zm14-3v2c0 1.1-2.24 2-5 2s-5-.9-5-2V3c0 1.1 2.24 2 5 2s5-.9 5-2z"/><polygon class="secondary" points="21 6 12 10 12 22 21 18"/></svg>
    </div>
</div>

{{-- Project / Package --}}
<div class="mr-auto ml-4 my-8 max-w-md flex shadow">
    <div class="p-6 bg-grey w-1/5 flex">
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
    <p>So far there has been a lot of "I" and "me". Hopefully you noticed some of the "ours" and "we". Those are intentional. This is a journey together. I could not do this without the help and support of my family, friends, colleagues, and generous strangers that have shared their thoughts.</p>
    <p>Whether you'd like to dive into detail, provide some critical feedback, or bounce an idea off me, I would love to hear from you. I enjoy helping out and will respond to as many messages as I can, time permitting.</p>
    <p>Take a look at how we can best <a href="/connect">connect</a>.</p>
</div>

@endsection
