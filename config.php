<?php

return [
    'production' => false,
    'baseUrl' => 'https://measuredimprovement.com',
    'site' => [
        'title' => 'Measured Improvement',
        'description' => 'Personal blog of John Doe.',
        'image' => 'mi_logo.png',
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
        'posts' => [
            'path' => 'posts/{filename}',
            'sort' => '-date',
            'extends' => '_layouts.post',
            'section' => 'postContent',
            'isPost' => true,
            'comments' => true,
            'tags' => [],
        ],
        'tags' => [
            'path' => 'tags/{filename}',
            'extends' => '_layouts.tag',
            'section' => '',
            'name' => function ($page) {
                return $page->getFilename();
            },
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
