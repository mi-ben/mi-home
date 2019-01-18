<?php

return [
    'production' => false,
    'baseUrl' => 'https://measuredimprovement.com',
    'site' => [
        'title' => 'Benjamin A. Wilson',
        'description' => 'Discover ... Develop ... Report',
    ],
    'owner' => [
        'name' => 'Measured Improvement',
        'twitter' => 'Measure_Improve',
    ],
    'services' => [
        'analytics' => 'UA-100402971-1',
        // 'disqus' => 'artisanstatic',
        'cloudinary' => 'measured-improvement',
        // 'jumprock' => 'artisanstatic',
    ],
    'collections' => [
        'articles' => [
            'path' => 'articles/{filename}',
            'sort' => '-date',
            'extends' => '_layouts.post',
            'section' => 'postContent',
            'isPost' => true,
            'comments' => true,
            'tags' => [],
        ],
        'journal' => [
            'path' => 'journal/{filename}',
            'sort' => '-date',
            'extends' => '_layouts.post',
            'section' => 'postContent',
            'isPost' => true,
            'comments' => true,
            'tags' => [],
        ],
        'models' => [
            'path' => 'models/{filename}',
            'sort' => '-date',
            'extends' => '_layouts.post',
            'section' => 'postContent',
            'isPost' => true,
            'comments' => true,
            'tags' => [],
        ],
        'notes' => [
            'path' => 'notes/{filename}',
            'sort' => '-date',
            'extends' => '_layouts.post',
            'section' => 'postContent',
            'isPost' => true,
            'comments' => true,
            'tags' => [],
        ],
        'projects' => [
            'path' => 'projects/{filename}',
            'sort' => '-date',
            'extends' => '_layouts.post',
            'section' => 'postContent',
            'isPost' => true,
            'comments' => true,
            'tags' => [],
        ],
    ],
    'excerpt' => function ($page, $limit = 250, $end = '...') {
        return $page->isPost
            ? str_limit_soft(content_sanitize($page->getContent()), $limit, $end)
            : null;
    },
    'imageCdn' => function ($page, $path) {
        return "https://res.cloudinary.com/{$page->services->cloudinary}/{$path}";
    },
];
