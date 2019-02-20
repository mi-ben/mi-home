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
        <p>Hi, I'm Ben, and I've always been a curious person. This curiosity is going to take us to some fun and interesting places... <em>at least I find them fun.</em></p>
        <p>With everything I put on here, I strive to hit <strong>3 requirements</strong>.</p>
        <ul class="fa-ul mx-auto max-w-sm">
            <li class="mb-8 pl-4">
                <span class="fa-li"><i class="fal fa-lg fa-hands-helping"></i></span>
                <h4 class="pb-2">Helpful</h4>
                <p class="text-sm leading-loose">I'll always keep a close eye on the purpose of the research. If the work is not moving towards solving a tangible problem, then it's not incredibly useful. I'll always keep the audience and others in mind.</p>
            </li>
            <li class="mb-8 pl-4">
                <span class="fa-li"><i class="fal fa-lg fa-laptop-code"></i></span>
                <h4 class="pb-2">Digital</h4>
                <p class="text-sm leading-loose">Bringing something into the digital world all the sudden unlocks a whole new set of capabilities. Digitizing the concepts that we explore will allow others to update and build upon it.</p>
            </li>
            <li class="mb-8 pl-4">
                <span class="fa-li"><i class="fal fa-lg fa-chalkboard-teacher"></i></span>
                <h4 class="pb-2">Teachable</h4>
                <p class="text-sm leading-loose">I want you to be able to replicate my results, apply it to your own situation, and use it as a stepping stone. Everything I'm sharing is a culmination of others work, both currently and historically. This research can be the next step up.</p>
            </li>
        </ul>
        <p>So what topics might we explore? What could we possibly build?</p>
        <p>Here are a few areas I plan to explore in-depth:</p>
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
            <p>Digital Twins</p>
        </div>
    </div>

</div>

<div class="content max-w-md mx-auto">
    <p>If those sound like large general topics, well... they are!</p>
    <p>No worries though, we have plenty of time. That is why I am making a <br><strong>100 Quarter Commitment</strong>.</p>
</div>

<div class="my-16 mx-4 bg-white shadow-lg p-8">
    <h2 class="mb-2">My 100 Quarter Committment</h2>
    <p class="text-grey-dark font-thin text-sm mb-4">{{ date('M j, Y', strtotime('01/31/2019')) }}</p>
    <div class="content">
        <p>I believe in the compounding capabilities of individual ingenuity and collaboration through the use of technology.</p>
        <p>The compounding returns have been building up for centuries and that trend will continue, certainly for the next 25 years.</p>
        <p>When you are able to apply technology effectively, you grow in three way:</p>
        <ul>
            <li>Personal Growth - through increased capabilities</li>
            <li>Organizational Growth - through increased efficencies</li>
            <li>Community Growth - through increased service to others</li>
        </ul>
        <p>It is this belief in leveraging technology to do more good and the unending growth opportunity ahead, that gives me the courage to commit 100 quarters to delivering models of what is possible today.</p>
        <p>My hope is that as these works unfold, they will inspire, guide, or spark your own growth.</p>
    </div>
    <p class="border-b w-1/4 ml-auto p-0 text-grey-dark">x<span class="pl-2 font-headline text-2xl text-black">Ben W.</span></p>
</div>

{{-- How --}}
<div class="max-w-sm mx-auto content">
    {{-- <h2 class="text-center uppercase">My Process</h2> --}}
    <p>Even with 25 years to explore such a broad space, it may seem like a lot to fit into a quarter. That's why I've worked out a 5-step process for our R&D goals.</p>
    <p>I've even structured the website around this process. <br>So, let's take a quick walk-through.</p>
</div>

