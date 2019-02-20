<header class="border-b my-6">
    <nav class="pb-4">
        <a href="/" class="no-underline text-black">
            <h1 class="font-headline pb-2">{{ $page->site->title }}</h1>
        </a>
        <div class="-ml-4 uppercase flex justify-between">
            <a class="no-underline text-xs {{ str_contains($page->_meta->path, "journal") ? "text-grey-darkest" : "text-grey-darker" }} hover:text-grey-darkest mx-4" href="/journal">Journal</a>
            <span class="text-grey text-xs">&bull;</span>
            <a class="no-underline text-xs {{ str_contains($page->_meta->path, "notes") ? "text-grey-darkest" : "text-grey-darker" }} hover:text-grey-darkest mx-4" href="/notes">Notes</a>
            <span class="text-grey text-xs">&bull;</span>
            <a class="no-underline text-xs {{ str_contains($page->_meta->path, "articles") ? "text-grey-darkest" : "text-grey-darker" }} hover:text-grey-darkest mx-4" href="/articles">Articles</a>
            <span class="text-grey text-xs">&bull;</span>
            <a class="no-underline text-xs {{ str_contains($page->_meta->path, "models") ? "text-grey-darkest" : "text-grey-darker" }} hover:text-grey-darkest mx-4" href="/models">Models</a>
            <span class="text-grey text-xs">&bull;</span>
            <a class="no-underline text-xs {{ str_contains($page->_meta->path, "projects") ? "text-grey-darkest" : "text-grey-darker" }} hover:text-grey-darkest mx-4" href="/projects">Projects</a>
            <span class="text-grey text-xs">&bull;</span>
            <a class="no-underline text-xs {{ str_contains($page->_meta->path, "connect") ? "text-grey-darkest" : "text-grey-darker" }} hover:text-grey-darkest mx-4" href="/connect">Connect</a>
            <span class="text-grey text-xs">&bull;</span>
            <a class="no-underline text-xs {{ str_contains($page->_meta->path, "about") ? "text-grey-darkest" : "text-grey-darker" }} hover:text-grey-darkest mx-4" href="/about">About</a>
        </div>
    </nav>

</header>
