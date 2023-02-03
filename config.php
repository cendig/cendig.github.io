<?php

$apiUrl = env('API_URL');
$assetUrl = env('ASSET_URL', env('API_URL'));
$apiToken = env('API_KEY');

$opts = [
    "http" => [
        "method" => "GET",
        "header" => "Accept-language: en\r\n"
//            . "api-key: " . env('API_KEY') . "\r\n"
    ]
];

$context = stream_context_create($opts);

function getPostStructure($post, $assetUrl)
{
    return [
        'id' => $post->_id,
        'published' => $post->published,
        'featured' => $post->featured,
        'pinned' => $post->pinned,
        'title' => $post->title,
        'slug' => $post->title_slug,
        'body' => $post->content,
        'page_description' => $post->excerpt,
        'excerpt' => $post->excerpt,
        'featured_image' => $assetUrl . $post->featured_image->path,
        'featured_image_caption' => $post->title,
        'publish_date' => $post->publish_date,
        '_created' => $post->publish_date,
        'meta' => [
            'meta_description' => $post->meta_description ?? $post->excerpt,
            'opengraph_title' => $post->meta_title ?? $post->title,
            'opengraph_description' => $post->meta_description ?? $post->excerpt,
            'opengraph_image' => $assetUrl . $post->featured_image->path,
//            'opengraph_image_width' =>$post->featured_image->width,
//            'opengraph_image_height' => $post->featured_image->height,
            'twitter_title' => $post->meta_title ?? $post->title,
            'twitter_description' => $post->meta_description ?? $post->excerpt,
            'twitter_image' => $assetUrl . $post->featured_image->path,
        ],
    ];
}

return [
    'production' => false,
    'baseUrl' => env('BASE_URL','http://localhost:3000'),
    'siteName' => 'Centrisign Digital | Enterprise Software Development, Design & Consulting',
    'siteDescription' => 'Centrisign Digital is an innovative and reliable Enterprise Software Development, Design & Consulting provider in the Kenyan and african market. We have vast experience in the Retail, E-commerce and Payments Industry.',
    'site_logo' => env('BASE_URL','http://localhost:3000') . '/assets/images/logo-black.png',

    // navigation menu
    'navigation' => require_once('navigation.php'),

    // helpers
    'isActive' => function ($page, $path) {
        return ends_with(trimPath($page->getPath()), trimPath($path));
    },

    'isActiveParent' => function ($page, $menuItem) {
        if (is_object($menuItem) && $menuItem->children) {
            return $menuItem->children->contains(function ($child) use ($page) {
                return trimPath($page->getPath()) == trimPath($child);
            });
        }
    },

    'url' => function ($page, $path) {
        return starts_with($path, 'http') ? $path : '/' . trimPath($path);
    },

    'getDate' => function ($page) {
        return \Carbon\Carbon::parse($page->_created)->toFormattedDateString();
    },

    'collections' => [
        'case_studies' => [
            'path' => 'our-work/{filename}',
        ],
        'posts' => [
            'extends' => '_layouts.single-insight',
            'author' => 'Centrisign Digital',
            'sort' => '-date',
            'path' => 'insights/{slug}',
            'items' => function () use($context, $apiUrl, $apiToken, $assetUrl) {
                $posts = json_decode(file_get_contents($apiUrl . "/api/collections/get/blog?sort[_created]=1&token=$apiToken",'r', $context));

                return collect($posts->entries)->map(function ($post) use ($assetUrl) {
                    return getPostStructure($post, $assetUrl);
                });
            },
        ],
    ],

    'getFeaturedPost' => function($page) use($apiUrl, $apiToken, $assetUrl) {
        $featured = json_decode(file_get_contents("$apiUrl/api/collections/get/blog?filter[featured]=1&token=$apiToken"));

        if (isset($featured->entries[0])) {
            return getPostStructure($featured->entries[0], $assetUrl);
        } else {
            return [];
        }
    },

    'getPinnedPosts' => function($page) use($apiUrl, $apiToken, $assetUrl) {
        $featured = json_decode(file_get_contents("$apiUrl/api/collections/get/blog?filter[pinned]=1&token=$apiToken"));

        return collect($featured->entries)->map(function ($post) use ($assetUrl) {
            return getPostStructure($post, $assetUrl);
        });
    },
];
