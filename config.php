<?php

return [
    'production' => false,
    'baseUrl' => '',
    'siteName' => 'Centrisign Digital | Enterprise Software Development, Design & Consulting',
    'siteDescription' => 'Centrisign Digital is an innovative and reliable Enterprise Software Development, Design & Consulting provider in the Kenyan and african market. We have vast experience in the Retail, E-commerce and Payments Industry.',

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

    'collections' => [
        'case_studies' => [
            'path' => 'our-work/{filename}',
        ],
        'posts' => [
            'extends' => '_layouts.insights',
            'path' => 'insights/{slug}',
            'items' => function () {
                $posts = json_decode(file_get_contents(env('API_URL') . '/rest/posts?api_key=' . env('API_KEY'),'r'));

                return collect($posts)->map(function ($post) {
                    return [
                        'title' => $post->title,
                        'slug' => $post->slug,
                        'content' => $post->body,
                        'excerpt' => $post->excerpt,
                        'featured_image' => env('API_URL') . $post->featured_image,
                        'featured_image_caption' => $post->featured_image_caption,
                        'publish_date' => $post->publish_date,
                        'meta' => [
                            'meta_description' => $post->meta->meta_description,
                            'opengraph_title' => $post->meta->opengraph_title,
                            'opengraph_description' => $post->meta->opengraph_description,
                            'opengraph_image' => $post->meta->opengraph_image,
                            'opengraph_image_width' => $post->meta->opengraph_image_width,
                            'opengraph_image_height' => $post->meta->opengraph_image_height,
                            'twitter_title' => $post->meta->twitter_title,
                            'twitter_description' => $post->meta->twitter_description,
                            'twitter_image' => $post->meta->twitter_image,
                        ],
                    ];
                });
            },
        ],
        'tags' => [
            'items' => function () {
                $tags = json_decode(file_get_contents(env('API_URL') . '/rest/tags?api_key=' . env('API_KEY')));

                return collect($tags)->map(function ($tag) {
                    return [
                        'name' => $tag->name,
                        'slug' => $tag->slug,
                    ];
                });
            },
        ],
    ],
];
