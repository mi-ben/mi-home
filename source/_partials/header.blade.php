<header class="container mx-auto border-b my-6">
    <nav class="flex pb-4">
        <a href="/" class="no-underline text-black">
            <img src="{{ $page->imageCdn("mi_logo.png") }}" alt="Measure Improvement Logo" class="w-12">
            <strong>{{ $page->site->title }}</strong><br>
        </a>
        <div class="flex flex-1 items-end justify-end -mr-4">
            <a class="no-underline text-grey-darker hover:text-grey-darkest mx-4" href="/posts">Posts</a>
            <a class="no-underline text-grey-darker hover:text-grey-darkest mx-4" href="/about">About</a>
            <a class="no-underline text-grey-darker hover:text-grey-darkest mx-4" href="/contact">Contact</a>
        </div>
    </nav>
</header>