{{-- Articles / Light --}}
<div class="mr-auto ml-4 my-8 max-w-md flex shadow">
    <div class="p-6 bg-grey w-1/5 flex">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="icon-map"><path class="primary" d="M15 18.12L9.45 20.9a1 1 0 0 1-.9 0l-6-3A1 1 0 0 1 2 17V4a1 1 0 0 1 1.45-.9L9 5.89l5.55-2.77a1 1 0 0 1 .9 0l6 3A1 1 0 0 1 22 7v13a1 1 0 0 1-1.45.89L15 18.12z"/><path class="secondary" d="M9 21V5.88l5.55-2.77A1 1 0 0 1 15 3v15.1L9.45 20.9A1 1 0 0 1 9 21z"/></svg>
    </div>
    <div class="bg-grey-light flex-1 p-6">
        <h3 class="mb-2">Step 1 - Journal</h3>
        <p class="leading-normal">You're supposed to <em>begin with the end in mind</em>. Well, I'm no grand chess master that can see 100 steps ahead. So, we will take it one step at a time in the Journal. There I'll set the goals ahead of us and reflect on the path behind us.</p>
    </div>
</div>

{{-- Notes / Clouds --}}
<div class="ml-auto mr-4 my-8 max-w-md flex shadow">
    <div class="bg-grey-light flex-1 p-6">
        <h3 class="mb-2">Step 2 - Notes</h3>
        <p class="leading-normal">Things are still messy here. This is when my head is still in the proverbial <em>"clouds"</em>. This will grow into a nice knowledge base of links, definitions, and a few random thoughts.</p>
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
        <p class="leading-normal">Our random thoughts are starting to click! I'll take some time to explain concepts clearly <span class="italic small">(hopefully)</span>, before creating a tech-enabled version.</p>
    </div>
</div>

{{-- Models / Brick --}}
<div class="ml-auto mr-4 my-8 max-w-md flex shadow">
    <div class="bg-grey-light flex-1 p-6">
        <h3 class="mb-2">Step 4 - Models</h3>
        <p class="leading-normal">Models are where we transition from conceptual and written, to functional and physical. This digitization is key to unlocking new growth oppotuntities. My hope is they can be the building blocks for your own projects.</p>
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
        <p class="leading-normal">The vision may not be clear at the start, but I expect over time some of these models will come together nicely. So nicely in fact, that it may inspire the creation of a long-lasting multi-faceted project.</p>
    </div>
</div>

<div class="content max-w-md mx-auto text-center">
    <p>So, if this sounds like your kind of fun, pick a place to start and <strong>dive on in!</strong></p>
</div>

<div class="uppercase flex justify-between">
        <a class="no-underline text-xs {{ str_contains($page->_meta->path, "journal") ? "text-grey-darkest" : "text-grey-darker" }} hover:text-grey-darkest" href="/journal">Journal</a>
        <span class="text-grey text-xs">&bull;</span>
        <a class="no-underline text-xs {{ str_contains($page->_meta->path, "notes") ? "text-grey-darkest" : "text-grey-darker" }} hover:text-grey-darkest" href="/notes">Notes</a>
        <span class="text-grey text-xs">&bull;</span>
        <a class="no-underline text-xs {{ str_contains($page->_meta->path, "articles") ? "text-grey-darkest" : "text-grey-darker" }} hover:text-grey-darkest" href="/articles">Articles</a>
        <span class="text-grey text-xs">&bull;</span>
        <a class="no-underline text-xs {{ str_contains($page->_meta->path, "models") ? "text-grey-darkest" : "text-grey-darker" }} hover:text-grey-darkest" href="/models">Models</a>
        <span class="text-grey text-xs">&bull;</span>
        <a class="no-underline text-xs {{ str_contains($page->_meta->path, "projects") ? "text-grey-darkest" : "text-grey-darker" }} hover:text-grey-darkest" href="/projects">Projects</a>
        <span class="text-grey text-xs">&bull;</span>
        <a class="no-underline text-xs {{ str_contains($page->_meta->path, "connect") ? "text-grey-darkest" : "text-grey-darker" }} hover:text-grey-darkest" href="/connect">Connect</a>
        <span class="text-grey text-xs">&bull;</span>
        <a class="no-underline text-xs {{ str_contains($page->_meta->path, "about") ? "text-grey-darkest" : "text-grey-darker" }} hover:text-grey-darkest" href="/about">About</a>
    </div>

@endsection
