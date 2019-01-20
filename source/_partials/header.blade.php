<header class="border-b my-6">
    <nav class="pb-4">
        <a href="/" class="no-underline text-black">
            <h1 class="font-headline pb-2">{{ $page->site->title }}</h1>
        </a>
        <div class="-ml-4 uppercase">
                <a class="no-underline text-xs {{ str_contains($page->_meta->path, "journal") ? "text-grey-darkest" : "text-grey-darker" }} hover:text-grey-darkest mx-4" href="/journal">Journal</a>
                <a class="no-underline text-xs {{ str_contains($page->_meta->path, "notes") ? "text-grey-darkest" : "text-grey-darker" }} hover:text-grey-darkest mx-4" href="/notes">Notes</a>
                <a class="no-underline text-xs {{ str_contains($page->_meta->path, "articles") ? "text-grey-darkest" : "text-grey-darker" }} hover:text-grey-darkest mx-4" href="/articles">Articles</a>
                <a class="no-underline text-xs {{ str_contains($page->_meta->path, "models") ? "text-grey-darkest" : "text-grey-darker" }} hover:text-grey-darkest mx-4" href="/models">Models</a>
                <a class="no-underline text-xs {{ str_contains($page->_meta->path, "projects") ? "text-grey-darkest" : "text-grey-darker" }} hover:text-grey-darkest mx-4" href="/projects">Projects</a>
                <a class="no-underline text-xs {{ str_contains($page->_meta->path, "connect") ? "text-grey-darkest" : "text-grey-darker" }} hover:text-grey-darkest mx-4" href="/connect">Connect</a>
            </div>
        {{-- <div class="uppercase flex justify-between items-center">

            <p class="italic font-serif text-grey-darker text-xs">Discover ... Develop ... Report</p>
        </div> --}}
    </nav>

</header>
